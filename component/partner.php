<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logistics Partners Marquee</title>
    <style>
        /* LOGISTICS MARQUEE COMPONENT - CLEAN VERSION */
        .logistics-marquee-component {
            --primary-blue: #2563eb;
            --dark-blue: #1e40af;
            --accent-orange: #f59e0b;
            --text-dark: #1f2937;
            --bg-light: #f8fafc;
            
            font-family: 'Segoe UI', Roboto, sans-serif;
            background: var(--bg-light);
            padding: 4rem 1rem;
            width: 100%;
        }

        .marquee-wrapper {
            max-width: 1200px;
            margin: 0 auto;
        }

        .marquee-header {
            text-align: center;
            margin-bottom: 3rem;
        }

        .marquee-title {
            font-size: 2rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 0.75rem;
            position: relative;
            display: inline-block;
        }

        .marquee-title:after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background: var(--accent-orange);
        }

        .marquee-subtitle {
            font-size: 1.1rem;
            color: var(--text-dark);
            opacity: 0.8;
            max-width: 700px;
            margin: 0 auto;
        }

        /* Marquee Track - Clean Version */
        .marquee-track {
            display: flex;
            width: max-content;
            animation: scroll 35s linear infinite;
            padding: 1.5rem 0;
        }

        .marquee-track:hover {
            animation-play-state: paused;
        }

        .marquee-partner {
            flex: 0 0 auto;
            margin: 0 2.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            filter: grayscale(100%);
            opacity: 0.7;
        }

        .marquee-partner:hover {
            transform: scale(1.15);
            filter: grayscale(0%);
            opacity: 1;
        }

        .marquee-partner img {
            height: 50px;
            width: auto;
            max-width: 140px;
            object-fit: contain;
        }

        @keyframes scroll {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }

        .marquee-actions {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-top: 2rem;
        }

        .marquee-btn {
            background: linear-gradient(135deg, var(--primary-blue), var(--dark-blue));
            color: white;
            border: none;
            padding: 0.8rem 1.8rem;
            border-radius: 6px;
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .marquee-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(37, 99, 235, 0.2);
        }

        .marquee-btn.secondary {
            background: white;
            border: 1px solid var(--primary-blue);
            color: var(--primary-blue);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .logistics-marquee-component {
                padding: 3rem 1rem;
            }
            
            .marquee-title {
                font-size: 1.6rem;
            }
            
            .marquee-partner {
                margin: 0 1.5rem;
            }
            
            .marquee-partner img {
                height: 40px;
            }
            
            .marquee-actions {
                flex-direction: column;
                align-items: center;
            }
            
            .marquee-btn {
                width: 100%;
                max-width: 250px;
                text-align: center;
                justify-content: center;
            }
        }
    </style>
</head>
<body>
    <!-- LOGISTICS MARQUEE COMPONENT - CLEAN VERSION -->
    <section class="logistics-marquee-component">
        <div class="marquee-wrapper">
            <div class="marquee-header">
                <h2 class="marquee-title">Global Logistics Partners</h2>
                <p class="marquee-subtitle">Trusted by the world's leading shipping and supply chain companies</p>
            </div>
            
            <div class="marquee-container" style="overflow: hidden;">
                <div class="marquee-track">
                    <!-- Logistics Partner Logos - No Containers -->
                    <div class="marquee-partner">
                        <img src="https://cdn.worldvectorlogo.com/logos/maersk-1.svg" alt="Maersk">
                    </div>
                    <div class="marquee-partner">
                        <img src="https://cdn.worldvectorlogo.com/logos/fedex-express-6.svg" alt="FedEx">
                    </div>
                    <div class="marquee-partner">
                        <img src="https://cdn.worldvectorlogo.com/logos/ups-3.svg" alt="UPS">
                    </div>
                    <div class="marquee-partner">
                        <img src="https://cdn.worldvectorlogo.com/logos/dhl-8.svg" alt="DHL">
                    </div>
                    <div class="marquee-partner">
                        <img src="https://cdn.worldvectorlogo.com/logos/union-pacific.svg" alt="Union Pacific">
                    </div>
                    <div class="marquee-partner">
                        <img src="https://cdn.worldvectorlogo.com/logos/csx-1.svg" alt="CSX">
                    </div>
                    <div class="marquee-partner">
                        <img src="https://cdn.worldvectorlogo.com/logos/dsv-1.svg" alt="DSV">
                    </div>
                    <div class="marquee-partner">
                        <img src="https://cdn.worldvectorlogo.com/logos/kuehne-nagel.svg" alt="Kuehne+Nagel">
                    </div>
                    <!-- Duplicated for seamless looping -->
                    <div class="marquee-partner">
                        <img src="https://cdn.worldvectorlogo.com/logos/maersk-1.svg" alt="Maersk">
                    </div>
                    <div class="marquee-partner">
                        <img src="https://cdn.worldvectorlogo.com/logos/fedex-express-6.svg" alt="FedEx">
                    </div>
                    <div class="marquee-partner">
                        <img src="https://cdn.worldvectorlogo.com/logos/ups-3.svg" alt="UPS">
                    </div>
                    <div class="marquee-partner">
                        <img src="https://cdn.worldvectorlogo.com/logos/dhl-8.svg" alt="DHL">
                    </div>
                </div>
            </div>
            
           
        </div>
    </section>
    <!-- END COMPONENT -->
    
    <script>
        // Component JavaScript
        document.addEventListener('DOMContentLoaded', function() {
            const track = document.querySelector('.marquee-track');
            if (track) {
                track.addEventListener('mouseenter', () => {
                    track.style.animationPlayState = 'paused';
                });
                
                track.addEventListener('mouseleave', () => {
                    track.style.animationPlayState = 'running';
                });
            }
        });
    </script>
</body>
</html>