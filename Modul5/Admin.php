<?php 
require_once 'User.php'; 
require_once 'LoginInterface.php'; 

class Admin extends User implements LoginInterface 
{ 
    private $akses_level = 'full'; 

    public function __construct($nama) 
    { 
        parent::__construct($nama);  
        $this->role = 'admin';  
    } 

    // Implementasi dari LoginInterface
    public function login() 
    { 
        return "Admin **{$this->nama}** berhasil login ke sistem dengan hak akses penuh."; 
    } 

    public function logout() 
    { 
        return "Admin **{$this->nama}** berhasil logout dari sistem."; 
    } 

    // Overriding method salam()
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
