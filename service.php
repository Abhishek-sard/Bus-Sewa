<?php
$siteName = "Sajilo Ticket";
$services = [
    ["title" => "Bus Ticket Booking", "description" => "Easily book bus tickets for your preferred routes with real-time seat availability."],
    ["title" => "Van Ticket Booking", "description" => "Reserve train tickets hassle-free and enjoy a smooth journey."],
    ["title" => "Bike Booking", "description" => "Compare and book flights at the best prices for your domestic and international trips."],
    ["title" => "24/7 Customer Support", "description" => "Our dedicated support team is available around the clock to assist you."],
    ["title" => "Secure Payment", "description" => "Multiple secure payment options for a hassle-free checkout experience."]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services - <?php echo $siteName; ?></title>
    <link rel="stylesheet" href="css/service.css">
</head>

<body>
    <header>
        <h1>Our Services</h1>
        <p>Explore the range of services we provide to make your travel smooth and convenient.</p>
    </header>

    <main>
        <section class="service-list">
            <?php foreach ($services as $service): ?>
                <div class="service-item">
                    <h2><?php echo $service["title"]; ?></h2>
                    <p><?php echo $service["description"]; ?></p>
                </div>
            <?php endforeach; ?>
        </section>
    </main>

    <footer class="site-footer">
        <p>&copy; 2025 <?php echo $siteName; ?>. All Rights Reserved.</p>
    </footer>
</body>

</html>
