
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ManPower</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="Themes/img/favicon.png" rel="icon">
  <link href="Themes/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- inside CSS Files -->
  <link href="Themes/inside/aos/aos.css" rel="stylesheet">
  <link href="Themes/inside/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="Themes/inside/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="Themes/inside/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="Themes/inside/swiper/swiper-bundle.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Template Main CSS File -->
  <link href="Themes/css/style.css" rel="stylesheet">
 
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <!-- <h1><a href="index.php">SoftLand</a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="index.php"><img src="Themes/img/logo.png" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="<?php if($page == 'Home'){echo 'active';}?>" href="index.php">Home</a></li> 
          <li class="dropdown"><a class="<?php if($page == 'About'){echo 'active';}?>" href="about.php">About
          <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a  class="<?php if($page1 == 'Mission'){echo 'active';}?>" href="Our-Mission.php" style="display: unset;">
                  <i class="bi bi-bullseye"></i> Our Mission</a></li>
                  
              <li><a  class="<?php if($page1 == 'Vision'){echo 'active';}?>" href="Our-Vision.php" style="display: unset;">
                  <i class="bi bi-eye"></i> Our Vision</a></li>
                  
              <li><a  class="<?php if($page1 == 'Standards'){echo 'active';}?>" href="High-Quality-Standards.php"  style="display: unset;"><i class="bi bi-check2-square">
                  
              </i>High Quality Standards</a></li>
            </ul>
          </li>
          <li><a class="<?php if($page == 'Service'){echo 'active';}?>" href="service.php">Service</a></li>
          <li><a class="<?php if($page == 'Clients'){echo 'active';}?>" href="clients.php">Clients</a></li>
          <li><a class="<?php if($page == 'Contact'){echo 'active';}?>" href="contact.php">Contact Us</a></li>
         </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
