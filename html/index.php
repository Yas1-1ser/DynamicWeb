<?php
include '../php/db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>YONOX - Your One-Stop Shop for Computer Accessories</title>
    <link rel="stylesheet" href="../css/styles.css" />
    <link rel="stylesheet" href="../css/home.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <script src="../Jquery/jquery3,7,1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js"></script>
</head>

<body>
    <section id="headercon">
        <a href="#"><img src="../img/logo.png" class="logo" alt="YONOX Logo" /></a>
        <div class="navbar">
            <ul>
                <li><a class="act" href="index.php">Home</a></li>
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
    <section id="home">
        <h1>Welcome to YONOX</h1>
        <h2>
            Your Ultimate Destination for Computer Accessories
        </h2>
        <h3>
            Discover the latest and greatest in computer accessories, designed to
            elevate your tech experience.
        </h3>
        <p>
            Shop with us for unbeatable prices, top-quality products, and
            exceptional customer service.
        </p>
        <button id="btn">Shop Now</button>
    </section>
    <section id="computer-accessories" class="secp1">
        <div class="cover">
            <img src="../img/img2.jpg" alt="Computer Accessories Cover" />
        </div>
        <div class="info">
            <h2>Computer Accessories</h2>
            <p>
                Explore our extensive collection of computer accessories, including
                keyboards, mice, monitors, and storage devices. Enhance your
                productivity and entertainment with our top-rated products.
            </p>
            <a href="shopping.php"><button id="shop-accessories-btn">Shop Accessories</button></a>
        </div>
    </section>

    <section id="why-choose-us" class="secp1">
        <div class="container">
            <h2>Why Choose YONOX?</h2>
            <ul>
                <?php
                $query = "SELECT * FROM why_choose_us";
                $result = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<li>';
                    echo '<i class="' . $row['icon'] . '"></i>';
                    echo '<h3>' . $row['title'] . '</h3>';
                    echo '<p>' . $row['description'] . '</p>';
                    echo '</li>';
                }
                ?>
            </ul>
        </div>
    </section>
    <section id="followers" class="secp1">
        <div class="container">
            <h2>Join Our Community</h2>
            <p>
                We are proud to have a growing community of followers who trust and
                support us.
            </p>
            <div class="followers-count">
                <div class="follower">
                    <i class="fab fa-facebook-f"></i>
                    <p>10K Followers</p>
                </div>
                <div class="follower">
                    <i class="fab fa-twitter"></i>
                    <p>8K Followers</p>
                </div>
                <div class="follower">
                    <i class="fab fa-instagram"></i>
                    <p>12K Followers</p>
                </div>
                <div class="follower">
                    <i class="fa-brands fa-discord"></i>
                    <p>5K Followers</p>
                </div>
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
                    <li><a href="../footerlink/faq.php">FAQ</a></li>
                    <li><a href="../footerlink/lopis.php">LOPIS</a></li>
                    <li><a href="privacy.php">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="colu">
                <h4>Follow Us</h4>
                <div class="follow">
                    <div class="icon">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fa-brands fa-discord"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <p>©️2025 YONOX - Web Dev</p>
        </div>
    </footer>
    <script src="../js/script.js"></script>

</body>

</html>