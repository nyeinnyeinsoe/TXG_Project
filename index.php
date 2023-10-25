<?php
  if(session_status() == PHP_SESSION_NONE){
    session_start();
  }
  include './session/app.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <title>TechXagon</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>


  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center justify-content-center">

          <div class="col-4">
            <a href="index.html"><img src="./images/company/TechXagon PNG White.png" style="width: 100px;" alt=""></a>
          </div>

          <div class="col-8">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="#home-section" class="nav-link">HOME</a></li>
                <li><a href="#about-section" class="nav-link">ABOUT</a></li>
                <li><a href="#services-section" class="nav-link">SERVICES</a></li>
                <li><a href="#projects-section" class="nav-link">PRODUCTS</a></li>
                <li><a href="#blog-section" class="nav-link">BLOG</a></li>
                <!-- <li><a href="#contact-section" class="nav-link">Contact</a></li> -->
              </ul>
            </nav>


            <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a>

          </div>

        
        </div>
      </div>
      
    </header>


    <div class="site-blocks-cover overlay bg-light" style="
    background-size: cover;
    background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('images/company/What_is_Information_Technology\ \(1\).webp');
    position: relative;  " id="home-section">

      <div class="container">
        <div class="row justify-content-center">

          <div class="col-12 text-center align-self-center text-intro">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <p class="lead text-white" data-aos="fade-up" data-aos-delay="100">WE PROVIDE</p>
                <h1 class="text-white" data-aos="fade-up" data-aos-delay="">ALL-IN-ONE <br> IT SOLUTION</h1>
                <p data-aos="fade-up" data-aos-delay="200"><a href="#services-section" class="btn smoothscroll btn-info">Our Services</a></p>

              </div>
            </div>
          </div>
            
        </div>
      </div>

    </div>  

    

    <div class="site-section about-us-background" id="about-section">
      <div class="container">
        <div class="row ">
          <div class="col-12 mb-4 position-relative">
            <h2 class="section-title about-us-h1">About Us</h2>
          </div>
          <div class="col-lg-4 about-us-p">
            <p>We're a premier POS and IT device reseller as well as
              offering hardware and IT services.

              With a reputation for quality products and stellar service,
              we provide a wide range of top-brand devices. Our expert
              team ensures smooth operations, from upgrades to
              replacements, helping your business thrive.</p>
          </div>
          <div class="col-lg-4">
            <img src="images/about.jpg" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-4 about-us-p">
            <h4 class="about-us-p">VISSION</h4>
            <p>To deliver a
              comprehensive solution
              framework that
              maximizes our
              customers
              ' IT

              investments through
              seamless compatibility
              and interoperability
              across different vendor
              equipments</p>

            <h4 class="about-us-p">MISSION</h4>
            <p>To provide the utmost
              level of service to our
              network of Corporate

              Customers and End-
              Users to provide a wide

              range of products and
              gain the trust and
              confidence of our
              customers</p>
          </div>
          
          
        </div>
      </div>
    </div>


    <div class="site-section" id="services-section">
      <div class="container">
        <div class="row ">
          <div class="col-12 mb-5 position-relative">
            <h2 class="section-title text-center mb-5">Services</h2>
          </div>
          
          <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="">
            <div class="service d-flex h-100">
              <div class="svg-icon">
                <img src="images/company/flaticon/data-center (1).png" alt="Image" class="img-fluid">
              </div>
              <div class="service-about">
                <h3>Data Centre Network Services</h3>
                <p>One stop solution for DC and DR environment
                  (Firewall, Core Switch, Access Switch, App Server, Data Base
                  Server, Data Replication App etc...)</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="service d-flex h-100">
              <div class="svg-icon">
                <img src="images/flaticon/svg/001-travel.svg" alt="Image" class="img-fluid">
              </div>
              <div class="service-about">
                <h3>Server Deployment & Virtualization</h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="">
            <div class="service d-flex h-100">
              <div class="svg-icon">
                <img src="images/company/flaticon/firewall.png" alt="Image" class="img-fluid">
              </div>
              <div class="service-about">
                <h3>Firewall Services</h3>
                <p>Firewalls filter traffic, guard
                  against malware, and enforce access rules, offering
                  application layer filtering and intrusion detection.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="service d-flex h-100">
              <div class="svg-icon">
                <img src="images/flaticon/svg/004-travel-3.svg" alt="Image" class="img-fluid">
              </div>
              <div class="service-about">
                <h3>Hyper Converged Infrastructure</h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="">
            <div class="service d-flex h-100">
              <div class="svg-icon">
                <img src="images/flaticon/svg/005-travel-4.svg" alt="Image" class="img-fluid">
              </div>
              <div class="service-about">
                <h3>Cloud Computing Services</h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="service d-flex h-100">
              <div class="svg-icon">
                <img src="images/flaticon/svg/006-food.svg" alt="Image" class="img-fluid">
              </div>
              <div class="service-about">
                <h3>Maintenance Services</h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="">
            <div class="service d-flex h-100">
              <div class="svg-icon">
                <img src="images/flaticon/svg/002-travel-1.svg" alt="Image" class="img-fluid">
              </div>
              <div class="service-about">
                <h3>IT Products Sales & Services</h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="">
            <div class="service d-flex h-100">
              <div class="svg-icon">
                <img src="images/flaticon/svg/002-travel-1.svg" alt="Image" class="img-fluid">
              </div>
              <div class="service-about">
                <h3>Outsourcing Service</h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>


    <section class="site-section block__62272" id="projects-section">
      

      <div class="container">
        <div class="row mb-5">
          <div class="col-12 position-relative">
            <h2 class="section-title text-center mb-5">Projects</h2>
          </div>
        </div>

        <div class="row justify-content-center mb-5" data-aos="fade">
          <div id="filters" class="filters text-center button-group col-md-7">
            <button class="btn btn-primary active" data-filter="*">All</button>
            <button class="btn btn-primary" data-filter=".web">Web</button>
            <button class="btn btn-primary" data-filter=".design">Design</button>
            <button class="btn btn-primary" data-filter=".brand">Brand</button>
          </div>
        </div>  
        
        <div id="posts" class="row no-gutter">
          <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="images/img_5.jpg" class="item-wrap fancybox">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/img_5.jpg">
            </a>
          </div>

          <div class="item brand col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="images/img_6.jpg" class="item-wrap fancybox">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/img_6.jpg">
            </a>
          </div>

          <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="images/img_7.jpg" class="item-wrap fancybox">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/img_7.jpg">
            </a>
          </div>

          <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="images/img_1.jpg" class="item-wrap fancybox">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/img_1.jpg">
            </a>
          </div>
          <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="images/img_2.jpg" class="item-wrap fancybox">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/img_2.jpg">
            </a>
          </div>

          <div class="item brand col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="images/img_3.jpg" class="item-wrap fancybox">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/img_3.jpg">
            </a>
          </div>

          <div class="item design col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">

            <a href="images/img_4.jpg" class="item-wrap fancybox">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/img_4.jpg">
            </a>

          </div>

          <div class="item design col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="images/img_8.jpg" class="item-wrap fancybox">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/img_8.jpg">
            </a>
          </div>

          <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="images/img_9.jpg" class="item-wrap fancybox">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/img_9.jpg">
            </a>
          </div>

          <div class="item design col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="images/img_10.jpg" class="item-wrap fancybox">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/img_10.jpg">
            </a>
          </div>

          <div class="item brand col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="images/img_11.jpg" class="item-wrap fancybox">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/img_11.jpg">
            </a>
          </div>

        </div>
      </div>

    </section>


    <section class="site-section bg-primary">
      <div class="container">
        <div class="row">
          <div class="col-12 mb-5 position-relative">
            <h2 class="section-title text-center mb-5 text-white">What Client Are Sayings</h2>
          </div>
        </div>
        <div class="owl-carousel slide-one-item">
          <div class="slide">
            <blockquote>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
              <p><cite>&mdash; Jean Smith</cite></p>
            </blockquote>
          </div>
          <div class="slide">
            <blockquote>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
              <p><cite>&mdash; Carl Spencer</cite></p>
            </blockquote>
          </div>
          <div class="slide">
            <blockquote>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
              <p><cite>&mdash; Ryan Peters</cite></p>
            </blockquote>
          </div>
        </div>
      </div>
    </section>

    
    <section class="site-section bg-light" id="blog-section">
      <div class="container">
        <div class="row">
          
          <div class="col-12 mb-5 position-relative">
            <h2 class="section-title text-center mb-5">Blog Posts</h2>
          </div>

          <div class="col-md-6 mb-5 mb-lg-0 col-lg-4">
            <div class="blog_entry">
              <a href="single.html"><img src="images/blog_1.jpg" alt="Image" class="img-fluid"></a>
              <div class="p-4 bg-white">
                <h3><a href="single.html">A small river named Duden flows by their place</a></h3>
                <span class="date">April 25, 2019</span>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <p class="more"><a href="single.html">Read More</a></p>
              </div>
            </div>
          </div>

          <div class="col-md-6 mb-5 mb-lg-0 col-lg-4">
            <div class="blog_entry">
              <a href="single.html"><img src="images/blog_2.jpg" alt="Image" class="img-fluid"></a>
              <div class="p-4 bg-white">
                <h3><a href="single.html">A small river named Duden flows by their place</a></h3>
                <span class="date">April 25, 2019</span>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <p class="more"><a href="single.html">Read More</a></p>
              </div>
            </div>
          </div>

          <div class="col-md-6 mb-5 mb-lg-0 col-lg-4">
            <div class="blog_entry">
              <a href="single.html"><img src="images/blog_3.jpg" alt="Image" class="img-fluid"></a>
              <div class="p-4 bg-white">
                <h3><a href="single.html">A small river named Duden flows by their place</a></h3>
                <span class="date">April 25, 2019</span>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <p class="more"><a href="single.html">Read More</a></p>
              </div>
            </div>
          </div>
          
        </div>
        <!-- <div class="row">
          
          <div class="col-12 mb-5 position-relative">
            <div style="width: 300px; height: 100px;"></div>
          </div>

          <div class="col-md-6 mb-5 mb-lg-0 col-lg-4">
            <div class="blog_entry">
              <a href="single.html"><img src="images/blog_1.jpg" alt="Image" class="img-fluid"></a>
              <div class="p-4 bg-white">
                <h3><a href="single.html">A small river named Duden flows by their place</a></h3>
                <span class="date">April 25, 2019</span>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <p class="more"><a href="single.html">Read More</a></p>
              </div>
            </div>
          </div>

          <div class="col-md-6 mb-5 mb-lg-0 col-lg-4">
            <div class="blog_entry">
              <a href="single.html"><img src="images/blog_2.jpg" alt="Image" class="img-fluid"></a>
              <div class="p-4 bg-white">
                <h3><a href="single.html">A small river named Duden flows by their place</a></h3>
                <span class="date">April 25, 2019</span>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <p class="more"><a href="single.html">Read More</a></p>
              </div>
            </div>
          </div>

          <div class="col-md-6 mb-5 mb-lg-0 col-lg-4">
            <div class="blog_entry">
              <a href="single.html"><img src="images/blog_3.jpg" alt="Image" class="img-fluid"></a>
              <div class="p-4 bg-white">
                <h3><a href="single.html">A small river named Duden flows by their place</a></h3>
                <span class="date">April 25, 2019</span>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <p class="more"><a href="single.html">Read More</a></p>
              </div>
            </div>
          </div>
          
        </div> -->
      </div>
    </section>


    <section class="site-section" id="contact-section">
      <div class="container">
        <div class="row">
          <div class="col-12 mb-5 position-relative">
            <h2 class="section-title text-center mb-5">Contact Form</h2>
          </div>
        </div>
        <div class="row justify-content-between">
          <div class="col-lg-6">
          <form action="./controller/customers/create.php" method="post">
          <div class="mb-3">
            <label class="form-label">Customer Name</label>
            <input type="text" class="form-control" name="customer_name">
          </div>
          <div class="mb-3">
            <label class="form-label">Contact Name</label>
            <input type="text" class="form-control" name="contact_name">
          </div>
          <div class="mb-3">
            <label class="form-label">Address</label>
            <textarea name="address" rows="3" class="form-control"></textarea>
          </div>
          <div class="mb-3">
            <label class="form-label">City</label>
            <input type="text" class="form-control" name="city">
          </div>
          <div class="mb-3">
            <label class="form-label">Postal Code</label>
            <input type="text" class="form-control" name="postal_code">
          </div>
          <div class="mb-3">
            <label class="form-label">Country</label>
            <input type="text" class="form-control" name="country">
          </div>
          <div class="mb-3">
            <button href="index.php" type="submit" class="btn btn-primary">Save</button>
          </div>
</form>
          </div>
          <div class="col-lg-5">
            <h3>Yangon</h3>
            <ul class="list-unstyled mb-5">
              <li class="mb-3">
                <strong class="d-block mb-1">Address</strong>
                <span>No (13/B), Room (3/A), Tapin Shwe Htee Road,
                  14th Ward, Yankin Tsp</span>
              </li>
              <li class="mb-3">
                <strong class="d-block mb-1">Phone</strong>
                <span>+95 9880 895 512 , +95 9880 895 510</span>
              </li>
              <li class="mb-3">
                <strong class="d-block mb-1">Email</strong>
                <span>info@techxagonict.com</span>
              </li>
            </ul>

            <!-- <h3>New York</h3>
            <ul class="list-unstyled">
              <li class="mb-3">
                <strong class="d-block mb-1">Address</strong>
                <span>203 Fake St. Mountain View, San Francisco, California, USA</span>
              </li>
              <li class="mb-3">
                <strong class="d-block mb-1">Phone</strong>
                <span>+1 232 3235 324</span>
              </li>
              <li class="mb-3">
                <strong class="d-block mb-1">Email</strong>
                <span>youremail@domain.com</span>
              </li>
            </ul> -->
          </div>
        </div>
      </div>
    </section>

    <footer class="site-section bg-light footer">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-3">
            <h3 class="footer-title">Services</h3>
            <p><span class="d-inline-block d-md-block">203 Fake St. Mountain View,</span> San Francisco, California, USA</p>
          </div>
          <div class="col-md-5 mx-auto">
            <div class="row">
              <div class="col-lg-4">
                <h3 class="footer-title">Services</h3>
                <ul class="list-unstyled">
                  <li><a href="#">Content Marketing</a></li>
                  <li><a href="#">Brand & Logo</a></li>
                  <li><a href="#">Social Advertising</a></li>
                </ul>
              </div>
              <div class="col-lg-4">
                <h3 class="footer-title">Resources</h3>
                <ul class="list-unstyled">
                  <li><a href="#">Social Marketing</a></li>
                  <li><a href="#">Web Design</a></li>
                  <li><a href="#">Web Development</a></li>
                </ul>
              </div>
              <div class="col-lg-4">
                <h3 class="footer-title">Templates</h3>
                <ul class="list-unstyled">
                  <li><a href="#">Illustration</a></li>
                  <li><a href="#">Video Editing</a></li>
                  <li><a href="#">Copywriting</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <h3 class="footer-title">Follow Me</h3>
            <a href="#" class="social-circle m-2"><span class="icon-twitter"></span></a>
            <a href="#" class="social-circle m-2"><span class="icon-facebook"></span></a>
            <a href="#" class="social-circle m-2"><span class="icon-instagram"></span></a>
            <a href="#" class="social-circle m-2"><span class="icon-dribbble"></span></a>
            <a href="#" class="social-circle m-2"><span class="icon-linkedin"></span></a>
          </div>
        </div>

        <!-- <div class="row">
          <div class="col-12 text-center">
            <p>
                Copyright &copy;
                <script>
                  document.write(new Date().getFullYear());
                </script> All rights reserved | This template is made with <i class="icon-heart"
                  aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
              </p>  
          </div>
        </div> -->
      </div>
    </footer>

  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>

  
  <script src="js/main.js"></script>
  <script>
    $('#toggle').change(() => {
		if ($('#toggle').is(":checked")) {
		   $("body").addClass("dark-class");
		} else {
		   $("body").removeClass("dark-class")
		}
	 });
  </script>
  </body>
</html>