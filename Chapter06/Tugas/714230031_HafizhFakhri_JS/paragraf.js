let paragraf = document.getElementById("paragraf");
let teksAwal = "Coba Click sekali lagi...";
let teksBaru = "Tapii Boong YHAAAAAA....";

function ubahParagraf() {
    if (paragraf.innerHTML === teksAwal) {
        paragraf.innerHTML = teksBaru;
    } else {
        paragraf.innerHTML = teksAwal;
    }
}