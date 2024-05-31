<?php
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "dbsio");

// Periksa apakah koneksi berhasil
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}else{
    echo"ok";
}

// Ambil nomor ID terakhir dari tabel invoices
$query = "SELECT id FROM invoices ORDER BY id DESC LIMIT 1";
$result = mysqli_query($koneksi, $query);
$row = mysqli_fetch_assoc($result);
$lastId = $row['id'] + 1;
echo $lastId;
echo "sd";
die();
if ($result) {
} else {
    $lastId = 1;
}

// Format bulan dan tahun saat ini
$bulanSekarang = date('m');
$tahunSekarang = date('Y');

// Buat nomor invoice baru
$invoiceNumber = "INV" . $bulanSekarang . $tahunSekarang . str_pad($lastId, 4, '0', STR_PAD_LEFT);

echo "Generated Invoice Number: " . $invoiceNumber;

// Tutup koneksi
mysqli_close($koneksi);
?>
