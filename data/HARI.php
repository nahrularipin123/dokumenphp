<?php
$day = date ("D");
switch ($day)
{
case 'Sun' : $hari = 'Minggu'; break;
case 'Mon' : $hari = 'Senin'; break;
case 'Tue' : $hari = 'Selasa'; break;
case 'Wed' : $hari = 'Rabu'; break;
case 'Thu' : $hari = 'Kamis'; break;
case 'Fri' : $hari = 'Jumat'; break;
case 'Sat' : $hari = 'Sabtu'; break;
default : $hari = 'Kiamat';
}

$tgl=date("d");

$bln=date("n");
Switch ($bln)
{
	case 1: $nama_bln="Januari";break;
	case 2: $nama_bln="Februari";break;
	case 3: $nama_bln="Maret";break;
	case 4: $nama_bln="April";break;
	case 5: $nama_bln="Mei";break;
	case 6: $nama_bln="Juni";break;
	case 7: $nama_bln="Juli";break;
	case 8: $nama_bln="Agustus";break;
	case 9: $nama_bln="September";break;
	case 10: $nama_bln="Oktober";break;
	case 11: $nama_bln="November";break;
	case 12: $nama_bln="Desember";break;
}

$thn=date("Y");
echo "Hari ini hari <b>$hari, $tgl $nama_bln $thn</b>";


?>