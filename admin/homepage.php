<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'data.php'; ?>
    <title>Home page</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>Id</td>
            <td>Tên sản phẩm</td>
            <td>Số lượng</td>
        </tr>
        <?php while($row = $result->fetch_assoc()): ?>
            <tr>
                <td>
                   <?= $row['id'] ?> 
                </td>
                <td>
                   <?= $row['name']?> 
                </td>
                <td>
                   <?= $row['quantity'] ?> 
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>