<?php
  session_start();

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
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

    if (!isset($_SESSION['id_bank'])) {
      $_SESSION['id_bank'] = array();
      $_SESSION['nama_bank'] = array();
      $_SESSION['alamat'] = array();
      $_SESSION['nomor_telepon'] = array();
    }

    $Bank = new Bank();
    $Bank->setId_bank($_POST['id_bank']);
    $Bank->setNama_bank($_POST['nama_bank']);
    $Bank->setAlamat($_POST['alamat']);
    $Bank->setNomor_telepon($_POST['nomor_telepon']);

    array_push($_SESSION['id_bank'], $Bank->getId_bank());
    array_push($_SESSION['nama_bank'], $Bank->getNama_bank());
    array_push($_SESSION['alamat'], $Bank->getAlamat());
    array_push($_SESSION['nomor_telepon'], $Bank->getNomor_telepon());

    echo "Input bank ".$_POST['nama_bank']." sukses";
  }
?>

<html>
  <body>
    <div class="wrapper">
      <form method="post">
        <div>
          <label>ID Bank</label>
          <input type="text" name="id_bank"/>
        </div>
        <div>
          <label>Nama Bank</label>
          <input type="text" name="nama_bank"/>
        </div>
        <div>
          <label>Alamat</label>
          <input type="text" name="alamat"/>
        </div>
        <div>
          <label>Nomor Telepon</label>
          <input type="text" name="nomor_telepon"/>
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
