<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>

    <div class="container">
        <div class="profile-box-kelas">
            <?php $nama_kelas = session()->getFlashdata('nama_kelas'); ?>
            <form action="<?= base_url('/kelas/' . $kelas['id']) ?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="PUT">
            <?= csrf_field() ?>
             
            <div class="input-box">
                <b><h3>Edit Class</h3></b><br>
                    <label for="nama_kelas" class="form-label">Class Name</label>
                    <input name="nama_kelas" type="text" class="form-control<?= (empty(validation_show_error('nama_kelas'))) ? '' : 'is-invalid' ?>"  value="<?= $kelas['nama_kelas'] ?>" id="nama_kelas" placeholder="Ex : D">
                    <div class='invalid-feedback'>
                        <?= validation_show_error('nama_kelas'); ?>
                    </div>

                    <br><label for="daya_tampung" class="form-label">Daya Tampung Kelas</label>
                    <input name="kapasitas_kelas" type="text" class="form-control<?= (empty(validation_show_error('kapasitas_kelas'))) ? '' : 'is-invalid' ?>"  value="<?= $kelas['kapasitas_kelas'] ?>" id="kapasitas_kelas" placeholder="Ex : 30">
                    <div class='invalid-feedback'>
                        <?= validation_show_error('kapasitas_kelas'); ?>
                    </div>
                
                    <br><button type="submit" class="btn btn-primary">Update Class</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>