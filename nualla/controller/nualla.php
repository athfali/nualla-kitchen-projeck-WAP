<?php
include '../database/nualla.php';

$orderan = new orderan();

$action =  $_GET['action'];

if ($action == "store") {
    $orderan->store(
        $_POST['nama_pemesan'],
        $_POST['nama_produk'],
        $_POST['jumlah'],
        $_POST['harga'],
        $_POST['status']
    );
    return header("location:../information.php");
}
else if ($action == "store_admin") {
    $orderan->store_admin(
        $_POST['nama_pemesan'],
        $_POST['nama_produk'],
        $_POST['jumlah'],
        $_POST['harga'],
        $_POST['status']
    );
    return header("location:../information_admin.php");
}
else if ($action == "update") {
    $orderan->update(
        $_GET['id'],
        $_POST['nama_pemesan'],
        $_POST['nama_produk'],
        $_POST['jumlah'],
        $_POST['harga'],
        $_POST['status']
    );
    return header("location:../information_admin.php");
}
else if ($action == "delete") {
    $orderan->delete(
        $_GET['id']
    );
    return header("location:../information_admin.php");
}

?>
