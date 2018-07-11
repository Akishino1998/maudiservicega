<?php
    sesiion_start();
    include('../../../SQL/koneksi.php');
    $username = $_GET['username'];
    //password_hash($password_asli, PASSWORD_DEFAULT);
    $password = password_hash($_GET['password'], PASSWORD_DEFAULT);
    $sql = "SELECT * FROM user_pelanggan WHERE username='$username'";
    $hasil = mysqli_query($conn, $sql);
    if(mysqli_num_rows($hasil))
    {
        echo 'sudah';
    }
    else
    {
        $sql = "INSERT INTO user_pelanggan VALUES('$username','$password')";
        mysqli_query($conn, $sql);
        $sql = "INSERT INTO data_pelanggan(username, create_date) VALUES('$username', NOW())";
        mysqli_query($conn, $sql);
        echo "sukses";
        session_destroy();

    }
 ?>
