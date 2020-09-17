<?php
include('checklogin.php');
?>

<?php
$db=mysqli_connect('localhost','root','root','jobportal');
?>
<?php
if(isset($_POST['save']))
{
	$pst=$_POST['post'];
	$ty=$_POST['techno'];
	$ln=$_POST['location'];
	$slry=$_POST['salary'];
	
mysqli_query($db,"UPDATE `job` SET status='Request' where id='".$_GET['userid']."'");
}
?>
<?php
include('header.php');
?>
<br/>
<center><h2 style="color:blue;text-shadow: 3px 3px 3px black;font-weight:bold;"> APPLY FOR JOB</h2></center><br/>
<div class="col-md-6 imag"></div>
<div class="col-md-6 frm">
	<?php
$num=mysqli_query($db,"select * from job where id='".$_GET['userid']."'");
while($row=mysqli_fetch_array($num))
{
	?>
		<form method="post">

			<div class="col-md-12">
				<div class="form-group">
				<label>Post</label>
				<input type="text" name="post" placeholder="Post" class="form-control" value="<?php echo $row['Post'];?>">
			</div>
		</div>
			<div class="col-md-12">
				<div class="form-group">
				<label>Technology</label>
				<input type="text" name="techno" placeholder="Technology" class="form-control" value="<?php echo $row['Technology'];?>">
			</div>
		</div>
			<div class="col-md-12">
				<div class="form-group">
				<label>Location</label>
				<input type="text" name="location" placeholder="Location" class="form-control" value="<?php echo $row['Location'];?>">
			</div>
		</div>
		<div class="col-md-12">
				<div class="form-group">
				<label>Salary</label>
				<input type="text" name="salary" placeholder="Salary" class="form-control" value="<?php echo $row['Salary'];?>">
			</div>
		</div><center><button class="btn btn-default btn-sm " name="save" style="border:none;background:#f7f7f7;">
<span class="fa fa-check-square"  style="font-size:30px;color:red;margin-left:3%;"></span>&nbsp;&nbsp;<b>Are you intrested for job</b>
	<a href="login.php"></a></button> &nbsp;&nbsp;	</center>
		

<?php } ?>		
		</form>
</div>

<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>													
															
				<?php
include('footer.php');
				?>