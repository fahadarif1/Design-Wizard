<?php
ob_start();

include "includes/header.php";

$pageTitle = ' Professional Logo Design Services in Karachi | WAJID  Agency ';
$description = 'WAJID  Agency offers creative, professional logo design services in Karachi to build a strong, memorable brand identity for your business.';
$author = '';
$keywords = '';
$canonical = '';



$pg = ob_get_contents();

$pg = str_replace('%TITLE%', $pageTitle, $pg);

ob_end_clean();

echo $pg;
?>

<!-- =====================================================
     HERO
===================================================== -->

<section class="hero" id="home">

    <div class="hero-grid"></div>

    <div class="hero-glow"></div>

    <div class="hero-cross cross-one">+</div>
    <div class="hero-cross cross-two">+</div>


    <div class="hero-top">

        <div>
            Identity <br>
            Service
        </div>

        <div class="hero-top-right">
            KARACHI — PK<br>
            EST. 2026
        </div>

    </div>


    <div class="hero-center">

        <div class="hero-mini">
            Some Marks Just Stick
        </div>

        <h1 class="hero-title">

            <span class="hero-line hero-line-one">
               LOGO
            </span>

            <span class="hero-line hero-outline">
              DESIGN
            </span>

        </h1>

        <div class="hero-bottom-line">

            <span>
                STRATEGY × Craft × 	Identity
            </span>

            <span>
                SCROLL ↓
            </span>

        </div>

    </div>


    <div class="hero-bottom">

        <p>
           A great logo isn't drawn. It's uncovered. We search until we find the one 
            <strong>that already belongs to you.</strong>
        </p>

        <div class="hero-scroll-circle">
            ↓
        </div>

    </div>

</section>






 


  <!-- SECTION 1: Left Image + Right Text ("Who We Are") -->
  <section class="brand-section">
    <div class="section-container">
      
      <!-- Left Side Image -->
      <div class="image-col">
        <!-- Yahan apni pehli image ka path lagayein -->
        <img src="IMGES\web Development\web dev 4.webp" alt="Who We Are Visual">
      </div>

      <!-- Right Side Text -->
      <div class="content-col content-right">
        <span class="eyebrow-tag">Who We Are</span>
        <h2 class="main-heading">
          <span class="text-white">Great</span> <span class="text-purple">Products</span><br>
          <span class="text-purple">Get Lost</span><br>
          <span class="text-white">Behind Weak</span><br>
          <span class="text-outline">Branding</span>
        </h2>
        <p class="description">
          Shoppers judge a brand in seconds. A mismatched logo, a cluttered product page or a confusing checkout sends them away before they buy. We fix the parts of your brand &amp; store that shoppers notice first.
        </p>
      </div>

    </div>
  </section>

  <!-- SECTION 2: Left Text ("What We Do") + Right Image -->
  <section class="brand-section">
    <div class="section-container reverse-mobile">
      
      <!-- Left Side Text -->
      <div class="content-col content-left">
        <span class="eyebrow-tag">What We Do</span>
        <h2 class="main-heading">
          <span class="text-white">Great</span> <span class="text-purple">Products</span><br>
          <span class="text-purple">Get Lost</span><br>
          <span class="text-white">Behind Weak</span><br>
          <span class="text-outline">Branding</span>
        </h2>
        <p class="description">
          Shoppers judge a brand in seconds. A mismatched logo, a cluttered product page or a confusing checkout sends them away before they buy. We fix the parts of your brand &amp; store that shoppers notice first.
        </p>
      </div>

      <!-- Right Side Image -->
      <div class="image-col">
        <!-- Yahan apni doosri image ka path lagayein -->
        <img src="IMGES\web Development\web dev 1.webp" alt="What We Do Visual">
      </div>

    </div>
  </section>


    <!-- SECTION 1: Left Image + Right Text ("Who We Are") -->
  <section class="brand-section">
    <div class="section-container">
      
      <!-- Left Side Image -->
      <div class="image-col">
        <!-- Yahan apni pehli image ka path lagayein -->
        <img src="IMGES\web Development\web dev 4.webp" alt="Who We Are Visual">
      </div>

      <!-- Right Side Text -->
      <div class="content-col content-right">
        <span class="eyebrow-tag">Who We Are</span>
        <h2 class="main-heading">
          <span class="text-white">Great</span> <span class="text-purple">Products</span><br>
          <span class="text-purple">Get Lost</span><br>
          <span class="text-white">Behind Weak</span><br>
          <span class="text-outline">Branding</span>
        </h2>
        <p class="description">
          Shoppers judge a brand in seconds. A mismatched logo, a cluttered product page or a confusing checkout sends them away before they buy. We fix the parts of your brand &amp; store that shoppers notice first.
        </p>
      </div>

    </div>
  </section>



















  <section class="comparison-section">
    <div class="comparison-container">
      
      <!-- Section Header -->
      <div class="section-header">
        <span class="badge">Why Choose Us</span>
        <h2 class="main-title">
          <span class="italic-serif">Design Monks's Alternative?</span><br>
          <span class="bold-white">Think One More Time!</span>
        </h2>
      </div>

      <!-- Column Names Header -->
      <div class="table-header-row">
        <div>Platform</div>
        <div class="th-center">Speed</div>
        <div class="th-center">Flexibility</div>
        <div class="th-center">Quality</div>
        <div class="th-center">Scalability</div>
        <div class="th-center">Affordability</div>
      </div>

      <!-- Rows Container -->
      <div class="rows-wrapper">

        <!-- ROW 1: Design Monks (Highlighted) -->
        <div class="comparison-row highlighted">
          <div class="row-info">
            <div class="row-icon">
              <!-- Purple Icon / Logo -->
              <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
            </div>
            <div class="row-text">
              <h3>Design Monks</h3>
              <p>Expert-driven &amp; committed to higher quality. Get effective result &amp; full support without hiring in-house employees</p>
            </div>
          </div>
          <div class="status-cell" data-label="Speed">
            <svg class="check-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"></polyline></svg>
          </div>
          <div class="status-cell" data-label="Flexibility">
            <svg class="check-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"></polyline></svg>
          </div>
          <div class="status-cell" data-label="Quality">
            <svg class="check-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"></polyline></svg>
          </div>
          <div class="status-cell" data-label="Scalability">
            <svg class="check-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"></polyline></svg>
          </div>
          <div class="status-cell" data-label="Affordability">
            <svg class="check-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"></polyline></svg>
          </div>
        </div>

        <!-- ROW 2: In House Team -->
        <div class="comparison-row">
          <div class="row-info">
            <div class="row-icon">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="23 21v-2a4 4 0 0 0-3-3.87"></path><path d="16 3.13a4 4 0 0 1 0 7.75"></path></svg>
            </div>
            <div class="row-text">
              <h3>In House Team</h3>
              <p>A full-time designer may ensure brand consistency, but there's a risk of limited expertise even though you pay regularly</p>
            </div>
          </div>
          <div class="status-cell" data-label="Speed">
       <svg class="check-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"></polyline></svg>
          </div>
          <div class="status-cell" data-label="Flexibility">
       <svg class="check-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"></polyline></svg>
          </div>
          <div class="status-cell" data-label="Quality">
       <svg class="check-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"></polyline></svg>
          </div>
          <div class="status-cell" data-label="Scalability">
            <svg class="check-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"></polyline></svg>
          </div>
          <div class="status-cell" data-label="Affordability">
       <svg class="check-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"></polyline></svg>
          </div>
        </div>

        <!-- ROW 3: Creative Agencies -->
        <div class="comparison-row">
          <div class="row-info">
            <div class="row-icon">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 19l7-7 3 3-7 7-3-3z"></path><path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"></path><path d="M2 2l7.586 7.586"></path><circle cx="11" cy="11" r="2"></circle></svg>
            </div>
            <div class="row-text">
              <h3>Creative Agencies</h3>
              <p>Agencies offer structured processes but mostly with high costs, long timelines, and less flexibility for your projects</p>
            </div>
          </div>
          <div class="status-cell" data-label="Speed">
       <svg class="check-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"></polyline></svg>
          </div>
          <div class="status-cell" data-label="Flexibility">
       <svg class="check-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"></polyline></svg>
          </div>
          <div class="status-cell" data-label="Quality">
            <svg class="check-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"></polyline></svg>
          </div>
          <div class="status-cell" data-label="Scalability">
            <svg class="check-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"></polyline></svg>
          </div>
          <div class="status-cell" data-label="Affordability">
       <svg class="check-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"></polyline></svg>
          </div>
        </div>

        
        <!-- ROW 3: Creative Agencies -->
        <div class="comparison-row">
          <div class="row-info">
            <div class="row-icon">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 19l7-7 3 3-7 7-3-3z"></path><path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"></path><path d="M2 2l7.586 7.586"></path><circle cx="11" cy="11" r="2"></circle></svg>
            </div>
            <div class="row-text">
              <h3>Creative Agencies</h3>
              <p>Agencies offer structured processes but mostly with high costs, long timelines, and less flexibility for your projects</p>
            </div>
          </div>
          <div class="status-cell" data-label="Speed">
       <svg class="check-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"></polyline></svg>
          </div>
          <div class="status-cell" data-label="Flexibility">
       <svg class="check-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"></polyline></svg>
          </div>
          <div class="status-cell" data-label="Quality">
            <svg class="check-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"></polyline></svg>
          </div>
          <div class="status-cell" data-label="Scalability">
            <svg class="check-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"></polyline></svg>
          </div>
          <div class="status-cell" data-label="Affordability">
       <svg class="check-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"></polyline></svg>
          </div>
        </div>



        
        <!-- ROW 3: Creative Agencies -->
        <div class="comparison-row">
          <div class="row-info">
            <div class="row-icon">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 19l7-7 3 3-7 7-3-3z"></path><path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"></path><path d="M2 2l7.586 7.586"></path><circle cx="11" cy="11" r="2"></circle></svg>
            </div>
            <div class="row-text">
              <h3>Creative Agencies</h3>
              <p>Agencies offer structured processes but mostly with high costs, long timelines, and less flexibility for your projects</p>
            </div>
          </div>
          <div class="status-cell" data-label="Speed">
       <svg class="check-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"></polyline></svg>
          </div>
          <div class="status-cell" data-label="Flexibility">
       <svg class="check-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"></polyline></svg>
          </div>
          <div class="status-cell" data-label="Quality">
            <svg class="check-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"></polyline></svg>
          </div>
          <div class="status-cell" data-label="Scalability">
            <svg class="check-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"></polyline></svg>
          </div>
          <div class="status-cell" data-label="Affordability">
       <svg class="check-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"></polyline></svg>
          </div>
        </div>

      </div>

    </div>
  </section>















          <div class="portfolio-heading">

            <span class="portfolio-badge">OUR WORK</span>

            <h2 class="text-black">
                Selected <span>Projects</span>
            </h2>

            <p>
                Explore some of our recent work, crafted with creativity,
                strategy, and attention to detail.
            </p>

        </div>

<style>
.social-post-cards {
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 25px;
}

.social-post-card {
    background: #fff;
    border-radius: 18px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0,0,0,0.10);
    transition: 0.3s ease;
}

.social-post-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 18px 40px rgba(117,90,246,0.18);
}

.social-post-image {
    width: 100%;
    height: 300px;
    overflow: hidden;
}

.social-post-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    transition: 0.4s ease;
}

.social-post-card:hover .social-post-image img {
    transform: scale(1.05);
}

.social-post-content {
    padding: 22px;
}

.social-post-content h3 {
    margin: 0 0 10px;
    font-size: 21px;
    color: #222;
}

.social-post-content p {
    margin: 0 0 18px;
    font-size: 14px;
    line-height: 1.6;
    color: #666;
}

.social-post-btn {
    display: inline-block;
    padding: 11px 22px;
    background: #755af6;
    color: #fff !important;
    text-decoration: none;
    border-radius: 7px;
    font-size: 14px;
    font-weight: 600;
}


/* Tablet */
@media (max-width: 991px) {
    .social-post-cards {
        grid-template-columns: repeat(2, 1fr);
    }
}


/* Mobile */
@media (max-width: 600px) {
    .social-post-cards {
        grid-template-columns: 1fr;
    }

    .social-post-image {
        height: 280px;
    }
}

.portfolio-heading { 
    text-align: center; 
    margin-bottom: 55px; 
} 
 
.portfolio-badge { 
    display: inline-flex; 
    align-items: center; 
    justify-content: center; 
 
    padding: 9px 17px; 
 
    border: 1px solid #282828; 
    border-radius: 50px; 
 
    background: #111; 
 
    color: #999; 
 
    font-size: 11px; 
    letter-spacing: 2px; 
    font-weight: 600; 
 
    margin-bottom: 20px; 
} 
 
.portfolio-heading h2 { 
    margin: 0; 
 
    font-size: 55px; 
    line-height: 1.1; 
 
    font-weight: 700; 
    letter-spacing: -2px; 
} 
 
.portfolio-heading h2 span { 
    color: #7a5cf8; 
} 
 
.portfolio-heading p { 
    max-width: 580px; 
    margin: 18px auto 0; 
 
    color: #858585; 
 
    font-size: 13px; 
    line-height: 1.8; 
} 

</style>


<div class="social-post-cards">

    <!-- Card 1 -->
    <div class="social-post-card">

        <div class="social-post-image">
            <img src="IMGES\Logo Design\img-1.webp" alt="Social Media Marketing Post">
        </div>

        <div class="social-post-content">
            <h3>Creative Social Media Posts</h3>

            <p>
                Eye-catching social media designs created to increase
                engagement and build your brand.
            </p>

            <a href="#" class="social-post-btn">
                View Post
            </a>
        </div>

    </div>


    <!-- Card 2 -->
    <div class="social-post-card">

        <div class="social-post-image">
            <img src="IMGES\Logo Design\img-2.webp" alt="Social Media Campaign">
        </div>

        <div class="social-post-content">
            <h3>Social Media Campaigns</h3>

            <p>
                Strategic campaigns designed to reach your audience
                and generate meaningful results.
            </p>

            <a href="#" class="social-post-btn">
                View Post
            </a>
        </div>

    </div>


    <!-- Card 3 -->
    <div class="social-post-card">

        <div class="social-post-image">
            <img src="IMGES\Logo Design\img-3.webp" alt="Brand Social Media">
        </div>

        <div class="social-post-content">
            <h3>Brand Promotion</h3>

            <p>
                Professional social media content that helps your brand
                stand out across different platforms.
            </p>

            <a href="#" class="social-post-btn">
                View Post
            </a>
        </div>

    </div>

</div>




































































<!-- FAQ JAVASCRIPT -->











</main>








<?php include "includes/footer.php" ?>