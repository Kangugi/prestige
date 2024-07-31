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
                <h3 class="text-white display-3 mb-4">Legal Notice</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-white">Legal Notice</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->

        <!-- Privacy policy Start -->
         <div class ="privacy-policy" style ="padding-left: 30px;" width = "500px">
       
<h1>Legal Noticw</h1>
<h3> 1. Introduction </h3>
<p>Welcome to Prestige Digital Hub. This legal notice governs your use of our website. By accessing and using this website, you accept and agree to be bound by the terms and conditions set forth below. If you do not agree with any part of these terms, you must not use our website.</p>
       
<h3>2. Company Information</h3>

<ul>
    <li>Company Name: Prestige Digital Hub</li>
    <li> Address: [Nairobi Kenya]</li>
    <li>Email: [muthama3897@gmail.com]</li>
    <li>Phone: [+254 748 750 940]</li>
    <li>VAT/Tax ID: [***********]</li>
    <li>Registration Number: [************]</li>
</ul>


<h3>3. Intellectual Property</h3>
<p>All content on this website, including but not limited to text, graphics, logos, images, and software, is the property of Prestige Digital Hub or its content suppliers and is protected by international copyright, trademark, patent, trade secret, and other intellectual property or proprietary rights laws. Unauthorized use of any content on this website is strictly prohibited.</p>


<h3>4. Use of Website</h3>
<p>We do not sell, trade, or otherwise transfer your personal information to outside parties except as described below:</p>
<ul>
<li>Service Providers: We may share your information with third-party service providers who assist us in operating our website, conducting our business, or servicing you, as long as they agree to keep this information confidential.</li>
<li>Legal Compliance: We may disclose your information when we believe it is necessary to comply with the law, enforce our site policies, or protect our or others' rights, property, or safety.</li>
<li>Business Transfers: In the event of a merger, acquisition, or sale of all or a portion of our assets, your information may be transferred to the new owner.</li>
</ul>

<h3> 5. Data Security </h3>
<p>We implement a variety of security measures to maintain the safety of your personal information. This includes using encryption, firewalls, and secure server hosting. However, please note that no method of transmission over the internet or method of electronic storage is 100% secure.</p>

<h3> 6. Your Rights </h3>
<p>You have the following rights regarding your personal data:</p>
<ul>
<li>Access: You can request access to your personal data that we hold.</li>
<li>Correction: You can request that we correct any inaccurate or incomplete data.</li>
<li>Deletion: You can request that we delete your personal data, subject to certain exceptions.</li>
<li>Objection: You can object to the processing of your personal data.</li>
<li>Restriction: You can request that we restrict the processing of your personal data.</li>
<li>Portability: You can request a copy of your personal data in a structured, commonly used, and machine-readable format.</li>
<li>To exercise any of these rights, please contact us at [muthama3897@gmail.com].</li>

<h3> 7. Cookies </h3>
<p>We use cookies to enhance your experience on our website. Cookies are small files that a site or its service provider transfers to your computer's hard drive through your web browser that enables the site's or service provider's systems to recognize your browser and capture and remember certain information.</p>
<p>You can choose to disable cookies through your browser settings. However, disabling cookies may affect the functionality of our site.</p>

<h3> 8. Third-Party Links </h3>
<p>Our website may contain links to third-party sites. These third-party sites have separate and independent privacy policies. We have no responsibility or liability for the content and activities of these linked sites.</p>


<h3> 9. Changes to This Privacy Policy</h3>
<p>We may update this privacy policy from time to time. We will notify you of any changes by posting the new privacy policy on this page. You are advised to review this privacy policy periodically for any changes.</p>

<h3>10. Contact Us</h3>
<p>If you have any questions or concerns about this privacy policy, please contact us at:</p>
<ul>
<li>Email: [muthama3897@gmail.com]</li>
<li>Address: [Nairobi, Kenya]</li>
<li>Phone: [+254 748 950 940]</li>
</div>
        <!-- Privacy policy End -->
        
       <?php include "footer.php"?>
    </body>

</html>