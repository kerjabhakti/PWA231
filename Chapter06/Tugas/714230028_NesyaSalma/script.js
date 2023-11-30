document.getElementById("watch").addEventListener("click", function () {
    const result = confirm("do you want to watch the universe?");
    if (result === true) {
        window.location.href = "https://youtu.be/luE0mPVhK9k?si=TQ_a95_tHf_d_RTI";
        console.log("yaelah")
    } else {
        alert("yaahhh kecewa siihh!!!")
        console.log("parah banget")
    }
})

//image change dan button function
const light = document.getElementById("buttonD");

light.addEventListener("click", function () {
    window.location.href = "light_galaxy.html";
    console.log("cerah")
});


document.getElementById("about").addEventListener("click", function() {
    console.log("ini about kita")
})

document.getElementById("hitung").addEventListener("click", function(){
    x = 12
    y = 13
    z = x + y
    console.log(z)
})

// Fungsi ganti paragraf
function myFunction() {
    document.getElementById("demo").innerHTML = "cek berubah";
}