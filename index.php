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
<div class="row">
  <div class="col-md-6 col-lg-4">
    <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
      <div class="info">
        <?php
        require_once("db.php");
        $sql = $conn->prepare("SELECT * FROM tbl_drupal_interview_questions");
        $sql->execute();
        $count=$sql->rowCount();
        {
        echo "<h4>Total Questions</h4>";
        echo "<p><b>".$count."</b></p>";
        }
        ?>
        
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="tile">
      <div class="tile-body">
        <table class="table table-hover table-bordered" id="sampleTable">
          <thead>
            <tr>
              <!-- <th>Image</th> -->
              <th>Question</th>
              <th>Type of Drupal Version</th>
              <th>Creation Date</th>
              <th>Action</th>
              
            </tr>
          </thead>
          <tbody>
            <?php
           
            $result = $conn->prepare("SELECT * FROM tbl_drupal_interview_questions ORDER BY creation_date DESC");
            $result->execute();
            for ($i=0; $row = $result->fetch(); $i++) {
                $id=$row['tbl_aks_id'];
                $date = date('D, d-m-Y  h:i:s A', strtotime($row ['creation_date']));
                ?>
            <tr>
              <td><a href="single_question.php?tbl_aks_id=<?php echo $id; ?>"><?php echo $row ['question']; ?></a></td>
              
              <td> <?php echo $row ['type_of_aks']; ?></td>
                <td> <?php echo $date; ?></td>
              <td>
                <div class="btn-group ml-auto">
                  <a href="update_image.php?tbl_aks_id=<?php echo $id; ?>" class="btn btn-outline-secondary"><i class="fa fa-lg fa-edit"></i></a>
                  <a href="#delete<?php echo $id;?>"  data-toggle="modal"  class="btn btn-outline-danger" ><i class="fa fa-trash-o" aria-hidden="true"></i> </a></div>
                </td>
              </tr>
              <!-- Modal Delete Image-->
              <div id="delete<?php  echo $id;?>" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete!</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                      <div class="alert alert-danger">
                        <div class="col-xl-12 form-group">
                          <p>Are you Sure you want to Delete <i class="fa fa-question-circle" aria-hidden="true"></i></p>
                        </div>
                        
                        
                        <div class="col-xl-12 form-group">
                          <p>Question: <?php echo $row['question']; ?></p>
                          
                        </div>
                        

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i> No</button>
                        <a href="delete.php<?php echo '?tbl_aks_id='.$id; ?>" class="btn btn-outline-danger"><i class="fa fa-check" aria-hidden="true"></i> Yes</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Modal Delete Image-->
            <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!--/.Logout Modal -->
    
    <div class="modal fade" id="modal_confirm" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout!</h2>
          </div>
          <div class="modal-body">
            <center><p>Are you sure you want to Logout ?</p></center>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-danger" data-dismiss="modal">No</button>
            <a class="btn btn-outline-success" href="logout.php">Yes</a>
          </div>
        </div>
      </div>
    </div>
    <!--/.Logout Modal -->
  </main>
  <?php include('footer.php'); ?>
