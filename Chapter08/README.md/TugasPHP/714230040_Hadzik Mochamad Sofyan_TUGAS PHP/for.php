<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>For</h2>
    <p>Memunculkan semua data rekomendasi film pada array</p>
    <?php 
        $film_rekomendasi = ["Jujutsu Kaisen", "Corpse Bride", "The End of the F***ing World", "Spiderman Across the Spider Verse", "Wednesday", "Slam Dunk", "Peaky Blinders"];

        $i = 0;
        for ($i; $i < count($film_rekomendasi); $i++) {
            echo ($i + 1). " $film_rekomendasi[$i]". "<br>";
        }
    ?>
</body>
</html>