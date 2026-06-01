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
  <link rel="stylesheet" href="{{ asset('css/style.css') }}?v={{ time() }}" />
  <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>🧡</text></svg>">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script src="https://unpkg.com/@phosphor-icons/web@2.1.1"></script>
</head>
<body>

  <!-- ════════════ ԳԼԽԱՎՈՐ ════════════ -->
  <section class="hero" id="hero" style="background: #f5e8cc url('{{ asset('images/couple/IMG_8365.webp') }}') center center/contain no-repeat;">
    <div class="hero__overlay" style="background: rgba(255, 141, 33, 0.2);"></div>
    <div class="hero__content">
      <p class="hero__label">Հարսանեկան Հրավեր</p>
      <h1 class="hero__names">Սեդրակ <span style="font-family: sans-serif; font-weight: normal;">&</span> Գոհար</h1>
    </div>
  </section>

  <!-- ════════════ ՈՂՋՈՒՅՆ ════════════ -->
  <section class="greeting scroll-reveal" id="greeting">
    <div class="section-inner">
      <div class="section-title-script scroll-reveal">Հրավեր</div>
      <h2 class="section-title scroll-reveal">Սիրելի Հյուրեր</h2>
      <p class="greeting__text scroll-reveal">
        Սիրով հրավիրում ենք Ձեզ ներկա գտնվելու մեր կյանքի ամենաերջանիկ և հիշարժան օրվան՝ մեր հարսանիքին։
        Ձեր ներկայությունն ու ջերմ բարեմաղթանքները մեզ համար անչափ կարևոր են և մեր ուրախությունն ավելի լիարժեք ու գեղեցիկ կդարձնեն։
        Անհամբեր սպասում ենք Ձեզ՝ միասին կիսելու սիրով ու երջանկությամբ լի այս առանձնահատուկ օրը։
      </p>
    </div>
  </section>

  <!-- ════ PHOTO DIVIDER 1 ════ -->
  <div class="photo-divider scroll-reveal">
    <img src="{{ asset('images/couple/IMG_8362.webp') }}" alt="" />
  </div>

  <!-- ════════════ ՕՐԱՑՈՒՅՑ ════════════ -->
  <section class="calendar-section" id="calendar">
    <div class="section-inner">
      <h2 class="section-title scroll-reveal">ՀՈՒՆԻՍ</h2>
      <div class="section-title-script scroll-reveal">2026</div>
      <div class="calendar scroll-reveal">
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
      <h2 class="section-title scroll-reveal">Մնաց</h2>
      <div class="countdown__grid">
        <div class="countdown__item scroll-reveal">
          <span class="countdown__num" id="cd-days">--</span>
          <span class="countdown__label">Օր</span>
        </div>
        <div class="countdown__item scroll-reveal" style="transition-delay: 0.1s;">
          <span class="countdown__num" id="cd-hours">--</span>
          <span class="countdown__label">Ժամ</span>
        </div>
        <div class="countdown__item scroll-reveal" style="transition-delay: 0.2s;">
          <span class="countdown__num" id="cd-mins">--</span>
          <span class="countdown__label">Րոպե</span>
        </div>
        <div class="countdown__item scroll-reveal" style="transition-delay: 0.3s;">
          <span class="countdown__num" id="cd-secs">--</span>
          <span class="countdown__label">Վայրկյան</span>
        </div>
      </div>
    </div>
  </section>

  <!-- ════ PHOTO DIVIDER 2 ════ -->
  <div class="photo-divider scroll-reveal">
    <img src="{{ asset('images/couple/IMG_8361.webp') }}" alt="" />
  </div>

  <section class="location" id="location">
    <div class="section-inner">
      <h2 class="section-title location-title scroll-reveal">Օրվա մանրամասներ</h2>

      <!-- Եկեղեցի -->
      <div class="location__block scroll-reveal">
        <p class="location__desc location__desc--large">Մեր միության սուրբ արարողությունը տեղի կունենա<br><span class="location__desc--orange">Գեղարդ վանական համալիրում</span></p>
        <p class="location__time" style="font-weight:700; color:#ff8d21; font-size:1.2rem; margin-bottom: 20px;">14:30</p>

        <div class="location-slider">
          <img src="{{ asset('images/church/2.webp') }}" class="slider-img active" />
          <img src="{{ asset('images/church/IMG_8321.webp') }}" class="slider-img" />
          <img src="{{ asset('images/church/3.webp') }}" class="slider-img" />
        </div>

        <div>
          <a href="https://www.google.com/maps/place/Geghard/@40.1404412,44.8185299,17z/" target="_blank" class="btn btn--outline">Քարտեզ</a>
        </div>
      </div>

      <div class="location__divider scroll-reveal"></div>

      <!-- Ռեստորան -->
      <div class="location__block scroll-reveal">
        <p class="location__desc location__desc--large">Իսկ այս գեղեցիկ օրը<br>միասին կշարունակենք <span class="location__desc--orange">«Ohana Yvn»</span>-ում</p>
        <p class="location__time" style="font-weight:700; color:#ff8d21; font-size:1.2rem; margin-bottom: 20px;">17:00</p>

        <div class="location-slider">
          <img src="{{ asset('images/restaurant/3.webp') }}" class="slider-img active" />
          <img src="{{ asset('images/restaurant/1.webp') }}" class="slider-img" />
          <img src="{{ asset('images/restaurant/2.webp') }}" class="slider-img" />
        </div>

        <div>
          <a href="https://maps.app.goo.gl/yk5dm6ve2nmBvW8fA" target="_blank" class="btn btn--outline">Քարտեզ</a>
        </div>
      </div>
    </div>
  </section>

  <!-- ════ PHOTO DIVIDER 3 ════ -->
  <div class="photo-divider scroll-reveal">
    <img src="{{ asset('images/couple/IMG_8363.webp') }}" alt="" />
  </div>

  <!-- ════════════ ՀԱՍՏԱՏՈՒՄ ════════════ -->
  <section class="rsvp" id="rsvp">
    <div class="section-inner">
      <div class="rsvp__card scroll-reveal">
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

  <!-- ════ PHOTO DIVIDER 4 (Bottom) ════ -->
  <div class="photo-divider scroll-reveal" style="margin-top: 40px; margin-bottom: 0;">
    <img src="{{ asset('images/couple/IMG_8364.webp') }}" alt="" />
  </div>

  <script src="{{ asset('js/app.js') }}?v={{ time() }}"></script>
</body>
</html>
