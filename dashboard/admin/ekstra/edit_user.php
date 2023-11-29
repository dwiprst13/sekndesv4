<?php

$id_user = $_GET['id_user'];
$result = mysqli_query($conn, "SELECT * FROM user WHERE id_user='$id_user'");
$row = mysqli_fetch_assoc($result);

if (isset($_POST["submit"])) {
    $new_name = $_POST['new_name'];
    $new_email = $_POST['new_email'];
    $new_pedukuhan = $_POST['new_pedukuhan'];
    $new_role = $_POST['new_role'];

    if (!empty($_POST['new_password'])) {
        $new_password = md5($_POST['new_password']);
    } else {
        $new_password = $row['password'];
    }

    $update_user = $conn->prepare("UPDATE user SET name=?, email=?, password=?, pedukuhan=?, role=? WHERE id_user=?");
    $update_user->bind_param("ssssss", $new_name, $new_email, $new_password, $new_pedukuhan, $new_role, $id_user);

    if ($update_user->execute()) {
        echo "Edit Data Berhasil";
        header("Location: ?page=edit_user&id_user=$id_user");
        exit();
    } else {
        echo "Error updating user: " . $conn->error;
    }

    $update_user->close();
}
?>

<header class="bg-gray-900 w-[100%] sticky left-0 top-0">
    <nav class="h-16 w-[100%] flex mx-auto " >
        <div class="place-self-center flex gap-1 p-5">
            <h1 class="text-white font-bold"><a href="?page=user">User</a> / </h1>
            <h2 class="text-white"> Edit User</h2>
        </div>
    </nav>
</header>
<span class="akun-btn">Halo <?php echo $row['name']; ?></span>

<form method="post">
    <input type="hidden" name="id_user" value="<?= $row['id_user'] ?>">
    <label for="new_name">Name:</label>
    <input type="text" name="new_name" value="<?= $row['name'] ?>" required><br>
    <label for="new_email">Email:</label>
    <input type="text" name="new_email" value="<?= $row['email'] ?>" required><br>
    <label for="new_password">Password:</label>
    <input type="text" name="new_password" placeholder="Masukkan Password Baru?"><br>
    <label for="new_pedukuhan">Pedukuhan:</label>
    <input type="text" name="new_pedukuhan" value="<?= $row['pedukuhan'] ?>" required><br>
    <label for="new_role">Role:</label>
    <input type="text" name="new_role" value="<?= $row['role'] ?>" required><br>
    <button type="submit" name="submit">Update</button>
</form>

<a href="?page=user">Back to User List</a>
