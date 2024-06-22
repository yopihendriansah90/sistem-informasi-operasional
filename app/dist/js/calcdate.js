function calcDate(dateStr,id) {
    // Mengubah string tanggal menjadi objek Date dan menghilangkan komponen waktu
    const targetDate = new Date(dateStr);
    targetDate.setHours(0, 0, 0, 0);
    
    // Mendapatkan waktu saat ini dan menghilangkan komponen waktu
    const currentDate = new Date();
    currentDate.setHours(0, 0, 0, 0);
    
    // Menghitung selisih waktu dalam milidetik
    const diffInMilliseconds = targetDate - currentDate;


    // Menghitung sisa waktu dalam tahun, bulan, dan hari
    let years = targetDate.getFullYear() - currentDate.getFullYear();
    let months = targetDate.getMonth() - currentDate.getMonth();
    let days = targetDate.getDate() - currentDate.getDate();
    
    // Menyesuaikan bulan dan tahun jika hari negatif
    if (days < 0) {
        months--;
        const lastMonth = new Date(targetDate.getFullYear(), targetDate.getMonth(), 0);
        days += lastMonth.getDate();
    }
    
    // Menyesuaikan tahun jika bulan negatif
    if (months < 0) {
        years--;
        months += 12;
    }
    

    // Mengecek kondisi untuk menampilkan pesan
    let message;
    if (diffInMilliseconds <= 0) {
        message = "MASA AKTIF HABIS....!";
    } else if(years=== 0 && months >1){
        message= `${months} bulan, dan ${days} hari lagi`;
    }else if(years===0 && months===1){
        message= `Urgent! tinggal ${months} bulan ${days} hari lagi`;
    }else if(years<=0 && months<=0){
        message= `Urgent! tinggal ${days} hari lagi`;
    }else{
        message = `Sisa waktu aktif: ${years} tahun, ${months} bulan, dan ${days} hari`;
    }
    // Menampilkan pesan di elemen dengan ID 'countdownMessage'
    document.getElementById(id).innerText = message;
        


}



