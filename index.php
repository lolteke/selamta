<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Selamta Transport LLC - Safe rides, reliable service, compassionate care. Non-emergency medical and student transportation.">
  <meta name="theme-color" content="#FF5722" />
  <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32_v3.png">
  <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon_v3.png">
  <title>Selamta Transport LLC | Safe Rides. Reliable Service. Compassionate Care.</title>
  <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet"> -->
  <link rel="stylesheet" href="fontawesome/css/all.min.css?v=2.9">
  <link rel="stylesheet" href="css/demo.css?v=2.9">
</head>

<body>

  <nav class="nav">
    <div class="container">
      <a class="brand" href="#home"><img src="images/logo_250_v3.png" class="brand-mark_img"></img>
      </a>
      <button class="menu" onclick="document.querySelector('.links').classList.toggle('open')" aria-label="Open menu">☰</button>
      <div class="links">
        <a class="active" href="#home">Home</a>
        <a href="#about">About Us</a>
        <a href="#mission">Mission</a>
        <a href="#services">Services</a>
        <a href="#why">Why Us</a>
        <a href="#contact">Contact</a>
        <a class="call-us" href="tel:+19135680962">
          <span class="call-title">
            <i class="fas fa-phone-alt"></i> CALL US
          </span>
          <strong>+1 913 568 0962</strong>
        </a>
      </div>
    </div>
  </nav>

  <section class="hero" id="home">
    <img class="hero-image" src="images/selamta-home6.png" alt="Selamta Transport non-emergency medical transportation">
    <div class="hero-overlay"></div>
    <div class="container">
      <div class="hero-copy">
        <h1>Your Destination.<br><span>Our Commitment.</span></h1>
        <p>Safe, reliable, and compassionate transportation for your medical and healthcare needs.</p>
        <div class="actions">
          <a class="btn call-btn" href="tel:+19135680962">
            <i class="fas fa-phone-alt btn-icon"></i>
            <span class="btn-text">
              <span class="label">CALL US</span>
              <strong class="number">+1 913 568 0962</strong>
            </span>
          </a>
          <a class="btn" href="#request">Request a Service →</a>
          <a class="btn outline" href="#about">Learn More</a>
        </div>
      </div>
    </div>
  </section>

  <section id="about">
    <div class="container about about_2">
      <div class="about-copy">
        <div class="eyebrow_v2">About Us</div>
        <h3>Welcome to Selamta Transport LLC</h3>
        <p>At Selamta Transport LLC, we are dedicated to providing safe, dependable, and compassionate Non-Emergency Medical Transportation (NEMT) services for individuals who need reliable transportation to healthcare appointments and essential medical services.</p>
        <p>We understand that getting to a medical appointment can sometimes be challenging. Our goal is to make transportation easier by providing professional service that puts the needs, comfort, and dignity of our passengers first.</p>
        <p>Our team is committed to providing a respectful and comfortable transportation experience from the moment we pick you up until you safely reach your destination.</p>
      </div>
    </div>
  </section>

  <section class="mission" id="mission">
    <div class="container">
      <div class="pill-grid">
        <div class="pill">
          <div class="eyebrow_v2 text_18">Our Mission</div>
          <h3>Safe. Reliable. Compassionate.</h3>
          <p>Our mission is to provide safe, reliable, compassionate, and professional non-emergency medical transportation services while treating every passenger with dignity, respect, and care.</p>
        </div>
        <div class="pill">
          <div class="eyebrow_v2 text_18">Our Vision</div>
          <h3>A Trusted Transportation Experience</h3>
          <p>Our vision is to become a trusted leader in non-emergency medical transportation by creating an experience where every passenger feels safe, valued, respected, and cared for.</p>
        </div>
        <div class="pill">
          <div class="eyebrow_v2 text_18">Our Goals</div>
          <h3>What We Work Toward</h3>
          <ul>
            <li>Safety First</li>
            <li>Reliable & On-Time Service</li>
            <li>Compassionate Customer Care</li>
            <li>Accessibility</li>
            <li>Professional Service</li>
            <li>Strong Community Partnerships</li>
            <li>Continuous Improvement</li>
          </ul>
        </div>
        <div class="pill">
          <div class="eyebrow_v2 text_18">Our Commitment</div>
          <h3>Every Ride Matters</h3>
          <p>We believe transportation is more than getting from one place to another. It is about helping people reach the care they need with safety, dignity, comfort, compassion, and peace of mind.</p>
          <p><strong>Safe rides. Reliable service. Compassionate care.</strong></p>
        </div>
      </div>
    </div>
  </section>

  <section class="services" id="services">
    <div class="container">
      <div class="section-head">
        <div class="eyebrow_v2">Our Services</div>
        <p>We provide dependable transportation for individuals who need assistance getting to healthcare, school, workplaces, social events, and other essential appointments.</p>
      </div>
      <div class="service-grid">
        <article class="card"><img class="service-img" src='images/s_wheelchair.jpg' alt="Wheelchair transportation">
          <div class="card-body">
            <div class="badge">♿</div>
            <h3>Wheelchair Transportation</h3>
            <p>Accessible transportation for passengers who require wheelchair assistance, subject to vehicle availability and scheduling.</p>
          </div>
        </article>
        <article class="card"><img class="service-img" src='images/selamta-ambulatory.jpg' alt="Ambulatory transportation">
          <div class="card-body">
            <div class="badge">♿</div>
            <h3>Ambulatory Transportation</h3>
            <p>Safe and comfortable transportation for passengers who can walk independently or with a cane, walker, or other mobility aid.</p>
          </div>
        </article>
        <article class="card"><img class="service-img" src='images/s_stretcher.jpg' alt="Stretcher transportation">
          <div class="card-body">
            <div class="badge">▣</div>
            <h3>Stretcher Transportation</h3>
            <p>Non-emergency stretcher transportation for passengers who are unable to travel safely in a standard seated position, subject to availability and eligibility.</p>
          </div>
        </article>
        <article class="card"><img class="service-img" src='images/selamta-student2.jpg' alt="Student transportation">
          <div class="card-body">
            <div class="badge">▣</div>
            <h3>Student Transportation</h3>
            <p>Safe, reliable, and professional transportation for students traveling to school, educational programs, appointments, and other approved destinations.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <section class="services2" id="services">
    <div class="container">
      <div class="section-head">
        <div class="eyebrow_v2">Where are you traveling from and going to?</div>
        <p>Selamta Transport LLC can position itself as a versatile transportation company connecting people to work, school, healthcare, airports, events, and everyday destinations—with dependable service and a customer-focused experience.</p>
      </div>
      <div class="service-grid">
        <article class="card">
          <div class="card-body">
            <div class="badge_2"><i class="fa-solid fa-user-doctor"></i></div>
            <h3>Medical Appointments</h3>
            <p>Reliable transportation to and from doctor visits, specialist appointments, and other healthcare services.</p>
          </div>
        </article>

        <article class="card">
          <div class="card-body">
            <div class="badge_2"><i class="fa-solid fa-notes-medical"></i></div>
            <h3>Dialysis Transportation</h3>
            <p>Dependable transportation for individuals who require regular dialysis appointments.</p>
          </div>
        </article>

        <article class="card">
          <div class="card-body">
            <div class="badge_2"><i class="fa-solid fa-hospital-user"></i></div>
            <h3>Therapy &amp; Rehabilitation</h3>
            <p>Transportation to physical therapy, occupational therapy, rehabilitation, and other scheduled treatment services.</p>
          </div>
        </article>

        <article class="card">
          <div class="card-body">
            <div class="badge_2"><i class="fa-solid fa-clinic-medical"></i></div>
            <h3>Hospital &amp; Clinic Transportation</h3>
            <p>Transportation to and from hospitals, clinics, outpatient centers, and healthcare facilities for scheduled visits.</p>
          </div>
        </article>

        <article class="card">
          <div class="card-body">
            <div class="badge_2"><i class="fa-solid fa-house-medical"></i></div>
            <h3>Hospital Discharge &amp; Return</h3>
            <p>Assistance with transportation home after a scheduled hospital or medical facility discharge, when appropriate.</p>
          </div>
        </article>

        <article class="card">
          <div class="card-body">
            <div class="badge_2"><i class="fa-solid fa-calendar-check"></i></div>
            <h3>Scheduled &amp; Recurring Trips</h3>
            <p>Scheduled transportation needs, including recurring medical appointments, subject to availability and requirements.</p>
          </div>
        </article>

        <article class="card">
          <div class="card-body">
            <div class="badge_2"><i class="fa-solid fa-school"></i></div>
            <h3>Schools</h3>
            <p>Safe, reliable daily student pickups and drop-offs ensuring students arrive at school on time and return home safely.</p>
          </div>
        </article>

        <article class="card">
          <div class="card-body">
            <div class="badge_2"><i class="fa-solid fa-users"></i></div>
            <h3>Social Events</h3>
            <p>Convenient group transit for weddings, family gatherings, religious services, and community outings without parking stress.</p>
          </div>
        </article>

        <article class="card">
          <div class="card-body">
            <div class="badge_2"><i class="fa-solid fa-briefcase"></i></div>
            <h3>Workplaces</h3>
            <p>Dependable commuter transport for corporate teams, shift workers, and recurring employee shuttle needs.</p>
          </div>
        </article>

        <article class="card">
          <div class="card-body">
            <div class="badge_2"><i class="fa-solid fa-plane"></i></div>
            <h3>Airport Transportation</h3>
            <p>Comfortable, reliable, pre-scheduled transportation to and from airports for individuals, families, seniors, students, and travelers with mobility needs.</p>
          </div>
        </article>

        <article class="card">
          <div class="card-body">
            <div class="badge_2"><i class="fa-solid fa-cart-shopping"></i></div>
            <h3>Shopping &amp; Personal Errand Transportation</h3>
            <p>A support service that drives people to stores or completes daily outside-the-home tasks for them.</p>
          </div>
        </article>

        <article class="card">
          <div class="card-body">
            <div class="badge_2"><i class="fa-solid fa-car"></i></div>
            <h3>General Transportation Services</h3>
            <p>We handle point-to-point passenger transit for individuals for daily needs, work, health care, or recreation.</p>
          </div>
        </article>

      </div>
    </div>
  </section>

  <section id="why" class="why">
    <div class="container why-grid">
      <div>
        <div class="eyebrow">Why Choose Us</div>
        <h2>Why Choose <span>Selamta Transport?</span></h2>
        <p>At Selamta Transport LLC, we understand that transportation is an important part of accessing quality healthcare. We are committed to making every trip safe, comfortable, dependable, and respectful.</p>
      </div>
      <div class="reason-grid">
        <div class="reason">
          <div class="big">◉</div><b>Safe & Dependable Transportation</b><span>Your safety comes first.</span>
        </div>
        <div class="reason">
          <div class="big">◷</div><b>Reliable & On-Time Service</b><span>Dependable pickup and drop-off.</span>
        </div>
        <div class="reason">
          <div class="big">♡</div><b>Compassionate Care</b><span>Kindness, patience and dignity.</span>
        </div>
        <div class="reason">
          <div class="big">♿</div><b>Passenger-Focused Service</b><span>Responsive to individual needs.</span>
        </div>
        <div class="reason">
          <div class="big">★</div><b>Professional Service</b><span>Courtesy and communication.</span>
        </div>
        <div class="reason">
          <div class="big">🤝</div><b>Trusted Community Partner</b><span>Strong community relationships.</span>
        </div>
      </div>
    </div>
  </section>

  <section id="embraces">
    <div class="container request col_1">
      <div class="panel">
        <!-- Full-Width Header -->
        <div class="eyebrow_v2">Selamta Transport LLC Embraces Innovative Services through</div>
        <p style="font-size:13px; color:var(--muted); margin-bottom: 24px;">Connecting People. Moving Lives.</p>

        <!-- 3-Column List Grid -->
        <ul class="fleet-grid">

          <li>
            <i class="fas fa-calendar-alt"></i>
            <div>
              <strong>Smart Ride Scheduling</strong>
              <small>Easy appointment-based scheduling, recurring rides for regular medical appointments, and pickup/drop-off reminders.</small>
            </div>
          </li>

          <li>
            <i class="fas fa-route"></i>
            <div>
              <strong>Smart Route Planning</strong>
              <small>Combine nearby pickups and drop-offs to create efficient routes.</small>
            </div>
          </li>

          <li>
            <i class="fas fa-clock"></i>
            <div>
              <strong>Flexible Scheduling</strong>
              <small>Offer recurring, advance, and flexible ride scheduling.</small>
            </div>
          </li>

          <li>
            <i class="fas fa-user-check"></i>
            <div>
              <strong>Personalized Ride Plans</strong>
              <small>Match transportation arrangements to each passenger's mobility needs.</small>
            </div>
          </li>

          <li>
            <i class="fas fa-map-marked-alt"></i>
            <div>
              <strong>Ride Coordination</strong>
              <small>Coordinate transportation between homes, medical facilities, workplaces, schools, and community locations.</small>
            </div>
          </li>

          <li>
            <i class="fas fa-layer-group"></i>
            <div>
              <strong>Multi-Stop Transportation</strong>
              <small>Plan several destinations in one organized trip.</small>
            </div>
          </li>

          <li>
            <i class="fas fa-couch"></i>
            <div>
              <strong>Comfort-First Service</strong>
              <small>Focus on clean vehicles, comfortable seating, climate control, and respectful assistance.</small>
            </div>
          </li>

          <li>
            <i class="fas fa-bell"></i>
            <div>
              <strong>Pickup Confirmation</strong>
              <small>Confirm the passenger's pickup time before each scheduled ride.</small>
            </div>
          </li>

          <li>
            <i class="fas fa-user-shield"></i>
            <div>
              <strong>Caregiver Communication</strong>
              <small>With appropriate authorization, provide ride updates to caregivers or responsible parties.</small>
            </div>
          </li>

          <li>
            <i class="fas fa-wheelchair"></i>
            <div>
              <strong>Comfort-Centered Transportation</strong>
              <small>Clean, comfortable vehicles with dedicated assistance entering and exiting the vehicle.</small>
            </div>
          </li>

          <li>
            <i class="fas fa-handshake"></i>
            <div>
              <strong>Community Mobility Partnerships</strong>
              <small>Build relationships with medical facilities, senior communities, schools, workplaces, and community organizations.</small>
            </div>
          </li>

          <li>
            <i class="fas fa-calendar-check"></i>
            <div>
              <strong>Appointment Coordination</strong>
              <small>Coordinate transportation around recurring medical appointments to help reduce missed or delayed visits.</small>
            </div>
          </li>

          <li>
            <i class="fas fa-users"></i>
            <div>
              <strong>Family Ride Updates</strong>
              <small>Notify approved family members when a passenger is picked up or arrives; helpful for caregivers and loved ones.</small>
            </div>
          </li>

          <li>
            <i class="fas fa-glass-cheers"></i>
            <div>
              <strong>Special Occasion Transportation</strong>
              <small>Create customized transportation plans for weddings, celebrations, sporting events, and community activities.</small>
            </div>
          </li>

          <li>
            <i class="fas fa-plane-arrival"></i>
            <div>
              <strong>Airport Meet-and-Assist</strong>
              <small>Coordinate scheduled airport pickups and drop-offs with clear meeting instructions.</small>
            </div>
          </li>

          <li>
            <i class="fas fa-id-card"></i>
            <div>
              <strong>Transportation Membership Plans</strong>
              <small>Offer recurring transportation packages where appropriate.</small>
            </div>
          </li>

          <li>
            <i class="fas fa-comment-dots"></i>
            <div>
              <strong>Feedback-Based Improvement</strong>
              <small>Ask customers for feedback and use it to improve routes and overall service quality.</small>
            </div>
          </li>

          <li>
            <i class="fas fa-phone-alt"></i>
            <div>
              <strong>"One Call, Multiple Needs" Service</strong>
              <small>Make it easy for customers to arrange different types of transportation through one company.</small>
            </div>
          </li>

        </ul>
      </div>
    </div>
  </section>

  <section id="about-safety-section" class="two-col-section">
    <div class="container two-col-row">

      <!-- Left Column: We are Committed to (Values) -->
      <div class="col-left">
        <div class="values">
          <span class="eyebrow_v2">We are Committed to</span>
          <div class="value">
            <div class="icon"><i class="fas fa-shield-alt"></i></div>
            <div><b>Safety</b><span>Your safety is our top priority.</span></div>
          </div>
          <div class="value">
            <div class="icon"><i class="fas fa-clock"></i></div>
            <div><b>Reliability</b><span>Dependable, timely service.</span></div>
          </div>
          <div class="value">
            <div class="icon"><i class="fas fa-handshake"></i></div>
            <div><b>Respect</b><span>Dignity and courtesy for everyone.</span></div>
          </div>
          <div class="value">
            <div class="icon"><i class="fas fa-heart"></i></div>
            <div><b>Compassion</b><span>Caring support for stressful journeys.</span></div>
          </div>
          <div class="value">
            <div class="icon"><i class="fas fa-award"></i></div>
            <div><b>Professionalism</b><span>Quality service you can trust.</span></div>
          </div>
        </div>
      </div>

      <!-- Right Column: Safety Priorities -->
      <div class="col-right">
        <div class="panel">
          <div class="eyebrow_v2">Selamta Transport LLC Prioritizes Safety</div>
          <p style="font-size:13px; color:var(--muted); margin-bottom: 24px;">"Every Trip. Every Passenger. Safety First."</p>

          <ul class="fleet-grid-compact">
            <li>
              <i class="fas fa-id-card-alt"></i>
              <div>
                <strong>Driver Training & Standards</strong>
                <small>Train safe drivers and enforce defensive driving practices on all trips.</small>
              </div>
            </li>

            <li>
              <i class="fas fa-tools"></i>
              <div>
                <strong>Regular Vehicle Maintenance</strong>
                <small>Inspect and maintain vehicles regularly to ensure peak operational safety.</small>
              </div>
            </li>

            <li>
              <i class="fas fa-wheelchair"></i>
              <div>
                <strong>Passenger & Equipment Security</strong>
                <small>Secure passengers properly, including wheelchairs and mobility equipment.</small>
              </div>
            </li>

            <li>
              <i class="fas fa-microchip"></i>
              <div>
                <strong>Advanced Safety Technology</strong>
                <small>Use technology such as GPS tracking, dash cameras, and digital inspections.</small>
              </div>
            </li>

            <li>
              <i class="fas fa-kit-medical"></i>
              <div>
                <strong>Emergency Preparedness</strong>
                <small>Prepare for emergencies with dedicated emergency equipment and strict response procedures.</small>
              </div>
            </li>

            <li>
              <i class="fas fa-cloud-sun-rain"></i>
              <div>
                <strong>Weather & Road Monitoring</strong>
                <small>Monitor weather and road conditions before and during trips to avoid hazards.</small>
              </div>
            </li>

            <li>
              <i class="fas fa-headset"></i>
              <div>
                <strong>Dispatch Communication</strong>
                <small>Communicate continuously with dispatch and maintain active emergency contacts.</small>
              </div>
            </li>

            <li>
              <i class="fas fa-list-check"></i>
              <div>
                <strong>5-Point Safety Check</strong>
                <small>Follow a strict 5-point check: Driver &rarr; Vehicle &rarr; Passenger &rarr; Route &rarr; Communication.</small>
              </div>
            </li>
          </ul>
        </div>
      </div>

    </div>
  </section>

  <section id="request">
    <div class="container request col_1">
      <div class="panel">
        <div class="eyebrow_v2">Request a Service</div>
        <h2>Need Transportation?</h2>
        <p style="font-size:12px;color:var(--muted)">Fill out the form below and we'll get back to you as soon as possible.</p>

        <form id="request-form" method="POST" action="https://api.web3forms.com/submit">

          <!-- Web3Forms Key & Unique Subject Identifiers -->
          <input type="hidden" name="access_key" value="986ddd17-c9ce-4ad7-b662-b79fb900290d">
          <!-- <input type="hidden" name="access_key" value="445e191f-7eed-4292-bcb0-cb27067f5990"> -->
          <input type="hidden" name="subject" value="🚨 New Service Request Submission">
          <input type="hidden" name="from_name" value="Selamta Service Request">

          <div class="form-grid">
            <div class="field">
              <label for="full_name">Full Name *</label>
              <input id="full_name" name="name" required>
            </div>

            <div class="field">
              <label for="phone">Phone Number *</label>
              <input id="phone" name="phone" required type="tel">
            </div>

            <div class="field">
              <label for="email">Email Address *</label>
              <input id="email" name="email" required type="email">
            </div>

            <div class="field">
              <label for="service">Service Required *</label>
              <select id="service" name="service" required>
                <option value="">Select a Service</option>
                <option value="Medical Appointment">Medical Appointment</option>
                <option value="Dialysis Transportation">Dialysis Transportation</option>
                <option value="Therapy & Rehabilitation">Therapy & Rehabilitation</option>
                <option value="Hospital & Clinic Transportation">Hospital & Clinic Transportation</option>
                <option value="Hospital Discharge & Return">Hospital Discharge & Return</option>
                <option value="Scheduled & Recurring Trips">Scheduled & Recurring Trips</option>
                <option value="School Transportation">School Transportation</option>
                <option value="Social Events Transportation">Social Events Transportation</option>
                <option value="Workplaces Transportation">Workplaces Transportation</option>
              </select>
            </div>

            <div class="field">
              <label for="pickup_location">Pickup Location *</label>
              <input id="pickup_location" name="pickup_location" required>
            </div>

            <div class="field">
              <label for="dropoff_location">Drop off Location *</label>
              <input id="dropoff_location" name="dropoff_location" required>
            </div>

            <div class="field">
              <label for="pickup_date">Preferred Pickup Date *</label>
              <input id="pickup_date" name="pickup_date" required type="date">
            </div>

            <div class="field full">
              <label for="message">Message / Special Requirements</label>
              <textarea id="message" name="message" placeholder="Tell us about mobility needs, recurring trips, or other requirements."></textarea>
            </div>

            <div class="field full">
              <button class="btn dark" type="submit" style="width:100%">Click Here →</button>
            </div>
          </div>
        </form>

        <p id="request-form-message" role="status" aria-live="polite" style="display:none;margin-top:14px;font-size:12px;font-weight:600;"></p>
      </div>
    </div>
  </section>

  <section class="contact" id="contact">
    <div class="container contact-grid">
      <div class="contact-card">
        <div class="eyebrow_v2">Contact Us</div>
        <h2>We're Here to Help</h2>
        <div class="contact-item">
          <div class="icon">☎</div>
          <div><b>+1 913 568 0962</b><br><span style="color:var(--muted);font-size:11px"></span></div>
        </div>
        <div class="contact-item">
          <div class="icon">✉</div>
          <div><b>selamtatransport@gmail.com</b><br><span style="color:var(--muted);font-size:11px"></span></div>
        </div>
        <div class="contact-item">
          <div class="icon">⌖</div>
          <div><b>8747 Noland Rd, <br />Lenexa, Ks 66215</b><br><span style="color:var(--muted);font-size:11px"></span></div>
        </div>
      </div>
      <div class="contact-card">
        <div class="eyebrow_v2">Follow Us</div>
        <!-- <h2>Follow Us on</h2> -->
        <!-- <p style="color:var(--muted);font-size:13px">Connect with Selamta Transport LLC on social platforms.</p> -->
        <div class="social-big">
          <!-- <a href="#" aria-label="X">X</a>
      <a href="#" aria-label="Facebook">f</a>
      <a href="#" aria-label="LinkedIn">in</a>
      <a href="#" aria-label="Instagram">◎</a>
      <a href="#" aria-label="TikTok">♪</a> -->
          <a href="#" aria-label="X"><i class="fa-brands fa-x-twitter"></i></a>
          <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="#" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
          <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
          <a href="#" aria-label="TikTok"><i class="fa-brands fa-tiktok"></i></a>
        </div>
      </div>
    </div>
  </section>

  <section id="chat-me-section" class="chat-section">
    <div class="container">
      <div class="chat-card">
        <div class="chat-header">
          <span class="eyebrow_v2">Get in Touch</span>
          <h2>Chat with Me</h2>
          <p>Send a direct message and I’ll get back to you in your inbox.</p>
        </div>

        <form id="contactForm" action="https://api.web3forms.com/submit" method="POST">
          <!-- REPLACE THIS WITH YOUR ACCESS KEY FROM WEB3FORMS -->
          <input type="hidden" name="access_key" value="986ddd17-c9ce-4ad7-b662-b79fb900290d">

          <!-- Optional: Custom Email Subject -->
          <input type="hidden" name="subject" value="New Website Contact Message">
          <input type="hidden" name="from_name" value="Selamta Website Contact Form">

          <div class="form-group">
            <label for="full_name">Full Name</label>
            <input type="text" id="full_name" name="name" placeholder="John Doe" required>
          </div>

          <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" placeholder="john@example.com" required>
          </div>

          <div class="form-group">
            <label for="message">Message</label>
            <textarea id="message" name="message" rows="5" placeholder="Write your message here..." required></textarea>
          </div>

          <button type="submit" id="submitBtn" class="btn-send">
            <i class="fas fa-paper-plane"></i> Send Message
          </button>

          <!-- Status Message Output -->
          <div id="formResponse" class="form-response"></div>
        </form>
      </div>
    </div>
  </section>

  <!-- Service Area Banner -->
  <section class="service-area-banner">
    <div class="container">
      <div class="service-area-content">
        <div class="service-area-icon">
          <i class="fas fa-map-marker-alt"></i>
        </div>

        <div>
          <h2>We Serve the Entire Kansas City Metro Area and Beyond</h2>
          <p>Reliable transportation where you need it, when you need it.</p>
        </div>
      </div>
    </div>
  </section>

  <footer class="footer">
    <div class="container">
      <div class="footer-grid">
        <div><a class="brand" href="#home"><img src="images/logo_250.png" class="brand-mark_img"></img><span class="brand-text"><strong>SELAMTA</strong><span>TRANSPORT LLC</span></span></a>
          <p>Safe Rides • Reliable Service • Compassionate Care</p>
        </div>
        <div>
          <h4>Quick Links</h4><a href="#home">Home</a><br><a href="#about">About Us</a><br><a href="#services">Services</a><br><a href="#why">Why Choose Us</a><br><a href="#contact">Contact</a>
        </div>
        <div>
          <h4>Our Services</h4><a href="#services">Medical Appointments</a><br><a href="#services">Dialysis Transportation</a><br><a href="#services">Wheelchair Transportation</a><br><a href="#services">Student Transportation</a><br><a href="#services">More Services</a>
        </div>
        <div>
          <h4>Contact Us</h4>
          <p>☎ +1 913 568 0962</p>
          <p>✉ selamtatransport@gmail.com</p>
          <p>⌖ 8747 Noland Rd, Lenexa, Ks 66215</p>
        </div>
      </div>
      <div class="copyright">© 2026 Selamta Transport LLC. All rights reserved. Designed by: <a target="_blank" href="https://wa.me/251920516314">Tekeste Demesie</a></div>
    </div>
  </footer>

  <script src="js/jquery-3.7.1.min.js"></script>
  <script src="js/sweetalert2.js"></script>
  <script>
    $(function() {
      $('#request-form').on('submit', function(event) {
        event.preventDefault(); // Prevents page redirect / default Web3Forms popup

        var form = $(this);
        var submitButton = form.find('button[type="submit"]');

        // Disable button & show loading state
        submitButton.prop('disabled', true).text('Sending...');

        $.ajax({
            url: form.attr('action'),
            type: 'POST',
            data: form.serialize(),
            dataType: 'json'
          })
          .done(function(response) {
            if (response.success) {
              // Show SweetAlert2 Success Dialogue
              Swal.fire({
                title: 'Request Submitted!',
                text: 'Thank you! We have received your transportation request and will reach out shortly.',
                icon: 'success',
                confirmButtonColor: '#2563eb',
                confirmButtonText: 'Great!'
              });

              form[0].reset(); // Clear the form fields
            } else {
              // Show SweetAlert2 Error Dialogue
              Swal.fire({
                title: 'Submission Failed',
                text: response.message || 'Unable to process your request. Please try again.',
                icon: 'error',
                confirmButtonColor: '#dc2626'
              });
            }
          })
          .fail(function() {
            Swal.fire({
              title: 'Network Error',
              text: 'Could not submit your request. Please call us directly at +1 913 568 0962.',
              icon: 'warning',
              confirmButtonColor: '#2563eb'
            });
          })
          .always(function() {
            submitButton.prop('disabled', false).text('Click Here →');
          });
      });
    });

    document.getElementById('contactForm').addEventListener('submit', function(e) {
      e.preventDefault();

      const form = this;
      const submitBtn = document.getElementById('submitBtn');
      const responseDiv = document.getElementById('formResponse');

      submitBtn.disabled = true;
      submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
      responseDiv.className = 'form-response';
      responseDiv.textContent = '';

      const formData = new FormData(form);

      fetch(form.action, {
          method: 'POST',
          body: formData
        })
        .then(async (response) => {
          let json = await response.json();
          if (response.status === 200) {
            responseDiv.className = 'form-response success';
            responseDiv.textContent = 'Message sent successfully! Check your Gmail inbox soon.';
            form.reset();
          } else {
            responseDiv.className = 'form-response error';
            responseDiv.textContent = json.message || 'Something went wrong. Please try again.';
          }
        })
        .catch(() => {
          responseDiv.className = 'form-response error';
          responseDiv.textContent = 'Failed to submit form. Check your connection.';
        })
        .finally(() => {
          submitBtn.disabled = false;
          submitBtn.innerHTML = '<i class="fas fa-paper-plane"></i> Send Message';
        });
    });
  </script>
</body>

</html>