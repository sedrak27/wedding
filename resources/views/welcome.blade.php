<!DOCTYPE html>
<html lang="hy">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Հարսանեկան Հրավեր | Սեդրակ & Գոհար</title>
  <meta name="description" content="Սեդրակի և Գոհարի հարսանեկան հրավիրատոմս — 20 Հունիսի 2026" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;1,300;1,400&family=Great+Vibes&family=Montserrat:wght@300;400;500&family=Noto+Serif+Armenian:wght@200;300;400&family=Playfair+Display:ital@0;1&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>🧡</text></svg>">
  <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>

  <!-- ════════════ ԳԼԽԱՎՈՐ ════════════ -->
  <section class="hero" id="hero" style="background: linear-gradient(160deg, rgba(255,141,33,.6) 0%, rgba(255,244,223,.4) 60%, rgba(255,255,255,.1) 100%), url('{{ asset('images/couple/2.png') }}') center 10%/cover no-repeat;">
    <div class="hero__overlay" style="background: rgba(255, 141, 33, 0.2);"></div>
    <div class="hero__content">
      <p class="hero__label">Հարսանեկան Հրավեր</p>
      <h1 class="hero__names">Սեդրակ <span style="font-family: sans-serif; font-weight: normal;">&</span> Գոհար</h1>
    </div>
    <div class="hero__scroll-hint">↓</div>
  </section>

  <!-- ════════════ ՈՂՋՈՒՅՆ ════════════ -->
  <section class="greeting" id="greeting">
    <div class="section-inner">
      <h2 class="section-title">Սիրելի Հյուրեր</h2>
      <div class="section-title-script">Հրավեր</div>
      <p class="greeting__text">
        Սիրով հրավիրում ենք Ձեզ ներկա գտնվելու մեր կյանքի ամենաերջանիկ և հիշարժան օրվան՝ մեր հարսանիքին։
        Ձեր ներկայությունն ու ջերմ բարեմաղթանքները մեզ համար անչափ կարևոր են և մեր ուրախությունն ավելի լիարժեք ու գեղեցիկ կդարձնեն։
        Անհամբեր սպասում ենք Ձեզ՝ միասին կիսելու սիրով ու երջանկությամբ լի այս առանձնահատուկ օրը։
      </p>
    </div>
  </section>

  <!-- ════════════ ՕՐԱՑՈՒՅՑ ════════════ -->
  <section class="calendar-section" id="calendar">
    <div class="section-inner">
      <h2 class="section-title">ՀՈՒՆԻՍ</h2>
      <div class="section-title-script">2026</div>
      <div class="calendar">
        <div class="cal-header">
          <span>ԵՐԿ</span><span>ԵՐՔ</span><span>ՉՈՐ</span><span>ՀՆԳ</span><span>ՈՒՐԲ</span><span>ՇԱԲ</span><span>ԿԻՐ</span>
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
  </section>

  <!-- ════════════ ՀԵՏՀԱՇՎԱՐԿ ════════════ -->
  <section class="countdown" id="countdown">
    <div class="section-inner">
      <h2 class="section-title">Մնաց</h2>
      <div class="countdown__grid">
        <div class="countdown__item">
          <span class="countdown__num" id="cd-days">--</span>
          <span class="countdown__label">Օր</span>
        </div>
        <div class="countdown__item">
          <span class="countdown__num" id="cd-hours">--</span>
          <span class="countdown__label">Ժամ</span>
        </div>
        <div class="countdown__item">
          <span class="countdown__num" id="cd-mins">--</span>
          <span class="countdown__label">Րոպե</span>
        </div>
        <div class="countdown__item">
          <span class="countdown__num" id="cd-secs">--</span>
          <span class="countdown__label">Վայրկյան</span>
        </div>
      </div>
    </div>
  </section>

  <!-- ════════════ ՎԱՅՐԵՐ ════════════ -->
  <section class="location" id="location">
    <div class="section-inner">
      <h2 class="section-title location-title">Օրվա Ծրագիր</h2>

      <!-- Եկեղեցի -->
      <div class="location__block">
        <h3 class="location__sub">Պսակադրություն</h3>
        <p class="location__venue">Գեղարդ վանական համալիր</p>

        <div class="location-slider">
          <img src="{{ asset('images/church/1.jpg') }}" class="slider-img active" />
          <img src="{{ asset('images/church/2.jpeg') }}" class="slider-img" />
          <img src="{{ asset('images/church/3.jpg') }}" class="slider-img" />
        </div>

        <div>
          <a href="https://www.google.com/maps/place/Geghard/@40.1404412,44.8185299,17z/" target="_blank" class="btn btn--outline">Քարտեզ</a>
        </div>
      </div>

      <div class="location__divider"></div>

      <!-- Ռեստորան -->
      <div class="location__block">
        <h3 class="location__sub">Տոնական երեկո</h3>
        <p class="location__venue">Ohana ռեստորան</p>

        <div class="location-slider">
          <img src="{{ asset('images/restaurant/1.jpg') }}" class="slider-img active" />
          <img src="{{ asset('images/restaurant/2.jpg') }}" class="slider-img" />
          <img src="{{ asset('images/restaurant/3.jpeg') }}" class="slider-img" />
        </div>

        <div>
          <a href="https://maps.app.goo.gl/yk5dm6ve2nmBvW8fA" target="_blank" class="btn btn--outline">Քարտեզ</a>
        </div>
      </div>
    </div>
  </section>

  <!-- ════════════ ԵՐԲ, ՈՐՏԵՂ ════════════ -->
  <section class="programme" id="programme">
    <div class="section-inner">
      <h2 class="section-title programme-title">Երբ, Որտեղ</h2>
      <div class="programme__cards">

        <!-- Պսակադրություն -->
        <div class="programme__card">
          <div class="programme__icon">
            <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
              <!-- Cross -->
              <line x1="32" y1="6" x2="32" y2="30" stroke="#ff8d21" stroke-width="3" stroke-linecap="round"/>
              <line x1="22" y1="14" x2="42" y2="14" stroke="#ff8d21" stroke-width="3" stroke-linecap="round"/>
              <!-- Church roof -->
              <polyline points="12,34 32,18 52,34" stroke="#ff8d21" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
              <!-- Church walls -->
              <rect x="14" y="34" width="36" height="22" rx="1" stroke="#ff8d21" stroke-width="3" fill="none"/>
              <!-- Door -->
              <path d="M26 56 L26 46 Q32 40 38 46 L38 56" stroke="#ff8d21" stroke-width="2.5" fill="none"/>
            </svg>
          </div>
          <div class="programme__card-body">
            <div class="programme__card-time">14:30</div>
            <div class="programme__card-title">Պսակադրություն</div>
            <div class="programme__card-place">Գեղարդ վանական համալիր</div>
          </div>
        </div>

        <div class="programme__connector">
          <div class="programme__connector-line"></div>
          <span class="programme__connector-dot">♥</span>
          <div class="programme__connector-line"></div>
        </div>

        <!-- Տոնական երեկո -->
        <div class="programme__card">
          <div class="programme__icon">
            <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
              <!-- Wine glasses clinking -->
              <!-- Left glass -->
              <path d="M18 10 L14 28 Q14 36 20 36 L20 50" stroke="#ff8d21" stroke-width="2.8" stroke-linecap="round" fill="none"/>
              <line x1="16" y1="50" x2="24" y2="50" stroke="#ff8d21" stroke-width="2.8" stroke-linecap="round"/>
              <path d="M14 28 Q14 36 20 36 Q26 36 26 28" stroke="#ff8d21" stroke-width="2.8" fill="none"/>
              <!-- Right glass -->
              <path d="M46 10 L50 28 Q50 36 44 36 L44 50" stroke="#ff8d21" stroke-width="2.8" stroke-linecap="round" fill="none"/>
              <line x1="40" y1="50" x2="48" y2="50" stroke="#ff8d21" stroke-width="2.8" stroke-linecap="round"/>
              <path d="M50 28 Q50 36 44 36 Q38 36 38 28" stroke="#ff8d21" stroke-width="2.8" fill="none"/>
              <!-- Sparkles -->
              <line x1="32" y1="8" x2="32" y2="4" stroke="#ff8d21" stroke-width="2" stroke-linecap="round"/>
              <line x1="28" y1="10" x2="25" y2="7" stroke="#ff8d21" stroke-width="2" stroke-linecap="round"/>
              <line x1="36" y1="10" x2="39" y2="7" stroke="#ff8d21" stroke-width="2" stroke-linecap="round"/>
            </svg>
          </div>
          <div class="programme__card-body">
            <div class="programme__card-time">17:00</div>
            <div class="programme__card-title">Տոնական երեկո</div>
            <div class="programme__card-place">Ohana ռեստորան</div>
          </div>
        </div>

      </div>
    </div>
  </section>






  <!-- ════════════ ՀԱՍՏԱՏՈՒՄ ════════════ -->
  <section class="rsvp" id="rsvp">
    <div class="section-inner">
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
            <input type="text" id="rsvp-count" class="rsvp__input-line" placeholder="Օրինակ՝ 2" />
            <div class="rsvp__error" id="err-guest_count"></div>
          </div>
          <div class="rsvp__group" id="song-wrapper">
            <label class="rsvp__label">Ի՞նչ երգ կցանկանայիք հնչեր</label>
            <input type="text" id="rsvp-song" class="rsvp__input-line" placeholder="Նշեք Ձեր նախընտրած երգը" />
            <div class="rsvp__error" id="err-desired_song"></div>
          </div>
          <button type="submit" class="btn-send" id="rsvp-submit">Ուղարկել</button>
        </form>
        <p class="rsvp__success" id="rsvp-success" style="display:none">🧡 Շնորհակալություն հաստատման համար:</p>
      </div>
    </div>
  </section>

  <script src="{{ asset('js/app.js') }}?v=1.6"></script>
</body>
</html>
