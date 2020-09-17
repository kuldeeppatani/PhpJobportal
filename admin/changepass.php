<?php
session_start();
$db=mysqli_connect('localhost','root','root','jobportal');

if(isset($_POST['submit']))
{
$opass=$_POST['opas'];
$npass=$_POST['npas'];
$cpass=$_POST['cpas'];

$chngpas=mysqli_query($db,"SELECT * FROM `adminlogin` where id='1'");
$chngpas1=mysqli_fetch_array($chngpas);
$chngpas=$chngpas1['Password'];
if($chngpas==$opass)
{
	if($npass==$cpass)
	{
		$update_pas=mysqli_query($db,"update adminlogin set Password='$npass'where id='1'");
		echo "<script>alert('Update Successfully');window.location='main-page.php'</script>";
	}
	else
	{
		echo "<script>alert('Your new and Retype Password is not match');window.location='changepass.php'</script>";
	}
}
else
{
	echo "<script>alert('Your old password is wrong');window.location='changepass.php'</script>";
}
}
?>


<?php
include('header.php');
?>
<div class="col-md-12 chng">
	<div class="row rgb"><br/><br/>
		
		<div class="col-md-12">
			<div class="col-md-4"></div>
			<div class="col-md-4"style="height:390px;background:blue;border-radius: 20px 20px 20px 20px; "><br/><center><h2 style="color:white;text-shadow: 3px 3px 3px black;font-weight:bold;">CHANGE PASSWORD</h2></center><br/>
				<form method="post">
				<div class="col-md-12">
					<div class="form-group">
						<label style="color:white;">Old Password</label>
						<input type="password" name="opas" placeholder="Enter Old Password" class="form-control"/>
					</div>
				</div>
				<div class="col-md-12">
					<div class="form-group">
						<label style="color:white;">New Password</label>
						<input type="password" name="npas" placeholder="Enter New Password" class="form-control"/>
					</div>
				</div>
				<div class="col-md-12">
					<div class="form-group">
						<label style="color:white;">Confirm Password</label>
						<input type="password" name="cpas" placeholder="Enter Confirm Password" class="form-control"/>
					</div>
				</div><br/>
				<button class="btn btn-danger btn-lg btn-block" name="submit" value="submit">CHANGE P.</button>
			</form>

			</div>
			<div class="col-md-4"></div>
		</div>
	</div>
</div>


<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<?php
include('footer.php');
?>