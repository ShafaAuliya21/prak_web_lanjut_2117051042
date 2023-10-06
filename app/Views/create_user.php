<?= $this->extend('layouts/app')?>

<?= $this->section('content')?>
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
                <br><button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

<?= $this->endSection()?>