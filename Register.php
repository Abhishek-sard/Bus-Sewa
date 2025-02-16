<?php
// Database connection
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'bus_sewa';
$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Add Driver
if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    
    $sql = "INSERT INTO drivers (name, email, phone) VALUES ('$name', '$email', '$phone')";
    $conn->query($sql);
}

// Delete Driver
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = "DELETE FROM drivers WHERE id=$id";
    $conn->query($sql);
}

// Fetch Drivers
$drivers = $conn->query("SELECT * FROM drivers");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driver Registration</title>
    <link rel="stylesheet" href="css/Register.css">
</head>
<body>
    <h2>Driver Registration</h2>
    <form method="POST">
        <input type="text" name="name" placeholder="Enter Name" required>
        <input type="email" name="email" placeholder="Enter Email" required>
        <input type="text" name="phone" placeholder="Enter Phone" required>
        <button type="submit" name="register">Register</button>
    </form>
    
    <h2>Registered Drivers</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Actions</th>
        </tr>
        <?php while ($row = $drivers->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['phone']; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                <a href="register.php?delete=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
