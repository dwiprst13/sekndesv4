documentasi	judul	deskripsi	


<?php
if (isset($_GET['page']) && $_GET['page'] == 'tambah_galeri') {
    include 'page/tambah_galeri.php';
} else {
    ?>
    <h1>Ini halaman Artikel</h1>
    <a href="?page=tambah_galeri">Tambah</a>
    <?php
    $sql = "SELECT * FROM galeri ORDER BY id_doc";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <div class="card">
            <img src="<?= $row['documentasi'] ?>" alt="Gambar Galeri" height="250px" width="300px">
            <div class="card-body">
                <p class="card-text">Judul: <b><?= $row['judul'] ?></b></p>
                <p class="card-text">Deskripsi: <?= $row['deskripsi'] ?></p>
                <p class="card-text">Tanggal Terbit: <?= $row['date'] ?></p>
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