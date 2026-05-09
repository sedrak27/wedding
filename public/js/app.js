/* ═══════════════════════════════════════════════════════
   app.js — Wedding Invitation Logic
   Countdown · Scroll Reveal · RSVP
   ═══════════════════════════════════════════════════════ */

/* ── Countdown Timer ──────────────────────────────────── */
(function initCountdown() {
  const weddingDate = new Date('2026-06-20T15:00:00');

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
function handleRsvp(event) {
  event.preventDefault();
  
  const submitBtn = document.getElementById('rsvp-submit');
  submitBtn.disabled = true;
  submitBtn.textContent = 'Ուղարկվում է...';

  const data = {
    name: document.getElementById('rsvp-name').value,
    attend: document.querySelector('input[name="attend"]:checked')?.value,
    guest_count: document.getElementById('rsvp-count').value,
    invited_by: document.querySelector('input[name="invited_by"]:checked')?.value
  };

  // Clear previous errors
  document.querySelectorAll('.rsvp__error').forEach(el => el.textContent = '');

  fetch('/rsvp', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
      'Accept': 'application/json',
      'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
    },
    body: JSON.stringify(data)
  })
  .then(async response => {
    let result;
    const contentType = response.headers.get("content-type");
    if (contentType && contentType.indexOf("application/json") !== -1) {
      result = await response.json();
    }

    if (response.status === 422 && result && result.errors) {
      // Clear previous errors again just in case
      document.querySelectorAll('.rsvp__error').forEach(el => el.textContent = '');
      
      // Show errors under specific fields
      Object.keys(result.errors).forEach(field => {
        const errorEl = document.getElementById(`err-${field}`);
        if (errorEl) {
          errorEl.textContent = result.errors[field][0];
          errorEl.style.display = 'block';
        }
      });
      
      // Scroll to the first error
      const firstError = document.querySelector('.rsvp__error:not(:empty)');
      if (firstError) {
        firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
      }
      throw new Error('Validation failed');
    }

    if (!response.ok) {
      if (response.status === 419) {
        throw new Error('Սեսիան ավարտվել է: Խնդրում ենք թարմացնել էջը:');
      }
      const errorMsg = result && result.message ? result.message : 'Server error';
      throw new Error(errorMsg);
    }
    
    return result;
  })
  .then(result => {
    document.getElementById('rsvp-form').style.display = 'none';
    document.getElementById('rsvp-success').style.display = 'block';
  })
  .catch(error => {
    console.error('Error:', error);
    submitBtn.disabled = false;
    submitBtn.textContent = 'Ուղարկել';
    
    if (error.message !== 'Validation failed') {
      // If it's a real error, show the message from server if available
      alert('Տեղի է ունեցել սխալ: ' + error.message);
    }
  });
}

/* ── Parallax Hero (subtle) ───────────────────────────── */
(function initParallax() {
  const hero = document.querySelector('.hero');
  if (!hero) return;

  window.addEventListener('scroll', () => {
    const y = window.scrollY;
    hero.style.backgroundPositionY = `calc(0% + ${y * 0.2}px)`;
  }, { passive: true });
})();

/* ── Location Sliders ────────────────────────────────── */
(function initSliders() {
  const sliders = document.querySelectorAll('.location-slider');
  
  sliders.forEach(slider => {
    const images = slider.querySelectorAll('.slider-img');
    let currentIndex = 0;

    setInterval(() => {
      images[currentIndex].classList.remove('active');
      currentIndex = (currentIndex + 1) % images.length;
      images[currentIndex].classList.add('active');
    }, 3000); // Change image every 3 seconds
  });
})();

/* ── Dress-code swatch entrance stagger ──────────────── */
(function staggerSwatches() {
  const swatches = document.querySelectorAll('.dresscode__swatch');
  swatches.forEach((s, i) => {
    s.style.transitionDelay = `${i * 0.08}s`;
  });
})();

/* ── RSVP Guest Count Toggle ─────────────────────────── */
(function initRsvpToggle() {
  const attendRadios = document.querySelectorAll('input[name="attend"]');
  const wrapper = document.getElementById('guest-count-wrapper');
  const countInput = document.getElementById('rsvp-count');
  
  if (!wrapper) return;

  function toggle() {
    const isAttending = document.querySelector('input[name="attend"]:checked')?.value === 'yes';
    if (isAttending) {
      wrapper.style.display = 'block';
    } else {
      wrapper.style.display = 'none';
      countInput.value = ''; // clear if not attending
    }
  }

  attendRadios.forEach(r => r.addEventListener('change', toggle));
  toggle(); // initial state
})();
