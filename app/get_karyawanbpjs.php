<?php
include('../conf/config.php');
// Query untuk mengambil data karyawan
$sql = "SELECT id, nik, nama 
        FROM as_karyawan 
        WHERE NOT EXISTS (
            SELECT 1 
            FROM as_bpjs 
            WHERE as_karyawan.nik = as_bpjs.nik
        );
        ";
$result = mysqli_query($koneksi, $sql);

$karyawan = array();

if (mysqli_num_rows($result) > 0) {
    // Mengambil data dari setiap baris hasil query
    while($row = mysqli_fetch_assoc($result)) {
        $karyawan[] = $row;
    }
}

// Menutup koneksi database
mysqli_close($koneksi);

// Mengirimkan data karyawan dalam format JSON
header('Content-Type: application/json');
echo json_encode($karyawan);

?>
