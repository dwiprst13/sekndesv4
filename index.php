<?php
include 'config.php';

$userInfo = @$_SESSION['id_user'];
$q_data_user_login=mysqli_query($conn, "SELECT * FROM user WHERE id_user='$userInfo'");
$data_user_login=mysqli_fetch_array($q_data_user_login);

?>

<!doctype html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet"> 
    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script> 
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="https://cdn.tailwindcss.com/3.3.2"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.css">
    <!-- My Asset -->
    <script src="main.js" defer></script>
    <link rel="stylesheet" href="main.css">
    <!-- Gambar Tab -->
    <link rel="icon" type="image/x-icon" href="asset/pemerintah/gambar6.jpg">
    <title>SekNdes</title>
</head>

<body chrome-hide-address-bar class="font-[Poppins] bg-white">
    <!-- Navbar -->
    <header class="bg-blue-700 sticky top-0">
        <nav class="flex justify-between items-center h-20 w-[75%] z-50 mx-auto" >
            <div>
                <h1><a class="text-white text-2xl font-bold" href="#">SekNdes</a></h1>
            </div>
            <div
                class="nav-links duration-500 bg-blue-700 lg:static absolute lg:min-h-fit min-h-[60vh] left-0 top-[-800%] lg:w-auto text-white w-full flex items-center px-5">
                <ul class="flex bg-blue-700 lg:flex-row flex-col lg:items-center lg:gap-[4vw] gap-8">
                    <li>
                        <a class="text-white hover:text-gray-500" href="?page=beranda">Beranda</a>
                    </li>
                    <li>
                        <a class="text-white hover:text-gray-500" href="?page=profil">Profil</a>
                    </li>
                    <li>
                        <a class="text-white hover:text-gray-500" href="?page=informasi">Informasi</a>
                    </li>
                    <li>
                        <a class="text-white hover:text-gray-500" href="?page=artikel">Artikel</a>
                    </li>
                    <li>
                        <a class="text-white hover:text-gray-500" href="?page=galeri">Galeri</a>
                    </li>
                    <li>
                        <a class="text-white hover:text-gray-500" href="?page=lapor">Lapor</a>
                    </li>
                </ul>
            </div>
            <div class="flex items-center gap-6" >
                <!-- Memastikan ada aktivitas login atau tidak -->
                <?php if(!empty($userInfo)){ ?> <!-- Jika Ada -->
                    <div class="user-info">
                        <button id="logoutBtn" class="bg-[#a6c1ee] text-white px-2 py-1 lg:px-5 lg:py-2 rounded-lg bg-blue-500 hover:bg-blue-300 active:border-none">
                        <?php 
                            // Menampilkan nama user ke dalam button
                            $fullName = $data_user_login['name'];
                            $parts = explode(' ', $fullName);
                            $firstName = $parts[0];
                            echo '<span class="akun-btn">' . $firstName . '</span>';
                        ?>
                        </button>
                    </div>
                <?php }
                else { ?> <!-- Jika Tidak -->
                    <button class="bg-[#a6c1ee] text-white px-2 py-1 lg:px-5 lg:py-2 rounded-lg bg-blue-500 hover:bg-blue-300"><a href="login.php">Masuk</a></button>
                <?php } ?>
                    <ion-icon onclick="onToggleMenu(this)" name="menu" class="text-
                xl  text-white cursor-pointer lg:hidden"></ion-icon>
            </div>

            <!-- MODAL KONFIRMASI LOGOUT -->
            <div id="myModal" class="modal">
                <div class="modal-content">
                    <p>Apakah Anda yakin ingin keluar dari akun Anda?</p>
                    <div class="modalButton">
                        <button id="confirmLogout">Ya</button>
                        <button id="cancelLogout">Tidak</button>
                    </div>
                </div>
            </div>
<<<<<<< HEAD
            

=======
>>>>>>> 6285136a6e1172e934f3a64a27dcaa8ce8469781
    </header>

    <!-- Body -->
    <!-- Include Methode -->
    <div class="body-content bg-white dark:bg-gray-900 z-1 dark:text-white top-20">
            <?php
                $page = isset($_GET['page']) ? $_GET['page'] : 'beranda'; // Kondisi default dimana akan memuat halaman beranda
                switch ($page) {
                    case 'artikel': //jika klik link ke "?page=artikel"
                    include 'artikel.php'; //muat halaman artikel.php
                    break; // akhiri action
                    case 'profil':
                    include 'profil.php';
                    break;
                    case 'pemerintahan':
                    include 'pemerintahan.php';
                    break; 
                    case 'informasi':
                    include 'informasi.php';
                    break;
                    case 'galeri':
                    include 'galeri.php';
                    break;
                    case 'detail_galeri':
                    include 'pages/detail_galeri.php';
                    break;
                    case 'lapor':
                    include 'lapor.php';
                    break;
                    default:
                    include 'beranda.php';
                    break;
                }
            ?>
        </div>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
<<<<<<< HEAD
    </body>
</html>
=======
</body>

</html>
>>>>>>> 6285136a6e1172e934f3a64a27dcaa8ce8469781
