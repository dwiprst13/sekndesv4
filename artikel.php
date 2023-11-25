<?php 
$artikel = "SELECT * FROM artikel ORDER BY id_artikel DESC LIMIT 3";
$queryArtikel = mysqli_query($conn, $artikel);

?>

<body chrome-hide-address-bar class="min-h-[100%]">
    <section class="bg-gray-900 text-white pt-5 w-[80%] mx-auto ">
        <div class="container grid mx-auto text-center ">
            <h1 class="text-2xl font-bold ">ARTIKEL</h1>
        </div>
        
        
    </section>
</body>
</html>