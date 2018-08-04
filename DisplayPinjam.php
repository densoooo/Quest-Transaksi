<?php session_start(); ?>
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
      <?php for ($i=0; $i < count($_SESSION['id_account_pinjam']); $i++) {?>
        <tr>
          <td><?php echo $_SESSION['id_account_pinjam'][$i];?></td>
          <td><?php echo $_SESSION['tanggal_pinjam'][$i];?></td>
          <td><?php echo $_SESSION['jumlah_pinjam'][$i];?></td>
          <td><?php echo $_SESSION['saldo_pinjam'][$i];?></td>
        </tr>
      <?php } ?>
    </table>
  </body>
</html>
