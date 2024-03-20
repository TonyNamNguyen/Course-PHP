<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
</head>
<body>
    <h1>Edit Product</h1>
    <form action="" method="POST">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" value="<?php echo $product['name']; ?>"><br>
        <label for="description">Description:</label><br>
        <textarea id="description" name="description"><?php echo $product['description']; ?></textarea><br>
        <label for="price">Price:</label><br>
        <input type="text" id="price" name="price" value="<?php echo $product['price']; ?>"><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>