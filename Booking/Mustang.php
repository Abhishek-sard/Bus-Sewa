<?php
$servername = "localhost";
$username = "root"; // Change if needed
$password = "";
$database = "BUS_SEWA"; // Your database name

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert booking
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['bookSeats'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $seats = $_POST['selectedSeats'];
    $booking_date = $_POST['booking_date'];  // New Date Field
    $booking_time = $_POST['booking_time'];  // New Time Field

    $total_price = count(explode(',', $seats)) * 1200;

    $sql = "INSERT INTO bookings (name, email, phone, seats, total_price, booking_date, booking_time) 
            VALUES ('$name', '$email', '$phone', '$seats', $total_price, '$booking_date', '$booking_time')";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Booking Successful!'); window.location.reload();</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}

// Delete booking
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $conn->query("DELETE FROM bookings WHERE id=$id");
    echo "<script>window.location='Bihar.php';</script>";
}

// Fetch bookings
$result = $conn->query("SELECT * FROM bookings");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Ticket</title>
    <style>
        .bus-layout {
            display: grid;
            grid-template-columns: repeat(4, 60px);
            gap: 10px;
            margin: 20px 0;
        }

        .seat {
            width: 50px;
            height: 50px;
            text-align: center;
            line-height: 50px;
            border-radius: 5px;
            cursor: pointer;
        }

        .available {
            background-color: green;
            color: white;
        }

        .booked {
            background-color: red;
            color: white;
            pointer-events: none;
        }

        .selected {
            background-color: blue !important;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table,
        th,
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }

        .delete-btn {
            background-color: red;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <h2>Book Your Ticket</h2>
    <form id="bookingForm" method="POST">
        <label>Full Name:</label>
        <input type="text" name="name" required>
        <label>Email:</label>
        <input type="email" name="email" required>
        <label>Phone:</label>
        <input type="text" name="phone" required>

        <label>Booking Date:</label>
        <input type="date" name="booking_date" required>

        <label>Booking Time:</label>
        <input type="time" name="booking_time" required>

        <h3>Select Your Seat:</h3>
        <div class="bus-layout">
            <?php
            $seats = ["A1", "A2", "A3", "A4", "B1", "B2", "B3", "B4", "C1", "C2", "C3", "C4"];
            foreach ($seats as $seat) {
                $status = "available";
                $seatCheck = $conn->query("SELECT * FROM bookings WHERE FIND_IN_SET('$seat', seats)");
                if ($seatCheck->num_rows > 0) {
                    $status = "booked";
                }
                echo "<div class='seat $status' data-seat='$seat'>$seat</div>";
            }
            ?>
        </div>

        <p><strong>Price per seat:</strong> ₹1200</p>
        <p><strong>Total Price:</strong> ₹<span id="totalPrice">0</span></p>

        <input type="hidden" name="selectedSeats" id="selectedSeats" value="">
        <button type="submit" name="bookSeats">Confirm Booking</button>
    </form>

    <h3>Booked Tickets</h3>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Seats</th>
            <th>Total Price</th>
            <th>Booking Date</th>
            <!-- <th>Booking Time</th> -->
            <th>Actions</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['phone']; ?></td>
                <td><?php echo $row['seats']; ?></td>
                <td>₹<?php echo $row['total_price']; ?></td>
                <td><?php echo $row['booking_date']; ?></td>
                <!-- <td><?php echo $row['booking_time']; ?></td> -->
                <td>
                    <a href="booking.php?delete=<?php echo $row['id']; ?>" class="delete-btn">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </table>

    <script>
        let selectedSeats = [];
        const seats = document.querySelectorAll('.seat.available');
        const totalPriceEl = document.getElementById('totalPrice');
        const selectedSeatsInput = document.getElementById('selectedSeats');

        seats.forEach(seat => {
            seat.addEventListener('click', () => {
                let seatNumber = seat.getAttribute('data-seat');
                if (selectedSeats.includes(seatNumber)) {
                    selectedSeats = selectedSeats.filter(s => s !== seatNumber);
                    seat.classList.remove('selected');
                } else {
                    selectedSeats.push(seatNumber);
                    seat.classList.add('selected');
                }
                totalPriceEl.innerText = selectedSeats.length * 1200;
                selectedSeatsInput.value = selectedSeats.join(',');
            });
        });

        document.getElementById("bookingForm").addEventListener("submit", function(event) {
            if (selectedSeats.length === 0) {
                alert("Please select at least one seat!");
                event.preventDefault();
            }
        });
    </script>
</body>

</html>