<?php

$allowedExts = array("pdf");
$temp = explode(".", $_FILES["pdf_file"]["name"]);
$extension = end($temp);
$upload_pdf=$_FILES["pdf_file"]["name"];
move_uploaded_file($_FILES["pdf_file"]["tmp_name"],"uploads/" .date("Y-m-d"). $_FILES["pdf_file"]["name"]);
//$sql=mysqli_query($con,"INSERT INTO `Table Name`(`pdf_file`)VALUES($upload_pdf')");
//if($sql){
//	echo "Data Submit Successful";
//}
//else{
//	echo "Data Submit Error!!";
//}
?>