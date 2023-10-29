<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>

<div class="container-listuser">
    <br><br><br><div class="data-box">
        <div class="data-mahasiswa">
            <h2>Class Table</h2>
        </div>
    </div>
        <a href="<?= base_url('kelas/create') ?>" type="button" class="btn btn-primary">Add Class</a>
            
        <div class="tabel-box">
            <table class="tabel-user">
                    <thead>
                        <tr>
                            <th class="col justify-content-center text-center" >No</th>
                            <th class="col justify-content-center text-center" >Class Name</th>
                            <th class="col justify-content-center text-center" >Class Capacity</th>
                            <th class="col justify-content-center text-center" style="width: 220px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            foreach($kelas as $key){
                        ?>
                            <tr>
                                <td class="col justify-content-center text-center"><?= $key['id'] ?></td>
                                <td class="col justify-content-center text-center"><?= $key['nama_kelas'] ?></td>
                                <td class="col justify-content-center text-center"><?= $key['kapasitas_kelas'] ?></td>
                                <td class="col justify-content-center text-center">
                                    <a href="<?= base_url('kelas/' . $key['id'] . '/edit') ?>" class="btn btn-warning">Edit</a>
                                    <form action="<?= base_url('kelas/' . $key['id']) ?>" method="post" style="display:inline-block">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <?= csrf_field() ?>
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
    </div>
</div>
<?= $this->endSection() ?>