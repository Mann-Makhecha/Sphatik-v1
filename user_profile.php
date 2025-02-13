<?php
session_start();

// Database connection (Update with your credentials)
$pdo = new PDO("mysql:host=localhost;dbname=sphatik_db", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Fetch user details from the database (assuming user ID is stored in session)
$user_id = $_SESSION['user_id'] ?? 1; // Replace with actual session variable
$stmt = $pdo->prepare("SELECT name, email, phone, address, joined FROM users WHERE user_id = ?");
$stmt->execute([$user_id]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

// Dummy order history (Replace with actual database data if needed)
$orders = [
    ["order_id" => "ORD12345", "date" => "2025-02-10", "status" => "Delivered", "amount" => "$120.00"],
    ["order_id" => "ORD67890", "date" => "2025-01-25", "status" => "Shipped", "amount" => "$45.50"],
    ["order_id" => "ORD54321", "date" => "2025-01-15", "status" => "Pending", "amount" => "$78.99"]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="./css/profile_style.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<?php include 'includes/header.php'; ?>

<section class="profile-container">
    <div class="profile-header">
        <h2>Welcome, <?php echo htmlspecialchars($user['name']); ?></h2>
        <p>Member since: <?php echo htmlspecialchars($user['joined']); ?></p>
    </div>

    <div class="profile-content">
        <div class="profile-info">
            <h3>Account Information</h3>
            <p><strong>Email:</strong> <?php echo htmlspecialchars($user['email']); ?></p>
            <p><strong>Phone:</strong> <?php echo htmlspecialchars($user['phone']); ?></p>
            <p><strong>Address:</strong> <?php echo htmlspecialchars($user['address']); ?></p>
        </div>

        <div class="account-settings">
            <h3>Account Settings</h3>
            <ul>
                <li><a href="auth/editprofile.php">Edit Profile</a></li>
                <li><a href="../auth/update_password.php">Change Password</a></li>
                <li><a href="#">Manage Addresses</a></li>
                <li><a href="#">Payment Methods</a></li>
                <li><a href="#">Logout</a></li>
            </ul>
        </div>
    </div>
</section>

</body>
</html>
