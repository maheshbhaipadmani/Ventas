<?php
$Title = "Ventas CRM - Empowering Ceramic Exporters & Traders";
$MetaDescription = "Learn more about Ventas CRM, a dedicated platform designed to simplify lead management for exporters and traders in the ceramic industry. Our mission is to help businesses grow with efficiency and ease.";
$MetaKeywords = "About Ventas CRM, Ceramic Exporter Solutions, CRM for Traders, Lead Management Software, Export Business Tools, Ventas Team, Ceramic Industry CRM";
?>

<?php
include __DIR__ . '/assets/A_Layout/Header/header.php';
?>


    <!-- <section
    class="hero-section"
    style="
      background-image: url(./assets/img/home/contact-us-banner.9a7db494b218f54277d5.avif);
      background-size: cover;
      background-position: center;
    "
  >
    <div class="container hero-content">
      <div class="container">
        <h1 class="display-4 fw-bold text-white">Request a demo</h1>
        <p class="lead">
          Discover the power of Ventas! Book a demo and see how our CRM transforms your lead management into a seamless experience.
        </p>
      </div>
    </div>
  </section> -->

<!-- book now -->
<section class="booking-section">
  <div class="floating-shapes">
    <div class="shape"></div>
    <div class="shape"></div>
    <div class="shape"></div>
    <div class="shape"></div>
  </div>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-5 content-wrapper">
        <div class="feature-badge animate__animated animate__fadeIn">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
            class="bi bi-lightning-charge-fill" viewBox="0 0 16 16">
            <path
              d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z" />
          </svg>
          Book in 2 minutes
        </div>
        <div class="icon-wrapper animate__animated animate__fadeInLeft">
          <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" fill="#343f52" class="bi bi-person-check"
            viewBox="0 0 16 16">
            <path
              d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4" />
            <path
              d="M8.256 14a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z" />
          </svg>
        </div>
        <h3 class="display-4 fw-bold mb-4 animate__animated animate__fadeInUp">
          Book Your Demo Now
        </h3>
        <p class="lead text-muted mb-4 animate__animated animate__fadeInUp animate__delay-1s">
          We're here to provide you with a demo that shows how our software
          can simplify and enhance your lead management operations,
          seamlessly fitting into your existing workflow.
        </p>
      </div>

      <div class="col-lg-6 offset-lg-1">
        <form id="bookingForm" class="custom-form needs-validation animate__animated animate__fadeInRight" novalidate>
          <div class="form-sections">
            <div class="row g-4">
              <div class="col-md-6">
                <div class="form-floating">
                  <input type="text" class="form-control" id="name" placeholder="Your Name" required />
                  <label for="name">Full Name</label>
                  <div class="invalid-feedback">Please enter your name</div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-floating">
                  <input type="email" class="form-control" id="email" placeholder="name@example.com" required />
                  <label for="email">Email Address</label>
                  <div class="invalid-feedback">Please enter a valid email</div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-floating">
                  <input type="tel" class="form-control" id="phone" placeholder="Phone Number" required />
                  <label for="phone">Phone Number</label>
                  <div class="invalid-feedback">Please enter your phone number</div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-floating">
                  <input type="text" class="form-control" id="company" placeholder="Company Name" required />
                  <label for="company">Company Name</label>
                  <div class="invalid-feedback">Please enter your company name</div>
                </div>
              </div>
              <!-- Team Size Dropdown -->
              <div class="col-md-6">
                <div class="form-floating">
                  <select class="form-control" id="teamSize" required>
                    <option value="" disabled selected>Select Team Size</option>
                    <option value="0-4">0-4</option>
                    <option value="4-9">4-9</option>
                    <option value="9-13">9-13</option>
                  </select>
                  <label for="teamSize">Team Size</label>
                  <div class="invalid-feedback">Please select your team size</div>
                </div>
              </div>
              <!-- Date and Time Picker -->
              <div class="col-md-6">
                <div class="form-floating">
                  <input type="datetime-local" class="form-control" id="dateTime" required />
                  <label for="dateTime">Preferred Date & Time</label>
                  <div class="invalid-feedback">Please select a date and time</div>
                </div>
              </div>
              <div class="col-12">
                <div class="form-floating">
                  <textarea class="form-control" id="message" style="height: 120px" placeholder="Your Message"
                    required></textarea>
                  <label for="message">Tell us about your needs</label>
                  <div class="invalid-feedback">Please tell us about your needs</div>
                </div>
              </div>
              <div class="col-6">
                <button type="submit" class="btn text-white w-100">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-calendar-check me-1" viewBox="0 0 16 16">
                    <path
                      d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0" />
                    <path
                      d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z" />
                  </svg>
                  Send Message
                </button>
              </div>
            </div>
          </div>

          <div class="success-message" id="successMessage">
            <div class="success-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check-lg"
                viewBox="0 0 16 16">
                <path
                  d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z" />
              </svg>
            </div>
            <h3 class="mb-3">Booking Confirmed!</h3>
            <p class="text-muted">We'll be in touch shortly with your demo details.</p>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>



<?php
include __DIR__ . '/assets/A_Layout/Footer/footer.php';
?>

