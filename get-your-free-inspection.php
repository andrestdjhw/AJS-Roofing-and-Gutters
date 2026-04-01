<?php
/**
 * Template Name: Estimate Template
 */

get_header(); ?>

<main class="bg-white text-[#42474b] overflow-hidden">

  <!-- HERO / PRIMARY CONVERSION -->
  <section class="relative overflow-hidden border-b border-[#d3d8db] bg-[linear-gradient(180deg,#ffffff_0%,#f5f7f8_100%)]">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_left,rgba(110,170,206,0.18),transparent_30%)]"></div>
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_right,rgba(208,68,24,0.10),transparent_24%)]"></div>

    <div class="absolute right-[-120px] top-[-120px] h-[280px] w-[280px] rounded-full bg-[#6eaace]/10 blur-3xl ajs-float-slow"></div>
    <div class="absolute bottom-[-120px] left-[-120px] h-[260px] w-[260px] rounded-full bg-[#d04418]/10 blur-3xl ajs-float-slower"></div>

    <div class="relative mx-auto grid max-w-7xl gap-10 px-4 py-16 md:py-20 lg:grid-cols-[1.05fr_0.95fr] lg:items-center">
      <div class="ajs-reveal-left">
        <p class="mb-3 text-xs font-black uppercase tracking-[0.18em] text-[#d04418]">
          Get Your Free Inspection
        </p>

        <h1 class="max-w-[13ch] text-4xl font-black leading-[0.95] tracking-[-0.04em] text-[#132d41] md:text-5xl lg:text-7xl">
          Your Roof Shouldn’t Be a Question Mark. Let’s Find Out.
        </h1>

        <p class="mt-5 max-w-2xl text-base leading-8 text-[#42474b] md:text-lg">
          Schedule a comprehensive, photo-documented inspection. We’ll show you exactly what your roof needs and exactly what it doesn’t. No pressure. No obligation. Just clarity.
        </p>

        <a href="tel:+15054535626"
           class="mt-6 inline-flex items-center gap-2 text-base font-extrabold text-[#132d41]">
          <span class="text-[#42474b]/70">Call Now:</span>
          <span>(505) 453-5626</span>
        </a>
      </div>

      <div class="ajs-reveal-right rounded-[28px] border border-[#d3d8db] bg-[linear-gradient(180deg,#ffffff_0%,#f7f9fa_100%)] p-5 text-[#42474b] shadow-[0_20px_44px_rgba(19,45,65,0.10)]">
        <h2 class="text-2xl font-black tracking-[-0.03em] text-[#132d41]">
          Request your free inspection.
        </h2>

        <p class="mt-2 text-sm leading-7 text-[#42474b]/80">
          Start with a clear next step. Submit your information and we’ll help you move from uncertainty to documented clarity.
        </p>

        <div id="ajsEstimateFormSuccess" class="hidden mt-5 rounded-2xl border border-green-200 bg-green-50 px-4 py-4 text-sm text-green-700">
          Thanks for reaching out. Your inspection request was sent successfully.
        </div>

        <div id="ajsEstimateFormError" class="hidden mt-5 rounded-2xl border border-red-200 bg-red-50 px-4 py-4 text-sm text-red-700">
          Something went wrong. Please try again.
        </div>

        <form id="ajsEstimateForm" class="mt-5 grid gap-3">
          <input
            id="ajs_estimate_name"
            name="name"
            type="text"
            placeholder="Full Name *"
            required
            class="w-full rounded-2xl border border-[#d3d8db] bg-white px-4 py-4 text-sm text-[#132d41] placeholder:text-[#42474b]/65 outline-none focus:border-[#6eaace] focus:ring-4 focus:ring-[#6eaace]/20"
          >

          <input
            id="ajs_estimate_phone"
            name="phone"
            type="tel"
            placeholder="Phone Number *"
            required
            class="w-full rounded-2xl border border-[#d3d8db] bg-white px-4 py-4 text-sm text-[#132d41] placeholder:text-[#42474b]/65 outline-none focus:border-[#6eaace] focus:ring-4 focus:ring-[#6eaace]/20"
          >

          <input
            id="ajs_estimate_email"
            name="email"
            type="email"
            placeholder="Email *"
            required
            class="w-full rounded-2xl border border-[#d3d8db] bg-white px-4 py-4 text-sm text-[#132d41] placeholder:text-[#42474b]/65 outline-none focus:border-[#6eaace] focus:ring-4 focus:ring-[#6eaace]/20"
          >

          <select
            id="ajs_estimate_service"
            name="service"
            required
            class="w-full rounded-2xl border border-[#d3d8db] bg-white px-4 py-4 text-sm text-[#42474b] outline-none focus:border-[#6eaace] focus:ring-4 focus:ring-[#6eaace]/20"
          >
            <option value="" selected disabled>What do you need? *</option>
            <option value="Roof Replacement">Roof Replacement</option>
            <option value="Metal Roofing">Metal Roofing</option>
            <option value="Gutters">Gutters</option>
            <option value="Roof Repair">Roof Repair</option>
            <option value="Storm Damage / Insurance">Storm Damage / Insurance</option>
            <option value="Inspection / Maintenance">Inspection / Maintenance</option>
            <option value="Not Sure">Not Sure</option>
          </select>

          <input
            id="ajs_estimate_address"
            name="address"
            type="text"
            placeholder="Address or ZIP Code *"
            required
            class="w-full rounded-2xl border border-[#d3d8db] bg-white px-4 py-4 text-sm text-[#132d41] placeholder:text-[#42474b]/65 outline-none focus:border-[#6eaace] focus:ring-4 focus:ring-[#6eaace]/20"
          >

          <textarea
            id="ajs_estimate_message"
            name="message"
            rows="4"
            placeholder="Anything else we should know? (optional)"
            class="w-full resize-y rounded-2xl border border-[#d3d8db] bg-white px-4 py-4 text-sm text-[#132d41] placeholder:text-[#42474b]/65 outline-none focus:border-[#6eaace] focus:ring-4 focus:ring-[#6eaace]/20"
          ></textarea>

          <label class="flex items-start gap-3 text-sm leading-6 text-[#42474b]/80">
            <input
              id="ajs_estimate_consent"
              name="consent"
              type="checkbox"
              required
              class="mt-1 h-4 w-4 rounded border-[#d3d8db] text-[#d04418] focus:ring-[#6eaace]/20"
            >
            <span>I agree to be contacted about my inspection request.</span>
          </label>

          <button
            id="ajsEstimateSubmitBtn"
            type="submit"
            class="ajs-btn-animate inline-flex items-center justify-center rounded-full bg-[#d04418] px-6 py-4 text-sm font-black text-white shadow-[0_16px_32px_rgba(208,68,24,0.28)]"
          >
            Get Your Free Inspection
          </button>

          <p class="text-sm text-[#42474b]/70">
            Response within 24 hours. Detailed photo report included.
          </p>
        </form>
      </div>
    </div>
  </section>

</main>

<style>
  .hidden {
    display: none !important;
  }

  .ajs-reveal-left,
  .ajs-reveal-right {
    opacity: 0;
    transition: opacity .85s ease, transform .85s cubic-bezier(.22,.61,.36,1);
    will-change: opacity, transform;
  }

  .ajs-reveal-left {
    transform: translateX(-42px);
  }

  .ajs-reveal-right {
    transform: translateX(42px);
  }

  .ajs-reveal-left.is-visible,
  .ajs-reveal-right.is-visible {
    opacity: 1;
    transform: translate(0, 0);
  }

  .ajs-btn-animate {
    transition: transform .22s ease, box-shadow .22s ease, filter .22s ease;
  }

  .ajs-btn-animate:hover {
    transform: translateY(-2px) scale(1.01);
    filter: saturate(1.05);
  }

  .ajs-btn-animate:active {
    transform: translateY(0) scale(.995);
  }

  .ajs-float-slow {
    animation: ajsFloatSlow 8s ease-in-out infinite;
  }

  .ajs-float-slower {
    animation: ajsFloatSlower 11s ease-in-out infinite;
  }

  @keyframes ajsFloatSlow {
    0%, 100% { transform: translate3d(0,0,0); }
    50% { transform: translate3d(0,-14px,0); }
  }

  @keyframes ajsFloatSlower {
    0%, 100% { transform: translate3d(0,0,0); }
    50% { transform: translate3d(12px,-10px,0); }
  }

  @media (prefers-reduced-motion: reduce) {
    .ajs-reveal-left,
    .ajs-reveal-right,
    .ajs-btn-animate,
    .ajs-float-slow,
    .ajs-float-slower {
      animation: none !important;
      transition: none !important;
      transform: none !important;
      opacity: 1 !important;
    }
  }
</style>

<script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const items = document.querySelectorAll(".ajs-reveal-left, .ajs-reveal-right");

    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("is-visible");
          observer.unobserve(entry.target);
        }
      });
    }, {
      threshold: 0.12
    });

    items.forEach((item) => observer.observe(item));

    if (window.emailjs) {
      emailjs.init({
        publicKey: "fO4Vd7UFZCyOrU5J6"
      });
    }

    const form = document.getElementById("ajsEstimateForm");
    const submitBtn = document.getElementById("ajsEstimateSubmitBtn");
    const successBox = document.getElementById("ajsEstimateFormSuccess");
    const errorBox = document.getElementById("ajsEstimateFormError");

    if (form) {
      form.addEventListener("submit", function (e) {
        e.preventDefault();

        successBox.classList.add("hidden");
        errorBox.classList.add("hidden");

        const originalButtonText = submitBtn.textContent;
        submitBtn.disabled = true;
        submitBtn.textContent = "Sending...";

        const formData = {
          name: document.getElementById("ajs_estimate_name").value,
          phone: document.getElementById("ajs_estimate_phone").value,
          email: document.getElementById("ajs_estimate_email").value,
          service: document.getElementById("ajs_estimate_service").value,
          address: document.getElementById("ajs_estimate_address").value,
          message: document.getElementById("ajs_estimate_message").value,
          consent: document.getElementById("ajs_estimate_consent").checked ? "Yes" : "No"
        };

        emailjs.send(
          "service_siv1hxi",
          "template_kcyfw3g",
          formData
        ).then(function () {
          form.reset();
          successBox.classList.remove("hidden");
          submitBtn.disabled = false;
          submitBtn.textContent = originalButtonText;
        }).catch(function (error) {
          console.error("EmailJS error:", error);
          errorBox.classList.remove("hidden");
          submitBtn.disabled = false;
          submitBtn.textContent = originalButtonText;
        });
      });
    }
  });
</script>

<?php get_footer(); ?>