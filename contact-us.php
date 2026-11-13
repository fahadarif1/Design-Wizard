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





<section class="contact-section">

    <div class="contact-container">

        <!-- LEFT CONTENT -->
        <div class="contact-content">

            <div class="contact-label">
                <span></span>
                LET'S CONNECT
            </div>

            <h1>
                Let's Create<br>
                Something <span>Great.</span>
            </h1>

            <p class="contact-description">
                Have a project in mind? Tell me about it and let's turn your
                idea into a modern digital experience.
            </p>

            <!-- FORM -->
            <form class="contact-form">

                <div class="form-row">

                    <div class="form-group">
                        <label>Your Name</label>
                        <input type="text" placeholder="John Doe">
                    </div>

                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="email" placeholder="john@email.com">
                    </div>

                </div>

                <div class="form-group full">
                    <label>Subject</label>
                    <input type="text" placeholder="How can I help you?">
                </div>

                <div class="form-group full">
                    <label>Message</label>
                    <textarea placeholder="Tell me about your project..."></textarea>
                </div>

                <button type="submit" class="send-btn">
                    <span>Send Message</span>
                    <div class="arrow">→</div>
                </button>

            </form>

        </div>


        <!-- RIGHT CONTENT -->
        <div class="contact-visual">

            <!-- IMAGE CARD -->
            <div class="image-card">

                <img src="includes/images (1) (2).webp" alt="Happy Clients">

                <!-- PROJECT BADGE -->
                <div class="project-badge">

                    <div class="badge-icon">
                        ✦
                    </div>

                    <div>
                        <strong>100+</strong>
                        <small>Projects Completed</small>
                    </div>

                </div>

            </div>


            <!-- TESTIMONIAL CARD -->
            <div class="testimonial-card">

                <div class="stars">
                    ★★★★★
                </div>

                <div class="quote-icon">
                    “
                </div>

                <p>
                    “Amazing work and excellent communication. The final
                    website looked even better than I imagined.”
                </p>

                <div class="client-info">

                    <div class="client-avatar">
                        C
                    </div>

                    <div class="client-name">
                        <strong>Happy Client</strong>
                        <span>Client Review</span>
                    </div>

                    <div class="verified">
                        ✓
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<style>
    /* ================= CONTACT SECTION ================= */

.contact-section {
    width: 100%;
    min-height: 850px;
    padding: 70px 7% 100px;
    background: #fa4200;
    overflow: hidden;
    font-family: Arial, Helvetica, sans-serif;
}

.contact-container {
    max-width: 1200px;
    margin: auto;
    display: grid;
    grid-template-columns: 1.05fr 0.95fr;
    gap: 50px;
    align-items: center;
}


/* ================= LEFT ================= */

.contact-label {
    display: flex;
    align-items: center;
    gap: 11px;
    color: #000000;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 3px;
    margin-bottom: 27px;
}

.contact-label span {
    width: 28px;
    height: 2px;
    background: #000000;
    display: inline-block;
}

.contact-content h1 {
    margin: 0;
    color: #ffffff;
    font-size: 64px;
    line-height: 1.03;
    font-weight: 800;
    letter-spacing: -2.5px;
}

.contact-content h1 span {
    color: #000000;
}

.contact-description {
    max-width: 530px;
    margin: 29px 0 40px;
    color: #000000;
    font-size: 15px;
    line-height: 1.8;
}


/* ================= FORM ================= */

.form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 18px;
}

.form-group {
    margin-bottom: 27px;
}

.form-group label {
    display: block;
    color: #172642;
    font-size: 12px;
    font-weight: 700;
    margin-bottom: 14px;
}

.form-group input,
.form-group textarea {
    width: 100%;
    box-sizing: border-box;
    border: 1px solid #f4c7a5;
    outline: none;
    background: rgba(255,255,255,0.85);
    border-radius: 12px;
    padding: 0 16px;
    color: #172642;
    font-size: 14px;
    transition: 0.3s ease;
}

.form-group input {
    height: 52px;
}

.form-group textarea {
    height: 115px;
    padding-top: 16px;
    resize: none;
}

.form-group input::placeholder,
.form-group textarea::placeholder {
    color: #c8cfd8;
}

.form-group input:focus,
.form-group textarea:focus {
    border-color: #f47716;
    box-shadow: 0 0 0 3px rgba(244,119,22,0.10);
}


/* ================= BUTTON ================= */

.send-btn {
    border: none;
    outline: none;
    cursor: pointer;

    height: 55px;
    padding: 5px 7px 5px 23px;

    display: flex;
    align-items: center;
    gap: 25px;

    border-radius: 35px;

    color: white;

    background: linear-gradient(
        100deg,
        #ff941f,
        #f35b0c
    );

    font-size: 13px;
    font-weight: 700;

    box-shadow: 0 12px 30px rgba(244,119,22,0.25);

    transition: 0.3s ease;
}

.send-btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 16px 35px rgba(244,119,22,0.35);
}

.send-btn .arrow {
    width: 40px;
    height: 40px;
    border-radius: 50%;

    display: flex;
    align-items: center;
    justify-content: center;

    background: rgba(255,255,255,0.18);

    font-size: 21px;
}


/* ================= RIGHT IMAGE ================= */

.contact-visual {
    position: relative;
    min-height: 610px;
    padding-top: 20px;
}

.image-card {
    position: absolute;
    top: 0;
    right: 0;

    width: 545px;
    height: 510px;

    border-radius: 28px;
    overflow: hidden;

    box-shadow: 0 25px 60px rgba(180,85,15,0.18);
}

.image-card img {
    width: 100%;
    height: 100%;
    display: block;
    object-fit: cover;
}


/* ================= PROJECT BADGE ================= */

.project-badge {
    position: absolute;
    top: 22px;
    right: 22px;

    min-width: 174px;
    height: 78px;

    padding: 0 17px;

    background: rgba(255,255,255,0.97);
    border-radius: 15px;

    display: flex;
    align-items: center;
    gap: 13px;

    box-shadow: 0 12px 30px rgba(120,70,30,0.14);
}

.badge-icon {
    width: 40px;
    height: 40px;

    display: flex;
    align-items: center;
    justify-content: center;

    color: white;

   background: linear-gradient(135deg, #fa4200, #f15d0d);

    border-radius: 10px;
    font-size: 20px;
}

.project-badge strong {
    display: block;
    color: #14233f;
    font-size: 19px;
    line-height: 1.2;
}

.project-badge small {
    display: block;
    margin-top: 4px;
    color: #7b879a;
    font-size: 9px;
}


/* ================= TESTIMONIAL ================= */

.testimonial-card {
    position: absolute;

    left: -25px;
    bottom: 25px;

    width: 300px;
    min-height: 180px;

    padding: 25px;

    box-sizing: border-box;

    background: rgba(255,255,255,0.98);
    border-radius: 23px;

    box-shadow: 0 25px 60px rgba(150,80,20,0.17);
}

.stars {
    color: #f47716;
    font-size: 13px;
    letter-spacing: 2px;
}

.quote-icon {
    position: absolute;
    right: 25px;
    top: 18px;

    color: #ffd9bd;
    font-size: 42px;
    font-weight: 900;
    line-height: 1;
}

.testimonial-card p {
    margin: 22px 0 26px;

    color: #586983;
    font-size: 13px;
    line-height: 1.8;
}


/* ================= CLIENT ================= */

.client-info {
    display: flex;
    align-items: center;
}

.client-avatar {
    width: 43px;
    height: 43px;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 50%;

    color: white;

  background: linear-gradient(135deg, #fa4200, #f15d0d);

    font-size: 15px;
    font-weight: 700;
}

.client-name {
    margin-left: 12px;
}

.client-name strong {
    display: block;
    color: #142542;
    font-size: 12px;
}

.client-name span {
    display: block;
    margin-top: 5px;
    color: #8b97a9;
    font-size: 10px;
}

.verified {
    margin-left: auto;

    width: 24px;
    height: 24px;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 50%;

    color: #f47716;
    background: #fff2e8;

    font-size: 12px;
}


/* ================= TABLET ================= */

@media (max-width: 1050px) {

    .contact-section {
        padding-left: 5%;
        padding-right: 5%;
    }

    .contact-container {
        grid-template-columns: 1fr;
        gap: 70px;
    }

    .contact-content {
        max-width: 650px;
        margin: auto;
    }

    .contact-visual {
        width: 600px;
        max-width: 100%;
        margin: auto;
    }

    .image-card {
        position: relative;
        width: 100%;
        right: auto;
    }

    .testimonial-card {
        left: -25px;
    }
}


/* ================= MOBILE ================= */

@media (max-width: 600px) {

    .contact-section {
        padding: 55px 20px 80px;
    }

    .contact-content h1 {
        font-size: 43px;
        letter-spacing: -1.5px;
    }

    .contact-description {
        font-size: 14px;
        margin-bottom: 30px;
    }

    .form-row {
        grid-template-columns: 1fr;
        gap: 0;
    }

    .contact-visual {
        min-height: 500px;
    }

    .image-card {
        height: 390px;
        border-radius: 20px;
    }

    .project-badge {
        top: 15px;
        right: 15px;
        min-width: 155px;
        height: 68px;
    }

    .testimonial-card {
        left: 10px;
        right: 10px;
        bottom: 0;
        width: auto;
        min-height: 170px;
        padding: 20px;
    }

    .send-btn {
        width: 190px;
        justify-content: space-between;
    }
}
</style>


 






















<!-- FAQ JAVASCRIPT -->











</main>








<?php include "includes/footer.php" ?>