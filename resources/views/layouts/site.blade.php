<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Makan | Investment</title>
    <!-- Favicon Links -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon.png') }}" alt="Icon 16x16">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicon.png') }}" alt="Icon 32x32">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/images/favicon.png') }}" alt="Icon 96x96">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/images/favicon.png') }}" alt="Icon 57x57">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets/images/favicon.png') }}" alt="Icon 60x60">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/images/favicon.png') }}" alt="Icon 72x72">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/images/favicon.png') }}" alt="Icon 76x76">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/images/favicon.png') }}" alt="Icon 114x114">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/images/favicon.png') }}" alt="Icon 120x120">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/images/favicon.png') }}" alt="Icon 144x144">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/images/favicon.png') }}" alt="Icon 152x152">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/favicon.png') }}" alt="Icon 180x180">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets/images/favicon.png') }}" alt="Icon 192x192">
    <link rel="icon" type="image/png" sizes="512x512" href="{{ asset('assets/images/favicon.png') }}" alt="Icon 512x512">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!--<a href="https://wa.me/971544229992" target="_blank" class="whatsapp">-->
    <!--    <img src="{{ asset('assets/images/whatsapp.png') }}" alt="Whatsapp" title="Whatsapp" loading="lazy">-->
    <!--</a>-->
    <div class="loading flexCenter" id="loader">
        <div class="loader" >
            <div class="loader-square"></div>
            <div class="loader-square"></div>
            <div class="loader-square"></div>
            <div class="loader-square"></div>
            <div class="loader-square"></div>
            <div class="loader-square"></div>
            <div class="loader-square"></div>
        </div>
    </div>
    {{-- Save Your Interest --}}
    <a href="https://wa.me/971544229992" target="_blank" class="interestBtn" data-toggle="modal" data-target="#exampleModal">
        <img src="{{ asset('assets/images/favicon.png') }}" alt="Whatsapp" title="Whatsapp" loading="lazy" style="width: 70px; height: 70px;">
    </a>
    <!-- Modal -->
    <div class="modal fade interestForm" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg ">
        <div class="modal-content bg-dark">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel" data-i18n="interest">Register your interest</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="text-light">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('message') }}" method="POST">
                @csrf
                @method('POST')
                <div class="row mt-3">
                    <div class="col-md-6">
                        <div class="form-group tright toRtl">
                            <label for="name" data-i18n="name">Full Name</label>
                            <input type="text" name="name" data-i18n-placeholder="name" id="name" class="form-control" placeholder="Full Name ..." required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group tright toRtl">
                            <label for="email" data-i18n="email">Email Address</label>
                            <input type="email" name="email" data-i18n-placeholder="email" id="email" class="form-control" placeholder="Email Address ..." required>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <div class="form-group tright toRtl">
                            <label for="subject" data-i18n="subject">Subject</label>
                            <input type="text" name="subject" data-i18n-placeholder="subject" id="subject" class="form-control" placeholder="Subject ..." required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group tright toRtl">
                            <label for="phone" data-i18n="phone">Phone</label>
                            <input type="text" name="phone" data-i18n-placeholder="phone" id="phone" class="form-control" placeholder="Phone ..." required>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <div class="form-group tright toRtl">
                            <label for="message" data-i18n="message">Message</label>
                            <textarea name="message" data-i18n-placeholder="message" id="message" class="form-control" placeholder="Message ..." required></textarea>
                        </div>
                    </div>
                </div>
                <button type="submit" class="makanBtn" data-i18n="submit">Submit</button>
            </form>
        </div>
        </div>
    </div>
    </div>
    <nav class="navbar makanNav navbar-expand-lg navbar-light toRtl" id="nav">
        <a class="navbar-brand navLogo" href="/">
            <img src="{{ asset('/assets/images/logo.png') }}" alt="Navbar Logo" title="Navbar Logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto toRtl tright">
            <li class="nav-item">            
            <a class="nav-link {{Route::is('') ? 'activeNav' : ''}}" data-i18n="home_link" href="/">Home</a>

            </li>
            <li class="nav-item">
                <a class="nav-link {{Route::is('about') ? 'activeNav' : ''}}" data-i18n="aboutUs" href="{{ route('about') }}">About us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{Route::is('services') ? 'activeNav' : ''}}" href="{{ route('services') }}" data-i18n="services_link">Services</a>
            <li class="nav-item">
                <a class="nav-link {{Route::is('partners') ? 'activeNav' : ''}}" data-i18n="blogs_link" href="{{ route('partners') }}">Partners</a>
            </li>
          </ul>
          <div class="navContact flexBetween">
            <div class="call flexCenter ml-2">
                <i class="fa fa-phone ml-2"></i>
                <a href="tel:+971544229992" style="direction: ltr">
                    +971544229992</a>
            </div>
            <a href="{{ route('contact') }}" class="btn makanBtn" data-i18n="contact_link">CONTACT US</a>
                <button onclick="switchLanguage()" class="lang ml-2 mr-2">
                    {{-- <img loading="lazy" id="langImage" onclick="" src="{{ asset('assets/images/ksa.png') }}" alt="Arabic Lang" title="Lang Switcher"> --}}
                    <h1 id="langText">AR</h1>
                </button>
          </div>
        </div>
    </nav>
    @section('home')
    @if (session('success'))
    <div class="alert alertMessage alert-success" role="alert" id="alert-box">
        Thank You, {{ session('success') }}
    </div>
    @endif

    @if (session('error'))
    <div class="alert alertMessage alert-danger" role="alert" id="alert-box">
        Oops, {{ session('error') }}
    </div>
    @endif

    <script>
        // Automatically hide the alert box after 5 seconds
        setTimeout(function() {
            const alertBox = document.getElementById('alert-box');
            if (alertBox) {
                alertBox.style.display = 'none';
            }
        }, 5000);
    </script>

    @yield('home')
    @yield('partners')
    @yield('contact')
    @yield('about')
    @yield('services')

    <footer>
        <div class="row">
            <div class="col-md-4 footerLogoParent" style="border-left: none !important;">

                <div class="brandLogo">
                    <img src="assets/images/footerLogo.png" alt="Footer Logo" title="Footer Logo">
                    <div class="call flexCenter">
                        <i class="fa fa-phone"></i>
                        <a href="tel:+971544229992" class="ml-2">
                            +971544229992</a>
                        </div>
                        <div class="call flexCenter">
                            <i class="fa-regular fa-envelope"></i>
                            <a href="mailto:info@makaninvestment.ae" class="ml-2">info@makaninvestment.ae</a>

                        </div>
                        <div class="socialParent">
                     <ul class="social">
                        <li class="social-item">
                          <a class="social-link" href="https://www.facebook.com/profile.php?id=61567440965605">
                          <i class="fa-brands fa-square-facebook"></i>
                          </a>
                        </li>
                        <li class="social-item">
                          <a class="social-link" href="https://x.com/MakanUAE">
                            <i class="fa-brands fa-x-twitter"></i>
                          </a>
                        </li>

                        <li class="social-item">
                          <a class="social-link" href="https://www.instagram.com/makan.mkt/">
                          <i class="fa-brands fa-instagram"></i>
                          </a>
                        </li>
                        <li class="social-item">
                            <a class="social-link" href="https://www.tiktok.com/@makan.mkt.uae">
                              <i class="fa-brands fa-tiktok"></i>
                            </a>
                        </li>
                        <li class="social-item">
                            <a class="social-link" href="https://www.snapchat.com/add/makanmktuae?share_id=cYM6Sectg_g&locale=en-US">
                              <i class="fa-brands fa-snapchat"></i>
                            </a>
                        </li>    
                        <li class="social-item">
                            <a class="social-link" href="https://www.linkedin.com/company/makan-investment/?viewAsMember=true">
                              <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                        </li>
                      </ul> 
                </div>
                    </div>
            </div>
            <div class="col-md-4 footerLinksParent">
                <div class="footerLinks">
                    <a href="/" data-i18n="home_link">Home</a>
                    <a href="{{ route('about') }}" data-i18n="aboutUs">About us</a>
                    <a href="{{ route('services') }}" data-i18n="services_link">Services</a>
                    <a href="{{ route('partners') }}" data-i18n="blogs_link">Partners</a>
                    <a href="{{ route('contact') }}" data-i18n="contact_link">Contact us</a>
                </div>
            </div>
            <div class="col-md-4 footerFormHome">
                <h5 class="f24 footerText fBold tright footerFormText" data-i18n="footerTitle">subscribe now to stay updated and enjoy premium opportunities tailored just for you!</h5>
                <form action="{{ route('subscribe') }}" class="" method="POST">
                    <input type="text" data-i18n-placeholder="enterName" name="name" class="pr-5 nameInput" placeholder="Your Name" required>
                    @csrf
                    <input type="text" data-i18n-placeholder="email" name="email" class="pr-5" placeholder="Your Email" required>
                    <button type="submit" class="makanBtn" data-i18n="submit">Submit</button>
                </form>

        

            </div>
        </div>
    </footer>
<script>
    setInterval(() => {
        document.querySelector("#homeSliderBtn").click();
    }, 5000);
    $(document).ready(function () {
        $('.homeCarousel').carousel({
  interval: 1000
})
    $('#carouselExampleControls2').carousel();
});
</script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.slim.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
