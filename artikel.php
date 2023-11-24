<?php 
$artikel = "SELECT * FROM artikel ORDER BY id_artikel DESC LIMIT 3";
$queryArtikel = mysqli_query($conn, $artikel);

?>

<body>
    <h1>INI HALAMAN ARTIKEL</h1>
    <section class="bg-gray-900 text-white w-[85%] mx-auto ">
        <div class="container grid mx-auto text-center ">
            <h1 class="text-2xl font-bold ">ARTIKEL</h1>
        </div>
        <div class="container grid mx-auto px-4 py-16  md:grid-cols-8 lg:grid-cols-12 gap-8">
            <div class="card-galeri p-5 md:col-span-4 lg:col-span-4 bg-gray-700 rounded-lg">
                <h1 class="text-center text-lg">Judul Artikel 1</h1>
                <img src="uploads/artikel/artikel1.jpeg" alt="" class="h-32 w-28 w-full">
                <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, qui ipsum nisi ut, mollitia nulla eos sapiente, repellendus placeat magni iste autem suscipit laboriosam dolores? Libero distinctio minus neque nulla!</p>
            </div>
            <div class="card-galeri p-5 md:col-span-4 lg:col-span-4 bg-gray-700 rounded-lg">
                <h1 class="text-center text-lg">Judul Artikel 2</h1>
                <img src="uploads/artikel/artikel2.jpeg" alt="" class="h-32 w-28 w-full">
                <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, qui ipsum nisi ut, mollitia nulla eos sapiente, repellendus placeat magni iste autem suscipit laboriosam dolores? Libero distinctio minus neque nulla!</p>
            </div>
            <div class="card-galeri p-5  md:col-span-4 lg:col-span-4 bg-gray-700 rounded-lg">
                <h1 class="text-center text-lg">Judul Artikel 3</h1>
                <img src="uploads/artikel/artikel3.jpeg" alt="" class="h-32 w-28 w-full">
                <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, qui ipsum nisi ut, mollitia nulla eos sapiente, repellendus placeat magni iste autem suscipit laboriosam dolores? Libero distinctio minus neque nulla!</p>
            </div>
            <div class="card-galeri p-5 md:col-span-4 lg:col-span-4 bg-gray-700 rounded-lg">
                <h1 class="text-center text-lg">Judul Artikel 1</h1>
                <img src="uploads/artikel/artikel1.jpeg" alt="" class="h-32 w-28 w-full">
                <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, qui ipsum nisi ut, mollitia nulla eos sapiente, repellendus placeat magni iste autem suscipit laboriosam dolores? Libero distinctio minus neque nulla!</p>
            </div>
            <div class="card-galeri p-5 md:col-span-4 lg:col-span-4 bg-gray-700 rounded-lg">
                <h1 class="text-center text-lg">Judul Artikel 2</h1>
                <img src="uploads/artikel/artikel2.jpeg" alt="" class="h-32 w-28 w-full">
                <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, qui ipsum nisi ut, mollitia nulla eos sapiente, repellendus placeat magni iste autem suscipit laboriosam dolores? Libero distinctio minus neque nulla!</p>
            </div>
            <div class="card-galeri p-5  md:col-span-4 lg:col-span-4 bg-gray-700 rounded-lg">
                <h1 class="text-center text-lg">Judul Artikel 3</h1>
                <img src="uploads/artikel/artikel3.jpeg" alt="" class="h-32 w-28 w-full">
                <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, qui ipsum nisi ut, mollitia nulla eos sapiente, repellendus placeat magni iste autem suscipit laboriosam dolores? Libero distinctio minus neque nulla!</p>
            </div>
            <div class="card-galeri p-5 md:col-span-4 lg:col-span-4 bg-gray-700 rounded-lg">
                <h1 class="text-center text-lg">Judul Artikel 1</h1>
                <img src="uploads/artikel/artikel1.jpeg" alt="" class="h-32 w-28 w-full">
                <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, qui ipsum nisi ut, mollitia nulla eos sapiente, repellendus placeat magni iste autem suscipit laboriosam dolores? Libero distinctio minus neque nulla!</p>
            </div>
            <div class="card-galeri p-5 md:col-span-4 lg:col-span-4 bg-gray-700 rounded-lg">
                <h1 class="text-center text-lg">Judul Artikel 2</h1>
                <img src="uploads/artikel/artikel2.jpeg" alt="" class="h-32 w-28 w-full">
                <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, qui ipsum nisi ut, mollitia nulla eos sapiente, repellendus placeat magni iste autem suscipit laboriosam dolores? Libero distinctio minus neque nulla!</p>
            </div>
            <div class="card-galeri p-5  md:col-span-4 lg:col-span-4 bg-gray-700 rounded-lg">
                <h1 class="text-center text-lg">Judul Artikel 3</h1>
                <img src="uploads/artikel/artikel3.jpeg" alt="" class="h-32 w-28 w-full">
                <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, qui ipsum nisi ut, mollitia nulla eos sapiente, repellendus placeat magni iste autem suscipit laboriosam dolores? Libero distinctio minus neque nulla!</p>
            </div>
            <div class="card-galeri p-5 md:col-span-4 lg:col-span-4 bg-gray-700 rounded-lg">
                <h1 class="text-center text-lg">Judul Artikel 1</h1>
                <img src="uploads/artikel/artikel1.jpeg" alt="" class="h-32 w-28 w-full">
                <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, qui ipsum nisi ut, mollitia nulla eos sapiente, repellendus placeat magni iste autem suscipit laboriosam dolores? Libero distinctio minus neque nulla!</p>
            </div>
            <div class="card-galeri p-5 md:col-span-4 lg:col-span-4 bg-gray-700 rounded-lg">
                <h1 class="text-center text-lg">Judul Artikel 2</h1>
                <img src="uploads/artikel/artikel2.jpeg" alt="" class="h-32 w-28 w-full">
                <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, qui ipsum nisi ut, mollitia nulla eos sapiente, repellendus placeat magni iste autem suscipit laboriosam dolores? Libero distinctio minus neque nulla!</p>
            </div>
            <div class="card-galeri p-5  md:col-span-4 lg:col-span-4 bg-gray-700 rounded-lg">
                <h1 class="text-center text-lg">Judul Artikel 3</h1>
                <img src="uploads/artikel/artikel3.jpeg" alt="" class="h-32 w-28 w-full">
                <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, qui ipsum nisi ut, mollitia nulla eos sapiente, repellendus placeat magni iste autem suscipit laboriosam dolores? Libero distinctio minus neque nulla!</p>
            </div>
        </div>
    </section>
</body>
</html>