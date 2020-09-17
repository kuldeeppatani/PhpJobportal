



<?php

$db=mysqli_connect('localhost','root','root','jobportal');
$statusMsg = '';

$targetDir = "photo/";
$fileName=basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir.$fileName;
$fileType=pathinfo($targetFilePath,PATHINFO_EXTENSION);
if(isset($_POST['save']) && !empty($_FILES["file"]["name"]))
{
	$allowType=array('jpg','jpeg','png','gif','pdf');
	if(in_array($fileType,$allowType))
	{
		if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath))
		{
			if(isset($_POST['save']))
{
	$nam=$_POST['name'];
	$eml=$_POST['email'];
	$pas=$_POST['pass'];
	$cn=$_POST['cno'];
	$gen=$_POST['gender'];
	$abut=$_POST['abu'];
	$exps=$_POST['exp'];
	$locn=$_POST['loc'];
	$pst=$_POST['pt'];
	$edun=$_POST['edu'];
	

$insert=mysqli_query($db,"INSERT INTO `registration`( `Name`, `Email`, `Password`, `Contact No`, `Gender`, `About Us`, `Experience`,`Location`,`Post`,`Education`,`File Upload`, `updatedtime`,`status`) VALUES('$nam','$eml','$pas','$cn','$gen','$abut','$exps','$locn','$pst','$edun','".$fileName."',NOW(),'Pending')");
header('location:index.php');
}
			
			if($insert)
			{
				$statusMsg="The file ".$fileName."has been upload successfully.";
			}else{
				$statusMsg="File upload failed,please try again.";
			}
		}else{
			$statusMsg="Sorry,there was an error uploading file.";
		}
		}else{
			$statusMsg="Sorry,only JPG,PNG,JPEG,GIF, & PDF files are allowed to upload ";
		}
	}else{
		$statusMsg="Please select a file to upload.";
	
}
echo $statusMsg;
?>