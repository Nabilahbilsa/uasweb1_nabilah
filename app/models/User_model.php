<?php

class User_model {
    private $nama = 'Adit Satria';
    
    public function gerUser()
    {
        return $this->nama;
    }
}