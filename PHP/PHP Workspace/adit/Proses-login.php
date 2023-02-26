<?php
include 'jaringan.php';
$username = $_POST['username'];
$password = $_POST['password'];


if(!empty($username) && !empty($password)) {
    $sql = mysqli_query($connect, "SELECT * FROM usere WHERE username = '$username' AND password = '$password'");
    $result = mysqli_num_rows($sql);
    if ($result) {
        echo "Anda berhasil masuk!";
        echo "Klik <a href='home.php'>disini</a> untuk melanjutkan";
    } else {
        echo "Username dan Password salah";
    }
}   else { 
    echo "Email dan Password anda kosong, silahkan diisi.";
}
?>