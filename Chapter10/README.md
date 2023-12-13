![image](https://github.com/kerjabhakti/PWA231/assets/15622730/7a12ab90-9e07-4382-9fe5-6512391947fb)# PHP MVC (Model View Controller)
## Langkah yang harus dilakukan :
1. Yang pertama harus dilakukan adalah pastikan sudah instal XAMPP sesuai versi yang dibutuhkan [https://www.apachefriends.org/download.html](XAMPP)
2. jalankan Xamppnya
   ![image](https://github.com/kerjabhakti/PWA231/assets/15622730/e7fb186d-0efe-4104-895d-d4ff89d8765f)
4. Cek Versi PHP yang sudah terintal
   ![image](https://github.com/kerjabhakti/PWA231/assets/15622730/1eebda76-7d92-48c8-84f5-3da568930fc7)
   Saat ini saya menggunakan versi PHP 8.0.30

6. Lanjutkan membuat file website
   Buat Folder nama projectnya pada direktory berikut : C:\xampp\htdocs\
   uat folder baru dan tambahkan nama projectnya
   ![image](https://github.com/kerjabhakti/PWA231/assets/15622730/abadfb0b-6965-427b-b660-cb37db1104ee)

## Menjalankan dan Instal Ekstension dan tambahkan file Json caranya sebagai berikut :
1. Buka Visual Studio Code dan Klik File, Preferences, Setting
   ![image](https://github.com/kerjabhakti/PWA231/assets/15622730/1ab0808d-e897-4561-9298-5356b33b1886)
2. Kemudian Pilih PHP dan Edit File JSON
   ![image](https://github.com/kerjabhakti/PWA231/assets/15622730/7839ce3f-85ad-40ca-9e15-cca2de98bc28)
3. Berikut Source Code JSON nya silahkan sesuaikan hasilnya seperti ini
   ![image](https://github.com/kerjabhakti/PWA231/assets/15622730/847ac8e3-8b6d-4ffb-9827-0707456b42bb)

```json
   {
  "workbench.colorTheme": "Default Light Modern",
  "liveServer.settings.donotShowInfoMsg": true,
  "editor.fontFamily": "Hack, Consolas, 'Courier New', monospace",
  "editor.fontLigatures": false,
  "[javascript]": {
    "editor.defaultFormatter": "esbenp.prettier-vscode",
    "editor.formatOnSave": true
  },
  "editor.fontWeight": "normal",
  "editor.defaultFormatter": "esbenp.prettier-vscode",
  "editor.wordWrap": "on",
  "editor.formatOnSave": true,
  "liveServer.settings.donotVerifyTags": true,
  "window.zoomLevel": 1,
  "php.validate.executablePath": ""
}
```

Tambahkan Routesnya buka XAMPP-PHP
![image](https://github.com/kerjabhakti/PWA231/assets/15622730/ac428cdd-16b0-48a5-8a00-a3facbe8efcd)
Copas disini juga bisa 
```json
{
  "workbench.colorTheme": "Default Light Modern",
  "liveServer.settings.donotShowInfoMsg": true,
  "editor.fontFamily": "Hack, Consolas, 'Courier New', monospace",
  "editor.fontLigatures": false,
  "[javascript]": {
    "editor.defaultFormatter": "esbenp.prettier-vscode",
    "editor.formatOnSave": true
  },
  "editor.fontWeight": "normal",
  "editor.defaultFormatter": "esbenp.prettier-vscode",
  "editor.wordWrap": "on",
  "editor.formatOnSave": true,
  "liveServer.settings.donotVerifyTags": true,
  "window.zoomLevel": 1,
  "php.validate.executablePath": "C:/xampp/php/php.exe"
}
```
## membuat File Project Hello World!
```PHP
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    echo "Hello World!";
    ?>
</body>
</html>
```

Buka Pada Browser dengan Mengetikan [locakhost](http://localhost/namaprojectnya/)http://localhost/namaprojectnya/
![image](https://github.com/kerjabhakti/PWA231/assets/15622730/32182e97-b535-4d4b-a361-0f5bc3e719f0)

