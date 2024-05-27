<?php
include 'db.php';
include 'template.php';

// Check if a session is not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// If the user clicked the add to cart button on the product page, we can check for the form data
if (isset($_POST['id_items'], $_POST['stock_items']) && is_numeric($_POST['id_items']) && is_numeric($_POST['stock_items'])) {
    // Set the post variables so we easily identify them, also make sure they are integer
    $product_id = (int)$_POST['id_items'];
    $quantity = (int)$_POST['stock_items'];

    // Prepare the SQL statement, we are checking if the product exists in our database
    $stmt = $koneksi->prepare('SELECT * FROM products WHERE id_items = ?');
    $stmt->bind_param('i', $product_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $product = $result->fetch_assoc();

    // Check if the product exists (array is not empty)
    if ($product && $quantity > 0) {
        // Product exists in the database, now we can create/update the session variable for the cart
        if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
            if (array_key_exists($product_id, $_SESSION['cart'])) {
                // Product exists in the cart, so just update the quantity
                $_SESSION['cart'][$product_id] += $quantity;
            } else {
                // Product is not in the cart, so add it
                $_SESSION['cart'][$product_id] = $quantity;
            }
        } else {
            // There are no products in the cart, this will add the first product to the cart
            $_SESSION['cart'] = array($product_id => $quantity);
        }
    }
    // Prevent form resubmission...
    header('Location: index.php?page=cart');
    exit;
}

// Remove product from cart, check for the URL param "remove", this is the product id, make sure it's a number and check if it's in the cart
if (isset($_GET['remove']) && is_numeric($_GET['remove']) && isset($_SESSION['cart']) && isset($_SESSION['cart'][$_GET['remove']])) {
    // Remove the product from the shopping cart
    unset($_SESSION['cart'][$_GET['remove']]);
}

// Update product quantities in the cart if the user clicks the "Update" button on the shopping cart page
if (isset($_POST['update']) && isset($_SESSION['cart'])) {
    // Loop through the post data so we can update the quantities for every product in the cart
    foreach ($_POST as $k => $v) {
        if (strpos($k, 'stock_items-') !== false && is_numeric($v)) {
            $id = str_replace('stock_items-', '', $k);
            $quantity = (int)$v;
            // Always do checks and validation
            if (is_numeric($id) && isset($_SESSION['cart'][$id]) && $quantity > 0) {
                // Update new quantity
                $_SESSION['cart'][$id] = $quantity;
            }
        }
    }
    // Prevent form resubmission...
    header('Location: index.php?page=cart');
    exit;
}

// Send the user to the place order page if they click the Place Order button, also the cart should not be empty
if (isset($_POST['placeorder']) && isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    header('Location: index.php?page=placeorder');
    exit;
}

// Check the session variable for products in the cart
$products_in_cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
$products = array();
$subtotal = 0.00;

// If there are products in the cart
if ($products_in_cart) {
    // There are products in the cart, so we need to select those products from the database
    // Products in the cart array to question mark string array, we need the SQL statement to include IN (?,?,?,...etc)
    $array_to_question_marks = implode(',', array_fill(0, count($products_in_cart), '?'));
    $stmt = $koneksi->prepare('SELECT * FROM products WHERE id_items IN (' . $array_to_question_marks . ')');

    // Create the types string for bind_param
    $types = str_repeat('i', count($products_in_cart));
    $stmt->bind_param($types, ...array_keys($products_in_cart));
    $stmt->execute();
    $result = $stmt->get_result();

    // Fetch the products from the database and return the result as an array
    while ($row = $result->fetch_assoc()) {
        $products[] = $row;
    }

    // Calculate the subtotal
    foreach ($products as $product) {
        $subtotal += (float)$product['price_items'] * (int)$products_in_cart[$product['id_items']];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="custom.css" />
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="cart.css"/>
</head>
<body>
    <!--NAVBAR BEGIN-->
    <?php navbarShop('Cart'); ?>
    <!--NAVBAR END-->
    <div class="cart content-wrapper">
        <h1>Shopping Cart</h1>
        <form action="index.php?page=cart" method="post">
            <table>
                <thead>
                    <tr>
                        <td colspan="2">Product</td>
                        <td>Price</td>
                        <td>Quantity</td>
                        <td>Total</td>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($products)): ?>
                    <tr>
                        <td colspan="5" style="text-align:center;">You have no products added in your Shopping Cart</td>
                    </tr>
                    <?php else: ?>
                    <?php foreach ($products as $product): ?>
                    <tr>
                        <td class="img">
                            <a href="index.php?page=product&id_items=<?=$product['id_items']?>">
                                <img src="imgs/<?=$product['image_items']?>" width="50" height="50" alt="<?=$product['name_items']?>">
                            </a>
                        </td>
                        <td>
                            <a href="index.php?page=product&id_items=<?=$product['id_items']?>"><?=$product['name_items']?></a>
                            <br>
                            <a href="index.php?page=cart&remove=<?=$product['id_items']?>" class="remove">Remove</a>
                        </td>
                        <td class="price">Rp <?=number_format($product['price_items'], 0, ',', '.')?></td>
                        <td class="quantity">
                            <input type="number" name="stock_items-<?=$product['id_items']?>" value="<?=$products_in_cart[$product['id_items']]?>" min="1" max="<?=$product['stock_items']?>" placeholder="Quantity" required>
                        </td>
                        <td class="price">Rp <?=number_format($product['price_items'] * $products_in_cart[$product['id_items']], 0, ',', '.')?></td>
                    </tr>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
            <div class="subtotal">
                <span class="text">Subtotal</span>
                <span class="price">Rp <?=number_format($subtotal, 0, ',', '.')?></span>
            </div>
            <div class="buttons">
                <input type="submit" value="Update" name="update">
                <input type="submit" value="Place Order" name="placeorder">
            </div>
        </form>
    </div>
    <?=footer()?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
