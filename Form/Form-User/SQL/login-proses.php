
<?php
    include('../../../SQL/koneksi.php');
    // $username = 'eko';
    // $password = 'indah';
     $username = $_GET['username'];
    $password = $_GET['password'];
    $sql = "SELECT * FROM user_pelanggan WHERE username='$username'";
    $hasil = mysqli_query($conn, $sql);
    if(mysqli_num_rows($hasil))
    {
        while($data=mysqli_fetch_row($hasil))
        {
            if(password_verify($password, $data[1]))
            {
                //pindahin formnya
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
