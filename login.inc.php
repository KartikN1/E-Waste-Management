<?php


       include("000connection.php");
        
        
    $username2 = $_POST['number'];
    $password2 = md5($_POST['password']);

        
$result3 = $conn->query("select drivernumber from van where drivernumber=$username2");
  $row3 = mysqli_fetch_row($result3); 
  $b3 = $row3[0];

//checking for username        
if($b3==$username2)
{
    
    
        
$result = $conn->query("select password from van where drivernumber=$username2");
    $row = mysqli_fetch_row($result); 
       $b = $row[0];
    
    
//checking for password
if($b==$password2){
    echo "<script> alert('You have succesfully logged in')</script>";
    session_start();
    $_SESSION['username2']=$username2;
	
	$mob=$_POST["number"];
	$sql = "select * from van where drivernumber=$mob";
	$result=mysqli_query($conn,$sql);
	if($result)
	{
		while($row=mysqli_fetch_array($result))
		{
			?> 
			<body style="background-color: black">
			<br> <br>
			<fieldset style="background-image:url('images/newback.jpg'); width: 60%; margin: 130px auto 200px;">
			<div align="center" >
				<h1>PROFILE</h1>
				<table border="5" cellpadding="10px" style="display: inline-table;border-collapse: collapse; width: 80%">
					
					<tr>
						<td><b>ID: </b></td>
						<td><?php echo $row[0]; ?></td>
					</tr>
					<tr>
						<td><b>Name: </b></td>
						<td><?php echo $row[1]; ?></td>
					</tr>
					<tr>
						<td><b>Mobile Number: </b></td>
						<td><?php echo $row[2]; ?> </td>
					</tr>
					<tr>
						<td><b>Vehicle Number: </b></td>
						<td><?php echo $row[3]; ?> </td>
					</tr>
					
				</table><br><br>
				<a href="logout.php" align="center" align="center"><h3>Logout</h4></a>
			</div> <br>
			</fieldset>
			</body>
			
			
			<?php
		}
	}


   
}
        
else{
    
   ?>
		<script>alert("Your password is not matched sorry!, please enter correct password.");</script>
        <!-- <P>your password is not matched sorry</P><br>
        <p>please enter your correct data password</p> -->
   <?php
 header("Refresh: 0.001 ; url=logindriver.php");
}
}
        
        
else
{
    ?>
		<script>alert("Sorry you are not registered or mobile number is incorrect, try again or Please Register!");</script>
        <!-- <P>sorry you are not registeredn or username is not correct</P><br>
        <p>please register...</p> -->
   	<?php 
    header("Refresh: 0.001 ; url=vanreg.php");
}

?>
