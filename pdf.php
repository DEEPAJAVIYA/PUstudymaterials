<?php

$db=mysqli_connect("localhost","root","","WebA1");

    $name=$_POST['name'];
    $email=$_POST['email'];
    $question=$_POST['question'];
    $ins="insert into stu00 (name,email,question,Date) values ('$name','$email','$question',current_timestamp())";
    $db->query($ins);

    $db->close();

    echo $email . "  info successfully added";


?>