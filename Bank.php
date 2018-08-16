<?php
class Bank {
  public $id_bank;
  public $nama_bank;
  public $alamat;
  public $nomor_telepon;

  function setId_bank($id_bank) {
    $this->id_bank = $id_bank;
  }

  function getId_bank() {
    return $this->id_bank;
  }

  function setNama_bank($nama_bank) {
    $this->nama_bank = $nama_bank;
  }

  function getNama_bank() {
    return $this->nama_bank;
  }

  function setAlamat($alamat) {
    $this->alamat = $alamat;
  }

  function getAlamat() {
    return $this->alamat;
  }

  function setNomor_telepon($nomor_telepon) {
    $this->nomor_telepon = $nomor_telepon;
  }

  function getNomor_telepon() {
    return $this->nomor_telepon;
  }
}
?>
