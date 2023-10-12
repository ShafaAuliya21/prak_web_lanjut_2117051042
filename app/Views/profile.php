<?= $this->extend('layouts/app')?>

<?= $this->section('content')?>

    <div class="container">
        <div class="profile-box">
            <h3><b>Profil</b></h3>
            <?php if(session()->getFlashdata('success')) : ?>
                <div class="row my-3">
                    <div class="alert alert-success" role="alert">
                        <?= session()->getFlashdata('success') ?>
                    </div>
                </div>
            <?php endif; ?>
            <img src="<?=$user['foto']?? '<default-foto>'?>" style="height: 150px; width: 150px; border-radius: 50%; object-fit: cover; object-position: 0"><br>
            <div class="btn">
                <button type="button" style="width: 250px;"><?= $user['nama']?></button><br><br>
                <button type="button" style="width: 250px;"><?= $user['npm']?></button><br><br>
                <button type="button" style="width: 250px;"><?= $user['nama_kelas']?></button><br><br>
            </div>
        </div>
    </div>

<?= $this->endSection()?>