<?php
if(isset($_POST['submit'])){

    include("000connection.php");
    
$a=$_POST['a'];
     $b=$_POST['b'];
     $c=$_POST['c'];

    $number = $_POST['number'];
   

    $result = $conn->query("select number from user_data where number=$number");
    $row = mysqli_fetch_row($result); 
       $number2 = $row[0];
    
    if($number2==$number)   
    {
 
$sql="INSERT INTO waste_record (number,a,b,c) VALUES ($number,'$a','$b','$c')";
if(!$result = $conn->query($sql)){
die('There was an error running the query [' . $conn->error . ']');
}
else
{
echo "<script> alert('Your data is updated in our database. To dispose the waste, you will be contacted soon...')</script>";
    header("Refresh: 0.001,url=waste.php");
}
  
    }
   else
    {
        echo "<script> alert('Sorry.. your are not registered') </script>";
		 header("Refresh: 0.001,url=index.php");
    }
}
    else{
        echo "<script> alert('Fill out all the input fields.') </script>";
     header("Refresh: 0.001,url=waste.php");
} 
    
 ?>
