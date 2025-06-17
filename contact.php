<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Logistica - Shipping Company Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Roboto:wght@500;700&display=swap"
      rel="stylesheet"
    />

    <!-- Icon Font Stylesheet -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />

    <!-- css for modal class -->
    <style>
      .modal {
        transition: none !important;
      }
    </style>
  </head>

  <body>
    <!-- Spinner Start -->
    <div
      id="spinner"
      class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
    >
      <div
        class="spinner-grow text-primary"
        style="width: 3rem; height: 3rem"
        role="status"
      >
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
    <div class="container-fluid page-header py-5" style="margin-bottom: 6rem">
      <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">
          Contact Us
        </h1>
        <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a class="text-white" href="#">Home</a>
            </li>
            <li class="breadcrumb-item">
              <a class="text-white" href="#">Pages</a>
            </li>
            <li class="breadcrumb-item text-white active" aria-current="page">
              Contact
            </li>
          </ol>
        </nav>
      </div>
    </div>
    <!-- Page Header End -->

    <!-- Contact Start -->
    <div class="container-fluid overflow-hidden py-5 px-lg-0">
      <div class="container contact-page py-5 px-lg-0">
        <div class="row g-5 mx-lg-0">
          <div class="col-md-6 contact-form wow fadeIn" data-wow-delay="0.1s">
            <h6 class="text-secondary text-uppercase">Get In Touch</h6>
            <h1 class="mb-4">Contact For Any Query</h1>
            
            <div class="bg-light p-4">
             <form method="POST" action="contact_handler.php" id="contactForm" novalidate>
  <div class="row g-3">
    <div class="col-md-6">
      <div class="form-floating">
        <input
          type="text"
          class="form-control"
          id="name"
          name="name"
          placeholder="Your Name"
          pattern="^[A-Za-z\s]{2,50}$"
          title="Name should contain only letters and spaces (2-50 characters)."
          required
        />
        <label for="name">Your Name</label>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-floating">
        <input
          type="email"
          class="form-control"
          id="email"
          name="email"
          placeholder="Your Email"
          required
        />
        <label for="email">Your Email</label>
      </div>
    </div>
    <div class="col-12">
      <div class="form-floating">
        <input
          type="text"
          class="form-control"
          id="subject"
          name="subject"
          placeholder="Subject"
          minlength="3"
          maxlength="100"
          required
        />
        <label for="subject">Subject</label>
      </div>
    </div>
    <div class="col-12">
      <div class="form-floating">
        <textarea
          class="form-control"
          placeholder="Leave a message here"
          id="message"
          name="message"
          style="height: 100px"
          minlength="10"
          maxlength="1000"
          required
        ></textarea>
        <label for="message">Message</label>
      </div>
    </div>
    <div class="col-12">
      <button class="btn btn-primary w-100 py-3" type="submit">
        Send Message
      </button>
    </div>
  </div>
</form>

            </div>
          </div>
          <div class="col-md-6 pe-lg-0 wow fadeInRight" data-wow-delay="0.1s">
            <div class="position-relative h-100">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3566.0868620186557!2d114.16760257529295!3d22.314168379676737!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x340400c0d3fc14a5%3A0x375bdc34a0241c22!2sKowloon%20Building!5e1!3m2!1sen!2sin!4v1750140534463!5m2!1sen!2sin"
                width="600"
                height="450"
                style="border: 0"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
              ></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Contact End -->

    <!-- Footer Start -->
    <?php  
   require 'component/footer.php';
   ?>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a
      href="#"
      class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"
      ><i class="bi bi-arrow-up"></i
    ></a>

    <!-- Success Modal -->
    <div
      class="modal"
      id="successModal"
      tabindex="-1"
      aria-labelledby="successModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header bg-success text-white">
            <h5 class="modal-title" id="successModalLabel">Success</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">Your message has been sent successfully!</div>
        </div>
      </div>
    </div>

    <!-- Error Modal -->
    <div
      class="modal"
      id="errorModal"
      tabindex="-1"
      aria-labelledby="errorModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header bg-danger text-white">
            <h5 class="modal-title" id="errorModalLabel">Error</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            Failed to send your message. Please try again later.
          </div>
        </div>
      </div>
    </div>

    <script>
      // Form submission with AJAX
      document
        .getElementById("contactForm")
        .addEventListener("submit", function (e) {
          e.preventDefault();

          const formData = new FormData(this);

          fetch("contact_handler.php", {
            method: "POST",
            body: formData,
          })
            .then((response) => response.text())
            .then((data) => {
              if (data.trim() === "success") {
                var modal = new bootstrap.Modal(
                  document.getElementById("successModal")
                );
                modal.show();
                document.getElementById("contactForm").reset();
              } else {
                var modal = new bootstrap.Modal(
                  document.getElementById("errorModal")
                );
                modal.show();
              }
            })
            .catch((error) => {
              var modal = new bootstrap.Modal(
                document.getElementById("errorModal")
              );
              modal.show();
            });
        });

      // Cleanup after any modal closed
      document.querySelectorAll(".modal").forEach(function (modalElement) {
        modalElement.addEventListener("hidden.bs.modal", function () {
          // Remove leftover backdrop
          document
            .querySelectorAll(".modal-backdrop")
            .forEach(function (backdrop) {
              backdrop.remove();
            });
          // Remove modal-open class from body
          document.body.classList.remove("modal-open");
          // Reset body's overflow property
          document.body.style.overflow = "auto";
        });
      });
    </script>

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
    <script src="js/main.js"></script>
  </body>
</html>
