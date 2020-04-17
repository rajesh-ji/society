<?php include('include/config.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Material Pro Admin Template - The Most Complete & Trusted Bootstrap 4 Admin Template</title>
    
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="../assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="../assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="../assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <link href="../assets/plugins/css-chart/css-chart.css" rel="stylesheet">
    
    <link href="../assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    
    <link href="css/style.css" rel="stylesheet">
    
    <link href="css/colors/blue.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar card-no-border">


    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <div id="main-wrapper">
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">

                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">
                        <b>
                            <img src="../assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                
                            <img src="../assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                        </b>
                <span>
                
                         <img src="../assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                
                         <img src="../assets/images/logo-light-text.png" class="light-logo" alt="homepage" /></span> </a>
                </div>
                
                <div class="navbar-collapse">
                    <ul class="navbar-nav mr-auto mt-md-0">
                       
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                    </ul>                         
                    <ul class="navbar-nav my-lg-0">
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../assets/images/users/1.jpg" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right scale-up">
                                <ul class="dropdown-user">
                                    <li>
                                        <div class="dw-user-box">
                                            <div class="u-img"><img src="../assets/images/users/1.jpg" alt="user"></div>
                                            <div class="u-text">
                                                <h4>Steave Jobs</h4>
                                                <p class="text-muted">varun@gmail.com</p><a href="profile.html" class="btn btn-rounded btn-danger btn-sm">View Profile</a></div>
                                        </div>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
                                    <!-- <li><a href="#"><i class="ti-wallet"></i> My Balance</a></li> -->
                                    <li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                        
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="left-sidebar">
            
            <div class="scroll-sidebar">
            
                <div class="user-profile" style="background: url(../assets/images/background/user-info.jpg) no-repeat;">
            
                    <div class="profile-img"> <img src="../assets/images/users/profile.png" alt="user" /> </div>
            
                    <div class="profile-text"> <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Markarn Doe</a>
                        <div class="dropdown-menu animated flipInY"> <a href="#" class="dropdown-item"><i class="ti-user"></i> My Profile</a> <a href="#" class="dropdown-item"><i class="ti-wallet"></i> My Balance</a>  
                            <a href="login.html" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a> </div>
                    </div>
                </div>
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        
                        <li> <a href="index.php" class=" waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard </span></a>
                        </li>
                        <li> <a href="#" class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-laptop-windows"></i><span class="hide-menu">Area</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="create_area.php">Create Area</a></li>
                                <li><a href="list-area.php">List Area</a></li>
                                <li><a href="create-sub-area.php">Create Sub Area</a></li>
                                <li><a href="list-sub-area.php">List Sub Area</a></li>                                
                            </ul>
                        </li>
                        <li> <a href="#" class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-bullseye"></i><span class="hide-menu">Users</span></a>
                             <ul aria-expanded="false" class="collapse">
                                <li><a href="create_user.php">Create Users</a></li>
                                <li><a href="list-user.php">List Users</a></li>      
                            </ul>
                        </li>
                        <li> <a href="#" class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-email"></i><span class="hide-menu">Advertisement</span></a>
                             <ul aria-expanded="false" class="collapse">
                                <li><a href="#">Create  Advertisement Pages</a></li>
                                <li><a href="#">List Advertisement pages</a></li>
                                <li><a href="#">Creat Advertisement</a></li>
                                <li><a href="#">List All Advertisements</a></li>                                
                            </ul>
                        </li>
                        <li> <a href="#" class="has-arrow waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Pages</span></a> 
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">Create Pages</a></li>
                                <li><a href="#">List Pages</a></li>      
                            </ul>                       
                        </li>
                        <li> <a href="#" class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-file"></i><span class="hide-menu">Events</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">Creat Events Type</a></li>
                                <li><a href="#">List All Events Type</a></li>
                                <li><a href="#">Creat Events</a></li>
                                <li><a href="#">List All Events</a></li>                                
                            </ul>
                        </li>
                        <li> <a href="#" class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-table"></i><span class="hide-menu">Blood Bank</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">Add Blood Donwer</a></li>
                                <li><a href="#">List all blood donwer</a></li>      
                            </ul>  
                        </li>
                        <li> <a href="#" class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-widgets"></i><span class="hide-menu">Contacts</span></a>
                             <ul aria-expanded="false" class="collapse">
                                <li><a href="#">Creat Contacts</a></li>
                                <li><a href="#">List Contacts</a></li>      
                            </ul>  
                            </li>
                        <li> <a href="#" class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-widgets"></i><span class="hide-menu">Janganna</span></a>
                             <ul aria-expanded="false" class="collapse">
                                <li><a href="#">Add Janganana</a></li>
                                <li><a href="#">List All Janganana</a></li>      
                            </ul>  
                            </li>
                         <li> <a href="#" class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-widgets"></i><span class="hide-menu">Matrimonial</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">Add Matrimonial</a></li>
                                <li><a href="#">List Matrimonial</a></li>      
                            </ul>  
                            </li>
                         <li> <a href="#" class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-widgets"></i><span class="hide-menu">Contacts</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">Creat Blogs</a></li>
                                <li><a href="#">List Blogs</a></li>      
                            </ul>  
                            </li>
                    </ul>
                </nav>
                
            </div>
            
            
            <div class="sidebar-footer">
            <a href="" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>
            <a href="" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
            <a href="" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a> </div>
            
        </aside>
       