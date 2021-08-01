<?php include('header.php'); ?>
<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
      <p>...</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
    </ul>
  </div>
</div>
<div class="row email-more-content">
  <?php
    require_once('db.php');
    $get_id = $_REQUEST['tbl_aks_id'];
    $result = $conn->prepare("SELECT creation_date, tbl_aks_id, question, answer, type_of_aks FROM tbl_drupal_interview_questions WHERE tbl_aks_id=$get_id");
    $result->execute();
    for ($i=0; $row = $result->fetch(); $i++) {
        $id=$row['tbl_aks_id'];
        $date = date('D, d-m-Y  h:i:s A', strtotime($row ['creation_date']));
        ?>
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h4> <strong class="card-title"><?php echo $row ['question']; ?>
        </strong> </h4>
      </div>
      <div class="card-body">
        
        <p class=""><span class="badge badge-success mt-1 mr-3 p-2"><?php echo $date; ?></span></p>
        <p class="card-text"><medium><span class="badge badge-info mt-1 mr-3 p-1">Answer:  </span></medium><?php echo $row ['answer']; ?></p>
        <p> Tags: <medium><span class="badge badge-success mt-1"><?php echo $row ['type_of_aks']; ?></span></medium></p>
      </div>
      
      
    </div>
  </div>
    <?php } ?>
</div>
</main>
<?php include('footer.php'); ?>