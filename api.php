<?php 
require_once('db.php');
$result = $conn->prepare("SELECT * FROM tbl_drupal_interview_questions ORDER BY tbl_aks_id ASC");
// $result = $conn->prepare("SELECT * FROM tbl_android_keyboard_shortcuts WHERE type_of_aks ='General'  ORDER BY tbl_aks_id ASC");
$result->execute();
$userData = array();

while($row=$result->fetch(PDO::FETCH_ASSOC)){
  
      $userData[] = $row;
 
}
echo json_encode($userData);

?>