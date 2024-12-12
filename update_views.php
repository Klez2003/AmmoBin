<?php
// Database configuration
$servername = "localhost";
$username = "views"; // Replace with your MariaDB username
$password = "Boomer0420!"; // Replace with your MariaDB password
$dbname = "PageStats";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Define the page name
$page_name = 'Hall Of Autism';

// Update the view count for the page
$sql_update = "UPDATE page_views SET view_count = view_count + 1 WHERE page_name = ?";
$stmt_update = $conn->prepare($sql_update);
$stmt_update->bind_param("s", $page_name);
$stmt_update->execute();
$stmt_update->close();

// Fetch the updated view count
$sql_select = "SELECT view_count FROM page_views WHERE page_name = ?";
$stmt_select = $conn->prepare($sql_select);
$stmt_select->bind_param("s", $page_name);
$stmt_select->execute();
$stmt_select->bind_result($current_views);
$stmt_select->fetch();
$stmt_select->close();

// Close the database connection
$conn->close();
?>
