<?php
include 'Bank.php';
session_start();

if (isset($_POST['data'])) {
  include 'BinarySearch.php';

  $array = array();
  foreach ($_SESSION['bankList'] as $data) {
    switch ($_POST['kategori']) {
      case 'nama':
        $array[] = array($data->getNama_bank() , $data->getId_bank()-1);
        break;
      case 'alamat':
        $array[] = array($data->getAlamat() , $data->getId_bank()-1);
        break;
    }
  }
  $x = $_POST['data'];
  array_multisort(array_column($array, 0), SORT_ASC, $array);
  $hasil = BinarySearch($array,$x);
}?>
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
              <th>ID Bank</th>
              <th>Nama Bank</th>
              <th>Alamat</th>
              <th>Nomor Telepon</th>
            </tr>
          </thead>
            <tr>
              <td><?php echo $_SESSION['bankList'][$hasil]->getId_bank();?></td>
              <td><?php echo $_SESSION['bankList'][$hasil]->getNama_bank();?></td>
              <td><?php echo $_SESSION['bankList'][$hasil]->getAlamat();?></td>
              <td><?php echo $_SESSION['bankList'][$hasil]->getNomor_telepon();?></td>
            </tr>
        </table>
      <?php
        }
      }
      ?>
    </div>
  </body>
</html>
