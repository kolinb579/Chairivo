<!DOCTYPE html>
<html lang="en">
<head>
	<script async defer src="https://tools.luckyorange.com/core/lo.js?site-id=5545478c"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chairivo · premium office chairs</title>
  <meta name="description"
      content="Shop premium ergonomic office chairs designed for all-day comfort, posture support, and productive workspaces across the United States.">

  <!-- Font & Icons (clean, no frameworks) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    /* ===== RESET & BASE ===== */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    html {
      scroll-behavior: smooth;
    }

    body {
      font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
      background-color: #fcfcf9;
      color: #1e1e1e;
      line-height: 1.5;
    }

    .container {
      max-width: 1280px;
      margin: 0 auto;
      padding: 0 24px;
    }

    /* ===== BUTTONS ===== */
    .btn-primary {
      background: #d48c2c;
      color: #fff;
      border: none;
      padding: 12px 32px;
      font-weight: 600;
      border-radius: 40px;
      font-size: 1rem;
      cursor: pointer;
      transition: background 0.2s, transform 0.15s;
      display: inline-block;
      text-decoration: none;
      letter-spacing: 0.3px;
    }
    .btn-primary:hover {
      background: #b97822;
      transform: scale(1.02);
    }

    .btn-outline {
      background: transparent;
      color: #1e1e1e;
      border: 1.5px solid #1e1e1e;
      padding: 12px 32px;
      font-weight: 600;
      border-radius: 40px;
      font-size: 1rem;
      cursor: pointer;
      transition: all 0.2s;
      display: inline-block;
      text-decoration: none;
    }
    .btn-outline:hover {
      background: #1e1e1e;
      color: #fff;
    }

    /* ===== NAVBAR ===== */
    .navbar {
      position: sticky;
      top: 0;
      z-index: 1000;
      background: #0f0f0f;
      color: #fff;
      padding: 14px 0;
      box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    }

    .nav-container {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .logo {
      font-size: 1.7rem;
      font-weight: 700;
      letter-spacing: -0.5px;
      color: #fff;
    }
    .logo span {
      color: #d48c2c;
    }

    .nav-links {
      display: flex;
      gap: 28px;
      list-style: none;
      font-weight: 500;
    }
    .nav-links a {
      color: #f0f0f0;
      text-decoration: none;
      font-size: 0.95rem;
      transition: color 0.15s;
      padding: 4px 0;
      border-bottom: 2px solid transparent;
    }
    .nav-links a:hover,
    .nav-links a.active {
      color: #d48c2c;
      border-bottom-color: #d48c2c;
    }

    .hamburger {
      display: none;
      font-size: 1.7rem;
      color: #fff;
      cursor: pointer;
      background: none;
      border: none;
    }

    /* cart counter */
    .cart-indicator {
      background: #d48c2c;
      color: #0f0f0f;
      border-radius: 40px;
      padding: 2px 12px;
      font-size: 0.8rem;
      font-weight: 700;
      margin-left: 8px;
    }

    /* ===== SECTIONS ===== */
    section {
      padding: 80px 0;
    }

    .section-title {
      font-size: 2.8rem;
      font-weight: 700;
      letter-spacing: -1px;
      margin-bottom: 16px;
    }
    .section-sub {
      font-size: 1.2rem;
      color: #4a4a4a;
      max-width: 680px;
    }

    /* ===== HERO ===== */
    #home {
      padding-top: 40px;
    }
    .hero-grid {
      display: flex;
      align-items: center;
      gap: 40px;
      flex-wrap: wrap;
    }
    .hero-content {
      flex: 1 1 400px;
    }
    .hero-content h1 {
      font-size: 3.8rem;
      font-weight: 800;
      letter-spacing: -2px;
      line-height: 1.1;
      margin-bottom: 20px;
    }
    .hero-content p {
      font-size: 1.3rem;
      color: #3a3a3a;
      margin-bottom: 32px;
      max-width: 550px;
    }
    .hero-buttons {
      display: flex;
      gap: 16px;
      flex-wrap: wrap;
      margin-bottom: 40px;
    }
    .trust-badges {
      display: flex;
      gap: 32px;
      flex-wrap: wrap;
      font-size: 0.95rem;
      color: #2e2e2e;
    }
    .trust-badges i {
      color: #d48c2c;
      margin-right: 8px;
    }

    .hero-image {
      flex: 1 1 400px;
      background: #eae7e0;
      border-radius: 40px;
      min-height: 320px;
      display: flex;
      align-items: center;
      justify-content: center;
      background-image: url('banner.jpg');
      background-size: 100% auto;
      background-repeat: no-repeat;
      background-position: center;
    }

    /* ===== CHAIRS ===== */
    .chair-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 28px;
      margin-top: 40px;
    }
    .chair-card {
      background: #fff;
      border-radius: 28px;
      padding: 24px 18px 28px;
      box-shadow: 0 8px 28px rgba(0,0,0,0.04);
      transition: transform 0.2s, box-shadow 0.2s;
      text-align: center;
      border: 1px solid #efede8;
    }
    .chair-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 20px 40px rgba(0,0,0,0.06);
    }
    .chair-card img {
      width: 100%;
      max-height: 300px;
      object-fit: contain;
      background: #f6f4f0;
      border-radius: 40px;
      margin-bottom: 12px;
    }
    .chair-card h3 {
      font-size: 1.3rem;
      margin-top: 8px;
    }
    .chair-card .desc {
      color: #4d4d4d;
      font-size: 0.9rem;
      margin: 6px 0 8px;
    }
    .stars {
      color: #d48c2c;
      letter-spacing: 2px;
      font-size: 1rem;
    }
    .price {
      font-weight: 700;
      font-size: 1.4rem;
      margin: 8px 0 12px;
    }
    .card-buttons {
      display: flex;
      gap: 10px;
      justify-content: center;
      flex-wrap: wrap;
    }
    .card-buttons button {
      background: #f0ede8;
      border: none;
      padding: 8px 18px;
      border-radius: 40px;
      font-weight: 600;
      font-size: 0.85rem;
      cursor: pointer;
      transition: 0.15s;
    }
    .card-buttons .btn-view {
      background: #1e1e1e;
      color: #fff;
    }
    .card-buttons .btn-view:hover {
      background: #3a3a3a;
    }
    .card-buttons .btn-cart {
      background: #d48c2c;
      color: #fff;
    }
    .card-buttons .btn-cart:hover {
      background: #b97822;
    }

    /* ===== FEATURES ===== */
    .feature-grid {
      display: grid;
      grid-template-columns: repeat(3,1fr);
      gap: 30px;
      margin-top: 40px;
    }
    .feature-card {
      background: #fff;
      padding: 32px 20px;
      border-radius: 30px;
      box-shadow: 0 4px 14px rgba(0,0,0,0.02);
      text-align: center;
      transition: 0.2s;
      border: 1px solid #f0ede8;
    }
    .feature-card:hover {
      transform: scale(1.02);
      box-shadow: 0 12px 28px rgba(0,0,0,0.05);
    }
    .feature-card i {
      font-size: 2.6rem;
      color: #d48c2c;
      margin-bottom: 14px;
    }
    .feature-card h4 {
      font-size: 1.2rem;
      margin-bottom: 6px;
    }

    /* ===== WHY US ===== */
    .why-grid {
      display: flex;
      gap: 50px;
      align-items: center;
      flex-wrap: wrap;
    }
    .why-text {
      flex: 1 1 300px;
    }
    .why-text ul {
      list-style: none;
      margin: 24px 0 32px;
    }
    .why-text li {
      padding: 10px 0;
      border-bottom: 1px solid #eae7e0;
      display: flex;
      align-items: center;
      gap: 12px;
    }
    .why-text li i {
      color: #d48c2c;
      width: 24px;
    }
    .why-image {
      flex: 1 1 300px;
      background: #ded9d0;
      border-radius: 40px;
      min-height: 600px;
      background-image: url('about.jpg');
      background-size: 100% auto;
      background-repeat: no-repeat;
      background-position: center;
    }

    /* ===== REVIEWS ===== */
    .review-grid {
      display: grid;
      grid-template-columns: repeat(3,1fr);
      gap: 30px;
      margin-top: 40px;
    }
    .review-card {
      background: #fff;
      padding: 28px 24px;
      border-radius: 30px;
      box-shadow: 0 4px 16px rgba(0,0,0,0.02);
      border: 1px solid #efede8;
    }
    .review-card .stars {
      font-size: 1.2rem;
      margin-bottom: 8px;
    }
    .review-card p {
      font-style: italic;
      margin: 10px 0;
    }
    .review-card .author {
      font-weight: 600;
      color: #2b2b2b;
    }

    /* ===== CONTACT & NEWSLETTER ===== */
    .contact-grid {
      display: flex;
      gap: 50px;
      flex-wrap: wrap;
    }
    .contact-info {
      flex: 1 1 280px;
    }
    .contact-info p {
      margin: 12px 0;
    }
    .contact-form {
      flex: 2 1 400px;
    }
    .contact-form input,
    .contact-form textarea,
    .newsletter-form input {
      width: 100%;
      padding: 14px 18px;
      border-radius: 40px;
      border: 1px solid #ddd8d0;
      background: #fff;
      font-size: 1rem;
      margin-bottom: 16px;
      transition: 0.15s;
    }
    .contact-form textarea {
      border-radius: 28px;
      min-height: 120px;
    }
    .contact-form input:focus,
    .contact-form textarea:focus {
      outline: none;
      border-color: #d48c2c;
      box-shadow: 0 0 0 3px rgba(212,140,44,0.1);
    }

    .newsletter-box {
      background: #f6f4f0;
      padding: 50px 40px;
      border-radius: 60px;
      text-align: center;
      margin: 40px 0;
    }
    .newsletter-box h2 {
      font-size: 2.2rem;
      margin-bottom: 12px;
    }
    .newsletter-form {
      display: flex;
      gap: 16px;
      flex-wrap: wrap;
      justify-content: center;
      max-width: 600px;
      margin: 20px auto 0;
    }
    .newsletter-form input {
      flex: 2 1 240px;
      margin-bottom: 0;
    }
    .newsletter-form button {
      flex: 0 1 auto;
    }

    /* ===== PRIVACY ===== */
    #privacy {
      background: #faf9f6;
      border-radius: 60px 60px 0 0;
      padding: 60px 32px;
    }
    #privacy h2 {
      font-size: 2.4rem;
    }
    #privacy p {
      max-width: 800px;
      margin: 16px 0;
    }
    .privacy-note {
      background: #1e1e1e;
      color: #f0ede8;
      padding: 16px 28px;
      border-radius: 60px;
      display: inline-block;
      margin-top: 24px;
    }

    /* ===== FOOTER ===== */
    footer {
      background: #0f0f0f;
      color: #d0d0d0;
      padding: 50px 0 30px;
    }
    .footer-grid {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      gap: 30px;
    }
    .footer-col h4 {
      color: #fff;
      font-size: 1.3rem;
      margin-bottom: 16px;
    }
    .footer-col a {
      color: #b0b0b0;
      text-decoration: none;
      display: block;
      margin: 8px 0;
      transition: 0.15s;
    }
    .footer-col a:hover {
      color: #d48c2c;
    }
    .footer-bottom {
      border-top: 1px solid #2a2a2a;
      padding-top: 28px;
      margin-top: 30px;
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
      font-size: 0.9rem;
    }

    /* ===== SCROLL TOP ===== */
    .scroll-top {
      position: fixed;
      bottom: 30px;
      right: 30px;
      background: #0f0f0f;
      color: #fff;
      border: none;
      border-radius: 60px;
      padding: 12px 18px;
      font-size: 1.3rem;
      cursor: pointer;
      box-shadow: 0 8px 20px rgba(0,0,0,0.2);
      display: none;
      transition: 0.2s;
      z-index: 999;
    }
    .scroll-top.visible {
      display: block;
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 1024px) {
      .chair-grid { grid-template-columns: repeat(2,1fr); }
      .feature-grid { grid-template-columns: repeat(2,1fr); }
      .review-grid { grid-template-columns: repeat(2,1fr); }
    }

    @media (max-width: 768px) {
      .nav-links {
        display: none;
        flex-direction: column;
        background: #0f0f0f;
        padding: 24px 20px;
        border-radius: 28px;
        position: absolute;
        top: 70px;
        right: 20px;
        left: 20px;
        gap: 18px;
        box-shadow: 0 20px 40px rgba(0,0,0,0.4);
      }
      .nav-links.open {
        display: flex;
      }
      .hamburger {
        display: block;
      }

      .hero-content h1 { font-size: 2.8rem; }
      .section-title { font-size: 2.2rem; }
      .chair-grid { grid-template-columns: 1fr; }
      .feature-grid { grid-template-columns: 1fr; }
      .review-grid { grid-template-columns: 1fr; }
      .contact-grid { flex-direction: column; }
      .newsletter-box { padding: 30px 20px; }
    }

    @media (max-width: 480px) {
      .hero-buttons .btn-primary,
      .hero-buttons .btn-outline {
        width: 100%;
        text-align: center;
      }
      .trust-badges { gap: 16px; }
    }

    /* ===== REVEAL (simple) ===== */
    .reveal {
      opacity: 0;
      transform: translateY(24px);
      transition: opacity 0.7s ease, transform 0.7s ease;
    }
    .reveal.visible {
      opacity: 1;
      transform: translateY(0);
    }

    /* success message */
    .success-msg {
      background: #1e1e1e;
      color: #f0ede8;
      padding: 14px 24px;
      border-radius: 60px;
      display: inline-block;
      margin-top: 12px;
    }

    /* spacing */
    .mt-2 { margin-top: 20px; }
  </style>
</head>
<body>

<!-- ===== NAVBAR ===== -->
<nav class="navbar" id="navbar">
  <div class="container nav-container">
    <div class="logo">Chair<span>ivo</span></div>
    <ul class="nav-links" id="navLinks">
      <li><a href="#home" class="active">Home</a></li>
      <li><a href="#chairs">Office Chairs</a></li>
      <li><a href="#features">Features</a></li>
      <li><a href="#why-us">Why Us</a></li>
      <li><a href="#contact">Contact</a></li>
      
    </ul>
    <button class="hamburger" id="hamburger" aria-label="menu"><i class="fas fa-bars"></i></button>
  </div>
</nav>

<!-- ===== HERO ===== -->
<section id="home">
  <div class="container hero-grid">
    <div class="hero-content reveal">
      <h1>Sit Better. <br>Work Smarter.</h1>
      <p>Premium ergonomic office chairs designed for long workdays, better posture, and everyday comfort.</p>
      <div class="hero-buttons">
        <a href="#chairs" class="btn-primary">Shop Office Chairs</a>
        <a href="#features" class="btn-outline">Explore Features</a>
      </div>
      <div class="trust-badges">
        <span><i class="fas fa-truck"></i> Free Shipping Across the US</span>
        <span><i class="fas fa-calendar-check"></i> 30-Day Comfort Trial</span>
        <span><i class="fas fa-shield-alt"></i> 5-Year Warranty</span>
      </div>
    </div>
    <div class="hero-image reveal"></div>
  </div>
</section>

<!-- ===== CHAIRS ===== -->
<section id="chairs">
  <div class="container">
    <h2 class="section-title reveal">Our Best Office Chairs</h2>
    <div class="chair-grid" id="chairGrid">
      <!-- cards injected by JS -->
    </div>
  </div>
</section>

<!-- ===== FEATURES ===== -->
<section id="features">
  <div class="container">
    <h2 class="section-title reveal">Designed Around You</h2>
    <div class="feature-grid">
      <div class="feature-card reveal"><h4>Adjustable Lumbar Support</h4></div>
      <div class="feature-card reveal"><h4>4D Adjustable Armrests</h4></div>
      <div class="feature-card reveal"><h4>Breathable Mesh Back</h4></div>
      <div class="feature-card reveal"><h4>Height & Tilt Adjustment</h4></div>
      <div class="feature-card reveal"><h4>Premium Comfortable Cushion</h4></div>
      <div class="feature-card reveal"><h4>Heavy-Duty 5-Star Base</h4></div>
    </div>
  </div>
</section>

<!-- ===== WHY US ===== -->
<section id="why-us">
  <div class="container why-grid">
    <div class="why-text reveal">
      <h2 class="section-title" style="font-size:2.6rem;">Why Choose Chairivo?</h2>
      <ul>
        <li><i class="fas fa-check-circle"></i> Ergonomic-first design</li>
        <li><i class="fas fa-check-circle"></i> Premium materials</li>
        <li><i class="fas fa-check-circle"></i> Built for everyday work</li>
        <li><i class="fas fa-check-circle"></i> Designed for home offices and businesses</li>
        <li><i class="fas fa-check-circle"></i> US-wide shipping</li>
        <li><i class="fas fa-check-circle"></i> Dedicated customer support</li>
      </ul>
      <a href="#chairs" class="btn-primary">Find Your Chair</a>
    </div>
    <div class="why-image reveal"></div>
  </div>
</section>

<!-- ===== REVIEWS ===== -->
<section id="reviews">
  <div class="container">
    <h2 class="section-title reveal">Loved by Workspaces Across America</h2>
    <div class="review-grid" id="reviewGrid">
      <!-- injected by JS -->
    </div>
  </div>
</section>

<!-- ===== CONTACT ===== -->
<section id="contact">
  <div class="container">
    <h2 class="section-title reveal">Get in Touch</h2>
    <div class="contact-grid">
      <div class="contact-info reveal">
        <h3>Chairivo</h3>
        <p>123 Market Street<br>Austin, TX 78701<br>United States</p>
        <p><i class="fas fa-phone" style="color:#d48c2c;"></i> +1 (800) 555-0147</p>
       
      </div>
      <div class="contact-form reveal">
        
      </div>
    </div>
  </div>
</section>

<!-- ===== NEWSLETTER ===== -->
<section class=" newsletter-box reveal">
  <h2>Get Ergonomic Tips & Chair Deals</h2>
  <p>Join our newsletter for workspace tips, product updates, and exclusive offers.</p>
  <form id="newsletterForm" class="newsletter-form">
    <input type="email" id="newsletterEmail" placeholder="Email Address" required>
    <button type="submit" class="btn-primary">Subscribe</button>
    <div id="newsletterFeedback" style="width:100%;"></div>
  </form>
</section>

<section id="privacy">
  <div class="container">
    <h2 class="section-title">Privacy Policy</h2>


<p>
  <strong>Effective Date:</strong> September 3, 2026
</p>

<p>
  At <strong>Chairivo</strong>, we respect your privacy and are committed to
  protecting the personal information you provide when visiting our website,
  purchasing office chairs, contacting us, or using our services.
</p>

<p>
  This Privacy Policy explains what information we collect, how we use it,
  how we protect it, and the choices available to you.
</p>

<h3>1. Information We Collect</h3>

<p>
  We may collect information that you voluntarily provide to us, including:
</p>

<ul>
  <li>Full name</li>
  <li>Email address</li>
  <li>Phone number</li>
  <li>Billing and shipping address</li>
  <li>Order and purchase information</li>
  <li>Information submitted through our contact forms</li>
  <li>Information submitted when subscribing to our newsletter</li>
  <li>Customer service communications</li>
</ul>

<p>
  When you visit our website, we may also automatically collect limited
  technical information such as your IP address, browser type, device type,
  operating system, pages visited, referring website, and general usage
  information.
</p>

<h3>2. How We Use Your Information</h3>

<p>
  We may use the information we collect to:
</p>

<ul>
  <li>Process and manage orders and deliveries</li>
  <li>Respond to customer questions and support requests</li>
  <li>Provide information about our products and services</li>
  <li>Send order confirmations and service-related communications</li>
  <li>Send newsletters or promotional communications when you have opted in</li>
  <li>Improve our website, products, and customer experience</li>
  <li>Detect, prevent, and investigate fraudulent or unauthorized activity</li>
  <li>Comply with applicable legal and regulatory requirements</li>
</ul>

<h3>3. Payment Information</h3>

<p>
  If our website accepts online payments, payment transactions may be
  processed through trusted third-party payment processors. We do not
  intentionally store complete credit card or debit card numbers on our
  website servers.
</p>

<p>
  Payment providers may collect and process payment information according
  to their own privacy policies and terms of service.
</p>

<h3>4. Cookies and Tracking Technologies</h3>

<p>
  Our website may use cookies and similar technologies to remember
  preferences, understand website usage, improve functionality, and provide
  a better browsing experience.
</p>

<p>
  You may be able to control or disable cookies through your browser
  settings. Disabling certain cookies may affect some website functionality.
</p>

<h3>5. Sharing of Information</h3>

<p>
  We do not sell your personal information for money. We may share
  information with trusted service providers when necessary to operate our
  business, including providers that assist with:
</p>

<ul>
  <li>Payment processing</li>
  <li>Shipping and order fulfillment</li>
  <li>Website hosting and technical services</li>
  <li>Email and customer communications</li>
  <li>Analytics and website performance</li>
  <li>Customer support</li>
</ul>

<p>
  We may also disclose information when reasonably necessary to comply with
  applicable law, respond to legal requests, protect our rights, or prevent
  fraud, security threats, or other harmful activity.
</p>

<h3>6. Data Security</h3>

<p>
  We use reasonable administrative, technical, and organizational measures
  designed to protect personal information from unauthorized access,
  disclosure, alteration, or destruction.
</p>

<p>
  However, no method of transmission over the Internet or method of
  electronic storage can be guaranteed to be completely secure.
</p>

<h3>7. Data Retention</h3>

<p>
  We retain personal information only for as long as reasonably necessary
  for the purposes described in this Privacy Policy, including fulfilling
  orders, providing customer support, maintaining business records,
  resolving disputes, preventing fraud, and complying with legal
  obligations.
</p>

<h3>8. Marketing Communications</h3>

<p>
  If you subscribe to our newsletter or promotional communications, we may
  send you information about products, offers, promotions, and company
  updates.
</p>

<p>
  You can unsubscribe from marketing emails at any time by using the
  unsubscribe link included in the email or by contacting us directly.
</p>

<h3>9. Your Privacy Rights</h3>

<p>
  Depending on where you live and applicable law, you may have certain
  rights regarding your personal information. These rights may include the
  right to request access to, correction of, deletion of, or information
  about the processing of your personal information.
</p>

<p>
  To submit a privacy-related request, please contact us using the
  information provided below. We may need to verify your identity before
  completing certain requests.
</p>

<h3>10. Children's Privacy</h3>

<p>
  Our website is intended for a general audience and is not directed toward
  children under the age of 13. We do not knowingly collect personal
  information from children under 13.
</p>

<h3>11. Third-Party Websites</h3>

<p>
  Our website may contain links to third-party websites, services, or
  platforms. We are not responsible for the privacy practices, content, or
  security of third-party websites. We encourage you to review their
  privacy policies before providing personal information.
</p>

<h3>12. Changes to This Privacy Policy</h3>

<p>
  We may update this Privacy Policy from time to time to reflect changes
  in our business, website functionality, legal requirements, or privacy
  practices.
</p>

<p>
  When changes are made, we will update the "Effective Date" shown at the
  beginning of this policy. We encourage you to review this page
  periodically.
</p>

<h3>13. Contact Us</h3>

<p>
  If you have questions about this Privacy Policy or would like to make a
  privacy-related request, please contact us:
</p>

<p>
  <strong>Chairivo</strong><br>
  123 Market Street<br>
  Austin, TX 78701<br>
  United States
</p>

<p>
  <strong>Phone:</strong>
  <a href="tel:+18005550147">+1 (800) 555-0147</a><br>


</p>




  </div>
</section>

<!-- ===== FOOTER ===== -->
<footer>
  <div class="container">
    <div class="footer-grid">
      <div class="footer-col">
        <h4>Chairivo</h4>
        <p style="color:#b0b0b0;">Premium ergonomic seating for modern workspaces.</p>
      </div>
      <div class="footer-col">
		<h4>Links</h4>
        <a href="#home">Home</a>
        <a href="#chairs">Office Chairs</a>
        <a href="#features">Features</a>
        <a href="#contact">Contact</a>
        <a href="#privacy">Privacy Policy</a>
      </div>
      <div class="footer-col">
		<h4>Countact Us</h4>
        <a href="tel:+18005550147">+1 (800) 555-0147</a>

      </div>
    </div>
    <div class="footer-bottom">
      <span>© 2026 Chairivo. All rights reserved.</span>
    </div>
  </div>
</footer>

<!-- ===== SCROLL TO TOP ===== -->
<button class="scroll-top" id="scrollTopBtn"><i class="fas fa-chevron-up"></i></button>

<script>
  (function() {
    // ----- DATA -----
		const chairs = [
  {
    name: "Chairivo Pro",
    desc: "Advanced ergonomic support for demanding workdays.",
    price: 399,
    stars: 5,
    image: "ergo-pro.png"
  },
  {
    name: "Chairivo Executive",
    desc: "Premium executive comfort with adjustable lumbar support.",
    price: 499,
    stars: 5,
    image: "ergo-executive.png"
  },
  {
    name: "Chairivo Flex",
    desc: "Flexible ergonomic seating for home and office.",
    price: 299,
    stars: 4,
    image: "ergo-flex.png"
  }
];
    const reviews = [
      { name: "Michael R., Austin, TX", text: "Extremely comfortable and easy to adjust. My workday feels completely different." },
      { name: "Sarah L., Denver, CO", text: "Great chair for my home office. The lumbar support is excellent." },
      { name: "James W., Chicago, IL", text: "Premium quality without looking bulky. Highly recommended." }
    ];

    // ----- RENDER CHAIRS -----
    const chairGrid = document.getElementById('chairGrid');
    chairGrid.innerHTML = chairs.map((c, idx) => `
  <div class="chair-card reveal">

    <div style="background:#f0ede8; border-radius:40px; padding:10px;">
      <img 
        src="${c.image}" 
        alt="${c.name}"
      >
    </div>

    <h3>${c.name}</h3>

    <div class="desc">
      ${c.desc}
    </div>

    <div class="stars">
      ${'★'.repeat(c.stars)}${'☆'.repeat(5 - c.stars)}
    </div>

    <div class="price">
      $${c.price}
    </div>

    <div class="card-buttons">
      <button class="btn-view" data-chair="${c.name}">
        View Chair
      </button>

      <button class="btn-cart" data-idx="${idx}">
        Add to Cart
      </button>
    </div>

  </div>
`).join('');

    // ----- CART -----
    let cartCount = 0;
    const cartSpan = document.getElementById('cartCount');
    document.querySelectorAll('.btn-cart').forEach(btn => {
      btn.addEventListener('click', function(e) {
        cartCount++;
        cartSpan.textContent = cartCount;
        // simple feedback
        const msg = document.createElement('div');
        msg.className = 'success-msg';
        msg.textContent = '✓ Added to cart';
        this.parentElement.appendChild(msg);
        setTimeout(() => msg.remove(), 1600);
      });
    });

    // View chair alert
    document.querySelectorAll('.btn-view').forEach(btn => {
      btn.addEventListener('click', function() {
        alert(`🔍 ${this.dataset.chair} – premium ergonomic chair.`);
      });
    });

    // ----- HAMBURGER -----
    const hamburger = document.getElementById('hamburger');
    const navLinks = document.getElementById('navLinks');
    hamburger.addEventListener('click', () => {
      navLinks.classList.toggle('open');
    });
    // close on link click (mobile)
    document.querySelectorAll('.nav-links a').forEach(link => {
      link.addEventListener('click', () => navLinks.classList.remove('open'));
    });

    // ----- ACTIVE LINK & SMOOTH (already via CSS scroll) -----
    const sections = document.querySelectorAll('section[id]');
    const navAnchors = document.querySelectorAll('.nav-links a');
    window.addEventListener('scroll', () => {
      let current = '';
      sections.forEach(sec => {
        const top = sec.offsetTop - 100;
        if (window.scrollY >= top) current = sec.getAttribute('id');
      });
      navAnchors.forEach(a => {
        a.classList.remove('active');
        if (a.getAttribute('href') === '#' + current) a.classList.add('active');
      });
    });

    // ----- SCROLL TO TOP -----
    const scrollBtn = document.getElementById('scrollTopBtn');
    window.addEventListener('scroll', () => {
      if (window.scrollY > 500) scrollBtn.classList.add('visible');
      else scrollBtn.classList.remove('visible');
    });
    scrollBtn.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));

    // ----- REVEAL ON SCROLL (simple) -----
    const revealEls = document.querySelectorAll('.reveal');
    const revealObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) entry.target.classList.add('visible');
      });
    }, { threshold: 0.15 });
    revealEls.forEach(el => revealObserver.observe(el));

 

    
  })();
</script>

</body>
</html>
