<?php

require_once '../core/Database.php';
class Mahasiswa_model {
    private $table ='mahasiswa';
    private$db;

    public function __construct()
    {
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

public function getAllMahasiswa()
     {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
     }

    
public function getMahasiswaById($id)
     {
        $this->db->query('SELECT * FROM 
     ' .$this->table . ' WHERE id=:id') ; 
        $this->db->bind('id', $id);
     return $this->db->single();
}

public function tambahDataMahasiswa($data)
{
    $query = "INSERT INTO mahasiswa
        VALUES
        ('', :nama, :nim, :email, :jurusan)";

    $this->db->query($query);
    $this->db->bind('nama', $data['nama']);
    $this->db->bind('nim', $data['nim']);
    $this->db->bind('email', $data['email']);
    $this->db->bind('jurusan', $data['jurusan']);

    this->db->execute();
    return $this->db->rowCount();
}

public function hapusDataMahasiswa($id)
{
    $query = "DELETE FROM mahasiswa WHERE id = :id";
    $this->db->query($query);
    $this->db->bind('id', $id);

    $this->db->execute();

    return $this->db->rowCounr();
}
}