<?php
include '../php/db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Shopping - YONOX</title>
    <link rel="stylesheet" href="../css/styles.css" />
    <link rel="stylesheet" href="../css/shop.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <script src="../Jquery/jquery3,7,1.js"></script>
</head>

<body>
    <section id="headercon">
        <a href="#"><img src="../img/logo.png" class="logo" alt="YONOX Logo" /></a>
        <div class="navbar">
            <ul>
                <li><a href="index.php"> Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a class="act" href="shopping.php">Shopping</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li>
                    <a href="purchase.php"><i class="fas fa-shopping-cart" data-count="0"></i>
                        <span class="cart-count">0</span></a>
                </li>
            </ul>
        </div>
    </section>
    <section id="shopping" class="secp1 center-text">
        <div class="containershop">
            <h1>Shopping</h1>
            <p>
                Explore our wide range of computer accessories and find the perfect
                products for your needs.
            </p>
            <div class="shopping-content">
                <div class="filter">
                    <h2>Filter by Category</h2>
                    <select id="filter">
                        <option value="all">All Categories</option>
                        <option value="keyboards">Keyboards</option>
                        <option value="mice">Mice</option>
                        <option value="monitors">Monitors</option>
                    </select>
                    <h2>Filter by Brand</h2>
                    <select id="brand-filter">
                        <option value="all">All Brands</option>
                    </select>
                </div>
                <div class="product-grid" id="product-grid"></div>
                <div id="loading-message" class="loading-message">Loading products...</div>
                <div id="error-message" class="error-message" style="display: none;">Failed to load products. Please try again later.</div>
            </div>
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
    <script src="../js/shopping.js"></script>
</body>

</html>