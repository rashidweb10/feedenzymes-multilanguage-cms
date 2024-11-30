@php
    $logo = DB::table('settings')->first()->app_logo;
    $currentLocale = getCurrentLocale(); // Get the current application locale
    $languages = getLanguageList(); // Fetch the list of languages   
    
    $aboutMenu = DB::table(getCurrentLocale()."_pages")->where("id", 2)->first();
    $aboutContents = json_decode($aboutMenu->contents);
    $aboutTabsData = $aboutContents->tabs_data ?? [];

    $careerMenu = DB::table(getCurrentLocale()."_pages")->where("id", 3)->first()->name;
    $contactMenu = DB::table(getCurrentLocale()."_pages")->where("id", 4)->first()->name;

    $customEnzMenu = DB::table(getCurrentLocale()."_productions")->where("id", 1)->first()->name;
    $indivisualEnzMenu = DB::table(getCurrentLocale()."_productions")->where("id", 2)->first()->name;    
@endphp

<footer>
      <div class="footer pt-5">
        <div class="container">
          <div class="row">
            <div class="col-lg-4" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
              <img class="w-202" src="{{asset($logo)}}">
              <div class="footer-contacts">
                <p class="footer-contacts__address pt-3 pe-7">{{ __('messages.differentiation') }}</p>
              </div>
            </div>
            <div class="col-lg-8" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
              <!-- footer nav start-->
              <div class="footer_link1">
                <h4 class="footer__title borer-color1">{{ __('messages.company') }}</h4>
                <div class="footer_border"></div>
                <ul class="footer-menu">

                  @if(!empty($aboutTabsData))
                    @foreach($aboutTabsData as $index => $row)
                      <li>
                        <a href="{{localized_route('about')}}?tab={{$index}}"><i class="fa-solid fa-caret-right"></i> {{$row->tab_alias}}</a>
                      </li>                      
                    @endforeach
                  @endif 
                </ul>
              </div>
              <div class="footer_link1">
                <h4 class="footer__title borer-color2">{{ __('messages.enzymes') }}</h4>
                <div class="footer_border"></div>
                <ul class="footer-menu">
                <li>
                  <a href="{{localized_route('indivisual_enzymes')}}">
                    <i class="fa-solid fa-caret-right"></i> {{ $indivisualEnzMenu }}</a>
                </li>
                <li>
                  <a href="{{localized_route('customized_enzymes')}}">
                    <i class="fa-solid fa-caret-right"></i> {{ $customEnzMenu }}</a>
                </li>                  
                </ul>
              </div>
              <div class="footer_link1">
                <h4 class="footer__title borer-color3">{{ __('messages.news') }}</h4>
                <div class="footer_border"></div>
                <ul class="footer-menu">
                <li>
                  <a href="{{localized_route('events', ['type'=> 'global'])}}">
                    <i class="fa-solid fa-caret-right"></i> {{ __('messages.global_events') }}</a>
                </li>
                <li>
                  <a href="{{localized_route('events', ['type'=> 'upcoming'])}}">
                    <i class="fa-solid fa-caret-right"></i> {{ __('messages.upcoming_events') }}</a>
                </li>
                </ul>
              </div>
              <div class="footer_link1">
                <h4 class="footer__title borer-color4">{{ __('messages.careers') }}</h4>
                <div class="footer_border"></div>
                <ul class="footer-menu">
                <li>
                  <a href="{{localized_route('careers')}}">
                    <i class="fa-solid fa-caret-right"></i> {{ $careerMenu }}</a>
                </li>                
                </ul>
              </div>
              <div class="footer_link1">
                <h4 class="footer__title borer-color4">{{ __('messages.contact_us') }}</h4>
                <div class="footer_border"></div>
                <ul class="footer-menu">
                <li>
                  <a href="{{localized_route('contact')}}">
                    <i class="fa-solid fa-caret-right"></i> {{ $contactMenu }}</a>
                </li>                 
                </ul>
              </div>
              <!-- footer nav end-->
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-4"></div>
            <div class="col-md-4">
              <div class="footer_logo_bttom">
                <img src="{{ asset('assets/frontend/images/footer-symbol-1.png') }}" />
                <img src="{{ asset('assets/frontend/images/footer-symbol-2.png') }}" />
                <img src="{{ asset('assets/frontend/images/footer-symbol-3.png') }}" />
              </div>
            </div>
            <div class="col-md-4">
              <div class="footer_logo_bttom1">
                <img src="{{ asset('assets/frontend/images/power-of-lumis.jpg') }}" />
              </div>
            </div>
            <div class="col-md-4">
              <p class="footer-copyright mb-0">© {{date("Y")}} {{ __('messages.footer_text') }}</p>
            </div>
            <div class="col-md-4">
              {{--<ul class="footer-menu1 list-unstyled justify-content-center d-flex">
                <li>
                  <a href="#">{{ __('messages.sitemap') }}</a>
                </li>
                <li> | </li>
                <li>
                  <a href="#">{{ __('messages.terms_of_use') }}</a>
                </li>
                <li> | </li>
                <li>
                  <a href="#">{{ __('messages.privacy_statement') }}</a>
                </li>
              </ul>--}}
            </div>
            <div class="col-md-4">
              <div class="footer-privacy text-end">
                <p class="robot_slab fw-bold">{{ __('messages.tagline') }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script src="{{ asset('assets/frontend/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/aos.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/swiper.min.js') }}"></script>
    <script>
      AOS.init({
        duration: 800, // Duration of animations
        once: true, // Whether animation should happen only once
      });
    </script>
    <script>
      $(document).ready(function() {
        $(".owl-carousel").owlCarousel({
          items: 5, // Default number of items
          loop: true, // Loop through items
          margin: 25, // Space between items
          nav: false, // Show next/prev buttons
          dots: false, // Show pagination dots
          autoplay: true, // Autoplay the carousel
          autoplayTimeout: 3000, // Autoplay interval in ms
          autoplayHoverPause: true, // Pause on mouse hover
          responsive: {
            0: {
              items: 1 // Number of items for mobile view (width 0px and up)
            },
            768: {
              items: 1 // Number of items for tablets (width 768px and up)
            },
            1024: {
              items: 1 // Number of items for desktops (width 1024px and up)
            }
          }
        });
      });
    </script>
	
	<script>
    function translateTo(lang) {
        var select = document.querySelector('.goog-te-combo');
        if (select) {
            select.value = lang;
            select.dispatchEvent(new Event('change'));
        }
    }
</script>

  <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en',
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
                includedLanguages: 'en,es,fr,de,it,ja,zh-CN,ru', // add languages as needed
                autoDisplay: false
            }, 'google_translate_element');
        }
    </script>
    <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


  </body>
</html>