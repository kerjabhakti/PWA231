// Dapatkan semua tombol "Beli" dengan class "buy-button"
const buyButtons = document.querySelectorAll('.buy-button');

// Tambahkan event listener untuk setiap tombol "Beli"
buyButtons.forEach((button, index) => {
    button.addEventListener('click', () => {
        // Gantilah dengan logika yang sesuai untuk tindakan beli, misalnya, menambahkannya ke keranjang belanja.
        alert(`Anda telah membeli ${document.querySelectorAll('td')[index * 4].textContent}`);
    });
});