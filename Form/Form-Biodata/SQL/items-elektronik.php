<?php
include('../../../SQL/koneksi.php');
$sql = "SELECT * FROM data_elektronik";
$hasil = mysqli_query($conn, $sql);
if(mysqli_num_rows($hasil))
{
   while ($data = mysqli_fetch_row($hasil)) {
       echo "<option value='".$data['0']."' id='items-service'>".$data['1']."</option><br>";
   }
}
else
{
   echo "<option value='0' id='items-service'>Pilih Elektronik</option><br>";
}
 ?>
