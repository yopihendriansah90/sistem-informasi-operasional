<?php
// Memulai sesi
session_start();
include('config.php');
// Set zona waktu default ke Asia/Jakarta
date_default_timezone_set('Asia/Jakarta');

// Menentukan format nomor invoice
$invoice_prefix = "INV";
$location_id = $_SESSION['lokasi'];
$datetime = date("ymdHis");

$last_invoice = mysqli_query($koneksi, "SELECT COUNT(*) AS total_records FROM invoices");
$row = mysqli_fetch_assoc($last_invoice);

// Mendapatkan nomor invoice terakhir
$last_invoice_number = $row['total_records'] ? $row['total_records'] : 0;

$new_invoice_number = $invoice_prefix . $location_id . $datetime . sprintf('%04d', $last_invoice_number + 1);

// Menampilkan nomor invoice baru
echo "Nomor Invoice Baru: " . $new_invoice_number;

?>