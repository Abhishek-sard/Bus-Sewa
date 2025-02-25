<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "BUS_SEWA";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch total bookings
$totalBookings = 0;
$totalBookingsQuery = "SELECT COUNT(*) AS total FROM bookings";
$result = $conn->query($totalBookingsQuery);
if ($result) {
    $row = $result->fetch_assoc();
    $totalBookings = $row['total'];
}

// Fetch user counts based on roles
$roles = ['Driver', 'User', 'Admin'];
$roleCounts = [];

foreach ($roles as $role) {
    $stmt = $conn->prepare("SELECT COUNT(*) AS total FROM users WHERE role = ?");
    $stmt->bind_param("s", $role);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $roleCounts[$role] = $row['total'];
    $stmt->close();
}

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
                <li><a href="driver_details.php">Driver</a></li> <!-- Updated link -->
                <li><a href="user_details.php">User</a></li> <!-- Updated link -->
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
                    <h3>Registered Drivers</h3>
                    <p><?php echo $roleCounts['Driver'] ?? 0; ?></p>
                </div>
                <div class="stat-card">
                    <h3>Registered Users</h3>
                    <p><?php echo $roleCounts['User'] ?? 0; ?></p>
                </div>
                <div class="stat-card">
                    <h3>Registered Admins</h3>
                    <p><?php echo $roleCounts['Admin'] ?? 0; ?></p>
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
