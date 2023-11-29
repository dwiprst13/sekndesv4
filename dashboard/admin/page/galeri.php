
<?php
if (isset($_GET['page']) && $_GET['page'] == 'edit_galeri') {
    include 'page/edit_galeri.php';
} else {
    ?>
    <header class="bg-gray-900 w-[100%] sticky left-0 top-0">
        <nav class="h-16 w-[100%] flex mx-auto " >
            <div class="place-self-center p-5">
                <h1 class="text-white font-bold">Galeri</h1>
            </div>
        </nav>
    </header>
    <a href="?page=tambah_galeri">Tambah</a>
    <div class="flex grid grid-cols-12 gap-2"></div>
    <?php
    $sql = "SELECT * FROM galeri ORDER BY id_doc";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <div class="card col-span-3 float-right">
            <img src="<?= $row['documentasi'] ?>" alt="Gambar Galeri" class="w-[100%]">
            <div class="card-body">
                <p class="card-text">Judul: <b><?= $row['judul'] ?></b></p>
                <p class="card-text">Deskripsi: <?= $row['deskripsi'] ?></p>
                <form action="" method="get">
                    <input type="hidden" name="page" value="edit_galeri">
                    <input type="hidden" name="id_doc" value="<?= $row['id_doc'] ?>">
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
            window.location.href = "?page=edit_galerir&id_adoc=<?= $row['id_doc'] ?>";
        }
    </script>
<?php
}
?>