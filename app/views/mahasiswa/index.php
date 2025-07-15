<div class="container mt-3">

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <button type="button" class="btn btn-primary tomboltambahData" data-bs-toggle="modal" data-target="FormModal">
            Tambah data mahasiswa
        </button>
        <br><br>
        <h3>Daftar Mahasiswa</h3>
        <ul class="list-group">
        <?php foreach( $mhs as $mhs ) : ?>
        <li class="list-group-item ">
            <?=$mhs['nama']; ?>
            <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" 
            class="badge badge-danger float-right ml-1 "onclick="return confirm('yakin');">hapus</a>
            <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>" 
            class="badge badge-success float-righttampilModalubah" data-bs-toggle="modal" data-target="FormModal" data-id="<?=$mhs['id']
            ; ?>" >ubah</a>
            <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" 
            class="badge badge-primary float-right ">detail</a>
        </li>


        <?php endforeach; ?>
        </ul>

        </div>
    </div>

</div>

<!-- Modal -->
    <div class="modal fade" id="FormModal" tabindex="-1" aria-labelledby="formModallabel" 
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fs-5" id="formModalLabel">Tambah Data mahasiswa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">


            <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
                <input type="hidden" name="id" id="id">
            <div class="form-group">
                <label for="Nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>

            <div class="form-group">
                <label for="nrp">NRP</label>
                <input type="number" class="form-control" id="nrp" name="nrp">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>

            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <select class="form-control" id="jurusan" name="jurusan">
                <option value="Teknik Informatika"> Teknik Informatika</option>
                <option value="Manajemen Informatika">Manajemen Informatika</option>
                <option value="akuntansi">akuntansi</option>
        </select>
        </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
            </div>
            </div>
        </div>