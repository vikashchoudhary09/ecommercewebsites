<?php
$servername="localhost";
$username="root";
$password="";
$dbname="int";
$conn=new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error) {
	die("connection failed:".$conn->connect_error);
}
else{
echo "connection successfully";
}

if(isset($_POST['submit'])){
$image=$_FILES['image']['name'];
$query="INSERT INTO hptoper(image)VALUES('$image')";

$query_run= mysqli_query($conn,$query);


if ($query_run) {
	move_uploaded_file($_FILES["image"]["tmp_name"], "photo/".$_FILES["image"]["name"]);
	header('Location: hptoper.php');
}
}
?>

