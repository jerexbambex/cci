<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta name="robots" content="all" />
    <meta name="google-site-verification" content="CQv22AZODJOBN1gpO5rBMsRue1-UIJYU5tkY4AkxCTs" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cambridge College Ikeja- A-level college in Lagos Nigeria</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    @include('includes._head')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cambridge College Ikeja" />
    <meta name="description" content="Cambridge College Ikeja, A-Levels in Lagos, Nigeria. The Advanced Level in Lagos, Nigeria" />
    <meta name="keywords" content="A-Levels, A-Level, A Level, A-Levels in Nigeria, A-Levels in Lagos, Advanced Level, Advanced Levels in Nigeria, Advanced Levels in Lagos, Best Schools in Nigeria, Admissions, Cambridge Lagos, Cambridge Ikeja" />
    <meta name="author" content="Oluwatosin" />
    <meta name="email" content="info@cambridgecollegeikeja.com" />
    <meta name="website" content="https://cambridgecollegeikeja.com/" />
    {{-- <meta name="Version" content="v2.2" /> --}}
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-178737623-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-178737623-1');
</script>

</head>

<body>

    <div class="preloader-activate preloader-active open_tm_preloader">
        <div class="preloader-area-wrap">
            <div class="spinner d-flex justify-content-center align-items-center h-100">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>

    @include('includes._header')

    <div class="site-wrapper-reveal">

        @yield('content')

        @include('includes._footer')

        <!--====================  scroll top ====================-->
        <a href="#" class="scroll-top" id="scroll-top">
            <i class="arrow-top fal fa-long-arrow-up"></i>
            <i class="arrow-bottom fal fa-long-arrow-up"></i>
        </a>
        <!--====================  End of scroll top  ====================-->

        <!--====================  mobile menu overlay ====================-->
        <div class="mobile-menu-overlay" id="mobile-menu-overlay">
            <div class="mobile-menu-overlay__inner">
                <div class="mobile-menu-overlay__header">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-md-6 col-8">
                                <!-- logo -->
                                <div class="logo">
                                    <a href="{{ route('frontend.index') }}">
                                        <img src="assets/images/logo/logo-dark.png" class="img-fluid" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 col-4">
                                <!-- mobile menu content -->
                                <div class="mobile-menu-content text-right">
                                    <span class="mobile-navigation-close-icon" id="mobile-menu-close-trigger"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mobile-menu-overlay__body">
                    <nav class="offcanvas-navigation">
                        <ul>
                            <li class="">
                                <a href="{{ route('frontend.index') }}">Home</a>
                            </li>
                            <li class="">
                                <a href="{{ route('frontend.about') }}">About us</a>
                            </li>
                            <li class="">
                                <a href="{{ route('frontend.why') }}"><span>Why us</span></a>
                            </li>
                            <li class="">
                                <a href="{{ route('frontend.programs') }}"><span>Programs</span></a>
                            </li>
                            <li class="">
                                <a href="{{ route('frontend.event') }}">Events</a>
                            </li>
                            <li class="">
                                <a href="{{ route('frontend.gallery') }}">Gallery</a>
                            </li>
                            <li class="">
                                <a href="{{ route('frontend.leadership') }}">Leadership</a>
                            </li>
                            <li class="">
                                <a href="{{ route('frontend.contact') }}">Contact us</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!--====================  End of mobile menu overlay  ====================-->

    </div>




    @include('includes._scripts')
    <script type="text/javascript">
        $(document).ready(function(){
            $('#myModal').modal('show');
        });
        
        // $('#myModal').on('shown.bs.modal', function () {
        //     $('#myInput').trigger('focus')
        // })
    </script>
    <!-- StackWhats.com widget code --> 
    <script async src='https://stackwhats.com/pixel/adf6cc5de01cfc78de1fb6287b83c6'></script>
    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
    <div class="elfsight-app-cdf514c9-cbc6-49f0-85a5-514943e911b9"></div>

  <script nonce="bjvqXdaHDW6uEWt1zlaL9Q==">
//<![CDATA[
    if (typeof Cookiebot !== 'undefined' && Cookiebot.consent && Cookiebot.consent.marketing) {
      enableGoogleTagManager();
    } else {
      window.addEventListener('CookiebotOnAccept', function (e) {
        if (Cookiebot.consent.marketing) {
          enableGoogleTagManager();
        }
      }, false);
    }

  function enableGoogleTagManager() {
    var gtmId = 'googlea0942bb3e4dbe9cf';
    // Google Tag Manager Tracking Code
    (function(w,d,s,l,i) {
      w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});
      var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';
      j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;
      f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer',gtmId);


    window.addEventListener('load', function() {
      window.dataLayer.push({
        event: 'pinterestReady'
      });
    });
  }

//]]>
</script>
</body>

</html>
