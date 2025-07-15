<?php

class Mahasiswa_model{
    private $dbh;
    private $stmt;

    public function __construct()
    {
        $dsn = 'mysql:host=localhost;dbname=uasweb1_aditsatriaalamsyah';

        try {
            $this->dbh = new PDO($dsn,'root', '');
        } catch(PDOException $e) {
            die ($e->getMessage());
        }
    }
//     private $mhs = [
//     [
//         "nama" => "Adit Satria Alamsyah",
//         "nim" => "23012020",
//         "email" =>"aditsatriaalamsyah123@gmail.com",
//         "jurusan" => "manajemen informatika"
//     ],
//     [
//         "nama" => "ahmad",
//         "nim" => "23012020",
//         "email" =>"aditsatriaalamsyah123@gmail.com",
//         "jurusan" => "manajemen informatika"
//     ],
//     [
//         "nama" => "bario",
//         "nim" => "23012020",
//         "email" =>"aditsatriaalamsyah123@gmail.com",
//         "jurusan" => "manajemen informatika"
//     ]
// ];

public function getALLMahasiswa()
{
    $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
    $this->stmt->execute();
    return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
}

}