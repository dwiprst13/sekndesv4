<?php 
$artikel = "SELECT * FROM artikel ORDER BY id_artikel DESC LIMIT 3";
$queryArtikel = mysqli_query($conn, $artikel);

?>

<body>
    <h1>INI HALAMAN ARTIKEL</h1>
    <section class="bg-gray-900 text-white w-[80%] mx-auto ">
        <div class="container grid mx-auto text-center ">
            <h1 class="text-2xl font-bold ">ARTIKEL</h1>
        </div>
        <div class="container grid mx-auto px-4 py-16  md:grid-cols-8 lg:grid-cols-12 gap-8">
            <div class="card-galeri  md:col-span-4 lg:col-span-4 bg-gray-700 rounded-lg">
                <h1 class="text-center p-2 text-lg">Judul Artikel 1</h1>
                <img src="uploads/artikel/artikel1.jpeg" alt="" class="h-40 w-28 p-2 w-full">
                <p class="text-justify p-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, qui ipsum nisi ut, mollitia nulla eos sapiente, repellendus placeat magni iste autem suscipit laboriosam dolores? Libero distinctio minus neque nulla!</p>
            </div>
            <div class="card-galeri  md:col-span-4 lg:col-span-4 bg-gray-700 rounded-lg">
                <h1 class="text-center p-2 text-lg">Judul Artikel 1</h1>
                <img src="uploads/artikel/artikel1.jpeg" alt="" class="h-40 w-28 p-2 w-full">
                <p class="text-justify p-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, qui ipsum nisi ut, mollitia nulla eos sapiente, repellendus placeat magni iste autem suscipit laboriosam dolores? Libero distinctio minus neque nulla!</p>
            </div>
            <div class="card-galeri  md:col-span-4 lg:col-span-4 bg-gray-700 rounded-lg">
                <h1 class="text-center p-2 text-lg">Judul Artikel 1</h1>
                <img src="uploads/artikel/artikel1.jpeg" alt="" class="h-40 w-28 p-2 w-full">
                <p class="text-justify p-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, qui ipsum nisi ut, mollitia nulla eos sapiente, repellendus placeat magni iste autem suscipit laboriosam dolores? Libero distinctio minus neque nulla!</p>
            </div>
            <div class="card-galeri  md:col-span-4 lg:col-span-4 bg-gray-700 rounded-lg">
                <h1 class="text-center p-2 text-lg">Judul Artikel 1</h1>
                <img src="uploads/artikel/artikel1.jpeg" alt="" class="h-40 w-28 p-2 w-full">
                <p class="text-justify p-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, qui ipsum nisi ut, mollitia nulla eos sapiente, repellendus placeat magni iste autem suscipit laboriosam dolores? Libero distinctio minus neque nulla!</p>
            </div>
            <div class="card-galeri  md:col-span-4 lg:col-span-4 bg-gray-700 rounded-lg">
                <h1 class="text-center p-2 text-lg">Judul Artikel 1</h1>
                <img src="uploads/artikel/artikel1.jpeg" alt="" class="h-40 w-28 p-2 w-full">
                <p class="text-justify p-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, qui ipsum nisi ut, mollitia nulla eos sapiente, repellendus placeat magni iste autem suscipit laboriosam dolores? Libero distinctio minus neque nulla!</p>
            </div>
            <div class="card-galeri  md:col-span-4 lg:col-span-4 bg-gray-700 rounded-lg">
                <h1 class="text-center p-2 text-lg">Judul Artikel 1</h1>
                <img src="uploads/artikel/artikel1.jpeg" alt="" class="h-40 w-28 p-2 w-full">
                <p class="text-justify p-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, qui ipsum nisi ut, mollitia nulla eos sapiente, repellendus placeat magni iste autem suscipit laboriosam dolores? Libero distinctio minus neque nulla!</p>
            </div>
            <div class="card-galeri  md:col-span-4 lg:col-span-4 bg-gray-700 rounded-lg">
                <h1 class="text-center p-2 text-lg">Judul Artikel 1</h1>
                <img src="uploads/artikel/artikel1.jpeg" alt="" class="h-40 w-28 p-2 w-full">
                <p class="text-justify p-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, qui ipsum nisi ut, mollitia nulla eos sapiente, repellendus placeat magni iste autem suscipit laboriosam dolores? Libero distinctio minus neque nulla!</p>
            </div>
            
        </div>
    </section>
</body>
</html>