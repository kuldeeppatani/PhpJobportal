<?php
	$db = mysqli_connect('localhost', 'root', 'root', 'jobportal');

?>
<?php
$result = mysqli_query($db, "SELECT * FROM `registration` ");
?>


<center><h1 style="color:blue;font-family: monotype corsiva;font-weight: bold;">Registered DATA</h1></center>
	<div class="col-md-12 image">
		<div class="row rgb">

	
			<h3>Name</h3>
			<h3>Email</h3>
			<h3>Password</h3>
			<h3>Contact No.</h3>
			<h3>Gender</h3>
			<h3>About Us</h3>
			<h3>Experience</h3>
			<h3>Education</h3>
		
			<h3>Current Job</h3>
				<h3>File Upload</h3>
		

	<?php
while ($row = mysqli_fetch_array($result))
	{ ?>
	
		
			<p><?php echo $row['Name'];?></p>
			
			<p><?php echo $row['Email'];?></p>
			<p><?php echo $row['Password'];?></p>
			<p><?php echo $row['Contact No'];?></p>
			
			<p><?php echo $row['Gender'];?></p>
			<p><?php echo $row['About Us'];?></p>
			<p><?php echo $row['Experience'];?></p>
			<p><?php echo $row['Education'];?></p>

<p><?php echo $row['Current Job'];?></p>
<?php
$query=$db->query("SELECT * FROM `registration` ORDER BY updatedtime DESC");
if($query->num_rows > 0)
{
	while($row = $query->fetch_assoc()){
		$imageURL = 'photo/' .$row["File Upload"];
		?>	
		<img src="<?php echo $imageURL; ?>" alt=" " />
		<?php
	}
}else
{
	?>
	<p>No Image(s) found...</p>
}
<?php } ?>
			

			
		
	
<?php } ?>