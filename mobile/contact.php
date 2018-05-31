<?php   
	include"config-mass.php";
	include"database-mass.php"; 
 
   $db = new database();
   if(isset($_POST['submit'])){
	   $fname  =  mysqli_real_escape_string ($db->link,$_POST['fname']);
	   $lname  =  mysqli_real_escape_string ($db->link,$_POST['lname']);
	   $email =  mysqli_real_escape_string ($db->link,$_POST['email']);
	   $mass =  mysqli_real_escape_string ($db->link,$_POST['mass']);
	   
	   if($fname == ''|| $lname == ''|| $email == ''|| $mass == ''){
		    echo $error = "Field must not be Empty";
	   }
	   
	   else{
		   $query = "INSERT INTO reg(fname,lname,email,mass) Values('$fname','$lname','$email','$mass')";
	       $create = $db->insert($query);
	    }
    }
 
    if(isset($_error)){
		echo "<span>".$_error."</span>";
	} 
 ?>

<!DOCTYPE html>
<html>
<head>
<title> My Mobile Shop </title>   
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
    <div id="form-main">
		<div id="form-div">
			<form action="" method="post"  class="form" > 
			  <p class="name">
				<input name="fname" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Name" id="name" />
			  </p> 
			  <p class="name">
				<input name="lname" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Name" id="name" />
			  </p> 
			  <p class="email">
				<input name="email" type="text" class="validate[required,custom[email]] feedback-input" id="email" placeholder="Email" />
			  </p> 
			  <p class="text">
				<textarea name="mass" class="validate[required,length[6,300]] feedback-input" id="comment" placeholder="Comment"></textarea>
			  </p>  
			  <div class="submit">
				<input type="submit" name="submit" id="button-blue" value="Submit"> 
				<div class="ease"></div>
			  </div>
			</form>
		</div>
	</div> 
</body>
</html>