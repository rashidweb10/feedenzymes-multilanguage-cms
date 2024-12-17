<nav class="main-header navbar navbar-expand {{$class_hearder}}">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fa-solid fa-bars-staggered"></i></a>
      </li>
      <li class="nav-item mr-1">
        <a class="btn btn-info btn-sm mt-1 rounded-circle" href="{{ url(route('admin.settings')) }}"><i class="fa-solid fa-gear"></i></a>
      </li>      
      <li class="nav-item">
        <a class="btn btn-danger btn-sm mt-1 rounded-pill" href="{{ url('admin/clear-cache') }}"><i class="fa-solid fa-eraser"></i> {{__('label.c_cache')}}</a>
      </li>      
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

    <form action="{{ url('/api/switch-login') }}" method="POST">
        @csrf
        <input type="hidden" name="target_app" value="App B">
        <input type="hidden" name="token" value="{{ generateToken() }}">
        <button type="submit">Switch to App B</button>
    </form>    

    <a style="padding-top: 7px;margin-right: 10px;" class="btn btn-sm btn-outline-primary" target="_blank" href="{{url(session('language', 'en'))}}">Visit Website</a>
    
    <form action="{{ route('admin.set.language') }}" method="post" id="language-form">
      @csrf
      <select class="form-control" id="language-selector" name="language" onchange="this.form.submit()">
          @foreach(getLanguageList() as $code => $lang)
              <option value="{{ $code }}" {{ languageSession() == $code ? 'selected' : '' }}>{{ $lang }}</option>
          @endforeach
      </select>
    </form>    
      <div class="btn-group">
        <button class="btn dropdown-toggle" type="button" id="currentSession" data-bs-toggle="dropdown" aria-expanded="false">
        {{$USER['name']}}
        </button>
        <ul class="dropdown-menu" aria-labelledby="currentSession">
          <li><a href="" class="dropdown-item"><i class="fa-solid fa-user"></i> {{__('label.profile')}}</a></li>
          <li><a href="{{ url('admin/logout') }}" class="dropdown-item"><i class="fa-solid fa-arrow-right-from-bracket"></i> {{__('label.logout')}}</a></li>
        </ul>
      </div>
    </ul>
  </nav>