<?php 
require_once 'User.php';

class Admin extends User
{
    private $akses_level = 'full';

    public function __construct($nama)
    { 
        parent::__construct($nama);  
        $this->role = 'admin';  
    }

    public function salam() 
    { 
        $pesan_induk = parent::salam(); 
        return $pesan_induk . " Sebagai admin, saya memiliki **akses {$this->akses_level}**."; 
    }

    public function kelolaSistem() 
    { 
        return "Admin {$this->nama} sedang mengelola data sistem."; 
    }
}
