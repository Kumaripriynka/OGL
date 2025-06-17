<style>
  .team-item {
    position: relative;
    height: 420px;
    overflow: hidden;
    border-radius: 16px;
    background-color: var(--light);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
  }

  .team-item:hover {
    transform: translateY(-8px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
  }

  .team-img {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
    z-index: 1;
  }

  .team-item:hover .team-img {
    transform: scale(1.1);
  }

  .team-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(to bottom, rgba(0,0,0,0.2), rgba(0,0,0,0.65));
    z-index: 2;
    transition: opacity 0.3s ease;
  }

  .team-content {
    position: relative;
    z-index: 3;
    color: #fff;
    padding: 20px;
    text-align: center;
  }

  .team-content h5 {
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 4px;
  }

  .team-content p {
    font-size: 14px;
    color: #e0e0e0;
    margin-bottom: 10px;
  }

  .social-icons a {
    color: #fff;
    margin: 0 6px;
    font-size: 16px;
    transition: color 0.3s ease;
  }

  .social-icons a:hover {
    color: var(--secondary);
  }
</style>



<div class="container-xxl py-5">
  <div class="container py-5">
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
      <h6 class="text-secondary text-uppercase">Our Team</h6>
      <h1 class="mb-5">Expert Team Members</h1>
    </div>
    <div class="row g-4">

      <!-- Team Member -->
      <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
        <div class="team-item">
          <img src="img/dummy.png" alt="Team Member" class="team-img">
          <div class="team-overlay"></div>
          <div class="team-content">
            <h5>Sohan Singh</h5>
            <p>Owner</p>
            <div class="social-icons">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
          </div>
        </div>
      </div>

      <!-- More Members -->
      <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
        <div class="team-item">
          <img src="img/dummy.png" alt="Team Member" class="team-img">
          <div class="team-overlay"></div>
          <div class="team-content">
            <h5>Rahul Verma</h5>
            <p>Transport Head</p>
            <div class="social-icons">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
        <div class="team-item">
          <img src="img/dummy.png" alt="Team Member" class="team-img">
          <div class="team-overlay"></div>
          <div class="team-content">
            <h5>Sunita Rani</h5>
            <p>Warehouse Expert</p>
            <div class="social-icons">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.9s">
        <div class="team-item">
          <img src="img/dummy.png" alt="Team Member" class="team-img">
          <div class="team-overlay"></div>
          <div class="team-content">
            <h5>Amit Kumar</h5>
            <p>Operations Lead</p>
            <div class="social-icons">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>