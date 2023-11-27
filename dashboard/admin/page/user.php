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
    <h1>USER</h1>
    <div class="top-user-table">
        <button class="tambah-user-btn"><a href="?page=tambah_user">Tambah</a></button>
        <form class="user-search" method="POST" role="search" >
            <input type="text" name="search" placeholder="Cari Disini...">
            <button name="searchh" type="submit">Cari</button>
        </form>
    </div>
    <table class="user-table-header">
        <tr>
            <td>Id</td>
            <td>Nama</td>
            <td>Email</td>
            <td>Nomor Telp</td>
            <td>NIK</td>
            <td>Pedukuhan</td>
            <td>Hapus</td>
            <td>Edit</td>
        </tr>
    </table>
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
            <table class="user-table">
                <tr>
                    <td><?= $row['id_user'] ?></td>
                    <td><?= $row['name'] ?></td>
                    <td><?= $email ?></td>
                    <td><?= $row['phone'] ?></td>
                    <td><?= $nik ?></td>
                    <td><?= $row['pedukuhan'] ?></td>
                    <td>                
                        <form action="" method="post">
                            <input type="hidden" name="id_user" value="<?= $row['id_user'] ?>">
                            <button class="user-hapus-btn" type="submit" name="hapus">Hapus</button>
                        </form>
                    </td>
                    <td>
                        <form action="" method="get">
                            <input type="hidden" name="page" value="edit_user">
                            <input type="hidden" name="id_user" value="<?= $row['id_user'] ?>">
                            <button class="user-edit-btn" type="submit">Edit</button>
                        </form>
                    </td>
                </tr>
            </table>
            <br>
            <?php
    }
    ?>
    

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Product name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Color
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Category
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Price
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Apple MacBook Pro 17"
                    </th>
                    <td class="px-6 py-4">
                        Silver
                    </td>
                    <td class="px-6 py-4">
                        Laptop
                    </td>
                    <td class="px-6 py-4">
                        $2999
                    </td>
                    <td class="px-6 py-4">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <script>
        function editUser(id) {
            window.location.href = "?page=edit_user&id_user=" + id;
        }
    </script>
</body>

    </html>
    <?php
}
?>



