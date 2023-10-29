<?= $this->extend('layouts/app')?>

<?= $this->section('content')?>

<div class="container-listuser">
    <br><br><br><div class="data-box">
        <div class="data-mahasiswa">
            <h2>Data Mahasiswa</h2>
        </div>
    </div>

    <a href="<?= base_url('/user/create')?>" type="button" class="btn btn-primary">Add Data</a>

<div class="tabel-box">
<table class="tabel-user">
    <thead>
        <tr>
            <th class="col justify-content-center text-center">No</th>
            <th class="col justify-content-center text-center">Name</th>
            <th class="col justify-content-center text-center">NPM</th>
            <th class="col justify-content-center text-center">Class</th>
            <th class="col justify-content-center text-center">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 1;
        foreach ($users as $user){
            ?>
            <tr>
                <td class="col justify-content-center text-center"><?= $i++ ?></td>
                <td class="col justify-content-center text-center"><?= $user['nama'] ?></td>
                <td class="col justify-content-center text-center"><?= $user['npm'] ?></td>
                <td class="col justify-content-center text-center"><?= $user['nama_kelas'] ?></td>
                <td class="col justify-content-center text-center d-flex">
                <a href="<?= base_url('user/'. $user['id'])?>" type="button" class="btn btn-success">Detail</a>
                <a href="<?= base_url('user/'. $user['id']. '/edit')?>" type="button" class="btn btn-warning">Edit</a>
                <form action="<?=base_url('user/'. $user['id'])?>" method="post">
                    <input type= "hidden" name ="_method" value= "DELETE">
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

<?= $this->endSection()?>