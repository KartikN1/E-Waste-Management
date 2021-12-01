<html>
<head>
<link rel="Stylesheet" type="text/css" href="homemain.css" >

</head>
<body style="background-image:url('images/back11.jpg');background-position: center;
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
<div class="container-fluid col bg_img" style="float:right;margin-right:20%;margin-top:5%;">

    <center><p class="login_text" style="color:#696969">Choose the waste you want to dispose</p></center>
    <form method="post" action="waste2.php" style="color: white;">
    
    <label for="number">Contact No : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br>
     <input type="hidden" name="a" value="0">
     <input type="hidden" name="b" value="0">
     <input type="hidden" name="c" value="0">
    <input for="number" type="number" name="number" required><br> <br>
    
	<input type="checkbox" name="a" value="1">
	<label for="number">Metallic </label><br>
    
    <input type="checkbox" name="b" value="1">
	<label for="number">Recyclable </label><br>
    	
    <input type="checkbox" name="c" value="1"> 
	<label for="number">Biodegradable </label><br>
     <br>
    
   <center><button name="submit" type="submit" class="button_design">Submit</button></center>
</form>
    
</div> 

<div class="container-fluid col message_box">
<h3>DOMESTIC WASTE</h3>
<p>Domestic wastes are those produced by individual activities. In common with other living organisms, humans discharge waste substances to the environment that in turn re-energize the endless cycle of nature. Human activities are closely associated with ambient environment through accumulation of domestic waste. Such household hazardous waste deposit arise from the discharge of domestic activities in the form of municipal solid waste , night soil. Solid waste in the form of kitchen garbage and other household refuse is collected for landfill disposal or for re-industrialization. Many domestic waste influence indoor air quality in urban and rural areas as for example the fuel used for cooking, modern building materials, insulation, fabrics and furniture, cleaning materials, solvents, pesticides,  organic material or vegetable origin and dander from domestic life</p>
<BR><BR>
<center>
 <img src="images/domestic.jpg" alt="clean India" style=" width:65%; height:35% !important; border-radius:10px"></center>
 
   </div>
   </div>
    </div>       
    <div class="footer">
  <p> Clean India Better India</p>
</div>

</body>    
</html>
