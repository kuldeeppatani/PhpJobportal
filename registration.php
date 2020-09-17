<?php

include('header.php');
?>
<div class="col-md-12 reg">
	<div class="row rgb">
		<div class="col-md-2"></div>
		<div class="col-md-8 reg2">
			
			<div class="panel panel-default">
				<div class="panel-heading"><h1><center style="color:blue;font-weight:bold;font-family: monotype corsiva;"><span class="fa fa-check" style="color:red;"></span>&nbsp;Registration Here..</center></h1></div>
				<div class="panel-body">
					<form action="registrationdata.php" method="post"enctype="multipart/form-data">
                          <div class="col-md-12" >
                            <div class="form-group">
                            	
                                <label><b>Name : </b></label>

                                <input type="text" class="form-control"  placeholder="Enter Your Name" required="" name="name">
                 
                       </div></div>
                       <div class="col-md-12" >
                            <div class="form-group">
                            	
                                <label><b>Email :</b> </label>
                                <input type="email" class="form-control"  placeholder="Enter Your Email" required="" name="email">
                            </div></div>



                            <div class="form-group">
                            	<div class="col-md-12" >
                                <label class="mb-2"><b>Password : </b></label>
                                <input type="password" class="form-control" id="password1" placeholder="Enter Your Password" required="" name="pass">
                            </div></div>
                            
                            <div class="form-group" >
                               <div class="col-md-12">
                                <label><b>Contact No.</b></label>
                            <input type="tel" name="cno" placeholder="Enter Your Contact No." class="form-control"/>
                            </div></div>
<div class="form-group">
	<div class="col-md-12"  style="margin-top:4%;">
    <label><b>Gender :</b></label>
    <input type="radio" name="gender" value="male"><b>Male :</b> <input type="radio" name="gender" value="female" ><b>Female : </b><input type="radio" name="gender" value="other"><b>Other </b>
</div></div>
                            
 <div class="form-group">
 	<div class="col-md-12" >
                                <label><b>About Us : </b></label>
                                <textarea class="form-control"  placeholder="Enter Your About" required="" name="abu"></textarea>
                            </div></div>

 <div class="form-group">
 	<div class="col-md-12" >
                                <label><b>Experience : </b></label>
                                <input type="text" class="form-control"  placeholder="Enter Your Experience" required="" name="exp">
                            </div></div>

 <div class="form-group">
 	<div class="col-md-12" >
                                <label><b>Location : </b></label>
                                <input type="text" class="form-control"  placeholder="Enter Your Location" required="" name="loc">
                            </div></div>  
  <div class="form-group">
  	<div class="col-md-12" >
                                <label><b>Post : </b></label>
                                <input type="text" class="form-control"  placeholder="Enter Your Post" required="" name="pt">
                            </div>   </div>                                                 

                             <div class="form-group">
                             	<div class="col-md-12" >
                                <label><b>Education :</b> </label>
                                <textarea class="form-control"  placeholder="Enter Your Education" required="" name="edu"></textarea>
                            </div></div>
                          
       
        <div class="form-group">
        	<div class="col-md-12">
                              <label><b>Upload Picture :</b></label>
                            <input type="file" class="form-control"   required="" name="file">  
                          </div>  </div>                 
                            <button type="submit" class="btn btn-primary btn-block submit mb-4" onclick="reg()" name="save">Register</button>
                            <p class="text-center pb-4">
                                <a href="registration.php">By clicking Register, I agree to your terms</a>
                            </p>
                        </form>
				</div>
			</div>      
		</div>
		<div class="col-md-2"></div>
	</div>
</div>

<?php 
include('footer.php');
?>