<!--Navbar -->
            <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
            <i class="fa fa-picture-o fa-spin" aria-hidden="true"></i> <h3>Images</h3>
            </div>

            <ul class="list-unstyled components">
                <li>
                <a href="index.php"><i class="fa fa-home"></i>Home</a>
                </li>
                <?php include ('modal_add.php'); ?>
                <li>
                <a href="all_images.php">
                <i class="fa fa-picture-o" aria-hidden="true"></i>All Images</a>
                </li>
            </ul>
            <ul class="list-unstyled CTAs">
                <li>
                <a href="logout.php" data-target="#modal_confirm" data-toggle="modal" class="download"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
                </li>
               
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <i class="fa fa-align-left"></i>
                    <span>Toggle Sidebar</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ml-auto">
                     <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" id="navbarDropdown" aria-expanded="false" aria-haspopup="true" href="#" >
                    <i class="fa fa-user" aria-hidden="true"></i> </a>
                    <div class="dropdown-menu dropdown-menu-right animate slideIn" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#"><?php echo '<span> '.$_SESSION["username"].'</span>'; ?></a>
                    <a href="#" class="dropdown-item" data-target="#modal_confirm" data-toggle="modal"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
                        </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

        
            <!--/.Navbar -->
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
            <!--/.Navbar -->