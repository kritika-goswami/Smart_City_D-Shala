<html>
<body>
<form method="post" enctype="multipart/form-data" >
<input type="file" name="img1">
<input type="submit" name="sub" value="upload">
</form>

<?php 
if(isset($_POST['sub']))
{
	$oldpath = $_FILES['img1']['tmp_name'];
	$newpath = "img/".$_FILES['img1']['name'];
	$es = move_uploaded_file($oldpath,$newpath);
	if($es)
	{
		echo "success";
		$con = mysql_connect('localhost','root',''); 
		$sel = mysql_select_db('pariyanka'); 
		 if($sel)
		 {
			$query = "insert into images(image) values ('$newpath')";
			$check = mysql_query($query);
			if($check)
			{
				echo "<br>inserted";
			}
			else
			{
				echo mysql_error();
			}
		}
		else
		{
			echo "<br>db not selected";
		}
	}
	else
	{
	echo "unsuccessfull";
	}
}

?>
<?php 
$con=mysql_connect('localhost','root','');
mysql_select_db('pariyanka');

$query="select * from images  ";
$result=mysql_query($query);
while($row=mysql_fetch_array($result))
{

?>
<img src="<?php echo $row['../../../../Users/Kritika Goswami/Downloads/image']; ?>" height="150px" width="150px">
<?php
}
 ?>
</body>
</html>