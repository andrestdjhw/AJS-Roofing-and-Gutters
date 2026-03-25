<?php
/**
 * Template Name: Locations Hub
 */

get_header(); ?>

<main class="bg-white text-[#42474b] overflow-hidden">

  <!-- HERO -->
  <section class="relative overflow-hidden bg-[linear-gradient(135deg,#132d41_0%,#1c425f_100%)] py-20 text-white md:py-24">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(110,170,206,0.14),transparent_30%)]"></div>
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_left,rgba(208,68,24,0.10),transparent_28%)]"></div>

    <div class="relative mx-auto max-w-5xl px-4 text-center">
      <p class="ajs-reveal text-xs font-black uppercase tracking-[0.18em] text-[#6eaace]">
        Service Areas
      </p>

      <h1 class="ajs-reveal mt-4 text-4xl font-black leading-tight tracking-[-0.04em] md:text-5xl lg:text-6xl">
        Locations We Serve
      </h1>

      <p class="ajs-reveal mx-auto mt-6 max-w-2xl text-base leading-8 text-white/80 md:text-lg">
        Explore the areas we serve across Albuquerque, Santa Fe, and Rio Rancho.
        Select your location to view local service pages and area-specific information.
      </p>
    </div>
  </section>

  <!-- INTRO -->
  <section class="bg-white py-12 md:py-16">
    <div class="mx-auto max-w-4xl px-4 text-center">
      <p class="ajs-reveal text-lg leading-8 text-[#42474b]">
        Choose the location closest to your home to see services, projects, and local information tailored to that area.
      </p>
    </div>
  </section>

  <!-- LOCATIONS GRID -->
  <section class="pb-20 md:pb-24">
    <div class="mx-auto max-w-7xl px-4">

      <div class="grid gap-6 md:grid-cols-2 xl:grid-cols-3">

        <a href="/locations/albuquerque-ne-high-desert-87122" class="ajs-location-card ajs-reveal">
          <span class="ajs-location-tag">Albuquerque</span>
          <h2 class="ajs-location-title">Albuquerque NE / High Desert</h2>
          <p class="ajs-location-zip">87122</p>
          <span class="ajs-location-link">View location</span>
        </a>

        <a href="/locations/far-ne-heights-87111" class="ajs-location-card ajs-reveal">
          <span class="ajs-location-tag">Albuquerque</span>
          <h2 class="ajs-location-title">Far NE Heights</h2>
          <p class="ajs-location-zip">87111</p>
          <span class="ajs-location-link">View location</span>
        </a>

        <a href="/locations/albuquerque-west-87120" class="ajs-location-card ajs-reveal">
          <span class="ajs-location-tag">Albuquerque</span>
          <h2 class="ajs-location-title">Albuquerque West</h2>
          <p class="ajs-location-zip">87120</p>
          <span class="ajs-location-link">View location</span>
        </a>

        <a href="/locations/nw-abq-87114" class="ajs-location-card ajs-reveal">
          <span class="ajs-location-tag">Albuquerque / Rio Rancho</span>
          <h2 class="ajs-location-title">NW ABQ / Rio Rancho</h2>
          <p class="ajs-location-zip">87114</p>
          <span class="ajs-location-link">View location</span>
        </a>

        <a href="/locations/santa-fe-historic-core-87501" class="ajs-location-card ajs-reveal">
          <span class="ajs-location-tag">Santa Fe</span>
          <h2 class="ajs-location-title">Santa Fe Historic Core</h2>
          <p class="ajs-location-zip">87501</p>
          <span class="ajs-location-link">View location</span>
        </a>

        <a href="/locations/northern-santa-fe-87506" class="ajs-location-card ajs-reveal">
          <span class="ajs-location-tag">Santa Fe</span>
          <h2 class="ajs-location-title">Northern Santa Fe</h2>
          <p class="ajs-location-zip">87506</p>
          <span class="ajs-location-link">View location</span>
        </a>

        <a href="/locations/rio-rancho-87124" class="ajs-location-card ajs-reveal">
          <span class="ajs-location-tag">Rio Rancho</span>
          <h2 class="ajs-location-title">Rio Rancho</h2>
          <p class="ajs-location-zip">87124</p>
          <span class="ajs-location-link">View location</span>
        </a>

      </div>
    </div>
  </section>

</main>

<style>
.ajs-location-card {
  position: relative;
  overflow: hidden;
  display: flex;
  flex-direction: column;
  gap: 10px;
  padding: 28px;
  border-radius: 24px;
  border: 1px solid rgba(211, 216, 219, 0.9);
  background: linear-gradient(180deg, #ffffff 0%, #f5f7f8 100%);
  text-decoration: none;
  box-shadow: 0 10px 24px rgba(19, 45, 65, 0.05);
  transition: transform .28s ease, box-shadow .28s ease, border-color .28s ease;
}

.ajs-location-card::before {
  content: "";
  position: absolute;
  inset: 0;
  background: radial-gradient(circle at top right, rgba(110,170,206,0.10), transparent 35%);
  pointer-events: none;
}

.ajs-location-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 18px 38px rgba(19, 45, 65, 0.12);
  border-color: rgba(110, 170, 206, 0.22);
}

.ajs-location-tag {
  position: relative;
  z-index: 1;
  display: inline-flex;
  width: fit-content;
  padding: 7px 12px;
  border-radius: 999px;
  background: rgba(208, 68, 24, 0.10);
  color: #d04418;
  font-size: 0.74rem;
  font-weight: 900;
  letter-spacing: 0.08em;
  text-transform: uppercase;
}

.ajs-location-title {
  position: relative;
  z-index: 1;
  font-size: 1.35rem;
  line-height: 1.2;
  font-weight: 900;
  color: #132d41;
  letter-spacing: -0.03em;
}

.ajs-location-zip {
  position: relative;
  z-index: 1;
  font-size: 0.95rem;
  font-weight: 700;
  color: #42474b;
}

.ajs-location-link {
  position: relative;
  z-index: 1;
  margin-top: 10px;
  display: inline-flex;
  width: fit-content;
  font-size: 0.88rem;
  font-weight: 900;
  color: #132d41;
  transition: transform .25s ease, color .25s ease;
}

.ajs-location-card:hover .ajs-location-link {
  transform: translateX(4px);
  color: #6eaace;
}

.ajs-reveal {
  opacity: 0;
  transform: translateY(24px);
  transition: opacity .7s ease, transform .7s ease;
}

.ajs-reveal.is-visible {
  opacity: 1;
  transform: translateY(0);
}
</style>

<script>
document.addEventListener("DOMContentLoaded", () => {
  const items = document.querySelectorAll(".ajs-reveal");
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) entry.target.classList.add("is-visible");
    });
  }, { threshold: 0.12 });
  items.forEach(el => observer.observe(el));
});
</script>

<?php get_footer(); ?>