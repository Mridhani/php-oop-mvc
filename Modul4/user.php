<?php 

class User
{
    protected $nama;
    protected $role = 'user';

    public function __construct($nama)
    {
        $this->nama = $nama;
        echo "--> Objek User **{$this->nama}** berhasil dibuat.<br>";
    }

    public function salam()
    {
        return "Halo, saya **{$this->nama}**, peran saya adalah **{$this->role}**.";
    }

    public function getRole()
    {
        return $this->role;
    }

    public function __destruct()
    {
        echo "--> Objek User **{$this->nama}** telah dihancurkan.<br>";
    }
}
