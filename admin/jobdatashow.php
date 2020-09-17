<?php
	$db = mysqli_connect('localhost', 'root', 'root', 'jobportal');

?>
<?php
$result = mysqli_query($db, "SELECT * FROM `job`  ");
?>
<?php
if(isset($_GET['id']))
{
	$admin=$_GET['id'];
	$msg=mysqli_query($db,"DELETE FROM `job` WHERE id='$admin'");
	if($msg)
	{
		echo "<script>alert('Data deleted');</script>";
	}
}
?>
<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<?php

include('header.php');
?>
					<!-- //breadcrumbs -->

					<div class="inner_content_w3_agile_info two_in">
					  <h2 class="w3_inner_tittle text-center">View Vacancy List</h2>
									<!-- tables -->
									
									<div class="agile-tables">
										<div class="w3l-table-info agile_info_shadow">
										 
											<table id="table" class="table table-bordered table-hover">
					<thead>
		<tr>
			

			<th>Job Title</th>
												<th>Post</th>
												<th>Technology</th>
												<th>Location</th>
												<th>Company Name</th>
												<th>Salary </th>
												<th>Address</th>
												<th>Status</th>
												<th>Update</th>
												<th>Delete</th>
		</tr>
	</thead>
	<?php

while ($row = mysqli_fetch_array($result))
	{ ?>
	<tbody>
		<tr>
			
			<td><?php echo $row['Job Title'];?></td>
			<td><?php echo $row['Post'];?></td>
			<td><?php echo $row['Technology'];?></td>
			<td><?php echo $row['Location'];?></td>
			<td><?php echo $row['Company'];?></td>
			<td><?php echo $row['Salary'];?></td>
			<td><?php echo $row['Address'];?></td>
			<td><?php echo $row['status'];?></td>
			




			<td>
				<a href="jobupdatedata.php?userid=<?php echo $row['id']; ?>" class="edit_btn" >
		<button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>EDIT</button></a>
			</td>

			<td>
				<a href="jobdatashow.php?id=<?php echo $row['id']; ?>" class="del_btn">
					<button class="btn btn-danger btn-xs" onClick="return confirm ('Do You Really want to delete');"><i class="fa fa-trash-o"></i>DELETE
					</button></a>
			</td>
		</tr>
	</tbody>
<?php } ?>
										  </table>
									
									  
								</div>
								
									
									 
								
									
						</div>
							<!-- //tables -->
					
				<?php

include('footer.php');
				?>