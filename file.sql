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



--  query untuk menampilkan kolom masa aktif dan status nya
SELECT u.id,u.id_kendaraan, k.nomor_kendaraan,u.nomor_uji,
    u.masa_aktif,
    PERIOD_DIFF(EXTRACT(YEAR_MONTH FROM u.masa_aktif), EXTRACT(YEAR_MONTH FROM CURDATE())) AS sisa_bulan,
    DATEDIFF(u.masa_aktif, DATE_ADD(CURDATE(), INTERVAL PERIOD_DIFF(EXTRACT(YEAR_MONTH FROM u.masa_aktif), EXTRACT(YEAR_MONTH FROM CURDATE())) MONTH)) AS sisa_hari,
    CASE
        WHEN PERIOD_DIFF(EXTRACT(YEAR_MONTH FROM u.masa_aktif), EXTRACT(YEAR_MONTH FROM CURDATE())) = 1
            THEN 'warning'
        WHEN PERIOD_DIFF(EXTRACT(YEAR_MONTH FROM u.masa_aktif), EXTRACT(YEAR_MONTH FROM CURDATE())) < 1 
            THEN 'urgent'
        ELSE 'normal'
    END AS status,
    u.createdDate,u.modifiedDate
FROM 
    ujikir u JOIN kendaraan k ON u.id_kendaraan = k.id;
-- akhir 




}elseif($_GET['func']=='kir'){

    $sql = "SELECT k.nomor_kendaraan,k.id
FROM kendaraan k
LEFT JOIN ujikir u ON k.id = u.id_kendaraan
WHERE u.id_kendaraan IS NULL;
";
}