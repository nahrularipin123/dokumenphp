<?php
 //mencari nilai akhir dari nilai tugas,absen,uts dan uas
 function nilai_akhir($tugas,$absen,$uts,$uas)
 {
 return(0.15*$tugas)+(0.15*$absen)+(0.30*$uts)+(0.40*$uas);
 }
 
 //mencari nilai hurup dari nilai akhir
 
 function nilai_hurup($nilai_angka)
 {
   $hasil='';
   switch($nilai_angka){
     case $nilai_angka=85:$hasil='A';break;
	 case $nilai_angka=75:$hasil='B';break;
	 case $nilai_angka=65:$hasil='C';break;
	 case $nilai_angka=55:$hasil='D';break;
	 default:$hasil='E';break;
	 }
	 return $hasil;
	 }
	 function bobot_nilai($nilai_hurup)
	 {
	  $bobot=array(
	   'A'=>4 ,
	   'B'=>3 ,
	   'C'=>2 ,
	   'D'=>1 ,
	   'E'=>0 
	   );
	   return $bobot[$nilai_hurup];
	 }
	
?>