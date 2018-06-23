<?php
$kodepos = $_GET['id'];
$koneksi = mysqli_connect('localhost','root','','doctor_computer');
$sql = "SELECT * FROM tbl_kodepos WHERE tbl_kodepos.kodepos='$kodepos' GROUP BY kelurahan";
$hasil = mysqli_query($koneksi, $sql);
if(mysqli_num_rows($hasil))
{
	while ($data = mysqli_fetch_row($hasil)) {
	    echo "<option value='".$data['1']."' id='items'>".$data['1']."</option><br>";
	}
}
else
{
	echo "<option value='' id='items'>Pilih Kelurahan</option><br>";
}
 ?>
