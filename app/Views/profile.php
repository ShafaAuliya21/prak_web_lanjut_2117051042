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
            <img src="<?=base_url("assets/img/fotoShafaauliya.jpg")?>" class="profile-pic"><br><br>
            <div class="btn">
                <button type="button" style="width: 250px;"><?= $nama ?></button><br><br>
                <button type="button" style="width: 250px;"><?= $kelas ?></button><br><br>
                <button type="button" style="width: 250px;"><?= $npm ?></button><br><br>
            </div>
        </div>
    </div>

<?= $this->endSection()?>