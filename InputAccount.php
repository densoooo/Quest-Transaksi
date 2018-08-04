<?php
  session_start();

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    class Account {
      public $id_account;
      public $nama;
      public $alamat;
      public $ballance;
      public $id_bank;

      function setId_account($id_account) {
        $this->id_account = $id_account;
      }

      function getId_account() {
        return $this->id_account;
      }

      function setNama($nama) {
        $this->nama = $nama;
      }

      function getNama() {
        return $this->nama;
      }

      function setAlamat($alamat) {
        $this->alamat = $alamat;
      }

      function getAlamat() {
        return $this->alamat;
      }

      function setBallance($ballance) {
        $this->ballance = $ballance;
      }

      function getBallance() {
        return $this->ballance;
      }

      function setId_bank($id_bank) {
        $this->id_bank = $id_bank;
      }

      function getId_bank() {
        return $this->id_bank;
      }
    }

    if (!isset($_SESSION['id_account'])) {
      $_SESSION['id_account'] = array();
      $_SESSION['nama'] = array();
      $_SESSION['alamat_account'] = array();
      $_SESSION['ballance'] = array();
      $_SESSION['id_bank_account'] = array();
    }

    $Account = new Account();
    $Account->setId_account($_POST['id_account']);
    $Account->setNama($_POST['nama']);
    $Account->setAlamat($_POST['alamat']);
    $Account->setBallance($_POST['ballance']);
    $Account->setId_bank($_POST['id_bank']);

    array_push($_SESSION['id_account'], $Account->getId_account());
    array_push($_SESSION['nama'], $Account->getNama());
    array_push($_SESSION['alamat_account'], $Account->getAlamat());
    array_push($_SESSION['ballance'], $Account->getBallance());
    array_push($_SESSION['id_bank_account'], $Account->getId_bank());

    echo "Input user ".$_POST['nama']." sukses";
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
          <label>Nama</label>
          <input type="text" name="nama"/>
        </div>
        <div>
          <label>Alamat</label>
          <input type="text" name="alamat"/>
        </div>
        <div>
          <label>Ballance</label>
          <input type="text" name="ballance"/>
        </div>
        <div>
          <label>ID Bank</label>
          <input type="text" name="id_bank"/>
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
