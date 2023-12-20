<?php
require 'config.php';

$email = $_POST['email'];
$password = $_POST['password'];

$query_sql = "SELECT * FROM tbl_user 
        WHERE email='$email' AND password='$password'";

$result = mysqli_query($connection, $query_sql);

if (mysqli_num_rows($result) > 0) {
    header('location:dashboard.php');
} else {
    echo "<script>alert('Login Gagal! Cek Email dan Password');</script>";
}

?>
