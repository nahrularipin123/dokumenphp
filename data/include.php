<html>
  <head>
   <title>Fungsi php</title>
   <style type="text/css">
      form{width:400px; margin:20px auto;}
      label{display: block;}
      fieldset{padding:10px;}
   </style>
</head>

<body>
 <form action=""method="POST">
 
<fieldset>
<legend>Input Nilai mahasiswa/legend>

   <label>Nama Mahasiswa</label>
   <input type="text" name="namaMhs" />
   
   <label>Nilai Absen</label>
   <inputtype="text" name="absen" />
   
   <label>Nilai Tugas</label>
   <inputtype="text" name="Tugas" />
   
   <label>Nilai UAS</label>
   <inputtype="text" name="UAS" />
   
   <label>Nilai UTS</label>
   <inputtype="text" name="UTS" />
   
   <input type="submit" value="Hitung" name="tombol" />
   
   </fieldset>
   </form>
   
   <?php if(isset($_post['tombol])):?>
   <?php
       $nama=$