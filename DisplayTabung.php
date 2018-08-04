<?php session_start(); ?>
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
      <?php for ($i=0; $i < count($_SESSION['id_account_tabung']); $i++) {?>
        <tr>
          <td><?php echo $_SESSION['id_account_tabung'][$i];?></td>
          <td><?php echo $_SESSION['tanggal_tabung'][$i];?></td>
          <td><?php echo $_SESSION['jumlah_tabung'][$i];?></td>
          <td><?php echo $_SESSION['saldo_tabung'][$i];?></td>
        </tr>
      <?php } ?>
    </table>
  </body>
</html>
