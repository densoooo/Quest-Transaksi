<?php
  session_start();

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
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

    if (!isset($_SESSION['id_pinjaman_cicilan'])) {
      $_SESSION['id_pinjaman_cicilan'] = array();
      $_SESSION['tanggal_transaksi'] = array();
      $_SESSION['jumlah_bayar'] = array();
      $_SESSION['saldo_cicilan'] = array();
    }

    $Cicilan = new Cicilan();
    $Cicilan->setId_pinjaman($_POST['id_pinjaman']);
    $Cicilan->setTanggal_transaksi($_POST['tanggal_transaksi']);
    $Cicilan->setJumlah_bayar($_POST['jumlah_bayar']);
    $Cicilan->setSaldo_cicilan($_POST['saldo_cicilan']);

    array_push($_SESSION['id_pinjaman_cicilan'], $Cicilan->getId_pinjaman());
    array_push($_SESSION['tanggal_transaksi'], $Cicilan->getTanggal_transaksi());
    array_push($_SESSION['jumlah_bayar'], $Cicilan->getJumlah_bayar());
    array_push($_SESSION['saldo_cicilan'], $Cicilan->getSaldo_cicilan());

    echo "Input pinjaman ".$_POST['id_pinjaman']." sukses";
  }
?>

<html>
  <body>
    <div class="wrapper">
      <form method="post">
        <div>
          <label>ID Pinjaman</label>
          <input type="text" name="id_pinjaman"/>
        </div>
        <div>
          <label>Tanggal Transaksi</label>
          <input type="text" name="tanggal_transaksi"/>
        </div>
        <div>
          <label>Jumlah Bayar</label>
          <input type="text" name="jumlah_bayar"/>
        </div>
        <div>
          <label>Saldo</label>
          <input type="text" name="saldo_cicilan"/>
        </div>
        <div>
          <input type="submit" name="submit" value="kirim"/>
        </div>
      </from>
    </div>
  </body>

  <style>
    .wrapper label {
      float: left;
      margin-right: 10px;
    }
    .wrapper div {
      margin-bottom: 15px;
    }
  </style>
</html>
