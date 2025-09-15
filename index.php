<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Simple Blog</title>
    <!-- Bootstrap CSS dari CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="container py-4">
    <h1 class="mb-4 text-center">📖 My Simple Blog</h1>
    <a href="admin.php" class="btn btn-primary mb-3">+ Tambah Artikel</a>
    <div class="row">
        <?php
    $result = mysqli_query($conn, "SELECT * FROM posts ORDER BY id DESC");
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="col-md-4 mb-3">';
        echo '<div class="card h-100">';
        if ($row['image']) {
            echo '<img src="assets/uploads/'.$row['image'].'" class="card-img-top mx-auto m-3 p-2"
                alt="Gambar Artikel">';
        }
        echo '<div class="card-body">';
        echo '<h5 class="card-title">'.$row['title'].'</h5>';
        echo '<a href="post.php?id='.$row['id'].'" class="btn btn-sm btn-info">Baca</a> ';
        echo '<a href="delete.php?id='.$row['id'].'" class="btn btn-sm btn-danger" onclick="return confirm(\'Yakin mau hapus?\')">Hapus</a>';
        echo '</div></div></div>';
    }
    ?>
    </div>

    <!-- Bootstrap JS dari CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>