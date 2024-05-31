<?php
include('../../conf/config.php');
// $nama= $_POST['nama'];
// $alamat= $_POST['alamat'];
// $query=mysqli_query($koneksi,"INSERT INTO lokasi(nama, alamat) VALUES ('$nama','$alamat')");
// header('Location: ../index.php?page=data-lokasi');

var_dump($_POST)

// Memulai sesi
session_start();
include('config.php');
// Set zona waktu default ke Asia/Jakarta
date_default_timezone_set('Asia/Jakarta');

// Menentukan format nomor invoice
$invoice_prefix = "INV";
$location_id = $_SESSION['lokasi'];
$datetime = date("ymdHi");

$last_invoice = mysqli_query($koneksi, "SELECT COUNT(*) AS total_records FROM invoices");
$row = mysqli_fetch_assoc($last_invoice);

// Mendapatkan nomor invoice terakhir
$last_invoice_number = $row['total_records'] ? $row['total_records'] : 0;

$new_invoice_number = $invoice_prefix . $location_id . $datetime . sprintf('%04d', $last_invoice_number + 1);

$saveinv = mysqli_query($koneksi,"INSERT INTO invoice ")


// Tangkap data id yang dikirim dari formulir
if (isset($_POST['ids']) && is_array($_POST['ids'])) {
    $ids = $_POST['ids'];

    // Siapkan variabel untuk menyimpan ID yang diupdate
    $idList = implode(", ", $ids);
    // $sqlinputinvoice = "INSERT INTO invoices (id)VALUES('INV0002')";
    // mysqli_query($koneksi,$sqlinputinvoice);

    // Buat query SQL untuk memperbarui id_invoice berdasarkan ids yang diterima
    $sql = "UPDATE kas_keluar SET id_invoices = '$new_invoice_number' WHERE id IN (" . implode(", ", array_map('intval', $ids)) . ")";

    // Jalankan query
    if (mysqli_query($koneksi, $sql)) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . mysqli_error($koneksi);
    }
} else {
    echo "No ids received";
}
?>