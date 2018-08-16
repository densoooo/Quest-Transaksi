<?php
  include 'Tabung.php';
  session_start();

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (!isset($_SESSION['listTabung'])) {
      $_SESSION['listTabung'] = array();
    }

    $Tabung = new Tabung();
    $Tabung->setId_account($_POST['id_account']);
    $Tabung->setTanggal_tabung($_POST['tanggal_tabung']);
    $Tabung->setJumlah_tabung($_POST['jumlah_tabung']);
    $Tabung->setSaldo_tabung($_POST['saldo_tabung']);

    array_push($_SESSION['listTabung'], $Tabung);

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
