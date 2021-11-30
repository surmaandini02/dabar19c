<?php

include "../config/koneksi.php";

$id = @$_POST["id"];

$data = [];

$query = mysqli_query($kon, "DELETE FROM `tbl_barang` WHERE `id`='".$id."'");


if($query){
    $status = true;
    $pesan = "request success";
    $data [] = $query;
}else{
    $status = false;
    $pesan = "request success";
}

$json = [
    "status" => $status,
    "pesan" => $pesan,
    "data" => $data
];

header("Content-Type: application/json");
echo json_encode($json);

?>