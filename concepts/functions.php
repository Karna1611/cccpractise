<?php
// Function to generate SQL insert query
function insertQuery($table, $data) {
    $columns = implode(", ", array_keys($data));
    $values = "'" . implode("', '", array_values($data)) . "'";
    $query = "INSERT INTO $table ($columns) VALUES ($values)";
    return $query;
}

// Function to generate SQL update query
// function updateQuery($table, $data, $condition) {
//     // $set = "";
//     // $conditions="";
//     // foreach ($data as $key => $value) {
//     //     $set .= "$key = '$value', ";
//     // }
//     // foreach ($condition as $key => $value) {
//     //     $conditions .= "$key = '$value', ";
//     // }
//     // $set = rtrim($set, ", ");
//     // $query = "UPDATE $table SET $set WHERE $conditions";
//     // return $query;
// }

function updateQuery($table, $data ,$product_id) {
    $set = "";
    foreach ($data as $key => $value) {
        $set .= "$key = '$value', ";
    }
    $set = rtrim($set, ", ");
    $query = "UPDATE $table SET $set WHERE product_id=$product_id";
    return $query;
}

// Function to generate SQL delete query
function deleteQuery($table, $product_id) {
    $query = "DELETE FROM $table WHERE product_id=$product_id";
    return $query;
}

// Function to generate SQL select query
function selectQuery($table, $columns = "*", $condition = "") {
    $query = "SELECT $columns FROM $table";
    if (!empty($condition)) {
        $query .= " WHERE $condition";
    }
    return $query;
}

function fetchProductData($product_id, $conn) {
    // Fetch the record based on the Product ID
    $sql = "SELECT * FROM ccc_product WHERE product_id = $product_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        return $result->fetch_assoc();
    } else {
        return null;
    }
}
?>
