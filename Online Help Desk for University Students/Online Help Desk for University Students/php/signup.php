<?php

require 'config.php';

$Name = $_POST["name"];
$Fname = $_POST["fname"];
$Sname = $_POST["sname"];
$NIC = $_POST["nic"];
$TEL = $_POST["tel"];
$Email = $_POST["email"];
$pass = $_POST["cpassword"];


$query = "INSERT INTO Student(s_fullname,s_firstname,s_secondname,s_NIC,s_contact,s_email,s_pass) 
VALUES 
('$Name','$Fname','$Sname','$NIC','$TEL','$Email','$pass')";


if($conn->query($query)){
    echo"<br>Correct";
    header("location:#");
}else{
    echo"<br>Incorrect";
}

$conn->close();
?>