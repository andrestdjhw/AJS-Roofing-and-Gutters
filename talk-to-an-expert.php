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

        <div id="scheduler" class="mt-5 overflow-hidden rounded-[24px] border border-[#d3d8db] bg-[#f5f9fc] p-3">
          <!-- Calendario real -->
          <div class="bg-white rounded-[18px] p-4 shadow-sm">
            <!-- Header del calendario -->
            <div class="flex items-center justify-between mb-4">
              <button id="prevMonth" class="text-[#6eaace] hover:text-[#132d41] text-2xl leading-none">&lt;</button>
              <div id="monthYear" class="font-bold text-[#132d41] text-lg"></div>
              <button id="nextMonth" class="text-[#6eaace] hover:text-[#132d41] text-2xl leading-none">&gt;</button>
            </div>

            <!-- Días de la semana -->
            <div class="grid grid-cols-7 gap-1 text-center text-xs font-medium text-[#42474b]/70 mb-2">
              <div>S</div><div>M</div><div>T</div><div>W</div><div>T</div><div>F</div><div>S</div>
            </div>

            <!-- Días del calendario -->
            <div id="calendarGrid" class="grid grid-cols-7 gap-1 text-center"></div>

            <!-- Horarios disponibles (se muestra después de elegir fecha) -->
            <div id="timeSlotsSection" class="hidden mt-6">
              <p class="text-sm font-semibold text-[#132d41] mb-3">Available times on <span id="selectedDateDisplay" class="text-[#6eaace]"></span></p>
              <div id="timeSlots" class="grid grid-cols-2 gap-2"></div>
            </div>

            <!-- Botón de programar -->
            <div id="confirmSection" class="hidden mt-6">
              <button id="scheduleBtn"
                      class="w-full bg-[#132d41] hover:bg-[#1f4661] text-white font-bold py-4 rounded-2xl transition-all active:scale-[0.98]">
                Programar la llamada
              </button>
              <p id="confirmationMessage" class="hidden mt-4 text-center text-green-600 font-medium"></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

<style>
  /* Estilos del calendario */
  .calendar-day {
    aspect-ratio: 1/1;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 9999px;
    font-size: 0.95rem;
    cursor: pointer;
    transition: all 0.2s;
  }
  .calendar-day:hover {
    background-color: #e0f0ff;
  }
  .calendar-day.today {
    background-color: #6eaace;
    color: white;
    font-weight: bold;
  }
  .calendar-day.selected {
    background-color: #132d41;
    color: white;
  }
  .calendar-day.disabled {
    color: #ccc;
    cursor: not-allowed;
  }
  .calendar-day.other-month {
    color: #aaa;
  }

  .time-slot {
    padding: 12px 16px;
    border: 2px solid #d3d8db;
    border-radius: 12px;
    text-align: center;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.2s;
  }
  .time-slot:hover {
    border-color: #6eaace;
    background-color: #f0f7ff;
  }
  .time-slot.selected {
    background-color: #132d41;
    color: white;
    border-color: #132d41;
  }
</style>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    // Animaciones existentes
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

    // === LÓGICA DEL CALENDARIO ===
    let currentDate = new Date();
    let selectedDate = null;
    let selectedTime = null;

    const monthYearEl = document.getElementById("monthYear");
    const calendarGrid = document.getElementById("calendarGrid");
    const timeSlotsSection = document.getElementById("timeSlotsSection");
    const timeSlotsEl = document.getElementById("timeSlots");
    const selectedDateDisplay = document.getElementById("selectedDateDisplay");
    const confirmSection = document.getElementById("confirmSection");
    const scheduleBtn = document.getElementById("scheduleBtn");
    const confirmationMessage = document.getElementById("confirmationMessage");

    // Horarios de ejemplo (puedes cambiarlos)
    const availableTimes = ["09:00", "10:00", "11:00", "14:00", "15:00", "16:00"];

    function renderCalendar() {
      calendarGrid.innerHTML = "";
      const year = currentDate.getFullYear();
      const month = currentDate.getMonth();

      monthYearEl.textContent = currentDate.toLocaleString('default', { month: 'long', year: 'numeric' });

      const firstDay = new Date(year, month, 1).getDay();
      const daysInMonth = new Date(year, month + 1, 0).getDate();
      const today = new Date();
      today.setHours(0,0,0,0);

      // Días del mes anterior
      const prevMonthDays = new Date(year, month, 0).getDate();
      for (let i = firstDay - 1; i >= 0; i--) {
        const dayEl = document.createElement("div");
        dayEl.className = "calendar-day other-month";
        dayEl.textContent = prevMonthDays - i;
        calendarGrid.appendChild(dayEl);
      }

      // Días del mes actual
      for (let day = 1; day <= daysInMonth; day++) {
        const date = new Date(year, month, day);
        const dayEl = document.createElement("div");
        dayEl.className = "calendar-day";
        dayEl.textContent = day;

        if (date.getTime() === today.getTime()) {
          dayEl.classList.add("today");
        }

        if (date < today) {
          dayEl.classList.add("disabled");
        } else {
          dayEl.addEventListener("click", () => selectDate(date, dayEl));
        }

        if (selectedDate && date.getTime() === selectedDate.getTime()) {
          dayEl.classList.add("selected");
        }

        calendarGrid.appendChild(dayEl);
      }

      // Días del siguiente mes
      const remainingCells = 42 - (firstDay + daysInMonth);
      for (let day = 1; day <= remainingCells; day++) {
        const dayEl = document.createElement("div");
        dayEl.className = "calendar-day other-month";
        dayEl.textContent = day;
        calendarGrid.appendChild(dayEl);
      }
    }

    function selectDate(date, element) {
      // Quitar selección anterior
      document.querySelectorAll(".calendar-day").forEach(el => el.classList.remove("selected"));
      element.classList.add("selected");

      selectedDate = date;
      selectedTime = null;

      // Mostrar fecha seleccionada y horarios
      const options = { weekday: 'long', month: 'long', day: 'numeric' };
      selectedDateDisplay.textContent = date.toLocaleDateString('en-US', options);

      timeSlotsSection.classList.remove("hidden");
      confirmSection.classList.add("hidden");

      renderTimeSlots();
    }

    function renderTimeSlots() {
      timeSlotsEl.innerHTML = "";
      availableTimes.forEach(time => {
        const slot = document.createElement("div");
        slot.className = "time-slot";
        slot.textContent = time;
        slot.addEventListener("click", () => {
          document.querySelectorAll(".time-slot").forEach(s => s.classList.remove("selected"));
          slot.classList.add("selected");
          selectedTime = time;

          confirmSection.classList.remove("hidden");
        });
        timeSlotsEl.appendChild(slot);
      });
    }

    // Navegación de meses
    document.getElementById("prevMonth").addEventListener("click", () => {
      currentDate.setMonth(currentDate.getMonth() - 1);
      renderCalendar();
    });

    document.getElementById("nextMonth").addEventListener("click", () => {
      currentDate.setMonth(currentDate.getMonth() + 1);
      renderCalendar();
    });

    // Botón de programar llamada
    scheduleBtn.addEventListener("click", () => {
      if (selectedDate && selectedTime) {
        const formattedDate = selectedDate.toLocaleDateString('en-US', { 
          weekday: 'long', month: 'long', day: 'numeric', year: 'numeric' 
        });
        
        confirmationMessage.textContent = `✅ Call scheduled for ${formattedDate} at ${selectedTime}`;
        confirmationMessage.classList.remove("hidden");
        scheduleBtn.style.opacity = "0.6";
        scheduleBtn.textContent = "Scheduled!";

        // Aquí puedes agregar fetch a tu backend o redirigir
        console.log(`Llamada programada: ${formattedDate} - ${selectedTime}`);
      }
    });

    // Inicializar
    renderCalendar();
  });
</script>

<?php get_footer(); ?>