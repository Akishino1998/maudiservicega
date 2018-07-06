<?php
    session_start();
    include('../../../SQL/koneksi.php');
    // $username = 'eko';
    // $password = 'indah';
    $username =  strip_tags(trim($_GET['username']));
    $password = strip_tags(trim($_GET['password']));
    $sql = "SELECT user_pelanggan.username, password, id_pelanggan FROM user_pelanggan, data_pelanggan WHERE user_pelanggan.username=data_pelanggan.username AND user_pelanggan.username='$username'";
    $hasil = mysqli_query($conn, $sql);
    if(mysqli_num_rows($hasil))
    {
        while($data=mysqli_fetch_row($hasil))
        {
            if(password_verify($password, $data[1]))
            {
                $_SESSION['user']=$data[2];
                echo "sukses";
            }
            else
            {
                echo '<div class="alert alert-danger">
                    Passwordmu salah!
                </div>';
            }
        }
    }
    else
    {
        echo '<div class="alert alert-danger">
            Anda Belum Terdaftar!
        </div>';
    }


 ?>
