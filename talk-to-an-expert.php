<?php
/**
 * Template Name: Schedule a Call Template
 */

get_header(); ?>

<main class="bg-white text-[#42474b] overflow-hidden">

  <section class="relative overflow-hidden bg-[linear-gradient(135deg,rgba(19,45,65,0.96),rgba(31,70,97,0.88))] text-white">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(110,170,206,0.22),transparent_30%)]"></div>
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_left,rgba(208,68,24,0.12),transparent_28%)]"></div>

    <div class="absolute right-[-120px] top-[-120px] h-[280px] w-[280px] rounded-full bg-[#6eaace]/10 blur-3xl ajs-float-slow"></div>
    <div class="absolute bottom-[-120px] left-[-120px] h-[260px] w-[260px] rounded-full bg-[#d04418]/10 blur-3xl ajs-float-slower"></div>

    <div class="relative mx-auto grid max-w-7xl gap-10 px-4 py-16 md:py-20 lg:grid-cols-[1.02fr_0.98fr] lg:items-center">
      <div class="ajs-reveal-left">
        <p class="mb-3 text-xs font-black uppercase tracking-[0.18em] text-[#6eaace]">
          Talk to an Expert
        </p>

        <h1 class="max-w-[12ch] text-4xl font-black leading-[0.95] tracking-[-0.04em] md:text-5xl lg:text-7xl">
          Have Questions? Let’s Talk.
        </h1>

        <p class="mt-5 max-w-2xl text-base leading-8 text-white/85 md:text-lg">
          Get guidance before committing to an in-person visit. Tell us what’s going on,
          what kind of help you may need, and when you’d like to talk. We’ll follow up
          with a call that gives you clarity, not pressure.
        </p>

        <a href="tel:+15050000000"
           class="mt-6 inline-flex items-center gap-2 text-base font-extrabold text-white">
          <span class="text-white/70">Call Now:</span>
          <span>(505) 000-0000</span>
        </a>
      </div>

      <div class="ajs-reveal-right rounded-[28px] border border-white/10 bg-white p-5 text-[#42474b] shadow-2xl">
        <h2 class="text-2xl font-black tracking-[-0.03em] text-[#132d41]">
          Request a call with our team.
        </h2>

        <p class="mt-2 text-sm leading-7 text-[#42474b]/80">
          Share a few details and we’ll reach out to discuss your questions, options, and next steps.
        </p>

        <div id="ajsCallFormSuccess" class="hidden mt-5 rounded-2xl border border-green-200 bg-green-50 px-4 py-4 text-sm text-green-700">
          Thanks for reaching out. Your call request was sent successfully.
        </div>

        <div id="ajsCallFormError" class="hidden mt-5 rounded-2xl border border-red-200 bg-red-50 px-4 py-4 text-sm text-red-700">
          Something went wrong. Please try again.
        </div>

        <form id="ajsCallForm" class="mt-5 grid gap-3">
          <input
            id="ajs_call_name"
            name="name"
            type="text"
            placeholder="Full Name *"
            required
            class="w-full rounded-2xl border border-[#d3d8db] px-4 py-4 text-sm outline-none focus:border-[#6eaace] focus:ring-4 focus:ring-[#6eaace]/20"
          >

          <input
            id="ajs_call_phone"
            name="phone"
            type="tel"
            placeholder="Phone Number *"
            required
            class="w-full rounded-2xl border border-[#d3d8db] px-4 py-4 text-sm outline-none focus:border-[#6eaace] focus:ring-4 focus:ring-[#6eaace]/20"
          >

          <input
            id="ajs_call_email"
            name="email"
            type="email"
            placeholder="Email *"
            required
            class="w-full rounded-2xl border border-[#d3d8db] px-4 py-4 text-sm outline-none focus:border-[#6eaace] focus:ring-4 focus:ring-[#6eaace]/20"
          >

          <select
            id="ajs_call_service"
            name="service"
            required
            class="w-full rounded-2xl border border-[#d3d8db] bg-white px-4 py-4 text-sm text-[#42474b] outline-none focus:border-[#6eaace] focus:ring-4 focus:ring-[#6eaace]/20"
          >
            <option value="" selected disabled>What would you like to discuss? *</option>
            <option value="Roof Replacement Consultation">Roof Replacement Consultation</option>
            <option value="Metal Roofing Consultation">Metal Roofing Consultation</option>
            <option value="Gutters Consultation">Gutters Consultation</option>
            <option value="Roof Repair Questions">Roof Repair Questions</option>
            <option value="Storm Damage / Insurance Help">Storm Damage / Insurance Help</option>
            <option value="Inspection / Maintenance Questions">Inspection / Maintenance Questions</option>
            <option value="Not Sure / Need Guidance">Not Sure / Need Guidance</option>
          </select>

          <input
            id="ajs_call_address"
            name="address"
            type="text"
            placeholder="Property Address or ZIP Code *"
            required
            class="w-full rounded-2xl border border-[#d3d8db] px-4 py-4 text-sm outline-none focus:border-[#6eaace] focus:ring-4 focus:ring-[#6eaace]/20"
          >

          <input
            id="ajs_call_preferred"
            type="text"
            placeholder="Preferred day/time for a call (optional)"
            class="w-full rounded-2xl border border-[#d3d8db] px-4 py-4 text-sm outline-none focus:border-[#6eaace] focus:ring-4 focus:ring-[#6eaace]/20"
          >

          <textarea
            id="ajs_call_message"
            name="message"
            rows="5"
            placeholder="What questions would you like to discuss with our expert?"
            class="w-full resize-y rounded-2xl border border-[#d3d8db] px-4 py-4 text-sm outline-none focus:border-[#6eaace] focus:ring-4 focus:ring-[#6eaace]/20"
          ></textarea>

          <label class="flex items-start gap-3 text-sm leading-6 text-[#42474b]/80">
            <input
              id="ajs_call_consent"
              name="consent"
              type="checkbox"
              class="mt-1 h-4 w-4 rounded border-[#d3d8db] text-[#d04418] focus:ring-[#6eaace]/20"
              required
            >
            <span>I agree to be contacted by AJS Roofing &amp; Gutters regarding my call request.</span>
          </label>

<button
  id="ajsCallSubmitBtn"
  type="submit"
  class="ajs-btn-animate inline-flex w-full items-center justify-center rounded-full bg-[#d04418] px-6 py-4 text-sm font-black text-white shadow-[0_16px_32px_rgba(208,68,24,0.28)]"
>
  Request My Call
</button>

          <p class="text-sm text-[#42474b]/70">
            We’ll reach out to confirm timing and answer your questions clearly.
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
    }, { threshold: 0.12 });

    items.forEach((item) => observer.observe(item));

    if (window.emailjs) {
      emailjs.init({
        publicKey: "CDikedp0ZSxxiBeLb"
      });
    }

    const form = document.getElementById("ajsCallForm");
    const submitBtn = document.getElementById("ajsCallSubmitBtn");
    const successBox = document.getElementById("ajsCallFormSuccess");
    const errorBox = document.getElementById("ajsCallFormError");

    if (form) {
      form.addEventListener("submit", function (e) {
        e.preventDefault();

        successBox.classList.add("hidden");
        errorBox.classList.add("hidden");

        const originalButtonText = submitBtn.textContent;
        submitBtn.disabled = true;
        submitBtn.textContent = "Sending...";

        const preferredTime = document.getElementById("ajs_call_preferred").value.trim();
        const baseMessage = document.getElementById("ajs_call_message").value.trim();

        const combinedMessage = [
          baseMessage ? "Questions / Notes: " + baseMessage : "",
          preferredTime ? "Preferred Call Time: " + preferredTime : ""
        ].filter(Boolean).join("\n\n");

        const formData = {
          name: document.getElementById("ajs_call_name").value,
          phone: document.getElementById("ajs_call_phone").value,
          email: document.getElementById("ajs_call_email").value,
          service: document.getElementById("ajs_call_service").value,
          address: document.getElementById("ajs_call_address").value,
          message: combinedMessage || "No additional details provided.",
          consent: document.getElementById("ajs_call_consent").checked ? "Yes" : "No"
        };

        emailjs.send(
          "service_a03f0zf",
          "template_5o4w9bj",
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