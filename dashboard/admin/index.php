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
    <title>SekNdes</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
<div class="wrapper">
    <nav class="sidebar">
        <div class="sidebar-name">
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
        } ?>
    </nav>
    <main class="content">
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
    </main>
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