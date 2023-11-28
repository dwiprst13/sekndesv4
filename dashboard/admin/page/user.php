<?php
if (isset($_POST["hapus"])) {
    $id_user = $_POST['id_user'];

    $delete_aduan = mysqli_query($conn, "DELETE FROM aduan WHERE id_user='$id_user'");

    if ($delete_aduan) {
        $delete_user = mysqli_query($conn, "DELETE FROM user WHERE id_user='$id_user'");
        if ($delete_user) {
            echo "<meta http-equiv='refresh' content='0; url=?page=user'>";
        } else {
            $alert = "<div class='alert alert-danger'>Error deleting user</div>";
        }
    } else {
        $alert = "<div class='alert alert-danger'>Error deleting related records in aduan table</div>";
    }
} 

?>
<?php
if (isset($_GET['page']) && $_GET['page'] == 'tambah_user') {
    include 'ekstra/tambah_user.php'; 
} else {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <header class="bg-gray-900 w-[100%] sticky left-0 top-0">
        <nav class="h-16 w-[100%] flex mx-auto " >
            <div class="place-self-center p-5">
                <h1 class="text-white font-bold">User</h1>
            </div>
        </nav>
    </header>
    <!-- component -->
<div class="text-gray-900 bg-gray-200">
    <div class="p-4 flex">
        <h1 class="text-xl">
            Daftar User
        </h1>
    </div>
    <div class="px-3 py-4 flex justify-center">
        <table class="w-full text-md table-auto bg-white shadow-md rounded mb-4">
            <tbody>
                <tr class="border-b">
                    <th class="text-center p-3 px-5">Id</th>
                    <th class="text-center p-3 px-5">Nama</th>
                    <th class="text-center p-3 px-5">Email</th>
                    <th class="text-center p-3 px-5">Telp</th>
                    <th class="text-center p-3 px-5">NIK</th>
                    <th class="text-center p-3 px-5">Pedukuhan</th>
                    <th class="text-center p-3 px-5">Hapus</th>
                    <th class="text-center p-3 px-5">Edit</th>
                    <th></th>
                </tr>
                <?php
                    if(isset($_POST['search'])){
                        $searchKeyword=$_POST['search'];
                        $query = mysqli_query($conn, "SELECT * FROM user WHERE name LIKE '%$searchKeyword%' OR email LIKE '%$searchKeyword%' OR phone LIKE '%$searchKeyword%' OR nik LIKE '%$searchKeyword%' OR pedukuhan LIKE '%$searchKeyword%'");  
                    }
                    else{
                        $query = mysqli_query($conn, "SELECT * FROM user");
                    }
                    
                    while ($row = mysqli_fetch_assoc($query)) {
                        $nik = $row['nik'];
                        $email = $row['email'];
                        if (strlen($email) > 12) {
                            $email = substr($email, 0, 12) . '**'; 
                        }
                        ?>
                <tr class="border-b bg-gray-100">
                    <td class="p-3 text-center px-5"><?= $row['id_user'] ?></td>
                    <td class="p-3 text-center px-5"><?= $row['name'] ?></td>
                    <td class="p-3 text-center px-5"><?= $row['email'] ?></td>
                    <td class="p-3 text-center px-5"><?= $row['phone'] ?></td>
                    <td class="p-3 text-center px-5 w-[8rem] truncate"><?= $row['nik'] ?></td>
                    <td class="p-3 text-center px-5"><?= $row['pedukuhan'] ?></td>
                    <td class="p-3 text-center px-5">
                        <form action="" method="get">
                            <input type="hidden" name="page" value="edit_user">
                            <input type="hidden" name="id_user" value="<?= $row['id_user'] ?>">
                            <button type="submit" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Edit</button>
                        </form>
                    </td>
                    <td class="p-3 text-center px-5">
                        <form action="" method="get">
                            <input type="hidden" name="page" value="edit_user">
                            <input type="hidden" name="id_user" value="<?= $row['id_user'] ?>">
                            <button type="submit" class="mr-3 text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Hapus</button>
                        </form>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<?php  
} ?>
