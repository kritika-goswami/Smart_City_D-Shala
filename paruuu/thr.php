
<body background="../dropdown/S/WALLPAPER/colorful-flowers-wallpapers-full-hd-wallpaper-search.jpg">
<center>
<?php
mysql_connect('localhost','root','');
mysql_select_db("priyanka");
$r=mysql_query("select * from pari");
echo"<table border='10' width='60%' height='100px' >
<tr>
<th>firstname</th>
<th>lastname</th>
<th>email</th>
<th>phoneno</th>
<th>comments</th>
<th>catagory</th>
<th>contactme</th>
<th>image</th>
</tr>";

while($s=mysql_fetch_array($r))
{
echo"<tr>
<th>".$s['firstname']."</th>
<th>".$s['lastname']."</th>
<th>".$s['email']."</th>
<th>".$s['phoneno']."</th>
<th>".$s['comments']."</th>
<th>".$s['catagory']."</th>
<th>".$s['contactme']."</th>
<th>".$s['image']."</th>
</tr>";
}
echo"</table>";

?>
</center>
</body>