<?php require_once'inc/header.php';
  
include"config.php";
include"database.php"; 
?>

<?php
    $db = new database();
	$query = "SELECT * FROM tab" ;
	$read = $db->select($query); 
	
    if(isset($_GET['msg'])){
		echo "<span>".$_GET['msg']."</span>";
	} 
?>



<form action="" method="post">
    <table>
	    <tr>
		    <th>Id</th>
		    <th>Name</th>
		    <th>Email</th>
		    <th>Skill</th> 
		    <th>Edit</th>  
		    <th>Delete</th>  
		</tr>
		<?php if($read){?>
	    <?php $i=1; while($row = $read->fetch_assoc()){?>
		<tr>
		    <td><?php echo $i++;?></td>
		    <td><?php echo $row['name'];?></td>
		    <td><?php echo $row['email'];?></td>
		    <td><?php echo $row['skill'];?></td>
		    <td><a href="update.php?id=<?php echo urlencode($row['id']);?>">Edit</a></td>
		    <td><a href="delete.php?id=<?php echo urlencode($row['id']);?>">Delete</a></td>
 		</tr>
		<?php }?>
	    <?php } else {?>
	    <p>DATA is not AVAIL!!!</p>
	    <?php } ?>
    </table> 
    <a href="create.php">Add More Data</a>
	
</form>
</body>
</html>