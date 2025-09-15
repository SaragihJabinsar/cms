<?php include 'db.php'; ?>
<?php
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM posts WHERE id=$id");
$post = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= $post['title']; ?></title>
    <!-- Bootstrap CSS dari CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="container py-4">
    <a href="index.php" class="btn btn-secondary mb-3">⬅ Kembali</a>
    <h2><?= $post['title']; ?></h2>
    <?php if ($post['image']): ?>
    <img src="assets/uploads/<?= $post['image']; ?>" class="img-thumbnail mb-3 w-25 h-25">
    <?php endif; ?>
    <p><?= nl2br($post['content']); ?></p> // Menampilkan konten dengan baris baru
    <p><small>Diposting pada <?= $post['created_at']; ?></small></p>

    <!-- Bootstrap JS dari CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>