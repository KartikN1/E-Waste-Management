<?php
	session_start();
 ?>
 <?php 

	$con=mysqli_connect("localhost","root","","waste");
	if($con){
		
	}
	else
		echo mysqli_error($con);

	function execute($query){
		$gg = $GLOBALS['con'];
		$result=mysqli_query($gg,$query);
		return $result;
	}
	$mob=$_POST["number"];
	$sql = "select * from 'van' where 'drivernumber'=$mob";
	$result=execute($sql);
	if($result)
	{
		while($row=mysqli_fetch_array($result))
		{
			?>
				<table border="1" cellpadding="10px" style="display: inline-table;border-collapse: collapse;">
					
					<tr>
						<td><?php echo $row[0]; ?></td>
					</tr>
					<tr>
						<td><?php echo $row[1]; ?></td>
					</tr>
					<tr>
						<td><?php echo $row[2]; ?> </td>
					</tr>
			<?php
		}
	}


?>
<h1>
	E-Waste : Driver page
	
</h1>	
	<a href="logout.php">Logout</a>
