<?php
include 'db.php';

// Read the JSON file
$json_data = file_get_contents('../reson.json');
$reasons = json_decode($json_data, true);

// Prepare the SQL statement
$stmt = $conn->prepare("INSERT INTO why_choose_us (title, description, icon) VALUES (?, ?, ?)");

// Loop through the reasons and insert them into the database
foreach ($reasons['reasons'] as $reason) {
    $stmt->bind_param("sss", $reason['title'], $reason['description'], $reason['icon']);
    $stmt->execute();
}

echo "Reasons imported successfully.";

$stmt->close();
$conn->close();
