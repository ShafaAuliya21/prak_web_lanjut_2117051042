<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>

<div class="container">
        <div class="profile-box-kelas">
            <?php $nama_kelas = session()->getFlashdata('nama_kelas'); ?>
            <form action="<?= base_url('/kelas/store') ?>" method="post" enctype="multipart/form-data">
               
            <div class="input-box">
                <b><h3>Input Class</h3></b><br>
                    <label for="nama_kelas" class="form-label">Nama Kelas</label>
                    <input name="nama_kelas" type="text"  class="form-control <?= (empty(validation_show_error('nama_kelas'))) ? '' : 'is-invalid' ?>"  value="<?= old('nama_kelas') ?>" id="nama_kelas" placeholder="Ex : D">
                    <div class='invalid-feedback'>
                        <?= validation_show_error('nama_kelas'); ?>
                    </div>
                
                    <br><label for="kapasitas_kelas" class="form-label">Daya Tampung Kelas</label>
                    <input name="kapasitas_kelas" type="text"  class="form-control <?= (empty(validation_show_error('kapasitas_kelas'))) ? '' : 'is-invalid' ?>"  value="<?= old('kapasitas_kelas') ?>" id="kapasitas_kelas" placeholder="Ex : 25">
                    <div class='invalid-feedback'>
                        <?= validation_show_error('kapasitas_kelas'); ?>
                    </div>
                
                    <br><button type="submit" class="btn btn-primary">Tambah Kelas</button>
                </div>
            </form>
    </div>
</div>

<?= $this->endSection() ?>