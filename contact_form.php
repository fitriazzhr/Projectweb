<?php

require 'config.php';
if (isset($_POST['send'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $request = "INSERT into contact_form(nama, email, message)
            values('$nama','$email', '$message')";
    mysqli_query($connection, $request);
    header('location:dashboard.php');
} else {
    echo "Pesan Gagal Terkirim! Silakan Coba Lagi";
}

?>