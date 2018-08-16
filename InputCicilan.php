<?php
  include 'Cicilan.php';
  session_start();

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (!isset($_SESSION['listCicilan'])) {
      $_SESSION['listCicilan'] = array();
    }

    $Cicilan = new Cicilan();
    $Cicilan->setId_pinjaman($_POST['id_pinjaman']);
    $Cicilan->setTanggal_transaksi($_POST['tanggal_transaksi']);
    $Cicilan->setJumlah_bayar($_POST['jumlah_bayar']);
    $Cicilan->setSaldo_cicilan($_POST['saldo_cicilan']);

    array_push($_SESSION['listCicilan'], $Cicilan);

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
