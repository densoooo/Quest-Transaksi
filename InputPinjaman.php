<?php
  session_start();

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    class Pinjam {
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

    if (!isset($_SESSION['id_account_pinjam'])) {
      $_SESSION['id_account_pinjam'] = array();
      $_SESSION['tanggal_pinjam'] = array();
      $_SESSION['jumlah_pinjam'] = array();
      $_SESSION['saldo_pinjam'] = array();
    }

    $Pinjam = new Pinjam();
    $Pinjam->setId_account($_POST['id_account']);
    $Pinjam->setTanggal_pinjam($_POST['tanggal_pinjam']);
    $Pinjam->setJumlah_pinjam($_POST['jumlah_pinjam']);
    $Pinjam->setSaldo_pinjam($_POST['saldo_pinjam']);

    array_push($_SESSION['id_account_pinjam'], $Pinjam->getId_account());
    array_push($_SESSION['tanggal_pinjam'], $Pinjam->getTanggal_pinjam());
    array_push($_SESSION['jumlah_pinjam'], $Pinjam->getJumlah_pinjam());
    array_push($_SESSION['saldo_pinjam'], $Pinjam->getSaldo_pinjam());

    echo "Input pinjaman ".$_POST['tanggal_pinjam']." sukses";
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
          <label>Tanggal Pinjam</label>
          <input type="text" name="tanggal_pinjam"/>
        </div>
        <div>
          <label>Jumlah Pinjam</label>
          <input type="text" name="jumlah_pinjam"/>
        </div>
        <div>
          <label>Saldo Pinjam</label>
          <input type="text" name="saldo_pinjam"/>
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
