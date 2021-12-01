<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#002244"/>
    <link rel="shortcut icon" type="image/x-icon" href="https://apps.mgov.gov.in/appstoreimg/602.png" />
  <link rel="stylesheet" href="style/bootstrap.min.css"> 
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 <link rel="Stylesheet" type="text/css" href="homemain.css" >
	<title>E-Waste Management</title>
	
    
  </head>
<body>

<div class="container-fuild heading" >
<p class="letter" style="position: realtive; top: 20px">E-Waste Management</p>
</div>
 <?php
 
 include "nav.php"
 
 ?>
 
 <div class="container-fluid col message_box"  >
<h3>IMPORTANCE OF WASTE MANAGEMENT</h3>
<p>Economic – Improving economic efficiency through the means of resource use, treatment and disposal and creating markets for recycles can lead to efficient practices in the production and consumption of products and materials resulting in valuable materials being recovered for reuse and the potential for new jobs and new business opportunities.<BR>
Social – By reducing adverse impacts on health by proper waste management practises, the resulting consequences are more appealing civic communities. Better social advantages can lead to new sources of employment and potentially lifting communities out of poverty especially in some of the developing poorer countries and cities.<BR>
Environmental – Reducing or eliminating adverse impacts on the environment through reducing, reusing and recycling, and minimizing resource extraction can result in improved air and water quality and help in the reduction of greenhouse gas emissions.<BR>
Inter-generational Equity – Following effective waste management practises can provide subsequent generations a more robust economy, a fairer and more inclusive society and a cleaner environment.</p>
<BR><BR>
<center>
 <img src="images/clean india.png" alt="clean India" style=" width:75%; height:95% !important; border-radius:10px"></center>
 
   </div>
   </div>
    </div>       
    <div class="footer">
  <p> Clean India better India</p>
</div>
 <div class="container-fluid" >
     <div class="row">
<div class="container-fluid col bg_img" style="float:right;margin-right:10%;margin-top:10%"> 
    <center><p class="login_text" style="color:#696969">Domestic Waste Collection</p></center>
<form method="post" action="userreg.php" style="color: black">
    <label for="name">Full Name : </label>
    <input id="name" type="text" name="name" required>
    <label for="number">Contact No : </label>
    <input for="number" type="number" name="number" required>
    <label for="lat">Address : </label>
    <input for="lat" type="text" name="address" maxlenght=100 required>
    <label for="long">City: </label>
    <input for="long" type="text" name="city" required>
    <br><br>
   <center><button name="submit" type="submit" class="button_design">Submit</button></center>
</form>
    
</div> 



</body>    
</html>
