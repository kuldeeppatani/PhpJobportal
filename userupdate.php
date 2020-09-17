<?php 
session_start();
$db=mysqli_connect('localhost','root','root','jobportal');
if(isset($_POST['save']))
{
	$nam=$_POST['name'];
	$eml=$_POST['email'];
$cn=$_POST['cno'];
$abut=$_POST['abu'];
$exps=$_POST['exp'];
$lcsn=$_POST['loc'];
$pst=$_POST['pt'];
$edcsn=$_POST['edu'];
	mysqli_query($db,"UPDATE `registration` SET `Name`='$nam',`Email`='$eml',`Contact No`='$cn',`About Us`='$abut',`Experience`='$exps',`Location`='$lcsn',`Post`='$pst',`Education`='$edcsn' where id='".$_SESSION['userid']."'");
}
?>



<?php

include('header.php');
?>
<div class="col-md-12 reg">
	<div class="row rgb">
		<div class="col-md-2"></div>
		<div class="col-md-8 reg1">
			
			<div class="panel panel-default">
				<div class="panel-heading"><h1><center style="color:blue;font-weight:bold;font-family: monotype corsiva;"><span class="fa fa-check" style="color:red;"></span>&nbsp;Update Here..</center></h1></div>
	<?php
$reg=mysqli_query($db,"select * from registration where id='".$_SESSION['userid']."'");
while($row=mysqli_fetch_array($reg)){
	?>				
				<div class="panel-body">
					<form  method="post">
                          <div class="col-md-12" >
                            <div class="form-group">
                            	
                                <label><b>Name : </b></label>

                                <input type="text" class="form-control"  placeholder="Enter Your Name" required="" name="name" value="<?php echo $row['Name'];?>">
                 
                       </div></div>
                       <div class="col-md-12" >
                            <div class="form-group">
                            	
                                <label><b>Email :</b> </label>
                                <input type="email" class="form-control"  placeholder="Enter Your Email" required="" name="email"value="<?php echo $row['Email'];?>">
                            </div></div>



                            
                            
                            <div class="form-group" >
                               <div class="col-md-12">
                                <label><b>Contact No.</b></label>
                            <input type="tel" name="cno" placeholder="Enter Your Contact No." class="form-control" value="<?php echo $row['Contact No'];?>"/>
                            </div></div>

                            
 <div class="form-group">
 	<div class="col-md-12" >
                                <label><b>About Us : </b></label>
                                <textarea class="form-control"  placeholder="Enter Your About" required="" name="abu"><?php echo $row['About Us'];?></textarea>
                            </div></div>

 <div class="form-group">
 	<div class="col-md-12" >
                                <label><b>Experience : </b></label>
                                <input type="text" class="form-control"  placeholder="Enter Your Experience" required="" name="exp" value="<?php echo $row['Experience'];?>">
                            </div></div>

 <div class="form-group">
 	<div class="col-md-12" >
                                <label><b>Location : </b></label>
                                <input type="text" class="form-control"  placeholder="Enter Your Location" required="" name="loc"value="<?php echo $row['Location'];?>">
                            </div></div>  
  <div class="form-group">
  	<div class="col-md-12" >
                                <label><b>Post : </b></label>
                                <input type="text" class="form-control"  placeholder="Enter Your Post" required="" name="pt" value="<?php echo $row['Post'];?>">
                            </div>   </div>                                                 

                             <div class="form-group">
                             	<div class="col-md-12" >
                                <label><b>Education :</b> </label>
 <textarea class="form-control"  placeholder=
         "Enter Your Education" required="" name="edu">
         <?php echo $row['Education'];?></textarea>
                            </div></div>
                          
       
                    
                            <button type="submit" class="btn btn-primary btn-block submit mb-4" name="save">Update</button>
                            
                        </form>
				</div>
				<?php } ?>
			</div>      
		</div>
		<div class="col-md-2"></div>
	</div>
</div>

<?php 
include('footer.php');
?>