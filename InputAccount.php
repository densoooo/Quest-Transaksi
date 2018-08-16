<?php

  include 'Account.php';

  session_start();

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (!isset($_SESSION['accountList'])) {
      $_SESSION['accountList'] = array();
    }

    $Account = new Account();
    $Account->setId_account($_POST['id_account']);
    $Account->setNama($_POST['nama']);
    $Account->setAlamat($_POST['alamat']);
    $Account->setBallance($_POST['ballance']);
    $Account->setId_bank($_POST['id_bank']);

    array_push($_SESSION['accountList'], $Account);

    echo "Input ".$_POST['nama']." sukses";
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
