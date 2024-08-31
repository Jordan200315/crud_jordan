<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    $sql = "INSERT INTO products (name, description, price, quantity) VALUES ('$name', '$description', '$price', '$quantity')";

    if ($conn->query($sql) === TRUE) {
        echo "New product created";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

    header("Location: index.php");
}
?>
