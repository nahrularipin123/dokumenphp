<?php
 function sayHello($name)
 {
  echo"Hello..$name";
 }
	  function reverseName($name)
	  {
		$hasil='';
		for($i=(strlen($name)-1);$i>0;$i--)
		$hasil .=$name[$i] ;
		return $hasil;
	  }
$nama="Sarimin";
sayHello($nama);

echo"<br>";

$nama=reverseName($nama);
sayHello($nama);
  ?>
 