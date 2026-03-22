<?php
/**
 * Template Name: Location Santa Fe
 */

get_header(); ?>

<main class="bg-white text-[#42474b] overflow-hidden">

  <!-- HERO -->
  <section class="relative overflow-hidden bg-[linear-gradient(135deg,#132d41_0%,#1c425f_100%)] text-white py-20">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(110,170,206,0.18),transparent_30%)]"></div>
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_left,rgba(208,68,24,0.14),transparent_30%)]"></div>

    <div class="absolute right-[-120px] top-[-120px] h-[280px] w-[280px] rounded-full bg-[#6eaace]/10 blur-3xl ajs-float-slow"></div>
    <div class="absolute bottom-[-120px] left-[-120px] h-[260px] w-[260px] rounded-full bg-[#d04418]/10 blur-3xl ajs-float-slower"></div>

    <div class="mx-auto max-w-5xl px-4 text-center relative">
      <p class="ajs-reveal text-xs font-black uppercase tracking-[0.18em] text-[#6eaace]">
        Santa Fe, New Mexico
      </p>

      <h1 class="ajs-reveal mt-4 text-4xl md:text-5xl lg:text-6xl font-black tracking-[-0.04em]">
        Roofing Company in Santa Fe — AJS Roofing &amp; Gutters
      </h1>

      <p class="ajs-reveal mt-6 max-w-2xl mx-auto text-white/85 text-lg leading-8">
        AJS Roofing &amp; Gutters serves homeowners across Santa Fe with a process built on clarity, precision, and professional execution. From inspection to final walkthrough, every step is documented so you can make decisions with confidence and protect your home without uncertainty.
      </p>

      <a href="/estimate" class="ajs-btn-primary mt-8 inline-block">
        Get Your Free Inspection
      </a>
    </div>
  </section>

  <!-- SERVICES -->
  <section class="py-16 md:py-20">
    <div class="mx-auto max-w-7xl px-4">
      <h2 class="ajs-reveal text-3xl font-black tracking-[-0.03em] text-[#132d41] text-center">
        Roofing &amp; Gutter Services in Santa Fe
      </h2>

      <div class="mt-10 grid gap-6 md:grid-cols-2 lg:grid-cols-3">
        <a href="/service/roof-replacement" class="ajs-location-card ajs-reveal">Roof Replacement</a>
        <a href="/service/metal-roofing" class="ajs-location-card ajs-reveal">Metal Roofing</a>
        <a href="/service/gutters" class="ajs-location-card ajs-reveal">Seamless Gutters</a>
        <a href="/service/roof-repair" class="ajs-location-card ajs-reveal">Roof Repair</a>
        <a href="/service/storm-damage-insurance" class="ajs-location-card ajs-reveal">Storm Damage &amp; Insurance</a>
        <a href="/service/roof-inspection" class="ajs-location-card ajs-reveal">Roof Inspection &amp; Maintenance</a>
      </div>
    </div>
  </section>

  <!-- PROJECTS -->
  <section class="bg-[#f5f9fc] py-16 md:py-20">
    <div class="mx-auto max-w-7xl px-4">
      <h2 class="ajs-reveal text-3xl font-black text-[#132d41] text-center">
        Projects in Santa Fe
      </h2>

      <div class="mt-10 grid gap-5 md:grid-cols-3">
        <div class="ajs-img-card ajs-reveal">
          <img src="/wp-content/uploads/roof1.jpg" alt="Roofing project in Santa Fe">
        </div>

        <div class="ajs-img-card ajs-reveal">
          <img src="/wp-content/uploads/roof2.jpg" alt="Metal roofing project in Santa Fe">
        </div>

        <div class="ajs-img-card ajs-reveal">
          <img src="/wp-content/uploads/roof3.jpg" alt="Seamless gutters project in Santa Fe">
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="py-16 md:py-20">
    <div class="mx-auto max-w-4xl px-4">
      <h2 class="ajs-reveal text-3xl font-black text-[#132d41] text-center">
        Roofing Questions in Santa Fe
      </h2>

      <div class="mt-10 space-y-4">
        <details class="ajs-faq ajs-reveal">
          <summary>What kind of roofing works well in Santa Fe?</summary>
          <p>Roofing choices in Santa Fe depend on the home, slope, exposure, and long-term goals. We explain options clearly before any decision is made.</p>
        </details>

        <details class="ajs-faq ajs-reveal">
          <summary>Do you provide roof replacement and repair in Santa Fe?</summary>
          <p>Yes. AJS provides roof replacement, metal roofing, roof repair, gutters, storm damage support, and inspection services in Santa Fe.</p>
        </details>

        <details class="ajs-faq ajs-reveal">
          <summary>Can you help document storm or roof issues clearly?</summary>
          <p>Yes. Our process is built around inspection, documentation, and communication so homeowners understand what is happening and what the next step should be.</p>
        </details>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="bg-[#132d41] text-white py-20 text-center">
    <div class="max-w-3xl mx-auto px-4">
      <h2 class="ajs-reveal text-3xl md:text-4xl font-black tracking-[-0.03em]">
        When Everything Is Right Above, Calm Returns Home.
      </h2>

      <p class="ajs-reveal mt-4 text-white/80 text-base leading-8">
        Schedule your free inspection. We’ll show you exactly what your roof needs — and exactly what it doesn’t.
      </p>

      <a href="/estimate" class="ajs-btn-primary mt-8 inline-block">
        Get Your Free Inspection
      </a>
    </div>
  </section>

</main>

<style>
  .ajs-btn-primary {
    background: linear-gradient(135deg,#d04418,#b63c15);
    padding: 18px 42px;
    font-weight: 900;
    border-radius: 999px;
    color: white;
    font-size: 15px;
    box-shadow: 0 18px 36px rgba(208,68,24,0.3);
    transition: all .25s ease;
  }

  .ajs-btn-primary:hover {
    transform: translateY(-3px) scale(1.02);
    box-shadow: 0 24px 44px rgba(208,68,24,0.4);
  }

  .ajs-location-card {
    padding: 22px;
    border-radius: 18px;
    border: 1px solid rgba(19,45,65,0.08);
    background: white;
    font-weight: 700;
    transition: all .3s ease;
    box-shadow: 0 8px 20px rgba(19,45,65,0.04);
  }

  .ajs-location-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 16px 30px rgba(19,45,65,0.1);
    border-color: rgba(110,170,206,0.4);
  }

  .ajs-img-card {
    overflow: hidden;
    border-radius: 20px;
    box-shadow: 0 14px 30px rgba(19,45,65,0.08);
    border: 1px solid rgba(19,45,65,0.06);
    background: white;
  }

  .ajs-img-card img {
    width: 100%;
    height: 260px;
    object-fit: cover;
    transition: transform .6s ease;
    display: block;
  }

  .ajs-img-card:hover img {
    transform: scale(1.05);
  }

  .ajs-faq {
    border: 1px solid rgba(19,45,65,0.1);
    border-radius: 14px;
    padding: 16px;
    background: white;
    box-shadow: 0 8px 20px rgba(19,45,65,0.04);
  }

  .ajs-faq summary {
    font-weight: 700;
    cursor: pointer;
    color: #132d41;
  }

  .ajs-faq p {
    margin-top: 8px;
    font-size: 0.95rem;
    line-height: 1.7;
  }

  .ajs-reveal {
    opacity: 0;
    transform: translateY(30px);
    transition: all .8s ease;
  }

  .ajs-reveal.is-visible {
    opacity: 1;
    transform: translateY(0);
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
    .ajs-reveal,
    .ajs-btn-primary,
    .ajs-location-card,
    .ajs-img-card img,
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
  document.addEventListener("DOMContentLoaded", () => {
    const items = document.querySelectorAll(".ajs-reveal");

    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add("is-visible");
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.15 });

    items.forEach(el => observer.observe(el));
  });
</script>

<?php get_footer(); ?>