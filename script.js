/* =========================================================
   WAJID  AGENCY
   GSAP + LENIS
========================================================= */

document.addEventListener("DOMContentLoaded", () => {
  gsap.registerPlugin(ScrollTrigger);

  /* =====================================================
       LENIS
    ===================================================== */

  const lenis = new Lenis({
    duration: 1.15,

    smoothWheel: true,

    smoothTouch: false,

    wheelMultiplier: 0.9,
  });

  lenis.on("scroll", ScrollTrigger.update);

  gsap.ticker.add((time) => {
    lenis.raf(time * 1000);
  });

  gsap.ticker.lagSmoothing(0);

  /* =====================================================
       LOADER
    ===================================================== */

  const loader = document.querySelector(".loader");

  const loaderProgress = document.querySelector(".loader-progress span");

  const loaderCount = document.querySelector(".loader-count");

  const loaderObj = {
    value: 0,
  };

  gsap.to(loaderObj, {
    value: 100,

    duration: 1.8,

    ease: "power2.out",

    onUpdate: () => {
      const value = Math.round(loaderObj.value);

      loaderProgress.style.width = value + "%";

      loaderCount.textContent = String(value).padStart(2, "0");
    },

    onComplete: () => {
      const intro = gsap.timeline();

      intro

        .to(loader, {
          yPercent: -100,

          duration: 0.9,

          ease: "power4.inOut",
        })

        .from(
          ".hero-line-one",
          {
            yPercent: 120,

            duration: 1.1,

            ease: "power4.out",
          },
          "-=.25",
        )

        .from(
          ".hero-outline",
          {
            yPercent: 120,

            duration: 1.1,

            ease: "power4.out",
          },
          "-=.85",
        )

        .from(
          ".hero-mini",
          {
            y: 30,

            opacity: 0,

            duration: 0.6,
          },
          "-=.5",
        )

        .from(
          ".hero-top, .hero-bottom",
          {
            opacity: 0,

            y: 30,

            duration: 0.7,
          },
          "-=.4",
        );
    },
  });

  /* =====================================================
       CURSOR
    ===================================================== */

  const cursor = document.querySelector(".cursor");

  const cursorRing = document.querySelector(".cursor-ring");

  if (window.innerWidth > 900) {
    const moveX = gsap.quickTo(cursor, "left", {
      duration: 0.12,
      ease: "power3",
    });

    const moveY = gsap.quickTo(cursor, "top", {
      duration: 0.12,
      ease: "power3",
    });

    const ringX = gsap.quickTo(cursorRing, "left", {
      duration: 0.35,
      ease: "power3",
    });

    const ringY = gsap.quickTo(cursorRing, "top", {
      duration: 0.35,
      ease: "power3",
    });

    window.addEventListener("mousemove", (e) => {
      moveX(e.clientX);
      moveY(e.clientY);

      ringX(e.clientX);
      ringY(e.clientY);
    });

    document
      .querySelectorAll("a, button, .project, .service")
      .forEach((element) => {
        element.addEventListener("mouseenter", () => {
          gsap.to(cursorRing, {
            scale: 1.7,

            background: "rgba(250,66,0,.08)",

            duration: 0.3,
          });
        });

        element.addEventListener("mouseleave", () => {
          gsap.to(cursorRing, {
            scale: 1,

            background: "transparent",

            duration: 0.3,
          });
        });
      });
  }

  /* =====================================================
       MAGNETIC
    ===================================================== */

  document.querySelectorAll(".magnetic").forEach((button) => {
    button.addEventListener("mousemove", (e) => {
      const rect = button.getBoundingClientRect();

      const x = e.clientX - (rect.left + rect.width / 2);

      const y = e.clientY - (rect.top + rect.height / 2);

      gsap.to(button, {
        x: x * 0.15,

        y: y * 0.15,

        duration: 0.35,

        ease: "power3.out",
      });
    });

    button.addEventListener("mouseleave", () => {
      gsap.to(button, {
        x: 0,

        y: 0,

        duration: 0.7,

        ease: "elastic.out(1,.4)",
      });
    });
  });

  /* =====================================================
       HERO PARALLAX
    ===================================================== */

  gsap.to(".hero-line-one", {
    xPercent: -4,

    scrollTrigger: {
      trigger: ".hero",

      start: "top top",

      end: "bottom top",

      scrub: 1,
    },
  });

  gsap.to(".hero-outline", {
    xPercent: 4,

    scrollTrigger: {
      trigger: ".hero",

      start: "top top",

      end: "bottom top",

      scrub: 1,
    },
  });

  gsap.to(".hero-glow", {
    x: -120,

    y: 100,

    scale: 1.3,

    duration: 5,

    repeat: -1,

    yoyo: true,

    ease: "sine.inOut",
  });

  gsap.to(".cross-one", {
    rotation: 360,

    duration: 8,

    repeat: -1,

    ease: "none",
  });

  gsap.to(".cross-two", {
    rotation: -360,

    duration: 10,

    repeat: -1,

    ease: "none",
  });

  /* =====================================================
       MARQUEE
    ===================================================== */

  gsap.to(".marquee-track", {
    xPercent: -30,

    duration: 18,

    repeat: -1,

    ease: "none",
  });

  /* =====================================================
       ABOUT
    ===================================================== */

  gsap.from(".about-heading h2", {
    y: 130,

    opacity: 0,

    duration: 1.2,

    ease: "power4.out",

    scrollTrigger: {
      trigger: ".about",

      start: "top 75%",
    },
  });

  gsap.from(".about-content", {
    y: 100,

    opacity: 0,

    duration: 1,

    scrollTrigger: {
      trigger: ".about-content",

      start: "top 80%",
    },
  });

  /* =====================================================
       EXPERIENCE — PINNED GSAP
    ===================================================== */

  const experience = document.querySelector(".experience");

  if (experience) {
    const experienceTimeline = gsap.timeline({
      scrollTrigger: {
        trigger: experience,

        start: "top top",

        end: "+=2400",

        scrub: 1.15,

        pin: true,

        anticipatePin: 1,
      },
    });

    experienceTimeline

      /* TITLE */

      .from(".experience-heading", {
        y: 180,

        opacity: 0,

        scale: 0.8,

        duration: 1,

        ease: "power4.out",
      })

      /* CARD 01 */

      .from(".exp-card-one", {
        x: -650,

        y: 400,

        rotation: -35,

        scale: 0.65,

        opacity: 0,

        duration: 1.1,

        ease: "power4.out",
      })

      /* CARD 02 */

      .from(
        ".exp-card-two",
        {
          x: 650,

          y: 450,

          rotation: 35,

          scale: 0.65,

          opacity: 0,

          duration: 1.1,

          ease: "power4.out",
        },
        "-=.75",
      )

      /* CARD 03 */

      .from(
        ".exp-card-three",
        {
          y: 650,

          rotation: -30,

          scale: 0.6,

          opacity: 0,

          duration: 1.1,

          ease: "power4.out",
        },
        "-=.75",
      )

      /* STACK */

      .to(".exp-card-one", {
        x: -180,

        y: 100,

        rotation: -11,

        duration: 1,
      })

      .to(
        ".exp-card-two",
        {
          x: 0,

          y: -20,

          rotation: 4,

          duration: 1,
        },
        "<",
      )

      .to(
        ".exp-card-three",
        {
          x: 180,

          y: 90,

          rotation: -5,

          duration: 1,
        },
        "<",
      )

      /* FINAL MOVEMENT */

      .to(".experience-heading", {
        scale: 1.15,

        x: -120,

        opacity: 0.25,

        duration: 1,
      })

      .to(".exp-card-one", {
        x: -480,

        rotation: -25,

        opacity: 0.4,

        duration: 1,
      })

      .to(
        ".exp-card-two",
        {
          scale: 1.08,

          duration: 1,
        },
        "<",
      )

      .to(
        ".exp-card-three",
        {
          x: 480,

          rotation: 25,

          opacity: 0.4,

          duration: 1,
        },
        "<",
      );
  }

  /* =====================================================
       SERVICES
    ===================================================== */

  gsap.from(".services-title h2", {
    y: 130,

    opacity: 0,

    duration: 1,

    scrollTrigger: {
      trigger: ".services-title",

      start: "top 80%",
    },
  });

  gsap.utils.toArray(".service").forEach((service, index) => {
    gsap.from(service, {
      y: 100,

      opacity: 0,

      duration: 0.9,

      delay: index * 0.05,

      ease: "power3.out",

      scrollTrigger: {
        trigger: service,

        start: "top 88%",
      },
    });
  });

  /* =====================================================
       SERVICE ARROW HOVER
    ===================================================== */

  document.querySelectorAll(".service").forEach((service) => {
    const arrow = service.querySelector(".service-arrow");

    service.addEventListener("mouseenter", () => {
      gsap.to(arrow, {
        scale: 1.12,

        duration: 0.3,
      });
    });

    service.addEventListener("mouseleave", () => {
      gsap.to(arrow, {
        scale: 1,

        duration: 0.3,
      });
    });
  });

  /* =====================================================
       KINETIC TEXT
    ===================================================== */

  gsap.utils.toArray(".kinetic-line").forEach((line, index) => {
    gsap.fromTo(
      line,

      {
        x: index % 2 === 0 ? "-25vw" : "25vw",
      },

      {
        x: index % 2 === 0 ? "8vw" : "-8vw",

        ease: "none",

        scrollTrigger: {
          trigger: ".kinetic",

          start: "top bottom",

          end: "bottom top",

          scrub: 1.5,
        },
      },
    );
  });

  /* =====================================================
       WORK — REVEAL
    ===================================================== */

  gsap.utils.toArray(".project").forEach((project) => {
    gsap.from(project, {
      y: 100,

      opacity: 0,

      duration: 1,

      scrollTrigger: {
        trigger: project,

        start: "top 90%",
      },
    });
  });

  /* =====================================================
       WORK IMAGE PARALLAX
    ===================================================== */

  gsap.utils.toArray(".project-visual").forEach((visual) => {
    gsap.fromTo(
      visual,

      {
        scale: 1.12,
      },

      {
        scale: 1,

        scrollTrigger: {
          trigger: visual,

          start: "top bottom",

          end: "bottom top",

          scrub: 1,
        },
      },
    );
  });

  /* =====================================================
       HORIZONTAL DRAG
    ===================================================== */

  const track = document.querySelector(".work-track");

  const wrapper = document.querySelector(".work-wrapper");

  let isDragging = false;

  let startX = 0;

  let currentX = 0;

  let targetX = 0;

  function getMaxDrag() {
    return Math.max(0, track.scrollWidth - wrapper.clientWidth);
  }

  track.addEventListener("pointerdown", (e) => {
    if (window.innerWidth <= 600) {
      return;
    }

    isDragging = true;

    track.classList.add("dragging");

    startX = e.clientX;

    track.setPointerCapture(e.pointerId);
  });

  track.addEventListener("pointermove", (e) => {
    if (!isDragging) return;

    const difference = e.clientX - startX;

    targetX = currentX + difference;

    const max = getMaxDrag();

    targetX = Math.max(-max, Math.min(0, targetX));

    gsap.set(track, {
      x: targetX,
    });
  });

  track.addEventListener("pointerup", () => {
    if (!isDragging) return;

    isDragging = false;

    track.classList.remove("dragging");

    currentX = targetX;
  });

  track.addEventListener("pointercancel", () => {
    isDragging = false;

    track.classList.remove("dragging");

    currentX = targetX;
  });

  /* =====================================================
       MOBILE HORIZONTAL SCROLL
    ===================================================== */

  if (window.innerWidth <= 600) {
    wrapper.style.overflowX = "auto";

    wrapper.style.scrollbarWidth = "none";
  }

  /* =====================================================
       STATS COUNTER
    ===================================================== */

  document.querySelectorAll(".stat-number").forEach((counter) => {
    const target = Number(counter.dataset.value);

    const object = {
      value: 0,
    };

    gsap.to(object, {
      value: target,

      duration: 2,

      ease: "power2.out",

      scrollTrigger: {
        trigger: counter,

        start: "top 85%",

        once: true,
      },

      onUpdate: () => {
        counter.textContent = Math.round(object.value);
      },
    });
  });

  /* =====================================================
       PROCESS
    ===================================================== */

  gsap.utils.toArray(".process-item").forEach((item, index) => {
    gsap.from(item, {
      y: 80,

      opacity: 0,

      duration: 0.9,

      delay: index * 0.05,

      scrollTrigger: {
        trigger: item,

        start: "top 87%",
      },
    });
  });

  /* =====================================================
       TESTIMONIAL
    ===================================================== */

  gsap.from(".testimonial-quote", {
    y: 130,

    opacity: 0,

    duration: 1.2,

    ease: "power4.out",

    scrollTrigger: {
      trigger: ".testimonial",

      start: "top 75%",
    },
  });

  /* =====================================================
       CTA
    ===================================================== */

  gsap.from(".final-cta h2", {
    y: 150,

    opacity: 0,

    duration: 1.2,

    ease: "power4.out",

    scrollTrigger: {
      trigger: ".final-cta",

      start: "top 75%",
    },
  });

  gsap.to(".cta-rings", {
    rotation: 180,

    scale: 1.2,

    scrollTrigger: {
      trigger: ".final-cta",

      start: "top bottom",

      end: "bottom top",

      scrub: 2,
    },
  });

  /* =====================================================
       MOBILE MENU
    ===================================================== */

  const menuButton = document.querySelector(".menu-button");

  const mobileMenu = document.querySelector(".mobile-menu");

  let menuOpen = false;

  menuButton.addEventListener("click", () => {
    menuOpen = !menuOpen;

    document.body.classList.toggle("menu-open", menuOpen);

    gsap.to(mobileMenu, {
      yPercent: menuOpen ? 100 : 0,

      duration: 0.75,

      ease: "power4.inOut",
    });
  });

  document.querySelectorAll(".mobile-menu a").forEach((link) => {
    link.addEventListener("click", () => {
      menuOpen = false;

      document.body.classList.remove("menu-open");

      gsap.to(mobileMenu, {
        yPercent: 0,

        duration: 0.65,

        ease: "power4.inOut",
      });
    });
  });

  /* =====================================================
       CONTACT MODAL
    ===================================================== */

  const modal = document.querySelector(".contact-modal");

  const modalClose = document.querySelector(".modal-close");

  const openButtons = document.querySelectorAll(".contact-open");

  const steps = document.querySelectorAll(".modal-step");

  const progress = document.querySelector(".modal-progress span");

  const success = document.querySelector(".modal-success");

  let currentStep = 0;

  function openContact() {
    gsap.to(modal, {
      autoAlpha: 1,

      duration: 0.45,

      ease: "power2.out",
    });

    document.body.classList.add("modal-open");
  }

  function closeContact() {
    gsap.to(modal, {
      autoAlpha: 0,

      duration: 0.35,
    });

    document.body.classList.remove("modal-open");
  }

  openButtons.forEach((button) => {
    button.addEventListener("click", (e) => {
      e.preventDefault();

      openContact();
    });
  });

  modalClose.addEventListener("click", closeContact);

  modal.addEventListener("click", (e) => {
    if (e.target === modal) {
      closeContact();
    }
  });

  /* =====================================================
       MODAL OPTIONS
    ===================================================== */

  document.querySelectorAll(".modal-options button").forEach((button) => {
    button.addEventListener("click", () => {
      document.querySelectorAll(".modal-options button").forEach((btn) => {
        btn.classList.remove("selected");
      });

      button.classList.add("selected");
    });
  });

  /* =====================================================
       MODAL NEXT
    ===================================================== */

  document.querySelectorAll(".modal-next").forEach((button) => {
    button.addEventListener("click", () => {
      if (currentStep >= steps.length - 1) {
        return;
      }

      gsap.to(steps[currentStep], {
        opacity: 0,

        x: -30,

        duration: 0.3,

        onComplete: () => {
          steps[currentStep].classList.remove("active");

          currentStep++;

          steps[currentStep].classList.add("active");

          gsap.fromTo(
            steps[currentStep],

            {
              opacity: 0,
              x: 30,
            },

            {
              opacity: 1,
              x: 0,
              duration: 0.4,
            },
          );
        },
      });

      progress.style.width = ((currentStep + 2) / 3) * 100 + "%";
    });
  });

  /* =====================================================
       SUBMIT
    ===================================================== */

  document.querySelector(".modal-submit").addEventListener("click", () => {
    gsap.to(".modal-step", {
      opacity: 0,

      duration: 0.35,

      onComplete: () => {
        steps.forEach((step) => {
          step.style.display = "none";
        });

        success.style.display = "block";

        gsap.from(success, {
          scale: 0.8,

          opacity: 0,

          duration: 0.7,

          ease: "back.out(1.7)",
        });
      },
    });
  });

  /* =====================================================
       ESCAPE
    ===================================================== */

  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape") {
      closeContact();
    }
  });

  /* =====================================================
       RESIZE
    ===================================================== */

  window.addEventListener("resize", () => {
    ScrollTrigger.refresh();
  });

  /* =====================================================
       FINAL REFRESH
    ===================================================== */

  window.addEventListener("load", () => {
    ScrollTrigger.refresh();
  });
});
