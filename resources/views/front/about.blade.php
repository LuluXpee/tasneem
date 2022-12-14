@extends('front.master')
@section('content')

    <!-- page title -->
    <div class="page-title-wrap primary-bg">
        <div class="container">
            <div class="row">
                <div class="col">
                    <!-- page title content -->
                    <div class="page-title-content text-center">
                        @if (app()->currentLocale() == 'ar')
                        <h1 class="h2">من نحن</h1>
                        @else
                         <h1 class="h2">ِAbout Us</h1>
                         @endif
                        
                    </div><!-- /.End of page title content -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!--/.End of page title -->

     <!-- our blog -->
    <section class="pt-120 pb-90 top-shape">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- single blog inner -->
                    <div class="single-blog-inner about-me">
                        <!-- blog image -->
                        <div class="post-image">
                            <a href="#">
                                <img src="{{asset('frontasset/img/blog/blog4.png')}}" alt="">
                            </a>
                        </div><!--/.End of  blog image -->

                        <!-- post content -->
                        <div class="post-content">
                            <div class="post-details">
                                <div class="post-title">
                                    <h3></h3>
                                </div>
                                <p></p>
                             
                            </div>
                        </div><!-- /.End of post content -->
                    </div><!-- /.End of single blog inner -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- single blog inner -->
                    <div class="single-blog-inner about-me">
                        <!-- blog image -->
                        <div class="post-image">
                            <a href="#">
                                <img src="{{asset('frontasset/img/blog/blog5.png')}}" alt="">
                            </a>
                        </div><!--/.End of  blog image -->

                        <!-- post content -->
                        <div class="post-content">
                            <div class="post-details">
                                <div class="post-title">
                                    <h3></h3>
                                </div>
                                <p></p>
                          
                            </div>
                        </div><!--/.End of post content -->
                    </div><!-- /.End of single blog inner -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- single blog inner -->
                    <div class="single-blog-inner about-me">
                        <!-- blog image -->
                        <div class="post-image">
                            <a href="#">
                                <img src="{{asset('frontasset/img/blog/blog6.pn')}}g" alt="">
                            </a>
                        </div><!--/.End of  blog image -->

                        <!-- post content -->
                        <div class="post-content">
                            <div class="post-details">
                                <div class="post-title">
                                    <h3></h3>
                                </div>
                                <p></p>
                              
                            </div>
                        </div><!-- /.End of post content -->
                    </div><!--/.End of single blog inner -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.End of our blog -->

    <!-- about area -->
    <section class="pt-120 pb-120 primary-bg">
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
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" class="svg replaced-svg">
<g transform="translate(1 1)">
<g>
 <g>
     <path d="M246.467,212.333h17.067c5.12,0,8.533-3.413,8.533-8.533c0-5.12-3.413-8.533-8.533-8.533h-17.067     c-5.12,0-8.533,3.413-8.533,8.533C237.933,208.92,241.347,212.333,246.467,212.333z"></path>
     <path d="M280.6,229.4h-51.2c-5.12,0-8.533,3.413-8.533,8.533s3.413,8.533,8.533,8.533h51.2c5.12,0,8.533-3.413,8.533-8.533     S285.72,229.4,280.6,229.4z"></path>
     <path d="M135.533,246.467H152.6c5.12,0,8.533-3.413,8.533-8.533s-3.413-8.533-8.533-8.533h-17.067     c-5.12,0-8.533,3.413-8.533,8.533S130.413,246.467,135.533,246.467z"></path>
     <path d="M169.667,263.533h-51.2c-5.12,0-8.533,3.413-8.533,8.533c0,5.12,3.413,8.533,8.533,8.533h51.2     c5.12,0,8.533-3.413,8.533-8.533C178.2,266.947,174.787,263.533,169.667,263.533z"></path>
     <path d="M357.4,246.467h17.067c5.12,0,8.533-3.413,8.533-8.533s-3.413-8.533-8.533-8.533H357.4c-5.12,0-8.533,3.413-8.533,8.533     S352.28,246.467,357.4,246.467z"></path>
     <path d="M340.333,280.6h51.2c5.12,0,8.533-3.413,8.533-8.533c0-5.12-3.413-8.533-8.533-8.533h-51.2     c-5.12,0-8.533,3.413-8.533,8.533C331.8,277.187,335.213,280.6,340.333,280.6z"></path>
     <path d="M144.067,468.333H127c-5.12,0-8.533-3.413-8.533-8.533v-17.067c0-5.12-3.413-8.533-8.533-8.533     c-5.12,0-8.533,3.413-8.533,8.533V459.8c0,14.507,11.093,25.6,25.6,25.6h17.067c5.12,0,8.533-3.413,8.533-8.533     S149.187,468.333,144.067,468.333z"></path>
     <path d="M255,468.333h-17.067c-5.12,0-8.533-3.413-8.533-8.533v-17.067c0-5.12-3.413-8.533-8.533-8.533     c-5.12,0-8.533,3.413-8.533,8.533V459.8c0,14.507,11.093,25.6,25.6,25.6H255c5.12,0,8.533-3.413,8.533-8.533     S260.12,468.333,255,468.333z"></path>
     <path d="M374.467,468.333H357.4c-5.12,0-8.533-3.413-8.533-8.533v-17.067c0-5.12-3.413-8.533-8.533-8.533     s-8.533,3.413-8.533,8.533V459.8c0,14.507,11.093,25.6,25.6,25.6h17.067c5.12,0,8.533-3.413,8.533-8.533     S379.587,468.333,374.467,468.333z"></path>
     <path d="M412.867,132.973c-7.68-5.973-12.8-16.213-12.8-27.307V101.4c9.387,0,17.067-7.68,17.067-17.067V50.2     c0-9.387-7.68-17.067-17.067-17.067H331.8c-9.387,0-17.067,7.68-17.067,17.067v34.133c0,9.387,7.68,17.067,17.067,17.067v3.413     c0,9.647-3.231,18.646-9.684,24.757c-2.716-12.275-10.12-23.351-20.182-30.73c-7.68-5.973-12.8-16.213-12.8-27.307v-4.267     c9.387,0,17.067-7.68,17.067-17.067V16.067C306.2,6.68,298.52-1,289.133-1h-68.267C211.48-1,203.8,6.68,203.8,16.067V50.2     c0,9.387,7.68,17.067,17.067,17.067v4.267c0,11.093-4.267,21.333-12.8,27.307c-10.85,7.459-17.91,18.696-20.359,31.13     c-5.811-6.099-9.507-14.889-9.507-24.304V101.4c9.387,0,17.067-7.68,17.067-17.067V50.2c0-9.387-7.68-17.067-17.067-17.067     h-68.267c-9.387,0-17.067,7.68-17.067,17.067v34.133c0,9.387,7.68,17.067,17.067,17.067v4.267c0,11.093-5.12,21.333-12.8,27.307     C83.48,142.36,75.8,157.72,75.8,173.933v21.333v119.467V485.4c0,14.507,11.093,25.6,25.6,25.6h93.867h119.467H408.6     c14.507,0,25.6-11.093,25.6-25.6V314.733V195.267v-21.333C434.2,157.72,425.667,142.36,412.867,132.973z M331.8,50.2h68.267     v34.133h-8.533h-51.2H331.8V50.2z M348.867,105.667V101.4H383v4.267c0,16.213,7.68,31.573,20.48,40.96     c8.533,5.973,13.653,16.213,13.653,27.307v12.8h-93.867v-25.6v-9.387c1.707-1.707,3.413-3.413,5.12-5.12     C341.187,137.24,348.867,121.88,348.867,105.667z M417.133,306.2h-93.867v-25.6v-76.8h93.867V306.2z M92.867,203.8h93.867v76.8     v25.6H92.867V203.8z M203.8,195.267v-25.6h102.4v25.6v76.8H203.8V195.267z M220.867,16.067h68.267V50.2H280.6h-51.2h-8.533     V16.067z M203.8,139.8c0-10.24,5.12-20.48,13.653-27.307c12.8-9.387,20.48-24.747,20.48-40.96v-4.267h34.133v4.267     c0,16.213,7.68,31.573,20.48,40.96c8.533,5.973,13.653,16.213,13.653,27.307v8.533v4.267H203.8v-3.413V139.8z M109.933,50.2     H178.2v34.133h-8.533h-51.2h-8.533V50.2z M106.52,146.627c12.8-9.387,20.48-24.747,20.48-40.96V101.4h34.133v4.267     c0,16.213,7.68,31.573,20.48,40.96c1.707,1.707,3.413,3.413,5.12,5.12v9.387v25.6H92.867v-12.8     C92.867,163.693,97.987,153.453,106.52,146.627z M92.867,485.4V323.267h93.867v170.667H101.4     C96.28,493.933,92.867,490.52,92.867,485.4z M203.8,314.733v-25.6h102.4v25.6v179.2H203.8V314.733z M408.6,493.933h-85.333     V323.267h93.867V485.4C417.133,490.52,413.72,493.933,408.6,493.933z"></path>
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
</svg>
                                    </div>
                                    <span class="counter">6780</span><span> + </span>
                                    <p>{{__('general.Counter')}}</p>
                                </div>
                                   <!-- End of single counter -->
                               </div>
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
                                    <span class="counter">2530</span><span> + </span>
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
     <!--/.End of about area -->

    <!-- our team -->
   <!-- /.End of our team -->

    <!-- testimonial area -->
    <!-- /.End of testimonial area -->

    <!-- our partner -->
  <!-- End of our partner -->

  @stop
