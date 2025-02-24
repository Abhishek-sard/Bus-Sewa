<?php
// Database connection
$servername = "localhost";
$username = "root"; // Change this if needed
$password = "";
$database = "BUS_SEWA"; // Your database name

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch total bookings
$totalBookingsQuery = "SELECT COUNT(*) AS total FROM bookings";
$result = $conn->query($totalBookingsQuery);
$row = $result->fetch_assoc();
$totalBookings = $row['total'];

// Fetch bookings for each route
$totalBusBookingsQuery = "SELECT COUNT(*) AS total FROM bookings WHERE route = 'Bus'";
$result = $conn->query($totalBusBookingsQuery);
$row = $result->fetch_assoc();
$totalBusBookings = $row['total'];

$totalBasantapurBookingsQuery = "SELECT COUNT(*) AS total FROM bookings WHERE route = 'Basantapur'";
$result = $conn->query($totalBasantapurBookingsQuery);
$row = $result->fetch_assoc();
$totalBasantapurBookings = $row['total'];

$totalBiharBookingsQuery = "SELECT COUNT(*) AS total FROM bookings WHERE route = 'Bihar'";
$result = $conn->query($totalBiharBookingsQuery);
$row = $result->fetch_assoc();
$totalBiharBookings = $row['total'];

$totalBiratnagarBookingsQuery = "SELECT COUNT(*) AS total FROM bookings WHERE route = 'Biratnagar'";
$result = $conn->query($totalBiratnagarBookingsQuery);
$row = $result->fetch_assoc();
$totalBiratnagarBookings = $row['total'];

$conn->close();
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
                    <h3>Total Bus Bookings</h3>
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

            <!-- Back Button -->
            <div class="back-button">
                <a href="../home.php">
                    <button>Go Back</button>
                </a>
            </div>
        </div>
    </div>
</body>

</html>