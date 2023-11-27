<?php
include'../../config.php';
if($_SESSION['login_admin']=='login'){

    $id_user_login=@$_SESSION['id_user_admin'];
    $q_data_user_login=mysqli_query($conn, "SELECT * FROM user WHERE id_user='$id_user_login'");
    $data_user_login=mysqli_fetch_array($q_data_user_login);
    
?>

<!DOCTYPE html>
    <html lang="en">
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
    <!-- <link rel="stylesheet" href="../assets/css/style.css"> -->
    <link rel="icon" type="image/x-icon" href="asset/pemerintah/gambar3.jpeg">
</head>
<body>
<div class="wrapper flex grid grid-cols-12 bg-gray-100">
    <nav class="sidebar justify-between flex flex-col left-0 top-0 sticky col-span-2 overflow-hidden h-screen bg-blue-500">
        <div class="justify-center w-[100%] mx-auto p-6">
            <h1 class="text-center text-3xl font-bold text-white">ADMIN</h1>
        </div>
        <ul class="justify-center w-[100%] mx-auto p-6">
            <li class="decoration-none rounded-lg w-[100%] flex bg-blue-700 my-2 h-12 text-center p-1 hover:bg-blue-900">
                <a href="index.php" class="w-[100%] place-self-center font-bold text-white ">Dashboard</a>
            </li>
            <li class="decoration-none rounded-lg w-[100%] flex bg-blue-700 my-2 h-12 text-center p-1 hover:bg-blue-900">
                <a href="?page=user" class="w-[100%] place-self-center font-bold text-white">User</a>
            </li>
            <li class="decoration-none rounded-lg w-[100%] flex bg-blue-700 my-2 h-12 text-center p-1 hover:bg-blue-900">
                <a href="?page=galeri" class="w-[100%] place-self-center font-bold text-white">Galeri</a>
            </li>
            <li class="decoration-none rounded-lg w-[100%] flex bg-blue-700 my-2 h-12 text-center p-1 hover:bg-blue-900">
                <a href="?page=artikel" class="w-[100%] place-self-center font-bold text-white">Artikel</a>
            </li>
            <li class="decoration-none rounded-lg w-[100%] flex bg-blue-700 my-2 h-12 text-center p-1 hover:bg-blue-900">
                <a href="?page=informasi" class="w-[100%] place-self-center font-bold text-white">Informasi</a>
            </li>
            <li class="decoration-none rounded-lg w-[100%] flex bg-blue-700 my-2 h-12 text-center p-1 hover:bg-blue-900">
                <a href="?page=lapor" class="w-[100%] place-self-center font-bold text-white">Lapor</a>
            </li>
        </ul>
        <?php if(!empty($id_user_login)){ ?>
        <div class="user-info flex  pb-5">
            <div class="container-user mx-auto ">
                <span class="text-white mr-2"><?php echo $data_user_login['name']; ?></span>
                <button onclick="confirmLogout()" href="../../logout.php" class="bg-red-600 p-2 rounded-lg place-self-center text-white">Logout</button>
            </div>
        </div>
        <?php }
        else { 
        } ?>
    </nav>

        <!-- <div class="sidebar-name">
            <h2>SekNdes Admin</h2>
        </div>
        <ul class="navbar-menu">
            <li class="nav-item"><a href="index.php" class="beranda-btn">Dashboard</a></li>
            <li class="nav-item"><a href="?page=user" class="profil-btn">User</a></li>
            <li class="nav-item"><a href="?page=galeri" class="informasi-btn">Galeri</a></li>
            <li class="nav-item"><a href="?page=artikel" class="artikel-btn">Artikel</a></li>
            <li class="nav-item"><a href="?page=informasi" class="galeri-btn">Informasi</a></li>
            <li class="nav-item"><a href="?page=pemerintahan" class="pemerintahan-btn">Pemerintahan</a></li>
            <li class="nav-item"><a href="?page=lapor" class="lapor-btn">Lapor</a></li>
        </ul>
        <?php if(!empty($id_user_login)){ ?>
        <div class="user-info">
            <div class="container-user">
                <span class="akun-name"><?php echo $data_user_login['name']; ?></span>
                <button onclick="confirmLogout()" href="../../logout.php" class="logout-btn">Logout</button>
            </div>
        </div>
        <?php }
        else { 
        } ?> -->
    
    <div class="content col-span-9">
        <?php
        }else{
            header('location:../../login.php');
        }
        ?>
        <?php
            $page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';
        
            switch ($page) {
                // ===================> Include page artikel <===================
                case 'artikel':
                    include 'page/artikel.php';
                    break;
                case 'tambah_artikel':
                    include 'ekstra/tambah_artikel.php';
                    break;
                case 'edit_artikel':
                    include 'ekstra/edit_artikel.php';
                    break;
                // ===================> Include page user <===================
                case 'user':
                    include 'page/user.php';
                    break;
                case 'tambah_user':
                    include 'ekstra/tambah_user.php';
                    break;
                case 'edit_user':
                    include 'ekstra/edit_user.php';
                    break;
                case 'search_user':
                    include 'ekstra/search_user.php';
                    break;
                // ===================> Include page profil <===================
                case 'profil':
                    include 'profil.php';
                    break;
                case 'edit_profil':
                    include 'ekstra/edit_profil.php';
                    break;
                case 'tambah_profil':
                    include 'ekstra/tambah_profil.php';
                    break;
                // ===================> Include page pemerintahan <===================
                case 'pemerintahan':
                    include 'page/pemerintahan.php';
                    break;
                case 'edit_pemerintahan':
                    include 'ekstra/edit_pemerintahan.php';
                    break;
                // ===================> Include page informasi <===================
                case 'informasi':
                    include 'page/informasi.php';
                    break;
                case 'edit_informasi':
                    include 'ekstra/edit_informasi.php';
                    break;
                case 'tambah_informasi':
                    include 'ekstra/tambah_informasi.php';
                    break;
                // ===================> Include page galeri <===================
                case 'galeri':
                    include 'page/galeri.php';
                    break;
                case 'edit_galeri':
                    include 'ekstra/edit_galeri.php';
                    break;
                case 'tambah_galeri':
                    include 'ekstra/tambah_galeri.php';
                    break;
                // ===================> Include page lapor <===================
                case 'lapor':
                    include 'page/lapor.php';
                    break;
                case 'edit_lapor':
                    include 'ekstra/edit_lapor.php';
                    break;
                // ===================> Include page dashboard as default <===================
                default:
                    include 'page/dashboard.php';
                    break;
            }
        ?>
    </div>
</div>
<script>
    function confirmLogout() {
    if (confirm('Apakah Anda yakin ingin logout?')) {
        window.location.href = '../../logout.php'; // Redirect ke halaman logout jika dikonfirmasi
    }
    }
</script>
</body>
<?php

?>