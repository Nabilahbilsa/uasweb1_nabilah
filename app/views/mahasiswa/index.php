<div class="container mt-3">

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-target="FormModal">
            Tambah data mahasiswa
        </button>
        <br><br>
        <h3>Daftar Mahasiswa</h3>
        <ul class="list-group">
        <?php foreach( $data['mhs'] as $mhs ) : ?>
            <li class="list-group-item ">
            <?=$mhs['nama']; ?>
            <a href="<?php= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" 
            class="badge badge-danger float-right ml-1 "onclick="return confirm('yakin');">hapus</a>
            <a href="<?php= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" 
            class="badge badge-primary float-right ml-1 ">detail</a>
        </li>
        <?php endforeach; ?>
        </ul>
        </div>
    </div>

</div>


<!-- Modal -->
    <div class="modal fade" id="FormModal" tabindex="-1" aria-labelledby="judulModal" 
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="judulModal">Tambah Data mahasiswa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">


            <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
            <div class="form-group">
                <label for="Nama">Nama</label>