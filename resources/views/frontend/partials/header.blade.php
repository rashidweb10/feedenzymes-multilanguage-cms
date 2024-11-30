@php
    $logo = DB::table('settings')->first()->app_logo;
    $currentLocale = getCurrentLocale(); // Get the current application locale
    $languages = getLanguageList(); // Fetch the list of languages   
    
    $aboutMenu = DB::table(getCurrentLocale()."_pages")->where("id", 2)->first();
    $aboutContents = json_decode($aboutMenu->contents);
    $aboutTabsData = $aboutContents->tabs_data ?? [];

    $careerMenu = DB::table(getCurrentLocale()."_pages")->where("id", 3)->first()->name;
    $contactMenu = DB::table(getCurrentLocale()."_pages")->where("id", 4)->first()->name;
@endphp
  <body>
    <div class="top_baar">
      <div class="container">
	  <div class="borer_btm">
	    <div class="row">

        <div class="col-md-6">
            <div class="dropdown">
                <button class="btn btn-link btn-sm dropdown-toggle" type="button" id="languageDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://flagcdn.com/w20/{{ str_replace('ko', 'kr', str_replace('en', 'us', $currentLocale)) }}.png" alt="{{ $languages[$currentLocale] ?? 'English' }} Flag">
                    <span id="selectedLanguage">{{ $languages[$currentLocale] ?? 'English' }}</span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="languageDropdown">
                    @foreach ($languages as $code => $language)
                        <li>
                            <a class="dropdown-item" href="{{ url($code) }}" data-value="{{ $code }}">
                                <img src="https://flagcdn.com/w20/{{ str_replace('ko', 'kr', str_replace('en', 'us', $code)) }}.png" alt="{{ $language }} Flag"> {{ $language }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
			
			<div class="col-md-6">
			     <div class="topmenu">
				   <ul>
				      <li><a class="{{ request()->segment(2) == 'careers' ? 'active' : '' }}" href="{{localized_route('careers')}}">{{ $careerMenu }}</a></li>
				      <li><a class="{{ request()->segment(2) == 'contact-us' ? 'active' : '' }}" href="{{localized_route('contact')}}">{{ $contactMenu }}</a></li>
				   </ul>
				 </div>
			</div>
		</div>
		</div>
	  </div>
    </div>
    <!--header section start-->
    <header>
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light p-0">
          <div class="container-fluid">
            <div class="logo_width">
              <a class="navbar-brand" href="{{url('')}}">
                <img class="w-150" src="{{asset($logo)}}" />
              </a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
              <div class="d-flex">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 position_tops">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span>{{ __('messages.company') }}</span> </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      @if(!empty($aboutTabsData))
                        @foreach($aboutTabsData as $index => $row)
                          <li>
                            <a class="dropdown-item" href="{{localized_route('about')}}?tab={{$index}}">
                              <i class="fa-solid fa-caret-right"></i> {{$row->tab_alias}} </a>
                          </li>
                        @endforeach
                      @endif                      

                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span>{{ __('messages.products') }}</span> </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li>
                        <a class="dropdown-item" href="#">
                          <i class="fa-solid fa-caret-right"></i> {{ __('messages.individual_enzymes') }}</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">
                          <i class="fa-solid fa-caret-right"></i> {{ __('messages.customized_enzymes') }}</a>
                      </li>
                     
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span>{{ __('messages.events') }}</span> </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li>
                        <a class="dropdown-item" href="{{localized_route('events', ['type'=> 'global'])}}">
                          <i class="fa-solid fa-caret-right"></i> {{ __('messages.global_events') }}</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="{{localized_route('events', ['type'=> 'upcoming'])}}">
                          <i class="fa-solid fa-caret-right"></i> {{ __('messages.upcoming_events') }}</a>
                      </li>
                     
                    </ul>
                    
                   
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
