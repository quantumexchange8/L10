﻿<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home | Vanward</title>
    <meta name="description" content="">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-grid.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/glide.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/content-box.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/contact-form.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/media-box.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/skin.css') }}">
    <link rel="icon" href="{{ asset('assets/img/fav.png') }}">
</head>
<body>
    <div id="preloader"></div>
    <nav class="menu-top-logo menu-fixed" data-menu-anima="fade-in">
        <div class="container">
            <div class="menu-brand">
                <a href="#">
                    <img class="logo-default scroll-hide" src="{{ asset('assets/img/logo.png') }}" alt="logo" />
                    <img class="logo-retina scroll-hide" src="{{ asset('assets/img/logo.png') }}" alt="logo" />
                    <img class="logo-default scroll-show" src="{{ asset('assets/img/logo.png') }}" alt="logo" />
                    <img class="logo-retina scroll-show" src="{{ asset('assets/img/logo.png') }}" alt="logo" />
                </a>
            </div>
            <i class="menu-btn"></i>
            <div class="menu-cnt">
                <ul id="main-menu">
                    <li>
                        <a href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="dropdown">
                        <a href="#">Our Firm</a>
                        <ul>
                            <li class="dropdown-submenu">
                                <a>About</a>
                                <ul>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="team.html">Team</a></li>
                                    <li><a href="history.html">History</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a href="#">Careers</a>
                                <ul>
                                    <li><a href="service-1.html">Security audits</a></li>
                                    <li><a href="service-2.html">Artificial intelligence</a></li>
                                    <li><a href="service-3.html">Bots and support</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a>Others</a>
                                <ul>
                                    <li><a href="prices.html">Prices</a></li>
                                    <li><a href="faq.html">Faq</a></li>
                                    <li><a href="events.html">Events</a></li>
                                    <li><a href="gallery.html">Gallery</a></li>
                                    <li><a href="career.html">Career</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="elements/components/buttons.html">Elements</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#">Private Banking</a>
                        <ul>
                            <li class="dropdown-submenu">
                                <a>Projects list</a>
                                <ul>
                                    <li><a href="projects-1.html">Projects one</a></li>
                                    <li><a href="projects-2.html">Projects two</a></li>
                                    <li><a href="projects-3.html">Projects three</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a>Project details</a>
                                <ul>
                                    <li><a href="project-1.html">Project details one</a></li>
                                    <li><a href="project-2.html">Project details two</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#">Investment Management</a>
                        <ul>
                            <li><a href="blog-1.html">Classic</a></li>
                            <li><a href="blog-2.html">Grid</a></li>
                            <li><a href="blog-3.html">Masonry</a></li>
                            <li class="dropdown-submenu">
                                <a>Posts</a>
                                <ul>
                                    <li><a href="post-1.html">Post one</a></li>
                                    <li><a href="post-2.html">Post two</a></li>
                                    <li><a href="post-3.html">Post three</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#">Investor Services</a>
                        <ul>
                            <li><a href="blog-1.html">Classic</a></li>
                            <li><a href="blog-2.html">Grid</a></li>
                            <li><a href="blog-3.html">Masonry</a></li>
                            <li class="dropdown-submenu">
                                <a>Posts</a>
                                <ul>
                                    <li><a href="post-1.html">Post one</a></li>
                                    <li><a href="post-2.html">Post two</a></li>
                                    <li><a href="post-3.html">Post three</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Contacts</a>
                    </li>
                    <li class="nav-label">
                        
                    </li>
                    <li class="nav-label">
                        <a href="#">Client Login </a>
                    </li>
                </ul>
                <div class="menu-right">
                    <div class="custom-area">
                        Unit 1112, The Metropolis Tower, 10 Metroplis <br />
                        Drive, Hung Hom, Hong Kong <br/>
                        Call us: <a href="tel:+85258088687" style="color: #fff; text-decoration: none;">(+852) 5808 8687 </a>
                    </div>
                    <ul class="lan-menu">
                        <li class="dropdown">
                            <a href="#"><img src="{{ asset('assets/img/lang/en.svg') }}" style="width:18px; height:12px;" alt="lang" />EN </a>
                            <ul>
                                <li><a href="#"><img src="{{ asset('assets/img/lang/en.svg') }}" style="width:18px; height:12px;" alt="lang" />EN</a></li>
                                <li><a href="#"><img src="{{ asset('assets/img/lang/ar.svg') }}" style="width:18px; height:12px;" alt="lang" />AR</a></li>
                                <li><a href="#"><img src="{{ asset('assets/img/lang/zh.svg') }}" style="width:18px; height:12px;"alt="lang" />ZH</a></li>
                                <li><a href="#"><img src="{{ asset('assets/img/lang/da.svg') }}" style="width:18px; height:12px;" alt="lang" />DA</a></li>
                                <li><a href="#"><img src="{{ asset('assets/img/lang/nl.svg') }}" style="width:18px; height:12px;" alt="lang" />NL</a></li>
                                <li><a href="#"><img src="{{ asset('assets/img/lang/et.svg') }}" style="width:18px; height:12px;"alt="lang" />ET</a></li>
                                <li><a href="#"><img src="{{ asset('assets/img/lang/fi.svg') }}" style="width:18px; height:12px;" alt="lang" />FI</a></li>
                                <li><a href="#"><img src="{{ asset('assets/img/lang/fr.svg') }}" style="width:18px; height:12px;" alt="lang" />FR</a></li>
                                <li><a href="#"><img src="{{ asset('assets/img/lang/de.svg') }}" style="width:18px; height:12px;"alt="lang" />DE</a></li>
                                <li><a href="#"><img src="{{ asset('assets/img/lang/it.svg') }}" style="width:18px; height:12px;" alt="lang" />IT</a></li>
                                <li><a href="#"><img src="{{ asset('assets/img/lang/ja.svg') }}" style="width:18px; height:12px;"alt="lang" />JA</a></li>
                                <li><a href="#"><img src="{{ asset('assets/img/lang/no.svg') }}" style="width:18px; height:12px;" alt="lang" />NO</a></li>
                                <li><a href="#"><img src="{{ asset('assets/img/lang/pt.svg') }}" style="width:18px; height:12px;" alt="lang" />PT</a></li>
                                <li><a href="#"><img src="{{ asset('assets/img/lang/es.svg') }}" style="width:18px; height:12px;" alt="lang" />ES</a></li>
                                <li><a href="#"><img src="{{ asset('assets/img/lang/sv.svg') }}" style="width:18px; height:12px;"alt="lang" />SV</a></li>
                                <li><a href="#"><img src="{{ asset('assets/img/lang/gsw.svg') }}" style="width:18px; height:12px;"alt="lang" />gsw</a></li>
                                
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
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
                                <h1 class="text-uppercase">Wealth Planning</h1>
                            </li>
                            <li>
                                <h1 class="text-uppercase">Trust Services</h1>
                            </li>
                            <li>
                                <h1 class="text-uppercase">Private Equity</h1>
                            </li>
                        </ul>
                        <p>
                            We provide customised financial solutions that safeguard, expand, and enhance our clients overall financial situation. Client satisfaction is our top priority, and we spare no effort to exceed their expectations in everything we do.
                        </p>
                        <hr class="space-sm" />
                        <a href="#" class="btn btn-sm width-190 full-width-sm">Being a client</a>
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
                                    <h3>Wealth Management</h3>
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
                                    <h3>Corporate Advisory</h3>
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
                                    <h3>Private Equity</h3>
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
                                    <h3>Fixed Income</h3>
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
                        <ul class="slider" data-options="arrows:true,nav:false">
                            <li>
                                <a class="img-box img-box-caption btn-video lightbox" href="https://www.youtube.com/watch?v=Lb4IcGF5iTQ" data-lightbox-anima="fade-top">
                                    <img src="http://via.placeholder.com/800x500" alt="">
                                    <span>Albert Patterson</span>
                                </a>
                            </li>
                            <li>
                                <a class="img-box img-box-caption lightbox" href="http://via.placeholder.com/800x500" data-lightbox-anima="fade-top">
                                    <img src="http://via.placeholder.com/800x500" alt="">
                                    <span>Security team</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="title">
                            <h2>Our values and goals</h2>
                            <p>About us</p>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipiscing elitsed do eiusmod tempor incididunt utlabore et dolore magna aliqua.
                            Utenim ad minim veniam quis nostrud exercitation ullamco laboris.
                        </p>
                        <div class="box-sign">
                            <img alt="sign" src="{{ asset('assets/img/sign-dark.png') }}">
                            <b>Albert Patterson</b>
                            <span>Founder &amp; CEO</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-base section-color">
            <div class="container">
                <div class="row" data-anima="fade-bottom" data-time="1000">
                    <div class="col-lg-6">
                        <div class="title">
                            <h2>Core Technology services</h2>
                            <p>Our services</p>
                        </div>
                    </div>
                    <div class="col-lg-6 align-right align-left-md">
                        <hr class="space-sm hidden-md" />
                        <a href="#" class="btn-text active">All services</a>
                    </div>
                </div>
                <hr class="space" />
                <div class="grid-list" data-columns="3" data-columns-md="2" data-columns-sm="1" data-anima="fade-bottom" data-time="1000">
                    <div class="grid-box">
                        <div class="grid-item">
                            <div class="cnt-box cnt-box-info boxed" data-href="#">
                                <a href="#" class="img-box"><img src="http://via.placeholder.com/800x500" alt="" /></a>
                                <div class="caption">
                                    <h2>Security audit</h2>
                                    <div class="cnt-info">
                                        <div><span>Price</span><span>$50</span></div>
                                        <div><span>Type</span><span>Software</span></div>
                                        <div><span>Client</span><span>Private</span></div>
                                    </div>
                                    <p>
                                        Excepteur sint occaecat cupidatat non proidento in culpa qui officia deserunt mollit anim id est laborum.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="cnt-box cnt-box-info boxed" data-href="#">
                                <a href="#" class="img-box"><img src="http://via.placeholder.com/800x500" alt="" /></a>
                                <div class="caption">
                                    <h2>Performance checks</h2>
                                    <div class="cnt-info">
                                        <div><span>Price</span><span>$80</span></div>
                                        <div><span>Type</span><span>App</span></div>
                                        <div><span>Client</span><span>Private</span></div>
                                    </div>
                                    <p>
                                        Excepteur sint occaecat cupidatat non proidento in culpa qui officia deserunt mollit anim id est laborum.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="cnt-box cnt-box-info boxed" data-href="#">
                                <a href="#" class="img-box"><img src="http://via.placeholder.com/800x500" alt="" /></a>
                                <div class="caption">
                                    <h2>Vulnerability report</h2>
                                    <div class="cnt-info">
                                        <div><span>Price</span><span>$50</span></div>
                                        <div><span>Type</span><span>App</span></div>
                                        <div><span>Client</span><span>Business</span></div>
                                    </div>
                                    <p>
                                        Excepteur sint occaecat cupidatat non proidento in culpa qui officia deserunt mollit anim id est laborum.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="cnt-box cnt-box-info boxed" data-href="#">
                                <a href="#" class="img-box"><img src="http://via.placeholder.com/800x500" alt="" /></a>
                                <div class="caption">
                                    <h2>Web development</h2>
                                    <div class="cnt-info">
                                        <div><span>Price</span><span>$30</span></div>
                                        <div><span>Type</span><span>Saas</span></div>
                                        <div><span>Client</span><span>Business</span></div>
                                    </div>
                                    <p>
                                        Excepteur sint occaecat cupidatat non proidento in culpa qui officia deserunt mollit anim id est laborum.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="cnt-box cnt-box-info boxed" data-href="#">
                                <div class="extra-field">30% discount today</div>
                                <a href="#" class="img-box"><img src="http://via.placeholder.com/800x500" alt="" /></a>
                                <div class="caption">
                                    <h2>Legal contracts</h2>
                                    <div class="cnt-info">
                                        <div><span>Price</span><span>$100</span></div>
                                        <div><span>Type</span><span>Software</span></div>
                                        <div><span>Client</span><span>Business</span></div>
                                    </div>
                                    <p>
                                        Excepteur sint occaecat cupidatat non proidento in culpa qui officia deserunt mollit anim id est laborum.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="cnt-box cnt-box-info boxed" data-href="#">
                                <div class="extra-field">30% discount today</div>
                                <a href="#" class="img-box"><img src="http://via.placeholder.com/800x500" alt="" /></a>
                                <div class="caption">
                                    <h2>Strategic planning</h2>
                                    <div class="cnt-info">
                                        <div><span>Price</span><span>$100</span></div>
                                        <div><span>Type</span><span>Consulting</span></div>
                                        <div><span>Client</span><span>Business</span></div>
                                    </div>
                                    <p>
                                        Excepteur sint occaecat cupidatat non proidento in culpa qui officia deserunt mollit anim id est laborum.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-base">
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
        </section>
        <section class="section-image light align-center ken-burn-center" data-parallax="scroll" data-image-src="http://via.placeholder.com/1920x1080">
            <div class="container" data-anima="fade-bottom" data-time="1000">
                <a href="https://www.youtube.com/watch?v=Lb4IcGF5iTQ" class="btn-video lightbox" data-lightbox-anima="fade-top"></a>
                <hr class="space" />
                <h2 class="width-650">Find a <span class="text-line">evolved</span> and strong connection with software and hardware communication </h2>
                <hr class="space" />
                <table class="table table-grid table-border align-center table-logos table-10">
                    <tbody>
                        <tr>
                            <td>
                                <img src="http://via.placeholder.com/374x103" alt="" />
                            </td>
                            <td>
                                <img src="http://via.placeholder.com/374x103" alt="" />
                            </td>
                            <td>
                                <img src="http://via.placeholder.com/374x103" alt="" />
                            </td>
                            <td>
                                <img src="http://via.placeholder.com/374x103" alt="" />
                            </td>
                            <td>
                                <img src="http://via.placeholder.com/374x103" alt="" />
                            </td>
                            <td>
                                <img src="http://via.placeholder.com/374x103" alt="" />
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
        <section class="section-base section-color">
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
        </section>
        <section class="section-base">
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
        </section>
        <section class="section-base section-color">
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
        </section>
        <section class="section-base section-overflow-top">
            <div class="container">
                <table class="table table-grid table-border align-left boxed-area table-6-md">
                    <tbody>
                        <tr>
                            <td>
                                <div class="counter counter-horizontal counter-icon">
                                    <i class="im-globe text-md"></i>
                                    <div>
                                        <h3>Countries</h3>
                                        <div class="value">
                                            <span class="text-md" data-to="47" data-speed="5000">47</span>
                                            <span>+</span>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="counter counter-horizontal counter-icon">
                                    <i class="im-business-man text-md"></i>
                                    <div>
                                        <h3>Clients</h3>
                                        <div class="value">
                                            <span class="text-md" data-to="110" data-speed="5000">110</span>
                                            <span>+</span>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="counter counter-horizontal counter-icon">
                                    <i class=" im-charger text-md"></i>
                                    <div>
                                        <h3>Projects</h3>
                                        <div class="value">
                                            <span class="text-md" data-to="250" data-speed="5000">250</span>
                                            <span>+</span>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
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
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="row" data-anima="fade-bottom" data-time="1000">
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
                </div>
            </div>
        </section>
    </main>
    <i class="scroll-top-btn scroll-top show"></i>
    <footer class="light">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h3>Execoore</h3>
                    <p>Full suite enable teams to develop unique search and discovery experiences.</p>
                    <div class="icon-links icon-social icon-links-grid social-colors">
                        <a class="facebook"><i class="icon-facebook"></i></a>
                        <a class="twitter"><i class="icon-twitter"></i></a>
                        <a class="instagram"><i class="icon-instagram"></i></a>
                        <a class="pinterest"><i class="icon-pinterest"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <h3>Resources</h3>
                    <ul class="icon-list icon-line">
                        <li><a href="#">Partners and advertising</a></li>
                        <li><a href="#">About us and the company</a></li>
                        <li><a href="#">Services and projects</a></li>
                        <li><a href="#">Contact us online</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <ul class="text-list text-list-line">
                        <li><b>Address</b><hr /><p>139 Baker St, E1 7PT, London</p></li>
                        <li><b>Email</b><hr /><p>contacts@example.com</p></li>
                        <li><b>Phone</b><hr /><p>(02) 123 333 444</p></li>
                        <li><b>Opening hours</b><hr /><p>8am-5pm Mon - Fri</p></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-bar">
            <div class="container">
                <span>© 2019 Vanward International</span>
                <span><a href="#">Contact us</a> | <a href="#">Privacy policy</a></span>
            </div>
        </div>
        <link rel="stylesheet" href="{{ asset('assets/media/icons/iconsmind/line-icons.min.css') }}">
        <script src=" {{ asset('assets/scripts/jquery.min.js') }}"></script>
        <script src=" {{ asset('assets/scripts/main.js') }}"></script>
        <script src=" {{ asset('assets/scripts/parallax.min.js') }}"></script>
        <script src=" {{ asset('assets/scripts/glide.min.js') }}"></script>
        <script src=" {{ asset('assets/scripts/magnific-popup.min.js') }}"></script>
        <script src=" {{ asset('assets/scripts/tab-accordion.js') }}"></script>
        <script src=" {{ asset('assets/scripts/imagesloaded.min.js') }}"></script>
        <script src=" {{ asset('assets/scripts/progress.js') }}" async></script>
        <script src=" {{ asset('assets/scripts/custom.js') }}" async></script>
        <script src=" {{ asset('assets/scripts/contact-form/contact-form.js') }}" async></script>
    </footer>
</body>
</html>