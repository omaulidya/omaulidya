<?php 

require_once("config.php");

$sql_get = "SELECT * FROM data_penjualan";
$query_penjualan = mysqli_query($koneksi, $sql_get);

$results = [];

while($row = mysqli_fetch_assoc($query_penjualan)) {
  $results[] = $row;
}

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Data Penjualan</title>
  </head>
  <body>
    <h1>Data</h1>
    <table border="2">
      <tr>
        <td>No</td>
        <td>id Penjualan</td>
        <td>Nama Barang</td>
        <td>Qty</td>
        <td>Harga Barang</td>
        <td>Harga Total</td>
        <td>Keterangan</td>
      </tr>

       <?php
      $no = 1;
      foreach($results as $results) :
      ?>

      <tr>
        <td><?= $no; ?> </td>
        <td><?= $results['id_penjualan'] ?></td>
        <td><?= $results['id_barang'] ?></td>
        <td><?= $results['stok'] ?></td>
        <td><?= $results['harga_barang'] ?></td>
        <td><?= $results['harga_total'] ?></td>
      </tr>

      <?php
      $no++;
      endforeach;
      ?>

    </table>

    <br>
    <a href="tambah1.php">Tambah Data</a>
  </body>
</html>