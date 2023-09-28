<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link rel="stylesheet" href="<?= base_url("assets/css/style.css")?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="profile-box">
            <form action="<?= base_url('user/store')?>" method="POST">
                <b><h3>Inputan Data</h3></b><br>

                <?php if(session()->getFlashdata('errors')) : ?>
                <div class="class-error">
                    
                        <?= session()->getFlashdata('errors') ?>
                  
                </div>
                <?php endif; ?>

                <div class="input-box">
                    <input type="text" name="nama" placeholder="Nama" value="<?= old('nama') ?>"> <br><br>
                    <input type="text" name="npm" placeholder="NPM" value="<?= old('npm') ?>"><br><br>
                    <select name="kelas" id="kelas" value="<?= old('kelas') ?>">
                        <?php
                        foreach ($kelas as $item){
                        ?>
                            <option value="<?= $item['id'] ?>">
                                <?= $item['nama_kelas']?>
                            </option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <br><button type="submit" class="btn btn-secondary">Submit</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>