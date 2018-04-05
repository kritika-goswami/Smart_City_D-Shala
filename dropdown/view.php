<body background="S/WALLPAPER/Free-Full-HD-Wallpapers-2.jpg">
<center>
<?php
mysql_connect('localhost','root','');
mysql_select_db("kritika");
$r=mysql_query("select * from ras");
echo"<table border='10' width='70%' height='100px' >
<tr>
<th>firstname</th>
<th>lastname</th>
<th>age</th>
<th>email</th>
<th>gender</th>
<th>state</th>
<th>suggestion</th>
</tr>";

while($s=mysql_fetch_array($r))
{
echo"<tr>
<th>".$s['firstname']."</th>
<th>".$s['lastname']."</th>
<th>".$s['age']."</th>
<th>".$s['email']."</th>
<th>".$s['gender']."</th>
<th>".$s['state']."</th>
<th>".$s['suggestion']."</th>
</tr>";
}
echo"</table>";

?>
</center>
</body>