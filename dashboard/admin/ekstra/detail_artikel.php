<?php
if (isset($_GET['page']) && $_GET['page'] === 'detail_artikel') {
    // Lakukan apa pun yang perlu dilakukan ketika halaman adalah 'detail'
}
$id_artikel = $_GET['id_artikel'];
$result = mysqli_query($conn, "SELECT * FROM artikel WHERE id_artikel='$id_artikel'");
$row_artikel = mysqli_fetch_assoc($result);
?>

    <header class="bg-gray-900 w-[100%] sticky left-0 top-0">
        <nav class="h-16 w-[100%] flex mx-auto " >
            <div class="place-self-center p-5">
                <h1 class="text-white font-bold">Artikel</h1>
            </div>
        </nav>
    </header>
    <section class="w-[90%] flex mx-auto grid grid-cols-12">
        <div class="col-span-10">
            <h1 class="text-center pt-3 text-2xl"><b><?= $row_artikel['judul'] ?></b></h1>
            <img src="<?= $row_artikel['gambar'] ?>" alt="" class="h-60 pt-3 mx-auto object-cover">
            <p class="text-justify text-sm pt-3 line-clamp-3"><?= $row_artikel['content'] ?></p>
        </div>
        <div class="col-span-2">
            delete dan update
        </div>
    </section>