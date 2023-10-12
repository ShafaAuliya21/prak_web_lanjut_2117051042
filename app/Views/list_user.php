<?= $this->extend('layouts/app')?>

<?= $this->section('content')?>

<div class="container-listuser">
    <br><div class="data-box">
        <div class="data-mahasiswa">
            <h2>Data Mahasiswa</h2>
        </div>
    </div>

    <a href="<?base_url('user/create')?>" type="button" class="btn btn-primary">Tambah Data</a>

<div class="tabel-box">
<table class="tabel-user">
    <thead>
        <tr>
            <th class="col justify-content-center text-center">No</th>
            <th class="col justify-content-center text-center">Nama</th>
            <th class="col justify-content-center text-center">NPM</th>
            <th class="col justify-content-center text-center">Kelas</th>
            <th class="col justify-content-center text-center">Aksi</th>
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
                <td class="col justify-content-center text-center">
                <a href="<?= base_url('user/'. $user['id'])?>" type="button" class="btn btn-success">Detail</a>
                    <button type="button" class="btn btn-warning">Edit</button>
                    <button type="button" class="btn btn-danger">Hapus</button>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>   
</div> 

<?= $this->endSection()?>