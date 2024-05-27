 function tampilNavbar(params) {
     const navbarNav = document.querySelector('.hero-navbar .hero-navbar-nav')
     document.querySelector('.hero-navbar-menu').onclick = () => {
         navbarNav.classList.toggle('active')
     }
 }

 function tampilCart(params) {
     const navbarCart = document.querySelector('.navbar-sidebar')
     document.querySelector('.nav-shop-cart').onclick = () => {
        navbarCart.classList.toggle('active')
     }
 }