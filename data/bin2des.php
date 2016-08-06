<!DOCTYPE html>
<html>
<head>
      <form methhod="POST" action="">
	   <label> input Biner</label>
	   <Input type="text" name="biner" />
	   <input type="submit" name="tombol" value ="hitung"/>
	   </form>

<?php
     $desimal=[128,64,32,16,8,4,2,1];
	 if(isset($_POST['tombol']))
	 {
		 $biner=$_POST['biner'];
	 $hasil=0;
	 $Cdesimal=count($desimal);
	 $lenBiner=strlen($binner);
	 
	 for ($i=$Cdesimal-$lenBiner; $i<$Cdesimal; $i++)
		 
	 {
	      if($biner[($i+$lenBiner)-$Cdesimal]==1)
		  $hasil +=$desimal[$i];
	 }
	 
	 echo "<h2> $biner = $hasil</h2>";
	 }
	 ?>
	 </body>
	 </html>
	 