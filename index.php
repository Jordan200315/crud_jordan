<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MY CRUD</title>
</head>
<body>
    <h2>products</h2>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM products";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['id']}</td>
                            <td>{$row['name']}</td>
                            <td>{$row['description']}</td>
                            <td>{$row['price']}</td>
                            <td>{$row['quantity']}</td>
                            <td>{$row['created_at']}</td>
                            <td>{$row['updated_at']}</td>
                            <td>
                                <a href='update.php?id={$row['id']}'>Edit</a>
                                <a href='delete.php?id={$row['id']}'>Delete</a>
                            </td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='8'>No records found</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <h2>Add New Product</h2>
    <form action="create.php" method="POST">
        <input type="text" name="name" placeholder="Name" required>
        <br><br>
        <textarea name="description" placeholder="Description" required></textarea>
        <br><br>
        <input type="text" name="price" placeholder="Price" required>
        <br><br>
        <input type="text" name="quantity" placeholder="Quantity" required>
        <br><br>
        <button type="submit">Add Product</button>
    </form>
</body>
</html>
