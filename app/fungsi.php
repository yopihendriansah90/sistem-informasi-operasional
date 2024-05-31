<?php
// functions.php

/**
 * Menghapus karakter dari string nominal uang.
 * 
 * @param string $nominal Nominal uang dalam format "Rp 200.000.000,90"
 * @return string Nominal dalam format numerik "200000000.90"
 */
function bersihkanNominal($nominal) {
    // Menghapus teks "Rp"
    $nominal = str_replace("Rp", "", $nominal);

    // Menghapus spasi yang mungkin ada setelah "Rp"
    $nominal = str_replace(" ", "", $nominal);

    // Menghapus tanda titik (.) sebagai pemisah ribuan
    $nominal = str_replace(".", "", $nominal);

    // Mengganti koma (,) dengan titik (.) untuk format desimal
    $nominal = str_replace(",", ".", $nominal);

    return $nominal;
}


class CurrencyFormatter {
    public static function intToCurrency($int, $currencySymbol = 'Rp', $decimalPlaces = 2, $decimalSeparator = ',', $thousandSeparator = '.') {
        $formattedNumber = number_format($int, $decimalPlaces, $decimalSeparator, $thousandSeparator);
        return $currencySymbol . ' ' . $formattedNumber;
    }
}
?>
