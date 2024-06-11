-- untuk menampilkan data stnk masa aktif 1 tahun
SELECT pk.id,k.nomor_kendaraan,
    pajak1thn,
    CURRENT_DATE() AS tanggal_sekarang,
    TIMESTAMPDIFF(YEAR, pajak1thn,CURRENT_DATE()) AS tahun,
    TIMESTAMPDIFF(MONTH, pajak1thn, CURRENT_DATE()) % 12 AS bulan,
    DATEDIFF(pajak1thn, CURRENT_DATE()) AS hari
FROM 
    pajakkendaraan pk 
    JOIN
    kendaraan k ON k.id=pk.id_kendaraan;
