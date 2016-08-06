<html>
<body>
<?php
$array=array()  ;
for($i=1;$i<=6;$i++){
    for( $j=1;$j<=$i;$j++){
	    if($j==$i||$j==1)    {
			$array[$i][$j]=$j;
		}else{
			$array[$i][$j] = $array[$i-1][$j-1]+$array[$i-1][$j];
		}
		echo($array[$i][$j]);
		}
	echo("<br>");}
?>
</body>
</html>