<style>
  .testimonial-section {
    background: linear-gradient(135deg, #f5f7fa 0%, #e4e9f2 100%);
    position: relative;
    overflow: hidden;
    padding: 80px 0;
    font-family: 'Segoe UI', Roboto, sans-serif;
  }

  .testimonial-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
    position: relative;
    z-index: 2;
  }

  .section-header {
    text-align: center;
    margin-bottom: 60px;
  }

  .company-logo {
    font-size: 28px;
    font-weight: 700;
    color: #2c3e50;
    margin-bottom: 5px;
  }

  .company-sublogo {
    font-size: 14px;
    color: #7f8c8d;
    letter-spacing: 2px;
    margin-bottom: 30px;
    display: block;
  }

  .section-title {
    font-size: 32px;
    font-weight: 600;
    color: #2c3e50;
    position: relative;
    display: inline-block;
    margin-bottom: 15px;
  }

  .section-title:after {
    content: '';
    position: absolute;
    bottom: -10px;
    left: 50%;
    transform: translateX(-50%);
    width: 60px;
    height: 3px;
    background: linear-gradient(to right, #3498db, #2ecc71);
  }

  .testimonial-slider {
    position: relative;
    overflow: hidden;
  }

  .testimonial-track {
    display: flex;
    transition: transform 0.5s ease;
  }

  .testimonial-card {
    background: white;
    border-radius: 12px;
    padding: 30px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
    flex: 0 0 calc(33.333% - 20px);
    margin: 0 10px;
  }

  .testimonial-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
  }

  .testimonial-card:before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 4px;
    height: 100%;
    background: linear-gradient(to bottom, #3498db, #2ecc71);
  }

  .client-name {
    font-size: 18px;
    font-weight: 600;
    color: #2c3e50;
    margin-bottom: 5px;
  }

  .client-position {
    font-size: 14px;
    color: #7f8c8d;
    margin-bottom: 20px;
    display: block;
  }

  .testimonial-text {
    font-size: 16px;
    line-height: 1.6;
    color: #34495e;
    position: relative;
    padding-left: 20px;
  }

  .testimonial-text:before {
    content: '"';
    position: absolute;
    left: 0;
    top: -5px;
    font-size: 40px;
    color: rgba(52, 152, 219, 0.1);
    font-family: Georgia, serif;
  }

  .slider-dots {
    display: flex;
    justify-content: center;
    margin-top: 30px;
  }

  .slider-dot {
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background: #bdc3c7;
    margin: 0 5px;
    cursor: pointer;
    transition: all 0.3s ease;
  }

  .slider-dot.active {
    background: #3498db;
    transform: scale(1.2);
  }

  .decoration-circle {
    position: absolute;
    border-radius: 50%;
    background: rgba(52, 152, 219, 0.05);
    z-index: 1;
  }

  .circle-1 {
    width: 200px;
    height: 200px;
    top: -50px;
    left: -50px;
  }

  .circle-2 {
    width: 300px;
    height: 300px;
    bottom: -100px;
    right: -100px;
  }

  @media (max-width: 768px) {
    .testimonial-card {
      flex: 0 0 calc(100% - 20px);
    }
    
    .section-title {
      font-size: 28px;
    }
  }
</style>

<div class="testimonial-section">
  <div class="decoration-circle circle-1"></div>
  <div class="decoration-circle circle-2"></div>
  
  <div class="testimonial-container">
    <div class="section-header">
      <div class="company-logo">OneGlobe</div>
      <span class="company-sublogo">LOGISTICS HK</span>
      <h2 class="section-title">What Our Clients Say</h2>
    </div>
    
    <div class="testimonial-slider">
      <div class="testimonial-track" id="testimonialTrack">
        <!-- Testimonial 1 -->
        <div class="testimonial-card">
          <h3 class="client-name">Priya Sharma</h3>
          <span class="client-position">Retailer, Global Mart</span>
          <p class="testimonial-text">Working with OneGlobe Logistics has been a game-changer for our retail chain. Their support team is proactive, and deliveries are consistently on schedule.</p>
        </div>
        
        <!-- Testimonial 2 -->
        <div class="testimonial-card">
          <h3 class="client-name">Rahul Mehta</h3>
          <span class="client-position">Supply Chain Manager, FMCG Co.</span>
          <p class="testimonial-text">OneGlobe Logistics has transformed our distribution process. Their prompt delivery and real-time tracking have added great efficiency to our supply chain.</p>
        </div>
        
        <!-- Testimonial 3 -->
        <div class="testimonial-card">
          <h3 class="client-name">Anita Verma</h3>
          <span class="client-position">E-Commerce Business Owner</span>
          <p class="testimonial-text">Exceptional service! My online orders are always delivered on time and in perfect condition. I trust Logistica with every shipment.</p>
        </div>
      </div>
      
      <div class="slider-dots" id="sliderDots">
        <!-- Dots will be added by JavaScript -->
      </div>
    </div>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const track = document.getElementById('testimonialTrack');
    const dotsContainer = document.getElementById('sliderDots');
    const cards = document.querySelectorAll('.testimonial-card');
    const cardWidth = cards[0].offsetWidth + 20; // Including margin
    let currentIndex = 0;
    
    // Create dots
    cards.forEach((_, index) => {
      const dot = document.createElement('div');
      dot.classList.add('slider-dot');
      if (index === 0) dot.classList.add('active');
      dot.addEventListener('click', () => {
        goToSlide(index);
      });
      dotsContainer.appendChild(dot);
    });
    
    function goToSlide(index) {
      currentIndex = index;
      track.style.transform = `translateX(-${currentIndex * cardWidth}px)`;
      
      // Update active dot
      document.querySelectorAll('.slider-dot').forEach((dot, i) => {
        if (i === currentIndex) {
          dot.classList.add('active');
        } else {
          dot.classList.remove('active');
        }
      });
    }
    
    // Auto-rotate slides (optional)
    setInterval(() => {
      currentIndex = (currentIndex + 1) % cards.length;
      goToSlide(currentIndex);
    }, 5000);
  });
</script>