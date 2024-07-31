<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Prestige Digital Hub</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Topbar Start -->
        <div class="container-fluid bg-primary px-5 d-none d-lg-block">
            <div class="row gx-0">
                <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center" style="height: 45px;">
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i class="fab fa-youtube fw-normal"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 text-center text-lg-end">
                    <div class="d-inline-flex align-items-center" style="height: 45px;">
                        <a href="#"><small class="me-3 text-light"><i class="fa fa-user me-2"></i>Register</small></a>
                        <a href="#"><small class="me-3 text-light"><i class="fa fa-sign-in-alt me-2"></i>Login</small></a>
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle text-light" data-bs-toggle="dropdown"><small><i class="fa fa-home me-2"></i> My Dashboard</small></a>
                            <div class="dropdown-menu rounded">
                                <a href="#" class="dropdown-item"><i class="fas fa-user-alt me-2"></i> My Profile</a>
                                <a href="#" class="dropdown-item"><i class="fas fa-comment-alt me-2"></i> Inbox</a>
                                <a href="#" class="dropdown-item"><i class="fas fa-bell me-2"></i> Notifications</a>
                                <a href="#" class="dropdown-item"><i class="fas fa-cog me-2"></i> Account Settings</a>
                                <a href="#" class="dropdown-item"><i class="fas fa-power-off me-2"></i> Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->

        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="m-0"><img src="img/logo.png" alt="Logo"></i>Prestige Digital Hub</h1>
                    
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="index.php" class="nav-item nav-link active">Home</a>
                        <a href="about.php" class="nav-item nav-link">About</a>
                        <a href="services.php" class="nav-item nav-link">Services</a>
                        <a href="packages.php" class="nav-item nav-link">Packages</a>
                        <a href="blog.php" class="nav-item nav-link">Blog</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="destination.php" class="dropdown-item">Our products</a>
                                <a href="tour.php" class="dropdown-item">Our services</a>
                               <!--- <a href="booking.php" class="dropdown-item">Book a Session</a> -->
                                <a href="gallery.php" class="dropdown-item">Our Gallery</a>
                                <a href="guides.php" class="dropdown-item">Travel Guides</a>
                                <a href="testimonial.php" class="dropdown-item">Testimonial</a>
                                <a href="404.php" class="dropdown-item">404 Page</a>
                            </div>
                        </div>
                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                    </div>
                    <a href="" class="btn btn-primary rounded-pill py-2 px-4 ms-lg-4">Book Now</a>
                </div>
            </nav>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4">Cookie Policy</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-white">Cookie Policy</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->

        <!-- Privacy policy Start -->
         <div class ="privacy-policy" style ="padding-left: 30px;" width = "500px">
       
         <h2>Cookie Policy</h2>
<h4>1. Introduction</h4>
<p>At Prestige Digital Hub, we are committed to protecting your privacy and ensuring that your experience on our website is secure and informative. This Cookie Policy explains how we use cookies and similar technologies to enhance your browsing experience and how you can manage your cookie preferences.</p>

<h4>2. What Are Cookies?</h4>
<p>Cookies are small text files placed on your device (computer, tablet, smartphone) by websites that you visit. They are widely used to make websites work more efficiently, as well as to provide information to the site owners. </p>
<p>Cookies can be "session cookies," which are temporary and deleted when you close your browser, or "persistent cookies," which remain on your device until they expire or are deleted.</p>

<h4>3. How We Use Cookies</h4>
<p>We use cookies for various purposes, including:</p>

<ul>
<li> <h6>Essential Cookies:</h6> </li>
    <p>These cookies are necessary for the website to function correctly. They enable basic features like page navigation and access to secure areas of the website. </p>
    <p>The website cannot function properly without these cookies.</p>

<li><h6>Performance and Analytics Cookies:</h6> </li>
    <p>These cookies collect information about how visitors use our website, such as which pages are most frequently visited or if users encounter any error messages.</p> 
    <p>This information helps us improve the performance and design of our website. All information these cookies collect is aggregated and therefore anonymous.</p>

<li><h6>Functionality Cookies:</h6> </li>
    <p>These cookies allow our website to remember choices you make (such as your username, language, or region) and provide enhanced, more personalized features.</p> 
    <p>They can also be used to remember changes you have made to text size, fonts, and other customizable parts of web pages.</p>

<li><h6>Advertising and Targeting Cookies:<h6> </li>
    <p>These cookies are used to deliver advertisements that are relevant to you and your interests.</P> 
    <p>They also limit the number of times you see an advertisement and help measure the effectiveness of advertising campaigns. These cookies may be placed by third-party advertising networks with our permission.</p>
</ul>

<h4>4. Third-Party Cookies</h4>
<p>In addition to our own cookies, we may also use third-party cookies to report usage statistics, deliver advertisements, and provide social media features.</p>
<p>These third parties may collect information about your online activities over time and across different websites.</p>

<h4>5. Managing Cookies</h4>
<p>You have the right to decide whether to accept or reject cookies. You can manage your cookie preferences by adjusting your browser settings. Most web browsers automatically accept cookies, but you can usually modify your browser settings to decline cookies if you prefer.</p> 
<p>However, please note that if you choose to block or delete cookies, some features of our website may not function properly.</p>

<p>To learn more about cookies and how to manage them, you can visit www.aboutcookies.org or www.allaboutcookies.org.</p>

<h4>6. Changes to This Cookie Policy</h4>
<p>We may update this Cookie Policy from time to time to reflect changes in our practices or for other operational, legal, or regulatory reasons. Any changes will be posted on this page, and the date at the top of the policy will be updated.</p>

<h4>7. Contact Us</h4>
<p>If you have any questions about our use of cookies or other technologies, please contact us at:</p>
<ul>
<li>Email: [muthama3897@gmail.com]</li>
<li>Address: [Nairobi</li>
<li>Phone: [+254 748 950 940]</li>
</ul>
</div>
        <!-- Privacy policy End -->
        
        <!-- Footer Start -->
       <?php include "footer.php"?>
    </body>

</html>