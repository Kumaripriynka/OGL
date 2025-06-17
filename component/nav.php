<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OneGlobe Logistics - Premium Navigation</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary: #007BBD;        /* Deep Blue from globe & plane trail */
            --secondary: #37B34A;      /* Bright Green from land areas */
            --light: #F0FAFF;          /* Soft light background similar to white stroke in logo */
            --dark: #003249;           /* Navy Blue (deep globe shadow) */
            
            /* Gradients using the new color scheme */
            --primary-gradient: linear-gradient(135deg, #007BBD 0%, #003249 100%);
            --secondary-gradient: linear-gradient(135deg, #37B34A 0%, #007BBD 100%);
            --accent-gradient: linear-gradient(135deg, #007BBD 0%, #37B34A 100%);
            --dark-gradient: linear-gradient(135deg, #003249 0%, #007BBD 100%);
            
            --glass-bg: rgba(240, 250, 255, 0.95);
            --shadow-primary: 0 20px 40px rgba(0, 123, 189, 0.15);
            --shadow-hover: 0 25px 50px rgba(0, 123, 189, 0.25);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', 'Segoe UI', -apple-system, BlinkMacSystemFont, sans-serif;
            line-height: 1.6;
            overflow-x: hidden;
        }

        /* Top Header Bar */
        .top-header {
            background: var(--dark-gradient);
            color: white;
            padding: 12px 0;
            position: relative;
            overflow: hidden;
        }

        .top-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(55, 179, 74, 0.2), transparent);
            animation: shimmer 3s infinite;
        }

        @keyframes shimmer {
            0% { left: -100%; }
            100% { left: 100%; }
        }

        .social-icons {
            display: flex;
            gap: 8px;
            align-items: center;
        }

        .social-icons a {
            color: white;
            font-size: 16px;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            padding: 10px;
            border-radius: 12px;
            background: rgba(55, 179, 74, 0.2);
            backdrop-filter: blur(10px);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            position: relative;
            overflow: hidden;
        }

        .social-icons a::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(55, 179, 74, 0.3), transparent);
            transition: left 0.5s;
        }

        .social-icons a:hover::before {
            left: 100%;
        }

        .social-icons a:hover {
            background: var(--secondary);
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 8px 25px rgba(55, 179, 74, 0.4);
        }

        .contact-info {
            display: flex;
            gap: 30px;
            align-items: center;
            justify-content: flex-end;
        }

        .contact-info span {
            display: flex;
            align-items: center;
            gap: 10px;
            color: #e2e8f0;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .contact-info span:hover {
            color: white;
            transform: translateX(-5px);
        }

        .contact-info i {
            color: var(--secondary);
            font-size: 18px;
            padding: 8px;
            border-radius: 8px;
            background: rgba(55, 179, 74, 0.2);
        }

        /* Main Navigation */
        .main-navbar {
            background: var(--glass-bg);
            backdrop-filter: blur(20px);
            box-shadow: var(--shadow-primary);
            border: none;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: sticky;
            top: 0;
            z-index: 1000;
            padding: 0;
        }

        .main-navbar.scrolled {
            box-shadow: var(--shadow-hover);
            background: rgba(240, 250, 255, 0.98);
        }

        .navbar-container {
            padding: 10px 20px;
        }

        /* Enhanced Logo Section - Made Bigger and More Attractive */
        .navbar-brand {
            padding: 0 !important;
            margin-right: 30px;
            display: flex;
            align-items: center;
            gap: 15px;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            text-decoration: none;
            position: relative;
        }

        .navbar-brand:hover {
            transform: scale(1.03);
        }

        .logo-container {
            position: relative;
            width: 70px;
            height: 70px;
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            background: var(--light);
            box-shadow: 0 10px 30px rgba(0, 123, 189, 0.2);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .logo-container::before {
            content: '';
            position: absolute;
            top: -3px;
            left: -3px;
            right: -3px;
            bottom: -3px;
            border-radius: 23px;
            background: var(--accent-gradient);
            z-index: -1;
            animation: logoRotate 10s linear infinite;
        }

        .logo-container::after {
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            border-radius: 22px;
            background: var(--secondary-gradient);
            z-index: -2;
            animation: logoRotate 15s linear infinite reverse;
        }

        .logo-container:hover {
            transform: translateY(-5px) rotate(5deg) scale(1.05);
            box-shadow: 0 15px 40px rgba(0, 123, 189, 0.3);
        }

        @keyframes logoRotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        .navbar-brand img {
            width: 45px;
            height: 45px;
            z-index: 1;
            filter: drop-shadow(0 2px 8px rgba(0,0,0,0.15));
            transition: all 0.3s ease;
        }

        .navbar-brand:hover img {
            transform: scale(1.1) rotate(-5deg);
        }

        .brand-text {
            display: flex;
            flex-direction: column;
            gap: 4px;
        }

        .brand-text h2 {
            background: var(--primary-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-weight: 900;
            font-size: 28px;
            margin: 0;
            line-height: 0.9;
            letter-spacing: -1px;
            text-shadow: 0 2px 4px rgba(0, 123, 189, 0.1);
        }

        .brand-tagline {
            font-size: 12px;
            color: var(--primary);
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin: 0;
            background: var(--secondary-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* Navigation Links */
        .navbar-nav {
            margin-left: auto;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .navbar-nav .nav-link {
            color: var(--dark) !important;
            font-weight: 600;
            padding: 8px 16px !important;
            margin: 0 2px;
            border-radius: 12px;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
            font-size: 15px;
        }

        .navbar-nav .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 3px;
            background: var(--accent-gradient);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            transform: translateX(-50%);
            border-radius: 2px;
        }

        .navbar-nav .nav-link:hover::after,
        .navbar-nav .nav-link.active::after {
            width: 80%;
        }

        .navbar-nav .nav-link:hover,
        .navbar-nav .nav-link.active {
            color: var(--primary) !important;
            transform: translateY(-1px);
            background: rgba(55, 179, 74, 0.05);
        }

        /* Dropdown Menu */
        .dropdown-menu {
            background: var(--glass-bg);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(0, 123, 189, 0.2);
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 123, 189, 0.15);
            padding: 15px;
            margin-top: 15px;
            animation: dropdownFade 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            min-width: 250px;
        }

        @keyframes dropdownFade {
            from {
                opacity: 0;
                transform: translateY(-20px) scale(0.95);
            }
            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        .dropdown-item {
            padding: 15px 20px;
            border-radius: 12px;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            color: var(--dark);
            font-weight: 500;
            margin-bottom: 5px;
            position: relative;
            overflow: hidden;
        }

        .dropdown-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: var(--secondary-gradient);
            transition: left 0.3s ease;
            z-index: -1;
        }

        .dropdown-item:hover::before {
            left: 0;
        }

        .dropdown-item:hover {
            color: white;
            transform: translateX(10px);
            box-shadow: 0 5px 15px rgba(55, 179, 74, 0.3);
        }

        /* CTA Button Section - Book Order */
        .cta-section {
            background: var(--primary-gradient);
            color: white;
            padding: 12px 24px;
            border-radius: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
            margin-left: 20px;
            box-shadow: var(--shadow-primary);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
            font-weight: 600;
            font-size: 14px;
            text-decoration: none;
            cursor: pointer;
        }

        .cta-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(55, 179, 74, 0.3), transparent);
            transition: left 0.5s;
        }

        .cta-section:hover::before {
            left: 100%;
        }

        .cta-section:hover {
            transform: translateY(-3px) scale(1.02);
            box-shadow: var(--shadow-hover);
            background: var(--secondary-gradient);
            color: white;
            text-decoration: none;
        }

        .cta-section i {
            font-size: 18px;
            animation: ctaPulse 2s infinite;
            padding: 6px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.2);
        }

        @keyframes ctaPulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.15); }
        }

        /* Mobile Navbar Toggler */
        .navbar-toggler {
            border: none;
            padding: 15px;
            border-radius: 15px;
            background: var(--primary-gradient);
            box-shadow: 0 5px 15px rgba(0, 123, 189, 0.3);
            transition: all 0.3s ease;
        }

        .navbar-toggler:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 25px rgba(0, 123, 189, 0.4);
            background: var(--secondary-gradient);
        }

        .navbar-toggler:focus {
            box-shadow: 0 8px 25px rgba(0, 123, 189, 0.4);
        }

        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.9%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='m4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
            width: 26px;
            height: 26px;
        }

        /* Responsive Design */
        @media (max-width: 991px) {
            .top-header {
                text-align: center;
                padding: 15px 0;
            }
            
            .contact-info {
                flex-direction: column;
                gap: 15px;
                margin-top: 15px;
            }
            
            .social-icons {
                justify-content: center;
                margin-bottom: 15px;
            }
            
            .navbar-brand {
                margin: 15px 0;
                gap: 20px;
            }
            
            .logo-container {
                width: 90px;
                height: 90px;
            }
            
            .navbar-brand img {
                width: 60px;
                height: 60px;
            }
            
            .brand-text h2 {
                font-size: 36px;
            }
            
            .brand-tagline {
                font-size: 14px;
            }
            
            .cta-section {
                margin: 15px 0;
                justify-content: center;
            }
            
            .navbar-nav .nav-link {
                text-align: center;
                margin: 8px 15px;
            }
        }

        @media (max-width: 576px) {
            .navbar-brand {
                gap: 15px;
            }
            
            .logo-container {
                width: 75px;
                height: 75px;
            }
            
            .navbar-brand img {
                width: 50px;
                height: 50px;
            }
            
            .brand-text h2 {
                font-size: 30px;
            }
            
            .brand-tagline {
                font-size: 12px;
                letter-spacing: 1px;
            }

            .contact-info span {
                font-size: 14px;
            }
        }

        /* Scroll animations */
        @media (prefers-reduced-motion: no-preference) {
            .fade-in {
                opacity: 0;
                transform: translateY(30px);
                animation: fadeInUp 0.8s ease forwards;
            }

            @keyframes fadeInUp {
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
        }
    </style>
</head>
<body>
    <!-- Top Header Bar -->
    <div class="top-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="social-icons">
                        <a href="#" aria-label="Facebook" title="Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" aria-label="Twitter" title="Twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" aria-label="Instagram" title="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" aria-label="LinkedIn" title="LinkedIn">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" aria-label="YouTube" title="YouTube">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contact-info">
                        <span>
                            <i class="fas fa-phone"></i> 
                            +012 345 6789
                        </span>
                        <span>
                            <i class="fas fa-envelope"></i> 
                            info@oneglobelogistics.com
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Navigation -->
    <nav class="navbar navbar-expand-lg main-navbar">
        <div class="container-fluid navbar-container">
            <a href="index.php" class="navbar-brand">
                <div class="logo-container">
                    <img src="img/OneGlobe Logo.png" alt="OneGlobe Logo">
                </div>
                <div class="brand-text">
                    <h2>OneGlobe</h2>
                    <p class="brand-tagline">Logistics HK</p>
                </div>
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse " id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="index.php" class="nav-link">Home</a>
                    <a href="about.php" class="nav-link">About</a>
                    <a href="service.php" class="nav-link">Services</a>
                    <!-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>
                        <div class="dropdown-menu">
                            <a href="price.php" class="dropdown-item">
                                <i class="fas fa-dollar-sign me-2"></i>Pricing Plan
                            </a>
                            <a href="feature.php" class="dropdown-item">
                                <i class="fas fa-star me-2"></i>Features
                            </a>
                            <a href="quote.php" class="dropdown-item">
                                <i class="fas fa-quote-left me-2"></i>Free Quote
                            </a>
                            <a href="team.php" class="dropdown-item">
                                <i class="fas fa-users me-2"></i>Our Team
                            </a>
                            <a href="testimonial.php" class="dropdown-item">
                                <i class="fas fa-comments me-2"></i>Testimonials
                            </a>
                            <a href="404.php" class="dropdown-item">
                                <i class="fas fa-exclamation-triangle me-2"></i>404 Page
                            </a>
                        </div>
                    </div> -->
                    <a href="contact.php" class="nav-link">Contact</a>
                      <a href="gallery.php" class="nav-link">Gallery</a>
                </div>
                
                <!-- Book Order Button -->
                <a href="booking.php" class="cta-section d-none d-lg-flex">
                    <i class="fas fa-plus-circle"></i>
                    <span>Book Order</span>
                </a>
                
             
                
            </div>
        </div>
    </nav>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.main-navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Example function for live chat (if using Option 5)
        function openChat() {
            // Add your chat widget initialization here
            console.log('Opening live chat...');
        }
      
    </script>

    <script>
    // Highlight active navigation link based on current page
    document.addEventListener('DOMContentLoaded', function() {
        // Get current page URL
        const currentUrl = window.location.pathname.split('/').pop() || 'index.php';
        
        // Select all nav links
        const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
        
        // Loop through each link
        navLinks.forEach(link => {
            // Get link's href attribute and extract the filename
            const linkUrl = link.getAttribute('href').split('/').pop();
            
            // Check if current URL matches link URL
            if (currentUrl === linkUrl) {
                link.classList.add('active');
                
                // If this is a dropdown parent, also highlight the dropdown toggle
                if (link.classList.contains('dropdown-toggle')) {
                    link.classList.add('active');
                }
            }
            
            // Special case for index.php which might be just '/'
            if (currentUrl === '' && linkUrl === 'index.php') {
                link.classList.add('active');
            }
        });
        
    });
</script>

</body>
</html>