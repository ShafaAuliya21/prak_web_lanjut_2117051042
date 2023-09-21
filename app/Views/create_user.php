<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
</head>
<body>
    <form action="<?= base_url('user/store')?>" method="POST">
        <input type="text" name="nama" placeholder="Nama"><br><br>
        <input type="text" name="kelas" placeholder="Kelas"><br><br>
        <input type="text" name="npm" placeholder="NPM"><br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>