<?php
/**
 * Template Name: Home Template
 *
 * Homepage AJS — HTML + Tailwind inline.
 * Navbar y footer vienen de header.php / footer.php.
 */

get_header(); ?>

<main class="bg-white text-[#42474b]">
  <!-- Hero -->
  <section class="relative overflow-hidden bg-[linear-gradient(135deg,rgba(19,45,65,0.96),rgba(31,70,97,0.88))] text-white">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(110,170,206,0.22),transparent_30%)]"></div>
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_left,rgba(208,68,24,0.12),transparent_28%)]"></div>

    <div class="relative mx-auto grid max-w-7xl gap-10 px-4 py-16 md:py-20 lg:grid-cols-[1.08fr_0.92fr] lg:items-center">
      <div class="ajs-reveal-left">
        <p class="mb-3 text-xs font-black uppercase tracking-[0.18em] text-[#6eaace]">
          Roofing Without Uncertainty
        </p>

        <h1 class="max-w-[12ch] text-4xl font-black leading-[0.95] tracking-[-0.04em] md:text-5xl lg:text-7xl">
          Your Roof Shouldn’t Be a Question Mark.
        </h1>

        <p class="mt-5 max-w-2xl text-base leading-8 text-white/85 md:text-lg">
          We inspect, install, and protect with a system designed to eliminate uncertainty —
          so your home feels secure again. AJS Roofing &amp; Gutters brings order, clarity,
          and precision to every project across Albuquerque, Santa Fe, and Rio Rancho.
        </p>

        <div class="mt-7 flex flex-wrap gap-3">
          <a href="/estimate"
             class="ajs-btn-animate inline-flex items-center justify-center rounded-full bg-[linear-gradient(135deg,#d04418,#b63c15)] px-6 py-4 text-sm font-black text-white shadow-[0_16px_32px_rgba(208,68,24,0.28)] transition">
            Get Your Free Inspection
          </a>

          <a href="#services"
             class="ajs-btn-animate inline-flex items-center justify-center rounded-full border border-white/15 bg-white/10 px-6 py-4 text-sm font-black text-white backdrop-blur-sm transition hover:bg-white/15">
            Explore Our Services
          </a>
        </div>

        <a href="tel:+15050000000"
           class="mt-6 inline-flex items-center gap-2 text-base font-extrabold text-white">
          <span class="text-white/70">Call Now:</span>
          <span>(505) 000-0000</span>
        </a>
      </div>

      <div class="ajs-reveal-right rounded-[28px] border border-white/10 bg-white p-5 text-[#42474b] shadow-2xl">
        <h2 class="text-2xl font-black tracking-[-0.03em] text-[#132d41]">
          Start with a clear inspection.
        </h2>
        <p class="mt-2 text-sm leading-7 text-[#42474b]/80">
          Tell us what’s going on and we’ll help you take the next step with confidence.
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

  <!-- Ticker -->
  <section class="overflow-hidden border-y border-[#d3d8db] bg-white">
    <div class="ajs-ticker">
      <div class="ajs-ticker-track">
        <span>Roof Replacement</span>
        <span>Metal Roofing</span>
        <span>Seamless Gutters</span>
        <span>Storm Damage Repair</span>
        <span>Roof Inspection</span>
        <span>Insurance Claims</span>
        <span>Emergency Repairs</span>
        <span>Roof Maintenance</span>

        <span>Roof Replacement</span>
        <span>Metal Roofing</span>
        <span>Seamless Gutters</span>
        <span>Storm Damage Repair</span>
        <span>Roof Inspection</span>
        <span>Insurance Claims</span>
        <span>Emergency Repairs</span>
        <span>Roof Maintenance</span>
      </div>
    </div>
  </section>

  <!-- About Intro -->
  <section class="py-20">
    <div class="mx-auto grid max-w-7xl gap-10 px-4 lg:grid-cols-[0.9fr_1.1fr] lg:items-start">
      <div class="ajs-reveal-left">
        <p class="mb-3 text-xs font-black uppercase tracking-[0.18em] text-[#d04418]">
          From Chaos to Calm
        </p>
        <h2 class="max-w-[12ch] text-3xl font-black leading-tight tracking-[-0.03em] text-[#132d41] md:text-5xl">
          Where Chaos Ends. Home Begins.
        </h2>
      </div>

      <div class="ajs-reveal-right space-y-5 text-base leading-8 text-[#42474b]">
        <p>
          AJS Roofing &amp; Gutters is a licensed roofing contractor serving Albuquerque,
          Santa Fe, Rio Rancho, and surrounding New Mexico communities. We don’t just
          install roofs — we restore peace of mind.
        </p>

        <p>
          Through clear processes, professional execution, and work done right from the
          start, we turn a moment of uncertainty into lasting protection and confidence.
        </p>

        <p>
          With [X]+ completed projects, manufacturer certifications, and our own on-site
          gutter fabrication machine, AJS is the roofing partner that brings order to
          a process that usually feels chaotic.
        </p>

        <a href="/about"
           class="inline-flex font-black text-[#d04418] transition hover:translate-x-[2px]">
          Learn more about AJS
        </a>
      </div>
    </div>
  </section>

  <!-- Services -->
  <section id="services" class="ajs-home-sticky-offset bg-[#d3d8db]/20 py-20">
    <div class="mx-auto max-w-7xl px-4">
      <p class="ajs-reveal mb-3 text-xs font-black uppercase tracking-[0.18em] text-[#d04418]">
        Protection You Can Feel
      </p>
      <h2 class="ajs-reveal max-w-4xl text-3xl font-black leading-tight tracking-[-0.03em] text-[#132d41] md:text-5xl">
        Roofing and gutter solutions built on order, precision, and lasting craftsmanship.
      </h2>

      <div class="mt-8 grid gap-5 md:grid-cols-2 xl:grid-cols-3">
        <?php
        $services = [
          [
            'title' => 'Roof Replacement',
            'copy'  => 'Complete tear-off and rebuild. Premium materials, manufacturer warranties, and our documented process. Done right. Done once.',
            'link'  => '/service/roof-replacement'
          ],
          [
            'title' => 'Metal Roofing',
            'copy'  => 'Standing seam and metal panel systems built for New Mexico’s extreme UV, hail, and wind. 40–70 year lifespan. The last roof your home will need.',
            'link'  => '/service/metal-roofing'
          ],
          [
            'title' => 'Seamless Gutters',
            'copy'  => 'Custom-fabricated on-site with our own machine. No seams, no leaks, no subcontractors. Precision drainage that protects your foundation.',
            'link'  => '/service/gutters'
          ],
          [
            'title' => 'Storm Damage & Insurance',
            'copy'  => 'Hail or wind damage? We inspect, document everything with photos, and work with your insurance to streamline the process. Here’s what we found — and here’s how we fix it.',
            'link'  => '/service/storm-damage-insurance'
          ],
          [
            'title' => 'Roof Repair',
            'copy'  => 'Targeted repairs for leaks, missing shingles, and weather wear. Honest assessment first — we’ll tell you if a repair is enough or if replacement makes more sense.',
            'link'  => '/service/roof-repair'
          ],
          [
            'title' => 'Roof Inspection & Maintenance',
            'copy'  => 'Photo-documented inspections and annual maintenance plans. Catch small problems before they become expensive ones. You don’t need to understand roofing — that’s our job.',
            'link'  => '/service/roof-inspection'
          ],
        ];

        foreach ($services as $service) : ?>
          <article class="ajs-hover-lift ajs-reveal rounded-[24px] border border-[#d3d8db] bg-[linear-gradient(180deg,#ffffff_0%,#f5f9fc_100%)] p-6 shadow-[0_14px_32px_rgba(19,45,65,0.07)]">
            <h3 class="text-xl font-black tracking-[-0.02em] text-[#132d41]">
              <?php echo esc_html($service['title']); ?>
            </h3>
            <p class="mt-4 text-[15px] leading-8 text-[#42474b]">
              <?php echo esc_html($service['copy']); ?>
            </p>
            <a href="<?php echo esc_url($service['link']); ?>"
               class="mt-5 inline-flex font-black text-[#d04418] transition hover:translate-x-[2px]">
              Keep reading
            </a>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Why Choose AJS -->
  <section class="py-20">
    <div class="mx-auto max-w-7xl px-4">
      <p class="ajs-reveal mb-3 text-xs font-black uppercase tracking-[0.18em] text-[#d04418]">
        No Shortcuts. Just Protection.
      </p>
      <h2 class="ajs-reveal max-w-4xl text-3xl font-black leading-tight tracking-[-0.03em] text-[#132d41] md:text-5xl">
        We combine a documented process, local expertise, and premium materials to deliver roofing protection built on trust.
      </h2>

      <div class="mt-8 grid gap-5 md:grid-cols-2 xl:grid-cols-3">
        <article class="ajs-hover-lift ajs-reveal rounded-[24px] border border-[#d3d8db] bg-[linear-gradient(180deg,#ffffff_0%,#f5f9fc_100%)] p-6 shadow-[0_14px_32px_rgba(19,45,65,0.07)] md:col-span-2">
          <h3 class="text-xl font-black text-[#132d41]">Documented 5-Step Process</h3>
          <p class="mt-4 text-[15px] leading-8 text-[#42474b]">
            Every AJS project follows the same system: Inspect, Plan, Protect, Build, Verify.
            No surprises. Every step photographed and communicated. You always know what’s happening.
          </p>
        </article>

        <article class="ajs-hover-lift ajs-reveal rounded-[24px] border border-[#d3d8db] bg-[linear-gradient(180deg,#ffffff_0%,#f5f9fc_100%)] p-6 shadow-[0_14px_32px_rgba(19,45,65,0.07)]">
          <h3 class="text-xl font-black text-[#132d41]">Licensed, Insured &amp; Manufacturer Certified</h3>
          <p class="mt-4 text-[15px] leading-8 text-[#42474b]">
            Professional standards, clear accountability, and systems built to last.
          </p>
        </article>

        <article class="ajs-hover-lift ajs-reveal rounded-[24px] border border-[#132d41] bg-[linear-gradient(135deg,rgba(19,45,65,1),rgba(110,170,206,0.95))] p-6 text-white shadow-[0_14px_32px_rgba(19,45,65,0.12)]">
          <h3 class="text-xl font-black">Built for New Mexico Conditions</h3>
          <p class="mt-4 text-[15px] leading-8 text-white/88">
            Materials and installation choices made for UV, hail, wind, and long-term durability.
          </p>
        </article>

        <article class="ajs-hover-lift ajs-reveal rounded-[24px] border border-[#d3d8db] bg-[linear-gradient(180deg,#ffffff_0%,#f5f9fc_100%)] p-6 shadow-[0_14px_32px_rgba(19,45,65,0.07)]">
          <h3 class="text-xl font-black text-[#132d41]">Photo-Documented Clarity</h3>
          <p class="mt-4 text-[15px] leading-8 text-[#42474b]">
            You don’t have to guess what’s happening on your roof. We show you.
          </p>
        </article>

        <article class="ajs-hover-lift ajs-reveal rounded-[24px] border border-[#d3d8db] bg-[linear-gradient(180deg,#ffffff_0%,#f5f9fc_100%)] p-6 shadow-[0_14px_32px_rgba(19,45,65,0.07)]">
          <h3 class="text-xl font-black text-[#132d41]">Peace of Mind, Not Pressure</h3>
          <p class="mt-4 text-[15px] leading-8 text-[#42474b]">
            No manufactured urgency. No confusion. Just clear recommendations and next steps.
          </p>
        </article>
      </div>
    </div>
  </section>

  <!-- Process -->
  <section id="process" class="bg-[#132d41] py-20 text-white">
    <div class="mx-auto max-w-7xl px-4">
      <p class="ajs-reveal mb-3 text-xs font-black uppercase tracking-[0.18em] text-[#6eaace]">
        Our Process
      </p>
      <h2 class="ajs-reveal max-w-4xl text-3xl font-black leading-tight tracking-[-0.03em] md:text-5xl">
        From Chaos to Calm. In 5 Steps.
      </h2>
      <p class="ajs-reveal mt-4 max-w-3xl text-base leading-8 text-white/78">
        Every AJS project follows the same documented process. No shortcuts. No surprises. Just proper protection.
      </p>

      <div class="mt-8 grid gap-5 md:grid-cols-2 xl:grid-cols-5">
        <?php
        $steps = [
          ['01', 'Inspect', 'We climb your roof and photograph every square foot. You get a detailed digital report with images, measurements, and our honest assessment. No pressure. Just facts.'],
          ['02', 'Plan', 'We walk you through options, timelines, and pricing. If insurance is involved, we prepare the documentation. Nothing starts until you approve.'],
          ['03', 'Protect', 'Our crew arrives on schedule. Materials staged, safety protocols followed, your property protected. We treat your home like it’s ours.'],
          ['04', 'Build', 'Installation follows manufacturer specs exactly. We photograph progress at key milestones and keep you updated. Precision overhead.'],
          ['05', 'Verify', 'Final walkthrough with you present. Every detail shown, every question answered, complete cleanup, warranty packet with documentation. Peace inside.'],
        ];

        foreach ($steps as $step) : ?>
          <article class="ajs-hover-lift ajs-reveal rounded-[24px] border border-white/10 bg-white/8 p-6 backdrop-blur-sm">
            <span class="text-xs font-black uppercase tracking-[0.18em] text-[#6eaace]">
              <?php echo esc_html($step[0]); ?>
            </span>
            <h3 class="mt-2 text-lg font-black text-white">
              <?php echo esc_html($step[1]); ?>
            </h3>
            <p class="mt-4 text-[15px] leading-8 text-white/80">
              <?php echo esc_html($step[2]); ?>
            </p>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Gallery -->
  <section class="py-20">
    <div class="mx-auto max-w-7xl px-4">
      <p class="ajs-reveal mb-3 text-xs font-black uppercase tracking-[0.18em] text-[#d04418]">
        Installed Right. Protected for Years.
      </p>
      <h2 class="ajs-reveal max-w-4xl text-3xl font-black leading-tight tracking-[-0.03em] text-[#132d41] md:text-5xl">
        Recent work across New Mexico communities.
      </h2>

      <div class="mt-8 grid gap-5 md:grid-cols-2 xl:grid-cols-4">
        <div class="ajs-hover-lift ajs-reveal flex min-h-[220px] items-end rounded-[24px] border border-[#d3d8db] bg-[linear-gradient(180deg,rgba(19,45,65,0.08),rgba(19,45,65,0.18)),linear-gradient(180deg,#eef6fb_0%,#d3d8db_100%)] p-6 font-black text-[#132d41]">
          Roof Replacement · 87114
        </div>
        <div class="ajs-hover-lift ajs-reveal flex min-h-[220px] items-end rounded-[24px] border border-[#d3d8db] bg-[linear-gradient(180deg,rgba(19,45,65,0.08),rgba(19,45,65,0.18)),linear-gradient(180deg,#eef6fb_0%,#d3d8db_100%)] p-6 font-black text-[#132d41]">
          Metal Roofing · 87501
        </div>
        <div class="ajs-hover-lift ajs-reveal flex min-h-[220px] items-end rounded-[24px] border border-[#d3d8db] bg-[linear-gradient(180deg,rgba(19,45,65,0.08),rgba(19,45,65,0.18)),linear-gradient(180deg,#eef6fb_0%,#d3d8db_100%)] p-6 font-black text-[#132d41]">
          Seamless Gutters · 87124
        </div>
        <div class="ajs-hover-lift ajs-reveal flex min-h-[220px] items-end rounded-[24px] border border-[#d3d8db] bg-[linear-gradient(180deg,rgba(19,45,65,0.08),rgba(19,45,65,0.18)),linear-gradient(180deg,#eef6fb_0%,#d3d8db_100%)] p-6 font-black text-[#132d41]">
          Storm Damage Repair · 87120
        </div>
      </div>

      <div class="ajs-reveal mt-6">
        <a href="/projects"
           class="ajs-btn-animate inline-flex items-center justify-center rounded-full border border-[#132d41]/12 bg-[#132d41]/5 px-6 py-4 text-sm font-black text-[#132d41] transition hover:bg-[#132d41] hover:text-white">
          View Full Gallery
        </a>
      </div>
    </div>
  </section>

  <!-- Reviews -->
  <section class="bg-[#d3d8db]/30 py-20">
    <div class="mx-auto max-w-7xl px-4">
      <p class="ajs-reveal mb-3 text-xs font-black uppercase tracking-[0.18em] text-[#d04418]">
        The Calm Side of Construction
      </p>
      <h2 class="ajs-reveal max-w-4xl text-3xl font-black leading-tight tracking-[-0.03em] text-[#132d41] md:text-5xl">
        What homeowners remember most is clarity, confidence, and follow-through.
      </h2>

      <div class="mt-8 grid gap-5 md:grid-cols-2 xl:grid-cols-3">
        <article class="ajs-hover-lift ajs-reveal rounded-[24px] border border-[#d3d8db] bg-white p-6 shadow-[0_14px_32px_rgba(19,45,65,0.07)]">
          <div class="text-base font-black tracking-[0.12em] text-[#d04418]">★★★★★</div>
          <p class="mt-4 text-[15px] leading-8 text-[#42474b]">
            “Clear communication, solid workmanship, and zero guessing. We always knew what was happening.”
          </p>
          <strong class="mt-4 inline-block text-[#132d41]">— Maria, Albuquerque</strong>
        </article>

        <article class="ajs-hover-lift ajs-reveal rounded-[24px] border border-[#d3d8db] bg-white p-6 shadow-[0_14px_32px_rgba(19,45,65,0.07)]">
          <div class="text-base font-black tracking-[0.12em] text-[#d04418]">★★★★★</div>
          <p class="mt-4 text-[15px] leading-8 text-[#42474b]">
            “They explained the storm damage clearly and helped us understand what the roof actually needed.”
          </p>
          <strong class="mt-4 inline-block text-[#132d41]">— James, Rio Rancho</strong>
        </article>

        <article class="ajs-hover-lift ajs-reveal rounded-[24px] border border-[#d3d8db] bg-white p-6 shadow-[0_14px_32px_rgba(19,45,65,0.07)]">
          <div class="text-base font-black tracking-[0.12em] text-[#d04418]">★★★★★</div>
          <p class="mt-4 text-[15px] leading-8 text-[#42474b]">
            “Professional from start to finish. The process felt organized, and the result feels secure.”
          </p>
          <strong class="mt-4 inline-block text-[#132d41]">— Elena, Santa Fe</strong>
        </article>
      </div>
    </div>
  </section>

  <!-- Locations -->
  <section class="py-20">
    <div class="mx-auto grid max-w-7xl gap-8 px-4 lg:grid-cols-[0.95fr_1.05fr] lg:items-center">
      <div class="ajs-reveal-left">
        <p class="mb-3 text-xs font-black uppercase tracking-[0.18em] text-[#d04418]">
          Proudly Serving New Mexico Communities
        </p>
        <h2 class="max-w-[14ch] text-3xl font-black leading-tight tracking-[-0.03em] text-[#132d41] md:text-5xl">
          Local service with clear communication and reliable execution.
        </h2>

        <ul class="mt-6 grid gap-3 text-base font-bold text-[#42474b]">
          <li>Albuquerque</li>
          <li>Santa Fe</li>
          <li>Rio Rancho</li>
          <li>Surrounding New Mexico Areas</li>
        </ul>
      </div>

      <div class="ajs-hover-lift ajs-reveal-right rounded-[24px] border border-[#d3d8db] bg-[linear-gradient(180deg,#ffffff_0%,#f5f9fc_100%)] p-4 shadow-[0_14px_32px_rgba(19,45,65,0.07)]">
        <div class="flex min-h-[280px] items-center justify-center rounded-[20px] border border-dashed border-[#6eaace]/40 bg-[#6eaace]/8 px-6 text-center text-[#42474b]/70">
          Office address and embedded map go here
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="py-20">
    <div class="mx-auto max-w-7xl px-4">
      <p class="ajs-reveal mb-3 text-xs font-black uppercase tracking-[0.18em] text-[#d04418]">
        FAQ
      </p>
      <h2 class="ajs-reveal max-w-4xl text-3xl font-black leading-tight tracking-[-0.03em] text-[#132d41] md:text-5xl">
        Answers that make the process easier to understand.
      </h2>

      <div class="mt-8 grid gap-4">
        <?php
        $faqs = [
          [
            'q' => 'How do I know if I need a repair or a full roof replacement?',
            'a' => 'We start with an inspection and show you exactly what we found. If a repair is enough, we’ll say so. If replacement makes more sense, we’ll explain why in clear language.'
          ],
          [
            'q' => 'Do you help with storm damage and insurance claims?',
            'a' => 'Yes. We document damage with photos and help organize the information needed to make the insurance process easier to understand.'
          ],
          [
            'q' => 'Do you install seamless gutters?',
            'a' => 'Yes. AJS offers seamless gutter systems fabricated for precise drainage and long-term protection.'
          ],
          [
            'q' => 'How long does the process usually take?',
            'a' => 'That depends on the scope, but every project follows the same clear process: inspect, plan, protect, build, and verify.'
          ],
          [
            'q' => 'Do you serve only Albuquerque?',
            'a' => 'No. AJS also serves Santa Fe, Rio Rancho, and surrounding New Mexico communities.'
          ],
        ];

        foreach ($faqs as $faq) : ?>
          <details class="ajs-reveal rounded-[20px] border border-[#d3d8db] bg-white px-5 py-4">
            <summary class="cursor-pointer text-base font-black text-[#132d41]">
              <?php echo esc_html($faq['q']); ?>
            </summary>
            <p class="mt-4 text-[15px] leading-8 text-[#42474b]">
              <?php echo esc_html($faq['a']); ?>
            </p>
          </details>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Closing CTA -->
  <section id="closing-cta" class="ajs-home-sticky-offset bg-[linear-gradient(180deg,#132d41_0%,#1c425f_100%)] py-20 text-white">
    <div class="mx-auto grid max-w-7xl gap-10 px-4 lg:grid-cols-[1.05fr_0.95fr] lg:items-center">
      <div class="ajs-reveal-left">
        <p class="mb-3 text-xs font-black uppercase tracking-[0.18em] text-[#6eaace]">
          Bring Order Above.
        </p>
        <h2 class="max-w-[14ch] text-3xl font-black leading-tight tracking-[-0.03em] md:text-5xl">
          When Everything Is Right Above, Calm Returns Home.
        </h2>

        <p class="mt-5 max-w-2xl text-base leading-8 text-white/82">
          Schedule your free inspection. We’ll show you exactly what your roof needs —
          and exactly what it doesn’t. No pressure. No surprises. Just a clear path
          from uncertainty to protection.
        </p>

        <a href="tel:+15050000000"
           class="mt-6 inline-flex items-center gap-2 text-base font-extrabold text-white">
          <span class="text-white/65">Call Now:</span>
          <span>(505) 000-0000</span>
        </a>

        <p class="mt-4 text-sm text-white/65">
          Response within 24 hours. Detailed photo report included.
        </p>
      </div>

      <div class="ajs-reveal-right rounded-[28px] border border-white/10 bg-white p-5 text-[#42474b] shadow-[0_18px_40px_rgba(19,45,65,0.2)]">
        <h2 class="text-2xl font-black tracking-[-0.03em] text-[#132d41]">
          Request your free inspection.
        </h2>

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

          <button type="submit"
                  class="ajs-btn-animate inline-flex items-center justify-center rounded-full bg-[linear-gradient(135deg,#d04418,#b63c15)] px-6 py-4 text-sm font-black text-white shadow-[0_16px_32px_rgba(208,68,24,0.28)] transition">
            Get Your Free Inspection
          </button>
        </form>
      </div>
    </div>
  </section>
</main>

<style>
  .ajs-ticker {
    overflow: hidden;
    width: 100%;
  }

  .ajs-ticker-track {
    display: flex;
    width: max-content;
    gap: 2.5rem;
    white-space: nowrap;
    padding: 1rem 0;
    font-size: 0.95rem;
    font-weight: 800;
    color: #132d41;
    animation: ajsTickerMove 26s linear infinite;
  }

  .ajs-ticker-track span {
    position: relative;
    padding-left: 1.25rem;
  }

  .ajs-ticker-track span::before {
    content: "•";
    position: absolute;
    left: 0;
    color: #d04418;
  }

  @keyframes ajsTickerMove {
    from { transform: translateX(0); }
    to { transform: translateX(-50%); }
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

  .ajs-reveal-left {
    opacity: 0;
    transform: translateX(-40px);
    transition: opacity .8s ease, transform .8s ease;
  }

  .ajs-reveal-left.is-visible {
    opacity: 1;
    transform: translateX(0);
  }

  .ajs-reveal-right {
    opacity: 0;
    transform: translateX(40px);
    transition: opacity .8s ease, transform .8s ease;
  }

  .ajs-reveal-right.is-visible {
    opacity: 1;
    transform: translateX(0);
  }

  .ajs-hover-lift {
    transition: transform .25s ease, box-shadow .25s ease;
  }

  .ajs-hover-lift:hover {
    transform: translateY(-6px);
    box-shadow: 0 20px 40px rgba(19, 45, 65, 0.14);
  }

  .ajs-btn-animate {
    transition: transform .2s ease, box-shadow .2s ease, filter .2s ease;
  }

  .ajs-btn-animate:hover {
    transform: translateY(-2px);
    filter: saturate(1.04);
  }

  .ajs-btn-animate:active {
    transform: translateY(0);
  }

  .ajs-home-sticky-offset {
    scroll-margin-top: 120px;
  }

  @media (prefers-reduced-motion: reduce) {
    .ajs-ticker-track,
    .ajs-reveal,
    .ajs-reveal-left,
    .ajs-reveal-right,
    .ajs-hover-lift,
    .ajs-btn-animate {
      animation: none !important;
      transition: none !important;
      transform: none !important;
      opacity: 1 !important;
    }
  }
</style>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const items = document.querySelectorAll(".ajs-reveal, .ajs-reveal-left, .ajs-reveal-right");

    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("is-visible");
        }
      });
    }, { threshold: 0.12 });

    items.forEach((item) => observer.observe(item));
  });
</script>

<?php get_footer(); ?>