/* ═══════════════════════════════════════════════════════
   app.js — Wedding Invitation Logic
   Countdown · Scroll Reveal · RSVP
   ═══════════════════════════════════════════════════════ */

/* ── Countdown Timer ──────────────────────────────────── */
(function initCountdown() {
  const weddingDate = new Date('2026-09-15T17:00:00');

  const elDays  = document.getElementById('cd-days');
  const elHours = document.getElementById('cd-hours');
  const elMins  = document.getElementById('cd-mins');
  const elSecs  = document.getElementById('cd-secs');

  function pad(n) { return String(n).padStart(2, '0'); }

  function setVal(el, val) {
    if (!el) return;
    const str = pad(val);
    if (el.textContent !== str) {
      el.classList.remove('flip');
      void el.offsetWidth; // reflow
      el.classList.add('flip');
      el.textContent = str;
    }
  }

  function tick() {
    const now  = new Date();
    const diff = weddingDate - now;

    if (diff <= 0) {
      if (elDays)  elDays.textContent  = '00';
      if (elHours) elHours.textContent = '00';
      if (elMins)  elMins.textContent  = '00';
      if (elSecs)  elSecs.textContent  = '00';
      return;
    }

    const days  = Math.floor(diff / 864e5);
    const hours = Math.floor((diff % 864e5) / 36e5);
    const mins  = Math.floor((diff % 36e5)  / 6e4);
    const secs  = Math.floor((diff % 6e4)   / 1e3);

    setVal(elDays,  days);
    setVal(elHours, hours);
    setVal(elMins,  mins);
    setVal(elSecs,  secs);
  }

  tick();
  setInterval(tick, 1000);
})();

/* ── Scroll Reveal ────────────────────────────────────── */
(function initReveal() {
  const targets = document.querySelectorAll(
    '.greeting, .calendar-section, .location, .programme,' +
    '.countdown, .dresscode, .contacts, .rsvp, .footer,' +
    '.date-block, .calendar, .programme__item, .dresscode__swatch'
  );

  targets.forEach(el => el.classList.add('reveal'));

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          observer.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.12 }
  );

  targets.forEach(el => observer.observe(el));
})();

/* ── RSVP Form ────────────────────────────────────────── */
function handleRsvp(e) {
  e.preventDefault();
  const form    = document.getElementById('rsvp-form');
  const success = document.getElementById('rsvp-success');

  // simple shake animation on btn then show success
  const btn = document.getElementById('rsvp-submit');
  btn.style.transform = 'scale(.95)';
  setTimeout(() => { btn.style.transform = ''; }, 150);

  setTimeout(() => {
    form.style.display    = 'none';
    success.style.display = 'block';
  }, 300);
}

/* ── Parallax Hero (subtle) ───────────────────────────── */
(function initParallax() {
  const hero = document.querySelector('.hero');
  if (!hero) return;

  window.addEventListener('scroll', () => {
    const y = window.scrollY;
    hero.style.backgroundPositionY = `calc(50% + ${y * 0.35}px)`;
  }, { passive: true });
})();

/* ── Dress-code swatch entrance stagger ──────────────── */
(function staggerSwatches() {
  const swatches = document.querySelectorAll('.dresscode__swatch');
  swatches.forEach((s, i) => {
    s.style.transitionDelay = `${i * 0.08}s`;
  });
})();
