<?php
// You can include any necessary PHP logic here
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="css/home.css">
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="logo">
                <a href="#"><span>S</span>ajilo <span>T</span>icket </a>
            </div>
            <ul class="nav-links">
                <li><a href="#">Home</a></li>
                <li><a href="About.php">AboutUs</a></li>
                <li><a href="service.php">Services</a></li>
                <li><a href="Contact.php">Contact</a></li>
                <li><a href="Register.php">Register</a></li>
            </ul>
            <div class="login-btn">
                <a href="#">Logout</a>
            </div>
        </nav>
    </header>

    <main>
        <div class="content-wrapper">
            <!-- Text Content Div -->
            <div class="text-content">
                <h1>Welcome to Sajilo Ticket</h1>
                <p>Your One-Stop Solution for Easy and Convenient Ticket Booking. Explore hassle-free travel with Sajilo Ticket! Book your tickets anytime, anywhere.</p>
            </div>

            <!-- Image Slider Div -->
            <div class="image-slider">
                <div class="slider-container">
                    <img src="images/bus6.jpg" alt="Image 1" class="slide">
                    <img src="images/bus5.jpg" alt="Image 2" class="slide">
                    <img src="images/bus4.jpg" alt="Image 3" class="slide">
                </div>
            </div>
        </div>

        <!-- Cart Section -->
        <h1>Services We Provide</h1>

        <div class="cart-section">
            <div class="cart-item">
                <img src="images/bangalure.jpg" alt="Item 1" class="cart-image">
                <p class="item-text">Item 1 Description</p>
                <button class="add-to-cart-btn"> Add to Cart</button>
            </div>
            <div class="cart-item">
                <img src="images/basantapur.jpg" alt="Item 2" class="cart-image">
                <p class="item-text">Item 2 Description</p>
                <button class="add-to-cart-btn">Add to Cart</button>
            </div>
            <div class="cart-item">
                <img src="images/bihar.jpg" alt="Item 3" class="cart-image">
                <p class="item-text">Item 3 Description</p>
                <button class="add-to-cart-btn">Add to Cart</button>
            </div>
            <div class="cart-item">
                <img src="images/biratnagar.jpg" alt="Item 4" class="cart-image">
                <p class="item-text">Item 4 Description</p>
                <button class="add-to-cart-btn">Add to Cart</button>
            </div>
            <div class="cart-item">
                <img src="images/chennai.jpg" alt="Item 5" class="cart-image">
                <p class="item-text">Item 5 Description</p>
                <button class="add-to-cart-btn">Add to Cart</button>
            </div>
            <div class="cart-item">
                <img src="images/chitwan.jpg" alt="Item 6" class="cart-image">
                <p class="item-text">Item 6 Description</p>
                <button class="add-to-cart-btn">Add to Cart</button>
            </div>
            <div class="cart-item">
                <img src="images/dheli.jpg" alt="Item 7" class="cart-image">
                <p class="item-text">Item 7 Description</p>
                <button class="add-to-cart-btn">Add to Cart</button>
            </div>
            <div class="cart-item">
                <img src="images/itahari.jpg" alt="Item 8" class="cart-image">
                <p class="item-text">Item 8 Description</p>
                <button class="add-to-cart-btn">Add to Cart</button>
            </div>
            <div class="cart-item">
                <img src="images/kerala.jpg" alt="Item 9" class="cart-image">
                <p class="item-text">Item 9 Description</p>
                <button class="add-to-cart-btn">Add to Cart</button>
            </div>
            <div class="cart-item">
                <img src="images/mumbai.jpg" alt="Item 10" class="cart-image">
                <p class="item-text">Item 10 Description</p>
                <button class="add-to-cart-btn">Add to Cart</button>
            </div>
            <div class="cart-item">
                <img src="images/pokhara.jpg" alt="Item 11" class="cart-image">
                <p class="item-text">Item 11 Description</p>
                <button class="add-to-cart-btn">Add to Cart</button>
            </div>
            <div class="cart-item">
                <img src="images/sikkim.jpg" alt="Item 12" class="cart-image">
                <p class="item-text">Item 12 Description</p>
                <button class="add-to-cart-btn">Add to Cart</button>
            </div>
            <div class="cart-item">
                <img src="images/pathibhara.jpg" alt="Item 13" class="cart-image">
                <p class="item-text">Item 13 Description</p>
                <button class="add-to-cart-btn">Add to Cart</button>
            </div>
            <div class="cart-item">
                <img src="images/kathmandu.jpg" alt="Item 14" class="cart-image">
                <p class="item-text">Item 14 Description</p>
                <button class="add-to-cart-btn">Add to Cart</button>
            </div>
            <div class="cart-item">
                <img src="images/mustang.jpg" alt="Item 15" class="cart-image">
                <p class="item-text">Item 15 Description</p>
                <button class="add-to-cart-btn">Add to Cart</button>
            </div>
        </div>
    </main>


    <footer class="site-footer">
        <div class="footer-container">
            <div class="footer-about">
                <h3>Sajilo Ticket</h3>
                <p>Your trusted partner for hassle-free ticket booking. Explore the world with confidence and convenience!</p>
            </div>
            <div class="footer-links">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Register</a></li>
                </ul>
            </div>
            <div class="footer-contact">
                <h3>Contact Us</h3>
                <p>Email: support@sajiloticket.com</p>
                <p>Phone: +977-123-456789</p>
                <p>Address: Sunsari, Nepal</p>
            </div>
            <div class="footer-social">
                <h3>Follow Us</h3>
                <div class="social-icons">
                    <a href="#"><img src="images/facebook.jpg" alt="Facebook"></a>
                    <a href="#"><img src="images/twitter.jpg" alt="Twitter"></a>
                    <a href="#"><img src="images/insta.jpg" alt="Instagram"></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 Sajilo Ticket. All Rights Reserved.</p>
        </div>
    </footer>


    <script>
        let currentSlide = 0;
        const slides = document.querySelectorAll('.slide');
        const totalSlides = slides.length;

        function showNextSlide() {
            slides[currentSlide].style.display = 'none'; // Hide current slide
            currentSlide = (currentSlide + 1) % totalSlides; // Move to the next slide, looping back to the first
            slides[currentSlide].style.display = 'block'; // Show the new slide
        }

        // Set the first slide to be visible initially
        slides[currentSlide].style.display = 'block';

        // Change slide every 3 seconds
        setInterval(showNextSlide, 3000);
    </script>
</body>

</html>