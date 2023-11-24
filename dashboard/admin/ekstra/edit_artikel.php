<?php

$id_artikel = $_GET['id_artikel'];
$result = mysqli_query($conn, "SELECT * FROM artikel WHERE id_artikel='$id_artikel'");
$row = mysqli_fetch_assoc($result);

if (isset($_POST["submit"])) {
    $new_judul = $_POST['new_judul'];
    $new_isi = $_POST['new_isi'];

    $new_gambar = $row['gambar']; // Default to the existing value
    if ($_FILES['foto']['size'] > 0) {
        $uploadDir = "../../uploads/artikel/"; 
        $new_gambar = $uploadDir . basename($_FILES['foto']['name']);
        move_uploaded_file($_FILES['foto']['tmp_name'], $new_gambar);
    }

    $update_artikel = $conn->prepare("UPDATE artikel SET judul=?, gambar=?, content=? WHERE id_artikel=?");
    $update_artikel->bind_param("sssi", $new_judul, $new_gambar, $new_isi, $id_artikel);
    
    if ($update_artikel->execute()) {
        echo "Edit Data Berhasil";
        header("Location: ?page=edit_artikel&id_artikel=$id_artikel");
        exit();
    } else {
        echo "Error updating artikel: " . $conn->error;
    }

    $update_user->close();
}
?>

<h1>Edit Artikel</h1>

<form action="" method="post" enctype="multipart/form-data" autocomplete="off">
    <input type="hidden" name="id_user" value="<?= $row['id_artikel'] ?>">
    <label for="new_judul">Judul:</label>
    <input type="text" name="new_judul" value="<?= $row['judul'] ?>" required><br>
    <img src="<?= $row['gambar'] ?>" alt="Gambar Artikel" height="250px" width="300px"><br>
    <input type="file" name="foto" id="foto" accept="image/*"><br>
    <textarea name="new_isi" id="isi" rows="10" cols="100"><?= $row['content'] ?></textarea><br>
    <button type="submit" name="submit">Kirim</button>
</form> 

<a href="?page=artikel">Kembali</a>
