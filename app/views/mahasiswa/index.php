<div class="container mt-3">

    <div class="row">
        <div class="col-6">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" 
            data-bs-target="#forModal">
                Tambah Data Mahasiswa
            </button>
            <br><br>
            <h3>Daftar Mahasiswa</h3>            
            <ul class="list-group">
                <?php foreach( $data['mhs'] as $mhs) : ?>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <?= $mhs['nama']; ?>
                <a href="<?= BASEURL;?>/mahasiswa/detail/<?= $mhs['id'];
                ?>" class="badge rounded-pill text-bg-primary">detail</a>
            </li>
                <?php endforeach; ?>
            </ul>
                
        </div>
    </div>

    <!-- Modal -->
<div class="modal fade" id="forModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" a
ria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fs-5" id="judulModal">Tambah Data Mahasiswa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">

      <div class="form-group">
           <label for="nama">Nama</label>
           <input type="text" class="form-control" id="nama" name="nama">   
      </div>

      <div class="form-group">
           <label for="nrp">NRP</label>
           <input type="number" class="form-control" id="nrp" name="nrp">   
      </div>

      <div class="form-group">
           <label for="email">Email</label>
           <input type="text" class="form-control" id="email" name="email">   
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
        </div>
