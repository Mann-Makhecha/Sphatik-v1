<?php
$servername = "localhost"; // Change if needed
$username = "root"; // Change if your DB has a username
$password = ""; // Change if your DB has a password
$dbname = "sphatik_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $address = htmlspecialchars($_POST['address']);
    $date = htmlspecialchars($_POST['date']);
    $message = htmlspecialchars($_POST['message']);

    // Insert into database
    $sql = "INSERT INTO bookings (name, email, phone, address, booking_date, message) 
            VALUES ('$name', '$email', '$phone', '$address', '$date', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
            alert('Submitted Successfully!');
            window.location.href='book_now.php';
        </script>";
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>
