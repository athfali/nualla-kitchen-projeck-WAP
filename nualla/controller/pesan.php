<?php
include '../database/pesan.php';

$orderan = new orderan();

$action =  $_GET['action'];

if ($action == "pesan") {
    $orderan->pesan(
        $_POST['nama'],
        $_POST['alamat'],
        $_POST['no_telp'],
        $_POST['pesan'],
        $_POST['no_pesanan']
    );
    return header("location:../contact.php");
}
?>  