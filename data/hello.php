<?php
$nama=$_POST['nama'];
$umur=$_POST['umur'];
echo  "hello <b>$nama</b>...umur anda sekarang adalah $umur tahun";

if($umur>40)
   $status="TUA";
elseif($umur>18)
   $status="MUDA";
elseif($umur>10)
   $status="REMAJA";
else
   $status="ANAK-ANAK";
 
echo "status anda $status";

?>
