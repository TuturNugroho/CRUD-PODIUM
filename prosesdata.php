<?php
include("koneksi.php");
$database = new database();

$aksi = $_GET['aksi'];

if ($aksi == "tambah") {
    $database->regis_users($_POST['user'], $_POST['email'], $_POST['pass']);
    header("location:layout/login.php");
} else if ($aksi == "hapus") {
    if ($database->hapus($_GET['id'])) {
        header("location:layout/dashboard-super.php");
    }
} else if ($aksi == "update") {
    if ($database->update($_POST['id'], $_POST['user'], $_POST['email'], $_POST['pass'])) {
        header("location:layout/dashboard-super.php");
    }
} else if ($aksi == "tambah-data") {
    $database->tambah_data($_POST['user'], $_POST['email'], $_POST['pass']);
    header("location:layout/dashboard-super.php");
} else if ($aksi == "tambah-artikel") {
    $database->artikel_input($_POST['judul'], $_POST['isi']);
    header("location:artikel/pages.php");
} else if ($aksi == "update-artikel") {
    if ($database->update_artikel($_POST['id'], $_POST['judul'], $_POST['isi'])) {
        header("location:artikel/pages.php");
    }
} else if ($aksi == "hapus-artikel") {
    if ($database->hapus_artikel($_GET['id'])) {
        header("location:artikel/pages.php");
    }
}
