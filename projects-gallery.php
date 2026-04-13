<?php
/**
 * Template Name: Projects Template
 */

get_header(); ?>

<main class="bg-white text-[#42474b] overflow-hidden">

  <!-- HERO -->
  <section class="relative overflow-hidden bg-[linear-gradient(135deg,#132d41_0%,#1c425f_100%)] py-20 text-white">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(110,170,206,0.18),transparent_30%)]"></div>
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_left,rgba(208,68,24,0.14),transparent_30%)]"></div>

    <div class="absolute right-[-120px] top-[-120px] h-[280px] w-[280px] rounded-full bg-[#6eaace]/10 blur-3xl ajs-float-slow"></div>
    <div class="absolute bottom-[-120px] left-[-120px] h-[260px] w-[260px] rounded-full bg-[#d04418]/10 blur-3xl ajs-float-slower"></div>

    <div class="relative mx-auto max-w-5xl px-4 text-center">
      <p class="ajs-reveal inline-block rounded-full border border-white/10 bg-white/10 px-4 py-2 text-xs font-black uppercase tracking-[0.18em] text-[#6eaace]">
        Projects Gallery
      </p>

<h1 class="ajs-reveal mt-5 text-4xl font-black leading-[1.04] tracking-[-0.04em] md:text-5xl lg:text-7xl">        Installed Right. Protected for Years.
      </h1>
    </div>
  </section>

  <!-- AUTO GALLERY STRIP -->
  <section class="border-y border-[#d3d8db] bg-[#d3d8db]/20 py-6">
    <div class="ajs-projects-strip">
      <div class="ajs-projects-strip-track">
        <span>Roof Replacement</span>
        <span>Commercial & Residential Roofing</span>
        <span>TPO/PVC Systems</span>
        <span>Seamless Gutters</span>
        <span>Storm Damage Repair</span>
        <span>Roof Inspection</span>
        <span>Insurance Claims</span>
        <span>Emergency Repairs</span>
        <span>Roof Maintenance</span>

        <span>Roof Replacement</span>
        <span>Commercial & Residential Roofing</span>
        <span>TPO/PVC Systems</span>
        <span>Seamless Gutters</span>
        <span>Storm Damage Repair</span>
        <span>Roof Inspection</span>
        <span>Insurance Claims</span>
        <span>Emergency Repairs</span>
        <span>Roof Maintenance</span>
      </div>
    </div>
  </section>

<!-- GALLERY -->
<section class="py-16 md:py-20">
  <div class="mx-auto max-w-7xl px-4">
    <div class="ajs-projects-grid">

      <?php
      $projects = [
        [
          'title' => 'Roof Replacement',
          'zip' => '87122',
          'image' => 'http://ajs-roofing-and-gutters.local/wp-content/uploads/2026/04/DJI_20260211154218_0080_D-scaled.jpeg'
        ],
        [
          'title' => 'Commercial & Residential Roofing',
          'zip' => '87111',
          'image' => 'http://ajs-roofing-and-gutters.local/wp-content/uploads/2026/04/Edited-WP-1-1-scaled.png'
        ],
        [
          'title' => 'Seamless Gutters',
          'zip' => '87124',
          'image' => 'http://ajs-roofing-and-gutters.local/wp-content/uploads/2026/04/down-net_http20260221-116-ew4z81.jpg'
        ],
        [
          'title' => 'Storm Damage Repair',
          'zip' => '87120',
          'image' => 'http://ajs-roofing-and-gutters.local/wp-content/uploads/2026/04/IMG_1497-1-scaled.jpeg'
        ],
        [
          'title' => 'Roof Repair',
          'zip' => '87501',
          'image' => 'http://ajs-roofing-and-gutters.local/wp-content/uploads/2026/04/PSRoof2-scaled.jpeg'
        ],
        [
          'title' => 'Inspection & Maintenance',
          'zip' => '87506',
          'image' => 'http://ajs-roofing-and-gutters.local/wp-content/uploads/2026/04/down-net_http20260223-317-60x0uj.jpeg'
        ],
        [
          'title' => 'Roof Replacement',
          'zip' => '87114',
          'image' => 'http://ajs-roofing-and-gutters.local/wp-content/uploads/2026/04/IMG_0862-scaled.jpg'
        ],
        [
          'title' => 'Commercial & Residential Roofing',
          'zip' => '87124',
          'image' => 'http://ajs-roofing-and-gutters.local/wp-content/uploads/2026/04/edit-tbd-2-1-scaled.png'
        ],
      ];

      $sizes = ['ajs-tall', 'ajs-medium', 'ajs-medium', 'ajs-tall', 'ajs-medium', 'ajs-medium', 'ajs-tall', 'ajs-medium'];

      foreach ($projects as $index => $project) : ?>
        <article class="ajs-project-card ajs-reveal <?php echo esc_attr($sizes[$index] ?? 'ajs-medium'); ?>">
          <div class="ajs-project-frame">
            <img
              src="<?php echo esc_url($project['image']); ?>"
              alt="<?php echo esc_attr($project['title'] . ' ' . $project['zip']); ?>"
              class="ajs-project-image"
            >

            <div class="ajs-project-overlay"></div>

            <div class="ajs-project-badge">
              <span><?php echo esc_html($project['title']); ?></span>
            </div>
          </div>
        </article>
      <?php endforeach; ?>

    </div>
  </div>
</section>
</main>

<style>
  .ajs-projects-strip {
    overflow: hidden;
    width: 100%;
  }

  .ajs-projects-strip-track {
    display: flex;
    width: max-content;
    gap: 2.5rem;
    white-space: nowrap;
    animation: ajsProjectsMove 28s linear infinite;
    color: #132d41;
    font-size: 0.95rem;
    font-weight: 800;
  }

  .ajs-projects-strip-track span {
    position: relative;
    padding-left: 1.2rem;
  }

  .ajs-projects-strip-track span::before {
    content: "•";
    position: absolute;
    left: 0;
    color: #d04418;
  }

  @keyframes ajsProjectsMove {
    from { transform: translateX(0); }
    to { transform: translateX(-50%); }
  }

  .ajs-projects-grid {
    display: grid;
    grid-template-columns: repeat(1, minmax(0, 1fr));
    gap: 1.25rem;
  }

  @media (min-width: 768px) {
    .ajs-projects-grid {
      grid-template-columns: repeat(2, minmax(0, 1fr));
    }
  }

  @media (min-width: 1280px) {
    .ajs-projects-grid {
      grid-template-columns: repeat(4, minmax(0, 1fr));
      grid-auto-flow: dense;
    }
  }

  .ajs-medium {
    min-height: 280px;
  }

  .ajs-tall {
    min-height: 420px;
  }

  .ajs-project-card {
    position: relative;
  }

  .ajs-project-frame {
    position: relative;
    overflow: hidden;
    height: 100%;
    min-height: inherit;
    border-radius: 22px;
    border: 1px solid rgba(211,216,219,0.9);
    background: #fff;
    box-shadow: 0 10px 24px rgba(19,45,65,0.06);
    transition: transform .3s ease, box-shadow .3s ease, border-color .3s ease;
  }

  .ajs-project-card:hover .ajs-project-frame {
    transform: translateY(-4px);
    box-shadow: 0 18px 34px rgba(19,45,65,0.10);
    border-color: rgba(110,170,206,0.25);
  }

  .ajs-project-image {
    display: block;
    width: 100%;
    height: 100%;
    min-height: inherit;
    object-fit: cover;
    transition: transform .6s ease;
  }

  .ajs-project-card:hover .ajs-project-image {
    transform: scale(1.04);
  }

  .ajs-project-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(
      to top,
      rgba(19,45,65,0.45) 0%,
      rgba(19,45,65,0.15) 40%,
      rgba(19,45,65,0) 70%
    );
    z-index: 2;
    opacity: 0.85;
    transition: opacity .3s ease;
  }

  .ajs-project-card:hover .ajs-project-overlay {
    opacity: 1;
  }

  .ajs-project-badge {
    position: absolute;
    left: 18px;
    right: 18px;
    bottom: 18px;
    z-index: 3;
    color: white;
  }

  .ajs-project-badge span {
    display: block;
    font-size: 0.95rem;
    font-weight: 800;
    letter-spacing: -0.02em;
  }

  .ajs-reveal {
    opacity: 0;
    transform: translateY(36px);
    transition: opacity .8s ease, transform .8s ease;
    will-change: opacity, transform;
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
    .ajs-projects-strip-track,
    .ajs-reveal,
    .ajs-project-frame,
    .ajs-project-image,
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
    const items = document.querySelectorAll(".ajs-reveal");

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