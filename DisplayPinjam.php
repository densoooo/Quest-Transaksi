<?php
include 'Pinjaman.php';
session_start(); ?>
<html>
  <body>
    <table>
      <thead>
        <tr>
          <th>ID Account</th>
          <th>Tanggal Pinjam</th>
          <th>Jumlah Pinjam</th>
          <th>Saldo Pinjam</th>
        </tr>
      </thead>
      <?php for ($i=0; $i < count($_SESSION['listPinjaman']); $i++) {?>
        <tr>
          <td><?php echo $_SESSION['listPinjaman'][$i]->getId_account();?></td>
          <td><?php echo $_SESSION['listPinjaman'][$i]->getTanggal_pinjam();?></td>
          <td><?php echo $_SESSION['listPinjaman'][$i]->getJumlah_pinjam();?></td>
          <td><?php echo $_SESSION['listPinjaman'][$i]->getSaldo_pinjam();?></td>
        </tr>
      <?php } ?>
    </table>
  </body>
</html>
