<?php
/**
 * Template Name: Contact Template
 *
 * Contact page for AJS Roofing & Gutters
 */

get_header(); ?>

<main class="bg-white text-slate-900">

<!-- Hero -->
<section class="relative overflow-hidden bg-[linear-gradient(180deg,#102946_0%,#16355c_100%)] text-white">
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(211,161,53,0.18),transparent_30%)]"></div>

  <div class="relative mx-auto max-w-7xl px-4 py-16 md:py-20">
    <div class="grid gap-10 lg:grid-cols-[1.1fr_0.9fr] lg:items-center">

      <div class="ajs-reveal-left">
        <p class="mb-3 text-xs font-black uppercase tracking-[0.18em] text-[#d3a135]">
          Contact AJS Roofing
        </p>

        <h1 class="max-w-[12ch] text-4xl font-black leading-[0.95] tracking-[-0.04em] md:text-6xl">
          Let’s Bring Calm Back To Your Roof.
        </h1>

        <p class="mt-6 max-w-xl text-base leading-8 text-white/85 md:text-lg">
          Have questions about your roof, gutters, or storm damage?
          Our team is ready to help you understand your options and
          guide you through the next steps with clarity.
        </p>

        <div class="mt-8 flex flex-wrap gap-4">
          <a href="tel:+15050000000"
             class="ajs-btn-animate inline-flex items-center justify-center rounded-full bg-[linear-gradient(135deg,#d3a135,#b7841a)] px-6 py-4 text-sm font-black text-slate-900 shadow-[0_16px_32px_rgba(211,161,53,0.25)]">
            Call (505) 000-0000
          </a>

          <a href="/estimate"
             class="ajs-btn-animate inline-flex items-center justify-center rounded-full border border-white/20 bg-white/10 px-6 py-4 text-sm font-black text-white backdrop-blur-sm">
            Request Free Inspection
          </a>
        </div>
      </div>

      <div class="ajs-reveal-right rounded-[28px] border border-white/10 bg-white/10 p-6 backdrop-blur-sm shadow-2xl">
        <p class="text-xs font-black uppercase tracking-[0.18em] text-[#d3a135]">
          Quick Contact
        </p>

        <div class="mt-4 space-y-4 text-sm">

          <div class="flex items-start gap-3">
            <span class="text-[#d3a135] font-black">Phone</span>
            <span>(505) 000-0000</span>
          </div>

          <div class="flex items-start gap-3">
            <span class="text-[#d3a135] font-black">Email</span>
            <span>info@ajsroofing.com</span>
          </div>

          <div class="flex items-start gap-3">
            <span class="text-[#d3a135] font-black">Hours</span>
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
      <div class="ajs-reveal-left rounded-[28px] border border-slate-200 bg-white p-7 shadow-[0_18px_40px_rgba(16,41,70,0.08)]">

        <p class="mb-3 text-xs font-black uppercase tracking-[0.18em] text-[#b7841a]">
          Send Us A Message
        </p>

        <h2 class="text-3xl font-black tracking-[-0.03em] text-[#102946]">
          Tell us what you need.
        </h2>

        <form class="mt-6 grid gap-4">

          <input type="text"
                 placeholder="Full Name *"
                 class="w-full rounded-2xl border border-slate-300 px-4 py-4 text-sm outline-none focus:border-[#245791] focus:ring-4 focus:ring-[#245791]/10">

          <input type="tel"
                 placeholder="Phone Number *"
                 class="w-full rounded-2xl border border-slate-300 px-4 py-4 text-sm outline-none focus:border-[#245791] focus:ring-4 focus:ring-[#245791]/10">

          <input type="email"
                 placeholder="Email Address *"
                 class="w-full rounded-2xl border border-slate-300 px-4 py-4 text-sm outline-none focus:border-[#245791] focus:ring-4 focus:ring-[#245791]/10">

          <textarea rows="4"
                    placeholder="How can we help?"
                    class="w-full resize-y rounded-2xl border border-slate-300 px-4 py-4 text-sm outline-none focus:border-[#245791] focus:ring-4 focus:ring-[#245791]/10"></textarea>

          <button type="submit"
                  class="ajs-btn-animate inline-flex items-center justify-center rounded-full bg-[linear-gradient(135deg,#d3a135,#b7841a)] px-6 py-4 text-sm font-black text-slate-900 shadow-[0_16px_32px_rgba(211,161,53,0.24)]">
            Send Message
          </button>

        </form>

      </div>

      <!-- Address / Map -->
      <div class="ajs-reveal-right space-y-6">

        <div class="rounded-[28px] border border-slate-200 bg-white p-7 shadow-[0_18px_40px_rgba(16,41,70,0.08)]">

          <p class="text-xs font-black uppercase tracking-[0.18em] text-[#b7841a]">
            Office Location
          </p>

          <h3 class="mt-2 text-2xl font-black text-[#102946]">
            Visit Our Office
          </h3>

          <p class="mt-4 text-slate-600 leading-8">
            123 Example Street<br>
            Albuquerque, NM 87101
          </p>

          <p class="mt-4 text-sm text-slate-500">
            Serving Albuquerque, Santa Fe, Rio Rancho, and surrounding areas.
          </p>

        </div>

        <div class="overflow-hidden rounded-[28px] border border-slate-200 shadow-[0_18px_40px_rgba(16,41,70,0.08)]">

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

.ajs-reveal-left,
.ajs-reveal-right {
  opacity:0;
  transform:translateY(40px);
  transition:all .8s ease;
}

.ajs-reveal-left.is-visible,
.ajs-reveal-right.is-visible{
  opacity:1;
  transform:translateY(0);
}

.ajs-reveal-left{transform:translateX(-40px)}
.ajs-reveal-right{transform:translateX(40px)}

.ajs-btn-animate{
transition:transform .2s ease, box-shadow .2s ease;
}

.ajs-btn-animate:hover{
transform:translateY(-2px);
box-shadow:0 20px 40px rgba(0,0,0,.15);
}

</style>

<script>

document.addEventListener("DOMContentLoaded",function(){

const items=document.querySelectorAll(".ajs-reveal-left,.ajs-reveal-right")

const observer=new IntersectionObserver(entries=>{
entries.forEach(entry=>{
if(entry.isIntersecting){
entry.target.classList.add("is-visible")
}
})
},{threshold:0.2})

items.forEach(item=>observer.observe(item))

})

</script>

<?php get_footer(); ?>