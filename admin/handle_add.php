<?php
$id = $_POST['id'];
$name = $_POST['name'];
$quantity = $_POST['quantity'];

$conn = new mysqli('localhost', 'root', 'Xuanhung2k3@', 'products');
$sql = "insert into products.tbproduct values('$id', '$name', '$quantity')";
$result = $conn->query($sql);
echo "<pre>";
print_r($result);
echo "</pre>";
?>
<script>
    if ($result == 1) {
        alert("Thêm thành công");
        window.location.replace("admin/homepage.php");
    }
    else {
        alert("Thêm thất bại")
    }
</script>

<?php $conn->close(); ?>