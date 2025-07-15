<?php

class Mahasiswa_model{
    private $dbh;
    private $stmt;
    private $table = 'mahasiswa';
    private $db;

    public function __construct()
    {
        $dsn = 'mysql:host=localhost;dbname=uasweb1_nabilah';

        try {
            $this->dbh = new PDO($dsn,'root', '');
        } catch(PDOException $e) {
            die ($e->getMessage());
        }
        $this->db = new Database;
    }
//     private $mhs = [
//     [
//         "nama" => "nabilah",
//         "nim" => "23012012",
//         "email" =>"bnabilah462@gmail.com",
//         "jurusan" => "manajemen informatika"
//     ],
//     [
//         "nama" => "rara",
//         "nim" => "23012012",
//         "email" =>"bnabilah462@gmail.com",
//         "jurusan" => "manajemen informatika"
//     ],
//     [
//         "nama" => "nindi",
//         "nim" => "23012012",
//         "email" =>"bnabilah462@gmail.com",
//         "jurusan" => "manajemen informatika"
//     ],
//     [
//       "nama" => "dina",
//         "nim" => "23012012",
//         "email" =>"bnabilah462@gmail.com",
//         "jurusan" => "manajemen informatika"
//       ]
// ];

    


public function getALLMahasiswa()
{
    $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
    $this->stmt->execute();
    return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    $this->db->query('SELECT * FROM '. $this->table);
    return $this->db->resultSet();
}

public function getMahasiswaById($id)
{
$this->db->query("SELECT * FROM mahasiswa WHERE id = :id");
$this->db->bind('id', $id);
return $this->db->single();

}
}