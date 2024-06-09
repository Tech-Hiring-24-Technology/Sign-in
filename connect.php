<?php
$name= $_GET['email'];
$password=$_GET['password'];





$conn = new mysqli('localhost', 'root','', 'test');
if($conn->connect_error) {
die('Connection Failed : $conn->connect_error);
}else{
$stmt $conn->prepare("insert into signin(email,password)
values(?, ?)");
$stmt->bind_param("ss",$email, $password);
$stmt->execute();
echo "registration Successfully...";
$stmt->close();
$conn->close();
}
?>
