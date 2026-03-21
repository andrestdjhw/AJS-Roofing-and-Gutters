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
          For people not ready for an in-person inspection.
        </p>

        <a href="tel:+15050000000"
           class="mt-6 inline-flex items-center gap-2 text-base font-extrabold text-white">
          <span class="text-white/70">Call Now:</span>
          <span>(505) 000-0000</span>
        </a>
      </div>

      <div class="ajs-reveal-right rounded-[28px] border border-white/10 bg-white p-5 text-[#42474b] shadow-2xl">
        <h2 class="text-2xl font-black tracking-[-0.03em] text-[#132d41]">
          Schedule your call.
        </h2>

        <p class="mt-2 text-sm leading-7 text-[#42474b]/80">
          Choose a time that works for you.
        </p>

        <div class="mt-5 overflow-hidden rounded-[24px] border border-[#d3d8db] bg-[#f5f9fc] p-3">
          <!-- Reemplaza este bloque con tu embed real de Calendly o scheduler -->
          <div class="flex min-h-[520px] items-center justify-center rounded-[18px] border border-dashed border-[#6eaace]/40 bg-white px-6 text-center text-[#42474b]/70">
            Calendly / scheduling embed goes here
          </div>
        </div>
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
  });
</script>

<?php get_footer(); ?>