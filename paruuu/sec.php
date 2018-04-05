

<body background="../dropdown/S/WALLPAPER/desktop-free-hd-wallpaper-wallpapers-nature-1920x1080-dowload.jpg">
<?php

$a=$_POST['t1'];
$b=$_POST['t2'];
$c=$_POST['t3'];
$d=$_POST['t4'];
$e=$_POST['t5'];
$f=$_POST['t6'];
$g=$_POST['t7'];
$h=$_POST['t8'];

echo"firstname=".$a;
echo"lastname=".$b;
echo"email=".$c;
echo"phoneno=".$d;
echo"comments=".$e;
echo"catagory=".$f;
echo"contactme=".$g;
echo"image=".$h;

mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db("priyanka") or die(mysql_error());
mysql_query("insert into pari value('$a','$b','$c','$d','$e','$f','$g','$h')") or die(mysql_error());







echo"<br/> data is inserted";
?>
<a href="thr.php">show table</a>

</body>