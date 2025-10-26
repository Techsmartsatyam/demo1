<?php
$server='localhost';
$username='root';
$password='';
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
$phone=$_POST['phone'];
$city=$_POST['city'];
$other=$_POST['other'];
$sql="INSERT INTO `connect` ( `name`, `email`, `phone`, `city`, `other`, `dt`) 
VALUES ('$name', '$email', '$phone', '$city', '$other', current_timestamp());";
if($conn->query($sql)==true){
    echo "Successfully inserted";
}
else{
    echo "ERROR: $sql<br> $conn->error";
}
$conn->close();
?>