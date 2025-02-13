<?php
$host = "localhost";
$user = "root"; // Change if your MySQL has a different username
$pass = ""; // Change if your MySQL has a password
$dbname = "sphatik_db";

// Establish connection
$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Define default active tab
$activeTab = isset($_GET['tab']) ? $_GET['tab'] : 'ongoing';

// Fetch completed projects from database
$sql = "SELECT project_name, completion_date FROM completed_projects ORDER BY id ASC";
$result = $conn->query($sql);

$completedProjects = [
    ["<a href='#'>E-commerce Platform</a>", "2024-12-20"],
    ["<a href='#'>Portfolio Website</a>", "2024-11-15"]
];

// Append fetched projects to the array
while ($row = $result->fetch_assoc()) {
    $completedProjects[] = ["<a href='#'>{$row['project_name']}</a>", $row['completion_date']];
}

// Close DB connection
$conn->close();

$tabs = [
    "ongoing" => [
        "title" => "Ongoing Projects",
        "data" => [
            ["Website Development", "2025-03-10"],
            ["Mobile App Design", "2025-04-01"]
        ],
        "headers" => ["Name", "Deadline"]
    ],
    "available" => [
        "title" => "Available Projects",
        "data" => [
            ["<a href='#'>Logo Design</a>", "$200"],
            ["<a href='#'>SEO Optimization</a>", "$150"]
        ],
        "headers" => ["Name", "Budget"]
    ],
    "completed" => [
        "title" => "Completed Projects",
        "data" => $completedProjects,
        "headers" => ["Name", "Completed On"]
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freelancer Dashboard</title>
    <link rel="stylesheet" href="./css/freelance_styles.css">
    <link rel="stylesheet" href="./css/style.css">
    <style>
        .add-project-btn {
            display: block;
            width: 100%;
            max-width: 300px;
            margin: 20px auto;
            padding: 12px;
            background-color: #4a0072;
            color: white;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            border: none;
            border-radius: 8px;
            cursor: pointer;
        }
        .add-project-btn:hover {
            background-color: #3a0062;
        }
        .sidebar {
            width: 100%;
            max-width: 280px;
            background: linear-gradient(135deg, #4a0072, #300050);
            padding: 20px;
            text-align: center;
            color: white;
            border-radius: 10px;
            margin: 0 auto;
        }
        .sidebar h1 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .tabs {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }
        .tab {
            display: block;
            padding: 10px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 8px;
            font-size: 18px;
            font-weight: bold;
            text-decoration: none;
            color: white;
        }
        .tab.active {
            background: rgba(255, 255, 255, 0.4);
        }
        .content {
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background: #4a0072;
            color: white;
        }
    </style>
</head>
<body>
    <?php include './includes/header.php'; ?>

    <aside class="sidebar">
        <h1>Dashboard</h1>
        <div class="tabs">
            <a href="?tab=ongoing" class="tab <?php echo ($activeTab === 'ongoing') ? 'active' : ''; ?>">Ongoing Projects</a>
            <a href="?tab=available" class="tab <?php echo ($activeTab === 'available') ? 'active' : ''; ?>">Available Projects</a>
            <a href="?tab=completed" class="tab <?php echo ($activeTab === 'completed') ? 'active' : ''; ?>">Completed Projects</a>
        </div>
    </aside>

    <main class="content">
        <?php
        if (isset($tabs[$activeTab])) {
            $tab = $tabs[$activeTab];
            echo "<div class='card tab-content active'>";
            echo "<h2>{$tab['title']}</h2>";
            echo "<table><tr>";

            foreach ($tab['headers'] as $header) {
                echo "<th>$header</th>";
            }
            echo "</tr>";

            foreach ($tab['data'] as $row) {
                echo "<tr>";
                foreach ($row as $cell) {
                    echo "<td>$cell</td>";
                }
                echo "</tr>";
            }

            echo "</table>";

            // Add button for completed projects
            if ($activeTab === 'completed') {
                echo "<a href='addprojectbutton.php' class='add-project-btn'>Add a Completed Project</a>";
            }

            echo "</div>";
        } else {
            echo "<div class='card tab-content active'><h2>Invalid Tab</h2><p>The selected tab does not exist.</p></div>";
        }
        ?>
    </main>
</body>
</html>
