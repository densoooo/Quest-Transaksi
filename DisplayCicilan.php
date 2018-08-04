<?php session_start(); ?>
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
      <?php for ($i=0; $i < count($_SESSION['id_pinjaman_cicilan']); $i++) {?>
        <tr>
          <td><?php echo $_SESSION['id_pinjaman_cicilan'][$i];?></td>
          <td><?php echo $_SESSION['tanggal_transaksi'][$i];?></td>
          <td><?php echo $_SESSION['jumlah_bayar'][$i];?></td>
          <td><?php echo $_SESSION['saldo_cicilan'][$i];?></td>
        </tr>
      <?php } ?>
    </table>
  </body>
</html>
