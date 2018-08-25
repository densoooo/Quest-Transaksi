<?php
  include 'Account.php';
  session_start();

  if (isset($_POST['data'])) {
    include 'BinarySearch.php';

    $array = array();
    foreach ($_SESSION['accountList'] as $data) {
      switch ($_POST['kategori']) {
        case 'nama':
          $array[] = array($data->getNama() , $data->getId_Account()-1);
          break;
        case 'alamat':
          $array[] = array($data->getAlamat() , $data->getId_Account()-1);
          break;
      }
    }
    $x = $_POST['data'];
    array_multisort(array_column($array, 0), SORT_ASC, $array);
    $hasil = BinarySearch($array,$x);
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
          <label>Cari Data</label>
          <input type="text" name="data"/>
        </div>
        <div>
          <select name="kategori">
            <option value="nama">Nama</option>
            <option value="alamat">Alamat</option>
          </select>
        </div>
        <div>
          <input type="submit" name="submit" value="kirim"/>
        </div>
      </from>

      <?php
      if (isset($_POST['data'])) {
        if(($hasil == -1)){
          echo $_POST['data']." tidak ditemukan";
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
