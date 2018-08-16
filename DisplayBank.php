<?php
include 'Bank.php';
session_start(); ?>
<html>
  <body>
    <table>
      <thead>
        <tr>
          <th>ID Bank</th>
          <th>Nama Bank</th>
          <th>Alamat</th>
          <th>Nomor Telepon</th>
        </tr>
      </thead>
      <?php for ($i=0; $i < count($_SESSION['bankList']); $i++) {?>
        <tr>
          <td><?php echo $_SESSION['bankList'][$i]->getId_bank();?></td>
          <td><?php echo $_SESSION['bankList'][$i]->getNama_bank();?></td>
          <td><?php echo $_SESSION['bankList'][$i]->getAlamat();?></td>
          <td><?php echo $_SESSION['bankList'][$i]->getNomor_telepon();?></td>
        </tr>
      <?php } ?>
    </table>
  </body>
</html>
