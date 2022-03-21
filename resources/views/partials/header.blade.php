<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container-fluid d-flex justify-content-between align-items-center">

        <h1 class="logo me-auto me-lg-0"><a href="{{ route('index') }}">Kelly</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                @if ($title == 'Index')
                    <li><a class="active" href="{{ route('index') }}">Home</a></li> {{-- Active --}}
                    <li><a href="{{ route('about') }}">About</a></li>
                    <li><a href="{{ route('resume') }}">Resume</a></li>
                    <li><a href="{{ route('services') }}">Services</a></li>
                    <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                @elseif ($title == 'About')
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li><a class="active" href="{{ route('about') }}">About</a></li> {{-- Active --}}
                    <li><a href="{{ route('resume') }}">Resume</a></li>
                    <li><a href="{{ route('services') }}">Services</a></li>
                    <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                @elseif ($title == 'Resume')
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About</a></li>
                    <li><a class="active" href="{{ route('resume') }}">Resume</a></li> {{-- Active --}}
                    <li><a href="{{ route('services') }}">Services</a></li>
                    <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                @elseif ($title == 'Services')
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About</a></li>
                    <li><a href="{{ route('resume') }}">Resume</a></li>
                    <li><a class="active" href="{{ route('services') }}">Services</a></li> {{-- Active --}}
                    <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                @elseif ($title == 'Portfolio')
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About</a></li>
                    <li><a href="{{ route('resume') }}">Resume</a></li>
                    <li><a href="{{ route('services') }}">Services</a></li>
                    <li><a class="active" href="{{ route('portfolio') }}">Portfolio</a></li> {{-- Active --}}
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                @elseif ($title == 'Contact')
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About</a></li>
                    <li><a href="{{ route('resume') }}">Resume</a></li>
                    <li><a href="{{ route('services') }}">Services</a></li>
                    <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
                    <li><a class="active" href="{{ route('contact') }}">Contact</a></li> {{-- Active --}}
                @endif
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        <div class="header-social-links">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
        </div>

    </div>

</header><!-- End Header -->
