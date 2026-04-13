<?php
/**
 * Template Name: Contact Template
 *
 * Contact page for AJS Roofing & Gutters
 */

get_header(); ?>

<main class="bg-white text-slate-900">

<!-- Hero -->
<section class="relative overflow-hidden border-b border-[#d3d8db] bg-[linear-gradient(180deg,#ffffff_0%,#f3f6f8_100%)]">
  
  <!-- subtle color accents -->
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(110,170,206,0.18),transparent_30%)]"></div>
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_left,rgba(208,68,24,0.10),transparent_28%)]"></div>

  <div class="relative mx-auto max-w-7xl px-4 py-16 md:py-20">
    <div class="grid gap-10 lg:grid-cols-[1.1fr_0.9fr] lg:items-center">

      <!-- LEFT -->
      <div class="ajs-reveal-left">
        <p class="mb-3 text-xs font-black uppercase tracking-[0.18em] text-[#d04418]">
          Contact AJS Roofing
        </p>

        <h1 class="max-w-[12ch] text-4xl font-black leading-[0.95] tracking-[-0.04em] text-[#132d41] md:text-6xl">
          Let’s Bring Calm Back To Your Roof.
        </h1>

        <p class="mt-6 max-w-xl text-base leading-8 text-[#42474b] md:text-lg">
          Have questions about your roof, gutters, or storm damage?
          Our team is ready to help you understand your options and
          guide you through the next steps with clarity.
        </p>

        <div class="mt-8 flex flex-wrap gap-4">
          <a href="tel:+15054535626"
             class="ajs-btn-animate inline-flex items-center justify-center rounded-full bg-[#d04418] px-6 py-4 text-sm font-black text-white shadow-[0_16px_32px_rgba(208,68,24,0.25)]">
            Call (505) 453-5626
          </a>

          <a href="/estimate"
             class="ajs-btn-animate inline-flex items-center justify-center rounded-full border border-[#d3d8db] bg-white px-6 py-4 text-sm font-black text-[#132d41] shadow-sm">
            Request Free Inspection
          </a>
        </div>
      </div>

      <!-- RIGHT CARD -->
      <div class="ajs-reveal-right rounded-[28px] border border-[#d3d8db] bg-[linear-gradient(180deg,#ffffff_0%,#f7f9fa_100%)] p-6 shadow-[0_18px_40px_rgba(19,45,65,0.10)]">
        
        <p class="text-xs font-black uppercase tracking-[0.18em] text-[#d04418]">
          Quick Contact
        </p>

        <div class="mt-5 space-y-4 text-sm text-[#42474b]">

          <div class="flex items-start gap-3">
            <span class="font-black text-[#132d41]">Phone</span>
            <span>(505) 453-5626</span>
          </div>

          <div class="flex items-start gap-3">
            <span class="font-black text-[#132d41]">Email</span>
            <span>info@ajspro.com</span>
          </div>

          <div class="flex items-start gap-3">
            <span class="font-black text-[#132d41]">Hours</span>
            <span>Mon-Fri 8AM-6PM</span>
          </div>

        </div>

      </div>

    </div>
  </div>
</section>
<!-- Contact Info -->
<section class="py-20">
  <div class="mx-auto max-w-7xl px-4">

    <div class="grid gap-10 lg:grid-cols-[1fr_1fr]">

<!-- Form -->
<div class="ajs-reveal-left rounded-[28px] border border-[#d3d8db] bg-white p-7 shadow-[0_18px_40px_rgba(19,45,65,0.08)]">

  <p class="mb-3 text-xs font-black uppercase tracking-[0.18em] text-[#d04418]">
    Send Us A Message
  </p>

  <h2 class="text-3xl font-black tracking-[-0.03em] text-[#132d41]">
    Tell us what you need.
  </h2>

  <div id="ajsContactFormSuccess" class="hidden mt-6 rounded-2xl border border-green-200 bg-green-50 px-4 py-4 text-sm text-green-700">
    Thanks for reaching out. Your message was sent successfully.
  </div>

  <div id="ajsContactFormError" class="hidden mt-6 rounded-2xl border border-red-200 bg-red-50 px-4 py-4 text-sm text-red-700">
    Something went wrong. Please try again.
  </div>

  <form id="ajsContactForm" class="mt-6 grid gap-4">

    <input
      id="ajs_contact_name"
      name="name"
      type="text"
      placeholder="Full Name *"
      required
      class="w-full rounded-2xl border border-[#d3d8db] px-4 py-4 text-sm outline-none focus:border-[#6eaace] focus:ring-4 focus:ring-[#6eaace]/20"
    >

    <input
      id="ajs_contact_phone"
      name="phone"
      type="tel"
      placeholder="Phone Number *"
      required
      class="w-full rounded-2xl border border-[#d3d8db] px-4 py-4 text-sm outline-none focus:border-[#6eaace] focus:ring-4 focus:ring-[#6eaace]/20"
    >

    <input
      id="ajs_contact_email"
      name="email"
      type="email"
      placeholder="Email Address *"
      required
      class="w-full rounded-2xl border border-[#d3d8db] px-4 py-4 text-sm outline-none focus:border-[#6eaace] focus:ring-4 focus:ring-[#6eaace]/20"
    >

    <textarea
      id="ajs_contact_message"
      name="message"
      rows="4"
      placeholder="How can we help?"
      required
      class="w-full resize-y rounded-2xl border border-[#d3d8db] px-4 py-4 text-sm outline-none focus:border-[#6eaace] focus:ring-4 focus:ring-[#6eaace]/20"
    ></textarea>

    <!-- ✅ RECAPTCHA AÑADIDO -->
    <div class="g-recaptcha mt-2"
         data-sitekey="6LfHjassAAAAAAkbtC73TJdkAzPv2my9-RYF5Q4j">
    </div>

    <button
      id="ajsContactSubmitBtn"
      type="submit"
      class="ajs-btn-animate inline-flex items-center justify-center rounded-full bg-[#d04418] px-6 py-4 text-sm font-black text-white shadow-[0_16px_32px_rgba(208,68,24,0.24)]"
    >
      Send Message
    </button>

  </form>

</div>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>

      <!-- Address / Map -->
      <div class="ajs-reveal-right space-y-6">

        <div class="rounded-[28px] border border-[#d3d8db] bg-white p-7 shadow-[0_18px_40px_rgba(19,45,65,0.08)]">

          <p class="text-xs font-black uppercase tracking-[0.18em] text-[#d04418]">
            Office Location
          </p>

          <h3 class="mt-2 text-2xl font-black text-[#132d41]">
            Visit Our Office
          </h3>

          <p class="mt-4 leading-8 text-[#42474b]">
            123 Example Street<br>
            Albuquerque, NM 87101
          </p>

          <p class="mt-4 text-sm text-[#42474b]/80">
            Serving Albuquerque, Santa Fe, Rio Rancho, and surrounding areas.
          </p>

        </div>

        <div class="overflow-hidden rounded-[28px] border border-[#d3d8db] shadow-[0_18px_40px_rgba(19,45,65,0.08)]">

          <iframe
            src="https://maps.google.com/maps?q=Albuquerque&t=&z=13&ie=UTF8&iwloc=&output=embed"
            width="100%"
            height="280"
            style="border:0;"
            loading="lazy">
          </iframe>

        </div>

      </div>

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
  transform: translateY(40px);
  transition: all .8s ease;
}

.ajs-reveal-left.is-visible,
.ajs-reveal-right.is-visible {
  opacity: 1;
  transform: translateY(0);
}

.ajs-reveal-left { transform: translateX(-40px); }
.ajs-reveal-right { transform: translateX(40px); }

.ajs-btn-animate {
  transition: transform .2s ease, box-shadow .2s ease;
}

.ajs-btn-animate:hover {
  transform: translateY(-2px);
  box-shadow: 0 20px 40px rgba(19,45,65,.15);
}
</style>

<script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>

<script>
document.addEventListener("DOMContentLoaded", function () {

  const items = document.querySelectorAll(".ajs-reveal-left,.ajs-reveal-right");

  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add("is-visible");
      }
    });
  }, { threshold: 0.2 });

  items.forEach(item => observer.observe(item));

  if (window.emailjs) {
    emailjs.init({
      publicKey: "fO4Vd7UFZCyOrU5J6"
    });
  }

  const form = document.getElementById("ajsContactForm");
  const submitBtn = document.getElementById("ajsContactSubmitBtn");
  const successBox = document.getElementById("ajsContactFormSuccess");
  const errorBox = document.getElementById("ajsContactFormError");

  if (form) {
    form.addEventListener("submit", function (e) {
      e.preventDefault();

      successBox.classList.add("hidden");
      errorBox.classList.add("hidden");

      const originalButtonText = submitBtn.textContent;
      submitBtn.disabled = true;
      submitBtn.textContent = "Sending...";

      const formData = {
        name: document.getElementById("ajs_contact_name").value,
        phone: document.getElementById("ajs_contact_phone").value,
        email: document.getElementById("ajs_contact_email").value,
        message: document.getElementById("ajs_contact_message").value
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