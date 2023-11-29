
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
<body class="bg-gray-200">
    <header class="bg-gray-900 w-[100%] sticky left-0 top-0">
        <nav class="h-16 w-[100%] flex mx-auto " >
            <div class="place-self-center p-5">
                <h1 class="text-white font-bold">Artikel</h1>
            </div>
        </nav>
    </header>
    <div class="p-4 flex">
        <h1 class="text-xl">
            Daftar Artikel
        </h1>
    </div>
    <div class=" px-3 py-4 flex justify-between">
        <div>
            <button class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">
                <a href="?page=tambah_artikel">Tambah</a>
            </button>
        </div>
        <div class="mb-3">
            <div class="flex mb-4 flex w-full flex-wrap ">
                <input type="search" class="mx-auto m-0 -mr-0.5 block min-w-0 flex-auto rounded-l border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-[0.25rem] text-base font-normal leading-[1.6]  outline-none transition duration-200 ease-in-out focus:z-[3] focus:border-primary focus:text-blackfocus:shadow-[inset_0_0_0_1px_rgb(59,113,202)] focus:outline-none dark:border-gray-600 dark:focus:border-primary" placeholder="Search" aria-label="Search" aria-describedby="button-addon1" />

                <!--Search button-->
                <button
                class=" flex items-center rounded-r bg-blue-500 px-6 py-2.5 text-xs font-medium uppercase leading-tight text-white shadow-md transition duration-150 ease-in-out hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-primary-800 active:shadow-lg" type="button" id="button-addon1" data-te-ripple-init data-te-ripple-color="light">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
                    <path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z" clip-rule="evenodd" />
                </svg>
                </button>
            </div>
        </div>
    </div>

    <section class="w-[100%] mx-auto ">
        <div class="container flex flex-nowrap w-[90%] gap-5 columns-3 mx-auto grid px-4 py-16 lg:grid-cols-12">
            <?php
                while ($row_artikel = mysqli_fetch_assoc($queryArtikel)) {
                $path_baru = $row_artikel['gambar'];
            ?>
                <a href="?page=detail_artikel&id_artikel=<?= $row_artikel['id_artikel'] ?>" class="card-galeri justify-center p-2 bg-gray-700 text-white md:col-span-3 lg:col-span-3 rounded-lg">
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