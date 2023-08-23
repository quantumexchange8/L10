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
                    <a href="{{ url('/') }}">@lang('public.home')</a>
                </li>
                <li class="dropdown">
                    <a href="{{ route('web.our-firm.index') }}">@lang('public.our firm')</a>
                    <ul>
                        <li>
                            <a href="{{ route('web.our-firm.the_partnership') }}">@lang('public.menu 1')</a>
                        </li>
                        <li class="dropdown-submenu">
                            <a href="{{ route('web.careers.index') }}">@lang('public.careers')</a>
                            <ul>
                                <li><a href="{{ route('web.careers.what_we_look_for') }}">@lang('public.menu 5')</a></li>
                                <li><a href="{{ route('web.careers.total_rewards') }}">@lang('public.menu 6')</a></li>
                                <li><a href="{{ route('web.careers.life_here') }}">@lang('public.menu 7')</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('web.our-firm.our_mission_and_profile') }}">@lang('public.menu 2')</a>
                        </li>
                        <li>
                            <a href="{{ route('web.our-firm.sustainability') }}">@lang('public.menu 3')</a>
                        </li>
                        <li>
                            <a href="{{ route('web.our-firm.philanthropy') }}">@lang('public.menu 4')</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="{{ route('web.private-banking.index') }}">@lang('public.private banking')</a>
                    <ul>
                        <li class="dropdown-submenu">
                            <a href="{{ route('web.private-banking.private_wealth_management') }}">@lang('public.private wealth management')</a>
                            <ul>
                                <li><a href="{{ route('web.private-banking.private-wealth-management.investment_advisory') }}">@lang('public.menu 8')</a></li>
                                <li><a href="{{ route('web.private-banking.private-wealth-management.wealth_planning') }}">@lang('public.menu 9')</a></li>
                                <li><a href="{{ route('web.private-banking.private-wealth-management.philanthropic_advisory') }}">@lang('public.menu 10')</a></li>
                                <li><a href="{{ route('web.private-banking.private-wealth-management.trust_services') }}">@lang('public.menu 11')</a></li>
                                <li><a href="{{ route('web.private-banking.private-wealth-management.private_client_landing') }}">@lang('public.menu 12')</a></li>
                                <li><a href="{{ route('web.private-banking.private-wealth-management.center_for_women_and_wealth') }}">@lang('public.menu 13')</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a href="{{ route('web.private-banking.corporate_advisory_and_banking') }}">@lang('public.corporate advisory')</a>
                            <ul>
                                <li><a href="{{ route('web.private-banking.corporate-advisory-and-banking.corporate_advisory') }}">@lang('public.menu 14')</a></li>
                                <li><a href="{{ route('web.private-banking.corporate-advisory-and-banking.corporate_banking') }}">@lang('public.menu 15')</a></li>
                                <li><a href="{{ route('web.private-banking.corporate-advisory-and-banking.center_for_family_business') }}">@lang('public.menu 16')</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a href="{{ route('web.private-banking.private_equity') }}">@lang('public.private equity')</a>
                            <ul>
                                <li><a href="{{ route('web.private-banking.private-equity.about_vanward') }}">@lang('public.menu 17')</a></li>
                                <li><a href="{{ route('web.private-banking.private-equity.investment_profile') }}">@lang('public.menu 18')</a></li>
                                <li><a href="{{ route('web.private-banking.private-equity.investment_strategy_and_transaction_types') }}">@lang('public.menu 19')</a></li>
                                <li><a href="{{ route('web.private-banking.private-equity.select_portfolio_companies') }}">@lang('public.menu 20')</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="{{ route('web.investment-management.index') }}">@lang('public.investment management')</a>
                    <ul>
                        <li class="dropdown-submenu">
                            <a class="header" href="{{ route('web.investment-management.public_equity') }}">@lang('public.public equity')</a>
                            <ul>
                                <li><a href="{{ route('web.investment-management.public-equity.us_large_cap_equity') }}">@lang('public.menu 21')</a></li>
                                <li><a href="{{ route('web.investment-management.public-equity.global_equity') }}">@lang('public.menu 22')</a></li>
                                <li><a href="{{ route('web.investment-management.public-equity.us_small_and_mid_cap_equity') }}">@lang('public.menu 23')</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a href="{{ route('web.investment-management.fixed_income') }}">@lang('public.fixed income')</a>
                            <ul>
                                <li><a href="{{ route('web.investment-management.fixed-income.taxable_fixed_income_strategies') }}">@lang('public.menu 24')</a></li>
                                <li><a href="{{ route('web.investment-management.fixed-income.tax_exempt_fixed_income_strategy') }}">@lang('public.menu 25')</a></li>
                                <li><a href="{{ route('web.investment-management.fixed-income.us_tips_strategy') }}">@lang('public.menu 26')</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="header" href="https://app.vanwardintl.com/en/applications/create/">@lang('public.open account')</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="{{ route('web.investor-services.index') }}">@lang('public.investor services')</a>
                    <ul>
                        <li class="dropdown-submenu">
                            <a href="{{ route('web.investor-services.custody_and_fund_services') }}">@lang('public.custody & fund services')</a>
                            <ul>
                                <li><a href="{{ route('web.investor-services.custody-and-fund-services.custody') }}">@lang('public.menu 27')</a></li>
                                <li><a href="{{ route('web.investor-services.custody-and-fund-services.depositary_and_trustee') }}">@lang('public.menu 28')</a></li>
                                <li><a href="{{ route('web.investor-services.custody-and-fund-services.fund_accounting') }}">@lang('public.menu 29')</a></li>
                                <li><a href="{{ route('web.investor-services.custody-and-fund-services.fund_administration') }}">@lang('public.menu 30')</a></li>
                                <li><a href="{{ route('web.investor-services.custody-and-fund-services.transfer_agency') }}">@lang('public.menu 31')</a></li>
                                <li><a href="{{ route('web.investor-services.custody-and-fund-services.global_tax') }}">@lang('public.menu 32')</a></li>
                                <li><a href="{{ route('web.investor-services.custody-and-fund-services.collateral_management') }}">@lang('public.menu 33')</a></li>
                                <li><a href="{{ route('web.investor-services.custody-and-fund-services.fund_order_and_custody') }}">@lang('public.menu 34')</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a href="{{ route('web.investor-services.specialist_expertise') }}">@lang('public.specialist expertise')</a>
                            <ul>
                                <li><a href="{{ route('web.investor-services.specialist-expertise.cross_border_funds') }}">@lang('public.menu 35')</a></li>
                                <li><a href="{{ route('web.investor-services.specialist-expertise.us_funds') }}">@lang('public.menu 36')</a></li>
                                <li><a href="{{ route('web.investor-services.specialist-expertise.consultants_and_advisors') }}">@lang('public.menu 37')</a></li>
                                <li><a href="{{ route('web.investor-services.specialist-expertise.distribution_intelligence') }}">@lang('public.menu 38')</a></li>
                                <li><a href="{{ route('web.investor-services.specialist-expertise.alternative_funds') }}">@lang('public.menu 39')</a></li>
                                <li><a href="{{ route('web.investor-services.specialist-expertise.exchange_traded_funds') }}">@lang('public.menu 40')</a></li>
                                <li><a href="{{ route('web.investor-services.specialist-expertise.insurance') }}">@lang('public.menu 41')</a></li>
                                <li><a href="{{ route('web.investor-services.specialist-expertise.regulatory_intelligence') }}">@lang('public.menu 42')</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a href="{{ route('web.investor-services.markets') }}">@lang('public.markets')</a>
                            <ul>
                                <li><a href="{{ route('web.investor-services.markets.foreign_exchange') }}">@lang('public.menu 43')</a></li>
                                <li><a href="{{ route('web.investor-services.markets.active_fx_execution') }}">@lang('public.menu 44')</a></li>
                                <li><a href="{{ route('web.investor-services.markets.infofx') }}">@lang('public.menu 45')</a></li>
                                <li><a href="{{ route('web.investor-services.markets.currency_hedging') }}">@lang('public.menu 46')</a></li>
                                <li><a href="{{ route('web.investor-services.markets.securities_lending') }}">@lang('public.menu 47')</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a href="{{ route('web.investor-services.investment_operations_and_technology_solutions') }}">@lang('public.investment operations & technology')</a>
                            <ul>
                                <li><a href="{{ route('web.investor-services.investment-operations-and-technology-solutions.technology_services') }}">@lang('public.menu 49')</a></li>
                                <li><a href="{{ route('web.investor-services.investment-operations-and-technology-solutions.middle_office_outsourcing') }}">@lang('public.menu 50')</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ url('/contact-us') }}">@lang('public.menu 51')</a>
                </li>
                <li class="nav-label">
                    
                </li>
                <li class="nav-label">
                    <a class="main-menu" href="https://app.vanwardintl.com/en/accounts/login/">@lang('public.client login')</a>
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