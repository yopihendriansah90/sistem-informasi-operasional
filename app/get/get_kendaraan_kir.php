<?php
include('../../conf/config.php');
// Query untuk mengambil data kendaraan

$sql = "SELECT k.nomor_kendaraan,k.id
FROM kendaraan k
LEFT JOIN ujikir u ON k.id = u.id_kendaraan
WHERE u.id_kendaraan IS NULL;
";

$result = mysqli_query($koneksi, $sql);

$lokasi = array();

if (mysqli_num_rows($result) > 0) {
    // Mengambil data dari setiap baris hasil query
    while($row = mysqli_fetch_assoc($result)) {
        $lokasi[] = $row;
    }
}

// Menutup koneksi database
mysqli_close($koneksi);

// Mengirimkan data lokasi dalam format JSON
header('Content-Type: application/json');
echo json_encode($lokasi);

?>
