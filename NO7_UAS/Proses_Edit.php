<?php
include 'connection.php';

$id_mhs = $_POST['id_mhs'];
$nim = $_POST['nim'];
$nama_mhs = $_POST['nama_mhs'];
$jk = $_POST['jk_mhs'];
$alamat = $_POST['alamat_mhs'];
$prodi = $_POST['prodi'];
$foto = "img1.png";
$email = $_POST['email_mhs'];

$query = "UPDATE tbl_mhs SET nim = '$nim', nama_mhs = '$nama_mhs', jk_mhs = '$jk', alamat_mhs = '$alamat', prodi = '$prodi', email_mhs = '$email' WHERE id_mhs = '$id_mhs' ";
$sql = mysqli_query($conn, $query);

if ($sql) {
    header("location: index.php");
} else {
    echo $query;
}