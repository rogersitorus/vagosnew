<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body style="background-color: var(--bg);" class="login-body">
    <!-- NAVBAR SECTION -->
    <?php include('template.php');
        navbar();
    ?>
    <!-- NAVBAR SECTION SELESAI -->
    <section class="register-all">
        <section class="register-main">
            <header class="register-header">
                <img src="image/user (1).png" alt="">
                <h1>REGISTER</h1>
            </header>

            <main class="register-content">
                <form action="" method="get">
                    <div class="register-content-form">
                        <label for="firstName">First Name</label>
                        <input type="text" name="fName" id="fName" placeholder="First Name">
                    </div>
    
                    <div class="register-content-form">
                        <label for="lastName">Last Name</label>
                        <input type="text" name="lName" id="lName" placeholder="Last Name">
                    </div>
    
                    <div class="register-content-form">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" placeholder="Email">
                    </div>
    
                    <div class="register-content-form">
                        <label for="password">Password</label>
                        <input type="text" name="pass" id="pass" placeholder="Password">
                    </div>
                </form>
            </main>

            <div class="register-main-feature">
                <button>SUBMIT</button>
                <a href="login.php">Already Have An Account?</a>
            </div>
        </section>
    </section>
    <!-- FOOTER SECTION -->
    <?php 
        footer();
    ?>
    <!-- FOOTER SECTION SELESAI -->
    <script src="./script.js"></script>
</body>

</html>