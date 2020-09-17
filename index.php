<?php
include('checklogin.php');

?>


<?php
    $db = mysqli_connect('localhost', 'root', '', 'jobportal (4)');

?>

<?php
$reg = mysqli_query($db, "SELECT * FROM `registration` ");
?>



<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>

    Job Portal</title>
    <link rel = "icon" type = "image/png" href = "images/title4.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Replenish a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="css/zoomslider.css" rel='stylesheet' type='text/css' />
    <link href="css/style6.css" rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
  <style>
      .a ul li{display: inline;}
  </style>
</head>

<body>
    <!-- banner-inner -->
    <div id="demo-1" data-zs-src='["images/1.jpg", "images/2.jpg","images/3.jpg", "images/4.jpg"]' data-zs-overlay="dots">
        <div class="demo-inner-content">
            <div class="header-top">
                <header>
                    <div class="top-head ml-lg-auto text-center">
                        <div class="row">

                            
                           
                            <div class="col-md-3 sign-btn">
                                <a href="#" data-toggle="modal" data-target="#exampleModalCenter2">
                                    <i class="far fa"></i> </a>
                            </div>
                            <div class="search col-md-2">
                                <div class="mobile-nav-button">
                                   
                                </div>
                                <!-- open/close -->
                                <div class="overlay overlay-door">
                                    <button type="button" class="overlay-close">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </button>
                                    <form action="#" method="post" class="d-flex">
                                        <input class="form-control" type="search" placeholder="Search here..." required="">
                                        <button type="submit" class="btn btn-primary submit">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </form>
                                </div>
                                <!-- open/close -->
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="logo">
                            <h1>
                                <a class="navbar-brand" href="index.php">
                                    <i class="fab fa-codepen"></i><b>Job Portal</b></a>
                            </h1>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon">
                                <i class="fas fa-bars"></i>
                            </span>

                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-lg-auto text-center">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.php">Home
                                        
                                    </a>
                                </li>
                              <li class="nav-item">
                                    <a class="nav-link" href="about.php">About Us</a>
                                </li>

                               
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.php">Contact Us</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="candidates_list.php">
                                        All-Candidates
                                       
                                    </a>
                                   
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="shortlist.php">Short-Listed</a>
                                </li>
                               
                               
                                <li class="nav-item">
                                    <a class="nav-link" href="registration.php">Registration</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="login.php">Login</a>
                                </li>
                            </ul>

                        </div>
                    </nav>
                </header>
            </div>
            <!--/banner-info-w3layouts-->
            <div class="banner-info-w3layouts text-center">

               
                

                
            </div>
            <!--//banner-info-w3layouts-->
        </div>
    </div>
    <!-- banner-text -->
    <!-- banner-bottom-wthree -->
    <section class="banner-bottom-wthree py-lg-5 py-md-5 py-3">
        <div class="container">
            <div class="inner-sec-w3ls py-lg-5  py-3">
                <h3 class="tittle text-center mb-lg-4 mb-3">
                    <span>Our Mission</span>Popular Job Categories</h3>
                <div class="row populor_category_grids mt-5">
                    <div class="col-md-3 category_grid">
                        <div class="view view-tenth">
                            <div class="category_text_box">
                                <i class="fa fa-desktop"></i>
                                <h3> Web Developer</h3>
                                
                            </div>
                            <div class="mask">
                                <a href="#">
                                    <img src="images/p1.jpg" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 category_grid">
                        <div class="view view1 view-tenth">
                            <div class="category_text_box">
                                <i class="  fas fa-industry"></i>
                                <h3>Digital Marketing </h3>
                                
                            </div>
                            <div class="mask">
                                <a href="#">
                                    <img src="images/p2.jpg" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 category_grid">
                        <div class="view view2 view-tenth">
                            <div class="category_text_box">
                                <i class="fab fa-accusoft"></i>
                                <h3>Acountant </h3>
                              
                            </div>
                            <div class="mask">
                                <a href="#">
                                    <img src="images/p3.jpg" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 category_grid">
                        <div class="view view3 view-tenth">
                            <div class="category_text_box">
                                <i class="fas fa-users"></i>
                                <h3>Human Resource</h3>
                               
                            </div>
                            <div class="mask">
                                <a href="#">
                                    <img src="images/p4.jpg" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3 justify-content-center">
                    <div class="col-md-3 category_grid">
                        <div class="view view4 view-tenth">
                            <div class="category_text_box">
                                <i class="fa fa-image"></i>
                                <h3>Graphic designer </h3>
                                
                            </div>
                            <div class="mask">
                                <a href="#">
                                    <img src="images/p4.jpg" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 category_grid">
                        <div class="view view5 view-tenth">
                            <div class="category_text_box">
                                <i class="fa fa-user"></i>
                                <h3>Assistant Manager</h3>
                                
                            </div>
                            <div class="mask">
                                <a href="#">
                                    <img src="images/p4.jpg" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //banner-bottom-wthree -->
    <!--/process-->
    <section class="banner-bottom-wthree pb-lg-5 pb-md-4 pb-3">
        <div class="container">
            <div class="inner-sec-w3ls py-lg-5  py-3">
			<!---728x90--->
                <h3 class="tittle text-center mb-lg-4 mb-3">
			
                    <span>Some Info</span>Latest Job flow-positions</h3>
					<!---728x90--->
                <div class="tabs mt-5">
                    <ul class="nav nav-pills my-4" id="pills-tab" role="tablist">

                        <li class="nav-item">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Featured Jobs</a>
                        </li>
                       

                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="menu-grids mt-4">
                                <div class="row t-in">
                                    <div class="col-lg-8 text-info-sec">
                                        <!--/job1-->

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
                                                
                                               
                                            </div>
                                        </div>
                             <?php } ?>  
<div class="col-md-12">
 <div class="col-md-4" style="float: left;"></div>
 <div class="col-md-5 a" style="float: left;">
     
     <!---Pagination--->
<br/><br/>
<ul class="Pagination justify-content-center mb-4" style="list-style-type: none;">
    <li class="page-item"><a href="?pageno=1" class="page-link" style="color:white;background:blue;display: inline; ">First</a></li>

    <li class="<?php if($pageno <= 1){ echo 'disabled' ; } ?> page-item">
        <a href="<?php if($pageno <= 1){ echo '#' ;} else { echo "?pageno=".($pageno - 1); } ?>" class="page-link" style="color:white;background:red;display: inline; ">Prev</a></li>

        <li class="<?php if($pageno >= $total_pages) { echo 'disabled';} ?>page-item">
            <a href="<?php if($pageno >= $total_pages){ echo '#' ; } else {echo "?pageno=".($pageno + 1); } ?> " class="page-link" style="color:white;background:blue;display: inline; ">Next</a></li>

            <li class="page-item"><a href="?pageno=<?php echo $total_pages; ?>" class="page-link" style="color:white;background:red;display: inline; ">Last</a></li>
        </ul>
 </div>
 <div class="col-md-3" style="float: left;"></div>
</div>

                                        <!--//job1-->
                                        <!--/job2-->

                                        
                                        <!--//job2-->
                                        <!--/job3-->

                                        
                                        <!--//job2-->
                                        <!--/job3-->

                                        
                                        <!--//job3-->
                                        <!--/job4-->

                                       
                                        <!--//job4-->
                                    </div>
                                    <div class="col-lg-4 text-info-sec">
                                        <img src="images/job-1.jpg" alt=" " class="img-fluid" />
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <div class="menu-grids mt-4">
                                <div class="row t-in">
                                    <div class="col-lg-4 text-info-sec">
                                        <img src="images/job-2.jpg" alt=" " class="img-fluid" />
                                    </div>
                                    <div class="col-lg-8 text-info-sec">
                                        <!--/job1-->

                                       
                                        <!--//job1-->
                                        <!--/job2-->

                                        <div class="job-post-main row my-3">
                                            <div class="col-md-9 job-post-info text-left">
                                                <div class="job-post-icon">
                                                    <i class="fas fa-briefcase"></i>
                                                </div>
                                                <div class="job-single-sec">
                                                    <h4>
                                                        <a href="#">
                                                            Content Writer and Speaker</a>
                                                    </h4>
                                                    <p class="my-2">Company Name goes here</p>
                                                    <ul class="job-list-info d-flex">
                                                        <li>
                                                            <i class="fas fa-briefcase"></i> Comera</li>
                                                        <li>
                                                            <i class="fas fa-map-marker-alt"></i> California</li>
                                                        <li>
                                                            <i class="fas fa-dollar-sign"></i> 200000 - 100000 / Annum</li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="col-md-3 job-single-time text-right">
                                                <span class="job-time">
                                                    <i class="far fa-heart"></i> Part Time</span>
                                                <a href="#" class="aply-btn ">Appy Now</a>
                                            </div>
                                        </div>
                                        <!--//job2-->
                                        <!--/job3-->

                                        <div class="job-post-main row">
                                            <div class="col-md-9 job-post-info text-left">
                                                <div class="job-post-icon">
                                                    <i class="fas fa-briefcase"></i>
                                                </div>
                                                <div class="job-single-sec">
                                                    <h4>
                                                        <a href="#">
                                                            Web Designer / Developer</a>
                                                    </h4>
                                                    <p class="my-2">Company Name goes here</p>
                                                    <ul class="job-list-info d-flex">
                                                        <li>
                                                            <i class="fas fa-briefcase"></i> Chicago</li>
                                                        <li>
                                                            <i class="fas fa-map-marker-alt"></i> California</li>
                                                        <li>
                                                            <i class="fas fa-dollar-sign"></i> 300000 - 500000 / Annum</li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="col-md-3 job-single-time text-right">
                                                <span class="job-time">
                                                    <i class="far fa-heart"></i> Full Time</span>
                                                <a href="#" class="aply-btn ">Appy Now</a>
                                            </div>
                                        </div>
                                        <!--//job3-->
                                        <!--/job4-->

                                        <div class="job-post-main row mt-3">
                                            <div class="col-md-9 job-post-info text-left">
                                                <div class="job-post-icon">
                                                    <i class="fas fa-briefcase"></i>
                                                </div>
                                                <div class="job-single-sec">
                                                    <h4>
                                                        <a href="#">
                                                            Marketing Director</a>
                                                    </h4>
                                                    <p class="my-2">Technology Management Consulting</p>
                                                    <ul class="job-list-info d-flex">
                                                        <li>
                                                            <i class="fas fa-briefcase"></i> Rennes</li>
                                                        <li>
                                                            <i class="fas fa-map-marker-alt"></i> France</li>
                                                        <li>
                                                            <i class="fas fa-dollar-sign"></i> 300000 - 500000 / Annum</li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="col-md-3 job-single-time text-right">
                                                <span class="job-time">
                                                    <i class="far fa-heart"></i> Full Time</span>
                                                <a href="#" class="aply-btn ">Appy Now</a>
                                            </div>
                                        </div>
                                        <!--//job4-->
                                        <!--/job1-->

                                        <div class="job-post-main row mt-3">
                                            <div class="col-md-9 job-post-info text-left">
                                                <div class="job-post-icon">
                                                    <i class="fas fa-briefcase"></i>
                                                </div>
                                                <div class="job-single-sec">
                                                    <h4>
                                                        <a href="#">Developer for Site Maintenance </a>
                                                    </h4>
                                                    <p class="my-2">Company nName gose here</p>
                                                    <ul class="job-list-info d-flex">
                                                        <li>
                                                            <i class="fas fa-briefcase"></i> Comera</li>
                                                        <li>
                                                            <i class="fas fa-map-marker-alt"></i> California</li>
                                                        <li>
                                                            <i class="fas fa-dollar-sign"></i> 300000 - 500000 / Annum</li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="col-md-3 job-single-time text-right">
                                                <span class="job-time">
                                                    <i class="far fa-heart"></i> Part Time</span>
                                                <a href="#" class="aply-btn ">Appy Now</a>
                                            </div>
                                        </div>
                                        <!--//job1-->
                                        <!--/job2-->

                                        <div class="job-post-main row my-3">
                                            <div class="col-md-9 job-post-info text-left">
                                                <div class="job-post-icon">
                                                    <i class="fas fa-briefcase"></i>
                                                </div>
                                                <div class="job-single-sec">
                                                    <h4>
                                                        <a href="#">
                                                            Content Writer and Speaker</a>
                                                    </h4>
                                                    <p class="my-2">Company Name goes here</p>
                                                    <ul class="job-list-info d-flex">
                                                        <li>
                                                            <i class="fas fa-briefcase"></i> Comera</li>
                                                        <li>
                                                            <i class="fas fa-map-marker-alt"></i> California</li>
                                                        <li>
                                                            <i class="fas fa-dollar-sign"></i> 200000 - 100000 / Annum</li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="col-md-3 job-single-time text-right">
                                                <span class="job-time">
                                                    <i class="far fa-heart"></i> Part Time</span>
                                                <a href="#" class="aply-btn ">Appy Now</a>
                                            </div>
                                        </div>
                                        <!--//job2-->
                                        <!--/job3-->

                                        <div class="job-post-main row">
                                            <div class="col-md-9 job-post-info text-left">
                                                <div class="job-post-icon">
                                                    <i class="fas fa-briefcase"></i>
                                                </div>
                                                <div class="job-single-sec">
                                                    <h4>
                                                        <a href="#">
                                                            Web Designer / Developer</a>
                                                    </h4>
                                                    <p class="my-2">Company Name goes here</p>
                                                    <ul class="job-list-info d-flex">
                                                        <li>
                                                            <i class="fas fa-briefcase"></i> Chicago</li>
                                                        <li>
                                                            <i class="fas fa-map-marker-alt"></i> California</li>
                                                        <li>
                                                            <i class="fas fa-dollar-sign"></i> 300000 - 500000 / Annum</li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="col-md-3 job-single-time text-right">
                                                <span class="job-time">
                                                    <i class="far fa-heart"></i> Part Time</span>
                                                <a href="#" class="aply-btn ">Appy Now</a>
                                            </div>
                                        </div>
                                        <!--//job3-->
                                        <!--/job4-->

                                        <div class="job-post-main row mt-3">
                                            <div class="col-md-9 job-post-info text-left">
                                                <div class="job-post-icon">
                                                    <i class="fas fa-briefcase"></i>
                                                </div>
                                               
                                                
                                            </div>
                                           
                                        </div>
                                        <!--//job4-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//preocess-->

    <!--job -->
    <section class="banner-bottom-wthree mid py-lg-5 py-3">
        <div class="container">
            <div class="inner-sec-w3ls py-lg-5  py-3">
                <div class="mid-info text-center pt-3">
                    <h3 class="tittle text-center cen mb-lg-5 mb-3">
                        <span>Some Info</span>Make a Difference with Your Online Registration!</h3>
                    <p></p>
                    <div class="resume">
                        <a href="registration.php">
                            <i class="far fa-user"></i> Registration</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--//job -->
    <!--job -->
    <section class="banner-bottom-wthree py-lg-5 py-md-5 py-3">
        <div class="container">
            <div class="inner-sec-w3ls py-lg-5  py-3">
			<!---728x90--->
                <h3 class="tittle text-center mb-lg-5 mb-3">
                    <span>Some Info</span>Selection Process</h3>

                <div class="mid-info text-center mt-5">
                    <div class="parent-chart">
                        <div class="level lev-one top-level">
                            <div class="flow-position">
                                <img src="images/s1.jpg" alt=" " class="img-fluid rounded-circle">
                                <br>
                                <strong>Recruitment Process</strong>

                            </div>
                        </div>
                        <div class="flow-chart">
                            <div class="level lev-two last-lev">
                                <div class="flow-position">
                                    <img src="images/s2.jpg" alt=" " class="img-fluid rounded-circle">
                                    <br>
                                    <strong>1.Job Vacancy</strong>
                                   
                                </div>
                                <!--
                            -->
                                <div class="flow-position">
                                    <img src="images/s3.jpg" alt=" " class="img-fluid rounded-circle">
                                    <br>
                                    <strong>2. Job Analysis
                                    </strong>
                                   
                                </div>
                                <!--
                            -->
                                <div class="flow-position">
                                    <img src="images/s4.jpg" alt=" " class="img-fluid rounded-circle">
                                    <br>
                                    <strong>3. Attracting Candidates
                                    </strong>
                                  
                                </div>
                                <!--
                            -->
                                <div class="flow-position">
                                    <img src="images/s5.jpg" alt=" " class="img-fluid rounded-circle">
                                    <br>
                                    <strong>4.Screening </strong>
                                   
                                </div>
                                <!--
                            -->
                                <div class="flow-position">
                                    <img src="images/s6.jpg" alt=" " class="img-fluid rounded-circle">
                                    <br>
                                    <strong>5.Interviewing Candidates
                                    </strong>
                                  
                                </div>
                                <!--
                            -->
                                <div class="flow-position">
                                    <img src="images/s7.jpg" alt=" " class="img-fluid rounded-circle">
                                    <br>
                                    <strong>6.Selecting</strong>
                                  
                                </div>
                                <!--
                            -->
                                <div class="flow-position">
                                    <img src="images/s8.jpg" alt=" " class="img-fluid rounded-circle">
                                    <br>
                                    <strong>7.Employee Evaluation
                                    </strong>
                                  
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--//job -->
    <!--/candidates -->
    




    <!--/candidates -->
    <!--/stats-->
    
    <!--//stats-->

    <!--job -->
    <section class="banner-bottom-wthree py-lg-5 py-md-5 py-3">
        <div class="container">
            <div class="inner-sec-w3ls py-lg-5  py-3">
                <h3 class="tittle text-center mb-lg-5 mb-3">
                    <span>Some Info</span> Quick Career Tips</h3>
                <div class="row mt-5">

                    <div class="card-deck">
                        <div class="card">
                            <img src="images/g1.jpg" alt="Card image cap" class="img-fluid card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Would Disruption Work for Your Business?</h5>
                                <p class="card-text">A job portal doesn't guarantee that you'll get a job. It's simply a job application tool that allows you to apply for jobs and connect with potential employers.</p>
                            </div>
                            
                        </div>
                        <div class="card">
                            <img src="images/g2.jpg" alt="Card image cap" class="img-fluid card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">The New Mix of a Multigenerational Workforce</h5>
                                <p class="card-text">A job portal doesn't guarantee that you'll get a job. It's simply a job application tool that allows you to apply for jobs and connect with potential employers. </p>
                            </div>
                            
                        </div>
                        <div class="card">
                            <img src="images/g3.jpg" alt="Card image cap" class="img-fluid card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Would Disruption Work for Your Business?</h5>
                                <p class="card-text">A job portal doesn't guarantee that you'll get a job. It's simply a job application tool that allows you to apply for jobs and connect with potential employers. </p>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//job -->
    <!--/mobile-app -->
    
    <!--clients-->
    <section class="clents-slide py-lg-5 py-3">
        <div class="container">
            <div class="inner-sec-w3ls py-lg-5   py-md-3 py-3">
                <h3 class="tittle text-center mb-lg-5 mb-3">
                    <span>Some Info</span> What User Say?</h3>
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner mt-5">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-6  testi-main">
                                    <div class="testi-grids row">
                                        <div class="col-md-9 col-sm-9 col-xs-9 clients-info-text">
                                            <h6>Anuradha Kesharwani</h6>
                                            <p>A job portal doesn't guarantee that you'll get a job.</p>
                                           
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-3 img-testi">
                                            <img class="img-fluid" src="images/anu.jpg" style="height:80px;" alt="">
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6 testi-main">
                                    <div class="testi-grids t2 row">
                                        <div class="col-md-3 col-sm-3 col-xs-3 img-testi">
                                            <img class="img-fluid" src="images/vinita3.jpg" style="height:80px;width:100px;" alt="">
                                        </div>
                                        <div class="col-md-9 col-sm-9 col-xs-9 clients-info-text">
                                            <h6>Vinita Kumari</h6>
                                            <p> some job-portal agencies charge employers to list their job openings.</p>
                                            
                                        </div>


                                    </div>
                                </div>
                                <div class="col-md-6  testi-main">
                                    <div class="testi-grids row">
                                        <div class="col-md-9 col-sm-9 col-xs-9 clients-info-text">
                                            <h6>Prema Kumari</h6>
                                            <p>A job portal contains direct solicitations for employment.</p>
                                         
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-3 img-testi">
                                            <img class="img-fluid" src="images/prema.jpg" style="height:80px;" alt="">
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6  testi-main">
                                    <div class="testi-grids t2 row">
                                        <div class="col-md-3 col-sm-3 col-xs-3 img-testi">
                                            <img class="img-fluid" src="images/divya.jpg" style="height:80px;width:80px;"alt="">
                                        </div>
                                        <div class="col-md-9 col-sm-9 col-xs-9 clients-info-text">
                                            <h6>Divya Kesharwani</h6>
                                            <p>Decide what jobs you want to feature on your job board.</p>
                                     
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-6  testi-main">
                                    <div class="testi-grids row">
                                        <div class="col-md-9 col-sm-9 col-xs-9 clients-info-text">
                                            <h6>Anshita</h6>
                                            <p>Job boards, or job portals, are an integral part of any recruitment strategy.</p>
                                          
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-3 img-testi">
                                            <img class="img-fluid" src="images/anshita.jpg" style="height:80px;" alt="">
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6 testi-main">
                                    <div class="testi-grids t2 row">
                                        <div class="col-md-3 col-sm-3 col-xs-3 img-testi">
                                            <img class="img-fluid" src="images/stym.jpg" style="height:80px;" alt="">
                                        </div>
                                        <div class="col-md-9 col-sm-9 col-xs-9 clients-info-text">
                                            <h6>Satyam Mishra</h6>
                                            <p>Technology has changed the way job seekers search for jobs and employers find qualified employees.</p>
                                          
                                        </div>


                                    </div>
                                </div>
                                <div class="col-md-6  testi-main">
                                    <div class="testi-grids row">
                                        <div class="col-md-9 col-sm-9 col-xs-9 clients-info-text">
                                            <h6>Shiv Rajan</h6>
                                            <p>Shine.com is the most innovative and second largest online job portal in India.</p>
                                      
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-3 img-testi">
                                            <img class="img-fluid" src="images/shiv.jpg"style="height:80px;" alt="">
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6  testi-main">
                                    <div class="testi-grids t2 row">
                                        <div class="col-md-3 col-sm-3 col-xs-3 img-testi">
                                            <img class="img-fluid" src="images/team4.jpg" style="height:80px;"alt="">
                                        </div>
                                        <div class="col-md-9 col-sm-9 col-xs-9 clients-info-text">
                                            <h6>Neha Mishra</h6>
                                            <p> Shine.com has become a prominent name in the recruitment industry.</p>
                                          
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-6  testi-main">
                                    <div class="testi-grids row">
                                        <div class="col-md-9 col-sm-9 col-xs-9 clients-info-text">
                                            <h6>Aman Kapoor</h6>
                                            <p>Job Portal is a platform that joins recruiters and the job seekers to complete their goals and requirements.</p>
                                           
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-3 img-testi">
                                            <img class="img-fluid" src="images/aman.jpg" style="height:80px;" alt="">
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6 testi-main">
                                    <div class="testi-grids t2 row">
                                        <div class="col-md-3 col-sm-3 col-xs-3 img-testi">
                                            <img class="img-fluid" src="images/pragati.jpg" style="height:80px;" alt="">
                                        </div>
                                        <div class="col-md-9 col-sm-9 col-xs-9 clients-info-text">
                                            <h6>Pragati Maurya</h6>
                                            <p> Monster is a global online employment solution for people seeking jobs and the employers who need great people.</p>
                                           
                                        </div>


                                    </div>
                                </div>
                                <div class="col-md-6  testi-main">
                                    <div class="testi-grids row">
                                        <div class="col-md-9 col-sm-9 col-xs-9 clients-info-text">
                                            <h6> Fatima Khan</h6>
                                            <p>They also utilize an in depth referral network that is not available on most other job search websites.</p>
                                            
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-3 img-testi">
                                            <img class="img-fluid" src="images/team2.jpg"style="height:80px;" alt="">
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6  testi-main">
                                    <div class="testi-grids t2 row">
                                        <div class="col-md-3 col-sm-3 col-xs-3 img-testi">
                                            <img class="img-fluid" src="images/krishna.jpg" style="height:80px;"alt="">
                                        </div>
                                        <div class="col-md-9 col-sm-9 col-xs-9 clients-info-text">
                                            <h6>Krishna Sing</h6>
                                            <p>Search latest job openings online including IT, Sales, Banking, Fresher, Walk-ins, Part time etc.</p>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev test" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="fas fa-long-arrow-alt-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                    <a class="carousel-control-next test" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="fas fa-long-arrow-alt-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
    
                        </a>

                </div>
            </div>
        </div>
    </section>
    <!--//clients-->
    <!--footer -->
    <footer class="footer-emp-w3layouts bg-dark dotts py-lg-5 py-3">
        <div class="container-fluid px-lg-5 px-3">
            <div class="row footer-top">
                <div class="col-lg-3 footer-grid-wthree-w3ls">
                    <div class="footer-title">
                        <h3>About Us</h3>
                    </div>
                    <div class="footer-text">
                        <p>This portal has been brought to you by KP. </p>
                       
                    </div>
                </div>
                <div class="col-lg-3 footer-grid-wthree-w3ls">
                    <div class="footer-title">
                        <h3>Get in touch</h3>
                    </div>
                    <div class="contact-info">
                        <h4>Location :</h4>
                        <p>Hazratganj Lucknow.</p>
                        <div class="phone">
                            <h4>Contact :</h4>
                            <a href="tel:+">Phone : 9452904861</a>
                            <p>Email :<a href="mailto:info@example.com">
                                info@example.com
                            </a>
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
                <div class="col-lg-3 footer-grid-wthree-w3ls" style="margin-top:7%;">
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
    <script src="js/jquery.zoomslider.min.js"></script>
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

    <!-- stats -->
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.countup.js"></script>
    <script>
        $('.counter').countUp();
    </script>
    <!-- //stats -->

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