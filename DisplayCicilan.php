<?php
include 'Cicilan.php';
session_start(); ?>
<html>
  <body>
    <table>
      <thead>
        <tr>
          <th>ID Pinjaman</th>
          <th>Tanggal Transaksi</th>
          <th>Jumlah Bayar</th>
          <th>Saldo</th>
        </tr>
      </thead>
      <?php for ($i=0; $i < count($_SESSION['listCicilan']); $i++) {?>
        <tr>
          <td><?php echo $_SESSION['listCicilan'][$i]->getId_pinjaman();?></td>
          <td><?php echo $_SESSION['listCicilan'][$i]->getTanggal_transaksi();?></td>
          <td><?php echo $_SESSION['listCicilan'][$i]->getJumlah_bayar();?></td>
          <td><?php echo $_SESSION['listCicilan'][$i]->getSaldo_cicilan();?></td>
        </tr>
      <?php } ?>
    </table>
  </body>
</html>
