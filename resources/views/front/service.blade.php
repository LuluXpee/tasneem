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
                        <h1 class="h2">منتجاتنا</h1>
                        @else
                         <h1 class="h2">Our Services</h1>
                         @endif
                    </div><!--/.End of page title content -->
                </div><!-- /.col-->
            </div><!-- /.row-->
        </div><!-- /.container-->
    </div><!-- End of page title -->

    <!-- bottole deliver -->
    <section class="pt-120 pb-90 top-shape">
        <div class="container">
            <div class="row">
                    @foreach ($products as $product )

                    <div class="col-md-6 col-lg-4">
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
                        </div><!-- /.End of single bottle deliver wrap -->
                    </div><!-- /.col-->



                    @endforeach


            </div>

            <!-- /.row-->
        </div><!-- /.container-->
    </section><!-- /.End of bottole deliver -->

    <!-- feature area type2-->
  <!-- End of feature area -->

     <!-- our blog -->
    <!-- /.End of our blog -->

    <!-- our partner -->
   <!-- /.End of our partner -->

  @stop
