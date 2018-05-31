<?php require_once'inc/header.php';
  
include"config.php";
include"database.php"; 
?>

<?php
   $db       = new database();
	$id       = $_GET['id'];
	$query    = "SELECT * FROM tab WHERE id = $id" ;
	$getdata  = $db->select($query)->fetch_assoc();
  
?>


<!DOCTYPE html>
<html>
<head>
<title>.::My Mobile Shop::.</title>   
<link rel="stylesheet" href="style.css"> 
</head>
<body>
<div class="html">
	<div class="head">
		<img src="img/lo1.png">
	</div>    
	<div class="menu"> 
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="project.php">Shop</a></li>
			<li><a href="contact.php">Contact</a></li>
			<li style="border-right:none"><a href="#">Registration</a></li>
		</ul>
	</div><hr><hr> 
		<form action="single.php?id= <?php echo $id;?> " method="post">
			<table> 
				<td> 	
						
				   <img src="img/<?php echo $getdata['img'];?>" alt=" <?php echo $getdata['name'];?> " /> <br>
				   <?php echo $getdata['name'];?>  		
				</td>  
				<td> 	 
					<?php echo $getdata['price'];?> 
				</td>  
				<td> 	 
					<?php echo $getdata['details'];?> 
				</td>  
			</table> 
		</form> 
</div>



         
</body>
</html>