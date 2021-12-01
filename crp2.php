<?php
if(isset($_POST['submit'])){

     include("000connection.php");
    

    
    $a=$_POST['a'];
     $b=$_POST['b'];
     $c=$_POST['c'];
    $d=$_POST['d'];
     $e=$_POST['e'];
     $f=$_POST['f'];
    $details=$_POST['details'];
        $address=$_POST['address'];
        
$sql="INSERT INTO c_record (address,a,b,c,d,e,f,details) VALUES ('$address','$a','$b','$c','$d','$e','$f','$details')";
if(!$result = $conn->query($sql)){
die('There was an error running the query [' . $conn->error . ']');
}
else
{
echo "<script> alert('Your complaint has been registered and will be resolved soon...')</script>";
    header("Refresh: 0.001,url=crp.php");
}
  
    }
    else
    {
        echo"sorry";
        header("Refresh: 0.001,url=crp.php");
        
    }
   
    ?>		
        
        
        


