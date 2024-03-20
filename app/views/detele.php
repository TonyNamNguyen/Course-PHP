<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Product</title>
</head>
<body>
    <h1>Delete Product</h1>
    <p>Are you sure you want to delete this product?</p>
    <form action="" method="POST">
        <input type="hidden" name="id" value="<?php echo $product['id']; ?>">
        <button type="submit">Yes, Delete</button>
    </form>
    <a href="index.php">Cancel</a>
</body>
</html>