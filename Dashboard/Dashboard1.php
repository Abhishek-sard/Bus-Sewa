<?php
// Example data (in a real scenario, this data would come from your database)
$totalBookings = 100;  // Example total bookings
$totalBusBookings = 40;  // Example bus bookings
$totalBasantapurBookings = 30;  // Example Basantapur route bookings
$totalBiharBookings = 20;  // Example Bihar route bookings
$totalBiratnagarBookings = 10;  // Example Biratnagar route bookings
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Sajilo Ticket</title>
    <link rel="stylesheet" href="css/Dashboard.css">
</head>

<body>
    <div class="dashboard-container">
        <!-- Sidebar -->
        <div class="sidebar">
            <h2>Dashboard</h2>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Driver</a></li>
                <li><a href="#">User</a></li>
                <li><a href="#">Admin</a></li>
               
            </ul>
            <!-- <p>Abhishek Sardar</p> -->
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <h1>Welcome to the Dashboard</h1>

            <!-- Dashboard Stats -->
            <div class="dashboard-stats">
                <div class="stat-card">
                    <h3>Total Bookings</h3>
                    <p><?php echo $totalBookings; ?></p>
                </div>
                <div class="stat-card">
                    <h3>Bus Bookings</h3>
                    <p><?php echo $totalBusBookings; ?></p>
                </div>
                <div class="stat-card">
                    <h3>Basantapur Bookings</h3>
                    <p><?php echo $totalBasantapurBookings; ?></p>
                </div>
                <div class="stat-card">
                    <h3>Bihar Bookings</h3>
                    <p><?php echo $totalBiharBookings; ?></p>
                </div>
                <div class="stat-card">
                    <h3>Biratnagar Bookings</h3>
                    <p><?php echo $totalBiratnagarBookings; ?></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
