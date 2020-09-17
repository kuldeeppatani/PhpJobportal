<?php
    $db = mysqli_connect('localhost', 'root', 'root', 'jobportal');

?>
<?php
$result = mysqli_query($db, "SELECT * FROM `registration`  where id='".$_GET['userid']."' ");


?>
<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
include('header.php');
?>

    <!-- banner-text -->
    <!--/process-->
    <section class="banner-bottom-wthree py-lg-5 py-md-5 py-3">
        <div class="container">
            <div class="inner-sec-w3ls py-lg-5  py-3">
			<!---728x90--->
                <div class="single-user-candidate">
                    <div class="user-detail-info text-center">
                        <div class="user-pic">

<?php

while($row = mysqli_fetch_array($result))
{
    $imageURL = 'photo/' .$row["File Upload"];

     ?>                            
                            <center><img src="<?php echo $imageURL; ?>" alt="" style="height:170px;width:170px;border-radius: 70%;"></center>
                        </div>
                        <div class="user-content-info emply-resume-info text-center mt-4">
                            <h3>
                               <?php echo $row['Name'];?></a>
                            </h3>
                            <h5 class="mt-2">
                                <?php echo $row['Post'];?></h5>
                            <p>
                                <i class="fas fa-map-marker-alt"></i> 
                                <?php echo $row['Location'];?></p>
                            <ul class="links_bottom_emp mt-2">
                                <li>
                                    <a href="candidate_single.php">
                                        <i class="far fa-envelope"></i>
                                        <span class="icon_text"><?php  echo $row['Email'];?></span>
                                    </a>
                                </li>
                               
                            </ul>
                            
                        </div>
                    </div>
                </div>
                <!--row -->
                <div class="col-md-2"></div>
                <div class="row qualification-details mt-5">
                    
                    <div class="col-md-4 qual-grid">
                        <div class="qual-icon text-center">
                            <i class="  fa fa-mars-stroke"></i>
                        </div>
                        <div class="qual-info">
                            <h6>Gender</h6>
                            <p><?php echo $row['Gender'];?></p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-4 qual-grid">
                        <div class="qual-icon text-center">
                            <i class="fa fa-phone" style="font-size:20px;"></i>
                        </div>
                        <div class="qual-info">
                            <h6>Contact No</h6>
                            <p><?php echo $row['Contact No'];?></p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-4 qual-grid">
                        <div class="qual-icon text-center">
                            <i class="fas fa-shield-alt" style="font-size:20px;"></i>
                        </div>
                        <div class="qual-info">
                           <h6>Experience</h6>
                            <p><?php echo $row['Experience'];?></p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!--row -->
                
                <!--// about -->
				<!---728x90--->
                <!--/history -->
                <div class="candidate-history-info mt-5">
                    <h5 class="j-b mb-5">Education</h5>
                    <div class="candidate-story-grid pl-3">
                        <div class="candidate-story-det-icon text-center">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                       
                        
                        <div class="candidate-story-det-info">
                            <h4>College / University</h4>
                            <h6 class="my-2"></h6>
                            <p><?php echo $row['Education'];?></p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>

                <!--/about -->
                <div class="candidate-ab-info mt-5">
                    <h5 class="j-b mb-3">About Us</h5>
                    <p><?php echo $row['About Us'];?></p>
                </div>
                <!--//history -->
                
                <!--//skills-->
                <!---experience-->
                
                <!--//experience-->
                <!--/awards-->
                
<?php
 $query = $db->query("SELECT * FROM `registration` ORDER BY updatedtime DESC");
 if($query->num_rows > 0)
 {
    while($row = $query->fetch_assoc())
    {
        ?>
        <?php
    }
 }else
 {
    ?>
    <p>No image(s) found...</p>
 }
 <?php } ?>  

 <?php } ?>                
                <!--//awards-->
                <!--/skills-->
               
            </div>
        </div>
    </section>
	<!---728x90--->
    <!--footer -->
    <footer class="footer-emp-w3layouts bg-dark dotts py-lg-5 py-3">
        <div class="container-fluid px-lg-5 px-3">
            <div class="row footer-top">
                <div class="col-lg-3 footer-grid-wthree-w3ls">
                    <div class="footer-title">
                        <h3>About Us</h3>
                    </div>
                    <div class="footer-text">
                        <p>Shine.com is the most innovative and second largest online job portal in India. Founded in 2008, over the past decade, Shine.com has become a prominent name in the recruitment industry.</p>
                        
                    </div>
                </div>
                <div class="col-lg-3 footer-grid-wthree-w3ls">
                    <div class="footer-title">
                        <h3>Get in touch</h3>
                    </div>
                    <div class="contact-info">
                        <h4>Location :</h4>
                        <p>Hazratganj,Lucknow</p>
                        <div class="phone">
                            <h4>Contact :</h4>
                            <a href="tel:+">Phone : +91 98 8907 9987</a>
                            <p>Email :
                                <a href="mailto:info@example.com">info@example.com</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 footer-grid-wthree-w3ls">
                    <div class="footer-title">
                        <h3>Quick Links</h3>
                    </div>
                    <ul class="links">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="about.php">About</a>
                        </li>
                        <li>
                            <a href="contact.php">Contact Us</a>
                        </li>
                    </ul>
                    <ul class="links">
                        <li>
                            <a href="vacancy.php">Vacancy</a>
                        </li>
                        <li>
                            <a href="candidates_list.php">All-Candidates</a>
                        </li>
<li>
                            <a href="shortlist.php">Short-Listed</a>
                        </li>

                      
                       
                    </ul>

                    <div class="clearfix"></div>
                </div>
                <div class="col-lg-3 footer-grid-wthree-w3ls"style="margin-top:7%;">
                    <img src="images/portal.jpg"/>
                    
                  
                </div>
            </div>
            <div class="copyright mt-4">
                <p class="copy-right text-center ">&copy; 2019 Job Portal. All Rights Reserved | Design by Anuradha Kesharwani
                   
                </p>
            </div>
        </div>
    </footer>
    <!-- //footer -->

    <!--model-forms-->
    <!--/Login-->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="login px-4 mx-auto mw-100">
                        <h5 class="text-center mb-4">Login Now</h5>
                        <form action="#" method="post">
                            <div class="form-group">
                                <label class="mb-2">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required="">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label class="mb-2">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="" required="">
                            </div>
                            <div class="form-check mb-2">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <button type="submit" class="btn btn-primary submit mb-4">Sign In</button>
                            <p class="text-center pb-4">
                                <a href="#" data-toggle="modal2" data-target="#exampleModalCenter"> Don't have an account?</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//Login-->
    <!--/Register-->
    <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="login px-4 mx-auto mw-100">
                        <h5 class="text-center mb-4">Register Now</h5>
                           <form action="registration.php" method="post"enctype="multipart/form-data">
                          
                            <div class="form-group">
                                <label>Name : </label>

                                <input type="text" class="form-control" id="validationDefault01" placeholder="Enter Your Name" required="" name="name">
                 
                       
                            <div class="form-group">
                                <label>Email : </label>
                                <input type="email" class="form-control" id="validationDefault02" placeholder="Enter Your Email" required="" name="email">
                            </div>



                            <div class="form-group">
                                <label class="mb-2">Password : </label>
                                <input type="password" class="form-control" id="password1" placeholder="Enter Your Password" required="" name="pass">
                            </div>
                            
                            <div class="form-group">
                               
                                <label>Contact No.</label>
                            <input type="tel" name="cno" placeholder="Enter Your Contact No." class="form-control"/>
                            </div>
<div class="form-group">
    <label>Gender :</label>
    <input type="radio" name="gender" value="male">Male : <input type="radio" name="gender" value="female" >Female : <input type="radio" name="other">Other :
</div>
                            
 <div class="form-group">
                                <label>About Us : </label>
                                <input type="text" class="form-control"  placeholder="Enter Your About" required="" name="abu">
                            </div>

 <div class="form-group">
                                <label>Experience : </label>
                                <input type="text" class="form-control"  placeholder="Enter Your Experience" required="" name="exp">
                            </div>

 <div class="form-group">
                                <label>Location : </label>
                                <input type="text" class="form-control"  placeholder="Enter Your Location" required="" name="loc">
                            </div>  
  <div class="form-group">
                                <label>Post : </label>
                                <input type="text" class="form-control"  placeholder="Enter Your Post" required="" name="pt">
                            </div>                                                    

                             <div class="form-group">
                                <label>Education : </label>
                                <input type="text" class="form-control"  placeholder="Enter Your Education" required="" name="edu">
                            </div>
                          
      <div class="form-group">
    <label>Current Job : </label>
    <input type="radio" name="cjob" value="Yes">Yes : <input type="radio" name="cjob" value="No" >No
</div> 
        <div class="form-group">
                              <label>Upload Picture :</label>
                            <input type="file" class="form-control"   required="" name="file">  
                          </div>                   
                            <button type="submit" class="btn btn-primary submit mb-4" name="save">Register</button>
                            <p class="text-center pb-4">
                                <a href="#">By clicking Register, I agree to your terms</a>
                            </p>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--//Register-->

    <!--//model-form-->
    <!-- js -->
    <!--/slider-->
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!--//slider-->
    <!--search jQuery-->
    <script src="js/classie-search.js"></script>
    <script src="js/demo1-search.js"></script>
    <!--//search jQuery-->

    <script>
        $(document).ready(function() {
            $(".dropdown").hover(
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //dropdown nav -->
    <!-- password-script -->
    <script>
        window.onload = function() {
            document.getElementById("password1").onchange = validatePassword;
            document.getElementById("password2").onchange = validatePassword;
        }

        function validatePassword() {
            var pass2 = document.getElementById("password2").value;
            var pass1 = document.getElementById("password1").value;
            if (pass1 != pass2)
                document.getElementById("password2").setCustomValidity("Passwords Don't Match");
            else
                document.getElementById("password2").setCustomValidity('');
            //empty string means no validation error
        }
    </script>
    <!-- //password-script -->
    <!-- //js -->
    <script src="js/bootstrap.js"></script>
    <!--/ start-smoth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            /*
            						var defaults = {
            							  containerID: 'toTop', // fading element id
            							containerHoverID: 'toTopHover', // fading element hover id
            							scrollSpeed: 1200,
            							easingType: 'linear' 
            						 };
            						*/

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!--// end-smoth-scrolling -->
</body>

</html>