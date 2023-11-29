
<?php
$artikel = "SELECT * FROM artikel ORDER BY id_artikel";
$queryArtikel = mysqli_query($conn, $artikel);

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
    <a href="?page=tambah_artikel">Tambah</a>
    <section class="pt-5 w-[100%] mx-auto ">
        <div class="container flex flex-nowrap w-[90%] gap-5 columns-3 mx-auto grid px-4 py-16 lg:grid-cols-12">
            <?php
                while ($row_artikel = mysqli_fetch_assoc($queryArtikel)) {
                $path_baru = $row_artikel['gambar'];
            ?>
                <a href="?page=detail_artikel&id_artikel=<?= $row_artikel['id_artikel'] ?>" class="card-galeri justify-center p-2 bg-gray-700 md:col-span-3 lg:col-span-3 rounded-lg">
                    <h1 class="text-center pt-3 text-lg"><b><?= $row_artikel['judul'] ?></b></h1>
                    <img src="<?= $path_baru ?>" alt="" class="h-60 pt-3 w-[100%]">
                    <p class="text-justify text-sm pt-3 line-clamp-3"><?= $row_artikel['content'] ?></p>
                </a>
            <?php
                }
            ?>
        </div>
    </section>

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