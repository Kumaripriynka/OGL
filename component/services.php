 <style>
.service-card {
  height: 380px;
  cursor: pointer;
  position: relative;
  transition: transform 0.3s ease;
}

.service-card img {
  height: 100%;
  object-fit: cover;
  transition: transform 0.5s ease;
}

.service-card:hover img {
  transform: scale(1.05);
}

.card-title-bar {
  background: rgba(0, 0, 0, 0.4);
  backdrop-filter: blur(3px);
}

.service-overlay {
  position: absolute;
  inset: 0;
  background: rgba(0, 0, 0, 0.6);
  backdrop-filter: blur(10px);
  opacity: 0;
  transition: opacity 0.4s ease-in-out;
  color: white;
}

.service-card:hover .service-overlay {
  opacity: 1;
}

</style>

<div class="container-xxl py-5 bg-light">
  <div class="container py-5">
    <div class="text-center mb-5">
      <h6 class="text-primary text-uppercase fw-semibold">Our Services</h6>
      <h1 class="display-5 fw-bold">Explore Our Professional Solutions</h1>
    </div>
    <div class="row g-4">

      <!-- Card 1 -->
      <div class="col-md-6 col-lg-4">
        <div class="service-card position-relative rounded-4 overflow-hidden">
          <img src="img/service-1.jpg" class="img-fluid w-100 h-100 object-fit-cover" alt="Air Freight" />
          <div class="card-title-bar position-absolute top-0 start-0 w-100 px-3 py-2">
            <h4 class="text-white fw-semibold mb-0">Air Freight</h4>
          </div>
          <div class="service-overlay p-4 d-flex flex-column justify-content-center">
            <p class="text-white-50 small">
              Swift and secure air cargo services tailored for time-sensitive deliveries across the globe.
            </p>
            <!-- <a href="#" class="btn btn-outline-light btn-sm mt-2">Read More</a> -->
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-md-6 col-lg-4">
        <div class="service-card position-relative rounded-4 overflow-hidden">
          <img src="img/service-2.jpg" class="img-fluid w-100 h-100 object-fit-cover" alt="Ocean Freight" />
          <div class="card-title-bar position-absolute top-0 start-0 w-100 px-3 py-2">
            <h4 class="text-white fw-semibold mb-0">Ocean Freight</h4>
          </div>
          <div class="service-overlay p-4 d-flex flex-column justify-content-center">
            <p class="text-white-50 small">
              Cost-effective international shipping with end-to-end containerized logistics support.
            </p>
            <!-- <a href="#" class="btn btn-outline-light btn-sm mt-2">Read More</a> -->
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-md-6 col-lg-4">
        <div class="service-card position-relative rounded-4 overflow-hidden">
          <img src="img/service-3.jpg" class="img-fluid w-100 h-100 object-fit-cover" alt="Road Freight" />
          <div class="card-title-bar position-absolute top-0 start-0 w-100 px-3 py-2">
            <h4 class="text-white fw-semibold mb-0">Road Freight</h4>
          </div>
          <div class="service-overlay p-4 d-flex flex-column justify-content-center">
            <p class="text-white-50 small">
              Reliable and efficient overland transportation with real-time tracking capabilities.
            </p>
            <!-- <a href="#" class="btn btn-outline-light btn-sm mt-2">Read More</a> -->
          </div>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="col-md-6 col-lg-4">
        <div class="service-card position-relative rounded-4 overflow-hidden">
          <img src="img/service-4.jpg" class="img-fluid w-100 h-100 object-fit-cover" alt="Train Freight" />
          <div class="card-title-bar position-absolute top-0 start-0 w-100 px-3 py-2">
            <h4 class="text-white fw-semibold mb-0">Train Freight</h4>
          </div>
          <div class="service-overlay p-4 d-flex flex-column justify-content-center">
            <p class="text-white-50 small">
              Eco-friendly and fast rail cargo solutions covering major trade corridors.
            </p>
            <!-- <a href="#" class="btn btn-outline-light btn-sm mt-2">Read More</a> -->
          </div>
        </div>
      </div>

      <!-- Card 5 -->
      <div class="col-md-6 col-lg-4">
        <div class="service-card position-relative rounded-4 overflow-hidden">
          <img src="img/service-5.jpg" class="img-fluid w-100 h-100 object-fit-cover" alt="Customs Clearance" />
          <div class="card-title-bar position-absolute top-0 start-0 w-100 px-3 py-2">
            <h4 class="text-white fw-semibold mb-0">Customs Clearance</h4>
          </div>
          <div class="service-overlay p-4 d-flex flex-column justify-content-center">
            <p class="text-white-50 small">
              Seamless customs handling to eliminate delays and ensure compliance with global trade laws.
            </p>
            <!-- <a href="#" class="btn btn-outline-light btn-sm mt-2">Read More</a> -->
          </div>
        </div>
      </div>

      <!-- Card 6 -->
      <div class="col-md-6 col-lg-4">
        <div class="service-card position-relative rounded-4 overflow-hidden">
          <img src="img/service-6.jpg" class="img-fluid w-100 h-100 object-fit-cover" alt="Warehouse Solutions" />
          <div class="card-title-bar position-absolute top-0 start-0 w-100 px-3 py-2">
            <h4 class="text-white fw-semibold mb-0">Warehouse Solutions</h4>
          </div>
          <div class="service-overlay p-4 d-flex flex-column justify-content-center">
            <p class="text-white-50 small">
              Modern warehousing with inventory management, security, and scalable storage options.
            </p>
            <!-- <a href="#" class="btn btn-outline-light btn-sm mt-2">Read More</a> -->
          </div>
        </div>
      </div>

    </div>
  </div>
</div>