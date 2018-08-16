<?php
  include 'Pinjaman.php';
  session_start();

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (!isset($_SESSION['listPinjaman'])) {
      $_SESSION['listPinjaman'] = array();
    }

    $Pinjaman = new Pinjaman();
    $Pinjaman->setId_account($_POST['id_account']);
    $Pinjaman->setTanggal_pinjam($_POST['tanggal_pinjam']);
    $Pinjaman->setJumlah_pinjam($_POST['jumlah_pinjam']);
    $Pinjaman->setSaldo_pinjam($_POST['saldo_pinjam']);

    array_push($_SESSION['listPinjaman'], $Pinjaman);

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
