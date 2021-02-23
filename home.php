<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
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
        <a class="navbar-brand navbar-logo" href="home.php">DoctorSDetails</a>
        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              Users
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="user_registration.php">Users/Doctor Registration Page</a>
                <a class="dropdown-item" href="user_login.php">Users/Doctor Login Page</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="product_visit.php">Visitor</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
            <!----<li class="nav-item">
              <a class="nav-link" href="user_logout.php">Logout</a>
            </li>---->
          </ul>
        </div>
      </nav>

      <div class="row title-subsection">
        <div class="col-lg-6">
          <h1 class="big-heading">Health is Wealth</h1>
          <p class="small-heading">A Healthy body holds a healthy soul & mind</p>
          <a href="customer_order.php" type="button" class="btn  btn-lg appointment-btn"><i class="fas fa-calendar-check"></i> Book Appointment</a>
        </div>
        <div class="col-lg-6">
          <img class="title-img" src="images/doctor.png" alt="doctor-image"/>
        </div>
      </div>
    </div>
  </section>

  <section class="middle-container about-section" id="about">
    <div class="container-fluid">
      <h2  class="About-title">About</h2>
      <div class="row">
        <div class="col-lg-4">
          <img class="medicine-img" src="images/Exercise-is-medicine.jpg" alt="medicine-img"/>
        </div>
        <div class="col-lg-8 medicine-content">
          <h2>page content</h2>
          <p>
            Epidemiologist have now identified a number of illness that are rampant and of epidemic proportions throughout the developed world: diabetes, heart disease, asthma, allergies, obesity, cancer and depression. ‘Diseases of civiliation’; therefore diseases of lifestyle. The true underlying cause is renegade inflammation. This is why we focus on prevention, not cure. The good news is that these lifestyle diseases can be prevented and managed. We help you manage your health risks.
          </p>
          <p>
            Depression is a lifestyle disease in Western cultures and interesting enough not as prevalent in hunter-gatherer groups (e.g. aboriginal groups). The hunter-gatherer groups have extremely tough lives (high infant deaths, parasitic infections, violent deaths). So why is it that depression is so low amoung them? What is protecting them?…
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="bottom-container bottom-section" id="contact">
    <div class="container-fluid">
      <h2  class="bottom-title">Contact</h2>
      <div class=" row">
        <div class="col-lg-4 contact-box">
          <a href="user_registration.php"><i class="fas fa-user-md fa-3x font-icon"></i></a>
          <h3 class="">Users</h3>
          <p>Dr. Registration Page & Dr. Login Page</p>
        </div>
        <div class=" col-lg-4 contact-box">
          <a href="admin_login.php"><i class="fas fa-user-lock fa-3x font-icon"></i></a>
          <h3>Admin</h3>
          <p>Admin Login Page who handle all thing</p>
        </div>
        <div class="col-lg-4 contact-box">
          <a href="customer_order.php"><i class="fas fa-map-marked-alt fa-3x font-icon"></i></a>
          <h3>contact</h3>
          <p>Contact Page which can connect to Dr.</p>
        </div>
      </div>
    </div>
  </section>

  <footer class="footer-container footer-section" id="footer">
    <div class="container-fluid">
      <a href="#"><i class="social-icon  fb-icon fab fa-facebook-f "></i></a>
      <a href="https://twitter.com/"><i class="social-icon fab fa-twitter"></i></a>
      <a href="https://www.linkedin.com/"><i class="social-icon ld-icon fab fa-linkedin-in"></i></a>
      <a href="mailto:rnp9592@gmail.com"><i class="social-icon fas fa-envelope"></i></a>
      <p class="Copyright">© Copyright 2020 DoctorsDetails</p>
    </div>
  </footer>
  <script src="js/index.js"></script>
</body>
</html>
