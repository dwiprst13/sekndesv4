
<?php
if (isset($_GET['page']) && $_GET['page'] == 'edit_artikel') {
    include 'page/tambah_artikel.php';
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
                <h1 class="text-white font-bold">Artikel</h1>
            </div>
        </nav>
    </header>
    <a href="?page=edit_artikel">Tambah</a>
    <?php

    $sql = "SELECT * FROM artikel ORDER BY date";
    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <div class="card">
            <img src="<?= $row['gambar'] ?>" alt="Gambar Artikel" height="250px" width="300px">
            <div class="card-body">
                <p class="card-text">Judul: <b><?= $row['judul'] ?></b></p>
                <p class="card-text">Isi: <?= $row['content'] ?></p>
                <p class="card-text">Tanggal Terbit: <?= $row['date'] ?></p>
                <form action="" method="get">
                    <input type="hidden" name="page" value="edit_artikel">
                    <input type="hidden" name="id_artikel" value="<?= $row['id_artikel'] ?>">
                    <button type="submit">Edit</button>
                </form>
            </div>
        </div>
        <br>
        <?php
    }
    ?>

    <script>
        function editUser() {
            window.location.href = "?page=edit_user&id_artikel=<?= $row['id_artikel'] ?>";
        }
    </script>
</body>
</html>
<?php
}
?>