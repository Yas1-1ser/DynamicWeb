<?php
include 'db.php';

// Clear the table before inserting new data
$conn->query("TRUNCATE TABLE products");

// Read the JSON file
$json = file_get_contents('../products.json');
$data = json_decode($json, true);

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO products (name, description, price, category, brand, image) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssisss", $name, $description, $price, $category, $brand, $image);

// Loop through the data and insert into the database
foreach ($data['products'] as $product) {
    $name = $product['name'];
    $description = $product['description'];
    $price = $product['price'];
    $category = $product['category'];
    $brand = $product['brand'];
    $image = $product['image'];
    $stmt->execute();
}

// Close connection
$stmt->close();
$conn->close();

echo "Data loaded successfully!";
