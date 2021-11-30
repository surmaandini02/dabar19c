<?php

include "../config/koneksi.php";

$id = @$_POST['id'];
$nama_barang = @$_POST['nama_barang'];
$jumlah_barang = @$_POST['jumlah_barang'];

$data = [];

$query = mysqli_query($kon, "INSERT INTO `tbl_barang` (`id`, `nama_barang`, `jumlah_barang`) VALUES ('". $id ."', '".$nama_barang."', '".$jumlah_barang."')");

if($query){
    $status = true;
    $pesan= "reaquest success";

}else{
    $status = false;
    $pesan = "reaquest failed";
}
$json = [
    "status" => $status,
    "pesan" => $pesan,
    "data" => $data
];
header ("content-type: application/json");
echo json_encode($json);

?>