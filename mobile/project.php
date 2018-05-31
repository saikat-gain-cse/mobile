<?php  

	include"config.php";
	include"database.php"; 
 
    $db = new database();
	$query = "SELECT * FROM tab" ;
	$read = $db->select($query); 
	
    if(isset($_GET['msg'])){
		echo "<span>".$_GET['msg']."</span>";
	} 
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
	<img src="img/lo1.png"></div>    
    
	<div class="menu"> 
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="project.php">Shop</a></li>
			<li><a href="contact.php">Contact</a></li>
			<li style="border-right:none"><a href="#">Registration</a></li>
		</ul>
	</div><hr><hr> 
	<?php if($read){?>
		<?php $i=1; while($row = $read->fetch_assoc()){ ?> 
		<div class="ph1">
			<img src="img/<?php echo $row['img'];?>" alt="" />
			<h1><a href="single.php?id=<?php echo urlencode($row['id']);?>"><?php echo $row['name'];?></a></h1>
			<H2><?php echo $row['price'];?></H2>
		</div>
		<?php }?>
	<?php } else {?>	
		<p>DATA is not AVAIL!!!</p>
	<?php } ?> 
</div>  
</body>
</html>