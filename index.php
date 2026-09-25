<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes">
  <title>luvxexa — Discover Products You’ll Love</title>
  <meta name="description" content="USA-focused online shopping store. Discover curated products, fast shipping, secure checkout. Privacy and terms included.">
  <style>
    /* ---------- RESET & BASE ---------- */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    html {
      scroll-behavior: smooth;
    }

    body {
      font-family: system-ui, -apple-system, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
      background-color: #ffffff;
      color: #1e293b;
      line-height: 1.5;
      padding-top: 70px; /* sticky nav offset */
    }

    /* ---------- TYPOGRAPHY ---------- */
    h1, h2, h3 {
      font-weight: 600;
      line-height: 1.2;
      letter-spacing: -0.02em;
    }

    h1 {
      font-size: 2.5rem;
      margin-bottom: 1rem;
    }

    h2 {
      font-size: 2rem;
      margin-bottom: 1rem;
      color: #0f172a;
    }

    h3 {
      font-size: 1.25rem;
      margin-bottom: 0.5rem;
    }

    p {
      color: #334155;
      margin-bottom: 1rem;
    }

    a {
      text-decoration: none;
      color: inherit;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 1.5rem;
    }

    /* ---------- BUTTONS ---------- */
    .btn {
      display: inline-block;
      background: #2563eb;
      color: #ffffff;
      font-weight: 500;
      padding: 0.65rem 1.5rem;
      border-radius: 8px;
      border: none;
      cursor: pointer;
      font-size: 0.95rem;
      transition: background 0.2s, box-shadow 0.2s;
      text-align: center;
      line-height: 1.3;
    }

    .btn:hover {
      background: #1d4ed8;
      box-shadow: 0 4px 10px rgba(37, 99, 235, 0.2);
    }

    .btn-outline {
      background: transparent;
      color: #2563eb;
      border: 1.5px solid #2563eb;
    }

    .btn-outline:hover {
      background: #eff6ff;
      box-shadow: none;
    }

    .btn-secondary {
      background: #0f172a;
    }

    .btn-secondary:hover {
      background: #1e293b;
    }

    /* ---------- STICKY NAVIGATION ---------- */
    .navbar {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      background: rgba(255, 255, 255, 0.96);
      backdrop-filter: blur(4px);
      box-shadow: 0 1px 8px rgba(0, 0, 0, 0.04);
      z-index: 1000;
      border-bottom: 1px solid #e2e8f0;
      padding: 0.75rem 0;
    }

    .nav-container {
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
      gap: 0.75rem;
    }

    .logo {
      font-weight: 700;
      font-size: 1.5rem;
      letter-spacing: -0.03em;
      color: #0f172a;
      display: flex;
      align-items: center;
      gap: 0.3rem;
    }

    .logo span {
      color: #2563eb;
    }

    .nav-links {
      display: flex;
      flex-wrap: wrap;
      gap: 1.2rem;
      list-style: none;
      font-size: 0.95rem;
      font-weight: 500;
    }

    .nav-links a {
      color: #1e293b;
      padding: 0.25rem 0;
      border-bottom: 2px solid transparent;
      transition: border-color 0.15s;
    }

    .nav-links a:hover {
      border-bottom-color: #2563eb;
      color: #2563eb;
    }

    /* ---------- SECTIONS ---------- */
    section {
      padding: 4rem 0;
      scroll-margin-top: 80px;
    }

    .section-header {
      text-align: center;
      max-width: 700px;
      margin: 0 auto 2.5rem;
    }

    /* ---------- HERO ---------- */
    .hero {
      background: linear-gradient(105deg, #f8fafc 0%, #f1f5f9 100%);
      border-radius: 0 0 32px 32px;
      margin-bottom: 1rem;
      padding: 4rem 0;
    }

    .hero-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      align-items: center;
      gap: 3rem;
    }

    .hero-content h1 {
      font-size: 3rem;
      color: #0f172a;
      margin-bottom: 1rem;
    }

    .hero-content p {
      font-size: 1.15rem;
      color: #475569;
      margin-bottom: 2rem;
      max-width: 500px;
    }

    .hero-image {
      background: #e2e8f0;
      border-radius: 24px;
      overflow: hidden;
      aspect-ratio: 5 / 4;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 15px 30px -10px rgba(0, 0, 0, 0.08);
    }

    .hero-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
    }

    /* ---------- PRODUCT GRID ---------- */
    .product-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
      gap: 1.8rem;
    }

    .product-card {
      background: #ffffff;
      border-radius: 16px;
      border: 1px solid #e2e8f0;
      overflow: hidden;
      transition: transform 0.15s, box-shadow 0.2s;
      display: flex;
      flex-direction: column;
    }

    .product-card:hover {
      transform: translateY(-4px);
      box-shadow: 0 16px 24px -8px rgba(0, 0, 0, 0.08);
      border-color: #cbd5e1;
    }

    .product-image {
      aspect-ratio: 1 / 1;
      background: #f1f5f9;
      display: flex;
      align-items: center;
      justify-content: center;
      overflow: hidden;
    }

    .product-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
    }

    .product-info {
      padding: 1.2rem 1rem 1.2rem;
      flex: 1;
      display: flex;
      flex-direction: column;
    }

    .product-name {
      font-size: 1.05rem;
      font-weight: 600;
      margin-bottom: 0.25rem;
      color: #0f172a;
    }

    .product-desc {
      font-size: 0.85rem;
      color: #64748b;
      margin-bottom: 0.75rem;
      flex: 1;
    }

    .product-price {
      font-weight: 700;
      font-size: 1.15rem;
      color: #0f172a;
      margin-bottom: 0.8rem;
    }

    .product-actions {
      display: flex;
      gap: 0.6rem;
      flex-wrap: wrap;
    }

    .product-actions .btn {
      padding: 0.45rem 0.9rem;
      font-size: 0.8rem;
      flex: 1;
      white-space: nowrap;
    }

    /* ---------- ABOUT & CONTACT ---------- */
    .about-content {
      max-width: 800px;
      margin: 0 auto;
      text-align: center;
      background: #f8fafc;
      padding: 2.5rem 2rem;
      border-radius: 24px;
      border: 1px solid #e2e8f0;
    }

    .contact-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 2.5rem;
      background: #f8fafc;
      border-radius: 24px;
      padding: 2.5rem;
      border: 1px solid #e2e8f0;
    }

    .contact-form .form-group {
      margin-bottom: 1.2rem;
    }

    .contact-form label {
      display: block;
      font-weight: 500;
      font-size: 0.9rem;
      margin-bottom: 0.3rem;
      color: #1e293b;
    }

    .contact-form input,
    .contact-form textarea {
      width: 100%;
      padding: 0.75rem 1rem;
      border: 1px solid #cbd5e1;
      border-radius: 8px;
      font-size: 0.95rem;
      background: #ffffff;
      transition: border 0.15s, box-shadow 0.15s;
      font-family: inherit;
    }

    .contact-form input:focus,
    .contact-form textarea:focus {
      outline: none;
      border-color: #2563eb;
      box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
    }

    .contact-info {
      display: flex;
      flex-direction: column;
      gap: 1.5rem;
      justify-content: center;
    }

    .contact-info-item {
      display: flex;
      align-items: flex-start;
      gap: 0.75rem;
    }

    .contact-icon {
      font-size: 1.25rem;
      line-height: 1;
      color: #2563eb;
      min-width: 1.5rem;
    }

    /* ---------- POLICY SECTIONS ---------- */
    .policy-content {
      background: #ffffff;
      border-radius: 20px;
      padding: 2rem 2rem;
      border: 1px solid #e2e8f0;
      max-width: 1000px;
      margin: 0 auto;
    }

    .policy-content h3 {
      margin-top: 1.8rem;
      margin-bottom: 0.5rem;
      font-size: 1.15rem;
      color: #0f172a;
      scroll-margin-top: 90px;
    }

    .policy-content h3:first-of-type {
      margin-top: 0;
    }

    .policy-content p,
    .policy-content ul {
      color: #334155;
      font-size: 0.95rem;
      margin-bottom: 0.75rem;
    }

    .policy-content ul {
      padding-left: 1.5rem;
      margin-bottom: 1rem;
    }

    .policy-content li {
      margin-bottom: 0.25rem;
    }

    /* ---------- FOOTER ---------- */
    .footer {
      background: #0f172a;
      color: #e2e8f0;
      padding: 3rem 0 2rem;
      margin-top: 2rem;
    }

    .footer-grid {
      display: grid;
      grid-template-columns: 2fr 1fr 1fr;
      gap: 2.5rem;
    }

    .footer-logo {
      font-weight: 700;
      font-size: 1.5rem;
      letter-spacing: -0.03em;
      color: #ffffff;
      margin-bottom: 0.75rem;
    }

    .footer-logo span {
      color: #3b82f6;
    }

    .footer-desc {
      color: #94a3b8;
      font-size: 0.9rem;
      max-width: 300px;
      margin-bottom: 1.25rem;
    }

    .footer-links {
      list-style: none;
    }

    .footer-links li {
      margin-bottom: 0.6rem;
    }

    .footer-links a {
      color: #cbd5e1;
      font-size: 0.9rem;
      transition: color 0.15s;
    }

    .footer-links a:hover {
      color: #ffffff;
      text-decoration: underline;
    }

    .footer-bottom {
      border-top: 1px solid #1e293b;
      margin-top: 2.5rem;
      padding-top: 1.5rem;
      text-align: center;
      font-size: 0.85rem;
      color: #94a3b8;
    }

    /* ---------- RESPONSIVE ---------- */
    @media (max-width: 900px) {
      .hero-grid {
        grid-template-columns: 1fr;
        gap: 2rem;
      }

      .hero-content h1 {
        font-size: 2.5rem;
      }

      .contact-grid {
        grid-template-columns: 1fr;
        padding: 2rem 1.5rem;
      }

      .footer-grid {
        grid-template-columns: 1fr 1fr;
      }
    }

    @media (max-width: 680px) {
      body {
        padding-top: 80px;
      }

      .navbar {
        padding: 0.6rem 0;
      }

      .nav-container {
        flex-direction: column;
        align-items: flex-start;
      }

      .nav-links {
        gap: 0.8rem;
        font-size: 0.85rem;
        width: 100%;
        justify-content: flex-start;
      }

      h1 {
        font-size: 2rem;
      }

      h2 {
        font-size: 1.6rem;
      }

      section {
        padding: 2.5rem 0;
      }

      .hero {
        padding: 2.5rem 0;
      }

      .hero-content h1 {
        font-size: 2rem;
      }

      .hero-content p {
        font-size: 1rem;
      }

      .product-grid {
        grid-template-columns: 1fr 1fr;
        gap: 1rem;
      }

      .product-actions {
        flex-direction: column;
        gap: 0.4rem;
      }

      .product-actions .btn {
        width: 100%;
        padding: 0.5rem 0.5rem;
        font-size: 0.75rem;
      }

      .contact-grid {
        padding: 1.5rem 1rem;
      }

      .policy-content {
        padding: 1.5rem 1rem;
      }

      .footer-grid {
        grid-template-columns: 1fr;
        gap: 1.8rem;
      }

      .footer-desc {
        max-width: 100%;
      }
    }

    @media (max-width: 420px) {
      .product-grid {
        grid-template-columns: 1fr;
      }

      .nav-links {
        gap: 0.5rem;
        font-size: 0.8rem;
      }

      .logo {
        font-size: 1.3rem;
      }
    }

    /* placeholder image styling */
    .placeholder-img {
      background: #e2e8f0;
      width: 100%;
      height: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #64748b;
      font-size: 0.8rem;
      font-weight: 500;
      text-transform: uppercase;
      letter-spacing: 0.03em;
    }

    /* utility */
    .text-center {
      text-align: center;
    }

    .mt-2 {
      margin-top: 0.5rem;
    }
  </style>
</head>
<body>
  <!-- STICKY NAVIGATION -->
  <header class="navbar">
    <div class="container nav-container">
      <a href="#" class="logo">luv<span>xexa</span></a>
      <nav aria-label="Main navigation">
        <ul class="nav-links">
          <li><a href="#home">Home</a></li>
          <li><a href="#shop">Shop</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main>
    <!-- HERO SECTION -->
    <section id="home" class="hero">
      <div class="container hero-grid">
        <div class="hero-content">
          <h1>Discover Products You’ll Love</h1>
          <p>Curated essentials for modern American living. Quality picks, fair prices, and fast shipping from our US warehouse.</p>

        </div>
        <div class="hero-image">
          <!-- Replace with your own hero image -->
          <img src="banner.png" alt="Modern shopping hero image">
        </div>
      </div>
    </section>

   <!-- SHOP SECTION -->
<section id="shop">
  <div class="container">
    <div class="section-header">
      <h2>Featured Products</h2>
      <p>Handpicked items from trusted brands — all ready to ship within the USA.</p>
    </div>

    <div class="product-grid">

     
      <!-- WOMEN'S DRESS 1 -->
      <article class="product-card">
        <div class="product-image">
          <img src="women-dress-1.png" alt="Women's Floral Summer Dress">
        </div>
        <div class="product-info">
          <h3 class="product-name">Floral Summer Dress</h3>
          <p class="product-desc">Lightweight floral dress with a comfortable fit, perfect for everyday wear.</p>
          <div class="product-price">$49.99</div>
         
        </div>
      </article>

      <!-- WOMEN'S DRESS 2 -->
      <article class="product-card">
        <div class="product-image">
          <img src="women-dress-2.png" alt="Women's Elegant Midi Dress">
        </div>
        <div class="product-info">
          <h3 class="product-name">Elegant Midi Dress</h3>
          <p class="product-desc">Elegant midi dress with a flattering silhouette for casual and special occasions.</p>
          <div class="product-price">$64.99</div>
          
        </div>
      </article>

      <!-- WOMEN'S DRESS 3 -->
      <article class="product-card">
        <div class="product-image">
          <img src="women-dress-3.jpg" alt="Women's Casual Maxi Dress">
        </div>
        <div class="product-info">
          <h3 class="product-name">Lehanga</h3>
          <p class="product-desc">Soft and comfortable maxi dress designed for relaxed everyday style.</p>
          <div class="product-price">$59.99</div>
          
        </div>
      </article>

    </div>
  </div>
</section>
    <!-- ABOUT SECTION -->
    <section id="about">
      <div class="container">
        <div class="section-header">
          <h2>About luvxexa</h2>
        </div>
        <div class="about-content">
          <p>luvxexa offers carefully selected products that blend quality, value, and everyday practicality. We work directly with trusted suppliers to bring you a curated collection — from tech accessories to home essentials — all shipped from within the United States.</p>
          <p>Our goal is simple: provide a straightforward, convenient online shopping experience with transparent pricing, secure checkout, and responsive customer support. No clutter, no gimmicks — just good products and reliable service.</p>
        </div>
      </div>
    </section>

    <!-- CONTACT SECTION -->
    <section id="contact">
      <div class="container">
        <div class="section-header">
          <h2>Contact Us</h2>
          <p>We’re here to help. Send us a message and we’ll respond within one business day.</p>
        </div>
        <div class="contact-grid">
           <div class="contact-info">
            
            <div class="contact-info-item">
              <span class="contact-icon">📍</span>
              <div>
                <strong> Location</strong><br>
                <span>139 West 35th Street, <br>New York, NY 10018</span>
              </div>
            </div><div class="contact-info-item">
              <span class="contact-icon">📍</span>
              <div>
                <strong> Phone</strong><br>
                <span>+1 (864) 565-4567</span>
              </div>
            </div>
            <div class="contact-info-item">
              <span class="contact-icon">🕒</span>
              <div>
                <strong>Support Hours</strong><br>
                <span>Mon–Fri: 9am – 6pm CST<br>Sat: 10am – 4pm CST</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

   <!-- PRIVACY POLICY SECTION -->

<section id="privacy">
  <div class="container">
    <div class="section-header">
      <h2>Privacy Policy</h2>
      <p>Last Updated: September 25, 2026</p>
    </div>

<div class="policy-content">

  <h3>1. Introduction</h3>
  <p>
    Welcome to <strong>luvxexa</strong>. We respect your privacy and are committed
    to protecting the personal information you provide when you visit or shop through
    our website. This Privacy Policy explains what information we collect, how we use
    it, how we protect it, and the choices available to you.
  </p>

  <p>
    By accessing or using our website, you acknowledge that you have read and understood
    this Privacy Policy. If you do not agree with this policy, please discontinue use
    of our website.
  </p>

  <h3>2. Information We Collect</h3>
  <p>
    We may collect personal and technical information when you browse our website,
    create an account, place an order, contact us, subscribe to communications, or
    otherwise interact with our services.
  </p>

  <p>Information we may collect includes:</p>
  <ul>
    <li>Full name</li>
    <li>Email address</li>
    <li>Phone number</li>
    <li>Billing and shipping address</li>
    <li>Order and purchase information</li>
    <li>Product preferences and customer service communications</li>
    <li>Payment-related information processed through payment providers</li>
    <li>IP address</li>
    <li>Browser and device information</li>
    <li>Pages viewed and website interaction information</li>
  </ul>

  <h3>3. Information You Provide</h3>
  <p>
    You may voluntarily provide information when you purchase clothing, dresses,
    accessories, or other products; create an account; contact customer support;
    submit a review; subscribe to our newsletter; or participate in promotions.
  </p>

  <h3>4. Automatically Collected Information</h3>
  <p>
    When you visit our website, certain information may be collected automatically,
    including your IP address, browser type, operating system, device type, referring
    website, pages visited, approximate time spent on pages, and other technical
    information.
  </p>

  <p>
    We use this information to maintain website functionality, improve performance,
    understand customer interactions, and help detect security issues or fraudulent
    activity.
  </p>

  <h3>5. How We Use Your Information</h3>
  <p>We may use your information to:</p>
  <ul>
    <li>Process and fulfill your orders</li>
    <li>Arrange shipping and delivery</li>
    <li>Process payments through authorized payment providers</li>
    <li>Provide customer service and support</li>
    <li>Send order confirmations and shipping updates</li>
    <li>Respond to questions and requests</li>
    <li>Improve our products, website, and shopping experience</li>
    <li>Prevent fraud, abuse, and unauthorized activity</li>
    <li>Maintain website security</li>
    <li>Send promotional communications where permitted by law</li>
    <li>Comply with applicable legal obligations</li>
  </ul>

  <h3>6. Cookies and Similar Technologies</h3>
  <p>
    Our website may use cookies, pixels, local storage, and similar technologies.
    These technologies may help us remember your preferences, maintain shopping cart
    functionality, understand website traffic, and improve your browsing experience.
  </p>

  <p>
    Some cookies may be provided by third-party services used for analytics,
    advertising, payment processing, security, or other website functions.
  </p>

  <p>
    You can manage or disable cookies through your browser settings. Please note
    that disabling certain cookies may affect the functionality of some parts of
    our website.
  </p>

  <h3>7. Shopping Cart and Order Information</h3>
  <p>
    When you add products to your shopping cart or place an order, we may collect
    information necessary to maintain your cart, process your purchase, provide
    order confirmations, arrange delivery, and provide customer support.
  </p>

  <h3>8. Payment Information</h3>
  <p>
    Payments may be processed through third-party payment processors. These
    providers may collect payment information necessary to authorize and complete
    your transaction.
  </p>

  <p>
    Unless otherwise stated, we do not store complete payment card numbers or
    security codes on our own servers. Payment providers process payment information
    according to their own terms and privacy policies.
  </p>

  <h3>9. Shipping and Delivery</h3>
  <p>
    To fulfill your purchase, we may share necessary information such as your name,
    shipping address, phone number, order information, and delivery instructions
    with shipping carriers, fulfillment providers, and other service providers
    involved in delivering your order.
  </p>

  <h3>10. Product Reviews and Customer Content</h3>
  <p>
    If you voluntarily submit a product review, testimonial, photograph, comment,
    or other content, information contained in that submission may be displayed
    publicly where the relevant feature allows it.
  </p>

  <p>
    Please avoid submitting sensitive personal information in public reviews or
    other publicly accessible areas of the website.
  </p>

  <h3>11. Third-Party Services</h3>
  <p>
    We may use trusted third-party service providers for payment processing,
    website hosting, shipping, order fulfillment, analytics, customer support,
    email delivery, security, and marketing.
  </p>

  <p>
    These providers may process information on our behalf to provide the services
    they perform for us. Their use of information may also be governed by their
    respective privacy policies.
  </p>

  <h3>12. Analytics and Advertising</h3>
  <p>
    We may use analytics and advertising technologies to understand website usage,
    measure marketing performance, improve our services, and display advertisements
    that may be relevant to visitors.
  </p>

  <p>
    These services may use cookies or similar technologies to collect information
    about browsing activity. You may have options to manage certain advertising
    and tracking preferences depending on your location and applicable law.
  </p>

  <h3>13. Email and Marketing Communications</h3>
  <p>
    If you subscribe to our newsletter or otherwise provide permission where
    required, we may send you information about new collections, women's fashion,
    promotions, discounts, products, and other store updates.
  </p>

  <p>
    You can unsubscribe from promotional emails at any time by following the
    unsubscribe instructions included in the communication.
  </p>

  <h3>14. How We Share Information</h3>
  <p>
    We do not sell your personal information as part of our ordinary business
    operations. We may disclose information when reasonably necessary to operate
    our website and provide services to you.
  </p>

  <p>Information may be shared with:</p>
  <ul>
    <li>Payment processors</li>
    <li>Shipping and delivery providers</li>
    <li>Order fulfillment providers</li>
    <li>Website hosting and technology providers</li>
    <li>Analytics and advertising providers</li>
    <li>Customer support providers</li>
    <li>Professional advisers and service providers</li>
    <li>Government authorities where legally required</li>
  </ul>

  <h3>15. Data Security</h3>
  <p>
    We use reasonable administrative, technical, and organizational safeguards
    designed to protect personal information against unauthorized access,
    alteration, disclosure, misuse, or destruction.
  </p>

  <p>
    However, no method of transmission or electronic storage is completely secure.
    Therefore, we cannot guarantee that information transmitted over the internet
    will always be completely secure.
  </p>

  <h3>16. Data Retention</h3>
  <p>
    We retain personal information for as long as reasonably necessary to provide
    our services, process orders, maintain business records, resolve disputes,
    prevent fraud, comply with legal obligations, and enforce applicable agreements.
  </p>

  <h3>17. Your Privacy Rights</h3>
  <p>
    Depending on your location and applicable law, you may have certain rights
    regarding your personal information. These rights may include requesting
    access to, correction of, or deletion of personal information.
  </p>

  <p>
    You may also have rights relating to certain marketing communications,
    cookies, or other processing activities.
  </p>

  <p>
    To make a privacy request, please contact us using the contact information
    provided below. We may need to verify your identity before processing certain
    requests.
  </p>

  <h3>18. California Privacy Rights</h3>
  <p>
    If you are a California resident, you may have additional privacy rights under
    applicable California privacy laws. Depending on the circumstances, these
    rights may include rights relating to access, correction, deletion, and
    information about the collection or disclosure of personal information.
  </p>

  <p>
    California residents may contact us using the information below to submit an
    applicable privacy request. We will process qualifying requests in accordance
    with applicable law.
  </p>

  <h3>19. Children's Privacy</h3>
  <p>
    Our website is intended for a general audience and is not directed toward
    children under the age of 13. We do not knowingly collect personal information
    from children under 13 through our website.
  </p>

  <p>
    If you believe that a child has provided personal information to us, please
    contact us so that we can review and take appropriate action.
  </p>

  <h3>20. Third-Party Links</h3>
  <p>
    Our website may contain links to third-party websites, social media platforms,
    payment services, or other external resources. We are not responsible for the
    privacy practices, content, or security of third-party websites.
  </p>

  <p>
    We recommend reviewing the privacy policies of third-party websites before
    providing them with personal information.
  </p>

  <h3>21. Business Transfers</h3>
  <p>
    If our business is involved in a merger, acquisition, reorganization,
    financing, sale of assets, or similar transaction, personal information may
    be transferred as part of that transaction, subject to applicable law.
  </p>

  <h3>22. Changes to This Privacy Policy</h3>
  <p>
    We may update this Privacy Policy periodically to reflect changes to our
    business practices, website features, technology, or applicable legal
    requirements.
  </p>

  <p>
    When changes are made, we will update the "Last Updated" date displayed at
    the top of this page. We encourage you to review this Privacy Policy
    periodically.
  </p>

  <h3>23. Contact Information</h3>
  <p>
    If you have questions, concerns, or requests regarding this Privacy Policy,
    please contact us:
  </p>

  <p>
    Phone:+1 (864) 565-4567<br>
  </p>

</div>


  </div>
</section>

  </main>

  <!-- FOOTER -->
  <footer class="footer">
    <div class="container">
      <div class="footer-grid">
        <div>
          <div class="footer-logo">luv<span>xexa</span></div>
          <p class="footer-desc">Curated products for modern American living. Quality, convenience, and trusted service.</p>
        </div>
        <div>
          <h4 style="color:#fff; margin-bottom:1rem; font-size:1rem; font-weight:600;">Quick Links</h4>
          <ul class="footer-links">
            <li><a href="#home">Home</a></li>
            <li><a href="#shop">Shop</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div>
        <div>
          <h4 style="color:#fff; margin-bottom:1rem; font-size:1rem; font-weight:600;">Legal &amp; Help</h4>
          <ul class="footer-links">
            <li><a href="#privacy">Privacy Policy</a></li>
            <li><a href="#contact">Support</a></li>
          </ul>
        </div>
      </div>
      <div class="footer-bottom">
        <p>© 2026 luvxexa. All rights reserved.</p>
      </div>
    </div>
  </footer>

  <!-- simple vanilla JS for smooth scrolling is not required as CSS scroll-behavior covers it, 
       but we add a tiny fallback for browsers that don't support it (optional) -->
  <script>
    // Optional: smooth scroll for anchor links (CSS handles it, but this ensures older browsers also work)
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function(e) {
        const targetId = this.getAttribute('href');
        if (targetId === '#') return;
        const targetElement = document.querySelector(targetId);
        if (targetElement) {
          e.preventDefault();
          targetElement.scrollIntoView({ behavior: 'smooth' });
        }
      });
    });
  </script>
</body>
</html>
