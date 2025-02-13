<?php
// Start session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Painting Services</title>
    <link rel="stylesheet" href="./css/homepainting.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
<?php include 'includes/header.php'; ?>

    
    <div class="container">
        <h2>Our Painting Services</h2>
        <div class="service-list">
            <div class="service-card">
                <img src="./includes/images/interior.jpg" alt="Interior Painting">
                <div class="service-info">
                    <h3>Interior Painting</h3>
                    <p>Get a smooth, high-quality finish for your walls.</p>
                    <button class="book-btn">Book Now</button>
                </div>
            </div>
            <div class="service-card">
                <img src="./includes/images/exterior.jpg" alt="Exterior Painting">
                <div class="service-info">
                    <h3>Exterior Painting</h3>
                    <p>Weather-resistant paint to protect your home.</p>
                    <button class="book-btn">Book Now</button>
                </div>
            </div>
            <div class="service-card">
                <img src="./includes/images/text.jpg" alt="Texture Painting">
                <div class="service-info">
                    <h3>Texture Painting</h3>
                    <p>Creative textures to enhance your walls.</p>
                    <button class="book-btn">Book Now</button>
                </div>
            </div>
            <div class="service-card">
                <img src="./includes/images/wood.jpg" alt="Wood Painting">
                <div class="service-info">
                    <h3>Wood Painting</h3>
                    <p>Polishing & painting for wooden furniture.</p>
                    <button class="book-btn">Book Now</button>
                </div>
            </div>
            <div class="service-card">
                <img src="./includes/images/metal.jpg" alt="Metal Painting">
                <div class="service-info">
                    <h3>Metal Painting</h3>
                    <p>Rust-proof painting for metallic structures.</p>
                    <button class="book-btn">Book Now</button>
                </div>
            </div>
            <div class="service-card">
                <img src="./includes/images/waterproof.jpg" alt="Waterproof Coating">
                <div class="service-info">
                    <h3>Waterproof Coating</h3>
                    <p>Protect your walls from moisture and leakage.</p>
                    <button class="book-btn">Book Now</button>
                </div>
            </div>
        </div>
    </div>

    <div class="transparency-section">
        <h2>Complete Transparency</h2>
        <p>Digitally enabled services for a hassle-free painting experience.</p>
        <img src="images/painting-process.jpg" alt="Painting Process" class="transparency-img">
    </div>

    <footer>
        &copy; 2025 Home Painting Services. All Rights Reserved.
    </footer>

</body>
</html>