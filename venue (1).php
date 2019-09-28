<?php
$date=$_POST['s1'];
$time=$_POST['s2'];
$avail=$_POST['s4'];
$nostu=$_POST['s3'];
$conn=mysqli_connect('localhost','root','','tech');
if(!$conn)
	die('connection failed'.mysqli_connect_error());
}
if
$sql="SELECT * FROM venue WHERE date='$date' and time='$time'and avail='$avail'";
if($result=mysqli_query($conn,$sql))
{
	if(mysqli_num_rows($result)>0)
	echo $sql;
}
?>