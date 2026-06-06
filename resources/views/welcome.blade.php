<!DOCTYPE html>
<html lang="hy">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Հարսանեկան Հրավեր | Սեդրակ & Գոհար</title>
  <meta name="description" content="Սեդրակի և Գոհարի հարսանեկան հրավիրատոմս — 20 Հունիսի 2026" />
  <meta property="og:title" content="Հարսանեկան Հրավեր | Սեդրակ & Գոհար" />
  <meta property="og:description" content="Սեդրակի և Գոհարի հարսանեկան հրավիրատոմս" />
  <meta property="og:image" content="{{ asset('images/couple/IMG_8365.webp') }}" />
  <meta property="og:type" content="website" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;1,300;1,400&family=Great+Vibes&family=Montserrat:wght@300;400;500&family=Noto+Serif+Armenian:wght@200;300;400&family=Playfair+Display:ital@0;1&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}?v={{ time() + 50 }}" />
  <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>🧡</text></svg>">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script src="https://unpkg.com/@phosphor-icons/web@2.1.1"></script>
  <style>
    /* ── ORANGE BLOCK ─────────────────────────────────── */
    .orange-block {
      background: #ff8d21;
      color: #fff4df;
      width: 100%;
      padding: 60px 24px;
    }
    .orange-block .section-inner { max-width: 440px; margin: 0 auto; text-align: center; }

    /* Date row */
    .date-row {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 16px;
      margin: 30px 0;
    }
    .date-row__line { flex: 1; height: 1px; background: rgba(255,244,223,0.45); }
    .date-row__label { font-family: var(--ff-serif); letter-spacing: 4px; font-size: 0.78rem; text-transform: uppercase; color: #fff4df; }
    .date-big {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 18px;
      font-family: var(--ff-serif);
      font-size: 0.9rem;
      letter-spacing: 3px;
      text-transform: uppercase;
      color: #fff4df;
    }
    .date-big__num {
      font-size: 4rem;
      font-family: var(--ff-script);
      line-height: 1;
      letter-spacing: 0;
      text-transform: none;
    }

    /* Countdown inline */
    .countdown-inline { margin: 40px 0; }
    .countdown-inline__label {
      font-family: var(--ff-serif);
      letter-spacing: 4px;
      font-size: 0.78rem;
      text-transform: uppercase;
      color: #fff4df;
      margin-bottom: 16px;
    }
    .countdown-inline__digits {
      display: flex;
      justify-content: center;
      align-items: flex-start;
      gap: 8px;
      font-family: var(--ff-serif);
      font-size: 2.8rem;
      line-height: 1;
      color: #fff4df;
    }
    .countdown-inline__unit { display: flex; flex-direction: column; align-items: center; }
    .countdown-inline__sublabel {
      font-size: 0.6rem;
      font-family: var(--ff-sans);
      letter-spacing: 1px;
      text-transform: lowercase;
      color: rgba(255,244,223,0.65);
      margin-top: 6px;
    }
    .countdown-inline__sep { color: rgba(255,244,223,0.5); margin-top: 4px; }

    /* Calendar inside orange block */
    .cal-orange { margin-top: 40px; }
    .cal-orange__head {
      font-family: var(--ff-serif);
      letter-spacing: 3px;
      font-size: 0.78rem;
      text-transform: uppercase;
      color: rgba(255,244,223,0.75);
      margin-bottom: 4px;
    }
    .cal-orange__subhead {
      font-family: var(--ff-serif);
      letter-spacing: 2px;
      font-size: 0.7rem;
      text-transform: uppercase;
      color: rgba(255,244,223,0.5);
      margin-bottom: 20px;
    }
    .cal-orange .calendar {
      background: transparent !important;
      box-shadow: none !important;
      padding: 0 !important;
      color: #fff4df !important;
    }
    .cal-orange .cal-header span { color: rgba(255,244,223,0.65) !important; }
    .cal-orange .cal-grid span { color: rgba(255,244,223,0.7) !important; }
    .cal-orange .cal-grid span.cal-day--active,
    .cal-orange .cal-grid .cal-day--active {
      background: #ffffff !important;
      color: #e06600 !important;
      -webkit-text-fill-color: #e06600 !important;
      font-weight: 900 !important;
      box-shadow: 0 2px 12px rgba(0,0,0,0.25) !important;
    }

    /* Location section */
    .location-clean { padding: 60px 24px; text-align: center; background: #fff4df; }
    .location-clean .section-inner { max-width: 440px; margin: 0 auto; }
    .location-clean__icon { font-size: 2.2rem; color: #ff8d21; margin-bottom: 10px; }
    .location-clean__title {
      font-family: var(--ff-script);
      font-size: 2.4rem;
      color: #ff8d21;
      margin-bottom: 12px;
    }
    .location-clean__time {
      font-family: var(--ff-serif);
      font-size: 1.05rem;
      letter-spacing: 1px;
      color: #2E2E2E;
      margin-bottom: 4px;
    }
    .location-clean__venue {
      font-family: var(--ff-serif);
      font-size: 0.85rem;
      letter-spacing: 3px;
      text-transform: uppercase;
      color: #6b5a45;
      margin-bottom: 24px;
    }
    .location-clean__btn {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      border: 1px solid #ff8d21;
      padding: 10px 28px;
      font-family: var(--ff-sans);
      font-size: 0.75rem;
      letter-spacing: 2px;
      text-transform: uppercase;
      color: #ff8d21;
      border-radius: 25px;
      transition: background 0.2s, color 0.2s;
    }
    .location-clean__btn:hover { background: #ff8d21; border-color: #ff8d21; color: #fff4df; }
    .location-clean__divider { width: 1px; height: 50px; background: rgba(255,141,33,0.3); margin: 50px auto; }

    /* Photo divider */
    .photo-divider {
      width: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      overflow: hidden;
    }
    .photo-divider img {
      width: 100%;
      max-width: 100%;
      height: auto;
      max-height: 90vh;
      object-fit: contain;
      display: block;
    }

    /* Orange RSVP block */
    .rsvp-orange { background: #ff8d21; padding: 60px 24px; }
    .rsvp-orange .section-inner { max-width: 440px; margin: 0 auto; text-align: center; }
    .rsvp-orange .rsvp__card { background: transparent; box-shadow: none; padding: 0; border: none; }
    .rsvp-orange .rsvp__label { color: #fff4df; }
    .rsvp-orange .rsvp__input-line { color: #fff4df; border-bottom-color: rgba(255,244,223,0.4); background: transparent; }
    .rsvp-orange .rsvp__input-line::placeholder { color: rgba(255,244,223,0.5); }
    .rsvp-orange .rsvp__option { border-color: rgba(255,244,223,0.4); color: #fff4df; }
    .rsvp-orange input[type="radio"],
    .rsvp-orange input[type="checkbox"] {
      accent-color: #fff4df;
    }
    .rsvp-orange .btn-send { background: #fff4df; color: #ff8d21; border: none; }
    .rsvp-orange .btn-send:hover { background: #2E2E2E; color: #fff4df; }
    .rsvp-orange .rsvp__error { color: rgba(255,244,223,0.8); }
    .rsvp-orange .rsvp__success { color: #fff4df; }

    .rsvp-orange__head { margin-bottom: 40px; }
    .rsvp-orange__icon { font-size: 2rem; color: #fff4df; margin-bottom: 8px; }
    .rsvp-orange__title {
      font-family: var(--ff-script);
      font-size: 2.6rem;
      color: #fff4df;
      margin-bottom: 8px;
    }
    .rsvp-orange__sub {
      font-family: var(--ff-serif);
      font-size: 0.85rem;
      letter-spacing: 2px;
      text-transform: uppercase;
      color: rgba(255,244,223,0.7);
    }

    /* ─── Redesign Custom CSS ─── */
    .hero-custom {
      background: var(--cream) !important;
      padding: 40px 24px 20px 24px;
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
      min-height: auto !important;
      overflow: visible !important;
    }

    .hero-title-container {
      display: flex;
      flex-direction: column;
      align-items: center;
      margin-bottom: 8px;
      width: 100%;
    }

    .hero-title-main-wrap {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      position: relative;
      margin-bottom: 5px;
    }

    .hero-title-script-top {
      font-family: var(--ff-script);
      font-size: 2.8rem;
      color: #ff8d21;
      transform: rotate(-6deg);
      margin-bottom: 0px;
      margin-left: -35px;
      z-index: 2;
      display: block;
    }

    .hero-title-main {
      font-family: var(--ff-serif);
      font-size: clamp(2.2rem, 8.5vw, 3.4rem);
      font-weight: 500;
      letter-spacing: 3px;
      color: var(--text);
      margin: 0;
      line-height: 1.1;
      text-shadow: none !important;
      -webkit-text-fill-color: var(--text) !important;
    }

    .hero-title-script-bottom {
      font-family: var(--ff-script);
      font-size: 2.1rem;
      color: #ff8d21;
      position: absolute;
      right: -25px;
      bottom: -10px;
      transform: rotate(-10deg);
    }

    .hero-date-sub {
      font-family: var(--ff-serif);
      font-size: 1rem;
      letter-spacing: 4px;
      color: var(--text-muted);
      margin-top: 10px;
      margin-bottom: 25px;
      text-transform: uppercase;
    }

    /* Photo Cut-out Frame */
    .hero-photo-wrap {
      width: 100%;
      max-width: 370px;
      margin: 0 auto 30px auto;
      position: relative;
      aspect-ratio: 2.2 / 3;
    }

    .hero-photo-inner {
      width: 100%;
      height: 100%;
      position: relative;
      border-radius: 28px;
      overflow: hidden;
      box-shadow: 0 10px 30px rgba(0,0,0,0.06);
    }

    .hero-photo-inner img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
    }

    /* Cut-out Overlay */
    .hero-names-overlay {
      position: absolute;
      left: -2px;
      bottom: -2px;
      width: 55%;
      height: 30%;
      background: var(--cream);
      border-top-right-radius: 28px;
      border-bottom-left-radius: 26px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: flex-start;
      padding-left: 20px;
      padding-top: 8px;
      box-sizing: border-box;
      z-index: 10;
    }

    .hero-name-item-1 {
      font-family: var(--ff-script);
      font-size: 2.7rem;
      color: #ff8d21;
      line-height: 0.9;
    }

    .hero-name-item-2 {
      font-family: var(--ff-script);
      font-size: 2.7rem;
      color: #ff8d21;
      line-height: 0.9;
      margin-left: 25px;
      margin-top: -2px;
    }

    /* Framed Card */
    .hero-card {
      border: 1px solid rgba(46, 46, 46, 0.4);
      border-radius: 28px;
      padding: 24px 20px;
      width: 100%;
      max-width: 370px;
      margin: 0 auto;
      box-sizing: border-box;
    }

    .hero-card-text {
      font-family: var(--ff-serif);
      font-size: 0.78rem;
      letter-spacing: 2px;
      line-height: 1.6;
      text-transform: uppercase;
      color: var(--text);
      margin: 0;
    }

    /* Greeting & Venues Title style */
    .section-title-wrap {
      display: flex;
      align-items: baseline;
      justify-content: center;
      gap: 8px;
      margin-bottom: 25px;
      width: 100%;
    }

    .section-title-main {
      font-family: var(--ff-serif);
      font-size: clamp(1.8rem, 6vw, 2.2rem);
      font-weight: 500;
      letter-spacing: 3px;
      color: var(--text);
      text-transform: uppercase;
      margin: 0;
    }

    .section-title-script {
      font-family: var(--ff-script);
      font-size: 2.3rem;
      color: #ff8d21;
      line-height: 1;
    }

    /* Greeting & Calendar Custom Styles */
    .greeting-section {
      background: var(--cream);
      padding: 60px 24px;
      text-align: center;
    }
    .greeting-section .greeting__text {
      font-family: var(--ff-serif);
      font-size: 0.95rem;
      line-height: 1.8;
      color: var(--text);
      max-width: 380px;
      margin: 0 auto;
    }
    
    .calendar-section {
      background: #ff8d21;
      padding: 60px 24px;
      text-align: center;
      color: var(--cream);
    }
    
    .calendar-section .date-row__label,
    .calendar-section .date-big,
    .calendar-section .countdown-inline__label,
    .calendar-section .countdown-inline__digits,
    .calendar-section .cal-orange__subhead {
      color: var(--cream) !important;
    }
    
    .calendar-section .date-row__line {
      background: rgba(255, 244, 223, 0.3) !important;
    }
    
    .calendar-section .countdown-inline__sublabel {
      color: rgba(255, 244, 223, 0.6) !important;
    }
    
    .calendar-section .countdown-inline__sep {
      color: rgba(255, 244, 223, 0.4) !important;
    }
    
    .cal-orange__title-script {
      font-family: var(--ff-script);
      font-size: 2.8rem;
      color: var(--cream);
      margin-bottom: 20px;
      text-align: center;
    }

    .calendar-section .cal-header {
      border-bottom: 1px solid rgba(255, 244, 223, 0.3);
      padding-bottom: 8px;
      margin-bottom: 16px;
    }

    .calendar-section .cal-header span {
      font-family: var(--ff-script) !important;
      font-size: 1.4rem !important;
      text-transform: none !important;
      color: rgba(255, 244, 223, 0.8) !important;
      font-weight: normal !important;
      letter-spacing: 0 !important;
    }
    
    /* Circled heart active day */
    .calendar-section .cal-orange .cal-grid span.cal-day--active,
    .calendar-section .cal-day--active {
      position: relative !important;
      background: none !important;
      color: #fff !important;
      -webkit-text-fill-color: #fff !important;
      font-weight: bold !important;
      display: block !important;
      padding: 6px 0 !important;
      width: auto !important;
      height: auto !important;
      box-shadow: none !important;
    }
    .calendar-section .cal-orange .cal-grid span.cal-day--active::after,
    .calendar-section .cal-day--active::after {
      content: '' !important;
      position: absolute !important;
      left: 50% !important;
      top: 50% !important;
      transform: translate(-50%, -50%) !important;
      width: 36px !important;
      height: 36px !important;
      background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="%23fff" stroke-width="1.8"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>') center center/contain no-repeat !important;
      z-index: 1 !important;
      pointer-events: none !important;
    }

    /* Venue custom buttons override */
    .location-clean__btn {
      border: 1px solid rgba(46, 46, 46, 0.4) !important;
      color: var(--text) !important;
      background: transparent !important;
      border-radius: 20px !important;
      padding: 8px 20px !important;
      font-size: 0.8rem !important;
      text-transform: uppercase !important;
      letter-spacing: 1px !important;
    }
    .location-clean__btn:hover {
      background: var(--text) !important;
      color: var(--cream) !important;
      border-color: var(--text) !important;
    }

    /* Timeline Section styles */
    .timeline-section {
      background: #ff8d21;
      padding: 60px 24px;
      text-align: center;
      color: var(--cream);
    }
    .timeline-container {
      display: flex;
      flex-direction: column;
      gap: 35px;
      max-width: 340px;
      margin: 0 auto;
      text-align: left;
      position: relative;
      padding-left: 20px;
    }
    .timeline-container::before {
      content: '';
      position: absolute;
      left: 4px;
      top: 5px;
      bottom: 5px;
      width: 1px;
      background: rgba(255, 244, 223, 0.2);
    }
    .timeline-item {
      display: flex;
      align-items: flex-start;
      position: relative;
      gap: 20px;
    }
    .timeline-item::before {
      content: '♥';
      position: absolute;
      left: -20px;
      top: 0;
      color: var(--cream);
      font-size: 0.8rem;
      background: #ff8d21;
      padding: 2px 0;
    }
    .timeline-time {
      font-family: var(--ff-serif);
      font-size: 1.8rem;
      font-weight: 300;
      color: var(--cream);
      line-height: 1;
      min-width: 75px;
    }
    .timeline-content {
      display: flex;
      flex-direction: column;
      gap: 4px;
    }
    .timeline-title {
      font-family: var(--ff-serif);
      font-size: 0.9rem;
      font-weight: 500;
      letter-spacing: 1px;
      color: var(--cream);
    }
    .timeline-desc {
      font-family: var(--ff-sans);
      font-size: 0.72rem;
      color: rgba(255, 244, 223, 0.6);
    }

    /* RSVP Section Clean styles */
    .rsvp-clean {
      background: var(--cream);
      padding: 60px 24px;
      text-align: center;
    }
    .rsvp-clean__card {
      border: 1px solid rgba(46, 46, 46, 0.3);
      border-radius: 28px;
      padding: 30px 20px;
      width: 100%;
      max-width: 370px;
      margin: 0 auto;
      box-sizing: border-box;
      background: transparent;
    }
    .rsvp-clean .rsvp__group {
      margin-bottom: 25px;
      text-align: left;
    }
    .rsvp-clean .rsvp__label {
      font-family: var(--ff-serif);
      font-size: 0.82rem;
      text-transform: uppercase;
      letter-spacing: 1px;
      color: var(--text);
      display: block;
      margin-bottom: 10px;
      font-weight: 500;
    }
    .rsvp-clean .rsvp__input-line {
      width: 100%;
      border: none;
      border-bottom: 1px solid rgba(46, 46, 46, 0.3);
      background: transparent;
      padding: 8px 0;
      font-family: var(--ff-serif);
      font-size: 1rem;
      color: var(--text);
      outline: none;
      transition: border-color 0.2s;
    }
    .rsvp-clean .rsvp__input-line:focus {
      border-bottom-color: #ff8d21;
    }
    .rsvp-clean .rsvp__options {
      display: flex;
      gap: 10px;
    }
    .rsvp-clean .rsvp__option {
      flex: 1;
      border: 1px solid rgba(46, 46, 46, 0.2);
      border-radius: 20px;
      padding: 10px;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      cursor: pointer;
      transition: all 0.2s;
      font-family: var(--ff-sans);
      font-size: 0.75rem;
      text-transform: uppercase;
      color: var(--text);
    }
    .rsvp-clean .rsvp__option input[type="radio"] {
      accent-color: #ff8d21;
      margin: 0;
    }
    .rsvp-clean .btn-send-clean {
      width: 100%;
      background: #2e2e2e;
      color: var(--cream);
      border: none;
      border-radius: 20px;
      padding: 12px;
      font-family: var(--ff-sans);
      font-size: 0.8rem;
      text-transform: uppercase;
      letter-spacing: 2px;
      cursor: pointer;
      transition: opacity 0.2s;
      margin-top: 10px;
    }
    .rsvp-clean .btn-send-clean:hover {
      opacity: 0.9;
    }
    .rsvp-clean .rsvp__error {
      color: #e67a0d;
      font-size: 0.7rem;
      margin-top: 4px;
      font-family: var(--ff-sans);
    }

    /* Wishes Section styles */
    .wishes-clean {
      background: var(--cream);
      padding: 40px 24px 60px 24px;
      text-align: center;
    }
    .wishes-text {
      font-family: var(--ff-serif);
      font-size: 0.92rem;
      line-height: 1.8;
      color: var(--text);
      max-width: 360px;
      margin: 0 auto;
    }
  </style>
</head>
<body>

  <!-- ════════════ HERO ════════════ -->
  <section class="hero-custom" id="hero">
    <div class="hero-title-container">
      <div class="hero-title-main-wrap">
        <span class="hero-title-script-top">Հարսանեկան</span>
        <h1 class="hero-title-main">ՀՐԱՎԵՐ</h1>
      </div>
    </div>
    <div class="hero-date-sub">20 . 06 . 2026</div>
    
    <div class="hero-photo-wrap scroll-reveal">
      <div class="hero-photo-inner">
        <img src="{{ asset('images/couple/IMG_8365.webp') }}" alt="Սիրով սպասում ենք" />
        <div class="hero-names-overlay">
          <div class="hero-name-item-1">Սեդրակ</div>
          <div class="hero-name-item-2" style="font-size: 2.7rem; margin-left: 20px;">& Գոհար</div>
        </div>
      </div>
    </div>
  </section>

  <!-- ════════════ GREETING (Light Background) ════════════ -->
  <section class="greeting-section" id="greeting">
    <div class="section-inner scroll-reveal">
      <div class="section-title-wrap">
        <span class="section-title-main">ՍԻՐԵԼԻ</span>
        <span class="section-title-script">հյուրեր</span>
      </div>
      <p class="greeting__text">
        Սիրով հրավիրում ենք Ձեզ ներկա գտնվելու մեր կյանքի ամենաերջանիկ և հիշարժան օրվան՝ մեր հարսանիքին։
        Ձեր ներկայությունն ու ջերմ բարեմաղթանքները մեզ համար անչափ կարևոր են և մեր ուրախությունն ավելի լիարժեք ու գեղեցիկ կդարձնեն։
        Անհամբեր սպասում ենք Ձեզ՝ միասին կիսելու սիրով ու երջանկությամբ լի այս առանձնահատուկ օրը։
      </p>
    </div>
  </section>

  <!-- ════════════ CALENDAR (Dark Background) ════════════ -->
  <section class="calendar-section" id="calendar-block">
    <div class="section-inner scroll-reveal">

      <!-- Countdown -->
      <div class="countdown-inline">
        <div class="countdown-inline__label">ՄՆԱՑ</div>
        <div class="countdown-inline__digits">
          <div class="countdown-inline__unit">
            <span id="cd-days">00</span>
            <span class="countdown-inline__sublabel">օր</span>
          </div>
          <span class="countdown-inline__sep">:</span>
          <div class="countdown-inline__unit">
            <span id="cd-hours">00</span>
            <span class="countdown-inline__sublabel">ժամ</span>
          </div>
          <span class="countdown-inline__sep">:</span>
          <div class="countdown-inline__unit">
            <span id="cd-mins">00</span>
            <span class="countdown-inline__sublabel">րոպե</span>
          </div>
          <span class="countdown-inline__sep">:</span>
          <div class="countdown-inline__unit">
            <span id="cd-secs">00</span>
            <span class="countdown-inline__sublabel">վրկ</span>
          </div>
        </div>
      </div>

      <!-- Calendar -->
      <div class="cal-orange">
        <div class="cal-orange__title-script">հունիս</div>
        <div class="calendar">
          <div class="cal-header">
            <span>երկ</span><span>երք</span><span>չոր</span><span>հնգ</span><span>ուրբ</span><span>շաբ</span><span>կիր</span>
          </div>
          <div class="cal-grid">
            <span>1</span><span>2</span><span>3</span><span>4</span><span>5</span><span>6</span><span>7</span>
            <span>8</span><span>9</span><span>10</span><span>11</span><span>12</span><span>13</span><span>14</span>
            <span>15</span><span>16</span><span>17</span><span>18</span><span>19</span><span class="cal-day--active">20</span><span>21</span>
            <span>22</span><span>23</span><span>24</span><span>25</span><span>26</span><span>27</span><span>28</span>
            <span>29</span><span>30</span>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- ════════════ PHOTO 1 ════════════ -->
  <div class="photo-divider scroll-reveal">
    <img src="{{ asset('images/couple/IMG_8362.webp') }}" alt="" />
  </div>

  <!-- ════════════ LOCATION ════════════ -->
  <section class="location-clean" id="location">
    <div class="section-inner">
      <div class="section-title-wrap" style="margin-bottom: 45px;">
        <span class="section-title-main">ԱՆՑԿԱՑՄԱՆ</span>
        <span class="section-title-script">վայրերը</span>
      </div>

      <!-- Եկեղեցի -->
      <div class="scroll-reveal">
        <div class="location-clean__icon" style="display: flex; justify-content: center; align-items: center; margin-bottom: 10px;">
          <img src="{{ asset('images/icons/wedding-rings.svg') }}" alt="Պսակադրություն" style="width: 75px; height: 75px; object-fit: contain;" />
        </div>
        <div class="location-clean__title">Պսակադրություն</div>
        <div class="location-clean__time">14:30</div>
        <div class="location-clean__venue">Գեղարդ Վանական Համալիր</div>
        
        <div class="location-slider">
          <img src="{{ asset('images/church/2.webp') }}" class="slider-img active" />
          <img src="{{ asset('images/church/IMG_8321.webp') }}" class="slider-img" />
          <img src="{{ asset('images/church/3.webp') }}" class="slider-img" />
        </div>

        <a href="https://www.google.com/maps/place/geghard+monastery/data=!4m2!3m1!1s0x406aaead91206219:0x4003cbe690889756?sa=X&ved=1t:155783&ictx=111" target="_blank" class="location-clean__btn">
          <i class="ph ph-map-pin"></i> Ուղղություն
        </a>
      </div>

      <div class="location-clean__divider"></div>

      <!-- Ռեստորան -->
      <div class="scroll-reveal">
        <div class="location-clean__icon" style="display: flex; justify-content: center; align-items: center; margin-bottom: 10px;">
          <img src="{{ asset('images/icons/restaurant.svg') }}" alt="Հարսանյաց Հանդես" style="width: 75px; height: 75px; object-fit: contain;" />
        </div>
        <div class="location-clean__title">Հարսանյաց Հանդես</div>
        <div class="location-clean__time">17:00</div>
        <div class="location-clean__venue">Ohana Yvn</div>

        <div class="location-slider">
          <img src="{{ asset('images/restaurant/2.webp') }}" class="slider-img active" />
          <img src="{{ asset('images/restaurant/1.webp') }}" class="slider-img" />
          <img src="{{ asset('images/restaurant/3.webp') }}" class="slider-img" />
        </div>

        <a href="https://maps.app.goo.gl/yk5dm6ve2nmBvW8fA" target="_blank" class="location-clean__btn">
          <i class="ph ph-map-pin"></i> Ուղղություն
        </a>
      </div>

  </section>

  <!-- ════════════ TIMELINE (Dark Background) ════════════ -->
  <section class="timeline-section" id="timeline">
    <div class="section-inner scroll-reveal">
      <div class="section-title-wrap" style="margin-bottom: 40px;">
        <span class="section-title-main" style="color: var(--cream) !important;">ՕՐՎԱ</span>
        <span class="section-title-script" style="color: var(--cream) !important;">ծրագիրը</span>
      </div>
      
      <div class="timeline-container">
        <!-- Item 1 -->
        <div class="timeline-item">
          <div class="timeline-time">14:30</div>
          <div class="timeline-content">
            <div class="timeline-title">ՊՍԱԿԱԴՐՈՒԹՅՈՒՆ</div>
            <div class="timeline-desc">Գեղարդ վանական համալիր</div>
          </div>
        </div>
        
        <!-- Item 2 -->
        <div class="timeline-item">
          <div class="timeline-time">17:00</div>
          <div class="timeline-content">
            <div class="timeline-title">ՀԱՐՍԱՆՅԱՑ ՀԱՆԴԵՍ</div>
            <div class="timeline-desc">Ohana Yvn ռեստորան</div>
          </div>
        </div>
        
        <!-- Item 3 -->
        <div class="timeline-item">
          <div class="timeline-time">21:00</div>
          <div class="timeline-content">
            <div class="timeline-title">ՀԱՐՍԱՆԵԿԱՆ ՏՈՐԹ</div>
            <div class="timeline-desc">Հաճելի և քաղցր ակնթարթ</div>
          </div>
        </div>
        
        <!-- Item 4 -->
        <div class="timeline-item">
          <div class="timeline-time">23:30</div>
          <div class="timeline-content">
            <div class="timeline-title">ՄԻՋՈՑԱՌՄԱՆ ԱՎԱՐՏ</div>
            <div class="timeline-desc">Հիշարժան երեկոյի ավարտը</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ════════════ PHOTO 2 ════════════ -->
  <div class="photo-divider scroll-reveal">
    <img src="{{ asset('images/couple/IMG_8363.webp') }}" alt="Սեդրակ և Գոհար" />
  </div>

  <!-- ════════════ RSVP (Light Background with Card) ════════════ -->
  <section class="rsvp-clean" id="rsvp">
    <div class="section-inner scroll-reveal">
      <div class="section-title-wrap" style="margin-bottom: 35px;">
        <span class="section-title-main">ՀԱՍՏԱՏՈՒՄ</span>
        <span class="section-title-script">ներկայության</span>
      </div>

      <div class="rsvp-clean__card">
        <form class="rsvp__form" id="rsvp-form" onsubmit="handleRsvp(event)">
          <div class="rsvp__group">
            <label class="rsvp__label">Նշեք ձեր անուն ազգանունը</label>
            <input type="text" id="rsvp-name" class="rsvp__input-line" />
            <div class="rsvp__error" id="err-name"></div>
          </div>
          <div class="rsvp__group">
            <label class="rsvp__label">Կկարողանա՞ք ներկա գտնվել միջոցառմանը</label>
            <div class="rsvp__options">
              <label class="rsvp__option"><input type="radio" name="attend" value="yes" /> <span>Այո, կգամ</span></label>
              <label class="rsvp__option"><input type="radio" name="attend" value="no" /> <span>Ցավոք, չեմ կարողանա</span></label>
            </div>
            <div class="rsvp__error" id="err-attend"></div>
          </div>
          <div class="rsvp__group">
            <label class="rsvp__label">Ու՞մ կողմից եք հրավիրված</label>
            <div class="rsvp__options">
              <label class="rsvp__option"><input type="radio" name="invited_by" value="sedrak" /> <span>Սեդրակ</span></label>
              <label class="rsvp__option"><input type="radio" name="invited_by" value="gohar" /> <span>Գոհար</span></label>
            </div>
            <div class="rsvp__error" id="err-invited_by"></div>
          </div>
          <div class="rsvp__group" id="guest-count-wrapper">
            <label class="rsvp__label">Հյուրերի քանակը</label>
            <input type="text" id="rsvp-count" inputmode="numeric" pattern="[0-9]*" class="rsvp__input-line" placeholder="Օրինակ՝ 2" />
            <div class="rsvp__error" id="err-guest_count"></div>
          </div>
          <div class="rsvp__group" id="song-wrapper">
            <label class="rsvp__label">Ի՞նչ երգ կցանկանայիք հնչեր</label>
            <input type="text" id="rsvp-song" class="rsvp__input-line" placeholder="Նշեք ձեր նախընտրած երգը" />
            <div class="rsvp__error" id="err-desired_song"></div>
          </div>
          <button type="submit" class="btn-send-clean" id="rsvp-submit">Ուղարկել</button>
        </form>
        <p class="rsvp__success" id="rsvp-success" style="display:none; color: var(--text); margin-top: 20px;">🧡 Շնորհակալություն հաստատման համար:</p>
      </div>
    </div>
  </section>

  <!-- ════════════ BOTTOM HERO ════════════ -->
  <section class="hero-custom" id="hero-bottom" style="margin-top: -2px;">
    <div class="hero-photo-wrap scroll-reveal">
      <div class="hero-photo-inner">
        <img src="{{ asset('images/couple/IMG_8364.webp') }}" alt="Սիրով սպասում ենք" />
        <div class="hero-names-overlay">
          <div class="hero-name-item-1">Սիրով</div>
          <div class="hero-name-item-2" style="font-size: 2.1rem; margin-left: 15px;">սպասում ենք</div>
        </div>
      </div>
    </div>
  </section>

  <script src="{{ asset('js/app.js') }}?v={{ time() + 50 }}"></script>
</body>
</html>
