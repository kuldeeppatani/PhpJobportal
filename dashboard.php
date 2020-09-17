<?php
session_start();
?>

<?php
	$db = mysqli_connect('localhost', 'root', 'root', 'jobportal');

?>
<?php
$result = mysqli_query($db, "SELECT * FROM `registration` where id='".$_SESSION['userid']."' ");
?>

<?php


if(isset($_POST['submit']))
{
$opass=$_POST['opas'];
$npass=$_POST['npas'];
$cpass=$_POST['cpas'];

$chngpas=mysqli_query($db,"SELECT * FROM registration where id='".$_SESSION['userid']."'");
$chngpas1=mysqli_fetch_array($chngpas);
$chngpas=$chngpas1['Password'];
if($chngpas==$opass)
{
	if($npass==$cpass)
	{
		$update_pas=mysqli_query($db,"update registration set Password='$npass'where id='".$_SESSION['userid']."'");
		echo "<script>alert('Update Successfully');window.location='login.php'</script>";
	}
	else
	{
		echo "<script>alert('Your new and Retype Password is not match');window.location='dashboard.php'</script>";
	}
}
else
{
	echo "<script>alert('Your old password is wrong');window.location='dashboard.php'</script>";
}
}
?>
<?php
include('header.php');
?>

<br/><br/>	
<center><h2 style="color:blue;font-family:arial black;text-shadow: 3px 3px 3px black;">User Dashboard</h2></center>

<div class="col-md-1 frm"></div>
<div class="col-md-8 frm">
<?php

while($row = mysqli_fetch_array($result))
{
    $imageURL = 'photo/' .$row["File Upload"];

     ?>
  <center>   <img src="<?php echo $imageURL; ?>" alt=" " style="height:230px;width:240px;border-radius: 50%;margin-top: 4%;"></center>
     <div style="margin-left:5%;">
     	<h6>Name <?php echo $row['Name'];?></h6>
        <p><i class="far fa-envelope" style="color:red;"></i>  <?php echo $row['Email'];?></p>
     <p><i class="fa fa-phone" style="color:green;"></i>  <?php echo $row['Contact No'];?></p>
     <p><i class="fa fa-mars-stroke" style="color:red;"></i>  <?php echo $row['Gender'];?></p>
     <p><i class="fas fa-map-marker-alt" style="color:blue;"></i>  <?php echo $row['Location'];?></p>
     <p>Experience &nbsp;<?php echo $row['Experience'];?></p>
     <p>Post &nbsp;<?php echo $row['Post'];?></p>
       <h6>About Us</h6><p><?php echo $row['About Us'];?></p>
        <h6>Education</h6><p><?php echo $row['Education'];?></p>
<h6 style="color:red;"> <b>Status </h6><?php echo $row['status'];?></b>
    </div>
   
   
  

 <?php } ?>
<a href="userupdate.php" style="color:white;"><button class="btn btn-danger btn-lg">Update</a></button>
</div>

<!----change password---->
<div class="col-md-3 frm" style="height:500px;background:blue;border-radius: 20px 20px 20px 20px; "><br/>
<center><h2 style="color:red;text-shadow: 3px 3px 3px black;">Change Password</h2></center><br/><br/>

<form method="post">
				<div class="col-md-12">
					<div class="form-group">
						<label style="color:white;">Old Password</label>
						<input type="password" name="opas" placeholder="Old Password" class="form-control"/>
					</div>
				</div>
				<div class="col-md-12">
					<div class="form-group">
						<label style="color:white;">New Password</label>
						<input type="password" name="npas" placeholder="NEW Password" class="form-control"/>
					</div>
				</div>
				<div class="col-md-12">
					<div class="form-group">
						<label style="color:white;">Confirm Password</label>
						<input type="password" name="cpas" placeholder="CONFIRM Password" class="form-control"/>
					</div>
				</div><br/>
				<button class="btn btn-danger btn-lg btn-block" name="submit" value="submit">CHANGE PASSWORD</button>
			</form>

</div>

<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<h2 style="float: right;color:blue;font-weight: bold;"><a href="login.php">LOG OUT</a></h2>
<br/><br/><br/><br/><br/><br/>

<div class="col-md-12 reg1">
	<div class="row rgb1">


	<div class="col-md-2" style="float: left;"></div>
    <div class="col-md-8" style="float: left;">
       <br/><br/>
<center><h2 style="color:blue;font-family:arial black;text-shadow: 3px 3px 3px black;">JOB VACANCY HERE...</h2></center>
<br/><br/><br/><br/>

<?php
if(isset($_GET['pageno']))
{
    $pageno = $_GET['pageno'];
}
else
{
    $pageno = 1;
}
$no_of_records_per_page = 5;
$offset = ($pageno-1) * $no_of_records_per_page;

$total_pages_sql = "SELECT COUNT(*) FROM `job` ";
$result = mysqli_query($db,$total_pages_sql);
$total_rows = mysqli_fetch_array($result)[0];
$total_pages = ceil($total_rows / $no_of_records_per_page);

$query = mysqli_query($db,"SELECT * FROM `job` LIMIT $offset, $no_of_records_per_page");
while($row=mysqli_fetch_array($query)){
?>
                                        <div class="job-post-main row">
                                            <div class="col-md-9 job-post-info text-left">
                                                <div class="job-post-icon">
                                                    <i class="fas fa-briefcase"></i>
                                                </div>
                                                <div class="job-single-sec">
                                                    <h4>
                                                       <?php echo $row['Post'];?>
                                                    </h4>
                     <p class="my-2">
                            <?php echo $row['Technology'];?>
                                                    </p>
                                                    <ul class="job-list-info d-flex">
                                                       
                                                  <li>
                            <i class="fas fa-map-marker-alt"></i> 
    <?php echo $row['Location'];?>                    </li>
                                                        <li>
                                 <i class="fas fa-rupee-sign"></i> <?php echo $row['Salary'];?></li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="col-md-3 job-single-time text-right">
                                                
                                                <a href="job.php?userid=<?php echo $row['id'];?>" class="aply-btn ">Apply Now</a>
                                            </div>
                                        </div>
                             <?php } ?>
    </div>

    <div class="col-md-2" style="float: left;"></div>


</div>
</div>
</div>

 <br/><br/>

<div class="col-md-12">
     <div class="col-md-4" style="float: left;"></div>
     <div class="col-md-4 a" style="float: left;">

        <!---Pagination--->

<ul class="Pagination justify-content-center mb-4" style="list-style-type: none;">
    <li class="page-item"><a href="?pageno=1" class="page-link" style="color:white;background:blue;display: inline; ">First</a></li>

    <li class="<?php if($pageno <= 1){ echo 'disabled' ; } ?> page-item">
        <a href="<?php if($pageno <= 1){ echo '#' ;} else { echo "?pageno=".($pageno - 1); } ?>" class="page-link" style="color:white;background:red;display: inline; ">Prev</a></li>

        <li class="<?php if($pageno >= $total_pages) { echo 'disabled';} ?>page-item">
            <a href="<?php if($pageno >= $total_pages){ echo '#' ; } else {echo "?pageno=".($pageno + 1); } ?> " class="page-link" style="color:white;background:blue;display: inline; ">Next</a></li>

            <li class="page-item"><a href="?pageno=<?php echo $total_pages; ?>" class="page-link" style="color:white;background:red;display: inline; " >Last</a></li>
        </ul>
     </div>
     <div class="col-md-4" style="float: left;"></div>
</div>
<br/><br/><br/><br/><br/><br/>
<?php
include('footer.php');
?>