<?php
  include 'Bank.php';
  session_start();

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!isset($_SESSION['bankList'])) {
      $_SESSION['bankList'] = array();
    }

    $Bank = new Bank();
    $Bank->setId_bank($_POST['id_bank']);
    $Bank->setNama_bank($_POST['nama_bank']);
    $Bank->setAlamat($_POST['alamat']);
    $Bank->setNomor_telepon($_POST['nomor_telepon']);

    array_push($_SESSION['bankList'], $Bank);

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
