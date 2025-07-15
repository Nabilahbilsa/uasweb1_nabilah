<?php

class Flasher {

    public static function setFlash($pesan, $saksi, $tipe)
    {
        $_SESSION['flash'] = [
            'pesan' => $pesan,
            'aksi' => $aksi,
            'tioe' => $tipe,
        ];
    }

    public static function flash()
    {
        if( isset($_SESSION['flash']) ) {
            echo '<div class="alert alert-' . $_SESSION['flash']['tipe'] . 'alert-dismissible fade show" role="alert">
            Data Mahasiswa <strong>' . $_SESSION['flash']['aksi'] . '
            <button type="button" class="close" data-dismis="alert"aria-label="Close">
            <span aria-hiddden="true">&times;</span>
            </button>
            </div>';
            unset($_SESSION['flash']);
        }
    }
}