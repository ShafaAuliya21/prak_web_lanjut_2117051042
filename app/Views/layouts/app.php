<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?=$title?>
    </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url("assets/css/style.css")?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
</head>
<body>

    <header class="header">
        <div class="logo">
            Data<span>Mahasiswa</span>
        </div>
            <ul class="navlist mb-0 ps-0">
                <li><a href="<?= base_url('/')?>">Home</a></li>
                <li><a href="<?= base_url('/user')?>">List User</a></li>
                <li><a href="<?= base_url('/kelas')?>">List Class</a></li>
            </ul>
        </header>
        <?= $this->renderSection('content')?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>