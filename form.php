<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Form</title>
</head>
<body>

<h2>Add Product</h2>

<form action="sql_functions.php" method="post">
    <label for="product_name">Product Name:</label>
    <input type="text" name="product_name" required><br>

    <label for="sku">SKU:</label>
    <input type="text" name="sku" required><br>

    <label>Product Type:</label>
    <input type="radio" name="product_type" value="Simple" checked> Simple
    <input type="radio" name="product_type" value="Bundle"> Bundle<br>

    <label for="category">Category:</label>
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

    <label for="manufacturer_cost">Manufacturer Cost:</label>
    <input type="text" name="manufacturer_cost" required><br>

    <label for="shipping_cost">Shipping Cost:</label>
    <input type="text" name="shipping_cost" required><br>

    <label for="total_cost">Total Cost:</label>
    <input type="text" name="total_cost" required><br>

    <label for="price">Price:</label>
    <input type="text" name="price" required><br>

    <label for="status">Status:</label>
    <select name="status" required>
        <option value="Enabled">Enabled</option>
        <option value="Disabled">Disabled</option>
    </select><br>

    <label for="created_at">Created At:</label>
    <input type="date" name="created_at" required><br>

    <label for="updated_at">Updated At:</label>
    <input type="date" name="updated_at" required><br>

    <input type="submit" value="Add Product">
</form>


<a href="record.php">View Last 10 Entries</a> 

</body>
</html>