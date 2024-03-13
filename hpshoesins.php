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
$name=$_POST['name'];
$message=$_POST['message'];
$quality=$_POST['quality'];
$contact=$_POST['contact'];
$query="INSERT INTO hpshoes(image,name,message,quality,contact)VALUES('$image','$name','$message','$quality','$contact')";

$query_run= mysqli_query($conn,$query);


if ($query_run) {
	move_uploaded_file($_FILES["image"]["tmp_name"], "photo/".$_FILES["image"]["name"]);
	header('Location:hpshoes.php');
}
}
?>

