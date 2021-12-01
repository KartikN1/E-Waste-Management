<?php
if(isset($_POST['submit']))
{

    include("000connection.php");
    $name=$_POST['name'];
    $number=$_POST['number'];
    $address=$_POST['address'];
    $city=$_POST['city']; 
    
    $sql="INSERT INTO user_data (name,number,address,city) VALUES ('$name',$number,'$address','$city')";

    if(!$result = $conn->query($sql)){
        echo "<script> alert('Mobile number already registered.')</script>";
        header("Refresh: 1,url=index.php");
        die('There was an error running the query [' . $conn->error . ']');
        
    }
    else
    {
        echo "<script> alert('Welcome aboard! Let\'s make our city clean and green. ') </script>";
        header("Refresh: 0.1, url = index.php ");
    }
  
}
    else
        {
            echo"sorry";
            header("Refresh: 0.1,url=index.php");
            
        }
   
?>
