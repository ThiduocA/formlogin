<?php
$id = $_POST['id'];
$name = $_POST['name'];
$quantity = $_POST['quantity'];

$conn = new mysqli('localhost', 'root', 'Xuanhung2k3@', 'products');
$sql = "update products.tbproduct set name = '$name', quantity = '$quantity' where id = '$id'";
$result = $conn->query($sql);
?>
<script>
    if ($result == true) {
        alert("Sửa thành công");
        window.location.replace("admin/homepage.php");
    }
    else {
        alert("Sửa thất bại")
    }

</script>

<?php $conn->close(); ?>