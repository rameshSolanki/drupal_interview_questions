<?php
require_once('db.php');

$get_id=$_GET['tbl_aks_id'];

// sql to delete a record
$sql = "Delete from tbl_drupal_interview_questions where tbl_aks_id = '$get_id'";

// use exec() because no results are returned
$conn->exec($sql);
header('location:index.php');
?>