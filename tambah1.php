<?php
require_once("config.php");
if(isset($_POST['submit'])){
  $id_penjualan  = $_POST['id_penjualan'];
  $id_barang     = $_POST['id_barang'];
  $stok          = $_POST['stok'];
  $harga_barang  = $_POST['harga_barang'];
  $harga_total   = $_POST['harga_total'];

  $sql_insert = "INSERT INTO data_penjualan VALUES('$id_penjualan','$id_barang','$stok','$harga_barang','$harga_total')";
  mysqli_query($koneksi,$sql_insert);

  header("location:penjualan1.php");
}
?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tambah data</title>
  </head>
  <body>
    <h1>Tambah data</h1>

    <form action="tambah1.php" method="post">
      <table>
      	<tr>
          <td>Id Penjualan</td>
          <td>:</td>
          <td><input type="number" name="id_penjualan" value=""></td>
        </tr>

        <tr>
          <td>Id barang</td>
          <td>:</td>
          <td><input type="number" name="id_barang" value=""></td>
        </tr>

        <tr>
          <td>Stok</td>
          <td>:</td>
          <td><input type="number" name="stok" value=""></td>
        </tr>

        <tr>
          <td>Harga</td>
          <td>:</td>
          <td><input type="number" name="harga_barang" value=""></td>
        </tr>

         <tr>
          <td>Harga Total</td>
          <td>:</td>
          <td><input type="number" name="harga_total" value=""></td>
          
        </tr>
      </table>
      <button type="submit" name="submit">Tambah Data Penjualan</button>
    </form>

  </body>
</html>