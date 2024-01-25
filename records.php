<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Records</title>
    <!-- Add any additional styles or scripts if needed -->
</head>
<body>

<h2>Last 10 Product Records</h2>

<?php
// Connect to your database (replace these variables with your actual database credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch the last 10 product records from your database
$sql = "SELECT * FROM ccc_product ORDER BY created_at DESC LIMIT 10";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<ul>";
    while ($row = $result->fetch_assoc()) {
        echo "<li>";
        echo "1. Product Name: {$row['product_name']}<br>";
        echo "2. SKU: {$row['sku']}<br>";
        echo "3. Product Type: {$row['product_type']}<br>";
        echo "4. Category: {$row['category']}<br>";
        echo "5. Manufacturer Cost: {$row['manufacturer_cost']}<br>";
        echo "6. Shipping Cost: {$row['shipping_cost']}<br>";
        echo "7. Total Cost: {$row['total_cost']}<br>";
        echo "8. Price: {$row['price']}<br>";
        echo "9. Status: {$row['status']}<br>";
        echo "10. Created At: {$row['created_at']}<br>";
        echo "11. Updated At: {$row['updated_at']}<br>";
        echo "</li>";
    }
    echo "</ul>";
} else {
    echo "No product records found";
}

// Close the database connection
$conn->close();

?>

</body>
</html>