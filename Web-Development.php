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
 
            <span class="hero-line hero-outline wizard-gradient-text">
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
    margin-bottom: 20px
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


<div class="social-post-cards">

    <!-- Card 1 -->
    <div class="social-post-card">

        <div class="social-post-image">
            <img src="IMGES\Logo Design\img-4.webp" alt="Social Media Marketing Post">
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
            <img src="IMGES\Logo Design\img-5.webp" alt="Social Media Campaign">
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
            <img src="IMGES\Logo Design\img-6.webp" alt="Brand Social Media">
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







<section class="kinetic">

    <div class="kinetic-top">

        A FOUR AGENCY / 2026

    </div>


    <div class="kinetic-lines">

        <div class="kinetic-line line-a">
            YOUR
        </div>

        <div class="kinetic-line outline-black line-b">
            BRAND
        </div>

        <div class="kinetic-line line-c">
            DESERVES
        </div>

        <div class="kinetic-line orange-line line-d wizard-gradient-text">
            MORE.
        </div>

    </div>

</section>




































  <section class="packages-section">
    <div class="packages-container">
      
      <div class="cards-grid">

        <!-- CARD 1: Commercial / Ads -->
        <div class="package-card">
          <span class="card-badge">Commercial / Ads</span>

          <div class="price-block">
            <span class="price-amount">10,000,000/</span><span class="price-currency">Pkr</span>
          </div>

          <p class="price-note">
            Indicative starting point for a 1-minute commercial. Final budget depends on production cost, scale and value of the idea.
          </p>

          <a href="#details-commercial" class="cta-btn">
            <span>Click here to View Details</span>
            <span class="arrow-circle">&#8599;</span>
          </a>

          <ul class="feature-list">
            <li class="feature-item">
              <div class="feature-left">
                <span class="check-icon"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg></span>
                <span class="feature-title">Creative / Development</span>
              </div>
              <span class="feature-desc">Concept, script, treatment, pre-visualization</span>
            </li>

            <li class="feature-item">
              <div class="feature-left">
                <span class="check-icon"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg></span>
                <span class="feature-title">Production</span>
              </div>
              <span class="feature-desc">Crew, equipment, locations, set, cast, transport, catering</span>
            </li>

            <li class="feature-item">
              <div class="feature-left">
                <span class="check-icon"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg></span>
                <span class="feature-title">Post</span>
              </div>
              <span class="feature-desc">Edit, colour, sound, music, graphics, VFX</span>
            </li>

            <li class="feature-item">
              <div class="feature-left">
                <span class="check-icon"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg></span>
                <span class="feature-title">Agency / Project</span>
              </div>
              <span class="feature-desc">Production management, client servicing, deliverables</span>
            </li>

            <li class="feature-item">
              <div class="feature-left">
                <span class="check-icon"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg></span>
                <span class="feature-title">Usage / Talent</span>
              </div>
              <span class="feature-desc">Talent fees, licensing, music rights, usage term (TV &amp; OLV)</span>
            </li>

            <li class="feature-item">
              <div class="feature-left">
                <span class="check-icon"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg></span>
                <span class="feature-title">Contingency</span>
              </div>
              <span class="feature-desc">Recommended allowance for production unknowns</span>
            </li>
          </ul>
        </div>

        <!-- CARD 2: YouTube & creator content -->
        <div class="package-card">
          <span class="card-badge">YouTube &amp; creator content</span>

          <div class="price-block">
            <span class="price-amount">300,000/</span><span class="price-currency">Pkr</span>
            <span class="price-period">(month)</span>
          </div>

          <p class="price-note">
            Example: 25 videos/month PKR 12,000 per video. Monthly retainer or per-video.
          </p>

          <a href="#details-youtube" class="cta-btn">
            <span>Click here to View Details</span>
            <span class="arrow-circle">&#8599;</span>
          </a>

          <p class="includes-label">Includes:</p>

          <ul class="feature-list">
            <li class="feature-item">
              <div class="feature-left">
                <span class="check-icon"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg></span>
                <span class="feature-title">Editing of supplied footage</span>
              </div>
            </li>

            <li class="feature-item">
              <div class="feature-left">
                <span class="check-icon"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg></span>
                <span class="feature-title">Music placement</span>
              </div>
            </li>

            <li class="feature-item">
              <div class="feature-left">
                <span class="check-icon"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg></span>
                <span class="feature-title">Subtitles</span>
              </div>
            </li>

            <li class="feature-item">
              <div class="feature-left">
                <span class="check-icon"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg></span>
                <span class="feature-title">Standard pacing / transitions</span>
              </div>
            </li>

            <li class="feature-item">
              <div class="feature-left">
                <span class="check-icon"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg></span>
                <span class="feature-title">Defined monthly workflow</span>
              </div>
            </li>

            <li class="feature-item">
              <div class="feature-left">
                <span class="check-icon"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg></span>
                <span class="feature-title">Agreed revision allowance</span>
              </div>
            </li>

            <li class="feature-item">
              <div class="feature-left">
                <span class="check-icon"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg></span>
                <span class="feature-title">Excludes / Quoted Separately</span>
              </div>
              <span class="feature-desc">Filming • Heavy VFX / animation • Custom thumbnails • Alternate versions</span>
            </li>

            <li class="feature-item">
              <div class="feature-left">
                <span class="check-icon"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg></span>
                <span class="feature-title">Revisions</span>
              </div>
              <span class="feature-desc">Agreed allowance</span>
            </li>
          </ul>
        </div>

        <!-- CARD 3: Custom Quote -->
        <div class="package-card">
          <span class="card-badge">Custom Quote</span>

          <h3 class="custom-title">
            Everything<br>
            Else, <span class="highlight">Scoped<br>to You</span>
          </h3>

          <a href="#custom-quote" class="cta-btn">
            <span>Get Custom Quote</span>
            <span class="arrow-circle">&#8599;</span>
          </a>

          <ul class="feature-list">
            <li class="feature-item">
              <div class="feature-left">
                <span class="check-icon"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg></span>
                <span class="feature-title">Brand film</span>
              </div>
              <span class="feature-desc">Custom production</span>
            </li>

            <li class="feature-item">
              <div class="feature-left">
                <span class="check-icon"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg></span>
                <span class="feature-title">Documentary</span>
              </div>
              <span class="feature-desc">Research + production + post</span>
            </li>

            <li class="feature-item">
              <div class="feature-left">
                <span class="check-icon"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg></span>
                <span class="feature-title">Short / Feature Film</span>
              </div>
              <span class="feature-desc">Narrative production / post</span>
            </li>

            <li class="feature-item">
              <div class="feature-left">
                <span class="check-icon"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg></span>
                <span class="feature-title">Youtube (Per Video)</span>
              </div>
              <span class="feature-desc">Based on edit complexity</span>
            </li>

            <li class="feature-item">
              <div class="feature-left">
                <span class="check-icon"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg></span>
                <span class="feature-title">Social / Reels</span>
              </div>
              <span class="feature-desc">Per asset or monthly package</span>
            </li>

            <li class="feature-item">
              <div class="feature-left">
                <span class="check-icon"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg></span>
                <span class="feature-title">Post-Production Only</span>
              </div>
              <span class="feature-desc">Edit / colour / sound / VFX</span>
            </li>
          </ul>
        </div>

      </div>

      <!-- Bottom Note -->
      <p class="section-footer-note">
        Final quote depends on format, duration, production days, locations, cast, crew, equipment, post, deadline &amp; revisions.
      </p>

    </div>
  </section>























<!-- FAQ JAVASCRIPT -->











</main>








<?php include "includes/footer.php" ?>