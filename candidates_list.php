
<?php
    $db = mysqli_connect('localhost', 'root', '', 'jobportal (4)');

?>
<?php
$result = mysqli_query($db, "SELECT * FROM `registration` ");
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
                <h3 class="tittle text-center mb-lg-4 mb-3">
                    <span>Some Info</span>All Candidates</h3>
					<!---728x90--->
                <div class="row choose-main mt-5">
                   
                    <div class="col-lg-8 job_info_left">
                        <!--/ Emply List -->
                      
                          
                                
                               
                                   
<?php

while($row = mysqli_fetch_array($result))
{
    $imageURL = 'photo/' .$row["File Upload"];

     ?>
    <div class="col-md-6" style="float: left;margin-top:4%;"><img src="<?php echo $imageURL; ?>" alt=" " style="height:190px;width:240px;"></div>
<div class="col-md-6" style="float: left;"> 
<br/>
                                        <b style="font-size:23px;"><a href="candidates_single.php?userid=<?php echo $row['id']; ?>"><?php echo $row['Name'];?></a></b><br/>
                   <i style="font-size:17px;"><h5 class="mt-2"><span><?php echo $row['Post'];?></span></h5></i>                     
                       <p> <i class="fas fa-map-marker-alt"style="color:red;">&nbsp;</i><?php echo $row['Location'];?></p>                 
                      <p><i class="far fa-envelope"style="color:red;"></i> <?php echo $row['Email'];?></p><br/><br/><br/>
                    
                </div>      
                      
 <?php
 $query=$db->query("SELECT * FROM `registration` ORDER BY updatedtime DESC");
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
                                    
                                   
                                
                                
                          
                                                   
                        
                        <!--// Emply List -->
                        <!--/ Emply List1 -->
                       
                        <!--// Emply List1 -->
                        <!--/ Emply List2 -->
                        
                        <!--// Emply List2 -->
                        <!--/ Emply List3 -->
                        
                        <!--// Emply List3 -->
                        <!--/ Emply List -->
                        
                        <!--// Emply List -->
                        <!--/ Emply List1 -->
                       
                        <!--// Emply List1 -->
                        <!--/ Emply List2 -->
                       
                        <!--// Emply List2 -->
                        <!--/ Emply List3 -->
                       
                        <!--// Emply List3 -->
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--//preocess-->
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
                        <p>This portal has been brought to you by KP.</p>
                    
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
                            <a href="tel:+">Phone : 9542904861</a>
                            <p>Email :<a href="mailto:info@example.com">
                                info@example.com</a>
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
                <p class="copy-right text-center ">&copy; 2019 Job Portal. All Rights Reserved | Design by KP
                   
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