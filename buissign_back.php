<?php

include('Connect.php');
session_start();

if (isset($_POST['signup'])) {
  $id = uniqid();
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $buisnesstype = $_POST['buisnesstype'];

  $query1 = " SELECT * FROM `buisness` WHERE `email` = '$email' ";
  $res1 = mysqli_query($Connect, $query1);
  $data = mysqli_fetch_assoc($res1);

  if (strcmp($data['email'], $email) == 0) {
    echo ("<script>alert('Email  is Already Registred!')</script>");
    echo ("<script>window.location = 'buisnesslogin.php'</script>");
  } else {
    $query1 = "INSERT INTO `buisness`( `name`, `email`, `password`,`id`,`buisnesstype`) VALUES ('$name','$email','$password','$id','$buisnesstype')";
    $res1 = mysqli_query($Connect, $query1);

    echo ("<script>alert('You have Sucessfully Registred!')</script>");
    echo ("<script>window.location = 'buisnesshome.php?id=$id'</script>");
  }
} else {
  echo ("<script>alert('Undefined action!')</script>");
  echo ("<script>window.location = 'buisnesslogin.php'</script>");
}


?>