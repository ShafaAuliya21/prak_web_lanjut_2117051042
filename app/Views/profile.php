<?= $this->extend('layouts/app')?>

<?= $this->section('content')?>

    <div class="container">
        <div class="profile-box-profile">
            <h3><b>Profile</b></h3><br>
            <?php if(session()->getFlashdata('success')) : ?>
                <div class="row my-3">
                    <div class="alert alert-success" role="alert">
                        <?= session()->getFlashdata('success') ?>
                    </div>
                </div>
            <?php endif; ?>
            <img src="<?=$user['foto']?? '<default-foto>'?>" class="rounded-circle" width= "100" height="100"><br>
            <div class="btn">
                <button type="button" style="width: 250px;"><?= $user['nama']?></button><br><br>
                <button type="button" style="width: 250px;"><?= $user['npm']?></button><br><br>
                <button type="button" style="width: 250px;"><?= $user['nama_kelas']?></button><br><br>
            </div>
        </div>
    </div>

<?= $this->endSection()?>