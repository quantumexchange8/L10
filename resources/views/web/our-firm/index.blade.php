@extends('layouts.main')
@section('title', 'The Partnership | Vanward')

@section('content')
<style>
    .logo-default{
        width: 50px;
        height: auto;
        transform: scale(2.3); 
    }
</style>
    @component('components.page-header', [
        'title' => __('public.our firm'),
        'headerImage' => url('assets/img/banner1.jpg'),
        // 'url' => '/our-firm',
        // 'sub2' => __('public.our firm'),

    ])
    @endcomponent
    
    
    <main>
        <section class="section-base section-color">
            <div class="container">
                {{-- <ul class="slider arrows-inner-right" data-options="arrows:true,nav:false">
                    <li>
                        <a href="#" class="media-box media-box-reveal">
                            <img alt="" src="http://via.placeholder.com/1920x800">
                            <div class="caption">
                                <h2>Barcleys financial statements</h2>
                                <div class="extra-field">Barcleys</div>
                                <h3>December, 2020</h3>
                                <p>
                                    Lorem ipsum dolore consectetur adipisicing elito sedo incididunto pertinole.
                                    Duis aute irure dolor in reprehendero  in voluptate velit esse cilluo.
                                </p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="media-box media-box-reveal">
                            <img alt="" src="http://via.placeholder.com/1920x800">
                            <div class="caption">
                                <h2>Microsoft for blockchains</h2>
                                <div class="extra-field">Microsoft</div>
                                <h3>March, 2020</h3>
                                <p>
                                    Lorem ipsum dolore consectetur adipisicing elito sedo incididunto pertinole.
                                    Duis aute irure dolor in reprehendero  in voluptate velit esse cilluo.
                                </p>
                            </div>
                        </a>
                    </li>
                </ul> --}}
                {{-- <hr class="space" /> --}}
                <div class="maso-list" data-columns="3" data-columns-lg="2" data-columns-sm="1">
                    {{-- <div class="menu-inner">
                        <div><i class="menu-btn"></i><span>Menu</span></div>
                        <ul>
                            <li class="active"><a data-filter="maso-item" href="#">All</a></li>
                            <li><a data-filter="cat-1" href="#">Software</a></li>
                            <li><a data-filter="cat-2" href="#">Financial</a></li>
                            <li><a data-filter="cat-3" href="#">Business</a></li>
                            <li><a class="maso-order" data-sort="asc"></a></li>
                        </ul>
                    </div> --}}
                    {{-- <h2>@lang('public.our firm')</h2><br> --}}
                    <h4>@lang('public.our firm 1')</h4><br>
                    <div class="maso-box">
                        <div class="maso-item cat-2 cat-3">
                            <div class="cnt-box cnt-box-top boxed">
                                <a href="#" class="img-box"><img src={{ url('/resource/the-partnership.jpg') }} alt="" /></a>
                                <div class="caption">
                                    <h2>@lang('public.the partnership')</h2>
                                    {{-- <div class="extra-field">Google</div> --}}
                                    <p>
                                        @lang('public.our firm caption 1')
                                    </p>
                                    <a href="{{ route('web.our-firm.the_partnership') }}" class="btn-text">@lang('public.details')</a>
                                </div>
                            </div>
                        </div>
                        <div class="maso-item cat-1">
                            <div class="cnt-box cnt-box-top boxed">
                                <a href="#" class="img-box"><img src={{ url('/resource/sustainability.jpg') }} alt="" /></a>
                                <div class="caption">
                                    <h2>@lang('public.sustainability')</h2>
                                    {{-- <div class="extra-field">Google</div> --}}
                                    <p>
                                        @lang('public.our firm caption 2')
                                    </p>
                                    <a href="{{ route('web.our-firm.sustainability') }}" class="btn-text">@lang('public.details')</a>
                                </div>
                            </div>
                        </div>
                        <div class="maso-item cat-1">
                            <div class="cnt-box cnt-box-top boxed">
                                <a href="#" class="img-box"><img src={{ url('/resource/sustainability.jpg') }} alt="" /></a>
                                <div class="caption">
                                    <h2>@lang('public.our mission & profile')</h2>
                                    {{-- <div class="extra-field">Google</div> --}}
                                    <p>
                                        @lang('public.our firm caption 3')
                                    </p>
                                    <a href="{{ route('web.our-firm.our_mission_and_profile') }}" class="btn-text">@lang('public.details')</a>
                                </div>
                            </div>
                        </div>
                        <div class="maso-item cat-2 cat-3">
                            <div class="cnt-box cnt-box-top boxed">
                                <a href="#" class="img-box"><img src={{ url('/resource/philanthropy.jpg') }} alt="" /></a>
                                <div class="caption">
                                    <h2>@lang('public.careers')</h2>
                                    {{-- <div class="extra-field">Google</div> --}}
                                    <p>
                                        @lang('public.our firm caption 4')
                                    </p>
                                    <a href="{{ route('web.careers.index') }}" class="btn-text">@lang('public.details')</a>
                                </div>
                            </div>
                        </div>
                        <div class="maso-item cat-1">
                            <div class="cnt-box cnt-box-top boxed">
                                <a href="#" class="img-box"><img src={{ url('/resource/rewarding-you.jpg') }} alt="" /></a>
                                <div class="caption">
                                    <h2>@lang('public.philanthropy')</h2>
                                    {{-- <div class="extra-field">Google</div> --}}
                                    <p>
                                        @lang('public.our firm caption 4')
                                    </p>
                                    <a href="{{ route('web.our-firm.philanthropy') }}" class="btn-text">@lang('public.details')</a>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="maso-item cat-2 cat-3">
                            <div class="cnt-box cnt-box-top boxed">
                                <a href="#" class="img-box"><img src="http://via.placeholder.com/800x500" alt="" /></a>
                                <div class="caption">
                                    <h2>Open source and blockchain development</h2>
                                    <div class="extra-field">Microsoft</div>
                                    <p>
                                        Excepteur sint occaecat cupidatat non proidento in culpa qui officia deserunt mollit anim id est laborum.
                                    </p>
                                    <a href="#" class="btn-text">Project details</a>
                                </div>
                            </div>
                        </div>
                        <div class="maso-item cat-2">
                            <div class="cnt-box cnt-box-top boxed">
                                <a href="#" class="img-box"><img src="http://via.placeholder.com/800x500" alt="" /></a>
                                <div class="caption">
                                    <h2>Database artificial intelligence optimization</h2>
                                    <div class="extra-field">Oracle</div>
                                    <p>
                                        Excepteur sint occaecat cupidatat non proidento in culpa qui officia deserunt mollit anim id est laborum.
                                    </p>
                                    <a href="#" class="btn-text">Project details</a>
                                </div>
                            </div>
                        </div>
                        <div class="maso-item cat-2 cat-3">
                            <div class="cnt-box cnt-box-top boxed">
                                <a href="#" class="img-box"><img src="http://via.placeholder.com/800x500" alt="" /></a>
                                <div class="caption">
                                    <h2>Mobile banking app improvements</h2>
                                    <div class="extra-field">Barcleys</div>
                                    <p>
                                        Excepteur sint occaecat cupidatat non proidento in culpa qui officia deserunt mollit anim id est laborum.
                                    </p>
                                    <a href="#" class="btn-text">Project details</a>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </section>
    </main>
    @endsection