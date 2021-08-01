<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="">
      <title>Drupal Questions and Answers</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini rtl">
<!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="index.php">Drupal Questions and Answers</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
       <!--  <li class="app-search">
          <input class="app-search__input" type="search" placeholder="Search">
          <button class="app-search__button"><i class="fa fa-search"></i></button>
        </li> -->
        <!--Notification Menu-->
        
        <!-- User Menu-->

         <?php  require_once('db.php');
         include('session.php'); ?>
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="#"><i class="fa fa-user fa-lg"></i> <?php echo '<span> '.$_SESSION["username"].'</span>'; ?></a></li>
            <li><a class="dropdown-item" data-target="#modal_confirm" data-toggle="modal" href="logout.php"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </header>


    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img width="40px" class="app-sidebar__user-avatar" src="images/default.png" alt="User Image">
        <div>
          <p class="app-sidebar__user-name"><?php echo '<span> '.$_SESSION["username"].'</span>'; ?></p>
          <p class="app-sidebar__user-designation">...</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item active" href="index.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
      
        <li><a class="app-menu__item" href="modal_add.php"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">Add New</span></a></li>
      </ul>
    </aside>


