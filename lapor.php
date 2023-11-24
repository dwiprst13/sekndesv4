<?php

$userInfo = @$_SESSION['id_user'];
$q_data_user_login=mysqli_query($conn, "SELECT * FROM user WHERE id_user='$userInfo'");
$data_user_login=mysqli_fetch_array($q_data_user_login);
?>



<?php
if (isset($_POST["submit"])) {
    $judul = $_POST["judul"];
    $keluhan = $_POST["keluhan"];
    $wilayah = $_POST["wilayah"];
    $target_dir = "uploads/"; 
    $target_file = $target_dir . basename($_FILES["foto"]["name"]);
    move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file);

    $sql = "INSERT INTO aduan (judul_keluhan, keluhan, wilayah, foto, id_user, tanggal_masukkan) VALUES ('$judul', '$keluhan', '$wilayah', '$target_file', $userInfo, CURRENT_TIMESTAMP)";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil dimasukkan";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        echo "<pre>";
        print_r($_FILES);
        echo "</pre>";
    }
    
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="main.js" defer></script>
    <title>SekNdes</title>
    <link rel="stylesheet" href="main.css">
</head>
<body class=" w-[85%] h-screen">
    <div class="flex text-center  text-white h-40 text-lg place-self-center">
        <div class="place-self-center">
            <p>Hallo <?php echo $data_user_login['name']; ?>, punya keluhan apa?</p>
            <p>Jangan ragu ragu untuk menyampaikan ke kita ya</p>
        </div>
    </div>
    <form class="w-[85%] space-y-6 mx-auto text-white" action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="w-[100%]">
            <label for="email" class="block text-sm text-white font-medium leading-6 ">Judul</label>
            <div class="mt-2">
                <input id="email" name="email" type="email" autocomplete="email" required class="block w-[100%] rounded-md border-0 py-1.5 white shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
        </div>
        <div class="w-[100%]">
            <label for="email" class="block text-sm text-white font-medium leading-6 ">Keluhan</label>
            <div class="mt-2">
                <input id="email" name="email" type="email" autocomplete="email" required class="block w-[100%] rounded-md border-0 py-1.5 white shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
        </div>
        <div class="w-[100%]">
            <label for="email" class="block text-sm text-white font-medium leading-6 ">Wilayah</label>
            <div class="mt-2">
                <input id="email" name="email" type="email" autocomplete="email" required class="block w-[100%] rounded-md border-0 py-1.5 white shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
        </div>
        <div class="w-[100%]">
            <label for="email" class="block text-sm text-white font-medium leading-6 ">Media</label>
            <div class="mt-2">
                <input id="foto" name="foto" type="file" autocomplete="" required accept="image/*" class="block w-[100%] rounded-md border-0 py-1.5 white shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
        </div>
        <div>
            <button type="submit" class="flex w-[100%] justify-center rounded-md bg-blue-500 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Kirim</button>
        </div>
    </form>
    <div class="text-white w-[85%] bg-gray-900">
        <div>
            <h1>Kumpulan Laporan User Lain Disini</h1>
            <h1>Kumpulan Laporan User Lain Disini</h1>
            <h1>Kumpulan Laporan User Lain Disini</h1>
            <h1>Kumpulan Laporan User Lain Disini</h1>
            <h1>Kumpulan Laporan User Lain Disini</h1>
            <h1>Kumpulan Laporan User Lain Disini</h1>
        </div>
    </div>
</body>