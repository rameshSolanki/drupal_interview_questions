 <?php include('header.php'); ?>


    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-lg fa-edit"></i> Update</h1>
          <p>...</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><a href="index.php"><i class="fa fa-home fa-lg"></i></a></li>
          <li class="breadcrumb-item"><a href="#">Update Data</a></li>
        </ul>
      </div>

    <!--update New image-->
  <div class="col-md-12">

  <!-- for testing purposes -->
   <?php
require_once("db.php");

if(!empty($_POST["save"])) {
$question = $_POST['question'];
$answer = $_POST['answer'];
$type_of_aks = $_POST['type_of_aks'];

  $pdo_statement = $conn->prepare("UPDATE tbl_drupal_interview_questions SET question='$question', answer='$answer', type_of_aks='$type_of_aks'
    WHERE tbl_aks_id=". $_GET["tbl_aks_id"]);

  $result = $pdo_statement->execute();
  if ($result){

    header('location:index.php');
  }
}
$pdo_statement = $conn->prepare("SELECT * FROM tbl_drupal_interview_questions WHERE tbl_aks_id=" . $_GET["tbl_aks_id"]);
$pdo_statement->execute();
$result = $pdo_statement->fetchAll();
?>
<!-- for testing purposes-->
 
          <div class="tile">   
            <div class="tile-body">

              <form class="form-horizontal" method="post" action=""  enctype="">
              
                <div class="form-group col-md-12">
                  
                      <label class="control-label">Question:</label>
                  <input type="text" name="question" class="form-control" value="<?php echo $result[0]['question']; ?>">
               
                </div>

                <div class="form-group col-md-12">
                 
                  <label class="control-label">Answer:</label>
                   <textarea name="answer" class="form-control" id="answer" required="true"><?php echo $result[0]['answer']; ?></textarea>
         
                </div>
         
                <div class="form-group col-md-12">
                
                      <label class="control-label">Type of Drupal Version:</label>
                    <select name="type_of_aks" id="type_of_aks" class="form-control">
                    <option value="<?php echo $result[0]['type_of_aks']; ?>"><?php echo $result[0]['type_of_aks']; ?></option>
                     <option>Drupal 8</option>
                    <option>Drupal 7</option>
                      <option>Drupal</option>
                    </select>
          
                </div>
                
            </div>
            <div class="tile-footer">
              <div class="row">
                <div class="col-md-8 col-md-offset-3">
                  <input class="btn btn-primary" value="Update" type="submit" name="save">&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="index.php"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                </div>
              </div>
            </div>
             </form>
          </div>
        </div>

<!--update New image-->
    </main>
    <?php include('footer.php'); ?>