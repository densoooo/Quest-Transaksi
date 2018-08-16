<?php
include 'Tabung.php';
session_start(); ?>
<html>
  <body>
    <table>
      <thead>
        <tr>
          <th>ID Account</th>
          <th>Tanggal Tabung</th>
          <th>Jumlah Tabung</th>
          <th>Saldo Tabung</th>
        </tr>
      </thead>
      <?php for ($i=0; $i < count($_SESSION['listTabung']); $i++) {?>
        <tr>
          <td><?php echo $_SESSION['listTabung'][$i]->getId_account();?></td>
          <td><?php echo $_SESSION['listTabung'][$i]->getTanggal_tabung();?></td>
          <td><?php echo $_SESSION['listTabung'][$i]->getJumlah_tabung();?></td>
          <td><?php echo $_SESSION['listTabung'][$i]->getSaldo_tabung();?></td>
        </tr>
      <?php } ?>
    </table>
  </body>
</html>
