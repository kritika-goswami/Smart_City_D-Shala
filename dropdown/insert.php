
<body background="S/WALLPAPER/descargar-images-full-hd-1080p-wallpaper.jpg">

<?php
$a=$_POST['t1'];
$b=$_POST['t2'];
$c=$_POST['t3'];
$d=$_POST['t4'];
$e=$_POST['t5'];
$f=$_POST['t6'];
$g=$_POST['t7'];

echo"firstname=".$a;
echo"lastname=".$b;
echo"age=".$c;
echo"email=".$d;
echo"gender=".$e;
echo"state=".$f;
echo"suggestion=".$g;

mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db("kritika") or die(mysql_error());
mysql_query("insert into ras value('$a','$b','$c','$d','$e','$f','$g')") or die(mysql_error());







echo"<br/> data is inserted";

?>
<a href="view.php">show table</a>

</body>