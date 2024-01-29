<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'data.php'; ?>
    <link rel="stylesheet" href="style.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Home page</title>
</head>

<body>
    <div class="main">
        <table border="1" class="table">
            <tr>
                <td>Id</td>
                <td>Tên sản phẩm</td>
                <td>Số lượng</td>
                <td>Chức năng</td>
            </tr>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td>
                        <?= $row['id'] ?>
                    </td>
                    <td>
                        <?= $row['name'] ?>
                    </td>
                    <td>
                        <?= $row['quantity'] ?>
                    </td>
                    <td><button class="fix-btn">Sửa</button></td>
                </tr>

            <?php endwhile; ?>
        </table>
    </div>
    <div class="add">
        <button class="add-btn my-5">
            Thêm sản phẩm mới
        </button>
    </div>
</body>

</html>
<script>
    document.querySelectorAll(".fix-btn").forEach(function (button) {
        button.addEventListener("click", function () {
            window.location.replace("edit.php")
        });
    });
</script>
<script>
    document.querySelectorAll(".add-btn").forEach(function (button) {
        button.addEventListener("click", function () {
            window.location.replace("add_product.php")
        });
    });
</script>