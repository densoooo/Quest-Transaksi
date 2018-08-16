<?php
class Cicilan {
  public $id_pinjaman;
  public $tanggal_transaksi;
  public $jumlah_bayar;
  public $saldo_cicilan;

  function setId_pinjaman($id_pinjaman) {
    $this->id_pinjaman = $id_pinjaman;
  }

  function getId_pinjaman() {
    return $this->id_pinjaman;
  }

  function setTanggal_transaksi($tanggal_transaksi) {
    $this->tanggal_transaksi = $tanggal_transaksi;
  }

  function getTanggal_transaksi() {
    return $this->tanggal_transaksi;
  }

  function setJumlah_bayar($jumlah_bayar) {
    $this->jumlah_bayar = $jumlah_bayar;
  }

  function getJumlah_bayar() {
    return $this->jumlah_bayar;
  }

  function setSaldo_cicilan($saldo_cicilan) {
    $this->saldo_cicilan = $saldo_cicilan;
  }

  function getSaldo_cicilan() {
    return $this->saldo_cicilan;
  }
}
 ?>
