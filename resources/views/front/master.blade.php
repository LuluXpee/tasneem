<!DOCTYPE html>
<html lang="{{ app()->currentLocale() }}">
@foreach ($contacts as $contact )


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Document Title -->
    @if (app()->currentLocale() == 'ar')
    <title>مياه تسنيم</title>
@else
<title>Tasneem Water</title>
@endif
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="favicon.png">

    <!-- CSS Files -->
    <!--==== Google Fonts ====-->
    <link href="https://fonts.googleapis.com/css?family=Exo+2:400,500,600,700%7CSchoolbell" rel="stylesheet">

    <!--==== Bootstrap css file ====-->
    <link rel="stylesheet" href="{{asset('frontasset/css/bootstrap.min.css')}}">

    <!--==== Font-Awesome css file ====-->
    <link rel="stylesheet" href="{{asset('frontasset/css/font-awesome.min.css')}}">

    <!-- Owl Carusel css file -->
    <link rel="stylesheet" href="{{asset('frontasset/plugins/owl-carousel/owl.carousel.min.css')}}">

    <!-- camera css -->
<link rel="stylesheet" href="{{asset('frontasset/plugins/camera/camera.min.css')}}">

    <!-- ====video poppu css==== -->
<link rel="stylesheet" href="{{asset('frontasset/plugins/Magnific-Popup/magnific-popup.css')}}">

    <!--==== Style css file ====-->
<link rel="stylesheet" href="{{asset('frontasset/css/style.css')}}">

    <!--==== Responsive css file ====-->
<link rel="stylesheet" href="{{asset('frontasset/css/responsive.css')}}">

    <!--==== Custom css file ====-->
    <link rel="stylesheet" href="{{asset('frontasset/css/custom.css')}}">

      @if (app()->currentLocale() == 'ar')
      <style>
           body {
               direction: rtl;
               text-align: right;
           }

           .footer-widget {
            text-align: left !important;

           }


      </style>

      @endif

</head>

<body>
    <!-- Preloader -->
    <div class="preLoader">
        <div class="preload-img">
            <img src='{{asset('frontasset/img/preloader.gif')}}' alt="" class="pre-img">
        </div>
    </div>
    <!-- End Of Preloader -->

    <!-- Main header -->
    <header class="header">
        <!-- Start Header Navbar-->
        <div class="main-header">
            <div class="main-menu-wrap">
                <div class="container-fluide">

                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-6">
                            <!-- Logo -->
                            <div class="logo">
                                @if (app()->currentLocale() == 'ar')
                                <a href="{{route('home')}}">
                                    <img src="{{asset('frontasset/img/logo1.png')}}" data-rjs="2" alt="مياه تسنيم">
                                </a>
                                @else
                                <a href="{{route('home')}}">
                                    <img src="{{asset('frontasset/img/enlogo.png')}}" data-rjs="2" alt="Tasneem Water" style="width: 115px;">
                                </a>
                                @endif

                            </div>
                            <!-- End of Logo -->
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-4 col-sm-4 col-6 menu-button">
                            <div class="menu--inner-area clearfix">
                                <div class="menu-wraper">
                                    <nav>
                                        <!-- Header-menu -->
                                        <div class="header-menu dosis">
                                            <ul class="d-md-flex">
                                                <li class="{{ request()->routeIs('home') ? 'active' : '' }}"><a href="{{route('home')}}">{{__('general.Home')}} <img src="{{asset('frontasset/img/line2.png')}}" alt=""></a> </li>
                                                <li class="{{ request()->routeIs('about') ? 'active' : '' }}"><a href="{{route('about')}}">{{__('general.About')}} <img src="{{asset('frontasset/img/line2.png')}}" alt=""></a></li>
                                                <li class="{{ request()->routeIs('services') ? 'active' : '' }}"><a href="{{route('services')}}">{{__('general.Services')}}<img src="{{asset('frontasset/img/line2.png')}}" alt=""></a></li>
                                                <li class="{{ request()->routeIs('contact') ? 'active' : '' }}"><a href="{{route('contact')}}">{{__('general.Contact')}}<img src="{{asset('frontasset/img/line2.png')}}" alt=""></a></li>
                                            </ul>
                                        </div>
                                        <!-- End of Header-menu -->
                                    </nav>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-4 flex-md-column align-item-center">
                            <div class="urgent-call d-flex text-right">
                                <span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid" width="24" height="24" viewBox="0 0 24 24" class="svg replaced-svg">
   <image xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAMAAADXqc3KAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABxVBMVEUAAAAAw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0Aw+0AAACOml73AAAAlXRSTlMAP8p4PAVormIDDVaj+fWoGwq199j0qwgBFmXt50UOsvZPUQsmvGyCUlNjEpP9Q+qcVIhB3PDiGL3VMLN77qYGdTbeojLZuBMU/JrfDNcjMfgCrEj6WAnRt9qtu0Y0UAdOX5v+N7bkIcjlKx3p0jonzoV8aS3jgHERma8kYfuloYF+bacsWeZ0BFtwF5jTSlqkRMKJS1m7nk8AAAABYktHRACIBR1IAAAACXBIWXMAAAsSAAALEgHS3X78AAABe0lEQVQoz11Q9z9CcRS94jWkjFJRijIKiRAlDWSLbCIje++9sve+/6/ve/Uq3R/uPeee9z2fcx9AXCUhJzklRikujy9gUKowTSROz4jsM7Mk0myZPEwUOblKVR4D1Zr8AtCKeTrWoLAIi+lZgnrSDSIeeaOVlZYByMuNFWRlqmS+qzKaAaprai1a4lekqgNAQ9ih3kp3WwPaiVujwwlGF7O3KR3MFJixAIArcUNTM81bLJ5ISkWrpQ3aO1zQ2UXydPdIvWyq3j4++Po5MDA4BDA8MkpFDx4bB9BLgPJ7CJlAblSYDABMuQGmcYaw2eAcJJRifmERIGNpeSVRWV3LchJlfXmDkE3N1raAVQK4Q7qXg7vUnmrfb0xzssoBHpJ+dIwnlpFTODu/iPxr+lzmfqHVv0oGHy997JurYIh21oVNSvE6msCON7exPAvjMXx3r3p4jOAnfI5L/fIqeXtX0+gDPymIr69v9PwM/ZrxRg7/i/rtlCKaQpkE/wHFUUci3Ik7+gAAAABJRU5ErkJggg==" width="24" height="24"></image>
</svg></span><a href="https://wa.me/00972595788888" class="pr-2">{{$contact->Phone}}</a>
                            </div>
                            <div class="ms-auto">
                            <ul>
                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                @if ($localeCode != app()->currentLocale())
                                <li class="list-unstyled">
                                    <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                        {{ $properties['native'] }}
                                    </a>
                                </li>
                                @endif

                                @endforeach
                            </ul>
                        </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Navbar-->
    </header>
    <!-- End of Main header -->

  @yield('content')
    <!-- End of our location -->

    <!-- our partner -->

    <!-- End of our partner -->

    <!-- footer -->
    <footer class="footer secondery-bg">
        <div class="footer-top pt-110 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <!-- footer widget -->
                        <div class="footer-widget">
                            <div class="widget-title" style="text-align: center;">
                                <h3>{{__('general.Address')}}</h3>
                            </div>
                            @if (app()->currentLocale() == 'ar')
                           <div class="text-center">
                            <span >{{$contact->ARLocation}}</span>
                            <span >، فلسطين </span>
                           </div>
                            @else
                            <span>{{$contact->ENLocation}}</span>
                            <span>, Palestine</span>
                            @endif

                        </div>
                        <!-- End of footer widget -->
                    </div>

                    <div class="col-md-4">
                        <!-- footer widget -->
                        <div class="footer-widget text-center">
                            <div class="widget-title " style="text-align: center;">
                                <h3>{{__('general.Follow')}}</h3>
                            </div>
                            <div class="footer-social-area text-center">
                                <ul class="social-list mb--0 list-unstyled">
                                    <li>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.facebook.com/699015830224185/posts/2816789231780157/?d=n"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-youtube"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End of footer widget -->
                    </div>

                    <div class="col-md-4">
                        <!-- footer widget -->
                        <div class="footer-widget text-right">
                            <div class="widget-title" style="text-align: center; padding-right : 85px;">
                                <h3>{{__('general.Contacts')}}</h3>
                            </div>
                            <div class="p-2">
                            <span style="font-size: x-large; padding: 15px;"> {{$contact->Phone}} </span><span><i class="fa fa-mobile fa-2x" aria-hidden="true"></i></span>
                            </div>
                            <div class="p-2">
                                <span style="font-size: x-large;padding: 10px;">{{$contact->Telephone}}</span><span><i class="fa fa-phone fa-lg" aria-hidden="true"></i></span>
                            </div>
                            <div class="p-2">
                                <span style="font-size: x-large;padding: 12px;">{{$contact->Fax}}</span><span><i class="fa fa-fax fa-lg" aria-hidden="true"></i></span>

                            </div>
                            <div class="p-2">
                                <span style="font-size: x-large;padding: 12px;">{{$contact->Email}}</span><span><i class="fa fa-envelope-o fa-lg" aria-hidden="true"></i></span>

                            </div>
                            <div class="p-2">
                                <span style="font-size: x-large;padding: 12px;">{{$contact->Website}}</span><span><i class="fa fa-globe fa-lg" aria-hidden="true"></i></span>

                            </div>
                            <div class="d-flex">
                                @if (app()->currentLocale() == 'ar')
                                <span style="font-size: large; padding: 12px; text-align:center;">{{$contact->ARLocation}}</span><span><i class="fa fa-map-marker fa-2x" aria-hidden="true"></i></span>
                                @else
                                <span style="font-size: large; padding: 12px;">{{$contact->ENLocation}}</span><span><i class="fa fa-map-marker fa-2x" aria-hidden="true"></i></span>
                                    @endif
                            </div>

                        </div>
                        <!-- End of footer widget -->
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom text-center">
            <div class="footer-bottom-text">
                <p>© Copyright 2021 by <a href="#">Lulu Xpee</a></p>
            </div>
        </div>
    </footer>
    <!-- End of footer -->

    <!-- back to top -->
    <div class="back-to-top">
        <a href="#"><i class="fa fa-chevron-up"></i></a>
    </div>
    <!-- back to top -->


    <!-- JS Files -->
   <!-- ==== JQuery 3.3.1 js file==== -->
    <script src="{{asset('frontasset/js/jquery-3.3.1.min.js')}}"></script>

    <!-- ==== Bootstrap js file==== -->
    <script src="{{asset('frontasset/js/bootstrap.bundle.min.js')}}"></script>

    <!-- ==== JQuery Waypoint js file==== -->
    <script src="{{asset('frontasset/plugins/waypoints/jquery.waypoints.min.js')}}"></script>

    <!-- ==== Parsley js file==== -->
    <script src="{{asset('frontasset/plugins/parsley/parsley.min.js')}}"></script>

    <!-- ==== Ratina js file==== -->
    <script src="{{asset('frontasset/plugins/retinajs/retina.min.js')}}"></script>
   <!-- ==== parallax js==== -->
    <script src="{{asset('frontasset/plugins/parallax/parallax.js')}}"></script>

    <!-- ==== Owl Carousel js file==== -->
    <script src="{{asset('frontasset/plugins/owl-carousel/owl.carousel.min.js')}}"></script>

    <!-- ==== Menu  js file==== -->
    <script src="{{asset('frontasset/js/menu.min.js')}}"></script>

    <!-- ===video popup=== -->
    <script src="{{asset('frontasset/plugins/Magnific-Popup/jquery.magnific-popup.min.js')}}"></script>

    <!-- ====Counter js file=== -->
    <script src="{{asset('frontasset/plugins/waypoints/jquery.counterup.min.js')}}"></script>

    <!-- cammera js -->
    <script src="{{asset('frontasset/plugins/camera/camera.min.js')}}"></script>

    <!-- easing js -->
    <script src="{{asset('frontasset/js/easing.js')}}"></script>

     <!--==== google map api key ====-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2D8wrWMY3XZnuHO6C31uq90JiuaFzGws"></script>

    <!-- ==== Script js file==== -->
    <script src="{{asset('frontasset/js/scripts.js')}}"></script>

    <!-- ==== Custom js file==== -->
    <script src="{{asset('frontasset/js/custom.js')}}"></script>

</body>
@endforeach
</html>
