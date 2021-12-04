<?php
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$connect = new mysqli('localhost','root','','form');

if($connect->connect_error){
    echo 'failed';
}
else{
    $statement = $connect->prepare("insert into formdata(name,email,password) values(?,?,?)");
    $statement->bind_param("sss",$name,$email,$password);
    $statement->execute();
    echo 'success';
    $statement->close();
    $connect->close();
}
?>