<?php  
	session_start();  
	if(!isset($_SESSION["user"]))
	{
	 header("location:index.php");
	}
	 
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
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Administrator	</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php"> <?php echo $_SESSION["user"]; ?> </a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user"> 
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
               <ul class="nav" id="main-menu"> 
                    <li>
                        <a class="active-menu" href="home.php"><i class="fa fa-dashboard"></i> All Mobiles</a>
                    </li>
                    <li>
                        <a href="add.php"><i class="fa fa-desktop"></i> Add New Mobiles</a>
                    </li>  
                    <li>
                        <a href="reject.php"><i class="fa fa-desktop"></i> Delete Mobiles</a>
                    </li> 
					<li>
                        <a href="massages.php"><i class="fa fa-desktop"></i> Massages</a>
                    </li>
                    <li>
                        <a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li> 
				</ul>
            </div> 
        </nav> 
        <div id="page-wrapper"> 
			<form action="" method="post">
				<table> 
					<?php if($read){?>
					<?php $i=1; while($row = $read->fetch_assoc()){?>
					<tr>
						<td><a href="single.php?id=<?php echo urlencode($row['id']);?>">
						<?php echo $row['name'];?></a></td>  
						<td><a href="delete.php?id=<?php echo urlencode($row['id']);?>">Delete</a></td>
					</tr>
					<?php }?>
					<?php } else {?>
					<p>DATA is not AVAIL!!!</p>
					<?php } ?>
				</table>  
			</form> 
		</div>  
	</div> 
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>


</body>

</html>