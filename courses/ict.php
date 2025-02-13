<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ICT Course</title>
    <link rel="stylesheet" href="../css/ict_styles.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<?php include '../includes/header.php'; ?>
   
    <!-- Course Content -->
    <div class="course-container">
        <h2 class="course-title">Information and Communication Technology (ICT)</h2>

        <?php
            $topics = [
                ["title" => "Introduction to ICT", "desc" => "Definition, importance, and applications of ICT in modern society."],
                ["title" => "Computer Hardware & Software", "desc" => "Overview of input/output devices, system and application software."],
                ["title" => "Networking Basics", "desc" => "LAN, WAN, MAN, network topologies, and communication protocols."],
                ["title" => "Internet & Web Technologies", "desc" => "HTML, CSS, JavaScript, and basics of web development."],
                ["title" => "Cyber Security & Ethics", "desc" => "Data privacy, hacking, ethical concerns, and best security practices."],
                ["title" => "Cloud Computing & IoT", "desc" => "Concepts of cloud computing, IoT applications, and smart technologies."],
                ["title" => "Artificial Intelligence & Big Data", "desc" => "AI fundamentals, machine learning, and data analytics."]
            ];

            foreach ($topics as $topic) {
                echo "<div class='topic'>";
                echo "<h3>" . $topic["title"] . "</h3>";
                echo "<p>" . $topic["desc"] . "</p>";
                echo "</div>";
            }
        ?>
    </div>
</body>
</html>

<style>
    /* Basic Reset */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
    }

    /* Navigation Bar */
    .navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: #004d99; /* Blue Theme */
        padding: 15px 50px;
    }

    .navbar .logo {
        font-size: 24px;
        font-weight: bold;
        color: white;
    }

    .navbar ul {
        list-style: none;
        display: flex;
    }

    .navbar ul li {
        margin: 0 15px;
    }

    .navbar ul li a {
        text-decoration: none;
        color: white;
        font-size: 18px;
        transition: 0.3s;
    }

    .navbar ul li a:hover {
        color: #ffcc00; /* Highlight effect */
    }

    /* Course Container */
    .course-container {
        max-width: 900px;
        margin: 40px auto;
        padding: 20px;
        background: white;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .course-title {
        font-size: 28px;
        color: #6d289d;
        text-align: center;
        margin-bottom: 20px;
    }

    .topic {
        background: #f5f5f5;
        padding: 15px;
        margin: 10px 0;
        border-radius: 5px;
        transition: 0.3s;
    }

    .topic:hover {
        background: #e0e0e0;
        transform: scale(1.02);
    }

    .topic h3 {
        color: #333;
        font-size: 22px;
    }

    .topic p {
        color: #666;
        font-size: 16px;
        margin-top: 5px;
    }
</style>
