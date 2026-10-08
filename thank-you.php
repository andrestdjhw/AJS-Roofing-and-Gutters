<?php
/**
 * Thank-you page shown after a form submits successfully.
 * Routed in functions.php (ajs_thank_you_template); copy comes from ajs_thank_you_pages().
 */

$thank_you = ajs_current_thank_you();

get_header(); ?>

<main class="bg-white text-[#42474b]">

<!-- Confirmation -->
<section class="relative overflow-hidden bg-[#132d41] text-white">
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_left,rgba(110,170,206,0.22),transparent_35%)]"></div>
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_right,rgba(208,68,24,0.2),transparent_30%)]"></div>

  <div class="relative mx-auto max-w-3xl px-4 py-20 text-center md:py-28">
    <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-full bg-[#d04418] shadow-[0_18px_36px_rgba(208,68,24,0.35)]">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
        <path d="M5 12.5l4.5 4.5L19 7.5"/>
      </svg>
    </div>

    <p class="mt-8 text-xs font-black uppercase tracking-[0.18em] text-[#f08a63]">
      Thank You
    </p>

    <h1 class="mt-3 text-4xl font-black leading-[0.95] tracking-[-0.04em] md:text-6xl">
      <?php echo esc_html($thank_you['heading']); ?>
    </h1>

    <p class="mx-auto mt-6 max-w-xl text-base leading-8 text-white/80 md:text-lg">
      <?php echo esc_html($thank_you['copy']); ?>
    </p>

    <div class="mt-9 flex flex-wrap justify-center gap-3">
      <a href="tel:+15054535626"
         class="inline-flex items-center justify-center rounded-full bg-[#d04418] px-6 py-4 text-sm font-black text-white shadow-[0_18px_36px_rgba(208,68,24,0.28)] transition hover:-translate-y-0.5">
        Need it sooner? Call (505) 453-5626
      </a>

      <a href="/"
         class="inline-flex items-center justify-center rounded-full border border-white/40 bg-white/10 px-6 py-4 text-sm font-black text-white backdrop-blur-sm transition hover:border-white hover:bg-white hover:text-[#132d41]">
        Back to Home
      </a>
    </div>
  </div>
</section>

<!-- What happens next -->
<section class="bg-[#d3d8db]/20 py-16 md:py-20">
  <div class="mx-auto max-w-7xl px-4">
    <p class="mb-3 text-xs font-black uppercase tracking-[0.18em] text-[#d04418]">
      What Happens Next
    </p>
    <h2 class="max-w-3xl text-3xl font-black leading-tight tracking-[-0.03em] text-[#132d41] md:text-4xl">
      A clear process from the first call.
    </h2>

    <div class="mt-8 grid gap-5 md:grid-cols-3">
      <?php
      $steps = [
        [
          'title' => 'We review your request',
          'copy'  => 'Our team looks over the details you shared so we arrive prepared.',
        ],
        [
          'title' => 'We reach out within 24 hours',
          'copy'  => 'Expect a call or email to confirm a time that works for you.',
        ],
        [
          'title' => 'You get a clear answer',
          'copy'  => 'A photo-documented report and honest recommendation. No pressure.',
        ],
      ];

      foreach ($steps as $index => $step) : ?>
        <div class="rounded-[24px] border border-[#d3d8db] bg-white p-6 shadow-[0_14px_32px_rgba(19,45,65,0.07)]">
          <span class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-[#132d41] text-sm font-black text-white">
            <?php echo esc_html($index + 1); ?>
          </span>
          <h3 class="mt-5 text-xl font-black tracking-[-0.02em] text-[#132d41]">
            <?php echo esc_html($step['title']); ?>
          </h3>
          <p class="mt-3 text-[15px] leading-7 text-[#42474b]">
            <?php echo esc_html($step['copy']); ?>
          </p>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="mt-10 flex flex-wrap gap-3">
      <a href="/services"
         class="inline-flex items-center justify-center rounded-full border border-[#d3d8db] bg-white px-6 py-4 text-sm font-black text-[#132d41] shadow-sm transition hover:border-[#6eaace]/40 hover:bg-[#f8fbfd]">
        Explore Our Services
      </a>
      <a href="/projects"
         class="inline-flex items-center justify-center rounded-full border border-[#d3d8db] bg-white px-6 py-4 text-sm font-black text-[#132d41] shadow-sm transition hover:border-[#6eaace]/40 hover:bg-[#f8fbfd]">
        See Recent Projects
      </a>
    </div>
  </div>
</section>

</main>

<?php get_footer(); ?>
