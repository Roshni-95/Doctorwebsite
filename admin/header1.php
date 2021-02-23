<!DOCTYPEhtml>
<html>
<head>
    <title>Doctor Login Page</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/styles.css" />
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&family=Poppins:wght@400;600&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<section class="top-container" id="title">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg navbar-dark scrolling-navbar">
        <!-- Brand -->
        <a class="navbar-brand navbar-logo" href="#">DoctorSDetails</a>
        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="../home.php">Home</a>
            </li>
            <!---<li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>--->
            <li class="nav-item dropdown">
             <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              Users
             </a>
             <div class="dropdown-menu">
              <a class="dropdown-item" href="../user_registration.php">Users/Doctor Registration Page</a>
              <a class="dropdown-item" href="../user_login.php">Users/Doctor Login Page</a>
             </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../product_visit.php">Visitor</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../customer_order.php">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="admin_logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </nav>
