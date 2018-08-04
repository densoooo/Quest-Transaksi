<?php
  session_start();

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
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

    if (!isset($_SESSION['id_account_tabung'])) {
      $_SESSION['id_account_tabung'] = array();
      $_SESSION['tanggal_tabung'] = array();
      $_SESSION['jumlah_tabung'] = array();
      $_SESSION['saldo_tabung'] = array();
    }

    $Tabung = new Tabung();
    $Tabung->setId_account($_POST['id_account']);
    $Tabung->setTanggal_tabung($_POST['tanggal_tabung']);
    $Tabung->setJumlah_tabung($_POST['jumlah_tabung']);
    $Tabung->setSaldo_tabung($_POST['saldo_tabung']);

    array_push($_SESSION['id_account_tabung'], $Tabung->getId_account());
    array_push($_SESSION['tanggal_tabung'], $Tabung->getTanggal_tabung());
    array_push($_SESSION['jumlah_tabung'], $Tabung->getJumlah_tabung());
    array_push($_SESSION['saldo_tabung'], $Tabung->getSaldo_tabung());

    echo "Input tabungan ".$_POST['id_account']." sukses";
  }
?>

<html>
  <body>
    <div class="wrapper">
      <form method="post">
        <div>
          <label>ID Account</label>
          <input type="text" name="id_account"/>
        </div>
        <div>
          <label>Tanggal Tabung</label>
          <input type="text" name="tanggal_tabung"/>
        </div>
        <div>
          <label>Jumlah Tabung</label>
          <input type="text" name="jumlah_tabung"/>
        </div>
        <div>
          <label>Saldo</label>
          <input type="text" name="saldo_tabung"/>
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
