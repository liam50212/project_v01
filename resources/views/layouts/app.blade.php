<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('css')
</head>
<body>
    <div id="app"  class="overflow-auto" style="z-index: 9999">
        <nav class="navbar navbar-expand-md navbar-light bg-light shadow-sm">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">&#5176;</a>
                <button class="navbar-toggler text-light" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
        
        {{-- <main class="py-4 flex-grow-1 d-flex align-items-center order-2">
            @yield('content')
        </main> --}}
        
        {{-- Sidebar: display on either one of the following two conditions - (1) when screen width is equal to or greater than 992px; (2) a user presses/clicks on the navbar toggler when screen width is below 992px --}}
        <aside class="sidebar bg-secondary px-3 py-5"style="z-index: 999">
            <h2 class="px-3 mb-4 text-light">{{ __('Ｎavigation Menu') }}
                <span class="close-nav pl-5">&#9587</span>
            </h2>
        
            <ul class="sidebar-nav p-0">
                <a class="nav-link text-light" href="{{ url('/') }}">{{ __('Frontpage') }}</a>
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link text-light" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    {{-- @canany (['view', 'update', 'delete'], \App\Product::class) --}}
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">{{ __('Product Information') }}</a>
                        </li>
                    {{-- @endcanany --}}
                    {{-- @canany ('create', \App\Product::class) --}}
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">{{ __('Create New Product') }}</a>
                        </li>
                    {{-- @endcanany --}}
                    {{-- @canany (['create', 'view', 'update', 'delete'], \App\ProductPurchaseOrder::class) --}}
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">{{ __('Purchase Orders') }}</a>
                        </li>
                    {{-- @endcanany --}}
                    {{-- @canany (['create', 'view', 'update', 'delete'], \App\ProductSalesOrder::class) --}}
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">{{ __('Sales Orders') }}</a>
                        </li>
                    {{-- @endcanany --}}
                    {{-- @canany (['create', 'view', 'update', 'delete'], \App\ProductStock::class) --}}
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">{{ __('Product Stocks') }}</a>
                        </li>
                    {{-- @endcanany --}}
                    {{-- @canany (['create', 'view', 'update', 'delete'], \App\CanceledOrder::class) --}}
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">{{ __('Canceled Orders') }}</a>
                        </li>
                    {{-- @endcanany --}}
                    {{-- @canany (['create', 'view', 'update', 'delete'], \App\ProductSalesOrder::class) --}}
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">{{ __('Add Cancel Order') }}</a>
                        </li>
                    {{-- @endcanany --}}
                    {{-- @canany (['create', 'view', 'update', 'delete'], \App\ProductStock::class) --}}
                    <li class="nav-item">
                            <a class="nav-link text-light" href="#">{{ __('Product Stock Locations') }}</a>
                        </li>
                    {{-- @endcanany --}}
                    {{-- @canany (['create', 'view', 'update', 'delete'], \App\Vendor::class) --}}
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">{{ __('Vendor Information') }}</a>
                        </li>
                    {{-- @endcanany --}}
                    {{-- @canany (['create', 'view', 'update', 'delete'], \App\VendorBonus::class) --}}
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">{{ __('Vendor Bonus System') }}</a>
                        </li>
                    {{-- @endcanany --}}
                    {{-- @canany (['create', 'view', 'update', 'delete'], \App\User::class) --}}
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">{{ __('User Management') }}</a>
                        </li>
                    {{-- @endcanany --}}
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
        
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                @endguest
            </ul>
        </aside>
        <main class="py-4">
            @yield('content')
            @yield('main')
        </main>
    </div>
        @yield('js') 
</body>
</html>
