<html>
<head>
<link rel="Stylesheet" type="text/css" href="homemain.css" >
</head>
<body style="background-image:url('images/complaint.jpg');background-position: center;
			background-repeat: no-repeat;
			background-size: cover;">

<div class="container-fuild heading" >
<p class="letter">E-Waste Management</p>
</div> 

 <?php
 
 include "nav.php"
 
 ?>
 <div class="container-fluid">
     <div class="row">
<div class="container-fluid col bg_img" style="margin-top:5%;float:right;margin-right:10%" >
<center><p class="login_text">Driver login</p></center>
<form method="post" action="login.inc.php">
    <label for="username">Mobile no. : </label>
    <input id="username" type="number" name="number" required>
    <label for="pass">Password : </label>
    <input for="pass" type="password" name="password" required>
    
   <center><button name="submit" type="submit" class="button_design">Login</button></center>
</form>
    
</div> 

<div class="container-fluid col message_box">
<h3><strong>DUTIES OF TRUCK DRIVERS</strong></h3>
<p>Garbage Truck Drivers are responsible for operating the truck that collects and disposes garbage.
:Their duties include emptying dumpsters<BR> :Storing trucks and equipment safely <BR>:Maintaining pick-up records <BR> :Performing truck cleaning <BR> :Reporting repair requirements<BR> :Identifying malfunctions<BR>:Following a scheduled route.</p>
<BR><BR>
<center>
 <img src="images/truckdrive.jpg" alt="clean India" style=" width:65%; height:35% !important; border-radius:10px"></center>
 
   </div>
   </div>
    </div>       
    <div class="footer">
  <p> Clean India Better India</p>
</div>

</body>    
</html>
