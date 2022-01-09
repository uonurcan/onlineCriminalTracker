<?php
 if(!isset($_SESSION['userlogin'])){
    header('Location:../');}
?>
<body id="page-top">
    <div id="wrapper">
<nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="background: var(--bs-gray-200);">
            <div class="container-fluid d-flex flex-column p-0"><img class="img-fluid pulse animated infinite" src="assets/img/logo.png" width="50" height="50" style="padding-top: 10px;"><a class="navbar-brand logo" href="#" style="color: #8a25b0;margin-right: 0px;">BugSens</a>
                <hr class="sidebar-divider my-0" style="color: #8a24b1;border-color: var(--bs-body-bg);background: var(--bs-body-bg);">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                  
                        <li class="nav-item">
                        <a class="nav-link <?php if($title == 'Dashboard'){echo"active";}?>" href="../admin.php">
                        <i class="fas fa-tachometer-alt" style="color: var(--bs-dark);">
                        </i><span style="color: #3a3b45;">Dashboard</span></a></li>
                
                        <li class="nav-item">
                        <a class="nav-link <?php if($title == 'Profile'){echo"active";}?> " href="../adminProfile.php">
                        <i class="fas fa-user" style="color: #3a3b45;"></i>
                        <span style="color: #3a3b45;">Profile</span></a></li>
                   
                        <li class="nav-item">
                        <a class="nav-link <?php if($title == 'Criminal People'){echo"active";}?>" href="../adminCPlist.php">
                        <i class="fas fa-table" style="color: #3a3b45;"></i>
                        <span style="color: #3a3b45;">Criminal People</span></a></li>
                      
                        <li class="nav-item">
                        <a class="nav-link <?php if($title == 'Missing People'){echo"active";}?>" href="../adminMPlist.php">
                        <i class="fas fa-table" style="color: #3a3b45;"></i>
                        <span style="color: #3a3b45;">Missing People&nbsp;</span></a></li>
                       
                       

                </ul>
                <div class="text-center d-none d-md-inline">
                    <button class="btn rounded-circle border-0" id="sidebarToggle" type="button" style="border-color: var(--bs-dark);background: rgb(58,59,69);"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
<?php 
include'topnav.php';
?>
