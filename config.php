<?php 

$koneksi = mysqli_connect("localhost","root","","responsi_basdat");

if($koneksi)
{
	echo "terkoneksi";
}

else
{
	echo "tidak terkoneksi";
}
 ?>

