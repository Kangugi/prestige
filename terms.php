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
                <h3 class="text-white display-3 mb-4">Terms and Conditions</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-white">Terms & Conditions</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->

        <!-- Privacy policy Start -->
         <div class ="privacy-policy" style ="padding-left: 30px;" width = "500px">
       
            <h1>Terms and Conditions</h1>
           <h3>1. Introduction</h3>
           <p>Welcome to Prestige Digital Hub. These terms and conditions outline the rules and regulations for the use of our website. By accessing this website, you agree to comply with and be bound by the following terms and conditions. If you disagree with any part of these terms, please do not use our website.</p>
            
           <h3>2. Definitions</h3>
        <p>"Website" refers to the Prestige Digital Hub website and all associated content and services.</p>
        <p>"We," "us," and "our" refer to Prestige Digital Hub.</p>
        <p>"User," "you," and "your" refer to any person or entity using this website.</p>
        <p>"Content" refers to all text, images, multimedia, software, and other materials available on the website.</p>
            <h3>3. Use of the Website</h3>
            <h3>a. Eligibility</h3>
        <p>You must be at least 18 years old to use this website. By using the website, you represent and warrant that you are at least 18 years old.</p>
            
            <h3>b. User Account</h3>
        <p>To access certain features of the website, you may be required to create an account. You are responsible for maintaining the confidentiality of your account information, including your password, and for all activities that occur under your account.</p>
            
            <h3>c. Prohibited Activities</h3>
        </p>You agree not to use the website for any unlawful purpose or any purpose prohibited by these terms, including but not limited to:</p>
            <ul>
            <li>Engaging in any fraudulent activity or any activity that infringes on the rights of others.</li>
            <li>Transmitting any viruses, malware, or other harmful code.</li>
            <li>Collecting or harvesting any personal information of other users without their consent.</li>
            <li>Using automated systems to access the website in a manner that sends more request messages to the servers than a human can reasonably produce.</li>
            </ul>
            <h3>4. Intellectual Property Rights</h3>
            <p>Unless otherwise stated, Prestige Digital Hub and/or its licensors own the intellectual property rights for all material on this website. All intellectual property rights are reserved. You may access this from Prestige Digital Hub for your own personal use, subject to restrictions set in these terms and conditions.</p>
            
            <h4>You must not:</h4>
            <ul>
            <li>Republish material from Prestige Digital Hub.</li>
            <li>Sell, rent, or sub-license material from Prestige Digital Hub.</li>
            <li>Reproduce, duplicate, or copy material from Prestige Digital Hub.</li>
            <li>Redistribute content from Prestige Digital Hub (unless the content is specifically made for redistribution).</li>
            </ul>
            <h3>5. Products and Services</h3>
            <h5>a. Descriptions and Pricing</h5>
            <p>We strive to ensure that the products and services we provide are described accurately and priced correctly. However, we do not warrant that the descriptions, pricing, or other content on our website are error-free. Prices and availability are subject to change without notice.</p>
            
            <h5>b. Orders</h5>
            <p>When you place an order on our website, you are making an offer to purchase the selected products or services. We reserve the right to accept or reject your order for any reason, including but not limited to product availability, errors in pricing or product descriptions, or errors in your payment information.</p>
            
            <h5>c. Payment</h5>
            <p>All payments must be made through the payment methods provided on the website. You agree to pay all charges incurred by you or any users of your account and credit card (or other applicable payment methods) at the prices in effect when such charges are incurred.</p>
            
            <h3>6. Limitation of Liability</h3>
            <p>To the maximum extent permitted by applicable law, Prestige Digital Hub shall not be liable for any indirect, incidental, special, consequential, or punitive damages, including without limitation, loss of profits, data, use, goodwill, or other intangible losses, resulting from:</p>
            
            <p>Your access to or use of or inability to access or use the website;
                <ul>
            <li>Any unauthorized access to or use of our servers and/or any personal information stored therein;</li>
            <li>Any interruption or cessation of transmission to or from the website;</li>
            <li>Any bugs, viruses, trojan horses, or the like that may be transmitted to or through our website by any third party.</li>
                </ul>
            
            <h3>7. Indemnification</h3>
            <p>You agree to indemnify, defend, and hold harmless Prestige Digital Hub, its affiliates, officers, directors, employees, and agents from and against any and all claims, liabilities, damages, losses, costs, expenses, or fees (including reasonable attorneys’ fees) that such parties may incur as a result of or arising from your use of the website or violation of these terms.</p>
            
            <h3>8. Third-Party Links</h3>
            <p>Our website may contain links to third-party websites that are not owned or controlled by Prestige Digital Hub. We have no control over, and assume no responsibility for, the content, privacy policies, or practices of any third-party websites.</p>
            <p> You acknowledge and agree that Prestige Digital Hub shall not be responsible or liable, directly or indirectly, for any damage or loss caused by or in connection with the use of or reliance on any such content, goods, or services available on or through any such websites.</p>
            
            <h3>9. Governing Law and Jurisdiction</h3>
            <p>These terms and conditions shall be governed by and construed in accordance with the laws of Kenya, without regard to its conflict of law provisions.</p>
            <p>Any disputes arising out of or relating to these terms and conditions shall be subject to the exclusive jurisdiction of the courts located in Kenya.</p>
            
            <h3>10. Changes to Terms and Conditions</h3>
            <p>Prestige Digital Hub reserves the right to update or modify these terms and conditions at any time without prior notice.</p>
            <p> Your continued use of the website following the posting of changes to these terms will mean you accept those changes.</p>
            
            <h3>11. Contact Information</h3>
            <p>If you have any questions about these terms and conditions, please contact us at:</p>
            <ul>
            <li>Email: [muthama3896@gmail.com]</li>
            <li>Address: [Nairobi]</li>
            <li>Phone: [+254 748 950 940]</li>
            </ul>
</div>
        <!-- Privacy policy End -->
        
       <?php include footer.php?>
    </body>

</html>