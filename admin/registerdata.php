
<?php
session_start();
	$db = mysqli_connect('localhost', 'root', 'root', 'jobportal');

?>
<?php
$result = mysqli_query($db, "SELECT * FROM `registration` ");
?>
<?php
if(isset($_GET['id']))
{
	$admin=$_GET['id'];
	$msg=mysqli_query($db,"DELETE FROM `registration` WHERE id='$admin'");
	if($msg)
	{
		echo "<script>alert('Data deleted');</script>";
	}
}
?>



<?php

if(isset($_POST['search']))
{
	//id to search
	$id = $_POST['id'];

	//mysql search query
	$query = "SELECT `Name` , `Email` FROM `registration` WHERE `id` = $id LIMIT 1";
	$result = mysqli_query($db, $query);
	//if id exist
	//show data in inputs
	if(mysqli_num_rows($result) > 0)
	{
		while($row = mysqli_fetch_array($result))
		{
			$fname = $row['Name'];
			$ename = $row['Email'];
		}
	}
	//if the id not exist
	//show a message and clear inputs
	else{
		echo "Undifined Id";
		$fname = "";
		$ename = "";
	}

mysqli_free_result($result);
mysqli_close($connect);	
}

//in the first time inputs are empty

else
{
	$fname = "";
	$ename = "";
}
?>
<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Job Portal</title>
<link rel = "icon" type = "image/png" href = "images/title4.jpg">
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Esteem Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/component.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style_grid.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
 
</head>
<body>
<!-- banner -->
<div class="wthree_agile_admin_info">
		  <!-- /w3_agileits_top_nav-->
		  <!-- /nav-->
		  <div class="w3_agileits_top_nav">
			<ul id="gn-menu" class="gn-menu-main">
			  		 <!-- /nav_agile_w3l -->
				<li class="gn-trigger">
					<a class="gn-icon gn-icon-menu"><i class="fa fa-bars" aria-hidden="true"></i><span>Menu</span></a>
					<nav class="gn-menu-wrapper">
						<div class="gn-scroller scrollbar1">
							<ul class="gn-menu agile_menu_drop">
								<li><a href="main-page.php"> <i class="fa fa-tachometer"></i> Dashboard</a></li>
							
									 
									<ul class="gn-submenu">
										<li class="mini_list_agile"><a href="buttons.php"><i class="fa fa-caret-right" aria-hidden="true"></i> Candidate List</a></li>
										<li class="mini_list_w3"><a href="feedbackdata.php"> <i class="fa fa-caret-right" aria-hidden="true"></i>Feedback List </a></li>
					<li class="mini_list_w3"><a href="job.php"> <i class="fa fa-caret-right" aria-hidden="true"></i>Add Vacancy</a></li>		<li class="mini_list_w3"><a href="jobdatashow.php"> <i class="fa fa-caret-right" aria-hidden="true"></i>View Vacancy List</a></li>			
									</ul>
																
							
								
								
								
							
								
								
							</ul>
						</div><!-- /gn-scroller -->
					</nav>
				</li>
				<!-- //nav_agile_w3l -->
                <li class="second logo"><h1><a href="main-page.php"><i class="fa fa-graduation-cap" aria-hidden="true"></i>Admin Panel </a></h1></li>
					<li class="second admin-pic">
				       <ul class="top_dp_agile">
									<li class="dropdown profile_details_drop">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<div class="profile_img">	
												<span class="prfil-img"><img src="images/user.png" style="height:50px;width:50px;" alt=""> </span> 
											</div>	
										</a>
										<ul class="dropdown-menu drp-mnu">
											<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
											<li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li> 
											<li> <a href="#"><i class="fa fa-sign-out"></i> Logout</a> </li>
										</ul>
									</li>
									
						</ul>
				</li>
				<li class="second top_bell_nav">
				   <ul class="top_dp_agile ">
									<li class="dropdown head-dpdn">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><i class="fa fa-bell-o" aria-hidden="true"></i> </a>
										
									</li>
									
						</ul>
				</li>
				<li class="second top_bell_nav">
				   <ul class="top_dp_agile ">
									<li class="dropdown head-dpdn">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><i class="fa fa-envelope-o" aria-hidden="true"></i> </a>
										
									</li>
									
						</ul>
				</li>
				<li class="second top_bell_nav">
				   <ul class="top_dp_agile ">
				       <li class="dropdown head-dpdn">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i></a>
										<ul class="dropdown-menu">
											<li>
												<div class="notification_header">
													<h3>You have 4 Pending tasks</h3>
												</div>
											</li>
											<li><a href="#">
												<div class="task-info">
													<span class="task-desc">Database update</span><span class="percentage">40%</span>
													<div class="clearfix"></div>	
												</div>
												<div class="progress progress-striped active">
													<div class="bar yellow" style="width:40%;"></div>
												</div>
											</a></li>
											<li><a href="#">
												<div class="task-info">
													<span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
												   <div class="clearfix"></div>	
												</div>
												<div class="progress progress-striped active">
													 <div class="bar green" style="width:90%;"></div>
												</div>
											</a></li>
											<li><a href="#">
												<div class="task-info">
													<span class="task-desc">Mobile App</span><span class="percentage">33%</span>
													<div class="clearfix"></div>	
												</div>
											   <div class="progress progress-striped active">
													 <div class="bar red" style="width: 33%;"></div>
												</div>
											</a></li>
											<li><a href="#">
												<div class="task-info">
													<span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
												   <div class="clearfix"></div>	
												</div>
												<div class="progress progress-striped active">
													 <div class="bar  blue" style="width: 80%;"></div>
												</div>
											</a></li>
											<li>
												<div class="notification_bottom">
													<a href="#">See all pending tasks</a>
												</div> 
											</li>
										</ul>
									</li>	
								</ul>
				</li>

				<li class="second w3l_search">
				 
						<form method="post">
							<input type="search" name="id" placeholder="Search here..." required="">
							<button class="btn btn-default" name="search" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
						</form>
			
				</li>
				<li class="second full-screen">
					<section class="full-top">
						<button id="toggle"><i class="fa fa-arrows-alt" aria-hidden="true"></i></button>	
					</section>
				</li>

			</ul>
			<!-- //nav -->
			
		</div>
		<div class="clearfix"></div>
		<!-- //w3_agileits_top_nav-->
		
		<!-- /inner_content-->
				<div class="inner_content">
				    <!-- /inner_content_w3_agile_info-->

					<!-- breadcrumbs -->
						
					<!-- //breadcrumbs -->

					<div class="inner_content_w3_agile_info two_in">
					  

							<!-- /buttons_w3ls_agile -->
								
							<!-- //buttons_w3ls_agile -->
					        <!-- /buttons_w3ls_agile -->
								
							<!-- //buttons_w3ls_agile -->
							     <!-- /buttons_w3ls_agile -->
							


<center><h1 style="color:blue;font-family: monotype corsiva;font-weight: bold;">Candidate Registered Data</h1></center><br/><br/>
	<div class="col-md-12 image">
		<div class="row rgb">
<table class="table  table-hover table-bordered">
	<thead style="background:blue;color:white;">
		<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Password</th>
			<th>Contact No.</th>
			<th>Gender</th>
			<th>About Us</th>
			<th>Experience</th>
	<th>Location</th>
		<th>Post</th>
			<th>Education</th>
			
			
				<th>File Upload</th>
<th>status</th>
<th>Update</th>
<th>Delete</th>
		</tr>
	</thead>
	<?php
while ($row = mysqli_fetch_array($result))

	{
			$imageURL = '../photo/' .$row["File Upload"];
	 ?>
	<tbody>
		<tr>

			<td><a href="registerupdate.php?userid=<?php echo $row['id'];?>"></a><?php echo $row['Name'];?></td>
			
			<td><?php echo $row['Email'];?></td>
			<td><?php echo $row['Password'];?></td>
			<td><?php echo $row['Contact No'];?></td>
			
			<td><?php echo $row['Gender'];?></td>
			<td><?php echo $row['About Us'];?></td>
			<td><?php echo $row['Experience'];?></td>
			<td><?php echo $row['Location'];?></td>
			<td><?php echo $row['Post'];?></td>
			<td><?php echo $row['Education'];?></td>
			

<td><img src="<?php echo $imageURL; ?>" alt=" " style="height:60px;width:70px;"/></td>
<td><?php echo $row['status'];?></td>


			<td>
				<a href="registerupdate.php?userid=<?php echo $row['id'];?>" class="edit_btn">
					<button class="btn btn-primary btn-xs"><i class="fa fa-pencil">EDIT</i></button></a>
			</td>
			<td>
				<a href="registerdata.php?id=<?php echo $row['id']; ?>" class="del_btn">
					<button class="btn btn-danger btn-xs" onClick="return confirm ('Do You Really want to delete');"><i class="fa fa-trash-o"></i>DELETE
					</button></a>
			</td>

<?php
$query=$db->query("SELECT * FROM `registration` ORDER BY updatedtime DESC");
if($query->num_rows > 0)
{
	while($row = $query->fetch_assoc()){
		
		?>	
		
		<?php
	}
}else
{
	?>
	<p>No Image(s) found...</p>
}
<?php } ?>
			

			
		</tr>
	</tbody>
<?php } ?>
</table>
</div>
</div>

							<!-- //buttons_w3ls_agile -->
							<!-- /social_media-->
						 
						<!-- //social_media-->
				    </div>
					<!-- //inner_content_w3_agile_info-->
				</div>
		<!-- //inner_content-->
	</div>
	<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<!-- banner -->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2019 Admin Panel. All Rights Reserved | Design by  Anuradha Kesharwani </p>
</div>	
<!--copy rights end here-->
<!-- js -->

          <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
		  <script src="js/modernizr.custom.js"></script>
		
		   <script src="js/classie.js"></script>
		  <script src="js/gnmenu.js"></script>
		  <script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		 </script>

<!-- //js -->
<script src="js/screenfull.js"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});	
		});
		</script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>

<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>


</body>
</html>