<?php
// Initialize dynamic content variables

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - <?php echo $siteName; ?></title>
    <link rel="stylesheet" href="css/About.css"> <!-- Adjust path based on your folder structure -->
</head>

<body>
    <main>
        <!-- Company Overview -->
        <section class="company-overview">
            <h1>About <?php echo $siteName; ?></h1>
            <p>We provide a simple and seamless ticket booking experience to make your travel hassle-free. Our goal is to ensure you have a smooth journey from start to finish.</p>
        </section>

        <!-- Mission & Vision -->
        <section class="mission-vision">
            <h2>Our Mission</h2>
            <p><?php echo $missionStatement; ?></p>

            <h2>Our Vision</h2>
            <p><?php echo $visionStatement; ?></p>
        </section>

        <!-- Core Values -->
        <section class="core-values">
            <h2>Our Core Values</h2>
            <ul>
                <li>Customer Satisfaction</li>
                <li>Innovation</li>
                <li>Reliability</li>
                <li>Transparency</li>
            </ul>
        </section>

        <!-- Meet the Team -->
        <section class="team-section">
            <h2>Meet Our Team</h2>
            <div class="team-container">
                <?php foreach ($teamMembers as $member): ?>
                    <div class="team-member">
                        <h3><?php echo $member['name']; ?></h3>
                        <p><strong><?php echo $member['role']; ?></strong></p>
                        <p><?php echo $member['bio']; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- Testimonials -->
        <section class="testimonials">
            <h2>What Our Clients Say</h2>
            <blockquote>
                "Sajilo Ticket made my travel planning so easy! The process was seamless, and the team was incredibly helpful."
            </blockquote>
            <p>- Emily Roberts</p>
        </section>

        <!-- Contact Information -->
        <section class="contact-info">
            <h2>Contact Us</h2>
            <p>Email: support@sajiloticket.com</p>
            <p>Phone: +977-123-456789</p>
            <p>Address: Sunsari, Nepal</p>
        </section>
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
                    <a href="#"><img src="images/facebook-icon.png" alt="Facebook"></a>
                    <a href="#"><img src="images/twitter-icon.png" alt="Twitter"></a>
                    <a href="#"><img src="images/instagram-icon.png" alt="Instagram"></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 Sajilo Ticket. All Rights Reserved.</p>
            <p>Abhishek sardar</p>
        </div>
    </footer>
</body>

</html>