@extends('layouts.main')
@section('title', 'Home | Vanward')

@section('content')
    <main>
        <section class="section-image section-home-one no-padding-y" style="background-image:url({{ asset('assets/img/hd-1.jpg') }})">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <hr class="space-lg" />
                        <h3 class="text-color-2">
                            Welcome to Vanward International
                        </h3>
                        <ul class="slider" data-options="arrows:false,nav:false,autoplay:3000,controls:out">
                            <li>
                                <h1 class="text-uppercase">@lang('public.wealth planning')</h1>
                            </li>
                            <li>
                                <h1 class="text-uppercase">@lang('public.trust services')</h1>
                            </li>
                            <li>
                                <h1 class="text-uppercase">@lang('public.private equity')</h1>
                            </li>
                        </ul>
                        <p>
                            {{-- We provide customised financial solutions that safeguard, expand, and enhance our clients overall financial situation. Client satisfaction is our top priority, and we spare no effort to exceed their expectations in everything we do. --}}
                        </p>
                        <hr class="space-sm" />
                        <a href="https://app.vanwardintl.com/en/applications/create/" class="btn btn-sm width-190 full-width-sm">@lang('public.home page 1')</a>
                        <hr class="space-lg" />
                        <hr class="space-lg" />
                    </div>
                    <div class="col-lg-5 hidden-md">
                        <hr class="space-sm" />
                        <img data-anima="fade-bottom" data-time="1000" class="slide-image" src="{{ asset('assets/img/home-2.png') }}" alt="" />
                    </div>
                </div>
            </div>
        </section>
        <section class="section-base section-overflow-top">
            <div class="container">
                <div class="grid-list" data-columns="4" data-columns-md="2" data-columns-sm="1">
                    <div class="grid-box">
                        <div class="grid-item">
                            <div class="cnt-box cnt-box-top-icon boxed">
                                <i class="im-monitor-phone"></i>
                                <div class="caption">
                                    <h3>@lang('public.private wealth management')</h3>
                                    <p>
                                        Comprehensive private wealth management experience possible over the long term
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="cnt-box cnt-box-top-icon boxed">
                                <i class="im-bar-chart2"></i>
                                <div class="caption">
                                    <h3>@lang('public.corporate advisory')</h3>
                                    <p>
                                        We have a comprehensive understanding of the challenges faced by private company
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="cnt-box cnt-box-top-icon boxed">
                                <i class=" im-medal"></i>
                                <div class="caption">
                                    <h3>@lang('public.private equity')</h3>
                                    <p>
                                        Collaborates with high-caliber management teams guiding businesses through crucial growth
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="cnt-box cnt-box-top-icon boxed">
                                <i class="im-optimization"></i>
                                <div class="caption">
                                    <h3>@lang('public.fixed income')</h3>
                                    <p>
                                        Managed fixed income strategies for public and private institutions and wealthy families 
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-fit-lg" data-anima="fade-bottom" data-time="1000">
                    <div class="col-lg-6">
                        <a class="img-box img-box-caption btn-video lightbox" href="https://www.youtube.com/watch?v=Lb4IcGF5iTQ" data-lightbox-anima="fade-top">
                            <img src="{{ asset('assets/img/hd-2.jpg') }}" alt="">
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <div class="title">
                            <h2>@lang('public.home page 2')</h2>
                            {{-- <p>About us</p> --}}
                        </div>
                        <p>
                            @lang('public.home page 3')
                        </p>
                        {{-- <div class="box-sign">
                            <img alt="sign" src="{{ asset('assets/img/sign-dark.png') }}">
                            <b>Albert Patterson</b>
                            <span>Founder &amp; CEO</span>
                        </div> --}}
                    </div>
                </div>
            </div>
        </section><br><br>
        <section class="section-image light align-center ken-burn-center" data-parallax="scroll" data-image-src={{ asset('assets/img/hd-1.jpg') }}>
            <div class="container" data-anima="fade-bottom" data-time="1000" style="position: relative;">
                <a data-lightbox-anima="fade-top">
                    <video playsinline autoplay muted loop style="max-width: 100%; height: auto;">
                        <source src="{{ asset('stock-market6.mp4') }}" type="video/mp4">
                    </video>
                </a>
                <h2 class="width-650" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 1;">
                    @lang('public.home page 4')
                </h2>
                <hr class="space" />
            </div>
            
        </section>
        <section class="section-base section-color">
            <div class="container">
                <div class="row" data-anima="fade-bottom" data-time="1000">
                    <div class="col-lg-6">
                        <div class="title">
                            {{-- <h2>Core Technology services</h2> --}}
                            <h2>@lang('public.home page 7')</h2>
                        </div>
                    </div>
                    {{-- <div class="col-lg-6 align-right align-left-md">
                        <hr class="space-sm hidden-md" />
                        <a href="#" class="btn-text active">@lang('public.details')</a>
                    </div> --}}
                </div>
                <hr class="space" />
                <div class="grid-list" data-columns="3" data-columns-md="2" data-columns-sm="1" data-anima="fade-bottom" data-time="1000">
                    <div class="grid-box">
                        <div class="grid-item">
                            <div class="cnt-box cnt-box-info boxed" data-href="#">
                                <a href="#" class="img-box"><img src={{ url('resource/private-equity.jpeg') }} alt="" /></a>
                                <div class="caption">
                                    <h2>@lang('public.home page 8')</h2>
                                    {{-- <div class="cnt-info">
                                        <div><span>Price</span><span>$50</span></div>
                                        <div><span>Type</span><span>Software</span></div>
                                        <div><span>Client</span><span>Private</span></div>
                                    </div> --}}
                                    <p>
                                        @lang('public.home page 10')
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="cnt-box cnt-box-info boxed" data-href="#">
                                <a href="#" class="img-box"><img src={{ url('/resource/corporate-advisory-and-banking.jpeg') }} alt="" /></a>
                                <div class="caption">
                                    <h2>@lang('public.home page 12')</h2>
                                    {{-- <div class="cnt-info">
                                        <div><span>Price</span><span>$80</span></div>
                                        <div><span>Type</span><span>App</span></div>
                                        <div><span>Client</span><span>Private</span></div>
                                    </div> --}}
                                    <p>
                                        @lang('public.home page 13')
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="cnt-box cnt-box-info boxed" data-href="#">
                                <a href="#" class="img-box"><img src={{ url('/resource/private-wealth-management.jpeg') }} alt="" /></a>
                                <div class="caption">
                                    <h2>@lang('public.home page 16')</h2>
                                    {{-- <div class="cnt-info">
                                        <div><span>Price</span><span>$50</span></div>
                                        <div><span>Type</span><span>App</span></div>
                                        <div><span>Client</span><span>Business</span></div>
                                    </div> --}}
                                    <p>
                                        @lang('public.home page 17')
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="cnt-box cnt-box-info boxed" data-href="#">
                                <a href="#" class="img-box"><img src={{ url('/resource/markets.jpeg') }} alt="" /></a>
                                <div class="caption">
                                    <h2>@lang('public.home page 18')</h2>
                                    {{-- <div class="cnt-info">
                                        <div><span>Price</span><span>$30</span></div>
                                        <div><span>Type</span><span>Saas</span></div>
                                        <div><span>Client</span><span>Business</span></div>
                                    </div> --}}
                                    <p>
                                        @lang('public.home page 19')
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="cnt-box cnt-box-info boxed" data-href="#">
                                {{-- <div class="extra-field">30% discount today</div> --}}
                                <a href="#" class="img-box"><img src={{ url('/resource/the-partnership.jpg') }} alt="" /></a>
                                <div class="caption">
                                    <h2>@lang('public.home page 21')</h2>
                                    {{-- <div class="cnt-info">
                                        <div><span>Price</span><span>$100</span></div>
                                        <div><span>Type</span><span>Software</span></div>
                                        <div><span>Client</span><span>Business</span></div>
                                    </div> --}}
                                    <p>
                                        @lang('public.home page 22')
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="cnt-box cnt-box-info boxed" data-href="#">
                                {{-- <div class="extra-field">30% discount today</div> --}}
                                <a href="#" class="img-box"><img src={{ url('/resource/fixed-income.jpeg') }} alt="" /></a>
                                <div class="caption">
                                    <h2>@lang('public.private client lending')</h2>
                                    {{-- <div class="cnt-info">
                                        <div><span>Price</span><span>$100</span></div>
                                        <div><span>Type</span><span>Consulting</span></div>
                                        <div><span>Client</span><span>Business</span></div>
                                    </div> --}}
                                    <p>
                                        @lang('public.private wealth management 6')
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- <section class="section-base">
            <div class="container">
                <div class="row" data-anima="fade-bottom" data-time="1000">
                    <div class="col-lg-6">
                        <div class="title">
                            <h2>Request a free<br />consultation with us</h2>
                            <p>Contact us now</p>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipiscing elitsed do eiusmod tempor incididunt utlabore et dolore magna aliqua.
                        </p>
                        <a href="#" class="btn-text active">You accept our policy</a>
                    </div>
                    <div class="col-lg-6">
                        <form id="UCiFI" action="thtmekit/scripts/php/contact-form.php" class="form-box form-ajax form-ajax-wp" method="post" data-email="">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input id="Name" name="Name" placeholder="Name" type="text" class="input-text" required="">
                                </div>
                                <div class="col-lg-6">
                                    <input id="Email" name="Email" placeholder="Email" type="email" class="input-text" required="">
                                </div>
                            </div>
                            <hr class="space-xs" />
                            <textarea id="Message" name="Message" placeholder="Message" class="input-textarea" required=""></textarea>
                            <button class="btn btn-xs" type="submit">Send message</button>
                            <div class="success-box">
                                <div class="alert alert-success">
                                    Congratulations. Your message has been sent successfully.
                                </div>
                            </div>
                            <div class="error-box">
                                <div class="alert alert-warning">
                                    Error, please retry. Your message has not been sent.
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section> --}}
        {{-- <section class="section-base section-color">
            <div class="container">
                <div class="row" data-anima="fade-bottom" data-time="1000">
                    <div class="col-lg-12">
                        <div class="title">
                            <h2>What our clients think</h2>
                            <p>Testimonials feedback</p>
                        </div>
                        <hr class="space-xs" />
                        <ul class="slider controls-top-right" data-options="type:carousel,arrows:false,nav:true,perView:3,perViewMd:2,perViewXs:1,gap:30,controls:out">
                            <li>
                                <div class="cnt-box cnt-box-testimonials-bubble">
                                    <p>
                                        If you don’t succeed at first, there’s no need for the word failure. Pick yourself up and try try again.
                                    </p>
                                    <div class="thumb-bar">
                                        <img src="http://via.placeholder.com/450x450" alt="" />
                                        <p>
                                            <span>Richard Branson</span>
                                            <span>Virgin</span>
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="cnt-box cnt-box-testimonials-bubble">
                                    <p>
                                        Have the courage to follow your heart and intuition. They somehow already know what you truly want.
                                    </p>
                                    <div class="thumb-bar">
                                        <img src="http://via.placeholder.com/450x450" alt="" />
                                        <p>
                                            <span>Steve Jobs</span>
                                            <span>Apple</span>
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="cnt-box cnt-box-testimonials-bubble">
                                    <p>
                                        Do not compare yourself with anyone in this world… if you do so, you are really insulting yourself.
                                    </p>
                                    <div class="thumb-bar">
                                        <img src="http://via.placeholder.com/450x450" alt="" />
                                        <p>
                                            <span>Bill Gates</span>
                                            <span>Microsoft</span>
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="cnt-box cnt-box-testimonials-bubble">
                                    <p>
                                        The question I ask myself like almost every day is if am I doing the most important thing I could be doing.
                                    </p>
                                    <div class="thumb-bar">
                                        <img src="http://via.placeholder.com/450x450" alt="" />
                                        <p>
                                            <span>Mark Zuckerberg</span>
                                            <span>Microsoft</span>
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section> --}}
        {{-- <section class="section-base">
            <div class="container">
                <div class="row align-items-center" data-anima="fade-bottom" data-time="1000">
                    <div class="col-lg-6">
                        <div class="title">
                            <h2>You should choose us</h2>
                            <p>Exclusive benefits</p>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet consecteture Duis aute irure dolor innocente reprehenderit
                            in voluptate velit esse cillum dolore eu fugiat nulla.
                        </p>
                        <hr class="space-sm" />
                        <ul class="accordion-list">
                            <li>
                                <a href="#">The membership cards</a>
                                <div class="content">
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipiscing elitsed do eiusmod tempor incididunt utlabore et dolore magna aliqua.
                                        Utenim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                                        in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                    </p>
                                </div>
                            </li>

                            <li>
                                <a href="#">Financials helps and money back</a>
                                <div class="content">
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipiscing elitsed do eiusmod tempor incididunt utlabore et dolore magna aliqua.
                                        Utenim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                                        in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <a href="#">Team creation and support</a>
                                <div class="content">
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipiscing elitsed do eiusmod tempor incididunt utlabore et dolore magna aliqua.
                                        Utenim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                                        in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <img src="http://via.placeholder.com/590x364" alt="" />
                    </div>
                </div>
            </div>
        </section> --}}
        {{-- section-base section-color --}}
        <section class="section-image light align-center ken-burn-center" data-parallax="scroll" data-image-src={{ asset('assets/img/hd-1.jpg') }}>
            <div class="container" data-anima="fade-bottom" data-time="1000" style="position: relative;">
                <a data-lightbox-anima="fade-top">
                    <video playsinline autoplay muted loop style="max-width: 100%; height: auto;">
                        <source src="{{ asset('stock-market7.mp4') }}" type="video/mp4">
                    </video>
                </a>
                <h2 class="width-650" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 1;">
                    @lang('public.home page 23')
                </h2>
                <hr class="space" />
            </div>
            
        </section>
        {{-- <section class="section-base">
            <div class="container">
                <div class="row align-items-center" data-anima="fade-bottom" data-time="1000">
                    <div class="col-lg-6">
                        <img src="http://via.placeholder.com/590x364" alt="" />
                    </div>
                    <div class="col-lg-6">
                        <div class="title">
                            <h2>You should choose us</h2>
                            <p>Exclusive benefits</p>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet consecteture Duis aute irure dolor innocente reprehenderit
                            in voluptate velit esse cillum dolore eu fugiat nulla.
                        </p>
                        <hr class="space-sm" />
                        <div class="grid-list boxed-area list-gallery" data-columns="4" data-lightbox-anima="fade-top">
                            <div class="grid-box">
                                <div class="grid-item">
                                    <a class="img-box" href="http://via.placeholder.com/800x500">
                                        <img src="http://via.placeholder.com/800x500" alt="">
                                    </a>
                                </div>
                                <div class="grid-item">
                                    <a class="img-box" href="http://via.placeholder.com/800x500">
                                        <img src="http://via.placeholder.com/800x500" alt="">
                                    </a>
                                </div>
                                <div class="grid-item">
                                    <a class="img-box" href="http://via.placeholder.com/800x500">
                                        <img src="http://via.placeholder.com/800x500" alt="">
                                    </a>
                                </div>
                                <div class="grid-item">
                                    <a class="img-box" href="http://via.placeholder.com/800x500">
                                        <img src="http://via.placeholder.com/800x500" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <hr class="space-sm" />
                        <a href="#" class="btn-text active">View services</a>
                    </div>
                </div>
                <hr class="space" />
                <hr class="space-xs" />
            </div>
        </section> --}}
        {{-- <section class="section-base section-overflow-top"> --}}
        <section class="section-base">
            <div class="container">
                <table class="table table-grid table-border align-left boxed-area table-6-md">
                    <tbody>
                        <tr>
                            <td>
                                <div class="counter counter-horizontal counter-icon">
                                    <i class="im-globe text-md"></i>
                                    <div>
                                        <h3>@lang('public.home page 27')</h3>
                                        <div class="value">
                                            <span style="font-size:10px;">Unit 1112, The Metropolis Tower, <br> 10 Metroplis Drive, Hung Hom, Hong Kong</span>
                                            {{-- <span>+</span> --}}
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="counter counter-horizontal counter-icon">
                                    <i class="im-business-man text-md"></i>
                                    <div>
                                        <h3>@lang('public.home page 28')</h3>
                                        <div class="value">
                                            <span style="font-size:10px;">info@vanwardintl.com</span>
                                            {{-- <span>+</span> --}}
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="counter counter-horizontal counter-icon">
                                    <i class="im-support text-md"></i>
                                    <div>
                                        <h3>@lang('public.home page 29')</h3>
                                        <div class="value">
                                            <span style="font-size:10px;">+852 5808 8687</span>
                                            {{-- <span>+</span> --}}
                                        </div>
                                    </div>
                                </div>
                            </td>
                            {{-- <td>
                                <div class="counter counter-horizontal counter-icon">
                                    <i class="im-support text-md"></i>
                                    <div>
                                        <h3>Team members</h3>
                                        <div class="value">
                                            <span class="text-md" data-to="30" data-speed="5000">30</span>
                                            <span>+</span>
                                        </div>
                                    </div>
                                </div>
                            </td> --}}
                        </tr>
                    </tbody>
                </table>
                {{-- <div class="row" data-anima="fade-bottom" data-time="1000">
                    <div class="col-lg-3">
                        <div class="title">
                            <h2>The big family</h2>
                            <p>Our team</p>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipiscing elitsed do eiusmod tempor incididu.
                        </p>
                        <a href="#" class="btn-text active">View the team</a>
                    </div>
                    <div class="col-lg-9">
                        <div class="grid-list" data-columns="3" data-columns-sm="2" data-columns-xs="1">
                            <div class="grid-box">
                                <div class="grid-item">
                                    <div class="cnt-box cnt-box-team">
                                        <img src="http://via.placeholder.com/450x450" alt="" />
                                        <div class="caption">
                                            <h2>Frank De Vinci</h2>
                                            <span>Marketing</span>
                                            <span class="icon-links">
                                                <a href="#" target="_blank"><i class="icon-facebook"></i></a>
                                                <a href="#" target="_blank"><i class="icon-twitter"></i></a>
                                                <a href="#" target="_blank"><i class="icon-instagram"></i></a>
                                            </span>
                                            <p>
                                                Lorem ipsum dolor sitamet consectetur eiusmo.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="cnt-box cnt-box-team ">
                                        <img src="http://via.placeholder.com/450x450" alt="" />
                                        <div class="caption">
                                            <h2>Donald Cort</h2>
                                            <span>Social media</span>
                                            <span class="icon-links">
                                                <a href="#" target="_blank"><i class="icon-facebook"></i></a>
                                                <a href="#" target="_blank"><i class="icon-twitter"></i></a>
                                                <a href="#" target="_blank"><i class="icon-instagram"></i></a>
                                            </span>
                                            <p>
                                                Lorem ipsum dolor sitamet consectetur eiusmo.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="cnt-box cnt-box-team">
                                        <img src="http://via.placeholder.com/450x450" alt="" />
                                        <div class="caption">
                                            <h2>Alicia Sandre</h2>
                                            <span>Engeneer</span>
                                            <span class="icon-links">
                                                <a href="#" target="_blank"><i class="icon-facebook"></i></a>
                                                <a href="#" target="_blank"><i class="icon-twitter"></i></a>
                                                <a href="#" target="_blank"><i class="icon-instagram"></i></a>
                                            </span>
                                            <p>
                                                Lorem ipsum dolor sitamet consectetur eiusmo.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </section>
    </main>
    <i class="scroll-top-btn scroll-top show"></i>
@endsection