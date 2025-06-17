<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Oneglobe Logistics | Home</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Roboto:wght@500;700&display=swap" 
    rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Poppins:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet" />
    <style>
    body {
      margin: 0;
      font-family: 'Open Sans', sans-serif;
    }
    h1, h5 {
      font-family: 'Poppins', sans-serif;
      letter-spacing: 0.5px;
    }
    h1 {
      font-weight: 900;
      line-height: 1.2;
    }
    h5 {
      font-weight: 500;
      font-size: 1.25rem;
    }
    p {
      font-size: 1.1rem;
      line-height: 1.6;
    }
    .btn {
      font-weight: 600;
      letter-spacing: 0.3px;
    }
    .owl-carousel .item img {
      width: 100%;
      height: 100vh;
      object-fit: cover;
    }
    .header-carousel .carousel-caption {
      top: 50%;
      transform: translateY(-50%);
    }
  </style>


<style>
  
  .floating-gif {
    max-width: 635px; /* Increased size */
    margin-bottom: 30px;
    animation: float 3s ease-in-out infinite;
  }

  @keyframes float {
    0%, 100% {
      transform: translateY(0);
    }
    50% {
      transform: translateY(-10px);
    }
  }

  @media (max-width: 768px) {
    .floating-gif {
      max-width: 250px;
      margin: 0 auto 20px;
    }
  }
</style>


</head>
<body>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
     <?php  
   require 'component/nav.php';
   ?>
    <!-- Navbar End -->


    <!-- Carousel Start -->
  <div class="container-fluid p-0 pb-5">
  <div class="owl-carousel header-carousel position-relative mb-5">

    <!-- Slide 1 -->
    <div class="owl-carousel-item position-relative">
      <img class="img-fluid" src="img/carosal_2.png" alt="">
      <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(0, 50, 73, .7);">
        <div class="container">
          <div class="row justify-content-start">
            <div class="col-10 col-lg-8">
              <h5 class="text-light text-uppercase mb-3 letter-spacing-2" style="font-weight: 300; font-family: 'Montserrat', sans-serif;">Logistics Experts</h5>
              <h1 class="display-3 text-white mb-4" style="font-weight: 700; font-family: 'Playfair Display', serif; text-shadow: 1px 1px 3px rgba(0,0,0,0.3);">
                #1 in <span class="text-primary" style="color: #007BBD !important;">Logistics</span> Solutions
              </h1>
              <p class="text-light mb-4 lead" style="font-weight: 300; max-width: 600px;">Fast and reliable logistics for all your needs worldwide.</p>
              <div class="d-flex gap-3">
                <a href="#" class="btn btn-primary py-md-3 px-md-5 me-3 rounded-0" style="background-color: #007BBD; border: none; font-weight: 500;">Read More</a>
                <a href="#" class="btn btn-light py-md-3 px-md-5 rounded-0" style="background-color: #F0FAFF; color: #003249; font-weight: 500;">Free Quote</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Slide 2 -->
    <div class="owl-carousel-item position-relative">
      <img class="img-fluid" src="img/carosal_1.png" alt="">
      <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(0, 50, 73, .7);">
        <div class="container">
          <div class="row justify-content-start">
            <div class="col-10 col-lg-8">
              <h5 class="text-light text-uppercase mb-3 letter-spacing-2" style="font-weight: 300; font-family: 'Montserrat', sans-serif;">Global Transport</h5>
              <h1 class="display-3 text-white mb-4" style="font-weight: 700; font-family: 'Playfair Display', serif; text-shadow: 1px 1px 3px rgba(0,0,0,0.3);">
                Seamless <span class="text-primary" style="color: #007BBD !important;">Transport</span> Experience
              </h1>
              <p class="text-light mb-4 lead" style="font-weight: 300; max-width: 600px;">Connecting continents with our advanced freight network.</p>
              <div class="d-flex gap-3">
                <a href="#" class="btn btn-primary py-md-3 px-md-5 me-3 rounded-0" style="background-color: #007BBD; border: none; font-weight: 500;">Read More</a>
                <a href="#" class="btn btn-light py-md-3 px-md-5 rounded-0" style="background-color: #F0FAFF; color: #003249; font-weight: 500;">Free Quote</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Slide 3 -->
    <div class="owl-carousel-item position-relative">
      <img class="img-fluid" src="img/carosal_3.png" alt="">
      <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(0, 50, 73, .7);">
        <div class="container">
          <div class="row justify-content-start">
            <div class="col-10 col-lg-8">
              <h5 class="text-light text-uppercase mb-3 letter-spacing-2" style="font-weight: 300; font-family: 'Montserrat', sans-serif;">Efficient Delivery</h5>
              <h1 class="display-3 text-white mb-4" style="font-weight: 700; font-family: 'Playfair Display', serif; text-shadow: 1px 1px 3px rgba(0,0,0,0.3);">
                We Deliver <span class="text-primary" style="color: #007BBD !important;">On Time</span>
              </h1>
              <p class="text-light mb-4 lead" style="font-weight: 300; max-width: 600px;">No delays, just pure commitment to punctuality and service.</p>
              <div class="d-flex gap-3">
                <a href="#" class="btn btn-primary py-md-3 px-md-5 me-3 rounded-0" style="background-color: #007BBD; border: none; font-weight: 500;">Read More</a>
                <a href="#" class="btn btn-light py-md-3 px-md-5 rounded-0" style="background-color: #F0FAFF; color: #003249; font-weight: 500;">Free Quote</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Slide 4 -->
    <div class="owl-carousel-item position-relative">
      <img class="img-fluid" src="img/carosal_4.png" alt="">
      <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(0, 50, 73, .7);">
        <div class="container">
          <div class="row justify-content-start">
            <div class="col-10 col-lg-8">
              <h5 class="text-light text-uppercase mb-3 letter-spacing-2" style="font-weight: 300; font-family: 'Montserrat', sans-serif;">Warehousing</h5>
              <h1 class="display-3 text-white mb-4" style="font-weight: 700; font-family: 'Playfair Display', serif; text-shadow: 1px 1px 3px rgba(0,0,0,0.3);">
                Smart <span class="text-primary" style="color: #007BBD !important;">Storage</span> Solutions
              </h1>
              <p class="text-light mb-4 lead" style="font-weight: 300; max-width: 600px;">State-of-the-art warehousing that keeps your goods safe.</p>
              <div class="d-flex gap-3">
                <a href="#" class="btn btn-primary py-md-3 px-md-5 me-3 rounded-0" style="background-color: #007BBD; border: none; font-weight: 500;">Read More</a>
                <a href="#" class="btn btn-light py-md-3 px-md-5 rounded-0" style="background-color: #F0FAFF; color: #003249; font-weight: 500;">Free Quote</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Slide 5 -->
    <div class="owl-carousel-item position-relative">
      <img class="img-fluid" src="img/carosal_5.png" alt="">
      <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(0, 50, 73, .7);">
        <div class="container">
          <div class="row justify-content-start">
            <div class="col-10 col-lg-8">
              <h5 class="text-light text-uppercase mb-3 letter-spacing-2" style="font-weight: 300; font-family: 'Montserrat', sans-serif;">Customer First</h5>
              <h1 class="display-3 text-white mb-4" style="font-weight: 700; font-family: 'Playfair Display', serif; text-shadow: 1px 1px 3px rgba(0,0,0,0.3);">
                Your <span class="text-primary" style="color: #007BBD !important;">Satisfaction</span> Our Goal
              </h1>
              <p class="text-light mb-4 lead" style="font-weight: 300; max-width: 600px;">We build lasting relationships through reliable service.</p>
              <div class="d-flex gap-3">
                <a href="#" class="btn btn-primary py-md-3 px-md-5 me-3 rounded-0" style="background-color: #007BBD; border: none; font-weight: 500;">Read More</a>
                <a href="#" class="btn btn-light py-md-3 px-md-5 rounded-0" style="background-color: #F0FAFF; color: #003249; font-weight: 500;">Free Quote</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
    <!-- Carousel End -->


    <!-- About Start -->
  <div class="container-fluid py-5 px-3 px-lg-0" style="background-color: #F0FAFF;">
  <div class="container py-5">
    <div class="row g-5 align-items-center">

      <!-- Left Graphic -->
      <div class="col-lg-6 wow animate__animated animate__fadeInLeft" data-wow-delay="0.2s">
        <div class="position-relative">
          <img src="img/abt.png" class="img-fluid w-100 rounded-3 shadow-sm" alt="Logistics Illustration">
          <div class="position-absolute bottom-0 end-0 text-white p-4 rounded-start" style="transform: translateY(20px); background-color: #37B34A;">
            <h3 class="mb-0 fw-bold">15+</h3>
            <small class="text-uppercase">Years Experience</small>
          </div>
        </div>
      </div>

      <!-- Right Content -->
      <div class="col-lg-6 wow animate__animated animate__fadeInRight" data-wow-delay="0.4s">
        <h6 class="text-primary text-uppercase mb-3 letter-spacing-2 fw-bold" style="font-family: 'Montserrat', sans-serif;">About Our Company</h6>
        <h2 class="mb-4 fw-bold" style="font-family: 'Playfair Display', serif; color: #003249;">
          <span style="color: #37B34A;">Efficient</span>, Reliable & Global Logistics Solutions
        </h2>
        <p class="mb-4" style="color: #5a6a7a; line-height: 1.8;">
          With a strong global network and years of experience, we provide top-notch logistics and supply chain services tailored to meet your business needs. Our mission is to ensure timely and secure delivery of goods worldwide with complete transparency.
        </p>

        <div class="row g-4 mb-4">
          <div class="col-sm-6">
            <div class="d-flex align-items-start p-3 bg-white rounded-3 shadow-sm h-100">
              <i class="fa fa-globe fa-2x me-3 mt-1" style="color: #37B34A;"></i>
              <div>
                <h6 class="mb-2 fw-bold" style="color: #003249;">Worldwide Network</h6>
                <small class="text-muted" style="line-height: 1.6;">Seamless global shipping and freight services across over 120+ countries.</small>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="d-flex align-items-start p-3 bg-white rounded-3 shadow-sm h-100">
              <i class="fa fa-shipping-fast fa-2x text-primary me-3 mt-1"></i>
              <div>
                <h6 class="mb-2 fw-bold" style="color: #003249;">Timely Delivery</h6>
                <small class="text-muted" style="line-height: 1.6;">Reliable transport and on-time delivery guaranteed, every time.</small>
              </div>
            </div>
          </div>
        </div>

        <div class="d-flex flex-wrap gap-3 align-items-center">
          <a href="#services" class="btn btn-primary px-4 py-3 rounded-pill fw-bold" style="background-color: #007BBD; border: none;">Discover Our Services</a>
          <div class="d-flex align-items-center">
            <div class="me-3">
              <i class="fa fa-phone-alt" style="color: #37B34A;"></i>
            </div>
            <div>
              <small class="text-uppercase text-muted">Need Help?</small>
              <h6 class="mb-0 fw-bold" style="color: #003249;">+1 (234) 567-8900</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
    <!-- About End -->


    <!-- Fact Start -->
 <div class="container-xxl py-5" style="background-color: #F0FAFF;">
  <div class="container py-5">
    <div class="row g-5 align-items-center">
      
      <!-- Left Content -->
      <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
        <h6 class="text-primary text-uppercase fw-bold mb-3 animate__animated animate__fadeInDown" style="letter-spacing: 1.5px; font-family: 'Montserrat', sans-serif;">TRUSTED LOGISTICS PARTNER</h6>
        <h1 class="display-5 fw-bold mb-4 animate__animated animate__fadeInLeft" style="font-family: 'Playfair Display', serif; color: #003249;">
          Your <span style="color: #37B34A;">One-Stop</span> Solution for Seamless Shipping
        </h1>
        <p class="mb-5 fs-5 animate__animated animate__fadeInUp" style="color: #5a6a7a; line-height: 1.8;">
          Experience world-class logistics tailored to your needs. From local deliveries to global shipments, we ensure timely, secure, and transparent solutions. Join thousands of satisfied clients who trust us to move their world forward.
        </p>
        
        <div class="d-flex align-items-center bg-white p-4 rounded animate__animated animate__zoomIn" style="box-shadow: 0 5px 15px rgba(0, 59, 73, 0.1); border-left: 4px solid #37B34A;">
          <div class="bg-primary text-white rounded-circle d-flex justify-content-center align-items-center" style="width: 70px; height: 70px;">
            <i class="fa fa-headphones fa-lg"></i>
          </div>
          <div class="ps-4">
            <h6 class="mb-1" style="color: #37B34A; font-weight: 600;">24/7 CUSTOMER SUPPORT</h6>
            <h4 class="m-0" style="color: #003249; font-weight: 700;">+012 345 6789</h4>
          </div>
        </div>
      </div>

      <!-- Right Stats -->
      <div class="col-lg-6">
        <div class="row g-4">
          
          <div class="col-sm-6" data-aos="fade-up" data-aos-delay="200">
            <div class="p-5 bg-white rounded text-center h-100" style="box-shadow: 0 5px 15px rgba(0, 59, 73, 0.1); border-top: 4px solid #007BBD;">
              <div class="bg-primary text-white rounded-circle d-inline-flex justify-content-center align-items-center mb-4" style="width: 70px; height: 70px;">
                <i class="fa fa-users fa-lg"></i>
              </div>
              <h2 class="fw-bold mb-2" style="color: #007BBD; font-size: 2.5rem;" data-toggle="counter-up">1234</h2>
              <h6 class="text-uppercase" style="color: #5a6a7a; letter-spacing: 1px;">Satisfied Customers</h6>
            </div>
          </div>

          <div class="col-sm-6" data-aos="fade-up" data-aos-delay="400">
            <div class="p-5 bg-white rounded text-center h-100" style="box-shadow: 0 5px 15px rgba(0, 59, 73, 0.1); border-top: 4px solid #37B34A;">
              <div class="bg-secondary text-white rounded-circle d-inline-flex justify-content-center align-items-center mb-4" style="width: 70px; height: 70px; background-color: #37B34A !important;">
                <i class="fa fa-ship fa-lg"></i>
              </div>
              <h2 class="fw-bold mb-2" style="color: #37B34A; font-size: 2.5rem;" data-toggle="counter-up">1234</h2>
              <h6 class="text-uppercase" style="color: #5a6a7a; letter-spacing: 1px;">Successful Deliveries</h6>
            </div>
          </div>

          <div class="col-sm-12" data-aos="fade-up" data-aos-delay="600">
            <div class="p-5 bg-white rounded text-center" style="box-shadow: 0 5px 15px rgba(0, 59, 73, 0.1); border-top: 4px solid #FFC107;">
              <div class="bg-warning text-white rounded-circle d-inline-flex justify-content-center align-items-center mb-4" style="width: 70px; height: 70px;">
                <i class="fa fa-star fa-lg"></i>
              </div>
              <h2 class="fw-bold mb-2" style="color: #FFC107; font-size: 2.5rem;" data-toggle="counter-up">1234</h2>
              <h6 class="text-uppercase" style="color: #5a6a7a; letter-spacing: 1px;">Verified 5-Star Reviews</h6>
              <div class="mt-3">
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</div>


    <!-- Fact End -->

<!-- Partner start -->
  <?php  
   require 'component/partner.php';
   ?>

   <!-- Partner end -->

    <!-- Service Start -->

  <?php  
   require 'component/services.php';
   ?>
    <!-- Service End -->


    <!-- Feature Start -->
   <div class="container-fluid bg-light py-5 px-lg-0">
    <div class="container py-5 px-lg-0">
        <div class="row g-5 align-items-center mx-lg-0">
            <!-- Feature Text Column -->
            <div class="col-lg-6 px-lg-5">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-uppercase text-primary fw-semibold mb-3">Why Choose Us</h6>
                    <h1 class="display-5 fw-bold mb-4">Delivering Excellence in Logistics Since 1990</h1>
                    <p class="mb-4 text-muted">We specialize in providing top-notch logistics solutions tailored to your business needs. With a global reach and a customer-centric approach, we ensure every shipment is handled with precision, care, and speed.</p>
                </div>

                <!-- Feature Block 1 -->
                <div class="d-flex align-items-start mb-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="bg-white p-3 rounded shadow-sm me-4">
                        <i class="fa fa-globe fa-2x text-primary"></i>
                    </div>
                    <div>
                        <h5 class="mb-1">Global Reach</h5>
                        <p class="mb-0 text-muted">We operate across continents to ensure your cargo reaches every destination seamlessly and on time.</p>
                    </div>
                </div>

                <!-- Feature Block 2 -->
                <div class="d-flex align-items-start mb-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="bg-white p-3 rounded shadow-sm me-4">
                        <i class="fa fa-shipping-fast fa-2x text-primary"></i>
                    </div>
                    <div>
                        <h5 class="mb-1">Timely Delivery</h5>
                        <p class="mb-0 text-muted">With optimized routes and real-time tracking, we guarantee punctual delivery for every shipment.</p>
                    </div>
                </div>

                <!-- Feature Block 3 -->
                <div class="d-flex align-items-start wow fadeInUp" data-wow-delay="0.7s">
                    <div class="bg-white p-3 rounded shadow-sm me-4">
                        <i class="fa fa-headset fa-2x text-primary"></i>
                    </div>
                    <div>
                        <h5 class="mb-1">24/7 Customer Support</h5>
                        <p class="mb-0 text-muted">Our dedicated support team is available around the clock to address all your logistics queries and needs.</p>
                    </div>
                </div>
            </div>

            <!-- Image Column -->
            <div class="col-lg-6 pe-lg-0 wow fadeInRight" data-wow-delay="0.1s" style="min-height: 400px;">
                <!-- <div class="position-relative h-100 rounded shadow overflow-hidden"> -->
                    <img src="img/feature.gif" class="img-fluid w-100 h-100" style="object-fit: cover;" alt="Feature Image">
                <!-- </div> -->
            </div>
        </div>
    </div>
</div>

    <!-- Feature End -->


    <!-- Quote Start -->
 <div class="container-xxl py-5 bg-light position-relative overflow-hidden">
  <div class="container py-5">
    <div class="row gx-5 gy-5align-items-start">

      <!-- Left Column: GIF + MAP -->
      <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3s">
        <!-- Floating GIF -->
        <div class="floating-gif">
          <img src="img/deliveries.gif" alt="Logistics GIF" class="img-fluid">
        </div>

        <!-- Google Map -->
        <div class="rounded overflow-hidden shadow" style="height: 400px;">
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d241317.1160992631!2d72.74109914180078!3d19.082197838080763!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b63c7e46b57b%3A0xf66c3dc11be0a3!2sMumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1718188590105!5m2!1sen!2sin" 
            width="100%" 
            height="100%" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
      </div>

      <!-- Right Column: Quote Content + Form -->
      <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
  <h6 class="text-uppercase mb-3" style="color: var(--secondary); letter-spacing: 1px;">Get A Quote</h6>
  <h1 class="mb-3 fw-bold" style="color: var(--dark); font-size: 2.2rem;">Request A Free Quote!</h1>
  <p class="mb-4" style="color: #555;">
    Get fast, reliable, and secure logistics solutions tailored to your needs.
    Reach out and let us handle the rest!
  </p>

  <!-- Contact Box -->
  <div class="d-flex align-items-center bg-light rounded p-3 mb-4 shadow-sm">
    <div class="bg-secondary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
      <i class="fas fa-phone-alt"></i>
    </div>
    <div class="ps-3">
      <h6 class="mb-1 text-dark">Need Help?</h6>
      <h5 class="m-0" style="color: var(--primary);">+012 345 6789</h5>
    </div>
  </div>

  <!-- Quote Form -->
 <div class="rounded shadow p-4 border-top border-4" style="background-color: var(--light); border-color: var(--primary);">
  <form>
    <div class="row g-3">
      <div class="col-md-6">
        <input type="text" class="form-control shadow-sm" placeholder="Your Name" required>
      </div>
      <div class="col-md-6">
        <input type="email" class="form-control shadow-sm" placeholder="Your Email" required>
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control shadow-sm" placeholder="Your Mobile" required>
      </div>
      <div class="col-md-6">
        <select class="form-select shadow-sm" required>
          <option selected disabled>Select Freight Type</option>
          <option value="land">Land Freight</option>
          <option value="air">Air Freight</option>
          <option value="sea">Sea Freight</option>
        </select>
      </div>
      <div class="col-12">
        <textarea class="form-control shadow-sm" rows="3" placeholder="Special Note (Optional)"></textarea>
      </div>
      <div class="col-12">
        <button class="btn w-100 py-2 shadow-sm text-white" style="background-color: var(--secondary);" type="submit">
          Submit Request
        </button>
      </div>
    </div>
  </form>
</div>
</div>

    </div>
  </div>
</div>
<!-- Quote Section End -->
    <!-- Quote End -->


    <!-- Team Start -->
 

     <?php  
   require 'component/team.php';
   ?>

    <!-- Team End -->


    <!-- Testimonial Start -->
  
     <?php  
   require 'component/testimonial.php';
   ?>
    <!-- Testimonial End -->


    <!-- Footer Start -->
        <?php  
   require 'component/footer.php';
   ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
  $(document).ready(function () {
    $(".header-carousel").owlCarousel({
      loop: true,
      margin: 0,
      nav: false,
      dots: true,
      autoplay: true,
      autoplayTimeout: 5000,
      smartSpeed: 1000,
      items: 1
    });
  });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script>
  new WOW().init();
</script>

<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init();
</script>






</body>

</html>