<?php
if(@$_SESSION['login_admin']=='login'){

    if(isset($_POST["submit"])){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $nik = $_POST["nik"];
        $pedukuhan = $_POST["pedukuhan"];
        $password = $_POST["password"];
        $confirmpassword = $_POST["confirmpassword"];
    
        $duplicate = mysqli_query($conn, "SELECT * FROM user WHERE nik = '$nik' OR email = '$email'");
        if(mysqli_num_rows($duplicate) > 0){
            echo "<script> showPopup('Email Sudah Digunakan'); </script>";
        }
        else{
            if(strlen($password) >= 8 && preg_match('/[A-Za-z]/', $password) && preg_match('/[0-9]/', $password)){
        
                if($password == $confirmpassword){
                    $hashed_password = md5($password);
        
                    $query = "INSERT INTO user (name, email, password, phone, nik, pedukuhan, role) VALUES ('$name','$email', '$hashed_password','$phone', '$nik','$pedukuhan', 'user')";
        
                    mysqli_query($conn, $query);
                    echo "<script> showPopup('Pendaftaran Sukses'); </script>";
                }
                else{
                    echo "<script> showPopup('Konfirmasi Password Tidak Cocok'); </script>";
                }
            }
            else{
                echo "<script> showPopup('Password harus memiliki setidaknya 8 karakter dan kombinasi alphanumeric'); </script>";
            }
        }
    }
}
?>

<div class="tambah-user-container">
    <h1>User</h1>
    <h2>Tambah User Baru</h2>
    <button class="tambah-user-back-btn"><a href="?page=user">Kembali</a></button>
    <form class="tambah-user-form" action="" method="post" autocomplete="off">
        <div class="txt_field">
            <label for="name">Nama</label>
            <span></span>
            <input type="text" name="name" id="name" required />
        </div>
        <div class="txt_field">
            <label for="email">Email</label>
            <span></span>
            <input type="email" name="email" id="email" required />
        </div>
        <div class="txt_field">
            <label for="phone">Nomor Telepon</label>
            <span></span>
            <input type="tel" name="phone" id="phone" required />
        </div>
        <div class="txt_field">
            <label for="nik">NIK</label>
            <span></span>
            <input type="text" name="nik" id="nik" required />
        </div>
        <div class="txt_field">
            <label for="pedukuhan">Pedukuhan</label>
            <span></span>
            <input type="text" name="pedukuhan" id="pedukuhan" required />
        </div>
        <div class="txt_field">
            <label for="password">Kata Sandi</label>
            <span></span>
            <input type="password" name="password" id="password" required />
        </div>
        <div class="txt_field">
            <label for="confirmpassword">Ulangi Kata Sandi</label>
            <span></span>
            <input type="password" name="confirmpassword" id="confirmpassword" required />
        </div>
        <button type="submit" name="submit">Tambahkan</button>
        <div class="signup_link">
        
        </div>
    </div>
    </form> 
</div>
<?

?>