<?php
require 'config.php';
if (isset($_POST['sendreg'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    $request = "INSERT into tbl_user(email, password, cpassword)
            values('$email','$password', '$cpassword')";
    mysqli_query($connection, $request);
    header('location:index.php');
} else {
    echo "Registrasi Gagal!Silakan Coba Lagi";
}

?>