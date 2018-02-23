<?php
include("init.php");
   session_start();

if(!isset($_SESSION['username'])){
    header('location:index.php');

}

?><!DOCTYPE html>
<html>
    <head>
        <title>InternShip-Homepage</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="font-awesome.min.css">
         <link rel="stylesheet" href="form-elements.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">

         <style type="text/css">
    body{
      background-image: url('1.jpg');
      background-repeat: no-repeat;
      background-size: cover;
      margin: 0px;
      padding: 0px;
      width: 100%;
      height: 100vh;
    }
    a{
    font-family: 'Roboto', sans-serif;
    font-size: 24px;
    }
   a:hover { 
    background-color: aqua;
    text-decoration: underline;
}
    </style>
</head>
<body>
<div class="container">
<div class="row">
<h1 style="color: aqua">InternShip</h1>
   
    <span class="pull-right"><a href="index.php">Logout</a></span>
    </div>
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3 form-box">
            <div class="form-top">
            <div class="form-top-left">
                <h3>Registered User.</h3>
            </div>
            </div>
            <div class="form-bottom">
            <form method="post" class="login-form">
            <div class="form-group">
   <?php
  include('init.php');
  $sql="SELECT firstname from registerdata;";
  $result = mysqli_query($con,$sql);
  if ($result->num_rows > 0) {
   while($row = $result->fetch_assoc()) {
              $sname = $row["firstname"];
               echo "<a href=\"Details.php?link=$sname\"><br>".$sname."</a>"; 
              }
  }
  else
  {
    echo "No Entry";
  }
$con->close();
?> </div></form></div></div></div></div>  
</body>
</html>
