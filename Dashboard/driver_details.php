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

// Fetch user details (if needed, you can customize the query)
$userQuery = "SELECT name, email, phone FROM users WHERE role = 'Driver'";
$result = $conn->query($userQuery);
$users = [];

if ($result) {
    while ($row = $result->fetch_assoc()) {
        $users[] = $row;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details - Sajilo Ticket</title>
    <link rel="stylesheet" href="css/Dashboard.css">
    <link rel="stylesheet" href="css/user_details.css">
</head>

<body>
    <div class="dashboard-container">
        <!-- Sidebar -->
        <div class="sidebar">
            <h2>Dashboard</h2>
            <ul>
                <li><a href="../Dashboard/Dashboard1.php">Home</a></li>
                <li><a href="driver_details.php">Driver</a></li>
                <li><a href="user_details.php">User</a></li>
                <li><a href="admin_details.php">Admin</a></li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <h1>User Registration Details</h1>

            <!-- User Details Table -->
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?php echo isset($user['name']) ? htmlspecialchars($user['name']) : "Name not available"; ?></td>
                            <td><?php echo isset($user['email']) ? htmlspecialchars($user['email']) : "Email not available"; ?></td>
                            <td><?php echo isset($user['phone']) ? htmlspecialchars($user['phone']) : "Phone not available"; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <!-- Back Button -->
            <div class="back-button">
                <a href="../Dashboard/Dashboard1.php">
                    <button>Go Back</button>
                </a>
            </div>
        </div>
    </div>
</body>

</html>