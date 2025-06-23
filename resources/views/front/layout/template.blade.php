<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        {{-- CSRF Token --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="author" content="Rudi Kurniawan" />
        @stack('meta-seo')
        <title>@yield('title')</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ asset('front/img/favicon.ico')}} " />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('front/css/styles.css')}}" rel="stylesheet" />
        <link href="{{ asset('front/css/custom.css')}}" rel="stylesheet" />
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        
        {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        @stack('css')
    </head>
    <body>
       
        @include('front.layout.navbar')

        <!-- Page header with logo and tagline-->
        <header class="py-2 bg-light border-bottom mb-4">
            <div class="container">
                <div class="text-center my-2">
                    <h1 class="fw-bolder">{{ $config['title'] }}</h1>
                    <p class="lead mb-0">{{ $config['caption'] }}</p>
                </div>
            </div>
        </header>

        {{-- <div class="mb-4 conatiner">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6 text-center">
                    <a href="#" target="_blank" rel="noopener noreferrer">
                        <img src="{{ asset('front/img/'.$config['logo']) }}" alt="Header" class="img-fluid" width="30%">
                    </a>
                </div>
                <div class="col-3"></div>
            </div>
        </div> --}}

        @yield('content')

        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; {{ $config['footer'] }} {{ date('Y') }}</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('front/js/scripts.js')}}"></script>

        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

        <script>
        AOS.init();
        </script>
        
        @stack('js')
    </body>
</html>