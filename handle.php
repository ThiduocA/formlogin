<?php
$username = $_POST['username'];
$password = $_POST['password'];

$conn = new mysqli('localhost', 'root', 'Xuanhung2k3@', 'dblogin');

$sql = "select * from dblogin.tbloginadmin where username = '$username'";
$result = $conn->query($sql)->fetch_assoc();
echo "<pre>";
print_r($result);
echo "</pre>";
?>
<!-- <?php if ($result['password'] == $password): ?>
    <script>
        alert("Đăng nhập thành công");
        window.location.replace("admin/homepage.php");
    </script>
<?php else: ?>
    <script>alert("Đăng nhập thất bại")</script>
<?php endif; ?> -->

<?php $conn->close(); ?>