<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CoreUI CSS -->
    <link rel="stylesheet" href="https://unpkg.com/@coreui/coreui/dist/css/coreui.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.5/css/perfect-scrollbar.css" integrity="sha512-2xznCEl5y5T5huJ2hCmwhvVtIGVF1j/aNUEJwi/BzpWPKEzsZPGpwnP1JrIMmjPpQaVicWOYVu8QvAIg9hwv9w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @livewireStyles

    <title>{{ config('app.name', 'Laravel') }}</title>
  </head>
  <body class="c-app">

      {{-- Sidebar --}}
        @include('partials.sidebar')
      {{-- Sidebar end --}}

      {{-- Main Contetn --}}
      <div class="wrapper d-flex flex-column min-vh-100 bg-light" style="padding-left: 256px">
      
      {{-- Header --}}

        <header class="header header-sticky mb-4">
          <div class="container-fluid">
            <button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
              <svg class="icon icon-lg">
              <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-menu') }}"></use>
              </svg>
            </button>
            <a class="header-brand d-md-none" href="#">
              <svg width="118" height="46" alt="CoreUI Logo">
                <use xlink:href="assets/brand/coreui.svg#full"></use>
              </svg>
            </a>
            <ul class="header-nav ms-auto">

              <li class="nav-item">
                <a class="nav-link" href="{{ route('consultation') }}">
                  {{ __('Get Consultation') }}
                </a>
              </li>

            </ul>
            <ul class="header-nav ms-3">

              <li class="nav-item">
                <a class="nav-link" href="{{ route('welcome') }}">
                  <svg class="icon icon-lg">
                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-settings') }}"></use>
                  </svg>
                </a>
              </li>

            </ul>

            <ul class="header-nav ms-3">
              <li class="nav-item dropdown">
                <a class="nav-link py-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                  <div class="avatar avatar-md">
                    <svg class="icon icon-lg">
                      <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-user') }}"></use>
                    </svg>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end pt-0">
                  <div class="dropdown-header bg-light py-2">
                    <div class="fw-semibold">
                      Account
                    </div>
                  </div>
                  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <svg class="icon me-2">
                      <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-account-logout') }}"></use>
                    </svg> Logout
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                  </form>
                </div>
              </li>
            </ul>
          </div>
          <div class="header-divider"></div>
        </header>

        {{-- end of Header --}}

        {{-- content --}}

        <div class="body flex-grow-1 px-3">
          <div class="container-fluid">
            @yield('content')
          </div>
        </div>

        {{-- end of content --}}

      </div>
  <!-- Optional JavaScript -->
  <!-- Popper.js first, then CoreUI JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.5/perfect-scrollbar.min.js" integrity="sha512-X41/A5OSxoi5uqtS6Krhqz8QyyD8E/ZbN7B4IaBSgqPLRbWVuXJXr9UwOujstj71SoVxh5vxgy7kmtd17xrJRw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://unpkg.com/@popperjs/core@2"></script>
  <script src="https://unpkg.com/@coreui/coreui/dist/js/coreui.min.js"></script>
  <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
  @livewireScripts
  <script src="https://cdn.jsdelivr.net/gh/livewire/sortable@v0.x.x/dist/livewire-sortable.js"></script>
  @yield('scripts')
  </body>
</html>

