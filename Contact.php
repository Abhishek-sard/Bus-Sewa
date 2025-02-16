<?php
$siteName = "Sajilo Ticket";
$companyEmail = "support@sajiloticket.com";
$companyPhone = "+977-123-456789";
$companyAddress = "Sunsari, Nepal";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - <?php echo $siteName; ?></title>
    <link rel="stylesheet" href="css/Contact.css">
</head>

<body>
    <header>
        <h1>Contact Us</h1>
        <p>We’d love to hear from you! Get in touch with us for any inquiries or support.</p>
    </header>

    <main>
        <section class="contact-info">
            <h2>Our Contact Details</h2>
            <p><strong>Email:</strong> <?php echo $companyEmail; ?></p>
            <p><strong>Phone:</strong> <?php echo $companyPhone; ?></p>
            <p><strong>Address:</strong> <?php echo $companyAddress; ?></p>
        </section>

        <section class="contact-form">
            <h2>Send Us a Message</h2>
            <form action="process_contact.php" method="POST">
                <label for="name">Your Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Your Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Your Message:</label>
                <textarea id="message" name="message" rows="5" required></textarea>

                <button type="submit">Send Message</button>
            </form>
        </section>
    </main>

    <footer class="site-footer">
        <p>&copy; 2025 <?php echo $siteName; ?>. All Rights Reserved.</p>
    </footer>
</body>

</html>
