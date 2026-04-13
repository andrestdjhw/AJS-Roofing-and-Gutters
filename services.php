<?php
/**
 * Template Name: Services Hub
 */

get_header(); ?>

<main class="bg-white text-[#42474b] overflow-hidden">

  <!-- HERO -->
  <section class="relative overflow-hidden bg-[linear-gradient(135deg,#132d41_0%,#1c425f_100%)] py-20 text-white md:py-24">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(110,170,206,0.14),transparent_30%)]"></div>
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_left,rgba(208,68,24,0.10),transparent_28%)]"></div>

    <div class="relative mx-auto max-w-5xl px-4 text-center">
      <p class="ajs-reveal text-xs font-black uppercase tracking-[0.18em] text-[#6eaace]">
        Roofing & Gutter Solutions
      </p>

      <h1 class="ajs-reveal mt-4 text-4xl font-black leading-tight tracking-[-0.04em] md:text-5xl lg:text-6xl">
        Services We Offer
      </h1>

      <p class="ajs-reveal mx-auto mt-6 max-w-2xl text-base leading-8 text-white/80 md:text-lg">
        Explore the roofing, gutter, repair, and protection services available through AJS Roofing &amp; Gutters.
      </p>
    </div>
  </section>

  <!-- INTRO -->
  <section class="bg-white py-12 md:py-16">
    <div class="mx-auto max-w-4xl px-4 text-center">
      <p class="ajs-reveal text-lg leading-8 text-[#42474b]">
        Choose a service to learn more about the process, protection, and solutions that fit your home.
      </p>
    </div>
  </section>

  <!-- SERVICES GRID -->
  <section class="pb-20 md:pb-24">
    <div class="mx-auto max-w-7xl px-4">
      <div class="grid gap-6 md:grid-cols-2 xl:grid-cols-3">

        <a href="/service/service-roof-replacement/" class="ajs-service-card ajs-reveal">
          <span class="ajs-service-tag">Core Service</span>
          <h2 class="ajs-service-title">Roof Replacement</h2>
          <p class="ajs-service-copy">
            Complete tear-off and rebuild with a documented process and long-term protection in mind.
          </p>
          <span class="ajs-service-link">Explore service</span>
        </a>

<a href="/service/commercial-residential-roofing" class="ajs-service-card ajs-reveal">
  <span class="ajs-service-tag">Core Service</span>
  <h2 class="ajs-service-title">Commercial & Residential Roofing</h2>
  <p class="ajs-service-copy">
    TPO/PVC, metal, tile, and shingle systems for homes and businesses with in-house crews and a documented process built for long-term performance.
  </p>
  <span class="ajs-service-link">Explore service</span>
</a>
        <a href="/service/gutters" class="ajs-service-card ajs-reveal">
          <span class="ajs-service-tag">Core Service</span>
          <h2 class="ajs-service-title">Seamless Gutters</h2>
          <p class="ajs-service-copy">
            Custom-fabricated gutter systems designed for clean drainage and lasting protection.
          </p>
          <span class="ajs-service-link">Explore service</span>
        </a>

        <a href="/service/roof-repair" class="ajs-service-card ajs-reveal">
          <span class="ajs-service-tag">Repairs & Protection</span>
          <h2 class="ajs-service-title">Roof Repair</h2>
          <p class="ajs-service-copy">
            Targeted repairs when your roof needs a solution that is honest, clear, and properly executed.
          </p>
          <span class="ajs-service-link">Explore service</span>
        </a>

        <a href="/service/storm-damage-insurance" class="ajs-service-card ajs-reveal">
          <span class="ajs-service-tag">Repairs & Protection</span>
          <h2 class="ajs-service-title">Storm Damage &amp; Insurance</h2>
          <p class="ajs-service-copy">
            Inspection, documentation, and support when storm damage creates uncertainty.
          </p>
          <span class="ajs-service-link">Explore service</span>
        </a>

        <a href="/service/roof-inspection" class="ajs-service-card ajs-reveal">
          <span class="ajs-service-tag">Repairs & Protection</span>
          <h2 class="ajs-service-title">Roof Inspection &amp; Maintenance</h2>
          <p class="ajs-service-copy">
            Photo-documented inspections and maintenance planning to help prevent bigger problems later.
          </p>
          <span class="ajs-service-link">Explore service</span>
        </a>

        <a href="/#process" class="ajs-service-card ajs-reveal">
          <span class="ajs-service-tag">Why AJS</span>
          <h2 class="ajs-service-title">Our 5-Step Process</h2>
          <p class="ajs-service-copy">
            See how AJS brings order, communication, and consistency to every project from start to finish.
          </p>
          <span class="ajs-service-link">See the process</span>
        </a>

        <a href="/projects" class="ajs-service-card ajs-reveal">
          <span class="ajs-service-tag">Why AJS</span>
          <h2 class="ajs-service-title">Projects Gallery</h2>
          <p class="ajs-service-copy">
            View recent work and explore examples of completed roofing and gutter projects.
          </p>
          <span class="ajs-service-link">View gallery</span>
        </a>

        <a href="/schedule-a-call" class="ajs-service-card ajs-reveal">
          <span class="ajs-service-tag">Why AJS</span>
          <h2 class="ajs-service-title">Talk to an Expert</h2>
          <p class="ajs-service-copy">
            Connect with AJS to ask questions, get clarity, and discuss the right next step for your home.
          </p>
          <span class="ajs-service-link">Schedule a call</span>
        </a>

      </div>

      <!-- CTA CARD -->
      <div class="mt-8">
        <a href="/estimate" class="ajs-service-card-highlight ajs-reveal">
          <div>
            <span class="ajs-service-tag-highlight">Get Started</span>
            <h2 class="ajs-service-title-highlight">Get Your Free Inspection</h2>
            <p class="ajs-service-copy-highlight">
              Start with a clear inspection and get a better understanding of what your roof needs.
            </p>
          </div>
          <span class="ajs-service-link-highlight">Request inspection</span>
        </a>
      </div>
    </div>
  </section>

</main>

<style>
.ajs-service-card {
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

.ajs-service-card::before {
  content: "";
  position: absolute;
  inset: 0;
  background: radial-gradient(circle at top right, rgba(110,170,206,0.10), transparent 35%);
  pointer-events: none;
}

.ajs-service-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 18px 38px rgba(19, 45, 65, 0.12);
  border-color: rgba(110, 170, 206, 0.22);
}

.ajs-service-tag {
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

.ajs-service-title {
  position: relative;
  z-index: 1;
  font-size: 1.35rem;
  line-height: 1.2;
  font-weight: 900;
  color: #132d41;
  letter-spacing: -0.03em;
}

.ajs-service-copy {
  position: relative;
  z-index: 1;
  font-size: 0.97rem;
  line-height: 1.8;
  color: #42474b;
}

.ajs-service-link {
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

.ajs-service-card:hover .ajs-service-link {
  transform: translateX(4px);
  color: #6eaace;
}

.ajs-service-card-highlight {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 20px;
  padding: 30px;
  border-radius: 28px;
  text-decoration: none;
  background: linear-gradient(135deg, #132d41 0%, #1c425f 100%);
  color: white;
  box-shadow: 0 18px 40px rgba(19, 45, 65, 0.16);
  transition: transform .28s ease, box-shadow .28s ease;
}

.ajs-service-card-highlight:hover {
  transform: translateY(-4px);
  box-shadow: 0 24px 46px rgba(19, 45, 65, 0.22);
}

.ajs-service-tag-highlight {
  display: inline-flex;
  width: fit-content;
  padding: 7px 12px;
  border-radius: 999px;
  background: rgba(208, 68, 24, 0.16);
  color: #d04418;
  font-size: 0.74rem;
  font-weight: 900;
  letter-spacing: 0.08em;
  text-transform: uppercase;
}

.ajs-service-title-highlight {
  margin-top: 12px;
  font-size: 1.75rem;
  line-height: 1.15;
  font-weight: 900;
  letter-spacing: -0.03em;
  color: white;
}

.ajs-service-copy-highlight {
  margin-top: 10px;
  font-size: 1rem;
  line-height: 1.8;
  color: rgba(255,255,255,0.78);
  max-width: 760px;
}

.ajs-service-link-highlight {
  flex-shrink: 0;
  font-size: 0.92rem;
  font-weight: 900;
  color: #6eaace;
  transition: transform .25s ease;
}

.ajs-service-card-highlight:hover .ajs-service-link-highlight {
  transform: translateX(4px);
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

@media (max-width: 767px) {
  .ajs-service-card-highlight {
    flex-direction: column;
    align-items: flex-start;
  }

  .ajs-service-title-highlight {
    font-size: 1.45rem;
  }
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