<?php
class Tabung {
  public $id_account;
  public $tanggal_tabung;
  public $jumlah_tabung;
  public $saldo_tabung;

  function setId_account($id_account) {
    $this->id_account = $id_account;
  }

  function getId_account() {
    return $this->id_account;
  }

  function setTanggal_tabung($tanggal_tabung) {
    $this->tanggal_tabung = $tanggal_tabung;
  }

  function getTanggal_tabung() {
    return $this->tanggal_tabung;
  }

  function setJumlah_tabung($jumlah_tabung) {
    $this->jumlah_tabung = $jumlah_tabung;
  }

  function getJumlah_tabung() {
    return $this->jumlah_tabung;
  }

  function setSaldo_tabung($saldo_tabung) {
    $this->saldo_tabung = $saldo_tabung;
  }

  function getSaldo_tabung() {
    return $this->saldo_tabung;
  }
}
 ?>
