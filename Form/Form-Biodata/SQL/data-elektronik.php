<?php
session_start();
include('../../../SQL/koneksi.php');
// $user_id = $_SESSION['user'];
$sql = "SELECT id_order AS 'Kode Order', data_elektronik.nama_elektronik AS 'Elektronik', merk AS 'Merk', no_seri AS 'No. Seri', order_service.order_status AS 'Nyervis di?', order_service.`status` AS 'Status' FROM order_service, data_elektronik
WHERE order_service.id_pelanggan = 1 AND order_service.`status`='Siap' OR order_service.`status`='Pending'
GROUP BY id_order";
//angka 1 nanti ganti dengan user id
$hasil = mysqli_query($conn, $sql);
if (mysqli_num_rows($hasil)) {
    while ($data=mysqli_fetch_row($hasil)) {
        echo "<tr>
            <td>".$data['0']."</td>
            <td>".$data['1']."</td>
            <td>".$data['2']."</td>
            <td>".$data['3']."</td>
            <td>".$data['4']."</td>
            <td>".$data['5']."</td>
            <td><button type='button' name='button' value='".$data['0']."' onclick='getDetailData()'>Detail</button></td>
        </tr>";
    }
}

?>
