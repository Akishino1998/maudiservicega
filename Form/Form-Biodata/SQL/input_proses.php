<?php
session_start();
include('../../../SQL/koneksi.php');
$id_elektronik = $_POST['id_elektronik'];
$merk = $_POST['merk'];
$noseri = $_POST['noseri'];
$kodepos = $_POST['kodepos'];
$perlengkapan = $_POST['perlengkapan'];
$keterangan = $_POST['keterangan'];
$order_status = $_POST['order_status'];
$alamat = $_POST['alamat'];
$rt = $_POST['rt'];
$rw = $_POST['rw'];
$provinsi = $_POST['provinsi'];
$kabupaten = $_POST['kabupaten'];
$kecamatan = $_POST['kecamatan'];
$kecamatan = $_POST['kecamatan'];

//get user id
$user_id = $_SESSION['user'];


$id_order = '';
if($order_status == 'Ditempat'){
    $sql = 'SELECT COUNT(id_order) FROM order_service WHERE id_order LIKE "DT%"';
    $hasil = mysqli_query($conn, $sql);
    $id_order = 'DT-';
    while ($data=mysqli_fetch_row($hasil)) {
        $id_order = $id_order.strval($data[0]+1);
    }
    // echo $id_order;
}else{
    $sql = 'SELECT COUNT(id_order) FROM order_service WHERE id_order LIKE "DW%"';
    $hasil = mysqli_query($conn, $sql);
    $id_order = 'DW-';
    while ($data=mysqli_fetch_row($hasil)) {
        $id_order = $id_order.strval($data[0]+1);
    }
    // echo $id_order;
}
$sql = "INSERT INTO order_service(id_order, id_elektronik, id_pelanggan, merk, no_seri, kelengkapan, keterangan_rusak, order_status, create_order)
        VALUES('$id_order','$id_elektronik','$user_id','$merk','$noseri','$perlengkapan', '$keterangan','$order_status', NOW());";
mysqli_query($conn, $sql);
echo "SUkses";
?>
