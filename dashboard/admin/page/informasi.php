
<?php
if (isset($_GET['page']) && $_GET['page'] == 'edit_informasi') {
    include 'page/tambah_informasi.php';
} else {
    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header class="bg-gray-900 w-[100%] sticky left-0 top-0">
        <nav class="h-16 w-[100%] flex mx-auto " >
            <div class="place-self-center p-5">
                <h1 class="text-white font-bold">Informasi</h1>
            </div>
        </nav>
    </header>

    <?php

    $sql = "SELECT * FROM artikel ORDER BY date ASC LIMIT 6";
    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <div class="card">
            <img src="<?= $row['gambar'] ?>" alt="Gambar Artikel" height="250px" width="300px">
            <div class="card-body">
                <p class="card-text">Judul: <?= $row['judul'] ?></p>
                <p class="card-text">Isi: <?= $row['content'] ?></p>
                <p class="card-text">Tanggal Terbit: <?= $row['date'] ?></p>
            </div>
        </div>
        <br>
        <?php
    }
    ?>

    <a href="?page=tambah_artikel">Tambah</a>

</body>
</html>
<?php
}
?>