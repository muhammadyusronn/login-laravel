@extends('frontend/layout/template')
@section('content')
<!-- Start Slider -->
<div id="slides-shop" class="cover-slides">
    <ul class="slides-container">
        <li class="text-center">
            <img src="{{asset('frontend/assets/images/wall.jpeg')}}" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="m-b-20"><strong>SELAMAT DATANG DI WEBSITE KAMI</strong></h1>
                        <!-- <p class="m-b-40">See how your users experience your website in realtime or view <br> trends to see any changes in performance over time.</p> -->
                    </div>
                </div>
            </div>
        </li>
        <li class="text-center">
            <img src="{{asset('frontend/assets/images/wall1.png')}}" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="m-b-20"><strong>SELAMAT DATANG DI WEBSITE KAMI</strong></h1>
                        <!-- <p class="m-b-40">See how your users experience your website in realtime or view <br> trends to see any changes in performance over time.</p> -->
                    </div>
                </div>
            </div>
        </li>
        <li class="text-center">
            <img src="{{asset('frontend/assets/images/wall2.png')}}" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="m-b-20"><strong>SELAMAT DATANG DI WEBSITE KAMI</strong></h1>
                        <!-- <p class="m-b-40">See how your users experience your website in realtime or view <br> trends to see any changes in performance over time.</p> -->
                    </div>
                </div>
            </div>
        </li>
    </ul>
    <div class="slides-navigation">
        <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
        <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
    </div>
</div>
<!-- End Slider -->

<!-- Start Blog  -->
<div class="latest-blog">
    <div class="container">
        <div class="row">
            <!-- <div class="col-lg-12">
                <div class="title-all text-center">
                    <h1>latest blog</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.</p>
                </div>
            </div> -->
        </div>
    </div>
</div>
<!-- End Blog  -->
@endsection