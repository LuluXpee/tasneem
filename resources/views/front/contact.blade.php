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
                        <h1 class="h2">اتصل بنا </h1>
                        @else
                           <h1 class="h2">Get In Touch </h1
                           @endif
                    </div>
                    <!-- End of page title content -->
                </div><!--/.col-->
            </div><!--/.row-->
        </div><!--/.container-->
    </div><!--/.End of page title -->

    <!-- contact info -->
    <!-- /.End of contact info -->

    <!-- contact form -->
    <section class="pt-90 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <!-- section title -->
                    <div class="section-title text-center">
                     @if (app()->currentLocale() == 'ar')
                        <h2> للتواصل عبر الايميل</h2>
                        @else
                         <h2>Send Message</h2>
                         @endif
                    </div>
                    <!-- End of section title -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                    <!-- contact form -->
                    <div class="contact-page-form parsley-validate">
                        <form action="{{route('SubmitEmail')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="name" placeholder="Full Name" class="theme-input-style" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" name="email" placeholder="Email Address" class="theme-input-style" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <textarea name="message" placeholder="Write Message" class="theme-input-style"></textarea>
                                    <div class="submite-btn text-center">
                                        <button type="submit" class="btn">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </form><!--/.form-->
                    </div><!-- /.End of contact form -->
                </div><!--/.col-->
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/.End ofcontact form -->

    <!-- map -->

    <!-- End of map -->

   @stop
