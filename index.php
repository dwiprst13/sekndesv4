<?php
include 'config.php';

$userInfo = @$_SESSION['id_user'];
$q_data_user_login=mysqli_query($conn, "SELECT * FROM user WHERE id_user='$userInfo'");
$data_user_login=mysqli_fetch_array($q_data_user_login);

// if(isset($_POST["submit"])){
//     $email = $_POST["email"];
//     $password = md5($_POST["password"]);
//     $result = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");
//     $row = mysqli_fetch_assoc($result);
//     if(mysqli_num_rows($result) > 0){
//         if($password == $row['password']){
//             if ($row['role']=='admin') {
//                 $_SESSION['id_user_admin']=$row['id_user'];
//                 $_SESSION['login_admin']='login';
//                 header('Location: dashboard/admin/index.php');
//                 exit();
//             }else{
//                 $_SESSION['id_user']=$row['id_user'];
//                 $_SESSION['login']='login';
//                 header ('Location: index.php');
//             } 
//         }
//         else{
//         }
//     }
//     }

?>

<!doctype html>
<html lang="en" class="scroll-smooth">
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
    <link rel="icon" type="image/x-icon" href="asset/pemerintah/gambar3.jpeg">
    <!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> -->
    <link rel="stylesheet" href="css/animate.css">
</head>

<body chrome-hide-address-bar class="font-[Poppins] bg-white">
    <header class="bg-blue-700 sticky top-0">
        <nav class="flex justify-between items-center h-20 w-[75%]  mx-auto" >
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
                <?php if(!empty($userInfo)){ ?>
                    <div class="user-info">
                        <button id="logoutBtn" class="bg-[#a6c1ee] text-white px-2 py-1 lg:px-5 lg:py-2 rounded-lg bg-blue-500 hover:bg-blue-300 active:border-none">
                        <?php
                            $fullName = $data_user_login['name'];
                            $parts = explode(' ', $fullName);
                            $firstName = $parts[0];
                            echo '<span class="akun-btn">' . $firstName . '</span>';
                        ?>
                        </button>
                    </div>
                <?php }
                else { ?>
                    <button class="bg-[#a6c1ee] text-white px-2 py-1 lg:px-5 lg:py-2 rounded-lg bg-blue-500 hover:bg-blue-300"><a href="login.php">Masuk</a></button>
                <?php } ?>
                
                <ion-icon onclick="onToggleMenu(this)" name="menu" class="text-
                xl  text-white cursor-pointer lg:hidden"></ion-icon>
            </div>

            <div id="myModal" class="modal">
                <div class="modal-content">
                    <p>Apakah Anda yakin ingin keluar dari akun Anda?</p>
                    <div class="modalButton">
                        <button id="confirmLogout">Ya</button>
                        <button id="cancelLogout">Tidak</button>
                    </div>
                </div>
            </div>

    </header>

    <div class="body-content bg-white dark:bg-gray-900  dark:text-white top-20">
            <?php
                $page = isset($_GET['page']) ? $_GET['page'] : 'beranda';
                switch ($page) {
                    case 'artikel':
                    include 'artikel.php';
                    break;
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
        <script src="js/wow.min.js"></script>
        <script>
        new WOW().init();
        </script>

    <script>
        const navLinks = document.querySelector('.nav-links')
        function onToggleMenu(e){
            e.name = e.name === 'menu' ? 'close' : 'menu'
            navLinks.classList.toggle('top-[9%]')
        }

        var modal = document.getElementById('myModal');
        var btn = document.getElementById('logoutBtn');
        var modalButtonDiv = document.querySelector('.modalButton');
        btn.onclick = function() {
        modal.style.display = 'block';
        };
        window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = 'none';
        }
        };
        modalButtonDiv.addEventListener('click', function(event) {
            if (event.target.id === 'cancelLogout') {
                modal.style.display = 'none';
            } else if (event.target.id === 'confirmLogout') {
                window.location.href = 'logout.php';
            }
        });
    </script>
</body>

</html>