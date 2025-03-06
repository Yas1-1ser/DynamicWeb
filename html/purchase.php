<?php
include '../php/db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Purchase - YONOX</title>
    <link rel="stylesheet" href="../css/styles.css" />
    <link rel="stylesheet" href="../css/purchase.css" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/fontawesome.min.css" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <script src="../Jquery/jquery3,7,1.js"></script>
</head>

<body>
    <section id="headercon">
        <a href="#"><img src="../img/logo.png" class="logo" alt="" /></a>
        <div class="navbar">
            <ul>
                <li><a href="index.php"> Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="shopping.php">Shopping</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li>
                    <a href="purchase.php"><i class="fas fa-shopping-cart" data-count="0"></i>
                        <span class="cart-count">0</span></a>
                </li>
            </ul>
        </div>
    </section>
    <section id="purchase" class="secp1">
        <div class="container">
            <h1>Purchase</h1>
            <h2>Cart Products</h2>
            <div id="cart-products" class="cart-products">
                <!-- Cart products will be dynamically inserted here by JavaScript -->
            </div>
            <p id="total-sum" class="total-sum">Total: $0.00</p>
            <button id="checkout" class="btn">Checkout</button>
            <button id="remove-all" class="btn">Remove All</button>
        </div>
    </section>
    <footer class="secp1">
        <div class="footer-content">
            <div class="colu">
                <h4>Contact</h4>
                <p><strong>Address: </strong>Tissemsilt Bourdj Bounaama</p>
                <p><strong>Phone: </strong>+213 06########</p>
                <p><strong>Hours: </strong> 9:00 - 18:00 , Mon - Wend</p>
            </div>
            <div class="colu">
                <h4>About Us</h4>
                <p>
                    YONOX is your one-stop shop for all your shopping needs. We offer a
                    wide range of products at the best prices.
                </p>
            </div>
            <div class="colu">
                <h4>Customer Service</h4>
                <ul>
                    <li><a href="privacy.php">Privacy Policy</a></li>
                    <li><a href="../footerlink/faq.php">FAQ</a></li>
                    <li><a href="../footerlink/lopis.php">Liste product</a></li>
                </ul>
            </div>
            <div class="colu">
                <h4>Follow Us</h4>
                <div class="follow">
                    <div class="icon">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-discord"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <p>©️2025 YONOX - Web Dev</p>
        </div>
    </footer>
    <script src="../js/purchase.js"></script>
</body>

</html>