<?php
include('checklogin.php');
?>
<?php
    $db = mysqli_connect('localhost', 'root', 'root', 'jobportal');

?>



<?php
include('header.php');
?><br/><br/><br/>
<center><h2 style="color:blue;font-family:arial black;">Vacancy Here...</h2></center>
<br/><br/><br/><br/>
<div class="col-md-12">
	<div class="col-md-2" style="float: left;"></div>
    <div class="col-md-8" style="float: left;">
        
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
                                                
                                                <a href="job.php?userid=<?php echo $row['id'];?>" class="aply-btn ">Apply Now</a>
                                            </div>
                                        </div>
                             <?php } ?>
    </div>

    <div class="col-md-2" style="float: left;">
         
    </div>


</div>
</div>


 
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<div class="col-md-12">
     <div class="col-md-4" style="float: left;"></div>
     <div class="col-md-4 a" style="float: left;">

        <!---Pagination--->

<ul class="Pagination justify-content-center mb-4" style="list-style-type: none;">
    <li class="page-item"><a href="?pageno=1" class="page-link" style="color:white;background:blue;display: inline; ">First</a></li>

    <li class="<?php if($pageno <= 1){ echo 'disabled' ; } ?> page-item">
        <a href="<?php if($pageno <= 1){ echo '#' ;} else { echo "?pageno=".($pageno - 1); } ?>" class="page-link" style="color:white;background:red;display: inline; ">Prev</a></li>

        <li class="<?php if($pageno >= $total_pages) { echo 'disabled';} ?>page-item">
            <a href="<?php if($pageno >= $total_pages){ echo '#' ; } else {echo "?pageno=".($pageno + 1); } ?> " class="page-link" style="color:white;background:blue;display: inline; ">Next</a></li>

            <li class="page-item"><a href="?pageno=<?php echo $total_pages; ?>" class="page-link" style="color:white;background:red;display: inline; " >Last</a></li>
        </ul>
     </div>
     <div class="col-md-4" style="float: left;"></div>
</div>
<br/><br/><br/><br/><br/><br/>
<?php
include('footer.php');
?>