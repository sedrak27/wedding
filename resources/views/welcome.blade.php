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
  </style>
</head>
<body>

  <!-- ════════════ HERO ════════════ -->
  <section class="hero" id="hero" style="background: #f5e8cc url('{{ asset('images/couple/IMG_8365.webp') }}') center center/contain no-repeat;">
    <div class="hero__overlay" style="background: rgba(255, 141, 33, 0.2);"></div>
    <div class="hero__content">
      <p class="hero__label">Հարսանեկան Հրավեր</p>
      <h1 class="hero__names">Սեդրակ <span style="font-family: sans-serif; font-weight: normal;">&</span> Գոհար</h1>
    </div>
  </section>

  <!-- ════════════ ORANGE BLOCK (Greeting + Date + Countdown + Calendar) ════════════ -->
  <section class="orange-block" id="event-details">
    <div class="section-inner scroll-reveal">

      <!-- Greeting text -->
      <p class="greeting__text" style="color: rgba(255,244,223,0.92); margin-bottom: 40px;">
        Սիրով հրավիրում ենք Ձեզ ներկա գտնվելու մեր կյանքի ամենաերջանիկ և հիշարժան օրվան՝ մեր հարսանիքին։
        Ձեր ներկայությունն ու ջերմ բարեմաղթանքները մեզ համար անչափ կարևոր են և մեր ուրախությունն ավելի լիարժեք ու գեղեցիկ կդարձնեն։
        Անհամբեր սպասում ենք Ձեզ՝ միասին կիսելու սիրով ու երջանկությամբ լի այս առանձնահատուկ օրը։
      </p>

      <!-- Date display -->
      <div class="date-row">
        <div class="date-row__line"></div>
        <div class="date-row__label">ՀՈՒՆԻՍ</div>
        <div class="date-row__line"></div>
      </div>
      <div class="date-big">
        <span>ՇԱԲԱԹ</span>
        <span class="date-big__num">20</span>
        <span>2026</span>
      </div>
      <div class="date-row" style="margin-top: 20px;">
        <div class="date-row__line"></div>
        <div class="date-row__line" style="opacity: 0;"></div>
        <div class="date-row__line"></div>
      </div>

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
        <div class="cal-orange__subhead">ՀՈՒՆԻՍ 2026</div>
        <div class="calendar">
          <div class="cal-header">
            <span>ԵՐԿ</span><span>ԵՐՔ</span><span>ՉՈՐ</span><span>ՀՆԳ</span><span>ՈՒՐԲ</span><span>ՇԱԲ</span><span>ԿԻՐ</span>
          </div>
          <div class="cal-grid">
            <span>1</span><span>2</span><span>3</span><span>4</span><span>5</span><span>6</span><span>7</span>
            <span>8</span><span>9</span><span>10</span><span>11</span><span>12</span><span>13</span><span>14</span>
            <span>15</span><span>16</span><span>17</span><span>18</span><span>19</span><span class="cal-day--active" style="background:#ffffff !important; color:#e06600 !important; font-weight:900 !important; -webkit-text-fill-color:#e06600 !important;">20</span><span>21</span>
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

    </div>
  </section>

  <!-- ════════════ PHOTO 2 ════════════ -->
  <div class="photo-divider scroll-reveal">
    <img src="{{ asset('images/couple/IMG_8363.webp') }}" alt="Սեդրակ և Գոհար" />
  </div>

  <section class="rsvp-orange" id="rsvp">
    <div class="section-inner scroll-reveal">

      <div class="rsvp-orange__head">
        <div class="rsvp-orange__title">Հաստատում</div>
        <div class="rsvp-orange__sub">Խնդրում ենք հաստատել ձեր ներկայությունը</div>
      </div>

      <div class="rsvp__card">
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
          <button type="submit" class="btn-send" id="rsvp-submit">Ուղարկել</button>
        </form>
        <p class="rsvp__success" id="rsvp-success" style="display:none; color: #fff4df; margin-top: 20px;">🧡 Շնորհակալություն հաստատման համար:</p>
      </div>

    </div>
  </section>

  <section class="hero" id="hero-bottom" style="background: #f5e8cc url('{{ asset('images/couple/IMG_8364.webp') }}') center center/contain no-repeat; margin-top: -2px;">
    <div class="hero__overlay"></div>
    <div class="hero__content">
      <h2 class="hero__names" style="font-size: clamp(1.8rem, 6.5vw, 3rem);">ՍԻՐՈՎ ՍՊԱՍՈՒՄ ԵՆՔ</h2>
    </div>
  </section>

  <script src="{{ asset('js/app.js') }}?v={{ time() + 50 }}"></script>
</body>
</html>
