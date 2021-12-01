<?php
if(isset($_POST['submit'])){

include("000connection.php");

    $drivername = $_POST['name'];
    $drivernumber = $_POST['number'];
    $vanno = $_POST['vanno'];
    $password=md5($_POST['password']);//md5 is the encryption algorithm.

$sql="INSERT INTO van (drivername,drivernumber,vanno,password) VALUES ('$drivername',$drivernumber,'$vanno','$password')";
if(!$result = $conn->query($sql)){
    echo "<script> alert('Mobile number already registered.')</script>";
        header("Refresh: 1,url=vanreg.php");
die('There was an error running the query [' . $conn->error . ']');
}
else
{
echo "<script>alert('Welcome aboard!')</script>";
    header("Refresh:0.001,url=logindriver.php");
}}
else{
   
     header("Refresh: 0.001,url=vanreg.php");
} ?>

