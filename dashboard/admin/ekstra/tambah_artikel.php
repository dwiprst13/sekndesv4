
<?php
if (isset($_POST["submit"])) {
    $judul = $_POST["judul"];
    $isi = $_POST["isi"];
    $target_dir = "../../uploads/artikel/"; 
    $target_file = $target_dir . basename($_FILES["foto"]["name"]);
    move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file);

    $sql = "INSERT INTO artikel (judul, gambar, content, date) VALUES ('$judul', '$target_file', '$isi', CURRENT_TIMESTAMP)";

    if ($conn->query($sql) === TRUE) {
        header('Location: ?page=artikel');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        echo "<pre>";
        print_r($_FILES);
        echo "</pre>";
    }
}
?>

<div class="regis-container">

<h2>Artikel</h2>
<form action="" method="post" enctype="multipart/form-data" autocomplete="off">
    <div class="txt_field">
        <input type="text" name="judul" id="judul" required />
        <label for="judul">Judul</label>
    </div>
    <input type="file" name="foto" id="foto" accept="image/*"><br>
    <textarea name="isi" id="isi" rows="10" cols="100"></textarea><br>
    <button type="submit" name="submit">Kirim</button>
    </div>
</form> 
<a href="?page=artikel">Kembali</a>

</div>
<br>

