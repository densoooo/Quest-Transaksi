<?php session_start(); ?>
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
      <?php for ($i=0; $i < count($_SESSION['id_bank']); $i++) {?>
        <tr>
          <td><?php echo $_SESSION['id_bank'][$i];?></td>
          <td><?php echo $_SESSION['nama_bank'][$i];?></td>
          <td><?php echo $_SESSION['alamat'][$i];?></td>
          <td><?php echo $_SESSION['nomor_telepon'][$i];?></td>
        </tr>
      <?php } ?>
    </table>
  </body>
</html>
