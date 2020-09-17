<?php
session_start();
?>

<?php

  $db = mysqli_connect('localhost', 'root', '', 'jobportal (4)');

error_reporting(0);

if(isset($_POST['save']))
{
    $ret=mysqli_query($db,"SELECT * FROM `registration` WHERE Email='".$_POST['email']."' and Password='".$_POST['pass']."'");
    $num=mysqli_fetch_array($ret);
    if($num>0)
    {
        

$_SESSION['userid']=$num['id'];
$_SESSION['name']=$_POST['Name'];
$_SESSION['email']=$_POST['email'];
        header('location:dashboard.php');
        exit();
    }
    else
    {
        $_SESSION['errmsg']="Invalid username or Password";
        $extra="login.php";
        $host = $_SERVER['HTTP_HOST'];
        $uri = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
        header("location:http://$host$uri/$extra");
        exit(); 
    }
}
?>

<?php
include('header.php');
?><br/><br/>
<center><h1 style="color:blue;font-family:arial black;text-shadow: 3px 3px 3px black;">Login Here..</h1></center>
<div class="col-md-12">
	<div class="col-md-7 frm2"></div>
	<div class="col-md-5 frm">
	<center style="margin-top:5%;"><img src="images/user.png" style="height:160px;width:150px;"/></center>	
	<form method="post">
		<div class="form-group">
			<div class="col-md-12">
				<label>Email</label>
				<input type="email" name="email" placeholder="Email.." class="form-control" required=""/>
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-12">
				<label>Password</label>
				<input type="password" name="pass"  placeholder="Password.." class="form-control" required=""/>
			</div>
		</div>
		<button class="btn btn-primary btn-lg " name="save">Login</button> 
        &nbsp;&nbsp;<a  href="registration.php" style="color:red;">Are You Registered !</a>
	</form>



	<form method="post">
                          <div class="col-md-12" >
                            <div class="form-group">
                            	
                                

                                <input type="text" class="form-control"  placeholder="Enter Your Name" hidden="" name="name">
                 
                       </div></div>
                       <div class="col-md-12" >
                            <div class="form-group">
                            	
                               
                                <input type="email" class="form-control"  placeholder="Enter Your Email" hidden="" name="email">
                            </div></div>



                            <div class="form-group">
                            	<div class="col-md-12" >
                             
                                <input type="password" class="form-control" id="password1" placeholder="Enter Your Password" hidden="" name="pass">
                            </div></div>
                            
                            <div class="form-group" >
                               <div class="col-md-12">
                                
                            <input type="tel" name="cno" placeholder="Enter Your Contact No." class="form-control" hidden="" />
                            </div></div>

                            
 <div class="form-group">
 	<div class="col-md-12" >
                                
                                <textarea class="form-control"  placeholder="Enter Your About" hidden="" name="abu"></textarea>
                            </div></div>

 <div class="form-group">
 	<div class="col-md-12" >
                              
                                <input type="text" class="form-control"  placeholder="Enter Your Experience" hidden="" name="exp">
                            </div></div>

 <div class="form-group">
 	<div class="col-md-12" >
                               
                                <input type="text" class="form-control"  placeholder="Enter Your Location" hidden="" name="loc">
                            </div></div>  
  <div class="form-group">
  	<div class="col-md-12" >
                                
                                <input type="text" class="form-control"  placeholder="Enter Your Post" hidden=""  name="pt">
                            </div>   </div>                                                 

                             <div class="form-group">
                             	<div class="col-md-12" >
                               
                                <textarea class="form-control"  placeholder="Enter Your Education" hidden="" name="edu"></textarea>
                            </div></div>
                          
       
        <div class="form-group">
        	<div class="col-md-12">
                             
                            <input type="file" class="form-control"   hidden="" name="file">  
                          </div>  </div>                 
                         
                           
                        </form>
	
	</div>
</div>


<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<?php
include('footer.php');
?>



