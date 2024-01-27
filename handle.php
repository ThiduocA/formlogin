<?php
$username = $_POST['username'];
$password = $_POST['password'];

$conn = new mysqli('localhost', 'root', 'Xuanhung2k3@', 'dblogin');

$sql = "select * from dblogin.tblogin where username = '$username'";
$result = $conn->query($sql)->fetch_assoc();
?>
<?php if ($result['password'] == $password): ?>
    <script>
        alert("Đăng nhập thành công");
        window.location.replace("https://www.facebook.com/hung.2411.2003");
    </script>
<?php else: ?>
    <script>alert("Đăng nhập thất bại")</script>
<?php endif; ?>

<?php $conn->close(); ?>