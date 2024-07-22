<!DOCTYPE html>
<html lang="en">


  <!-- =============================== Header include ===================================== -->
  <?php $page = 'Contact'; include 'header.php'; ?>
  <!-- =============================== Header include ===================================== -->

  
  <main id="main">

    <section class="hero-section inner-page">
      <div class="wave">

        <svg width="1920px" height="265px" viewBox="0 0 1920 265" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
              <path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,667 L1017.15166,667 L0,667 L0,439.134243 Z" id="Path"></path>
            </g>
          </g>
        </svg>

      </div>

      <div class="container">
        <div class="row align-items-center">
          <div class="col-12">
            <div class="row justify-content-center">
              <div class="col-md-7 text-center hero-text">
                <h1 data-aos="fade-up" data-aos-delay="">Get in touch</h1>
                <!--<p class="mb-5" data-aos="fade-up" data-aos-delay="100">Message From The Manpower Agency Qatar Team</p>-->
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>

    <section class="section">
      <div class="container">
        <div class="row mb-5 align-items-end">
          <div class="col-md-6" data-aos="fade-up">

            <h2>Associate Offices</h2>
            <p class="mb-0">
            <h6 style="color:brown; display:inline ">Africa: </h6>Ethiopia, Ghana, Kenya, Malawi, Morocco, Sierra leone, Tanzania,Tunisia, Uganda.<br>
            
                <h6 style="color:brown; display:inline ">Asia: </h6>Bangladesh, India, Indonesia, Nepal, Pakistan, Philippines, Sri Lanka, Thailand.</p>
          </div>

        </div>

        <div class="row">
          <div class="col-md-4 ms-auto order-2" data-aos="fade-up">
            <ul class="list-unstyled">
              <li class="mb-3">
                <strong class="d-block mb-1"><i class="fa fa-map-marker" style="color:brown"></i> Address</strong>
                <span>Office
                      Almuntaza trading center,
                        Building B,<br>3rd floor office # 4 | 
                      P.O. Box 16167</span>
              </li>
              <li class="mb-3">
                <strong class="d-block mb-1"><i class="fa fa-phone" style="color:brown"></i> Phone</strong>
                <span>Office : +974 66882787 <br> Cell : +974 44426374</span>
              </li>
              <li class="mb-3">
                <strong class="d-block mb-1"><i class="fa fa-envelope" style="color:brown"></i> Email</strong>
                <span>support@manpowerqa.com</span>
                <span>manpoweragencyqa@gmail.com</span>
              </li>
            </ul>
          </div>

          <div class="col-md-6 mb-5 mb-md-0" data-aos="fade-up">
            <form class="php-email-form" action="contact-send.php" method="post" name="myForm" onsubmit="return validateForm()" required="">

              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="name">Name</label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="Enter Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <label for="name">Email</label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Enter Your Email id" required>
                </div>
                <div class="col-md-12 form-group mt-3">
                  <label for="name">Subject</label>
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                </div>
                <div class="col-md-12 form-group mt-3">
                  <label for="name">Message</label>
                  <textarea class="form-control" name="message" placeholder="message" required></textarea>
                </div>

                <div class="col-md-12 mb-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>

                <div class="col-md-6 form-group">
                  <input id="btn-2" type="submit" name="submit" value="Send Message" onclick="check()" data-aos="fade-up" class="btn btn-primary aos-init aos-animate">
                </div>
              </div>

            </form>
          </div>

        </div>
      </div>
    </section>



  <!------------------------------------------------------------------->
    <?php include 'Testimonials.php' ?>
  <!------------------------------------------------------------------->

  </main><!-- End #main -->


  

  <!-- =============================== footer include ===================================== -->
  <?php include 'footer.php'; ?>
  <!-- =============================== footer include ===================================== -->

  

</body>

</html>