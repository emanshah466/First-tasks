<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Synergy School System Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@600&family=Lobster+Two:wght@700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

 <!-- Navbar Start -->
 <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
    <a href="index.php" class="navbar-brand">
        <h1 class="m-0 text-primary"><i class="fa fa-book-reader me-3"></i>Synergy School System</h1>
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto">
            <a href="index.php" class="nav-item nav-link">Home</a>
            <a href="about.php" class="nav-item nav-link">About Us</a>
            <a href="classes.php" class="nav-item nav-link">Classes</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                    <a href="facility.php" class="dropdown-item">School Facilities</a>
                    <a href="team.php" class="dropdown-item">Popular Teachers</a>
                    <a href="call-to-action.php" class="dropdown-item">Become A Teachers</a>
                    <a href="appointment.php" class="dropdown-item">Make Appointment</a>
                    <a href="testimonial.php" class="dropdown-item">Testimonial</a>
                    <a href="404.html" class="dropdown-item">404 Error</a>
                </div>
            </div>
            <a href="contact.html" class="nav-item nav-link">Contact Us</a>
        </div>
        <a href="admission-form.html" class="btn btn-primary rounded-pill px-3  d-lg-block">Join Us<i class="fa fa-arrow-right ms-3"></i></a>
    </div>
</nav>
<!-- Navbar End -->
<!-- Appointment Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="bg-light rounded">
            <div class="row g-0">
                <div class="col-lg-12 wow fadeIn mx-auto data-wow-delay=0.1s">
                    <div class="h-100 d-flex flex-column justify-content-center p-5">
                        <h1 class="mb-4">Admission Form</h1>
                        
                        
                        
                        
                        <form action="connect.php" method="post">
                            <div class="row g-3">
                                <div class="col-sm-12 text-center text"><h2>Student's details</h2></div>
                                 <div class="col-sm-8 ">
                            
                                        <label for="std_img">Child Image:</label>
                                        <input type="file"  class="form-control" name="std_img" id="stdimg">
                                        <p>less then 5 Mb</p>
                                    
                                </div> 
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0"  name="cname" placeholder="Child Name">
                                        <label for="cname">Child Name</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="date" class="form-control border-0"  name="cage" placeholder="Child Age">
                                        <label for="cage">Date of birth</label>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0"  name="religion" placeholder="Religion">
                                        <label for="religion">Religion</label>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0"  name="nationality" placeholder="Nationality">
                                        <label for="nationality">Nationality</label>
                                    </div>
                                </div>

                                

                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0" name="gender" placeholder="Gender">
                                        <label for="gender">Gender</label>
                                    </div>
                                </div>

                               

                                <div class="col-sm-12 text-center text"><h2>Acadamic details</h2></div>

                                <div class="col-sm-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0" name="lschool" placeholder="Last School">
                                        <label>Last school attended</label>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0" name="clpassed"  placeholder="Class passed">
                                        <label>Class passed</label>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="date" class="form-control border-0" name="predate"  placeholder="Date of class passed">
                                        <label>Date of class passed</label>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0" name="clsought" placeholder="Class sought">
                                        <label>Class sought</label>
                                    </div>
                                </div>

                               <div class="col-sm-12 text-center text"><h2>Parent's details</h2></div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                   <input type="text" class="form-control border-0" name="fname" placeholder="Father Name">
                                   <label for="fname">Father Name</label>
                               </div>
                           </div>
                           <div class="col-sm-6">
                               <div class="form-floating">
                                   <input type="text" class="form-control border-0" name="mname" placeholder="Mother Name">
                                   <label for="mname">Mother Name</label>
                                </div>
                           </div>
                               
                            
                               <div class="col-sm-6">
                                   <div class="form-floating">
                                       <input type="text" class="form-control border-0" name="address" placeholder="Address">
                                       <label for="address">Address</label>
                                   </div>
                               </div>
       
                               <div class="col-sm-6">
                                   <div class="form-floating">
                                       <input type="phone" class="form-control border-0" name="phone" placeholder="Phone Number">
                                       <label for="phone">Phone Number</label>
                                   </div>
                               </div>
                               
                               
                                   
                                       
                               
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded" src="img/appointment.jpg" style="object-fit: cover;">
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</div>
<!-- Appointment End -->


 <!-- JavaScript Libraries -->
 <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
 <script src="lib/wow/wow.min.js"></script>
 <script src="lib/easing/easing.min.js"></script>
 <script src="lib/waypoints/waypoints.min.js"></script>
 <script src="lib/owlcarousel/owl.carousel.min.js"></script>

 <!-- Template Javascript -->
 <script src="js/main.js"></script>
</body>

</html>