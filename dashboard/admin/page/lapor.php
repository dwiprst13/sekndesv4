
<?php
if (isset($_GET['page']) && $_GET['page'] == 'edit_galeri') {
    include 'page/edit_galeri.php';
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
                <h1 class="text-white font-bold">Lapor</h1>
            </div>
        </nav>
    </header>
    <a href="?page=tambah_galeri">Tambah</a>


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