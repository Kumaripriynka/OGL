<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Logistica - Shipping Company Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

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

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Open+Sans:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        :root {
            --primary: #0d6efd;
            --primary-dark: #0b5ed7;
            --secondary: #6c757d;
            --light: #f8f9fa;
            --dark: #212529;
            --gray: #6c757d;
            --light-gray: #e9ecef;
            --accent: #ff6b35;
            --success: #198754;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Open Sans', sans-serif;
            color: #444;
            line-height: 1.7;
            background-color: #f9fbfd;
            overflow-x: hidden;
        }
        
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            color: #1a1a1a;
        }
        
        /* Enhanced Services Section */
        .enhanced-services-section {
            position: relative;
            padding: 120px 0;
            background: linear-gradient(135deg, #f8f9ff 0%, #ffffff 50%, #f0f7ff 100%);
            overflow: hidden;
        }
        
        .enhanced-services-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: 
                radial-gradient(circle at 20% 20%, rgba(13, 110, 253, 0.05) 0%, transparent 50%),
                radial-gradient(circle at 80% 80%, rgba(255, 107, 53, 0.05) 0%, transparent 50%);
            pointer-events: none;
        }
        
        .section-header-enhanced {
            text-align: center;
            margin-bottom: 100px;
            position: relative;
        }
        
        .section-header-enhanced .subtitle {
            display: inline-block;
            background: linear-gradient(135deg, var(--primary), var(--accent));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-size: 1.1rem;
            font-weight: 600;
            letter-spacing: 3px;
            text-transform: uppercase;
            margin-bottom: 20px;
            position: relative;
        }
        
        .section-header-enhanced .subtitle::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background: linear-gradient(135deg, var(--primary), var(--accent));
            border-radius: 3px;
        }
        
        .section-header-enhanced h2 {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 30px;
            position: relative;
            line-height: 1.1;
        }
        
        .section-header-enhanced h2 .highlight {
            background: linear-gradient(135deg, var(--primary), var(--accent));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .section-header-enhanced .description {
            font-size: 1.3rem;
            color: var(--gray);
            max-width: 700px;
            margin: 0 auto;
            font-weight: 400;
        }
        
        /* Zigzag Service Items */
        .zigzag-services-container {
            position: relative;
        }
        
        .zigzag-service-item {
            display: flex;
            align-items: center;
            margin-bottom: 150px;
            position: relative;
            min-height: 600px;
        }
        
        .zigzag-service-item:last-child {
            margin-bottom: 0;
        }
        
        .zigzag-service-item::before {
            content: '';
            position: absolute;
            width: 200px;
            height: 200px;
            border-radius: 50%;
            background: linear-gradient(135deg, rgba(13, 110, 253, 0.08) 0%, transparent 70%);
            z-index: 0;
        }
        
        .zigzag-service-content {
            width: 50%;
            padding: 60px;
            position: relative;
            z-index: 2;
        }
        
        .zigzag-service-visual {
            width: 50%;
            position: relative;
            z-index: 1;
        }
        
        .service-image-container {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 
                0 40px 80px -20px rgba(0, 0, 0, 0.15),
                0 0 0 1px rgba(255, 255, 255, 0.2);
            transform: perspective(1000px) rotateY(0deg);
            transition: all 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }
        
        .service-image-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, transparent 0%, rgba(13, 110, 253, 0.1) 100%);
            z-index: 2;
            transition: opacity 0.4s ease;
        }
        
        .service-image-container:hover::before {
            opacity: 0.7;
        }
        
        .service-image-container img {
            width: 100%;
            height: 500px;
            object-fit: cover;
            transition: transform 0.6s ease;
        }
        
        .service-image-container:hover img {
            transform: scale(1.08);
        }
        
        .service-stats {
            position: absolute;
            bottom: 30px;
            right: 30px;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            z-index: 3;
        }
        
        .service-stats .stat-number {
            font-size: 2rem;
            font-weight: 800;
            color: var(--primary);
            display: block;
        }
        
        .service-stats .stat-label {
            font-size: 0.9rem;
            color: var(--gray);
            font-weight: 500;
        }
        
        .service-icon-large {
            width: 100px;
            height: 100px;
            background: linear-gradient(135deg, var(--primary), var(--accent));
            border-radius: 25px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 40px;
            color: white;
            font-size: 2.5rem;
            box-shadow: 0 20px 40px rgba(13, 110, 253, 0.3);
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
        }
        
        .service-icon-large::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transform: rotate(45deg);
            transition: all 0.6s ease;
            opacity: 0;
        }
        
        .service-icon-large:hover::before {
            animation: shimmer 1.5s ease-in-out;
            opacity: 1;
        }
        
        .service-title-large {
            font-size: 2.8rem;
            font-weight: 800;
            margin-bottom: 25px;
            position: relative;
            color: #1a1a1a;
        }
        
        .service-title-large::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 80px;
            height: 4px;
            background: linear-gradient(135deg, var(--primary), var(--accent));
            border-radius: 2px;
        }
        
        .service-description-large {
            font-size: 1.25rem;
            color: var(--gray);
            margin-bottom: 40px;
            line-height: 1.8;
            font-weight: 400;
        }
        
        .service-features-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            margin-bottom: 50px;
        }
        
        .feature-item {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 15px;
            background: rgba(255, 255, 255, 0.7);
            border-radius: 12px;
            border-left: 4px solid var(--primary);
            transition: all 0.3s ease;
        }
        
        .feature-item:hover {
            transform: translateX(5px);
            box-shadow: 0 5px 20px rgba(13, 110, 253, 0.15);
        }
        
        .feature-icon {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, var(--primary), var(--accent));
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1rem;
            flex-shrink: 0;
        }
        
        .feature-text {
            font-weight: 600;
            color: #333;
        }
        
        .service-cta {
            display: inline-flex;
            align-items: center;
            gap: 15px;
            background: linear-gradient(135deg, var(--primary), var(--accent));
            color: white;
            padding: 18px 35px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
        }
        
        .service-cta::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transform: rotate(45deg);
            transition: all 0.6s ease;
            opacity: 0;
        }
        
        .service-cta:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 35px rgba(13, 110, 253, 0.4);
            color: white;
        }
        
        .service-cta:hover::before {
            animation: shimmer 1.5s ease-in-out;
            opacity: 1;
        }
        
        /* Left-aligned items */
        .left-aligned {
            flex-direction: row;
        }
        
        .left-aligned::before {
            top: -50px;
            right: -50px;
        }
        
        .left-aligned .service-image-container:hover {
            transform: perspective(1000px) rotateY(-5deg) translateZ(20px);
        }
        
        /* Right-aligned items */
        .right-aligned {
            flex-direction: row-reverse;
        }
        
        .right-aligned::before {
            top: -50px;
            left: -50px;
        }
        
        .right-aligned .service-image-container:hover {
            transform: perspective(1000px) rotateY(5deg) translateZ(20px);
        }
        
        /* Keyframes */
        @keyframes shimmer {
            0% { transform: translateX(-100%) translateY(-100%) rotate(45deg); }
            100% { transform: translateX(100%) translateY(100%) rotate(45deg); }
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        
        /* Responsive Design */
        @media (max-width: 1200px) {
            .zigzag-service-content {
                padding: 40px;
            }
            
            .section-header-enhanced h2 {
                font-size: 3rem;
            }
            
            .service-title-large {
                font-size: 2.4rem;
            }
        }
        
        @media (max-width: 992px) {
            .zigzag-service-item {
                flex-direction: column !important;
                margin-bottom: 100px;
                min-height: auto;
            }
            
            .zigzag-service-content,
            .zigzag-service-visual {
                width: 100%;
            }
            
            .zigzag-service-content {
                order: 2;
                padding: 40px 20px;
            }
            
            .zigzag-service-visual {
                order: 1;
                margin-bottom: 30px;
            }
            
            .service-features-grid {
                grid-template-columns: 1fr;
            }
            
            .section-header-enhanced h2 {
                font-size: 2.5rem;
            }
        }
        
        @media (max-width: 768px) {
            .enhanced-services-section {
                padding: 80px 0;
            }
            
            .section-header-enhanced {
                margin-bottom: 60px;
            }
            
            .section-header-enhanced h2 {
                font-size: 2rem;
            }
            
            .service-title-large {
                font-size: 2rem;
            }
            
            .service-image-container img {
                height: 300px;
            }
            
            .zigzag-service-item::before {
                display: none;
            }
        }
        
        /* Original styles preserved */
        .services-section {
            position: relative;
            padding: 100px 0;
            background-color: white;
            overflow: hidden;
        }
        
        .services-section .container {
            position: relative;
            z-index: 2;
        }
        
        .service-bg-shape {
            width: 600px;
            height: 600px;
            border-radius: 50%;
            background: linear-gradient(135deg, rgba(13, 110, 253, 0.07) 0%, transparent 70%);
            opacity: 0.7;
        }
        
        .section-header {
            text-align: center;
            margin-bottom: 80px;
        }
        
        .section-header h3 {
            text-transform: uppercase;
            letter-spacing: 2px;
            color: var(--primary);
            font-size: 1.1rem;
            margin-bottom: 20px;
        }
        
        .section-header h2 {
            font-size: 2.8rem;
            margin-bottom: 20px;
            line-height: 1.2;
        }
        
        .section-header h2 span {
            color: var(--primary);
            position: relative;
        }
        
        .section-header h2 span:after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(to right, var(--primary), transparent);
            border-radius: 2px;
        }
        
        .divider {
            width: 80px;
            height: 4px;
            background: var(--primary);
            margin: 0 auto 25px;
            border-radius: 2px;
        }
        
        .section-header p {
            font-size: 1.2rem;
            color: var(--gray);
            max-width: 600px;
            margin: 0 auto;
        }
    </style>

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

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5" style="margin-bottom: 6rem;">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Services</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Services</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Service Start -->
    <?php  
   require 'component/services.php';
   ?>
    <!-- Service End -->

    <!-- Enhanced Services Section Start -->
    <section class="enhanced-services-section">
        <div class="container">
            <!-- Section Header -->
            <div class="section-header-enhanced" data-aos="fade-up" data-aos-duration="1000">
                <div class="subtitle">Our Premium Solutions</div>
                <h2>Comprehensive <span class="highlight">Logistics Excellence</span></h2>
                <p class="description">
                    Delivering world-class transportation and supply chain solutions with cutting-edge technology, 
                    unmatched reliability, and personalized service that drives your business forward.
                </p>
            </div>

            <!-- Zigzag Services Container -->
            <div class="zigzag-services-container">
                
                <!-- Air Freight Service -->
                <div class="zigzag-service-item left-aligned" data-aos="fade-right" data-aos-duration="1200">
                    <div class="zigzag-service-content">
                        <div class="service-icon-large">
                            <i class="fas fa-plane"></i>
                        </div>
                        <h3 class="service-title-large">Air Freight Excellence</h3>
                        <p class="service-description-large">
                            Lightning-fast global air cargo solutions with priority handling and real-time tracking. 
                            Our dedicated charter services ensure your time-sensitive shipments arrive with maximum 
                            security, efficiency, and complete peace of mind.
                        </p>
                        <div class="service-features-grid">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div class="feature-text">Express Air Options</div>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-thermometer-half"></i>
                                </div>
                                <div class="feature-text">Temperature Control</div>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-passport"></i>
                                </div>
                                <div class="feature-text">Customs Clearance</div>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-satellite-dish"></i>
                                </div>
                                <div class="feature-text">24/7 Flight Monitoring</div>
                            </div>
                        </div>
                        <a href="#" class="service-cta">
                            Explore Air Solutions
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                    <div class="zigzag-service-visual">
                        <div class="service-image-container">
                            <img src="https://images.unsplash.com/photo-1556388158-158ea5ccacbd?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" alt="Air Freight">
                            <div class="service-stats">
                                <span class="stat-number">24h</span>
                                <span class="stat-label">Delivery</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Ocean Freight Service -->
                <div class="zigzag-service-item right-aligned" data-aos="fade-left" data-aos-duration="1200">
                    <div class="zigzag-service-content">
                        <div class="service-icon-large">
                            <i class="fas fa-ship"></i>
                        </div>
                        <h3 class="service-title-large">Ocean Freight Mastery</h3>
                        <p class="service-description-large">
                            Cost-effective international container shipping with flexible FCL and LCL options. 
                            Our global port coverage ensures reliable schedules, competitive rates, and specialized 
                            handling for all your maritime shipping requirements.
                        </p>
                        <div class="service-features-grid">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-boxes"></i>
                                </div>
                                <div class="feature-text">FCL & LCL Options</div>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-anchor"></i>
                                </div>
                                <div class="feature-text">Port-to-Port Service</div>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-dolly"></i>
                                </div>
                                <div class="feature-text">Special Cargo Handling</div>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-snowflake"></i>
                                </div>
                                <div class="feature-text">Reefer Containers</div>
                            </div>
                        </div>
                        <a href="#" class="service-cta">
                            Explore Ocean Solutions
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                    <div class="zigzag-service-visual">
                        <div class="service-image-container">
                            <img src="https://images.unsplash.com/photo-1561715276-a2d087060f1d?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" alt="Ocean Freight">
                            <div class="service-stats">
                                <span class="stat-number">150+</span>
                                <span class="stat-label">Global Ports</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Road Freight Service -->
                <div class="zigzag-service-item left-aligned" data-aos="fade-right" data-aos-duration="1200">
                    <div class="zigzag-service-content">
                        <div class="service-icon-large">
                            <i class="fas fa-truck"></i>
                        </div>
                        <h3 class="service-title-large">Road Freight Solutions</h3>
                        <p class="service-description-large">
                            Reliable overland transportation with advanced temperature control and real-time GPS tracking. 
                            Our modern fleet and experienced drivers ensure your goods arrive safely and on schedule, 
                            whether across town or across continents.
                        </p>
                        <div class="service-features-grid">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-truck-moving"></i>
                                </div>
                                <div class="feature-text">Dedicated Fleet</div>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-globe"></i>
                                </div>
                                <div class="feature-text">Cross-Border Expertise</div>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-home"></i>
                                </div>
                                <div class="feature-text">Last-Mile Delivery</div>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-exclamation-triangle"></i>
                                </div>
                                <div class="feature-text">Hazardous Materials</div>
                            </div>
                        </div>
                        <a href="#" class="service-cta">
                            Explore Road Solutions
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                    <div class="zigzag-service-visual">
                        <div class="service-image-container">
                            <img src="https://images.unsplash.com/photo-1544620347-c4fd4a3d5957?ixlib=rb-4.0.3&auto=format&fit=crop&w=2069&q=80" alt="Road Freight">
                            <div class="service-stats">
                                <span class="stat-number">24/7</span>
                                <span class="stat-label">GPS Tracking</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Rail Freight Service -->
                <div class="zigzag-service-item right-aligned" data-aos="fade-left" data-aos-duration="1200">
                    <div class="zigzag-service-content">
                        <div class="service-icon-large">
                            <i class="fas fa-train"></i>
                        </div>
                        <h3 class="service-title-large">Rail Freight Innovation</h3>
                        <p class="service-description-large">
                            Eco-friendly rail solutions offering the perfect balance between speed and cost efficiency 
                            for continental shipments. Our extensive rail network provides reliable, sustainable 
                            transport for bulk commodities and intermodal services.
                        </p>
                        <div class="service-features-grid">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-exchange-alt"></i>
                                </div>
                                <div class="feature-text">Intermodal Transport</div>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-cubes"></i>
                                </div>
                                <div class="feature-text">Bulk Commodities</div>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-calendar-check"></i>
                                </div>
                                <div class="feature-text">Priority Scheduling</div>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-leaf"></i>
                                </div>
                                <div class="feature-text">Reduced Emissions</div>
                            </div>
                        </div>
                        <a href="#" class="service-cta">
                            Explore Rail Solutions
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                    <div class="zigzag-service-visual">
                        <div class="service-image-container">
                            <img src="https://images.unsplash.com/photo-1581093450021-4a7360e9a7e6?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" alt="Rail Freight">
                            <div class="service-stats">
                                <span class="stat-number">60%</span>
                                <span class="stat-label">Less CO2</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Customs Clearance Service -->
                <div class="zigzag-service-item left-aligned" data-aos="fade-right" data-aos-duration="1200">
                    <div class="zigzag-service-content">
                        <div class="service-icon-large">
                            <i class="fas fa-passport"></i>
                        </div>
                        <h3 class="service-title-large">Customs Clearance Expertise</h3>
                        <p class="service-description-large">
                            Expert customs brokerage services to navigate complex international regulations and minimize 
                            border delays. Our global network of certified agents ensures compliance at every checkpoint 
                            while optimizing your duty payments and processing times.
                        </p>
                        <div class="service-features-grid">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-fast-forward"></i>
                                </div>
                                <div class="feature-text">Pre-Clearance Services</div>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-calculator"></i>
                                </div>
                                <div class="feature-text">Duty Optimization</div>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-ban"></i>
                                </div>
                                <div class="feature-text">Restricted Goods</div>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-headset"></i>
                                </div>
                                <div class="feature-text">24/7 Support</div>
                            </div>
                        </div>
                        <a href="#" class="service-cta">
                            Explore Customs Solutions
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                    <div class="zigzag-service-visual">
                        <div class="service-image-container">
                            <img src="https://images.unsplash.com/photo-1600267175161-cfaa711b4a81?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" alt="Customs Clearance">
                            <div class="service-stats">
                                <span class="stat-number">99%</span>
                                <span class="stat-label">Success Rate</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Warehouse Solutions Service -->
                <div class="zigzag-service-item right-aligned" data-aos="fade-left" data-aos-duration="1200">
                    <div class="zigzag-service-content">
                        <div class="service-icon-large">
                            <i class="fas fa-warehouse"></i>
                        </div>
                        <h3 class="service-title-large">Warehouse Solutions</h3>
                        <p class="service-description-large">
                            State-of-the-art storage facilities with advanced inventory management and comprehensive 
                            value-added services. Our strategically located distribution centers optimize your supply 
                            chain efficiency and reduce fulfillment times across all markets.
                        </p>
                        <div class="service-features-grid">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-temperature-low"></i>
                                </div>
                                <div class="feature-text">Climate Control</div>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-box-open"></i>
                                </div>
                                <div class="feature-text">Pick & Pack Services</div>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-chart-line"></i>
                                </div>
                                <div class="feature-text">Real-time Reports</div>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-expand-arrows-alt"></i>
                                </div>
                                <div class="feature-text">Scalable Space</div>
                            </div>
                        </div>
                        <a href="#" class="service-cta">
                            Explore Warehouse Solutions
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                    <div class="zigzag-service-visual">
                        <div class="service-image-container">
                            <img src="https://images.unsplash.com/photo-1556740738-b6a63e27c4df?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" alt="Warehouse Solutions">
                            <div class="service-stats">
                                <span class="stat-number">50+</span>
                                <span class="stat-label">Locations</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Supply Chain Management Service -->
                <div class="zigzag-service-item left-aligned" data-aos="fade-right" data-aos-duration="1200">
                    <div class="zigzag-service-content">
                        <div class="service-icon-large">
                            <i class="fas fa-network-wired"></i>
                        </div>
                        <h3 class="service-title-large">Supply Chain Management</h3>
                        <p class="service-description-large">
                            End-to-end supply chain optimization with AI-driven analytics and predictive modeling. 
                            Our comprehensive management solutions streamline operations, reduce costs, and enhance 
                            visibility across your entire logistics network.
                        </p>
                        <div class="service-features-grid">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-brain"></i>
                                </div>
                                <div class="feature-text">AI-Driven Analytics</div>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-eye"></i>
                                </div>
                                <div class="feature-text">Full Visibility</div>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-chart-pie"></i>
                                </div>
                                <div class="feature-text">Cost Optimization</div>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-cogs"></i>
                                </div>
                                <div class="feature-text">Process Automation</div>
                            </div>
                        </div>
                        <a href="#" class="service-cta">
                            Explore SCM Solutions
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                    <div class="zigzag-service-visual">
                        <div class="service-image-container">
                            <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" alt="Supply Chain Management">
                            <div class="service-stats">
                                <span class="stat-number">35%</span>
                                <span class="stat-label">Cost Savings</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Enhanced Services Section End -->

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
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Initialize AOS (Animate On Scroll) library
        AOS.init({
            duration: 1000,
            once: true,
            easing: 'ease-out-cubic',
            offset: 100
        });
        
        // Enhanced hover effects for service icons
        document.querySelectorAll('.service-icon-large').forEach(icon => {
            icon.addEventListener('mouseenter', () => {
                icon.style.transform = 'rotate(10deg) scale(1.1) translateY(-5px)';
                icon.style.boxShadow = '0 25px 50px rgba(13, 110, 253, 0.4)';
            });
            
            icon.addEventListener('mouseleave', () => {
                icon.style.transform = 'rotate(0deg) scale(1) translateY(0px)';
                icon.style.boxShadow = '0 20px 40px rgba(13, 110, 253, 0.3)';
            });
        });

        

        // Interactive stats animation
        const observerOptions = {
            threshold: 0.5,
            rootMargin: '0px 0px -100px 0px'
        };

        const statsObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const statNumber = entry.target.querySelector('.stat-number');
                    if (statNumber) {
                        statNumber.style.animation = 'float 2s ease-in-out infinite';
                    }
                }
            });
        }, observerOptions);

        document.querySelectorAll('.service-stats').forEach(stat => {
            statsObserver.observe(stat);
        });

        // Dynamic gradient animation for CTAs
        document.querySelectorAll('.service-cta').forEach(cta => {
            cta.addEventListener('mousemove', (e) => {
                const rect = cta.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                
                cta.style.background = `radial-gradient(circle at ${x}px ${y}px, var(--accent), var(--primary))`;
            });
            
            cta.addEventListener('mouseleave', () => {
                cta.style.background = 'linear-gradient(135deg, var(--primary), var(--accent))';
            });
        });

        // Smooth reveal animation for features
        const featureObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }, index * 100);
                }
            });
        }, { threshold: 0.3 });

        document.querySelectorAll('.feature-item').forEach(feature => {
            feature.style.opacity = '0';
            feature.style.transform = 'translateY(20px)';
            feature.style.transition = 'all 0.6s ease';
            featureObserver.observe(feature);
        });
    </script>
</body>

</html>