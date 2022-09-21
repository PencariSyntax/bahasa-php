<?php
// Tolong Jangan di apa-apain kode ini, karena ini adalah kamusnya.
require_once "./KamusBahasa/Kamus.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Bahasa | PHP with Indonesia Style</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous" defer></script>

</head>

<body>
    <div class="container d-flex flex-column h-100 w-100" style="min-height: 100vh;">
        <div class="card card-body shadow p-5 rounded-5 my-5">
            <?php
            // Ini adalah File Utama dari hasil kodinganmu
            require_once "./Kodemu/Utama.php";
            ?>
        </div>
        <div class="alert alert-warning">
            <legend>Perhatian</legend>
            <ul>
                <li>Untuk mengubah/memulai program dengan syntax indonesia, file <strong>Utama</strong>nya terdapat dalam <em>folder</em> <code>Kodemu</code></li>
            </ul>
        </div>
    </div>
</body>

</html>