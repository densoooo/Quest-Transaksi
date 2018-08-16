<?php
  include 'Account.php';
  session_start();

  if (isset($_POST['nama'])) {
    function BinarySearch($array, $bawah, $atas, $x) {
        if ($atas >= $bawah) {
          $mid = $bawah + ($atas - $bawah) / 2;
          if ($array[$mid] == $x) {
              return floor($mid);
            }

          if ($array[$mid] > $x) {
              return BinarySearch($array, $bawah, $mid - 1, $x);
            }
          return BinarySearch($array, $mid + 1, $atas, $x);
        }
      return -1;
    }

    $array = array();
    foreach ($_SESSION['accountList'] as $nama) {
      $array[] = $nama->getNama();
    }
    $n = count($array);
    $x = $_POST['nama'];
    $hasil = BinarySearch($array, 0, $n - 1, $x);
  }
?>

<html>
  <body>
    <table>
      <thead>
        <tr>
          <th>ID Account</th>
          <th>Nama</th>
          <th>Alamat</th>
          <th>Ballance</th>
          <th>ID Bank</th>
        </tr>
      </thead>
      <?php for ($i=0; $i < count($_SESSION['accountList']); $i++) {?>
        <tr>
          <td><?php echo $_SESSION['accountList'][$i]->getId_Account();?></td>
          <td><?php echo $_SESSION['accountList'][$i]->getNama();?></td>
          <td><?php echo $_SESSION['accountList'][$i]->getAlamat();?></td>
          <td><?php echo $_SESSION['accountList'][$i]->getBallance();?></td>
          <td><?php echo $_SESSION['accountList'][$i]->getId_bank();?></td>
        </tr>
      <?php } ?>
    </table>
    <div class="wrapper">
      <form method="post">
        <div>
          <label>Cari Username</label>
          <input type="text" name="nama"/>
        </div>
        <div>
          <input type="submit" name="submit" value="kirim"/>
        </div>
      </from>

      <?php
      if (isset($_POST['nama'])) {
        if(($hasil == -1)){
          echo "Username ".$_POST['nama']." tidak ditemukan";
        } else {
      ?>
        <table>
          <thead>
            <tr>
              <th>ID Account</th>
              <th>Nama</th>
              <th>Alamat</th>
              <th>Ballance</th>
              <th>ID Bank</th>
            </tr>
          </thead>
            <tr>
              <td><?php echo $_SESSION['accountList'][$hasil]->getId_Account();?></td>
              <td><?php echo $_SESSION['accountList'][$hasil]->getNama();?></td>
              <td><?php echo $_SESSION['accountList'][$hasil]->getAlamat();?></td>
              <td><?php echo $_SESSION['accountList'][$hasil]->getBallance();?></td>
              <td><?php echo $_SESSION['accountList'][$hasil]->getId_bank();?></td>
            </tr>
        </table>
      <?php
        }
      }
      ?>
    </div>
  </body>
</html>
