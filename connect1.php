<?php

$server='localhost';
$username='root';
$password="";
$db='portfolio';
$conn=mysqli_connect($server,$username,$password,$db);
if(!$conn){
    die("connection to this database failed due to ".mysqli_connect_error());

}
// else{
//     echo" Data fetch";
// }

$name=$_POST['name'];
$email=$_POST['email'];
$other=$_POST['other'];
$sql="INSERT INTO `satyam` (`name`, `email`, `other`) VALUES ( '$name', '$email', '$other');";
// echo $sql;

if($conn->query($sql)==true){
    echo "Successfully inserted";
}
else{
    echo "ERROR: $sql<br> $conn->error";
}
$conn->close();

?>


