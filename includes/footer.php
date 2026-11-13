

<footer class="dw-footer">

    <div class="dw-footer-container">

        <div class="dw-footer-grid">

            <!-- COLUMN 1: BRAND -->
            <div class="dw-footer-brand">

                <a href="/" class="dw-footer-logo">

                    <span class="dw-footer-logo-main">
                        Design<span>.</span>
                    </span>

                    <span class="dw-footer-logo-sub">
                        Wizard
                    </span>

                </a>

                <p class="dw-footer-description">
                    Brand identity and Shopify store design
                    for D2C and e-commerce brands.
                </p>


                <!-- SOCIAL ICONS -->
                <div class="dw-footer-social">

                    <a href="#" aria-label="Facebook">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>

                    <a href="#" aria-label="Instagram">
                        <i class="fa-brands fa-instagram"></i>
                    </a>

                    <a href="#" aria-label="LinkedIn">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>

                    <a href="#" aria-label="X Twitter">
                        <i class="fa-brands fa-x-twitter"></i>
                    </a>

                    <a href="#" aria-label="Dribbble">
                        <i class="fa-brands fa-dribbble"></i>
                    </a>

                </div>

            </div>


            <!-- COLUMN 2: STUDIO -->
            <div class="dw-footer-column">

                <h3>Studio</h3>

                <nav class="dw-footer-links">

                    <a href="/">Home</a>
                    <a href="#services">Services</a>
                    <a href="#pricing">Pricing</a>
                    <a href="#work">Work</a>
                    <a href="#about">About</a>

                </nav>

            </div>


            <!-- COLUMN 3: START -->
            <div class="dw-footer-column">

                <h3>Start</h3>

                <nav class="dw-footer-links">

                    <a href="#audit">Free store audit</a>

                    <a href="mailto:hello@designwizard.co">
                        hello@designwizard.co
                    </a>

                </nav>

            </div>

        </div>


        <!-- BOTTOM COPYRIGHT -->
        <div class="dw-footer-bottom">

            <p>
                © 2026 Design Wizard. All rights reserved.
            </p>

        </div>

    </div>




</footer>








<section class="wizard-section" id="wizardSection">

    <h2 class="wizard-title" aria-label="design wizard.">

        <!-- SMOKE LAYER -->
        <span class="wizard-smoke" aria-hidden="true"></span>

        <!-- MAIN TEXT -->
        <span class="wizard-main" aria-hidden="true"></span>

    </h2>

</section>



<!-- GOOGLE FONTS -->




<!-- FOOTER START -->

<!-- FOOTER END -->

<!-- =====================================================
     CONTACT MODAL
===================================================== -->









<script>
document.addEventListener("DOMContentLoaded", function () {

    const stats = document.querySelectorAll(".stat-number");

    const observer = new IntersectionObserver((entries, observer) => {

        entries.forEach(entry => {

            if (entry.isIntersecting) {

                const element = entry.target;
                const target = Number(element.dataset.value);
                const duration = 2000;
                const startTime = performance.now();

                function updateNumber(currentTime) {

                    const progress = Math.min(
                        (currentTime - startTime) / duration, 1
                    );

                    const currentNumber = Math.floor(progress * target);

                    element.textContent = currentNumber;

                    if (progress < 1) {
                        requestAnimationFrame(updateNumber);
                    } else {
                        element.textContent = target;
                    }
                }

                requestAnimationFrame(updateNumber);

                observer.unobserve(element);
            }

        });

    }, {
        threshold: 0.5
    });

    stats.forEach(stat => observer.observe(stat));

});
</script>


<SCRipt>

document.querySelectorAll(".dm-faq-section")
    .forEach(function(section) {

        const items = section.querySelectorAll(".dm-faq-item");

        items.forEach(function(item) {

            const button = item.querySelector(".dm-faq-question");

            button.addEventListener("click", function() {

                const wasActive = item.classList.contains("active");

                items.forEach(function(otherItem) {

                    otherItem.classList.remove("active");

                    otherItem.querySelector(".dm-faq-question")
                        .setAttribute("aria-expanded", "false");

                });

                if (!wasActive) {

                    item.classList.add("active");

                    button.setAttribute("aria-expanded", "true");

                }

            });

        });

    });

</SCRipt>


<SCRipt>

(function () {

    const section = document.getElementById("wizardSection");

    if (!section) return;

    const text = "design wizard.";

    const main = section.querySelector(".wizard-main");
    const smoke = section.querySelector(".wizard-smoke");


    function createLetters(container) {

        [...text].forEach((letter, index) => {

            const span = document.createElement("span");

            if (letter === " ") {

                span.className = "wizard-space";
                span.textContent = "\u00A0";

            } else {

                span.className = "wizard-letter";
                span.textContent = letter;

                span.style.setProperty("--index", index);

            }

            container.appendChild(span);

        });

    }


    createLetters(main);
    createLetters(smoke);


    /* START ANIMATION WHEN SCROLLED INTO VIEW */

    if ("IntersectionObserver" in window) {

        const observer = new IntersectionObserver(

            (entries) => {

                entries.forEach((entry) => {

                    if (entry.isIntersecting) {

                        section.classList.add("is-visible");

                        observer.unobserve(section);

                    }

                });

            },

            {
                threshold: 0.25
            }

        );

        observer.observe(section);

    } else {

        section.classList.add("is-visible");

    }

})();

</SCRipt>









<script src="script.js"></script>

</body>
</html>