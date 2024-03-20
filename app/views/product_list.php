<!DOCTYPE html>
<html>
<head>
    <title>Danh sách sản phẩm</title>
</head>
<body>
    <h1>Danh sách sản phẩm</h1>
    <ul>
    <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
        <li>
            <?php echo $row['list'] . " - " . $row['create'] . " - " . $row['edit'] . " - " . $row['delete']; ?>
        </li>
    <?php endwhile; ?>
    </ul>
</body>
</html>