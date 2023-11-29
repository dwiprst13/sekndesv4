<?php 
$artikel = "SELECT * FROM artikel ORDER BY id_artikel DESC LIMIT 3";
$queryArtikel = mysqli_query($conn, "SELECT * FROM artikel WHERE status = 'publik'");
?>

<body chrome-hide-address-bar class="min-h-[100%]">
    <section class="bg-white dark:bg-gray-900 pt-5 w-[100%] md:w-[85%] lg:w-[80%] mx-auto ">
        <div class="container grid mx-auto text-center ">
            <h1 class="text-2xl text-black dark:text-white font-bold ">ARTIKEL</h1>
        </div>
        <div class="container grid text-white mx-auto px-4 py-16 w-[90%] md:grid-cols-8 lg:grid-cols-12 gap-2">
            <?php
            while ($row_artikel = mysqli_fetch_assoc($queryArtikel)) {
                $path_relatif = $row_artikel['gambar'];
                $path_baru = str_replace('../../', '', $path_relatif);
                ?>
                    <div class="card-galeri float-right p-2 bg-gray-700 md:col-span-3 lg:col-span-3 rounded-lg">
                        <h1 class="text-center pt-3 text-lg"><b><?= $row_artikel['judul'] ?></b></h1>
                        <img src="<?= $path_baru ?>" alt="" class="h-60 pt-3 w-[100%]">
                        <p class="text-justify text-sm pt-3 line-clamp-3"><?= $row_artikel['content'] ?></p>
                    </div>
                <?php
            }
            ?>
        </div>
        
    </section>
</body>
</html>