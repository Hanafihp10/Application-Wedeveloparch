const screenWidth = window.innerWidth;
// Mengecek apakah lebar layar lebih besar atau sama dengan 400px
if (screenWidth <= 450) {
    // Jika true, tambahkan kelas 'true' dan hilangkan kelas 'false' pada elemen .row
    document.querySelector('.container-1 .row').classList.add('true');
    document.querySelector('.container-1 .row').classList.remove('false');
} else {
    // Jika false, tambahkan kelas 'false' dan hilangkan kelas 'true' pada elemen .row
    document.querySelector('.container-1 .row').classList.add('false');
    document.querySelector('.container-1 .row').classList.remove('true');
}

