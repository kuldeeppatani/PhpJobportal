
<?php
    $db = mysqli_connect('localhost', 'root', '', 'jobportal (4)');

?>
<?php
$result = mysqli_query($db, "SELECT * FROM `registration` where status='Approved' ");
?>


<?php
include('header.php');
?><br/><br/><br/>
<center style="color:blue;font-weight:bold;text-shadow: 3px 3px 3px black;"><h2>SHORT LISTED CANDIDATED</h2></center><br/><br/>
<div class="col-md-12">
<div class="col-md-2" style="float: left;"></div>
<div class="col-md-8" style="float: left;">
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
                      <p><i class="far fa-envelope" style="color:red;"></i> <?php echo $row['Email'];?></p>
<p><i class="fa fa-phone" style="color:green;"></i> <?php echo $row['Contact No'];?></p>
                      
                      <p style="color:blue;font-weight: bold;"><i class="fa fa-check" style="color:red;"></i><?php echo $row['status'];?></p><br/><br/>
                    
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
</div>
<div class="col-md-2" style="float: left;"></div>
</div>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

<?php
include('footer.php');
?>