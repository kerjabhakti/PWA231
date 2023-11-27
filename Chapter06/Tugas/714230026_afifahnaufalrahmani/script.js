function loginBtn(){
    window.open('index.html')
}

document.getElementById("buttonL").addEventListener("click", function(){
    window.location.href = "login_dif.html"
})

document.getElementById("kembali").addEventListener("click", function(){
    const result = confirm("yakin ngga mau masuk?")
    if(result === true){
        window.location.href = "index.html";
    }else {
        alert("oke kita login lagi...")
    }
})