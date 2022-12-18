<?php
print_r($_POST);
    $FirstName=$_POST["FirstName"];
    $LastName=$_POST["LastName"];
    $email=$_POST["email"];
    $Password=$_POST["password"];
    $connection = new mysqli("localhost","root","","signup");
    $stmt=$connection->prepare("insert into `form` ( `FirstName`,`LastName`,`email`,`password`) values (?,?,?,?)");
    $stmt->bind_param("ssss",$FirstName,$LastName,$email,$Password);
    $stmt->execute();
    echo("done")
?>