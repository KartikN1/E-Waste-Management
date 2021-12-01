<html>
<head>
<link rel="Stylesheet" type="text/css" href="homemain.css" >
<title>E-Waste</title>

<style type="text/css">
.topnav {
  overflow: hidden;
  background-color: #696969;
}

.topnav a {
  float: left;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  
}

.topnav a:hover {
  background-color:rgba(0,0,0,0.5);
  color:white ;
}

.topnav a.active {
  background-color:rgba(0,0,0,0.5);
  color: white;
}

</style>
</head>
<body style="background-image:url('images/back12.jpg');background-position: center;
			background-repeat: no-repeat;
			background-size: cover;">
<div class="container-fuild heading" >
<p class="letter">E-Waste Management</p>
</div>
     <?php
 
 include "nav.php"
 
 ?>
<div class="container-fluid bg_img" style="margin-right:38%;height:100%" >

    <center><p class="login_text">Company Registration</p></center>
<form method="post" action="cr2.php" >

     <input type="hidden" name="a" value="0">
     <input type="hidden" name="b" value="0">
     <input type="hidden" name="c" value="0">
    <input type="hidden" name="d" value="0">
     <input type="hidden" name="e" value="0">
     <input type="hidden" name="f" value="0">
    <input type="hidden" name="details" value="NA">
    <br>
    
    
    <label for="name">Your Company Name : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
    <input id="name" type="text" name="name" required><br><br>
    <label for="ceo">Waste Management Officer : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
    <input id="ceo" type="text" name="ceo" required><br><br>
    <label for="number">Company contact no : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
    <input id="number" type="number" name="number" required><br><br>
    <label for="pass">Password : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
    <input id="pass" type="password" name="password" required><br><br>
    
    
    
    <label for="number">Address : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
    <textarea name="address" class="detail" cols="50" rows="3" required></textarea>
    
    
    <br><br>
    <label for="type"> Select Type of Waste: </label><br><br>
    <input for="a" type="checkbox" name="a" value="1">&nbsp;&nbsp;&nbsp;
    <label for="a">Chemical </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <br>
    <input for="b" type="checkbox" name="b" value="1">&nbsp;&nbsp;&nbsp;
    <label for="b">Medical </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <br>
  
    <input for="c" type="checkbox" name="c" value="1">&nbsp;&nbsp;&nbsp;
    <label for="c">Metallic </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <br>
    <input for="d" type="checkbox" name="d" value="1">&nbsp;&nbsp;&nbsp;
    <label for="d">Plastic </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <br>
    <input for="e" type="checkbox" name="e" value="1">&nbsp;&nbsp;&nbsp;  
    <label for="e">Biodegradable </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <br>
    <input for="f" type="checkbox" name="f" value="1">&nbsp;&nbsp;&nbsp;
    <label for="f">Glass </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <br> <br>
  
    
    <label for="details">Any other type of waste : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
    <textarea class="detail" name="details" cols="50" rows="3"></textarea > <br> 
   <center><button name="submit" type="submit" class="button_design">Submit</button></center>
</form>
    
</div>        
</body>    
</html>

