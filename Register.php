<?php include 'navbar.php'; ?>
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

// Add User with Role
if (isset($_POST['register'])) {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $role = $conn->real_escape_string($_POST['role']); 

    $sql = "INSERT INTO users (name, email, phone, role) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $name, $email, $phone, $role);

    if ($stmt->execute()) {
        echo "<script>alert('User registered successfully as $role');</script>";
    } else {
        echo "Error: " . $conn->error;
    }
    $stmt->close();
}

// Delete User
if (isset($_GET['delete'])) {
    $id = $conn->real_escape_string($_GET['delete']);
    $sql = "DELETE FROM users WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
}

// Fetch Users
$users = $conn->query("SELECT * FROM users");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" href="css/Register.css">
    <link rel="stylesheet" href="css/home.css">
</head>
<body>
    <div class="container">
        <h2>User Registration</h2>
        <form method="POST">
            <input type="text" name="name" placeholder="Enter Name" required>
            <input type="email" name="email" placeholder="Enter Email" required>
            <input type="text" name="phone" placeholder="Enter Phone" required>

            <!-- Role Selection -->
            <label>Select Role:</label>
            <div class="role-selection">
                <input type="radio" name="role" value="Driver" required> Driver
                <input type="radio" name="role" value="User"> User
                <input type="radio" name="role" value="Admin"> Admin
            </div>

            <button type="submit" name="register">Register</button>
        </form>

        <h2>Registered Users</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Role</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $users->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td><?php echo $row['role']; ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $row['id']; ?>" class="edit-btn">Edit</a>
                            <a href="register.php?delete=<?php echo $row['id']; ?>" class="delete-btn" onclick="return confirm('Are you sure?')">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
