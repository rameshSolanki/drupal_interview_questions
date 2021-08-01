<?php
require_once('db.php');
if (isset($_POST['Submit'])) {
    $question = $_POST['question'];
    $answer = $_POST['answer'];
    $type_of_aks = $_POST['type_of_aks'];
    $creation_date = $_POST['creation_date'];
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO tbl_drupal_interview_questions (question, answer, type_of_aks, creation_date)
VALUES ('$question', '$answer', '$type_of_aks', now())";
    $conn->exec($sql);
    header("location:index.php");
}
