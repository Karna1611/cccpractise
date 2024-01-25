<?php
include 'sql/functions.php'; 
// function fetchProductData($product_id, $conn) {
//     // Fetch the record based on the Product ID
//     $sql = "SELECT * FROM ccc_product WHERE product_id = $product_id";
//     $result = $conn->query($sql);

//     if ($result->num_rows > 0) {
//         return $result->fetch_assoc();
//     } else {
//         return null;
//     }
// }

// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ccc_practice";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    // Get the product ID from the URL
    $product_id = $_GET['id'];

    // Fetch the record based on the Product ID
    $row = fetchProductData($product_id, $conn);

    if ($row !== null) {
        // Display the form for editing the product
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Edit Product</title>
        </head>
        <body>

        <h2>Edit Product</h2>

        <form action="update_k.php" method="post">
            <input type="hidden" name="product_id" value="<?php echo $row['product_id']; ?>">
            <label for="product_name">Product Name:</label>
            <input type="text" name="product_name" value="<?php echo $row['product_name']; ?>" required><br>
            <label for="sku">SKU:</label>
            <input type="text" name="sku" value="<?php echo $row['sku']; ?>" required><br>
            <!-- Update this line to match your actual column name -->
            <label for="category">Product Category:</label>
            <select name="category" required>
                <option value="Bar & Game Room">Bar & Game Room</option>
                <option value="Bedroom">Bedroom</option>
                <option value="Decor">Decor</option>
                <option value="Dining & Kitchen">Dining & Kitchen</option>
                <option value="Lighting">Lighting</option>
                <option value="Living Room">Living Room</option>
                <option value="Mattresses">Mattresses</option>
                <option value="Office">Office</option>
                <option value="Outdoor">Outdoor</option>
            </select><br>

            <!-- Add other form fields here with their values -->

            <input type="submit" value="Update Product">
        </form>

        </body>
        </html>
        <?php
    } else {
        echo "Product not found";
    }
} else {
    echo "Invalid request";
}

// Close the database connection
$conn->close();
?>
