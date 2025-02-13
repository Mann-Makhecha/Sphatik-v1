<?php
session_start();
include 'db_connect.php'; // Connect to your database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $service = $_POST['service'];
    $date = $_POST['date'];
    
    $sql = "INSERT INTO bookings (name, email, phone, service, booking_date, status) VALUES (?, ?, ?, ?, ?, 'pending')";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $name, $email, $phone, $service, $date);
    
    if ($stmt->execute()) {
        echo "<script>alert('Booking successful!'); window.location.href='salon_service.php';</script>";
    } else {
        echo "<script>alert('Error in booking. Try again.');</script>";
    }
    
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Service</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>
    
    <section class="booking-form">
        <h2>Book a Service</h2>
        <form method="post" action="salon_book.php">
            <label for="name">Name:</label>
            <input type="text" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" name="email" required>
            
            <label for="phone">Phone:</label>
            <input type="text" name="phone" required>
            
            <label for="service">Service:</label>
            <select name="service">
                <option value="Haircut">Haircut</option>
                <option value="Facial Treatment">Facial Treatment</option>
                <option value="Body Massage">Body Massage</option>
                <option value="Manicure & Pedicure">Manicure & Pedicure</option>
            </select>
            
            <label for="date">Preferred Date:</label>
            <input type="date" name="date" required>
            
            <button type="submit">Submit</button>
        </form>
    </section>
    
    <?php include 'includes/footer.php'; ?>
</body>
</html>
