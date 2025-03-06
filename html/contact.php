<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us - YONOX</title>
    <link rel="stylesheet" href="../css/contact.css" />
    <link rel="stylesheet" href="../css/styles.css" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/fontawesome.min.css" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" />
    <script src="../Jquery/jquery3,7,1.js"></script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body>
    <section id="headercon">
        <a href="#"><img src="../img/logo.png" class="logo" alt="" /></a>
        <div class="navbar">
            <ul>
                <li><a href="index.php"> Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="shopping.php">Shopping</a></li>
                <li><a class="act" href="contact.php">Contact Us</a></li>
                <li>
                    <a href="purchase.php"><i class="fas fa-shopping-cart" data-count="0"></i>
                        <span class="cart-count">0</span></a>
                </li>
            </ul>
        </div>
    </section>
    <section id="contact">
        <div class="container">
            <h1>Contact Us</h1>
            <div class="contact-content">
                <div class="contact-info">
                    <h2>Contact Information</h2>
                    <p><i class="fas fa-map-marker-alt"></i> <strong>Address:</strong> Tissemsilt Bourdj Bounaama</p>
                    <p><i class="fas fa-phone"></i> <strong>Phone:</strong> +213 06########</p>
                    <p><i class="fas fa-envelope"></i> <strong>Email:</strong> contact@yonox.com</p>
                    <p><i class="fas fa-clock"></i> <strong>Hours:</strong> 9:00 - 18:00, Mon - Wed</p>
                </div>
                <form id="contact-form">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required />
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required />
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" required></textarea>
                    <button type="submit" class="btn">Send Message</button>
                </form>
            </div>
            <div id="form-messages"></div>
            <div class="social-media">
                <h2>Follow Us</h2>
                <div class="icons">
                    <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.discord.com" target="_blank"><i class="fa-brands fa-discord"></i></a>
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
                <p>YONOX is your one-stop shop for all your shopping needs. We offer a wide range of products at the best prices.</p>
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
    <script src="../js/gsap.min.js"></script>
</body>

</html>