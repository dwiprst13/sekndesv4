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
    <script src="../assets/js/script.js" defer></script>
    <title>SekNdes</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="icon" type="image/x-icon" href="asset/pemerintah/gambar3.jpeg">
</head>
<body>
<div class="fixed left-0 top-0 w-64 h-full bg-gray-900 p-4 z-50 sidebar-menu transition-transform">
        <a href="#" class="flex items-center pb-4 border-b border-b-gray-800">
            <img src="https://placehold.co/32x32" alt="" class="w-8 h-8 rounded object-cover">
            <span class="text-lg font-bold text-white ml-3">Logo</span>
        </a>
        <ul class="mt-4">
            <li class="mb-1 group active">
                <a href="?page=dashboard" class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md">
                    <i class="ri-home-2-line mr-3 text-lg"></i>
                    <span class="text-sm">Dashboard</span>
                </a>
            </li>
            <li class="mb-1 group ">
                <a href="?page=user" class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md">
                    <i class="ri-home-2-line mr-3 text-lg"></i>
                    <span class="text-sm">User</span>
                </a>
            </li>
            <li class="mb-1 group ">
                <a href="?page=artikel" class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md">
                    <i class="ri-home-2-line mr-3 text-lg"></i>
                    <span class="text-sm">Artikel</span>
                </a>
            </li>
            <li class="mb-1 group ">
                <a href="?page=galeri" class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md">
                    <i class="ri-home-2-line mr-3 text-lg"></i>
                    <span class="text-sm">Galeri</span>
                </a>
            </li>
            <li class="mb-1 group ">
                <a href="?page=lapor" class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md">
                    <i class="ri-home-2-line mr-3 text-lg"></i>
                    <span class="text-sm">Laporan</span>
                </a>
            </li>
            <li class="mb-1 group">
                <a href="?page=informasi" class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md">
                    <i class="ri-settings-2-line mr-3 text-lg"></i>
                    <span class="text-sm">Informasi</span>
                </a>
            </li>
        </ul>
    </div>
    <main class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-gray-50 min-h-screen transition-all main">
        <div class=" bg-white items-center shadow-md shadow-black/5 sticky top-0 left-0 z-30">
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
    </main>
        
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
<?php } ?>