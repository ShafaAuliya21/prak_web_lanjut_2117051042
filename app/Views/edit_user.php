<?= $this->extend('layouts/app')?>

<?= $this->section('content')?>

    <div class="container">
        <div class="profile-box">
            <form action="<?= base_url('/user/'. $user['id'])?>" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="PUT">
            <?= csrf_field()?>
            <?php if(session()->getFlashdata('errors')) : ?>
                <div class="class-error">
                                
                <?= session()->getFlashdata('errors') ?>
                            
                </div>
            <?php endif; ?>
            
                <div class="input-box">
                    <b><h3>Input Data</h3></b><br>
                    <img src="<?= $user['foto'] ?? '<default-foto>' ?>" class="rounded-circle" width= "100" height="100"><br><br>
                    <input type="file" name="foto" id="foto" style="width: 250px;" ><br><br>
                    <input type="text" name="nama" placeholder="Nama" value="<?= $user['nama']?>" id="nama" style="width: 250px;"> <br><br>
                    <input type="text" name="npm" placeholder="NPM" id="npm" value="<?= $user['npm']?>" style="width: 250px;"><br><br>
                    <select name="kelas" id="kelas" value="<?= old('kelas') ?>" style="width: 250px;">
                    <option selected value="">Kelas</option>
                        <?php
                        foreach ($kelas as $item){
                        ?>
                            <option value="<?= $item['id'] ?>" <?= $user['id_kelas'] == $item['id']? 'selected' : ''?> >
                                <?= $item['nama_kelas']?>
                            </option>
                        <?php
                        }
                        ?>
                    </select>
                    <br><br><button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>

<?= $this->endSection()?>