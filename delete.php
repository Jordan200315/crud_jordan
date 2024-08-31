<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM products WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Product deleted";
    } else {
        echo "Error deleting product: " . $conn->error;
    }

    $conn->close();

    header("Location: index.php");
}
?>
