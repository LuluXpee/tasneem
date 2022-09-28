@extends('front.master')
@section('content')
  <!-- home banner area -->
  <div class="banner-area-inner mr-sm-0">
    <div class="banner-inner-area banner-area1">
        <div class="container">
            @foreach ($sliders as $slider )

            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-10">
                    <!-- banner text -->
                    <div class="banner-text-wrap text-center">
                          @if (app()->currentLocale() == 'ar')
                        <span class="schoolbell"  data-animate="fadeInUp" data-delay=".4">{{$slider->Banner_title1AR}}</span>
                        <h1  data-animate="fadeInUp" data-delay=".55">{{$slider->Banner_title2AR}}</h1>
                         @else
                         <span class="schoolbell"  data-animate="fadeInUp" data-delay=".4">{{$slider->Banner_title1EN}}</span>
                         <h1  data-animate="fadeInUp" data-delay=".55">{{$slider->Banner_title2EN}}</h1>
                         @endif
                    </div>
                    <!-- End of banner text -->
                    <div class="banner-image"  data-trigger="parallax_layers">
                        <div class="row">
                            <div class="col-12  col-sm-">
                                <img src="{{ asset('uploads/'. $slider->image) }}" class="bottle"  alt="" >
                                <div class="figure-caption">
                                    <div class="image-sell-offer">
                                        <h5><span>{{__('general.Free')}}</span> {{__('general.Delivery')}}</h5>
                                    </div>
                                </div>
                                <div class="banner-image-wrap">
                                    <img src="{{asset('frontasset/img/banner/ice.png')}}" alt="" class="ice2 img-fluid" data-depth="0.3">
                                    <img src="{{asset('frontasset/img/banner/ice.png')}}" alt="" class="ice1 img-fluid" data-depth="0.3">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</div>
<!-- End of home banner area -->

<!-- feature area -->
<section class="pt-70 pb-80 mr-sm-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <!-- section title -->
                <div class="section-title text-center type3">
                    <span class="schoolbell">{{__('general.Welcome')}}</span>
                    <h2>{{__('general.Trusted')}}</h2>
                    <p>{{__('general.Trusted2')}}</p>
                </div>
                <!-- End of section title -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <!-- single feature inner -->
                <div class="single-feature-inner text-center">
                    <div class="feature-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512.003 512.003" style="enable-background:new 0 0 512.003 512.003;" xml:space="preserve" class="svg replaced-svg">
    <g>
<g>
    <path d="M378.958,217.879c-3.91-3.91-10.24-3.91-14.15,0c-3.9,3.9-3.9,10.23,0,14.14c3.91,3.91,10.24,3.91,14.15,0    C382.859,228.109,382.859,221.779,378.958,217.879z"></path>
</g>
</g>
<g>
<g>
    <path d="M503.161,65.389L446.589,8.818c-11.724-11.722-30.697-11.726-42.423,0l-18.14,18.14    c-7.438,7.438-10.285,17.911-8.041,27.863l-82.012,14.471c-18.29,3.237-34.885,11.882-47.985,24.994l-17.532,17.522    c-11.546,11.546-16.251,27.381-14.121,42.424c-15.155-2.14-30.858,2.565-42.438,14.144    c-11.563,11.556-16.291,27.246-14.152,42.433c-15.149-2.131-30.848,2.568-42.419,14.139    c-11.234,11.234-16.351,26.789-14.141,42.449c-15.045-2.132-30.881,2.573-42.429,14.12l-40.291,40.281    c-27.287,27.289-27.288,71.701,0.001,99.003l70.712,70.711c27.297,27.284,71.706,27.291,99.002-0.002l40.279-40.29    c11.548-11.548,16.253-27.387,14.119-42.433c15.591,2.199,31.173-2.859,42.45-14.136c11.544-11.544,16.248-27.379,14.117-42.425    c15.508,2.19,31.114-2.794,42.454-14.145c11.545-11.545,16.249-27.378,14.119-42.42c15.655,2.21,31.214-2.903,42.454-14.143    l17.515-17.524c13.118-13.106,21.762-29.702,24.999-47.997l14.47-82.005c9.933,2.239,20.41-0.587,27.864-8.041l18.14-18.14    C514.885,96.087,514.887,77.114,503.161,65.389z M216.316,437.078l-40.279,40.289c-19.492,19.493-51.218,19.492-70.718,0    L34.61,406.66c-19.493-19.502-19.493-51.227-0.002-70.719l40.291-40.281c11.697-11.698,30.73-11.698,42.428,0l98.99,98.989    C228.015,406.347,228.015,425.38,216.316,437.078z M272.885,380.508c-11.692,11.692-30.686,11.741-42.427,0l-98.99-98.99    c-11.721-11.722-11.724-30.703,0.001-42.428c11.713-11.714,30.681-11.718,42.419-0.007c0.003,0.003,0.005,0.005,0.008,0.008    l98.986,98.985l0.001,0.001c0,0,0,0,0,0.001C284.578,349.781,284.58,368.814,272.885,380.508z M329.453,323.942    c-11.711,11.725-30.707,11.727-42.424-0.004l-98.993-98.992c-11.728-11.72-11.734-30.698,0.003-42.426    c11.729-11.729,30.687-11.731,42.418,0l99,99C341.153,293.214,341.153,312.243,329.453,323.942z M422.991,212.518    c-2.518,14.229-9.24,27.137-19.446,37.333l-17.518,17.527c-11.697,11.698-30.73,11.698-42.428,0l-99-99    c-11.697-11.698-11.697-30.73-0.002-42.426l17.535-17.525c10.19-10.2,23.099-16.922,37.322-19.44l90.254-15.925l49.207,49.208    L422.991,212.518z M489.018,93.669l-18.14,18.14c-3.908,3.907-10.229,3.908-14.138,0l-56.57-56.571    c-3.907-3.909-3.908-10.229,0.001-14.138l18.14-18.14c3.909-3.908,10.23-3.907,14.138,0l56.569,56.571    C492.919,83.433,492.933,89.752,489.018,93.669z"></path>
</g>
</g>
    <g>
<g>
    <path d="M505.415,378.782l-44.56-87.299c-1.709-3.347-5.149-5.454-8.907-5.454c-3.758,0-7.198,2.107-8.907,5.454l-44.557,87.295    c-20.252,39.621,8.607,87.251,53.464,87.251C496.797,466.029,525.666,418.407,505.415,378.782z M451.948,446.029    c-29.934,0-49.128-31.79-35.652-58.154l35.652-69.85l35.655,69.854C501.062,414.214,481.911,446.029,451.948,446.029z"></path>
</g>
    </g>
<g>
<g>
    <path d="M350.671,189.588l-48.28-48.28c-3.906-3.905-10.236-3.905-14.143,0c-3.905,3.905-3.905,10.237,0,14.142l48.28,48.28    c3.906,3.905,10.236,3.905,14.143,0C354.576,199.824,354.576,193.493,350.671,189.588z"></path>
</g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg></div>
                    <h4>{{__('general.Soft')}}</h4>

                </div>
                <!-- End of single feature inner -->
            </div>

            <div class="col-md-6 col-lg-3">
                <!-- single feature inner -->
                <div class="single-feature-inner text-center">
                    <div class="feature-icon"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 398.9 398.9" style="enable-background:new 0 0 398.9 398.9;" xml:space="preserve" class="svg replaced-svg">
<g transform="translate(0 -540.36)">
<g>
    <g>
        <path d="M350.95,572.86c-0.1-11.5-15-19.2-48.1-25c-27.5-4.8-64.3-7.5-103.4-7.5s-75.9,2.7-103.4,7.5     c-33.1,5.8-47.9,13.5-48.1,24.9c0,0.1,0,0.1,0,0.2c0,0.7,0.1,1.4,0.2,2l33,333.7c1,10.8,13.6,18.3,39.5,23.7     c21.3,4.5,49.7,6.9,80.1,6.9c29.6,0,57.6-2.7,78.9-7.6c25.3-5.8,37.8-13.8,38.2-24.6l16.4-165.2c0.1-0.5,0.1-1,0.2-1.5     l16.3-165.3l0,0c0.1-0.7,0.2-1.4,0.2-2.1V572.86z M302.85,906.06c0,0.1,0,0.2,0,0.4c-1.1,1.8-8.3,7.1-30.3,11.6     c-19.8,4.1-45.3,6.4-71.8,6.4c-27.7,0-53.9-2.1-73.8-6c-22.6-4.4-29.8-9.5-30.9-11.3l-14.8-149.7c6.8,2.8,15.7,5.3,26.8,7.5     c24.6,4.8,57.1,7.5,91.4,7.5s66.8-2.7,91.4-7.5c11.1-2.2,19.9-4.7,26.7-7.5L302.85,906.06z M283.15,751.16     c-23,4.1-52.8,6.3-83.7,6.3s-60.6-2.2-83.7-6.3c-23.2-4.1-32.8-8.9-35.6-11.3c2.8-2.4,12.4-7.2,35.6-11.3     c23-4.1,52.8-6.3,83.7-6.3s60.6,2.2,83.7,6.3c23.2,4.1,32.7,8.9,35.6,11.3C315.95,742.26,306.35,747.06,283.15,751.16z      M321.05,723.76c-7.2-3.5-17.1-6.4-30.2-9c-24.6-4.8-57.1-7.5-91.4-7.5s-66.8,2.7-91.4,7.5c-13,2.6-23,5.5-30.1,9l-13.2-133.8     c7.6,3.1,18,5.7,31.4,8.1c27.5,4.8,64.3,7.5,103.4,7.5c39.1,0,75.9-2.7,103.4-7.5c13.4-2.3,23.7-5,31.4-8.1L321.05,723.76z      M294.65,584.26c-26,4.1-59.8,6.3-95.2,6.3s-69.2-2.2-95.2-6.3c-27.3-4.3-37-9.1-40.2-11.3c3.2-2.2,12.9-7,40.2-11.3     c26-4.1,59.8-6.3,95.2-6.3s69.2,2.2,95.2,6.3c27.3,4.3,37,9.1,40.2,11.3C331.65,575.16,322.05,579.96,294.65,584.26z"></path>
        <path d="M159.25,892.06l-29.9-7.6l-7.9-36.9c-0.9-4.1-4.9-6.7-8.9-5.8c-4.1,0.9-6.7,4.9-5.8,8.9l8.9,41.4c0.6,2.8,2.7,5,5.5,5.7     l34.4,8.8c0.7,0.1,1.3,0.2,1.9,0.2v0c3.3,0,6.3-2.3,7.2-5.6C165.65,897.16,163.25,893.06,159.25,892.06z"></path>
    </g>
</g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg></div>
                    <h4>{{__('general.Cholorine') }}</h4>

                </div>
                <!-- End of single feature inner -->
            </div>

            <div class="col-md-6 col-lg-3">
                <!-- single feature inner -->
                <div class="single-feature-inner text-center">
                    <div class="feature-icon"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve" class="svg replaced-svg">
<g>
<g>
    <path d="M45,18.9V10h3.6c1.3,0,2.4-1.3,2.4-3V1c0-0.6-0.4-1-1-1H28c-0.6,0-1,0.4-1,1v6c0,1.7,1.1,3,2.4,3H33v8.9    C24.1,21.6,18,29.7,18,39c0,11.6,9.4,21,21,21s21-9.4,21-21C60,29.7,53.9,21.5,45,18.9z M29,7V6h14V4H29V2h20v5c0,0.6-0.3,1-0.4,1    H44H34h-4.6C29.3,8,29,7.6,29,7z M39,58c-10.5,0-19-8.5-19-19c0-8.6,5.8-16.2,14.2-18.3c0.5-0.1,0.8-0.5,0.8-1V10h8v9.7    c0,0.5,0.4,0.9,0.8,1C52.1,22.8,58,30.4,58,39C58,49.5,49.5,58,39,58z"></path>
    <path d="M54,38H24c-0.6,0-1,0.4-1,1c0,8.8,7.2,16,16,16s16-7.2,16-16C55,38.4,54.6,38,54,38z M39,53c-7.4,0-13.5-5.7-14-13h28    C52.4,47.3,46.4,53,39,53z"></path>
    <path d="M4,57V34h12v-2H2v-2h16v-2H1c-0.6,0-1,0.4-1,1v4c0,0.6,0.4,1,1,1h1v23c0,1.7,1.3,3,3,3h20v-2H5C4.4,58,4,57.6,4,57z"></path>
    <polygon points="12,42 12,40 9,40 9,37 7,37 7,55 9,55 9,52 12,52 12,50 9,50 9,47 12,47 12,45 9,45 9,42   "></polygon>
    <rect x="30" y="42" width="2" height="2"></rect>
    <rect x="31" y="31" width="2" height="2"></rect>
    <rect x="39" y="32" width="2" height="2"></rect>
    <rect x="36" y="25" width="2" height="2"></rect>
    <rect x="3" y="23" width="2" height="2"></rect>
    <rect x="15" y="23" width="2" height="2"></rect>
    <rect x="9" y="18" width="2" height="2"></rect>
    <rect x="14" y="12" width="2" height="2"></rect>
    <rect x="4" y="10" width="2" height="2"></rect>
    <rect x="44" y="29" width="2" height="2"></rect>
    <rect x="50" y="34" width="2" height="2"></rect>
    <rect x="25" y="34" width="2" height="2"></rect>
    <rect x="33" y="46" width="2" height="2"></rect>
    <rect x="38" y="43" width="2" height="2"></rect>
    <rect x="38" y="49" width="2" height="2"></rect>
    <rect x="43" y="46" width="2" height="2"></rect>
    <rect x="46" y="42" width="2" height="2"></rect>
</g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg></div>
                    <h4>{{__('general.Pure')}}</h4>

                </div>
                <!-- End of single feature inner -->
            </div>

            <div class="col-md-6 col-lg-3">
                <!-- single feature inner -->
                <div class="single-feature-inner text-center">
                    <div class="feature-icon"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" class="svg replaced-svg">
<g>
<g>
    <path d="M290.359,432L181.335,263.467V128c0-5.891-4.776-10.667-10.667-10.667h-53.333c-5.891,0-10.667,4.776-10.667,10.667    v135.765L7.266,432.747c-4.755,8.082-7.263,17.288-7.263,26.666C0.002,488.455,23.546,511.999,52.588,512h194.24    c9.983-0.003,19.752-2.887,28.136-8.306C299.013,488.147,305.906,456.049,290.359,432z M246.828,490.667H52.588    c-5.591,0.009-11.083-1.482-15.902-4.318c-14.876-8.754-19.839-27.91-11.085-42.786L126.53,272.075    c0.964-1.639,1.472-3.506,1.472-5.408v-128h32v128c-0.001,2.055,0.592,4.066,1.707,5.792l110.72,171.125    c3.194,4.935,4.894,10.687,4.896,16.566C277.33,476.998,263.677,490.661,246.828,490.667z"></path>
</g>
</g>
<g>
<g>
    <path d="M153.655,310.112l-18.389-10.805L44.695,453.259c-0.966,1.642-1.475,3.514-1.473,5.419    c0.006,5.891,4.787,10.662,10.678,10.655h74.101V448H72.535L153.655,310.112z"></path>
</g>
</g>
<g>
<g>
    <path d="M486.252,245.333H320.002c-23.564,0-42.667,19.103-42.667,42.667v170.667c0.035,29.441,23.893,53.298,53.333,53.333h96    c29.441-0.035,53.298-23.893,53.333-53.333V313.749l24.469-24.459c4.817-4.826,7.523-11.365,7.527-18.183    C512.006,256.881,500.479,245.341,486.252,245.333z M489.378,274.208l-27.584,27.584c-2,2-3.125,4.713-3.125,7.541v149.333    c0,17.673-14.327,32-32,32h-96c-17.673,0-32-14.327-32-32V288c0-11.782,9.551-21.333,21.333-21.333l166.251,0    c1.174-0.001,2.301,0.465,3.131,1.296C491.106,269.689,491.104,272.485,489.378,274.208z"></path>
</g>
</g>
<g>
<g>
    <path d="M416.002,309.333V448h-32v21.333h42.667c5.891,0,10.667-4.776,10.667-10.667V309.333H416.002z"></path>
</g>
</g>
<g>
<g>
    <path d="M298.668,154.496V10.667C298.668,4.776,293.893,0,288.002,0h-74.667c-5.891,0-10.667,4.776-10.667,10.667v146.859    c-13.018,4.008-25.541,9.472-37.333,16.288l10.667,18.464c12.532-7.236,25.988-12.737,40-16.352c4.712-1.217,8.004-5.469,8-10.336    V21.333h53.333v141.771c0.002,5.12,3.642,9.517,8.672,10.475c37.402,7.15,71.033,27.393,94.859,57.099l16.629-13.355    C372.394,186.042,337.644,163.951,298.668,154.496z"></path>
</g>
</g>
<g>
<g>
    <path d="M453.335,149.333c-20.619,0-37.333,16.715-37.333,37.333c0,20.619,16.715,37.333,37.333,37.333    c20.619,0,37.333-16.715,37.333-37.333C490.668,166.048,473.954,149.333,453.335,149.333z M453.335,202.667    c-8.837,0-16-7.163-16-16s7.163-16,16-16s16,7.163,16,16S462.172,202.667,453.335,202.667z"></path>
</g>
</g>
<g>
<g>
    <path d="M416.002,74.667c-17.673,0-32,14.327-32,32c0,17.673,14.327,32,32,32s32-14.327,32-32    C448.002,88.994,433.675,74.667,416.002,74.667z M416.002,117.333c-5.891,0-10.667-4.776-10.667-10.667S410.111,96,416.002,96    c5.891,0,10.667,4.776,10.667,10.667S421.893,117.333,416.002,117.333z"></path>
</g>
</g>
<g>
<g>
    <path d="M37.335,85.333c-20.619,0-37.333,16.715-37.333,37.333C0.002,143.285,16.716,160,37.335,160    c20.619,0,37.333-16.715,37.333-37.333C74.668,102.048,57.954,85.333,37.335,85.333z M37.335,138.667c-8.837,0-16-7.163-16-16    s7.163-16,16-16c8.837,0,16,7.163,16,16S46.172,138.667,37.335,138.667z"></path>
</g>
</g>
<g>
<g>
    <path d="M85.335,10.667c-17.673,0-32,14.327-32,32c0,17.673,14.327,32,32,32c17.673,0,32-14.327,32-32    C117.335,24.994,103.008,10.667,85.335,10.667z M85.335,53.333c-5.891,0-10.667-4.776-10.667-10.667    C74.668,36.776,79.444,32,85.335,32c5.891,0,10.667,4.776,10.667,10.667C96.002,48.558,91.226,53.333,85.335,53.333z"></path>
</g>
</g>
<g>
<g>
    <rect x="320.002" y="309.333" width="32" height="21.333"></rect>
</g>
</g>
<g>
<g>
    <rect x="320.002" y="352" width="21.333" height="21.333"></rect>
</g>
</g>
<g>
<g>
    <rect x="320.002" y="394.667" width="32" height="21.333"></rect>
</g>
</g>
<g>
<g>
    <rect x="320.002" y="437.333" width="21.333" height="21.333"></rect>
</g>
</g>
<g>
<g>
    <rect x="21.335" y="192" width="21.333" height="21.333"></rect>
</g>
</g>
<g>
<g>
    <rect x="53.335" y="245.333" width="21.333" height="21.333"></rect>
</g>
</g>
<g>
<g>
    <rect x="234.668" y="288" width="21.333" height="21.333"></rect>
</g>
</g>
<g>
<g>
    <rect x="213.335" y="245.333" width="21.333" height="21.333"></rect>
</g>
</g>
<g>
<g>
    <rect x="202.668" y="202.667" width="21.333" height="21.333"></rect>
</g>
</g>
<g>
<g>
    <rect x="213.335" y="437.333" width="21.333" height="21.333"></rect>
</g>
</g>
<g>
<g>
    <rect x="181.335" y="394.667" width="21.333" height="21.333"></rect>
</g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg></div>
                    <h4>{{__('general.Solution')}}</h4>

                </div>
                <!-- End of single feature inner -->
            </div>
        </div>
    </div>
</section>
<!-- End of feature area -->

<!-- why bottol water -->
<section class="pt-120 background-shap mr-sm-0">
    <div class="container">
        @foreach ($videos as $video)


        <div class="row justify-content-center">
            <div class="col-12">
                <!-- section title -->
                <div class="section-title text-center">
                    <span class="schoolbell">{{__('general.Video')}}</span>
                    @if (app()->currentLocale() == 'ar')
                    <h2>{{$video->video_titleAR}}</h2>
                    @else
                    <h2>{{$video->video_titleEN}}</h2>
                    @endif
                </div>
                <!-- End of section title -->
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <!-- why bottle video -->
                <div class="bottle-video-wrap">
                    <img src='{{asset('frontasset/img/video-bg.jpg')}}' alt="">
                    <a href="{{ asset('uploads/'. $video->video) }}" class="video-btn" data-popup="video"><i class="fa fa-play"></i></a>
                </div>
                <!-- end of why bottle video -->
            </div>
        </div>
        @endforeach
    </div>
</section>
<!-- End of why bottol water -->

<!-- bottole deliver -->
<section class="pt-120 pb-120 mr-sm-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <!-- section title -->
                <div class="section-title text-center">
                    <span class="schoolbell">{{__('general.Bottles')}}</span>
                    <h2>{{__('general.Bottles2')}}</h2>
                </div>
                <!-- End of section title -->
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach ($products as $product)

            <div class="col-lg-4 col-md-6">

                <!-- single bottle deliver wrap -->
                <div class="single-bottle-inner text-center">
                    <div class="bottle-image">
                        <img width="100" src="{{ asset('uploads/'. $product->image) }}" alt="">

                               </div>
                    <div class="single-bottle-text">
                        @if (app()->currentLocale() == 'ar')
                        <h4>{{$product->Artitle}}</h4>
                        @else
                        <h4>{{$product->Entitle}}</h4>
                        @endif

                    </div>
                </div>
                <!-- End of single bottle deliver wrap -->
            </div>
            @endforeach


            <div class="col-12">
                <div class="deliver-btn text-center">
                    <a href="{{route('services')}}" class="btn">{{__('general.Bottles3')}}</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of bottole deliver -->

<!-- feature area type2-->


<!-- about area -->
<section class="pt-120 pb-120 primary-bg mr-sm-0">
   <div class="container">
       @foreach ($deatils as $deatil )


       <div class="row align-items-center">
           <div class="col-lg-6">
               <div class="about-image">
                   <img src="{{ asset('uploads/'. $deatil->image) }}" alt="">
               </div>
           </div>
           <div class="col-lg-6">
               <!-- about inner -->
               <div class="about-wrap">
                   <!-- section title -->
                    <div class="section-title type2">
                        <span class="schoolbell">{{__('general.AboutUs')}}</span>
                        @if (app()->currentLocale() == 'ar')
                        <h2>{{$deatil->About_titleAR}}</h2>
                        @else
                        <h2>{{$deatil->About_titleEN}}</h2>
                        @endif
                    </div>

                   <!-- End of section title -->
                   <div class="about-area-text">
                    @if (app()->currentLocale() == 'ar')
                       <p>{{$deatil->About_bodyAR}}</p>
                       @else
                       <p>{{$deatil->About_bodyEN}}</p>
                       @endif
                       <div class="about-counter-inner">
                           <div class="row">
                               <div class="col-12 col-sm-6">
                                   <!-- single counter -->
                                   <div class="single-counter-inner text-center">
                                    <div class="counter-image">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 195.83 195.83" style="enable-background:new 0 0 195.83 195.83;" xml:space="preserve" class="svg replaced-svg">
<g>
<g>
 <path d="M145.949,75.753V60.966c0-17.316-14.081-31.407-31.389-31.407h-1.866v-7.39h3.695c2.04,0,3.695-1.653,3.695-3.695V3.695    c0-2.042-1.655-3.695-3.695-3.695H79.441c-2.04,0-3.695,1.653-3.695,3.695v14.78c0,2.042,1.655,3.695,3.695,3.695h3.695v7.39    H81.27c-17.307,0-31.389,14.091-31.389,31.407v14.787c0,5.252,2.491,9.885,6.299,12.933c-3.808,3.049-6.299,7.678-6.299,12.924    c0,5.25,2.496,9.883,6.309,12.932c-3.814,3.049-6.309,7.682-6.309,12.932s2.496,9.883,6.309,12.932    c-3.814,3.049-6.309,7.682-6.309,12.932s2.496,9.883,6.309,12.932c-3.814,3.049-6.309,7.682-6.309,12.932v12.932    c0,2.042,1.655,3.695,3.695,3.695h88.678c2.04,0,3.695-1.653,3.695-3.695v-12.932c0-5.25-2.496-9.883-6.309-12.932    c3.814-3.049,6.309-7.682,6.309-12.932s-2.496-9.883-6.309-12.932c3.814-3.049,6.309-7.682,6.309-12.932    s-2.496-9.883-6.309-12.932c3.814-3.049,6.309-7.682,6.309-12.932c0-5.245-2.491-9.874-6.299-12.924    C143.458,85.639,145.949,81.005,145.949,75.753z M83.136,7.39h29.559v7.39H109H86.831h-3.695V7.39z M138.559,188.44H57.271v-9.237    c0-5.095,4.148-9.237,9.246-9.237h62.795c5.099,0,9.247,4.142,9.247,9.237V188.44z M129.313,162.576H66.517    c-5.098,0-9.246-4.142-9.246-9.237c0-5.095,4.148-9.237,9.246-9.237h62.795c5.099,0,9.247,4.142,9.247,9.237    C138.559,158.434,134.411,162.576,129.313,162.576z M129.313,136.712H66.517c-5.098,0-9.246-4.142-9.246-9.237    c0-5.095,4.148-9.237,9.246-9.237h62.795c5.099-0.001,9.247,4.142,9.247,9.237C138.559,132.57,134.411,136.712,129.313,136.712z     M129.313,110.847H66.517c-5.098,0-9.246-4.142-9.246-9.237c0-5.095,4.148-9.237,9.246-9.237h62.795    c5.099,0,9.247,4.142,9.247,9.237C138.559,106.705,134.411,110.847,129.313,110.847z M138.559,75.753    c0,5.088-4.126,9.23-9.199,9.23h-0.047H66.517H66.47c-5.073,0-9.199-4.142-9.199-9.23V60.966    c0-13.243,10.766-24.017,23.999-24.017h5.56c2.04,0,3.695-1.653,3.695-3.695V22.169h14.78v11.085c0,2.042,1.655,3.695,3.695,3.695    h5.56c13.233,0,23.999,10.774,23.999,24.017V75.753z"></path>
</g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>
                                    </div>
                                    <span class="counter">7400</span><span> + </span>
                                    <p>{{__('general.Counter3')}}</p>
                                </div>
                                   <!-- End of single counter -->
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
               <!-- End of about inner -->
           </div>
       </div>
       @endforeach
   </div>

</section>
<!-- End of about area -->

<!-- our team -->

<!-- End of our team -->

<!-- subscribe area -->

<!-- subscribe area -->

<!-- testimonial area -->

<!-- End of testimonial area -->

<!-- our location -->

@stop
