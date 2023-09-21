<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="<?= base_url("assets/css/style.css")?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="profile-box">
            <h3><b>Profil</b></h3>
            <img src="<?=base_url("assets/img/fotoShafaauliya.jpg")?>" class="profile-pic"><br><br>
            <div class="btn">
                <button type="button" style="width: 250px;"><?= $nama ?></button><br><br>
                <button type="button" style="width: 250px;"><?= $kelas ?></button><br><br>
                <button type="button" style="width: 250px;"><?= $npm ?></button><br><br>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>