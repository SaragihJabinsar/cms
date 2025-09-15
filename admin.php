<?php include 'db.php'; ?>
<?php
if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    
    $image = "";
    if (!empty($_FILES['image']['name'])) {
        $image = time() . "_" . $_FILES['image']['name']; // Membuat nama unik
        move_uploaded_file($_FILES['image']['tmp_name'], "assets/uploads/".$image); // Memindahkan file ke folder uploads
    }
    
    $query = "INSERT INTO posts (title, content, image) VALUES ('$title', '$content', '$image')";
    mysqli_query($conn, $query);
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tambah Artikel</title>
    <!-- Bootstrap CSS dari CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="container py-4">
    <h2 class="mb-3">Tambah Artikel Baru</h2>
    <form method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Konten</label>
            <textarea name="content" class="form-control" rows="5" required></textarea>
        </div>
        <div class="mb-3">
            <label>Gambar</label>
            <input type="file" name="image" class="form-control">
        </div>
        <button type="submit" name="submit" class="btn btn-success">Simpan</button>
    </form>

    <!-- Bootstrap JS dari CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>