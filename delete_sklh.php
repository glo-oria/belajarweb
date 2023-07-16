<?php

include "koneksi.php";

$kode=$_REQUEST['Kode_sekolah'];

$delete="Delete from tb_sekolah where Kode_sekolah='".$kode."'";
$qdelete=$condb->query($delete);

if($delete){
    header("location:view_sklh.php");
}else{
    echo "Delete Error!";
}

?>