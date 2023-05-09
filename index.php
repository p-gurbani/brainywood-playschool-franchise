<!-- This code is written by Pankaj Gurbani for Brainywood 
  and is not meant to be modified, copied or re-distributed 
  in any form or way without prior consent from the author. 

  Author details
  ----------------
  Name: Pankaj Gurbani
  Email: pankajgurbani.connect@gmail.com
-->
<?php
if (isset($_POST['registersubmit'])) {
  // Get form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $investment = $_POST['investment'];
  $mobileno = $_POST['mobileno'];
  $alternatemobileno = $_POST['alternatemobileno'];
  $job = $_POST['job'];
  $city = $_POST['city'];

  // Set up email
  $to = "youremail@example.com"; // Replace with your email address
  $subject = "New lead for playschool franchise: $name";
  $message = "Name: $name\nEmail: $email\nInvestment: $investment\nMobile No.: $mobileno\nAlternate Mobile No.: $alternatemobileno\nJob Title: $job\nLocation (City): $city";
  
  // Set the email headers
  $headers = "From: $name <$email>" . "\r\n" . "Reply-To: $email";

  // Send email
  if (mail($to, $subject, $message, $headers)) {
    // echo "<p class='success'>Thank you for registering. We will contact you soon.</p>";
    // Redirect to thankyou.html
    header('Location: thankyou.html');
    exit();
  }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Brainywood Playschool Franchise</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
    />

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <link rel="icon" type="image/x-icon" href="img/favicon/favicon.ico" />
  </head>
  <body>
    <!-- Hero Section -->
    <section class="mx-sm hero-container">
      <!-- Hero Section -->
      <div class="above-the-fold">
        <img
          src="img/little-birbal-logo.png"
          class="logo"
          alt="BrainyWood Logo"
        />
        <div class="call-us">
          <img src="img/icons/phone.png" class="phone" alt="Call us" />
          <a class="call-us-phone" href="tel:+917240077077">+91 7240077077</a>
        </div>
        <h1>Welcome to BrainyWood, India's Best Playschool Franchise!</h1>
        <p class="subtitle">
          We're excited to help you bring your dream of owning a playschool to
          life. With our innovative approach to education and commitment to
          making learning a fun and meaningful experience.
        </p>
        <button class="cta btn-open-popup">Book a Free Call</button>
        <h6 class="section-sub-heading">Recognized for excellence</h6>
        <div class="logos-container">
          <img src="img/asia-book-of-records.png" alt="Asia book of records" />
          <img
            src="img/guiness-world-records.png"
            alt="Guiness world records"
          />
          <img
            src="img/india-book-of-records.png"
            alt="India book of records"
          />
        </div>
      </div>
      <div class="testimonials">
        <h2 class="text-heading-2">Testimonials</h2>
        <!-- Slider main container -->
        <div class="swiper swiper-1">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
              <div class="testimonial">
                <img src="/img/testimonial-logo.svg" alt="Logo 1" />
                <p class="quote text-small-body text-small-body-color">
                  "Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Etiam eget mauris nibh. Donec venenatis, nisl ut euismod
                  rutrum, lectus nulla aliquam enim, a rhoncus sapien metus eget
                  velit."
                </p>
                <div class="author">
                  <img src="/img/testimonial-1-person.png" alt="Person 1" />
                  <div>
                    <p class="author-name">John Doe</p>
                    <p class="author-designation">UI Designer</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="testimonial">
                <img src="/img/testimonial-logo.svg" alt="Logo 1" />
                <p class="quote text-small-body text-small-body-color">
                  "Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Etiam eget mauris nibh. Donec venenatis, nisl ut euismod
                  rutrum, lectus nulla aliquam enim, a rhoncus sapien metus eget
                  velit."
                </p>
                <div class="author">
                  <img src="/img/testimonial-1-person.png" alt="Person 1" />
                  <div>
                    <p class="author-name">John Doe</p>
                    <p class="author-designation">UI Designer</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="testimonial">
                <img src="/img/testimonial-logo.svg" alt="Logo 1" />
                <p class="quote text-small-body text-small-body-color">
                  "Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Etiam eget mauris nibh. Donec venenatis, nisl ut euismod
                  rutrum, lectus nulla aliquam enim, a rhoncus sapien metus eget
                  velit."
                </p>
                <div class="author">
                  <img src="/img/testimonial-1-person.png" alt="Person 1" />
                  <div>
                    <p class="author-name">John Doe</p>
                    <p class="author-designation">UI Designer</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- If we need pagination -->
          <div class="swiper-pagination swiper-pagination-1"></div>

          <!-- If we need navigation buttons -->
          <div class="swiper-button-prev swiper-button-prev-1"></div>
          <div class="swiper-button-next swiper-button-next-1"></div>
        </div>
      </div>
    </section>

    <!-- News Articles -->
    <section class="news-articles">
      <!-- Slider main container -->
      <div class="swiper swiper-3">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide">
            <div class="news-article-card card">
              <div class="card-body">
                IMT (Indias Memory test) - Your chance to become a Memory King
                of India. Registrations Starting Soon
              </div>
              <div class="news-publication">LOGO</div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="news-article-card card">
              <div class="card-body">
                IMT (Indias Memory test) - Your chance to become a Memory King
                of India. Registrations Starting Soon
              </div>
              <div class="news-publication">LOGO</div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="news-article-card card">
              <div class="card-body">
                IMT (Indias Memory test) - Your chance to become a Memory King
                of India. Registrations Starting Soon
              </div>
              <div class="news-publication">LOGO</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Hero videos -->
    <section class="hero-videos">
      <!-- Slider main container -->
      <div class="swiper swiper-2">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide">
            <div class="yt-video-container">
              <iframe
                src="https://www.youtube.com/embed/8eEGlA2JI6M?enablejsapi=1"
                title="Thank you, Mrs. Deepti SOMNATH KASHI, for your kind words.🌟"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen
              ></iframe>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="yt-video-container">
              <iframe
                src="https://www.youtube.com/embed/rATKtNbAEQQ?enablejsapi=1"
                title="The results of the new franchise tests of the brainywood concept are presented below."
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen
              ></iframe>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="yt-video-container">
              <iframe
                src="https://www.youtube.com/embed/H6a9D7fMu0w?enablejsapi=1"
                title="Brainywood Franchise Feedback । Banswara Rajasthan । Help Students Improve Their Memory"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen
              ></iframe>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="yt-video-container">
              <iframe
                src="https://www.youtube.com/embed/Xo3caHGvDY0?enablejsapi=1"
                title="Those who speak from personal experience provide the finest testimonials!"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen
              ></iframe>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="yt-video-container">
              <iframe
                src="https://www.youtube.com/embed/Coa0qUGvil8?enablejsapi=1"
                title="Franchise Partner Testimonial"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen
              ></iframe>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="yt-video-container">
              <iframe
                src="https://www.youtube.com/embed/bqJBNpPEQ10?enablejsapi=1"
                title="Franchise Partner Testimonial"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen
              ></iframe>
            </div>
          </div>
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination swiper-pagination-2"></div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev swiper-button-prev-2"></div>
        <div class="swiper-button-next swiper-button-next-2"></div>
      </div>
    </section>

    <!-- Get comprehensive solutions -->
    <section class="mx-sm get-comprehensive-solutions my-md">
      <div class="gcs-container">
        <!-- Heading and paragraph -->
        <div class="gcs-header text-center">
          <h2 class="text-heading-2">Get Comprehensive Solutions</h2>
          <p class="text-body">
            BrainyWood provides a unique preschool Franchise opportunity, With
            our support and guidance, you can easily start & make a difference
            in the lives of young children.
          </p>
        </div>

        <!-- Cards -->
        <div class="gcs-cards-container">
          <div class="gcs-card card">
            <h1 class="gcs-card-number">1</h1>
            <h2 class="gcs-card-title">TECHNICAL & TRAINING SUPPORT</h2>
            <ul class="gcs-card-features">
              <li>Training to Franchise Owner</li>
              <li>Dedicated Manager</li>
              <li>TTT (Teacher Training Program)</li>
              <li>Brain Science Training Modules</li>
              <li>Providing all curriculum/training manuals.</li>
              <li>Recruitment & Interview support</li>
              <li>Regular Training & Monitoring</li>
              <li>Comprehensive Training across the year</li>
            </ul>
          </div>
          <div class="gcs-card card">
            <h1 class="gcs-card-number">2</h1>
            <h2 class="gcs-card-title">CURRICULUM & CONTENT</h2>
            <ul class="gcs-card-features">
              <li>Scientifically developed curriculum</li>
              <li>Holistic Development Approach</li>
              <li>Monthly Planners</li>
              <li>Activity Sheets</li>
              <li>Day to Day Class Planner</li>
              <li>Weekly Schedules</li>
              <li>Teachers Training -Onsite & Online</li>
              <li>Tools & Sessions.</li>
            </ul>
          </div>
          <div class="gcs-card card">
            <h1 class="gcs-card-number">3</h1>
            <h2 class="gcs-card-title">SET-UP SUPPORT</h2>
            <ul class="gcs-card-features">
              <li>Site visit & Layout plan</li>
              <li>
                An Interior Designing Manual (for walls, ceiling, furniture,
                floor, etc)
              </li>
              <li>Professional Email, ID, License Certificate</li>
              <li>Complete guidance on furniture/fixtures</li>
              <li>Installation of the Entire Pre-School</li>
              <li>Guidelines for inauguration and launching of school</li>
            </ul>
          </div>
          <div class="gcs-card card">
            <h1 class="gcs-card-number">4</h1>
            <h2 class="gcs-card-title">ADMISSION SUPPORT</h2>
            <ul class="gcs-card-features">
              <li>0-100 Admission Technique</li>
              <li>Online Lead Generation - Support</li>
              <li>Online Webinar Support</li>
              <li>Physical Seminar Support</li>
              <li>Activity-Based Admission Support</li>
              <li>Celebrity Visit Support</li>
              <li>Telephonic & Online Counseling Support for Initial Users</li>
            </ul>
          </div>
          <div class="gcs-card card">
            <h1 class="gcs-card-number">5</h1>
            <h2 class="gcs-card-title">TECHNOLOGY</h2>
            <p class="gcs-card-features">
              The entire Setup of Play School will be taken care of by our
              experts and installation team. The infrastructure includes various
              components as per the franchise plan:
            </p>
            <ul class="gcs-card-features">
              <li>Student Furniture -Tables & Chairs</li>
              <li>Indoor Furniture</li>
              <li>Indoor Play equipment</li>
              <li>Indoor Toys</li>
              <li>Learning Tools</li>
              <li>Brain Science Lab Instruments</li>
              <li>Library</li>
              <li>Admin & Staff Furniture</li>
            </ul>
          </div>
          <div class="gcs-card card">
            <h1 class="gcs-card-number">6</h1>
            <h2 class="gcs-card-title">MARKETING</h2>
            <ul class="gcs-card-features">
              <li>Brochures, Leaflets, Banners & Standees</li>
              <li>Social Media Page Creation, Optimization & Campaigns</li>
              <li>Daily Creatives</li>
              <li>Weekly Marketing & Short Videos</li>
              <li>
                Customized Templates, Messages & Company Strong Print Media
                Coverage
              </li>
              <li>TV ADS</li>
              <li>Celebrity Brand Ambassador Promotion</li>
              <li>Multiple Records Certificates</li>
              <li>Awards & Rewards Certificates</li>
              <li>Huge Testimonials</li>
            </ul>
          </div>
        </div>
        <button class="fwa-cta cta btn-open-popup">
          Schedule a Free Call Now!
        </button>
      </div>
    </section>

    <!-- Franchise with ease -->
    <section class="fwe my-md">
      <div class="fwe-header text-center">
        <span class="fwe-header-title">HASSLE-FREE FRANCHISING</span>
        <h2 class="text-heading-2">Franchise with Ease</h2>
        <p class="text-body">
          Follow Our 10-Step Process for a Guaranteed 45-Day Launch Period
        </p>
      </div>
      <div class="fwe-cards">
        <div class="fwe-card card">
          <div class="fwe-circle circle circle-primary">1</div>
          <h3 class="text-small-title">Franchise Application Form</h3>
          <p class="text-small-body">
            Ask for the franchise application form from the sales team and get
            it duly filled out
          </p>
        </div>
        <div class="fwe-card card">
          <div class="fwe-circle circle circle-primary">2</div>
          <h3 class="text-small-title">Book your Location</h3>
          <p class="text-small-body">
            Book your location by paying 25% Booking Amount
          </p>
        </div>
        <div class="fwe-card card">
          <div class="fwe-circle circle circle-primary">3</div>
          <h3 class="text-small-title">Complete the Agreement</h3>
          <p class="text-small-body">
            The agreement will be drafted and will be sent for signatures at
            your location
          </p>
        </div>
        <div class="fwe-card card">
          <div class="fwe-circle circle circle-primary">4</div>
          <h3 class="text-small-title">Pay the balance amount</h3>
          <p class="text-small-body">
            The remaining amount to be paid within 7 days of the agreement
          </p>
        </div>
        <div class="fwe-card card">
          <div class="fwe-circle circle circle-primary">5</div>
          <h3 class="text-small-title">Property LOI Signed</h3>
          <p class="text-small-body">
            Finalize the property and share the details with the team
          </p>
        </div>
        <div class="fwe-card card">
          <div class="fwe-circle circle circle-primary">6</div>
          <h3 class="text-small-title">Staff Training</h3>
          <p class="text-small-body">
            Once the staff is hired from your end we will start the training
            sessions
          </p>
        </div>
        <div class="fwe-card card">
          <div class="fwe-circle circle circle-primary">7</div>
          <h3 class="text-small-title">Material Dispatch</h3>
          <p class="text-small-body">
            All the Materials will be dispatched within 15 days after the final
            payment and finalizing of the property
          </p>
        </div>
        <div class="fwe-card card">
          <div class="fwe-circle circle circle-primary">8</div>
          <h3 class="text-small-title">Installation Team</h3>
          <p class="text-small-body">
            Once the material reached, the installation team will install the
            entire pre-school in 3-4 working days
          </p>
        </div>
        <div class="fwe-card card">
          <div class="fwe-circle circle circle-primary">9</div>
          <h3 class="text-small-title">Audit Team</h3>
          <p class="text-small-body">
            The Audit team will inspect the location and will check all the
            quality measures and norms and standards have been properly followed
            or not
          </p>
        </div>
        <div class="fwe-card card">
          <div class="fwe-circle circle circle-primary">10</div>
          <h3 class="text-small-title">Launch</h3>
          <p class="text-small-body">
            Center launch after audit and due-diligence within 45 days of Step-1
          </p>
        </div>
      </div>
      <button class="fwa-cta cta btn-open-popup">Book a Free call</button>
    </section>

    <!-- Looking for innovative playschool franchise? -->
    <section class="ifp my-md">
      <div class="fwe-header text-center">
        <span class="fwe-header-title">OUR UNIQUE FEATURES</span>
        <h2 class="text-heading-2">
          Looking for an Innovative Playschool Franchise?
        </h2>
        <p class="text-body">
          Choose BrainyWood for Holistic Development, Personalized Learning &
          Business Success. Our Innovative Playschool franchise model has
          everything you need to succeed.
        </p>
      </div>
      <div class="fwe-cards">
        <div class="fwe-card ifp-card card">
          <div class="fwe-card-icon-header">
            <img src="/img/icons/shield.png" class="fwe-card-icon" />
            <div class="ifp-card-number">1</div>
          </div>
          <h3 class="text-small-title">Child Safety & Parents Interaction</h3>
          <p class="text-small-body">
            We take child safety seriously and provide a secure environment
            through Biometric access, background checks, and live CCTV feeds.
            <br /><br />In addition, We also conduct regular parents interaction
            sessions to provide them with the support.
          </p>
          <span class="text-small-body bolder">Our sessions cover:</span>
          <ul class="text-small-body">
            <li>Health & parenting modules & sessions</li>
            <li>Child counselor & Healthy Relationship sessions</li>
            <li>Emotional intelligence sessions</li>
            <li>
              and an online app to access digital content & learning modules, so
              parents can monitor their child's progress
            </li>
          </ul>
        </div>
        <div class="fwe-card ifp-card card">
          <div class="fwe-card-icon-header">
            <img
              src="/img/icons/artificial-intelligence.png"
              class="fwe-card-icon"
            />
            <div class="ifp-card-number">2</div>
          </div>
          <h3 class="text-small-title">Brain Science Equipped School</h3>
          <p class="text-small-body">
            BrainyWood is India's first and only pre-school equipped with brain
            science methodologies that have been developed over 14 years of
            research.

            <br /><br />We believe in developing the overall brain of children,
            To ensure that we provide personalized attention to each child,

            <br /><br /><span class="text-small-body text-black-color bolder"
              >DMIT Tests.</span
            >
            <br />DMIT test is biometric analysis based on the scientific study
            of fingerprints to find out how your brain works and what you are
            good at.

            <br />It is particularly beneficial for parents to understand their
            child's innate strengths and areas of improvement.
          </p>
        </div>
        <div class="fwe-card ifp-card card">
          <div class="fwe-card-icon-header">
            <img src="/img/icons/clipboard.png" class="fwe-card-icon" />
            <div class="ifp-card-number">3</div>
          </div>
          <h3 class="text-small-title">Record-Holder activites</h3>
          <p class="text-small-body">
            First Play School focuses on creating national and world records for
            Children. Many students of BrainyWood already have created records
          </p>
        </div>
        <div class="fwe-card ifp-card card">
          <div class="fwe-card-icon-header">
            <img src="/img/icons/entrepreneur.png" class="fwe-card-icon" />
            <div class="ifp-card-number">4</div>
          </div>
          <h3 class="text-small-title">Area Monopoly</h3>
          <p class="text-small-body">
            BrainyWood provides an Area Monopoly up to a 7 km radius for each
            franchise to give a proper exclusive targeted population.
          </p>
        </div>
        <div class="fwe-card ifp-card card">
          <div class="fwe-card-icon-header">
            <img src="/img/icons/money-back.png" class="fwe-card-icon" />
            <div class="ifp-card-number">5</div>
          </div>
          <h3 class="text-small-title">
            Money-Back Guarantee & Interest-Free Loan in 15 min
          </h3>
          <p class="text-small-body">
            At BrainyWood, we understand the financial burden of providing
            quality education for your child. That's why we offer an
            interest-free loan facility with quick approval in just 15 minutes
            for fees up to 1 lakh rupees annually, and other finance options
            like e-Nach and credit cards with over 100 banks.

            <br /><br />We also offer a money-back guarantee after 6 years if
            the desired results are not achieved, even after following our
            expert guidance and plans.
          </p>
        </div>
        <div class="fwe-card ifp-card card">
          <div class="fwe-card-icon-header">
            <img src="/img/icons/brand.png" class="fwe-card-icon" />
            <div class="ifp-card-number">6</div>
          </div>
          <h3 class="text-small-title">360* Strong Branding & Marketing</h3>
          <p class="text-small-body">
            BrainyWood is a renowned brand name in the education segment. This
            helps to easily generate business for every new franchise.
          </p>
          <span class="text-small-body bolder">It includes:</span>
          <ul class="text-small-body">
            <li>TV Ads Promotions</li>
            <li>Print Media Coverage</li>
            <li>World Records Certificates</li>
            <li>Celebrity Promotional Video</li>
            <li>Industry Top Trainers Guidance</li>
          </ul>
        </div>
      </div>
    </section>

    <!-- Why join us? -->
    <section class="wju my-md">
      <div class="wju-container">
        <div class="wju-img-container">
          <img src="/img/why-join-us.png" alt="why join us" class="wju-img" />
        </div>
        <div class="wju-content">
          <span class="fwe-header-title">YOUR PLAYSCHOOL PARTNER</span>
          <h2 class="text-heading-2">Why start your Playschool with us?</h2>
          <p class="text-body">
            BrainyWood is the perfect partner for your preschool franchise
            business. Our innovative approach to curriculum, 360* strong
            branding & marketing efforts.
          </p>
          <p class="text-body">
            We ensure that your business reaches a wider audience, generating
            more leads and revenue for you. With BrainyWood, you'll have access
            to everything you need to make your business a success. Join the
            best playschool franchise in India today.
          </p>
          <button class="wju-cta cta btn-open-popup">Book a Free call</button>
        </div>
      </div>
    </section>

    <!-- Brainywood: Innovating Education with Brain Science -->
    <section class="iebs my-md">
      <div class="iebs-header">
        <h2 class="text-heading-2">
          Brainywood:<br />Innovating Education with Brain Science
        </h2>
        <p class="text-body">
          Brainywood is an innovative Ed-tech company focused on experimental
          learning and brain science. With world records in the field of brain
          science, we've trained over 5 lakh families and 10 lakh audiences in
          India. Our mission is to spark children's curiosity and desire to
          learn through our innovative app and online platform for stress-free
          learning.
        </p>
      </div>
      <div class="iebs-cards-container">
        <div class="iebs-card card">
          <div class="iebs-card-icon-container">
            <img
              src="/img/icons/research-and-development.png"
              alt="Research and development"
              class="iebs-card-icon"
            />
          </div>
          <div class="iebs-card-content">
            <h3 class="text-small-title">14 Years</h3>
            <p class="text-small-body text-light-body-color">
              Of Research & Development
            </p>
          </div>
        </div>
        <div class="iebs-card card">
          <div class="iebs-card-icon-container">
            <img
              src="/img/icons/gold-medal.png"
              alt="Research and development"
              class="iebs-card-icon"
            />
          </div>
          <div class="iebs-card-content">
            <h3 class="text-small-title">Rated #1</h3>
            <p class="text-small-body text-light-body-color">
              In Brain Science
            </p>
          </div>
        </div>
        <div class="iebs-card card">
          <div class="iebs-card-icon-container">
            <img
              src="/img/icons/presentation2.png"
              alt="Research and development"
              class="iebs-card-icon"
            />
          </div>
          <div class="iebs-card-content">
            <h3 class="text-small-title">10 lakh+</h3>
            <p class="text-small-body text-light-body-color">
              Audience Trained
            </p>
          </div>
        </div>
        <div class="iebs-card card">
          <div class="iebs-card-icon-container">
            <img
              src="/img/icons/presentation.png"
              alt="2000+ Seminars & Workshops"
              class="iebs-card-icon"
            />
          </div>
          <div class="iebs-card-content">
            <h3 class="text-small-title">2000+</h3>
            <p class="text-small-body text-light-body-color">
              Seminars & Workshops
            </p>
          </div>
        </div>
        <div class="iebs-card card">
          <div class="iebs-card-icon-container">
            <img
              src="/img/icons/approved.png"
              alt="Research and development"
              class="iebs-card-icon"
            />
          </div>
          <div class="iebs-card-content">
            <h3 class="text-small-title">Government Approved</h3>
            <p class="text-small-body text-light-body-color">
              BrainyWood working with Government to provide training
            </p>
          </div>
        </div>
        <div class="iebs-card card">
          <div class="iebs-card-icon-container">
            <img
              src="/img/icons/report.png"
              alt="Research and development"
              class="iebs-card-icon"
            />
          </div>
          <div class="iebs-card-content">
            <h3 class="text-small-title">50+ Articles</h3>
            <p class="text-small-body text-light-body-color">
              Published as Cover stories in Leading News Papers
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- How BrainyWood Stands Out against traditional schools? -->
    <section class="ifp bvt my-md">
      <div class="fwe-header text-center">
        <span class="fwe-header-title">DIFFERENCE</span>
        <h2 class="text-heading-2">
          How BrainyWood Stands Out against traditional schools
        </h2>
        <p class="text-body">
          BrainyWood provides a new and innovative approach to education. With
          our approach parents & children alike can experience a personalized
          and stress-free learning.
        </p>
      </div>
      <div class="fwe-cards">
        <div class="fwe-card bvt-card card">
          <div class="fwe-card-icon-header">
            <img src="/img/icons/learning.png" class="fwe-card-icon" />
            <div class="ifp-card-number">1</div>
          </div>
          <h2 class="text-big-title text-darker-gray-color">
            Parents' Support & Guidance
          </h2>
          <p class="text-small-body">
            <span class="text-small-body text-black-color bolder mb-4"
              >BrainyWood</span
            >
            <br />We provide regular training sessions by Industry Top Experts,
            Parenting Experts, psychologists, Health Experts, and others.
          </p>
          <hr />
          <p class="text-small-body">
            <span class="text-small-body text-black-color bolder mb-4"
              >Traditional</span
            >
            <br />Parents are kept out of the entire curriculum and no training
            is available for them
          </p>
        </div>
        <div class="fwe-card bvt-card card">
          <div class="fwe-card-icon-header">
            <img src="/img/icons/online-education.png" class="fwe-card-icon" />
            <div class="ifp-card-number">2</div>
          </div>
          <h2 class="text-big-title text-darker-gray-color">Learning App</h2>
          <p class="text-small-body">
            <span class="text-small-body text-black-color bolder mb-4"
              >BrainyWood</span
            >
            <br />Brainywood Learning App, Little Birbal K-12 App is Provided
            for the Entire Family Learning
          </p>
          <hr />
          <p class="text-small-body">
            <span class="text-small-body text-black-color bolder mb-4"
              >Traditional</span
            >
            <br />No App is provided to Parents for any Digital learning
          </p>
        </div>
        <div class="fwe-card bvt-card card">
          <div class="fwe-card-icon-header">
            <img src="/img/icons/3d-movie.png" class="fwe-card-icon" />
            <div class="ifp-card-number">3</div>
          </div>
          <h2 class="text-big-title text-darker-gray-color">
            Usage of Technology
          </h2>
          <p class="text-small-body">
            <span class="text-small-body text-black-color bolder mb-4"
              >BrainyWood</span
            >
            <br />We empower learning through 2D/3D Animated Videos for better
            visualization using Smart Interactive Flat Panels
          </p>
          <hr />
          <p class="text-small-body">
            <span class="text-small-body text-black-color bolder mb-4"
              >Traditional</span
            >
            <br />No usage of Digital Technology and Interactive Panels.
          </p>
        </div>
        <div class="fwe-card bvt-card card">
          <div class="fwe-card-icon-header">
            <img src="/img/icons/presentation3.png" class="fwe-card-icon" />
            <div class="ifp-card-number">4</div>
          </div>
          <h2 class="text-big-title text-darker-gray-color">
            Child Teacher Ratio
          </h2>
          <p class="text-small-body">
            <span class="text-small-body text-black-color bolder mb-4"
              >BrainyWood</span
            >
            <br />Smaller Child Teacher Ratio
          </p>
          <hr />
          <p class="text-small-body">
            <span class="text-small-body text-black-color bolder mb-4"
              >Traditional</span
            >
            <br />The child Ratio is Approx. 30/35:1
          </p>
        </div>
        <div class="fwe-card bvt-card card">
          <div class="fwe-card-icon-header">
            <img src="/img/icons/networking.png" class="fwe-card-icon" />
            <div class="ifp-card-number">5</div>
          </div>
          <h2 class="text-big-title text-darker-gray-color">FMS Software</h2>
          <p class="text-small-body">
            <span class="text-small-body text-black-color bolder mb-4"
              >BrainyWood</span
            >
            <br />We provide FMS Software to manage and solve all inquiries
          </p>
          <hr />
          <p class="text-small-body">
            <span class="text-small-body text-black-color bolder mb-4"
              >Traditional</span
            >
            <br />No Franchise Management software to manage and track
          </p>
        </div>
        <div class="fwe-card bvt-card card">
          <div class="fwe-card-icon-header">
            <img
              src="/img/icons/artificial-intelligence.png"
              class="fwe-card-icon"
            />
            <div class="ifp-card-number">6</div>
          </div>
          <h2 class="text-big-title text-darker-gray-color">
            Brain Science Methodologies
          </h2>
          <p class="text-small-body">
            <span class="text-small-body text-black-color bolder mb-4"
              >BrainyWood</span
            >
            <br />We are the only one that completes all 4 Dimensions of
            Education.
          </p>
          <hr />
          <p class="text-small-body">
            <span class="text-small-body text-black-color bolder mb-4"
              >Traditional</span
            >
            <br />No One is Implementing
          </p>
        </div>
      </div>
    </section>

    <!-- Form -->
    <section class="sec-form my-md">
      <div class="sec-form-wrapper">
        <div class="form-info">
          <h1>
            <span class="highlight-accent">Partner</span><br />
            with India's Best <br />Playschool Franchise
          </h1>
          <p class="text-body form-p">
            Discover how our innovative Playschool Franchise can benefit you.
          </p>
          <p class="text-body form-p">
            Fill out the form to book a call with our experts for all the
            information you need to make an informed decision.
          </p>
          <div class="email-link-container">
            <a class="email-link" href="mailto:email@brainywood.com"
              >email@brainywood.com</a
            >
          </div>
          <div class="sec-social-icons-container">
            <a href="#">
              <img src="/img/icons/facebook.png" class="social-icon" />
            </a>
            <a href="#">
              <img src="/img/icons/Twitter.png" class="social-icon" />
            </a>
            <a href="#">
              <img src="/img/icons/Telegram.png" class="social-icon" />
            </a>
          </div>
        </div>
        <div id="registrationform" class="form-container">
          <lead-form></lead-form>
        </div>
      </div>
    </section>

    <!-- Popup -->
    <div class="popup-overlay">
      <div class="popup">
        <img
          class="popup-close"
          src="/img/icons/cancel-btn.svg"
          alt="Cancel button"
        />
        <!-- Popup Content -->
        <div class="popup-content">
          <img
            class="popup-img"
            src="/img/popup-background.png"
            alt="popup background"
          />
          <div class="popup-info">
            <h2 class="popup-headline">
              <span class="highlight-accent">Partner</span> with India's Best
              Playschool Franchise
            </h2>
            <p>
              Discover how our innovative Playschool Franchise can benefit you.
            </p>
            <p>
              Fill out the form to book a call with our experts for all the
              information you need to make an informed decision.
            </p>
            <div class="popup-links">
              <div class="email-link-container">
                <a class="email-link" href="mailto:email@brainywood.com"
                  >email@brainywood.com</a
                >
              </div>
              <div class="sec-social-icons-container">
                <a href="#">
                  <img src="/img/icons/facebook.png" class="social-icon" />
                </a>
                <a href="#">
                  <img src="/img/icons/Twitter.png" class="social-icon" />
                </a>
                <a href="#">
                  <img src="/img/icons/Telegram.png" class="social-icon" />
                </a>
              </div>
            </div>
          </div>
          <div class="popup-form">
            <lead-form></lead-form>
          </div>
        </div>
      </div>
    </div>

    <script>
      // Testimonials swiper
      new Swiper(".swiper-1", {
        autoplay: {
          delay: 3000,
        },
        breakpoints: {
          768: {
            slidesPerView: 2,
            spaceBetween: 30,
          },
          992: {
            slidesPerView: 3,
            spaceBetween: 40,
          },
        },
        pagination: {
          el: ".swiper-pagination-1",
        },
        navigation: {
          nextEl: ".swiper-button-next-1",
          prevEl: ".swiper-button-prev-1",
        },
      });

      // News articles swiper
      new Swiper(".swiper-3", {
        autoplay: {
          delay: 2000,
        },
        breakpoints: {
          768: {
            slidesPerView: 2,
            spaceBetween: 30,
          },
          992: {
            slidesPerView: 3,
            spaceBetween: 40,
          },
        },
      });

      // Hero videos swiper
      const videoSwiper = new Swiper(".swiper-2", {
        autoplay: {
          delay: 5000,
        },
        pagination: {
          el: ".swiper-pagination-2",
        },
        navigation: {
          nextEl: ".swiper-button-next-2",
          prevEl: ".swiper-button-prev-2",
        },
      });

      videoSwiper.on("slideChange", function (mySwiper) {
        var currentSlide = mySwiper.realIndex;
        var previousSlide = currentSlide - 1;
        var previousSlideVideo = document.querySelector(
          `.swiper-slide-active iframe`
        );
        if (
          previousSlideVideo &&
          previousSlideVideo.contentWindow.postMessage
        ) {
          previousSlideVideo.contentWindow.postMessage(
            '{"event":"command","func":"stopVideo","args":""}',
            "*"
          );
        }
      });

      // popup code
      const openPopupBtn = document.querySelectorAll(".btn-open-popup");
      const popupOverlay = document.querySelector(".popup-overlay");

      openPopupBtn.forEach((btn) => {
        btn.addEventListener("click", () => {
          popupOverlay.style.display = "block";
        });
      });

      popupOverlay.addEventListener("click", (event) => {
        if (
          event.target === popupOverlay ||
          event.target.classList.contains("popup-close")
        ) {
          popupOverlay.style.display = "none";
        }
      });

      // Wait for 7 seconds before opening the popup
      setTimeout(() => {
        popupOverlay.style.display = "block";
      }, 7000);
    </script>

    <script type="module">
      class LeadForm extends HTMLElement {
        connectedCallback() {
          this.innerHTML = `
          <form class="registration-form card" method="post" action="">
            <div class="frm-input-container flex flex-col gap-3 m-8">
              <!-- Name -->
              <div class="frm-input-wrapper">
                <label for="name">Name *</label>
                <input required type="text" id="name" name="name" />
              </div>

              <!-- Email ID -->
              <div class="frm-input-wrapper">
                <label for="email">Email ID *</label>
                <input required type="email" id="email" name="email" />
              </div>

              <!-- Investment -->
              <div class="frm-input-wrapper">
                <label for="investment">Investment *</label>
                <div class="select-style">
                  <select required id="investment" name="investment">
                    <option value="below 5 lakh">below 5 lakh</option>
                    <option value="5-10 lakh">5-10 lakh</option>
                    <option value="10lakh+">10lakh+</option>
                  </select>
                </div>
              </div>

              <div class="frm-input-row">
                <!-- Mobile No. -->
                <div class="frm-input-wrapper">
                  <label for="mobileno">Mobile No. *</label>
                  <input required type="tel" id="mobileno" name="mobileno" />
                </div>

                <!-- Alternate Mobile No. -->
                <div class="frm-input-wrapper">
                  <label for="alternatemobileno">Alternate Mobile No.</label>
                  <input
                    type="tel"
                    id="alternatemobileno"
                    name="alternatemobileno"
                  />
                </div>
              </div>

              <div class="frm-input-row">
                <!-- Job Title -->
                <div class="frm-input-wrapper">
                  <label for="job">Job Title *</label>
                  <input required type="text" id="job" name="job" />
                </div>

                <!-- City -->
                <div class="frm-input-wrapper">
                  <label for="city">Location (City) *</label>
                  <input required type="text" id="city" name="city" />
                </div>
              </div>
            </div>
            <div class="frm-btn-container">
              <button type="submit" name="registersubmit" class="cta py-5 mt-4">
                Book a Free Call
              </button>
            </div>
          </form>
          `;
        }
      }

      customElements.define("lead-form", LeadForm);
    </script>
  </body>
</html>
<!-- This code is written by Pankaj Gurbani for Brainywood 
  and is not meant to be modified, copied or re-distributed 
  in any form or way without prior consent from the author. 

  Author details
  ----------------
  Name: Pankaj Gurbani
  Email: pankajgurbani.connect@gmail.com
-->