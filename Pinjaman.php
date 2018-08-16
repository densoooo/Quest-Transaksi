<?php
class Pinjaman {
  public $id_account;
  public $tanggal_pinjam;
  public $jumlah_pinjam;
  public $saldo_pinjam;

  function setId_account($id_account) {
    $this->id_account = $id_account;
  }

  function getId_account() {
    return $this->id_account;
  }

  function setTanggal_pinjam($tanggal_pinjam) {
    $this->tanggal_pinjam = $tanggal_pinjam;
  }

  function getTanggal_pinjam() {
    return $this->tanggal_pinjam;
  }

  function setJumlah_pinjam($jumlah_pinjam) {
    $this->jumlah_pinjam = $jumlah_pinjam;
  }

  function getJumlah_pinjam() {
    return $this->jumlah_pinjam;
  }

  function setSaldo_pinjam($saldo_pinjam) {
    $this->saldo_pinjam = $saldo_pinjam;
  }

  function getSaldo_pinjam() {
    return $this->saldo_pinjam;
  }
}
 ?>
