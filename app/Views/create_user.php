<?= $this->extend('layouts/app')?>

<?= $this->section('content')?>

    <div class="container">
        <div class="profile-box-create">
            <form action="<?= base_url('/user/store')?>" method="post" enctype="multipart/form-data">
            <?php if(session()->getFlashdata('errors')) : ?>
                <div class="class-error">
                                
                <?= session()->getFlashdata('errors') ?>
                            
                </div>
            <?php endif; ?>
            
                <div class="input-box">
                    <b><h3>Input Data</h3></b><br>
                    <input type="file" name="foto" id="foto" style="width: 250px;"><br><br>
                    <input type="text" name="nama" placeholder="Name" value="<?= old('nama') ?>" style="width: 250px;"> <br><br>
                    <input type="text" name="npm" placeholder="NPM" value="<?= old('npm') ?>" style="width: 250px;"><br><br>
                    <select name="kelas" id="kelas" value="<?= old('kelas') ?>" style="width: 250px;">
                    <option selected value="">Class</option>
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
                    <br><br><button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>

<?= $this->endSection()?>