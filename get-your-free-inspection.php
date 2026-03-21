<?php
/**
 * Template Name: Estimate Template
 */

get_header(); ?>

<main class="bg-white text-[#42474b] overflow-hidden">

  <!-- HERO / PRIMARY CONVERSION -->
  <section class="relative overflow-hidden bg-[linear-gradient(135deg,rgba(19,45,65,0.96),rgba(31,70,97,0.88))] text-white">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(110,170,206,0.22),transparent_30%)]"></div>
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_left,rgba(208,68,24,0.12),transparent_28%)]"></div>

    <div class="absolute right-[-120px] top-[-120px] h-[280px] w-[280px] rounded-full bg-[#6eaace]/10 blur-3xl ajs-float-slow"></div>
    <div class="absolute bottom-[-120px] left-[-120px] h-[260px] w-[260px] rounded-full bg-[#d04418]/10 blur-3xl ajs-float-slower"></div>

    <div class="relative mx-auto grid max-w-7xl gap-10 px-4 py-16 md:py-20 lg:grid-cols-[1.05fr_0.95fr] lg:items-center">
      <div class="ajs-reveal-left">
        <p class="mb-3 text-xs font-black uppercase tracking-[0.18em] text-[#6eaace]">
          Get Your Free Inspection
        </p>

        <h1 class="max-w-[13ch] text-4xl font-black leading-[0.95] tracking-[-0.04em] md:text-5xl lg:text-7xl">
          Your Roof Shouldn’t Be a Question Mark. Let’s Find Out.
        </h1>

        <p class="mt-5 max-w-2xl text-base leading-8 text-white/85 md:text-lg">
          Schedule a comprehensive, photo-documented inspection. We’ll show you exactly what your roof needs — and exactly what it doesn’t. No pressure. No obligation. Just clarity.
        </p>

        <a href="tel:+15050000000"
           class="mt-6 inline-flex items-center gap-2 text-base font-extrabold text-white">
          <span class="text-white/70">Call Now:</span>
          <span>(505) 000-0000</span>
        </a>
      </div>

      <div class="ajs-reveal-right rounded-[28px] border border-white/10 bg-white p-5 text-[#42474b] shadow-2xl">
        <h2 class="text-2xl font-black tracking-[-0.03em] text-[#132d41]">
          Request your free inspection.
        </h2>

        <p class="mt-2 text-sm leading-7 text-[#42474b]/80">
          Start with a clear next step. Submit your information and we’ll help you move from uncertainty to documented clarity.
        </p>

        <form class="mt-5 grid gap-3">
          <input type="text" placeholder="Full Name *"
                 class="w-full rounded-2xl border border-[#d3d8db] px-4 py-4 text-sm outline-none focus:border-[#6eaace] focus:ring-4 focus:ring-[#6eaace]/20">

          <input type="tel" placeholder="Phone Number *"
                 class="w-full rounded-2xl border border-[#d3d8db] px-4 py-4 text-sm outline-none focus:border-[#6eaace] focus:ring-4 focus:ring-[#6eaace]/20">

          <input type="email" placeholder="Email *"
                 class="w-full rounded-2xl border border-[#d3d8db] px-4 py-4 text-sm outline-none focus:border-[#6eaace] focus:ring-4 focus:ring-[#6eaace]/20">

          <select
            class="w-full rounded-2xl border border-[#d3d8db] px-4 py-4 text-sm text-[#42474b] outline-none focus:border-[#6eaace] focus:ring-4 focus:ring-[#6eaace]/20">
            <option selected disabled>What do you need? *</option>
            <option>Roof Replacement</option>
            <option>Metal Roofing</option>
            <option>Gutters</option>
            <option>Roof Repair</option>
            <option>Storm Damage / Insurance</option>
            <option>Inspection / Maintenance</option>
            <option>Not Sure</option>
          </select>

          <input type="text" placeholder="Address or ZIP Code *"
                 class="w-full rounded-2xl border border-[#d3d8db] px-4 py-4 text-sm outline-none focus:border-[#6eaace] focus:ring-4 focus:ring-[#6eaace]/20">

          <textarea rows="4" placeholder="Anything else we should know? (optional)"
                    class="w-full resize-y rounded-2xl border border-[#d3d8db] px-4 py-4 text-sm outline-none focus:border-[#6eaace] focus:ring-4 focus:ring-[#6eaace]/20"></textarea>

          <label class="flex items-start gap-3 text-sm leading-6 text-[#42474b]/80">
            <input type="checkbox" class="mt-1 h-4 w-4 rounded border-[#d3d8db]">
            <span>I agree to be contacted about my inspection request.</span>
          </label>

          <button type="submit"
                  class="ajs-btn-animate inline-flex items-center justify-center rounded-full bg-[linear-gradient(135deg,#d04418,#b63c15)] px-6 py-4 text-sm font-black text-white shadow-[0_16px_32px_rgba(208,68,24,0.28)] transition">
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
  });
</script>

<?php get_footer(); ?>