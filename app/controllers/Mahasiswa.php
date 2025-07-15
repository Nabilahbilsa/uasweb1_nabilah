<?php

class Mahasiswa extend Controller {
    public function index()
    {
    $data['judul'] = 'Daftar mahasiswa';
    $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
    $this->('templates/header', $data);
    $this->('templates/index', $data);
    $this->('templates/footer');
    }

    public function detail($id)
    {
    $data['judul'] = 'detail mahasiswa';
    $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswaById($id);
    $this->('templates/header', $data);
    $this->('templates/detail', $data);
    $this->('templates/footer');
    }

    public function tambah()
    {
        if( $this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST)> 0 ) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location:'. BASEURL . '/mahasiswa');
            exit;
        } else {
            Flasher::setFlash('berhasil', 'ditambahkan', 'danger');
            header('Location:'. BASEURL . '/mahasiswa');
            exit;
        }
}
    public function hapus($id)
    {
        if( $this->model('Mahasiswa_model')->tambahDataMahasiswa($id) > 0 ) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location:'. BASEURL . '/mahasiswa');
            exit;
        } else {
            Flasher::setFlash('berhasil', 'ditambahkan', 'danger');
            header('Location:'. BASEURL . '/mahasiswa');
            exit;
        }
}
}