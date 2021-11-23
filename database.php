<?php
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $connect = new mysqli('localhost','root','','web');
    if($connect->connect_error){
        echo "failed";
    }else{
        $stmt = $connect->prepare("insert into userdata2(firstName , lastName , gender ,
                                                               email, password) values(?,?,?,?,?)");
        $stmt->bind_param("sssss",$firstName,$lastName,$gender,$email,$password);
        $stmt->execute();
        echo "success";
        $stmt->close();
        $connect->close();
    }
?>