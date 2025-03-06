<?php
include 'db.php';

// Read the JSON file
$json_data = file_get_contents('../storage.json');
$storage_data = json_decode($json_data, true);

if ($storage_data) {
    // Clear the existing data in the storage table
    $clear_query = "TRUNCATE TABLE storage";
    mysqli_query($conn, $clear_query);

    // Insert the data into the storage table
    foreach ($storage_data['products'] as $product) {
        $product_name = mysqli_real_escape_string($conn, $product['name']);
        $category = mysqli_real_escape_string($conn, $product['category']);
        $price = mysqli_real_escape_string($conn, $product['price']);

        $insert_query = "INSERT INTO storage (product_name, category, price) VALUES ('$product_name', '$category', '$price')";
        mysqli_query($conn, $insert_query);
    }

    echo "Data successfully imported from storage.json";
} else {
    echo "Error: Unable to read storage.json";
}

mysqli_close($conn);
