<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Format Currency Input</title>
    <script>
        function formatCurrency(value, currencySymbol = 'Rp') {
            // Hapus semua karakter non-digit
            const numberString = value.replace(/[^,\d]/g, '');
            const split = numberString.split(',');
            let sisa = split[0].length % 3;
            let rupiah = split[0].substr(0, sisa);
            const ribuan = split[0].substr(sisa).match(/\d{3}/gi);

            // Tambahkan titik jika ada ribuan
            if (ribuan) {
                const separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }

            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return currencySymbol + ' ' + rupiah;
        }

        function onInputChange(event) {
            const input = event.target;
            input.value = formatCurrency(input.value);
        }
    </script>
</head>
<body>
    <form>
        <label for="currencyInput">Masukkan jumlah:</label>
        <input type="text" id="currencyInput" oninput="onInputChange(event)">
    </form>
</body>
</html>
