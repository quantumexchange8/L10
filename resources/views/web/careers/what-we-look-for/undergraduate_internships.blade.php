@extends('layouts.main')
@section('title', 'Undergraduate Internships | What We Look For | Careers | Vanward International')

@section('content')
    @component('components.page-header', [
        'title' => __('public.undergraduate internships'),
        'url' => '/careers/what-we-look-for',
        'sub2' => __('public.what we look for'),
        'headerImage' => url('assets/img/banner66.jpg'),

    ])
    @endcomponent
    <main>
        <section class="section-base">
            <div class="container">
                <div class="row row-fit-lg">
                    <div class="col-lg-4">
                        {{-- <p>
                            @lang('public.our firm 2')
                        </p> --}}
                    </div>
                    <div class="col-lg-4">
                        {{-- <p>
                            Escolo ipsum dolor sit amet consectetur adipiscing elitsed do eiusmod tempore dolor in reprehenderite in voluptate.
                            Utenim ad minim venia. Duis aute irure dolor in reprehenderite in voluptate velit esse cillum dolore eurtclo
                            mertiso mortaccio della troia fugiat nulla pariature minollo ratiro.
                        </p> --}}
                    </div>
                    {{-- <div class="col-lg-4">
                        <ul class="slider light" data-options="arrows:false,nav:true">
                            <li>
                                <a class="img-box lightbox" href="http://via.placeholder.com/800x500">
                                    <img src="http://via.placeholder.com/800x500" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="http://via.placeholder.com/800x500">
                                    <img src="http://via.placeholder.com/800x500" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="http://via.placeholder.com/800x500">
                                    <img src="http://via.placeholder.com/800x500" alt="">
                                </a>
                            </li>
                        </ul>
                    </div> --}}
                </div>
                <hr class="space" />
                {{-- <div class="title">
                    <h2>Our mission and values</h2>
                    <p>What we do</p>
                </div> --}}
                <div class="row">
                    <div class="col-lg-8">
                        <p>
                            {{-- <strong>@lang('public.undergraduate internships')</strong> --}}
                        </p>
                    </div>
                    {{-- <div class="col-lg-4">
                        <div class="box-sign no-margin">
                            <img alt="sign" src="media/sign-dark.png">
                            <b>Albert Patterson</b>
                            <span>Founder &amp; CEO</span>
                        </div>
                    </div> --}}
                </div>
                <hr class="space" />
                <div class="row">
                <div class="col-md-12">
                    <div class="divider-s"></div>
                    <p class="paragraph">
                        <p>
                            @lang('public.undergraduate 1')
                        </p>
                        <br>
                        <p><strong>@lang('public.undergraduate 2')</strong></p>
                        <p>@lang('public.undergraduate 3')</p>
                        <p>@lang('public.undergraduate 4')</p>
                        <br>
                        <p><strong>@lang('public.undergraduate 5')</strong></p>
                        <div style="padding-left: 30px;">
                            <li>@lang('public.undergraduate 6') </li>
                            <li>@lang('public.undergraduate 7')</li>
                            <li>@lang('public.undergraduate 8')</li>
                            <li>@lang('public.undergraduate 9')</li>
                            <li>@lang('public.undergraduate 10')</li>
                        </div>
                        <br>
                        <p><strong>@lang('public.undergraduate 11')</strong></p>
                        <p>@lang('public.undergraduate 12')</p>
                        <br>
                        <p><strong>@lang('public.undergraduate 13')</strong></p>
                        @lang('public.undergraduate 14')
                    </p>
                </div>
                </div>
                {{-- <table class="table table-grid table-border align-left table-6-md">
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
                </table> --}}
            </div>
        </section>
    </main>
@endsection