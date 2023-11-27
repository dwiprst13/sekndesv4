<?php 
$artikel = "SELECT * FROM artikel ORDER BY id_artikel DESC LIMIT 3";
$queryArtikel = mysqli_query($conn, $artikel);

?>

<body chrome-hide-address-bar class="min-h-[100%]">
    <section class="bg-white dark:bg-gray-900 pt-5 w-[100%] md:w-[85%] lg:w-[80%] mx-auto ">
        <div class="container grid mx-auto text-center ">
            <h1 class="text-2xl text-black dark:text-white font-bold ">ARTIKEL</h1>
        </div>
        <div class="container grid text-white mx-auto px-4 py-16 w-[90%] md:w-[85%] lg:w-[80%] md:grid-cols-8 lg:grid-cols-12 gap-8">
            <div class="card-galeri p-2 bg-gray-700 md:col-span-4 lg:col-span-4 rounded-lg">
                <h1 class="text-center pt-3 text-lg">Judul Artikel 1</h1>
                <img src="uploads/artikel/artikel1.jpeg" alt="" class="h-60 pt-3 w-full">
                <p class="text-justify pt-3 line-clamp-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, qui ipsum nisi ut, mollitia nulla eos sapiente, repellendus placeat magni iste autem suscipit laboriosam dolores? Libero distinctio minus neque nulla!</p>
                <button class="flex justify-center px-3 py-3 mx-auto">
                    <a class="decoration-none bg-blue-500 w-24 text-center p-1 rounded-lg hover:shadow-md hover:shadow-white" href="">Baca >></a>
                </button>
            </div>
            <div class="card-galeri p-2 bg-gray-700 md:col-span-4 lg:col-span-4 rounded-lg">
                <h1 class="text-center pt-3 text-lg">Judul Artikel 2</h1>
                <img src="uploads/artikel/artikel2.jpeg" alt="" class="h-60 pt-3 w-full">
                <p class="text-justify pt-3 line-clamp-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, qui ipsum nisi ut, mollitia nulla eos sapiente, repellendus placeat magni iste autem suscipit laboriosam dolores? Libero distinctio minus neque nulla!</p>
                <button class="flex justify-center px-3 py-3 mx-auto">
                    <a class="decoration-none bg-blue-500 w-24 text-center p-1 rounded-lg hover:shadow-md hover:shadow-white" href="">Baca >></a>
                </button>
            </div>
            <div class="card-galeri p-2 bg-gray-700 md:col-span-4 lg:col-span-4 rounded-lg">
                <h1 class="text-center pt-3 text-lg">Judul Artikel 3</h1>
                <img src="uploads/artikel/artikel3.jpeg" alt="" class="h-60 pt-3 w-full">
                <p class="text-justify pt-3 line-clamp-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit quasi quis magni quidem error earum quaerat omnis soluta quo blanditiis ab aliquid debitis, nulla dolorem rerum exercitationem autem incidunt pariatur?</p>
                <button class="flex justify-center px-3 py-3 mx-auto">
                    <a class="decoration-none bg-blue-500 w-24 text-center p-1 rounded-lg hover:shadow-md hover:shadow-white" href="">Baca >></a>
                </button>
            </div>
            <div class="card-galeri p-2 bg-gray-700 md:col-span-4 lg:col-span-4 rounded-lg">
                <h1 class="text-center pt-3 text-lg">Judul Artikel 4</h1>
                <img src="uploads/artikel/artikel1.jpeg" alt="" class="h-60 pt-3 w-full">
                <p class="text-justify pt-3 line-clamp-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, qui ipsum nisi ut, mollitia nulla eos sapiente, repellendus placeat magni iste autem suscipit laboriosam dolores? Libero distinctio minus neque nulla!</p>
                <button class="flex justify-center px-3 py-3 mx-auto">
                    <a class="decoration-none bg-blue-500 w-24 text-center p-1 rounded-lg hover:shadow-md hover:shadow-white" href="">Baca >></a>
                </button>
            </div>
            <div class="card-galeri p-2 bg-gray-700 md:col-span-4 lg:col-span-4 rounded-lg">
                <h1 class="text-center pt-3 text-lg">Judul Artikel 5</h1>
                <img src="uploads/artikel/artikel2.jpeg" alt="" class="h-60 pt-3 w-full">
                <p class="text-justify pt-3 line-clamp-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, qui ipsum nisi ut, mollitia nulla eos sapiente, repellendus placeat magni iste autem suscipit laboriosam dolores? Libero distinctio minus neque nulla!</p>
                <button class="flex justify-center px-3 py-3 mx-auto">
                    <a class="decoration-none bg-blue-500 w-24 text-center p-1 rounded-lg hover:shadow-md hover:shadow-white" href="">Baca >></a>
                </button>
            </div>
            <div class="card-galeri p-2 bg-gray-700 md:col-span-4 lg:col-span-4 rounded-lg">
                <h1 class="text-center pt-3 text-lg">Judul Artikel 6</h1>
                <img src="uploads/artikel/artikel3.jpeg" alt="" class="h-60 pt-3 w-full">
                <p class="text-justify pt-3 line-clamp-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit quasi quis magni quidem error earum quaerat omnis soluta quo blanditiis ab aliquid debitis, nulla dolorem rerum exercitationem autem incidunt pariatur?</p>
                <button class="flex justify-center px-3 py-3 mx-auto">
                    <a class="decoration-none bg-blue-500 w-24 text-center p-1 rounded-lg hover:shadow-md hover:shadow-white" href="">Baca >></a>
                </button>
            </div>
            <div class="card-galeri p-2 bg-gray-700 md:col-span-4 lg:col-span-4 rounded-lg">
                <h1 class="text-center pt-3 text-lg">Judul Artikel 7</h1>
                <img src="uploads/artikel/artikel1.jpeg" alt="" class="h-60 pt-3 w-full">
                <p class="text-justify pt-3 line-clamp-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, qui ipsum nisi ut, mollitia nulla eos sapiente, repellendus placeat magni iste autem suscipit laboriosam dolores? Libero distinctio minus neque nulla!</p>
                <button class="flex justify-center px-3 py-3 mx-auto">
                    <a class="decoration-none bg-blue-500 w-24 text-center p-1 rounded-lg hover:shadow-md hover:shadow-white" href="">Baca >></a>
                </button>
            </div>
            <div class="card-galeri p-2 bg-gray-700 md:col-span-4 lg:col-span-4 rounded-lg">
                <h1 class="text-center pt-3 text-lg">Judul Artikel 8</h1>
                <img src="uploads/artikel/artikel2.jpeg" alt="" class="h-60 pt-3 w-full">
                <p class="text-justify pt-3 line-clamp-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, qui ipsum nisi ut, mollitia nulla eos sapiente, repellendus placeat magni iste autem suscipit laboriosam dolores? Libero distinctio minus neque nulla!</p>
                <button class="flex justify-center px-3 py-3 mx-auto">
                    <a class="decoration-none bg-blue-500 w-24 text-center p-1 rounded-lg hover:shadow-md hover:shadow-white" href="">Baca >></a>
                </button>
            </div>
            <div class="card-galeri p-2 bg-gray-700 md:col-span-4 lg:col-span-4 rounded-lg">
                <h1 class="text-center pt-3 text-lg">Judul Artikel 9</h1>
                <img src="uploads/artikel/artikel3.jpeg" alt="" class="h-60 pt-3 w-full">
                <p class="text-justify pt-3 line-clamp-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit quasi quis magni quidem error earum quaerat omnis soluta quo blanditiis ab aliquid debitis, nulla dolorem rerum exercitationem autem incidunt pariatur?</p>
                <button class="flex justify-center px-3 py-3 mx-auto">
                    <a class="decoration-none bg-blue-500 w-24 text-center p-1 rounded-lg hover:shadow-md hover:shadow-white" href="">Baca >></a>
                </button>
            </div>
            <div class="card-galeri p-2 bg-gray-700 md:col-span-4 lg:col-span-4 rounded-lg">
                <h1 class="text-center pt-3 text-lg">Judul Artikel 10</h1>
                <img src="uploads/artikel/artikel2.jpeg" alt="" class="h-60 pt-3 w-full">
                <p class="text-justify pt-3 line-clamp-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, qui ipsum nisi ut, mollitia nulla eos sapiente, repellendus placeat magni iste autem suscipit laboriosam dolores? Libero distinctio minus neque nulla!</p>
                <button class="flex justify-center px-3 py-3 mx-auto">
                    <a class="decoration-none bg-blue-500 w-24 text-center p-1 rounded-lg hover:shadow-md hover:shadow-white" href="">Baca >></a>
                </button>
            </div>
            <div class="card-galeri p-2 bg-gray-700 md:col-span-4 lg:col-span-4 rounded-lg">
                <h1 class="text-center pt-3 text-lg">Judul Artikel 11</h1>
                <img src="uploads/artikel/artikel3.jpeg" alt="" class="h-60 pt-3 w-full">
                <p class="text-justify pt-3 line-clamp-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit quasi quis magni quidem error earum quaerat omnis soluta quo blanditiis ab aliquid debitis, nulla dolorem rerum exercitationem autem incidunt pariatur?</p>
                <button class="flex justify-center px-3 py-3 mx-auto">
                    <a class="decoration-none bg-blue-500 w-24 text-center p-1 rounded-lg hover:shadow-md hover:shadow-white" href="">Baca >></a>
                </button>
            </div>
        </div>
        
    </section>
</body>
</html>