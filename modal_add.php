<?php include('header.php'); ?>


    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-plus"></i> Add New</h1>
          <p>...</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><a href="index.php"><i class="fa fa-home fa-lg"></i></a></li>
          <li class="breadcrumb-item"><a href="#">Add New</a></li>
        </ul>
      </div>
  </div>

<!--Add New image-->

  <div class="col-md-12">
          <div class="tile">
           
            <div class="tile-body">
              <form class="form-horizontal" method="post" action="upload.php"  enctype="multipart/form-data">
                      
                 <div class="form-group col-sm-12">
                 
                     <label class="control-label">Question:</label>
                    <input type="text" name="question" class="form-control" id="question" required="true" placeholder="Enter text here">
                 
                </div>

                <div class="form-group col-sm-12">
                 
                    <label class="control-label">Answer:</label>
                    <textarea type="text" name="answer" class="form-control" id="answer" required="true" placeholder="Enter text here"></textarea>
                                   
                </div>
         
                <div class="form-group col-sm-12">
                 
                     <label class="control-label">Type of Drupal Version:</label>
                    <select name="type_of_aks" id="type_of_aks" class="form-control" required="true">
                    <option selected>Select Option</option>
                    <option>Drupal 8</option>
                    <option>Drupal 7</option>
                     <option>Drupal</option>
                    </select>
                 
                </div>
                
            </div>
            <div class="tile-footer">
              <div class="row">
                <div class="col-md-8 col-md-offset-3">
                  <button class="btn btn-primary" type="submit" name="Submit"><i class="fa fa-fw fa-lg fa-upload"></i>Add</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="index.php"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                </div>
              </div>
            </div>
             </form>
          </div>
        </div>

<!--Add New image-->
  </main>
    <?php include('footer.php'); ?>