<?php

require_once ('db.php');

$get_id=$_REQUEST['tbl_aks_id'];

move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/" . $_FILES["image"]["name"]);			
$location1=$_FILES["image"]["name"];
$page_no = $_POST['page_no'];


$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "UPDATE tbl_drupal_interview_questions SET image_location ='$location1', aks_description='$aks_description',
windows_linux='$windows_linux', mac='$mac', type_of_aks='$type_of_aks' WHERE tbl_image_id = '$get_id' ";

$conn->exec($sql);
echo "<script>alert('Successfully Updated!!!'); window.location='index.php'</script>";
//header("location:index.php");
?>