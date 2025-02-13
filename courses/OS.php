<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operating System Course</title>
    <link rel="stylesheet" href="../css/os_styles.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<?php include '../includes/header.php'; ?>
   
    <!-- Course Content -->
    <div class="course-container">
        <h2 class="course-title">Operating System (OS)</h2>

        <?php
            $topics = [
                ["title" => "Introduction to Operating Systems", "desc" => "Basic concepts, types, and functions of operating systems."],
                ["title" => "Process Management", "desc" => "Processes, threads, CPU scheduling algorithms, and synchronization."],
                ["title" => "Memory Management", "desc" => "Paging, segmentation, virtual memory, and allocation strategies."],
                ["title" => "File Systems", "desc" => "File structures, access methods, and directory implementation."],
                ["title" => "I/O Systems", "desc" => "Device management, drivers, and interrupt handling."],
                ["title" => "Deadlocks", "desc" => "Causes, conditions, prevention, and recovery strategies."],
                ["title" => "Security & Protection", "desc" => "Authentication, access control, and encryption techniques."]
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
        background-color: #1e90ff; /* Blue Theme */
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
        color: #1e90ff;
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