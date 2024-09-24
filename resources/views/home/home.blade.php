@extends('home.base')
@section('content')

    <main>

        <div style="height: auto;" class="uk-section uk-padding-remove-vertical in-slideshow-gradient">
            <div id="particles-js" class="uk-light in-slideshow uk-background-contain"
                 style="height: auto; background: url('{{asset('home/img/bimg.png.gif')}}')no-repeat center center / cover" data-src="img/in-equity-decor-1.svg"
                 data-uk-img data-uk-slideshow>
                <hr>
                <ul class="uk-slideshow-items" style="height: auto;">
                    <li class="uk-flex uk-flex-middle">
                        <div class="uk-container">
                            <div class="uk-grid-large uk-flex-middle" data-uk-grid>
                                <div class="uk-width-1-2@s in-slide-text">
                                    <p class="in-badge-text uk-text-small uk-margin-remove-bottom ">
                                        <a href="{{url('about')}}">
                                            <span class="uk-label uk-label-success in-label-small">Learn More</span>
                                            About {{$siteName}} </a>
                                    </p>
                                    <h1 class="uk-heading-small">We are experts in <span class="in-highlight">financial</span> services.</h1>
                                    <p class="uk-text-lead">
                                        Our mission is to create wealth for our clients irrespective of market flow.
                                    </p>
                                    <div class="uk-grid-medium uk-child-width-1-1@m uk-child-width-1-1@s uk-margin-medium-top">
                                        <p>
                                            <a href="{{route('login')}}"
                                               class="uk-button uk-button-primary uk-border-rounded">Login<i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                                            <a href="{{route('register')}}"
                                               class="uk-button uk-button-primary uk-border-rounded uk-margin-left"
                                            style="background-color:green;">Create Account<i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="uk-flex uk-flex-middle">
                        <div class="uk-container">
                            <div class="uk-grid-large uk-flex-middle" data-uk-grid>
                                <div class="uk-width-1-2@s in-slide-text">
                                    <p class="in-badge-text uk-text-small uk-margin-remove-bottom ">
                                        <a href="#0">
                                            <span class="uk-label uk-label-success in-label-small">Learn More</span>
                                            Stock and Shares
                                        </a>
                                    </p>
                                    <h1 class="uk-heading-small uk-text-left">Invest in <span class="in-highlight">Stocks and Shares</span></h1>

                                    <div class="uk-grid-medium uk-child-width-1-3@m uk-child-width-1-2@s uk-margin-medium-top " data-uk-grid data-market="GOOGL,AAPL,MSFT">
                                        <div>
                                            <div class="uk-card uk-card-small uk-card-secondary uk-card-body uk-border-rounded uk-flex uk-flex-middle">
                                                <div class="in-symbol-logo">
                                                    <img src="{{asset('home/img/in-lazy.gif')}}" data-src="{{asset('home/img/in-symbol-google.svg')}}" alt="ticker" width="28" height="28" data-uk-img>
                                                </div>
                                                <div class="in-price">
                                                    <h6 class="uk-margin-remove">GOOGL<span class="uk-text-small"></span></h6>
                                                    <p class="uk-margin-remove"><span class="fas fa-spinner fa-xs"></span>loading...</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="uk-card uk-card-small uk-card-secondary uk-card-body uk-border-rounded uk-flex uk-flex-middle">
                                                <div class="in-symbol-logo">
                                                    <img src="{{asset('home/img/in-lazy.gif')}}" data-src="{{asset('home/img/in-symbol-apple.svg')}}" alt="ticker" width="28" height="28" data-uk-img>
                                                </div>
                                                <div class="in-price">
                                                    <h6 class="uk-margin-remove">AAPL<span class="uk-text-small"></span></h6>
                                                    <p class="uk-margin-remove"><span class="fas fa-spinner fa-xs"></span>loading...</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="uk-visible@m">
                                            <div class="uk-card uk-card-small uk-card-secondary uk-card-body uk-border-rounded uk-flex uk-flex-middle">
                                                <div class="in-symbol-logo">
                                                    <img src="{{asset('home/img/in-lazy.gif')}}" data-src="{{asset('home/img/in-symbol-microsoft.svg')}}" alt="ticker" width="28" height="28" data-uk-img>
                                                </div>
                                                <div class="in-price">
                                                    <h6 class="uk-margin-remove">MSFT<span class="uk-text-small"></span></h6>
                                                    <p class="uk-margin-remove"><span class="fas fa-spinner fa-xs"></span>loading...</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="uk-flex uk-flex-middle">
                        <div class="uk-container">
                            <div class="uk-grid-large uk-flex-middle" data-uk-grid>
                                <div class="uk-width-1-2@s in-slide-text">
                                    <p class="in-badge-text uk-text-small uk-margin-remove-bottom ">
                                        <a href="#0">
                                            <span class="uk-label uk-label-success in-label-small">Learn More</span>
                                            Cryptocurrency
                                        </a>
                                    </p>
                                    <h1 class="uk-heading-small uk-text-left">Explore <span class="in-highlight">Cryptocurrency</span>.</h1>
                                    <div class="uk-grid-medium uk-child-width-1-3@m uk-child-width-1-2@s uk-margin-medium-top " data-uk-grid data-market="MCD,AMZN,MSFT">
                                        <div>
                                            <div class="uk-card uk-card-small uk-card-secondary uk-card-body uk-border-rounded uk-flex uk-flex-middle">
                                                <div class="in-symbol-logo">
                                                    <img src="{{asset('home/img/in-lazy.gif')}}" data-src="{{asset('home/images/coins/btc.png')}}" alt="ticker" width="28" height="28" data-uk-img>
                                                </div>
                                                <div class="">
                                                    <h6 class="uk-margin-remove">BTC<span class="uk-text-small">-0.36%</span></h6>
                                                    <p class="uk-margin-remove my-danger"><span class="fas fa-arrow-circle-down fa-xs"></span> 30,541.99</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="uk-card uk-card-small uk-card-secondary uk-card-body uk-border-rounded uk-flex uk-flex-middle">
                                                <div class="in-symbol-logo">
                                                    <img src="{{asset('home/img/in-lazy.gif')}}" data-src="{{asset('home/images/coins/eth.png')}}" alt="ticker" width="28" height="28" data-uk-img>
                                                </div>
                                                <div class="">
                                                    <h6 class="uk-margin-remove">ETH<span class="uk-text-small">-0.46%</span></h6>
                                                    <p class="uk-margin-remove my-danger"><span class="fas fa-arrow-circle-down fa-xs"></span> 2,080.37</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="uk-visible@m">
                                            <div class="uk-card uk-card-small uk-card-secondary uk-card-body uk-border-rounded uk-flex uk-flex-middle">
                                                <div class="in-symbol-logo">
                                                    <img src="{{asset('home/images/coins/btc.png')}}" data-src="{{asset('home/images/coins/xrp.png')}}" alt="ticker" width="28" height="28" data-uk-img>
                                                </div>
                                                <div class="">
                                                    <h6 class="uk-margin-remove">XRP<span class="uk-text-small">-0.51%</span></h6>
                                                    <p class="uk-margin-remove my-danger"><span class="fas fa-arrow-circle-down fa-xs"></span>0.43</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="uk-flex uk-flex-middle">
                        <div class="uk-container">
                            <div class="uk-grid-large uk-flex-middle" data-uk-grid>
                                <div class="uk-width-1-2@s in-slide-text">
                                    <p class="in-badge-text uk-text-small uk-margin-remove-bottom ">
                                        <a href="{{url('services')}}">
                                            <span class="uk-label uk-label-success in-label-small">Learn More</span>
                                            Our Services
                                        </a>
                                    </p>
                                    <h1 class="uk-heading-small">Investors' <span class="in-highlight">#1 Choice</span></h1>
                                    <p class="uk-text-lead">
                                        Get the most out of Forex, Cryptocurrency, Real estate and more.
                                    </p>
                                    <div class="uk-grid-medium uk-child-width-1-1@m uk-child-width-1-1@s uk-margin-medium-top">
                                        <p>
                                            <a href="{{url('services')}}" class="uk-button uk-button-primary uk-border-rounded">Our Services<i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>

                <div class="uk-container" style="margin-top: -55px; margin-bottom: -150px;">
                    <div class="uk-grid uk-flex uk-flex-center" style="padding: 15px;">
                        <div class="uk-text-center uk-width-1-1@m" style="padding: 0px 15px;">

                            <div class="uk-card uk-card-secondary uk-card-body uk-border-rounded uk-box-shadow-large widget-card" style="padding: 15px; background: rgba(1, 1, 1, 0.4);">
                                <!-- TradingView Widget BEGIN -->
                                <div class="tradingview-widget-container">
                                    <div class="tradingview-widget-container__widget"></div>
                                    <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/" rel="noopener" target="_blank"><span class="blue-text">Markets</span></a> by TradingView</div>
                                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
                                        {
                                            "symbols": [
                                            {
                                                "proName": "FOREXCOM:SPXUSD",
                                                "title": "S&P 500"
                                            },
                                            {
                                                "proName": "FOREXCOM:NSXUSD",
                                                "title": "US 100"
                                            },
                                            {
                                                "proName": "FX_IDC:EURUSD",
                                                "title": "EUR/USD"
                                            },
                                            {
                                                "proName": "BITSTAMP:BTCUSD",
                                                "title": "Bitcoin"
                                            },
                                            {
                                                "proName": "BITSTAMP:ETHUSD",
                                                "title": "Ethereum"
                                            }
                                        ],
                                            "showSymbolLogo": true,
                                            "colorTheme": "dark",
                                            "isTransparent": false,
                                            "displayMode": "adaptive",
                                            "locale": "en"
                                        }
                                    </script>
                                </div>
                                <!-- TradingView Widget END -->
                            </div>
                        </div>

                    </div>
                </div>

                <!--div class="roundDiv">
                <div class="roundCoin"></div>
                </div-->

                <div class="flip-box" id="flipper">
                    <div class="flip-box-inner" id="coin">
                        <div class="flip-box-front">
                            <img src="{{asset('home/images/coins/btc.png')}}" id="coinImage" alt="" style="width:320px; height:auto;">
                        </div>
                    </div>
                </div>

                <!--div class="uk-container">
                    <div class="uk-position-relative" data-uk-grid>
                        <ul class="uk-slideshow-nav uk-dotnav uk-position-bottom-right uk-flex uk-flex-middle"></ul>
                    </div>
                </div-->
            </div>
        </div>




        <div class="uk-section in-equity-16" style="background-color:#FFFFFF;">
            <div class="uk-container uk-margin-top uk-margin-large-bottom">
                <div class="uk-grid uk-flex uk-flex-center in-offset-bottom-20">
                    <div class="uk-width-5-6@m uk-text-center">
                        <h1 class="uk-margin-remove">Learn more about <span class="in-highlight">{{$siteName}}</span></h1>
                        <p class="uk-text-lead uk-text-muted uk-margin-small-top">Your Number One Provider of Profitable Investment</p>
                        <div class="uk-grid-medium uk-child-width-1-4@m uk-child-width-1-2@s
                        uk-margin-large-top uk-margin-medium-bottom" data-uk-grid>
                            <div>
                                <a href="{{url('about')}}" class="uk-card uk-card-default uk-card-body">
                                    <i class="fas fa-address-card uk-margin-small-right"></i>
                                    <h5>About Us</h5>
                                    <p class="uk-text-small uk-text-muted">Experts in financial services</p>
                                </a>
                            </div>
                            <div>
                                <a href="{{url('about')}}" class="uk-card uk-card-default uk-card-body">
                                    <i class="fas fa-users uk-margin-small-right"></i>
                                    <h5>Our Team</h5>
                                    <p class="uk-text-small uk-text-muted">People behind our success</p>
                                </a>
                            </div>
                            <div>
                                <a href="{{url('services')}}" class="uk-card uk-card-default uk-card-body">
                                    <i class="fas fa-wrench uk-margin-small-right"></i>
                                    <h5>Our Services</h5>
                                    <p class="uk-text-small uk-text-muted">Our awesome services</p>
                                </a>
                            </div>
                            <div>
                                <a href="{{url('about')}}" class="uk-card uk-card-default uk-card-body">
                                    <i class="fas fa-comment-alt uk-margin-small-right"></i>
                                    <h5>Contact Us</h5>
                                    <p class="uk-text-small uk-text-muted">Any questions? Write us</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-grid uk-grid-large uk-flex uk-flex-middle" data-uk-grid>
                    <div class="uk-width-3-5@m">
                        <div class="in-equity-video">
                            <img class="uk-border-rounded uk-width-1-1" src="{{asset('home/img/in-lazy.gif')}}"
                                 data-src="{{asset('home/img/in-equity-16-image.jpeg')}}" alt="sample-images" width="533" height="355" data-uk-img>
                            <div class="uk-position-center">
                                <a href="#link" data-uk-toggle>
                                    <div class="in-play-button"></div>
                                    <i class="fas fa-play"></i>
                                </a>
                            </div>
                            <div class="uk-flex-top" data-uk-modal>
                                <div class="uk-modal-dialog uk-width-auto uk-margin-auto-vertical in-iframe">
                                    <button class="uk-modal-close-outside" type="button" data-uk-close></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-expand@m">
                        <h3>TRUST, EXPERIENCE, EXPERTISE AND KNOWLEDGE</h3>
                        <p class="uk-text-lead uk-margin-small-top">
                            We are an international financial company engaged in investment activities,
                            which are related to trading on financial markets and
                            cryptocurrency exchanges performed by qualified professional traders.
                        </p>
                        <a class="uk-button uk-button-secondary uk-border-rounded uk-margin-small-top" href="{{url('about')}}">Learn More<i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                    </div>
                </div>
            </div>
        </div>



        <div class="uk-section in-equity-3 in-offset-top-20" style="background-color:#000000;">
            <div class="uk-container uk-margin-large-bottom">
                <div class="uk-grid uk-flex uk-flex-middle">
                    <div class="uk-width-expand@m">
                        <h1 class="uk-margin-small-bottom">Investment that's <span class="in-highlight">suitable</span> for you</h1>
                        <h3 class="uk-margin-top" style="color: #ffffff;">Your financial freedom is our success</h3>
                        <hr class="uk-margin-medium-top uk-margin-medium-bottom">
                        <ul class="uk-list in-list-check">
                            <li>We are innovative</li>
                            <li>We are timely</li>
                            <li>We are reliable</li>
                        </ul>
                    </div>
                    <div class="uk-width-2xlarge uk-flex uk-flex-right uk-flex-center@s">
                        <div class="uk-card uk-card-body uk-card-default uk-border-rounded in-margin-top-60@s">
                            <img src="{{asset('home/images/ice.jpg')}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <div class="uk-section uk-section-primary uk-preserve-color in-equity-1"
             style="background-color:#FFFFFF;color: #000000;">
            <div class="uk-container">
                <div class="uk-grid">
                    <div class="uk-width-1-1">
                        <h1 class="uk-margin-remove">Invest on <span class="in-highlight">Crypto currency trading</span></h1>
                    </div>
                </div>
                <div class="uk-grid-match uk-grid-medium uk-child-width-1-3@m uk-child-width-1-2@s uk-margin-bottom"
                     data-uk-grid>


                    @foreach($packages as $package)
                        @inject('option','App\Defaults\Custom')
                        <div style="color: #000000;">
                            <div class="uk-card uk-card-body uk-card-secondary uk-border-rounded"
                                 style="border-style: solid;border-color: darkgoldenrod;">
                                <div class="uk-flex uk-flex-middle" style="color: #000000;">
                                    <span class="in-product-name red"><i class="fas fa-database"></i></span>
                                    <h4 class="uk-margin-remove" style="color: #000000;">{{$package->name}}</h4>
                                </div>
                                <p class="myPlan">
                                <ul class="myUl" style="color: #000000;">
                                    <li>Minimum: <b>${{number_format($package->minAmount,2)}}</b></li>
                                    <li>Maximum:
                                        <b>
                                            @if($package->isUnlimited !=1)
                                                ${{number_format($package->maxAmount,2)}}
                                            @else
                                                Unlimited
                                            @endif
                                        </b>
                                    </li>
                                    <li>{{$option->getReturnType($package->returnType)}} Profit:
                                        <b>{{$package->roi}}%</b></li>
                                    <li>Duration: <b>{{$package->Duration}}</b></li>
                                    <li>Referral Bonus <b>{{$package->referral}}%</b></li>
                                    @if(!empty($package->note))
                                        <li>{{$package->note}}</li>
                                    @endif

                                </ul>
                                </p>
                                <a  href="{{route('register')}}"
                                    class="uk-button uk-button-secondary uk-border-rounded uk-margin-small-top" style="background-color:green;">Get Started
                                    <i class="fas fa-arrow-circle-right uk-margin-small-left"></i>
                                </a>
                            </div>
                        </div>
                    @endforeach





                    <div>


                    </div>
                </div>
            </div>
            <div class="uk-section uk-section-secondary"
                 style="background-color: #000000;">
                <div class="uk-container uk-margin-medium-top uk-margin-medium-bottom" >
                    <div class="uk-grid uk-flex uk-flex-center">
                        <div class="uk-text-center">
                            <h1>Invest on <span class="in-highlight">most popular</span> Market</h1>
                            <p class="uk-text-lead uk-margin-medium-bottom">Invest on our extensive range of CFDs on FX, Commodities, Cryptocurrencies, Shares, ETFs and more. Low costs, fast execution and 24/7 support.</p>
                            <div class="uk-card uk-card-secondary uk-card-body uk-border-rounded uk-box-shadow-large widget-card">
                                <!-- TradingView Widget BEGIN -->
                                <div class="tradingview-widget-container">
                                    <div id="tradingview_72dda"></div>
                                    <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/AAPL/" rel="noopener" target="_blank"><span class="blue-text">Apple</span></a> by TradingView</div>
                                    <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                                    <script type="text/javascript">
                                        new TradingView.MediumWidget(
                                            {
                                                "symbols": [
                                                    [
                                                        "Apple",
                                                        "AAPL|1D"
                                                    ],
                                                    [
                                                        "Google",
                                                        "GOOGL|1D"
                                                    ],
                                                    [
                                                        "Microsoft",
                                                        "MSFT|1D"
                                                    ]
                                                ],
                                                "chartOnly": false,
                                                "width": "100%",
                                                "height": "100%",
                                                "locale": "en",
                                                "colorTheme": "white",
                                                "autosize": false,
                                                "showVolume": false,
                                                "hideDateRanges": false,
                                                "scalePosition": "right",
                                                "scaleMode": "Normal",
                                                "fontFamily": "-apple-system, BlinkMacSystemFont, Trebuchet MS, Roboto, Ubuntu, sans-serif",
                                                "noTimeScale": false,
                                                "valuesTracking": "1",
                                                "chartType": "line",
                                                "fontColor": "#6a6d78",
                                                "gridLineColor": "rgba(240, 243, 250, 0.06)",
                                                "backgroundColor": "#131722",
                                                "container_id": "tradingview_72dda"
                                            }
                                        );
                                    </script>
                                </div>
                                <!-- TradingView Widget END -->
                            </div>
                        </div>
                        <div class="">
                            <div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-margin-large-top in-current-stats uk-grid" data-uk-grid="">
                                <div class="uk-first-column">
                                    <div class="uk-flex uk-flex-left uk-flex-middle">
                                        <div class="uk-margin-right">
                                            <h2 class="uk-heading-small uk-margin-remove-bottom uk-text-primary">$91+</h2>
                                        </div>
                                        <div>
                                            <h3 class="uk-margin-small-bottom">Million</h3>
                                            <p class="uk-margin-remove uk-text-small uk-text-uppercase">Transactions</p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="uk-flex uk-flex-left uk-flex-middle">
                                        <div class="uk-margin-right">
                                            <h2 class="uk-heading-small uk-margin-remove-bottom uk-text-primary">49.6+</h2>
                                        </div>
                                        <div>
                                            <h3 class="uk-margin-small-bottom">Thousand</h3>
                                            <p class="uk-margin-remove uk-text-small uk-text-uppercase">Active accounts</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-visible@m">
                                    <div class="uk-flex uk-flex-left uk-flex-middle">
                                        <div class="uk-margin-right">
                                            <h2 class="uk-heading-small uk-margin-remove-bottom uk-text-primary">1.2+</h2>
                                        </div>
                                        <div>
                                            <h3 class="uk-margin-small-bottom">Thousand</h3>
                                            <p class="uk-margin-remove uk-text-small uk-text-uppercase">Running Days</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <div class="uk-section in-equity-7 uk-background-contain uk-background-top-left"
                 data-src="{{asset('home/img/in-equity-7-bg.jpg')}}" data-uk-img="">
                <div class="uk-container uk-margin-medium-top uk-margin-bottom">
                    <div class="uk-grid">
                        <div class="uk-width-1-2@m in-symbol-wrap">
                            <div class="uk-inline uk-dark uk-width-1-1 uk-height-1-1">
                            <span class="uk-position-absolute uk-transform-center in-symbol-1" style="left: 12%; top: 42%">
                                <img src="{{asset('home/img/in-equity-7-symbol-1.svg')}}" alt="symbol-logo">
                            </span>
                                <span class="uk-position-absolute uk-transform-center in-symbol-2" style="left: 58%; top: 18%">
                                <img src="{{asset('home/img/in-equity-7-symbol-2.svg')}}" alt="symbol-logo">
                            </span>
                                <span class="uk-position-absolute uk-transform-center in-symbol-3" style="left: 22%; top: 13%">
                                <img src="{{asset('home/img/in-equity-7-symbol-3.svg')}}" alt="symbol-logo">
                            </span>
                                <span class="uk-position-absolute uk-transform-center in-symbol-4" style="left: 70%; top: 60%">
                                <img src="{{asset('home/img/in-equity-7-symbol-4.svg')}}" alt="symbol-logo">
                            </span>
                                <span class="uk-position-absolute uk-transform-center in-symbol-5" style="left: 10%; top: 38%"></span>
                                <span class="uk-position-absolute uk-transform-center in-symbol-6" style="left: 52%; top: 6%"></span>
                                <span class="uk-position-absolute uk-transform-center in-symbol-7" style="left: 70%; top: 89%"></span>
                                <span class="uk-position-absolute uk-transform-center in-symbol-8" style="left: 32%; top: 97%"></span>
                            </div>
                        </div>
                        <div class="uk-width-1-2@m uk-margin-bottom">
                            <a class="uk-label" href='{{url('services')}}'>Explore all products<i class="fas fa-arrow-right fa-xs uk-margin-small-left"></i></a>
                            <h1 class="uk-margin-top">Trade with <span class="in-highlight">confidence</span></h1>
                            <p class="uk-text-lead uk-margin-top">Managed portfolios are built by experts to target sustainable, long-term results and the highest returns for your risk level.</p>
                            <div class="uk-grid-medium uk-child-width-1-2@m uk-child-width-1-2@s uk-margin-medium-top uk-grid" data-uk-grid="">
                                <div class="uk-first-column">
                                    <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-box-shadow-medium uk-text-center">
                                        <img class="uk-align-center" src="{{asset('home/img/in-lazy.png')}}"
                                             data-src="{{asset('home/img/in-equity-7-icon-1.svg')}}"
                                             alt="icon-1" data-width="" data-height="" data-uk-img="">
                                        <h4 class="uk-margin-remove">Stocks &amp; ETFs</h4>
                                        <a href="{{url('services')}}" class="uk-button uk-button-text uk-margin-top uk-margin-small-bottom">Learn more<i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                                    </div>
                                </div>
                                <div>
                                    <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-box-shadow-medium uk-text-center">
                                        <img class="uk-align-center" src="{{asset('home/img/crypto.png')}}"
                                             data-src="{{asset('home/img/in-equity-7-icon-2.svg')}}"
                                             alt="icon-2" data-width="" data-height="" data-uk-img="">
                                        <h4 class="uk-margin-remove">Cryptocurrencies</h4>
                                        <a href="{{url('services')}}"
                                           class="uk-button uk-button-text uk-margin-top uk-margin-small-bottom">Learn more<i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-section uk-section-primary  uk-background-contain uk-background-center in-equity-15"
                 data-src="{{asset('home/img/in-equity-15-bg.png')}}" style="background-color: #000000;">
                <div class="uk-container uk-margin-top uk-margin-medium-bottom">
                    <div class="uk-grid">
                        <div class="uk-width-3-5@m">
                            <h1 class="uk-margin-small-bottom">Security of Client's Funds</h1>
                            <p class="uk-text-lead uk-margin-remove-top">Your funds are fully secured when you invest with {{$siteName}}.</p>
                            <div class="uk-grid-large uk-child-width-1-2@m uk-child-width-1-2@s uk-margin-medium-top uk-margin-medium-bottom" data-uk-grid>
                                <div>
                                    <div class="uk-flex uk-flex-middle">
                                        <div class="uk-margin-right">
                                            <img src="{{asset('home/img/asic.png')}}"
                                                 data-src="{{asset('home/img/in-equity-15-icon-1.svg')}}"
                                                 alt="icon-1" width="96" data-height data-uk-img>
                                        </div>
                                        <div>
                                            <p class="uk-margin-remove">Regulated activities: FSO license No. CHE-399.474.466</p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="uk-flex uk-flex-middle">
                                        <div class="uk-margin-right">
                                            <img src="{{asset('home/img/key.png')}}"
                                                 data-src="{{asset('home/img/in-equity-15-icon-2.svg')}}"
                                                 alt="icon-2" width="96" data-height data-uk-img>
                                        </div>
                                        <div>
                                            <p class="uk-margin-remove">Negative balance client protection policy</p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="uk-flex uk-flex-middle in-offset-top-20">
                                        <div class="uk-margin-right">
                                            <img src="{{asset('home/img/fcf.png')}}"
                                                 data-src="{{asset('home/img/in-equity-15-icon-3.svg')}}"
                                                 alt="icon-3" width="96" data-height data-uk-img>
                                        </div>
                                        <div>
                                            <p class="uk-margin-remove">Participant of The Financial Commission fund</p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="uk-flex uk-flex-middle in-offset-top-20">
                                        <div class="uk-margin-right">
                                            <img src="{{asset('home/img/sec-logo.png')}}"
                                                 data-src="{{asset('home/img/in-equity-15-icon-4.svg')}}"
                                                 alt="icon-4" width="96" data-height data-uk-img>
                                        </div>
                                        <div>
                                            <p class="uk-margin-remove">Execution quality certificate of Verify My Trade</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="uk-flex uk-flex-left uk-flex-middle get-started">
                                <h5 class="uk-margin-remove" style="color: #0c63e4;">Ready to get started?</h5>
                                <a href="{{route('login')}}" style="background-color:#0c63e4;color:#FFFFFF;"
                                   class="uk-button uk-button-primary uk-border-rounded uk-margin-left">Login<i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                                <a href="{{route('register')}}" style="background-color:#40d498;"
                                   class="uk-button uk-button-secondary uk-border-rounded uk-margin-left">Create Account<i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="uk-section">
                <div class="uk-container">
                    <div class="uk-grid uk-flex uk-flex-center">
                        <div class="uk-width-1-2@m uk-text-center">
                            <p class="uk-text-lead uk-text-muted uk-margin-remove-bottom uk-text-center">FAQ's</p>
                            <h2 class="uk-margin-small-top uk-text-center">Frequently Asked Questions</h2>
                        </div>
                        <div class="uk-width-1-1@m">
                            <div class="uk-grid uk-child-width-1-2@m uk-margin-medium-top" data-uk-grid="">

                                <div class="uk-first-column">
                                    <ul class="in-faq-2 uk-accordion" data-uk-accordion="">
                                        <li>
                                            <a class="uk-accordion-title" href="#" style="font-size: 14px; font-weight: 600;">
                                                <div class="uk-card uk-card-default uk-card-body uk-border-rounded" style="padding: 15px 25px;">
                                                    <i class="fas fa-play fa-xs"></i>How long does it take to process my withdrawal?
                                                </div>
                                            </a>
                                            <div class="uk-accordion-content uk-card uk-card-default uk-card-body uk-border-rounded" hidden="">
                                                <p>Once we receive your withdrawal request we process immediately and send to your provided wallet address</p>
                                            </div>
                                        </li>

                                    </ul>
                                </div>

                                <div class="uk-first-column">
                                    <ul class="in-faq-2 uk-accordion" data-uk-accordion="">
                                        <li>
                                            <a class="uk-accordion-title" href="#" style="font-size: 14px; font-weight: 600;">
                                                <div class="uk-card uk-card-default uk-card-body uk-border-rounded" style="padding: 15px 25px;">
                                                    <i class="fas fa-play fa-xs"></i>how many times can i make a deposit?
                                                </div>
                                            </a>
                                            <div class="uk-accordion-content uk-card uk-card-default uk-card-body uk-border-rounded" hidden="">
                                                <p>You are allowed to make a deposit as much as you want on all our investment plans.</p>
                                            </div>
                                        </li>

                                    </ul>
                                </div>

                                <div class="uk-width-1-1@m uk-text-center">
                                    <a href="{{url('faq')}}" class="uk-label">See more FAQs<i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="uk-section uk-padding-remove-vertical in-equity-12" style="background-color: #000000;">
                <div class="">
                    <div class="uk-width-1-1@m">
                        <div class="uk-card uk-card-secondary uk-card-body  uk-box-shadow-medium uk-background-contain uk-background-top-center" data-src="{{asset('home/img/in-equity-12-bg.png')}}" data-uk-img="">
                            <div class="uk-grid-small uk-child-width-1-2@m uk-grid" data-uk-grid="">
                                <div class="uk-first-column">
                                    <h2>Begin trading in three steps</h2>
                                </div>
                                <div class="uk-flex uk-flex-right uk-flex-middle button-app">
                                    <a href="{{route('register')}}" class="uk-button uk-button-secondary uk-border-rounded uk-margin-left">Open account</a>
                                </div>
                                <div class="uk-width-expand@m uk-grid-margin uk-first-column">
                                    <div class="uk-flex uk-flex-left uk-margin-top in-steps active-step">
                                        <div class="uk-margin-right">
                                            <span class="in-icon-wrap circle">1</span>
                                        </div>
                                        <div class="uk-margin-right">
                                            <h5 class="uk-margin-remove">Register</h5>
                                            <p class="uk-margin-small-top">Create an account in few minutes, verify your email and you are set to go.</p>
                                        </div>
                                    </div>
                                    <div class="uk-flex uk-flex-left uk-margin-top in-steps">
                                        <div class="uk-margin-right">
                                            <span class="in-icon-wrap circle">2</span>
                                        </div>
                                        <div class="uk-margin-right">
                                            <h5 class="uk-margin-remove">Deposit</h5>
                                            <p class="uk-margin-small-top">Choose a deposit plan and payment method that is convenient for you, sit back and watch.</p>
                                        </div>
                                    </div>
                                    <div class="uk-flex uk-flex-left uk-margin-top in-steps">
                                        <div class="uk-margin-right">
                                            <span class="in-icon-wrap circle">3</span>
                                        </div>
                                        <div class="uk-margin-right">
                                            <h5 class="uk-margin-remove">Withdraw</h5>
                                            <p class="uk-margin-small-top">As soon as your deposit plan duration is completed, you can withdraw directly to your wallet.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-width-3-5@m uk-grid-margin">
                                    <img class="in-img-mockup" src="{{asset('home/img/in-lazy.gif')}}"
                                         data-src="{{asset('home/img/in-equity-12-mockup.png')}}"
                                         alt="mockup" width="643" data-height="" data-uk-img="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="uk-section uk-padding-remove-vertical uk-margin-medium-top uk-margin-medium-bottom">
                <div class="uk-container">
                    <div class="uk-grid">
                        <div class="uk-width-1-1 in-card-16">
                            <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                                <div class="uk-grid uk-flex-middle" data-uk-grid="">
                                    <div class="uk-width-1-1 uk-width-expand@m uk-first-column">
                                        <h5>We are an international financial company engaged in investment activities, which are related to
                                            trading on financial markets and cryptocurrency exchanges performed by qualified professional traders.
                                        </h5>
                                    </div>
                                    <div class="uk-width-auto">
                                        <a class="uk-button uk-button-primary uk-border-rounded" href="{{url('about')}}">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="uk-section">
                <div class="uk-container">
                    <div class="uk-grid">
                        <div class="uk-width-1-1">
                            <div class="uk-card uk-card-secondary uk-box-shadow-small uk-border-rounded uk-background-cover" style="background-image: url({{asset('home/img/blockit/in-card-background-1.jpg')}});">
                                <div class="uk-card-body">
                                    <h2 class="uk-margin-remove-bottom">Do You Have Any Questions?</h2>
                                    <p class="uk-margin-small-top">We are delighted to help you in getting the best out of our services.</p>
                                    <a class="uk-button uk-button-primary uk-border-rounded" href="{{url('faq')}}">Ask us a question</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="uk-section in-equity-11 uk-background-contain uk-background-top-right"
                 data-src="{{asset('home/img/in-equity-11-bg.png')}}"
                 data-uk-img="" style="background-image: url({{asset('home/img/in-equity-11-bg')}});">
                <div class="uk-container uk-margin-top uk-margin-bottom">
                    <div class="uk-width-3-3@m">
                        <div class="uk-grid-medium uk-grid-match uk-child-width-1-3@m uk-child-width-1-2@s uk-grid" data-uk-grid="">
                            <div class="uk-width-1-1 uk-first-column">
                                <h1 class="uk-margin-small-bottom">Trade the world’s most <span class="in-highlight">popular markets</span></h1>
                                <p class="uk-text-lead uk-margin-remove-top">Find your next trade with access to a wide range of markets.</p>
                            </div>

                            <a href="#" style="text-decoration: none;">
                                <div class="uk-grid-margin uk-first-column">
                                    <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-box-shadow-medium">
                                        <div class="uk-flex uk-flex-middle">
                                            <div class="uk-margin-right">
                                                <img src="{{asset('home/img/in-equity-11-icon-1.svg')}}"
                                                     data-src="{{asset('home/img/in-equity-11-icon-1.svg')}}" alt="icon-1" width="128" data-height="" data-uk-img="">
                                            </div>
                                            <div>
                                                <h5 class="uk-margin-small-bottom">Forex</h5>
                                                <p class="uk-text-small uk-margin-remove">Trade 40+ major, minor, and exotic currency pairs</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="#" style="text-decoration: none;">
                                <div class="uk-grid-margin">
                                    <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-box-shadow-medium">
                                        <div class="uk-flex uk-flex-middle">
                                            <div class="uk-margin-right">
                                                <img src="{{asset('home/img/in-equity-11-icon-2.svg')}}" data-src="{{asset('home/img/in-equity-11-icon-2.svg')}}" alt="icon-2" width="128" data-height="" data-uk-img="">
                                            </div>
                                            <div>
                                                <h5 class="uk-margin-small-bottom">Indices</h5>
                                                <p class="uk-text-small uk-margin-remove">Trade 15 of the most famous global indices as CFDs</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="#" style="text-decoration: none;">
                                <div class="uk-grid-margin">
                                    <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-box-shadow-medium">
                                        <div class="uk-flex uk-flex-middle">
                                            <div class="uk-margin-right">
                                                <img src="{{asset('home/img/in-equity-11-icon-3.svg')}}" data-src="{{asset('home/img/in-equity-11-icon-3.svg')}}" alt="icon-3" width="128" data-height="" data-uk-img="">
                                            </div>
                                            <div>
                                                <h5 class="uk-margin-small-bottom">Stocks</h5>
                                                <p class="uk-text-small uk-margin-remove">Trade the most covered &amp; highest-profile asset classes</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="#" style="text-decoration: none;">
                                <div class="uk-grid-margin uk-first-column">
                                    <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-box-shadow-medium">
                                        <div class="uk-flex uk-flex-middle">
                                            <div class="uk-margin-right">
                                                <img src="{{asset('home/img/in-equity-11-icon-4.svg')}}" data-src="{{asset('home/img/in-equity-11-icon-4.svg')}}" alt="icon-4" width="128" data-height="" data-uk-img="">
                                            </div>
                                            <div>
                                                <h5 class="uk-margin-small-bottom">Metals</h5>
                                                <p class="uk-text-small uk-margin-remove">Trade metals including Gold and Silver</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="#" style="text-decoration: none;">
                                <div class="uk-grid-margin">
                                    <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-box-shadow-medium">
                                        <div class="uk-flex uk-flex-middle">
                                            <div class="uk-margin-right">
                                                <img src="{{asset('home/img/in-equity-11-icon-5.svg')}}" data-src="{{asset('home/img/in-equity-11-icon-5.svg')}}" alt="icon-5" width="128" data-height="" data-uk-img="">
                                            </div>
                                            <div>
                                                <h5 class="uk-margin-small-bottom">Cryptos</h5>
                                                <p class="uk-text-small uk-margin-remove">Trade Bitcoin, Ethereum, Ripple and others.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="#" style="text-decoration: none;">
                                <div class="uk-grid-margin">
                                    <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-box-shadow-medium">
                                        <div class="uk-flex uk-flex-middle">
                                            <div class="uk-margin-right">
                                                <img src="{{asset('home/img/in-equity-11-icon-6.svg')}}" data-src="{{asset('home/img/in-equity-11-icon-6.svg')}}" alt="icon-6" width="128" data-height="" data-uk-img="">
                                            </div>
                                            <div>
                                                <h5 class="uk-margin-small-bottom">Energies</h5>
                                                <p class="uk-text-small uk-margin-remove">Trade Brent Crude Oil, WTI, Natural Gas and Coal</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>
                </div>
            </div>


            {{--            <div class="uk-section in-equity-3 in-offset-top-20 uk-margin-top">--}}
            {{--                <div class="uk-container uk-margin-large-bottom">--}}
            {{--                    <div class="uk-grid uk-flex uk-flex-middle">--}}
            {{--                        <div class="uk-width-expand@m">--}}
            {{--                            <h1 class="uk-margin-small-bottom">Choose an <span class="in-highlight">investment product</span> that is suitable for you</h1>--}}
            {{--                            <h3 class="uk-margin-top uk-text-muted">Best market prices available so you can receive excellent conditions.</h3>--}}


            {{--                        </div>--}}
            {{--                        <div class="uk-width-2xlarge uk-flex uk-flex-right uk-flex-center@s">--}}
            {{--                            <div class="uk-card uk-card-body uk-card-default uk-border-rounded in-margin-top-60@s">--}}
            {{--                                <!-- TradingView Widget BEGIN -->--}}
            {{--                                <div class="tradingview-widget-container">--}}
            {{--                                    <div class="tradingview-widget-container__widget"></div>--}}
            {{--                                    <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/" rel="noopener" target="_blank"><span class="blue-text">Financial Markets</span></a> by TradingView</div>--}}
            {{--                                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>--}}
            {{--                                        {--}}
            {{--                                            "colorTheme": "light",--}}
            {{--                                            "dateRange": "12M",--}}
            {{--                                            "showChart": true,--}}
            {{--                                            "locale": "en",--}}
            {{--                                            "largeChartUrl": "",--}}
            {{--                                            "isTransparent": false,--}}
            {{--                                            "showSymbolLogo": true,--}}
            {{--                                            "showFloatingTooltip": false,--}}
            {{--                                            "width": "100%",--}}
            {{--                                            "height": "660",--}}
            {{--                                            "plotLineColorGrowing": "rgba(41, 98, 255, 1)",--}}
            {{--                                            "plotLineColorFalling": "rgba(41, 98, 255, 1)",--}}
            {{--                                            "gridLineColor": "rgba(240, 243, 250, 0)",--}}
            {{--                                            "scaleFontColor": "rgba(106, 109, 120, 1)",--}}
            {{--                                            "belowLineFillColorGrowing": "rgba(41, 98, 255, 0.12)",--}}
            {{--                                            "belowLineFillColorFalling": "rgba(41, 98, 255, 0.12)",--}}
            {{--                                            "belowLineFillColorGrowingBottom": "rgba(41, 98, 255, 0)",--}}
            {{--                                            "belowLineFillColorFallingBottom": "rgba(41, 98, 255, 0)",--}}
            {{--                                            "symbolActiveColor": "rgba(41, 98, 255, 0.12)",--}}
            {{--                                            "tabs": [--}}
            {{--                                            {--}}
            {{--                                                "title": "Indices",--}}
            {{--                                                "symbols": [--}}
            {{--                                                    {--}}
            {{--                                                        "s": "FOREXCOM:SPXUSD",--}}
            {{--                                                        "d": "S&P 500"--}}
            {{--                                                    },--}}
            {{--                                                    {--}}
            {{--                                                        "s": "FOREXCOM:NSXUSD",--}}
            {{--                                                        "d": "US 100"--}}
            {{--                                                    },--}}
            {{--                                                    {--}}
            {{--                                                        "s": "FOREXCOM:DJI",--}}
            {{--                                                        "d": "Dow 30"--}}
            {{--                                                    },--}}
            {{--                                                    {--}}
            {{--                                                        "s": "INDEX:NKY",--}}
            {{--                                                        "d": "Nikkei 225"--}}
            {{--                                                    },--}}
            {{--                                                    {--}}
            {{--                                                        "s": "INDEX:DEU40",--}}
            {{--                                                        "d": "DAX Index"--}}
            {{--                                                    },--}}
            {{--                                                    {--}}
            {{--                                                        "s": "FOREXCOM:UKXGBP",--}}
            {{--                                                        "d": "UK 100"--}}
            {{--                                                    }--}}
            {{--                                                ],--}}
            {{--                                                "originalTitle": "Indices"--}}
            {{--                                            },--}}
            {{--                                            {--}}
            {{--                                                "title": "Futures",--}}
            {{--                                                "symbols": [--}}
            {{--                                                    {--}}
            {{--                                                        "s": "CME_MINI:ES1!",--}}
            {{--                                                        "d": "S&P 500"--}}
            {{--                                                    },--}}
            {{--                                                    {--}}
            {{--                                                        "s": "CME:6E1!",--}}
            {{--                                                        "d": "Euro"--}}
            {{--                                                    },--}}
            {{--                                                    {--}}
            {{--                                                        "s": "COMEX:GC1!",--}}
            {{--                                                        "d": "Gold"--}}
            {{--                                                    },--}}
            {{--                                                    {--}}
            {{--                                                        "s": "NYMEX:CL1!",--}}
            {{--                                                        "d": "Crude Oil"--}}
            {{--                                                    },--}}
            {{--                                                    {--}}
            {{--                                                        "s": "NYMEX:NG1!",--}}
            {{--                                                        "d": "Natural Gas"--}}
            {{--                                                    },--}}
            {{--                                                    {--}}
            {{--                                                        "s": "CBOT:ZC1!",--}}
            {{--                                                        "d": "Corn"--}}
            {{--                                                    }--}}
            {{--                                                ],--}}
            {{--                                                "originalTitle": "Futures"--}}
            {{--                                            },--}}
            {{--                                            {--}}
            {{--                                                "title": "Bonds",--}}
            {{--                                                "symbols": [--}}
            {{--                                                    {--}}
            {{--                                                        "s": "CME:GE1!",--}}
            {{--                                                        "d": "Eurodollar"--}}
            {{--                                                    },--}}
            {{--                                                    {--}}
            {{--                                                        "s": "CBOT:ZB1!",--}}
            {{--                                                        "d": "T-Bond"--}}
            {{--                                                    },--}}
            {{--                                                    {--}}
            {{--                                                        "s": "CBOT:UB1!",--}}
            {{--                                                        "d": "Ultra T-Bond"--}}
            {{--                                                    },--}}
            {{--                                                    {--}}
            {{--                                                        "s": "EUREX:FGBL1!",--}}
            {{--                                                        "d": "Euro Bund"--}}
            {{--                                                    },--}}
            {{--                                                    {--}}
            {{--                                                        "s": "EUREX:FBTP1!",--}}
            {{--                                                        "d": "Euro BTP"--}}
            {{--                                                    },--}}
            {{--                                                    {--}}
            {{--                                                        "s": "EUREX:FGBM1!",--}}
            {{--                                                        "d": "Euro BOBL"--}}
            {{--                                                    }--}}
            {{--                                                ],--}}
            {{--                                                "originalTitle": "Bonds"--}}
            {{--                                            },--}}
            {{--                                            {--}}
            {{--                                                "title": "Forex",--}}
            {{--                                                "symbols": [--}}
            {{--                                                    {--}}
            {{--                                                        "s": "FX:EURUSD",--}}
            {{--                                                        "d": "EUR/USD"--}}
            {{--                                                    },--}}
            {{--                                                    {--}}
            {{--                                                        "s": "FX:GBPUSD",--}}
            {{--                                                        "d": "GBP/USD"--}}
            {{--                                                    },--}}
            {{--                                                    {--}}
            {{--                                                        "s": "FX:USDJPY",--}}
            {{--                                                        "d": "USD/JPY"--}}
            {{--                                                    },--}}
            {{--                                                    {--}}
            {{--                                                        "s": "FX:USDCHF",--}}
            {{--                                                        "d": "USD/CHF"--}}
            {{--                                                    },--}}
            {{--                                                    {--}}
            {{--                                                        "s": "FX:AUDUSD",--}}
            {{--                                                        "d": "AUD/USD"--}}
            {{--                                                    },--}}
            {{--                                                    {--}}
            {{--                                                        "s": "FX:USDCAD",--}}
            {{--                                                        "d": "USD/CAD"--}}
            {{--                                                    }--}}
            {{--                                                ],--}}
            {{--                                                "originalTitle": "Forex"--}}
            {{--                                            }--}}
            {{--                                        ]--}}
            {{--                                        }--}}
            {{--                                    </script>--}}
            {{--                                </div>--}}
            {{--                                <!-- TradingView Widget END -->--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}

            <div class="uk-section uk-section-secondary" style="background-color: #000000;">
                <div class="uk-container uk-margin-medium-top uk-margin-medium-bottom">
                    <div class="uk-grid uk-flex uk-flex-center">
                        <div class="uk-text-center">
                            <h1>Invest on <span class="in-highlight">Stock</span> Market</h1>
                            <p class="uk-text-lead uk-margin-medium-bottom">Invest on our extensive range of CFDs on FX, Commodities, Cryptocurrencies, Shares, ETFs and more. Low costs, fast execution and 24/7 support.</p>
                            <div class="uk-card uk-card-secondary uk-card-body uk-border-rounded uk-box-shadow-large widget-card">
                                <!-- TradingView Widget BEGIN -->
                                <!-- TradingView Widget BEGIN -->
                                <div class="tradingview-widget-container">
                                    <div id="tradingview_f4341"></div>
                                    <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                                    <script type="text/javascript">
                                        new TradingView.MediumWidget({
                                            "symbols": [
                                                ["Microsoft", "MSFT"],
                                                ["Google", "GOOGL"],
                                                ["Apple", "AAPL"]
                                            ],
                                            "chartOnly": false,
                                            "width": "100%",
                                            "height": "100%",
                                            "locale": "en",
                                            "colorTheme": "dark",
                                            "gridLineColor": "rgba(42, 46, 57, 0)",
                                            "fontColor": "#787B86",
                                            "isTransparent": true,
                                            "autosize": true,
                                            "showFloatingTooltip": true,
                                            "showVolume": false,
                                            "scalePosition": "no",
                                            "scaleMode": "Normal",
                                            "fontFamily": "Trebuchet MS, sans-serif",
                                            "noTimeScale": false,
                                            "chartType": "area",
                                            "lineColor": "#2962FF",
                                            "bottomColor": "rgba(41, 98, 255, 0)",
                                            "topColor": "rgba(41, 98, 255, 0.3)",
                                            "container_id": "tradingview_f4341"
                                        });

                                    </script>
                                </div>
                                <!-- TradingView Widget END -->
                            </div>
                        </div>
                        <div class="">
                            <div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-margin-large-top in-current-stats uk-grid" data-uk-grid="">
                                <div class="uk-first-column">
                                    <div class="uk-flex uk-flex-left uk-flex-middle">
                                        <div class="uk-margin-right">
                                            <h2 class="uk-heading-small uk-margin-remove-bottom uk-text-primary">$91+</h2>
                                        </div>
                                        <div>
                                            <h3 class="uk-margin-small-bottom">Million</h3>
                                            <p class="uk-margin-remove uk-text-small uk-text-uppercase">Transactions</p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="uk-flex uk-flex-left uk-flex-middle">
                                        <div class="uk-margin-right">
                                            <h2 class="uk-heading-small uk-margin-remove-bottom uk-text-primary">49.6+</h2>
                                        </div>
                                        <div>
                                            <h3 class="uk-margin-small-bottom">Thousand</h3>
                                            <p class="uk-margin-remove uk-text-small uk-text-uppercase">Active accounts</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-visible@m">
                                    <div class="uk-flex uk-flex-left uk-flex-middle">
                                        <div class="uk-margin-right">
                                            <h2 class="uk-heading-small uk-margin-remove-bottom uk-text-primary">1.2+</h2>
                                        </div>
                                        <div>
                                            <h3 class="uk-margin-small-bottom">Thousand</h3>
                                            <p class="uk-margin-remove uk-text-small uk-text-uppercase">Running Days</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="uk-section uk-section-secondary" style="background-color: #373840;">
                <div class="uk-container uk-margin-medium-top uk-margin-medium-bottom">
                    <div class="uk-grid uk-flex uk-flex-center">
                        <div class="uk-text-center" style="color: #ffffff;">
                            <h1 style="color: #ffffff;">Invest on <span class="in-highlight">Forex</span> Market</h1>
                            <p class="uk-text-lead uk-margin-medium-bottom" style="color: #ffffff;">Invest on our extensive range of CFDs on FX, Commodities, Cryptocurrencies, Shares, ETFs and more. Low costs, fast execution and 24/7 support.</p>

                            <div class="uk-card uk-card-secondary uk-card-body uk-border-rounded uk-box-shadow-large widget-card">
                                <!-- TradingView Widget BEGIN -->
                                <!-- TradingView Widget BEGIN -->
                                <div class="tradingview-widget-container">
                                    <div class="tradingview-widget-container__widget"></div>

                                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
                                        {
                                            "width": "100%",
                                            "height": "100%",
                                            "isTransparent": false,
                                            "autosize": true,
                                            "defaultColumn": "overview",
                                            "defaultScreen": "general",
                                            "market": "forex",
                                            "showToolbar": false,
                                            "colorTheme": "dark",
                                            "locale": "en"
                                        }

                                    </script>
                                </div>
                                <!-- TradingView Widget END -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>


            <div class="uk-section uk-section-secondary" style="background-color: #000000;">
                <div class="uk-container uk-margin-medium-top uk-margin-medium-bottom">
                    <div class="uk-grid uk-flex uk-flex-center">
                        <div class="uk-text-center">
                            <h1>Invest on <span class="in-highlight">Cryptocurrency</span> Market</h1>
                            <p class="uk-text-lead uk-margin-medium-bottom">Invest on our extensive range of CFDs on FX, Commodities, Cryptocurrencies, Shares, ETFs and more. Low costs, fast execution and 24/7 support.</p>

                            <div class="uk-card uk-card-secondary uk-card-body uk-border-rounded uk-box-shadow-large widget-card">
                                <!-- TradingView Widget BEGIN -->
                                <!-- TradingView Widget BEGIN -->
                                <div class="tradingview-widget-container">
                                    <div class="tradingview-widget-container__widget"></div>

                                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
                                        {
                                            "width": "100%",
                                            "height": "100%",
                                            "isTransparent": true,
                                            "autosize": true,
                                            "defaultColumn": "overview",
                                            "screener_type": "crypto_mkt",
                                            "displayCurrency": "USD",
                                            "colorTheme": "dark",
                                            "locale": "en"
                                        }

                                    </script>
                                </div>
                                <!-- TradingView Widget END -->
                            </div>
                            <p class="uk-text-small uk-text-muted"></p>
                        </div>

                    </div>
                </div>
            </div>

            <div class="uk-card uk-card-body uk-card-default uk-border-rounded in-margin-top-60@s"
                 style="background-color: #FFFFFF;">
                <img src="{{asset('home/img/sec-logo.png')}}">
            </div>

            <div class="uk-section in-equity-11 uk-background-contain uk-background-top-right" data-src="img/in-equity-11-bg.png" data-uk-img="" style="background-image: url(&quot;https://www.indonez.com/html-demo/Equity/img/in-equity-11-bg.png&quot;);">
                <div class="uk-container uk-margin-top uk-margin-bottom">
                    <div class="uk-width-3-3@m">
                        <div class="uk-grid-medium uk-grid-match uk-child-width-1-3@m uk-child-width-1-2@s uk-grid" data-uk-grid="">
                            <div class="uk-width-1-1 uk-first-column">
                                <h1 class="uk-margin-small-bottom">RISK DISCLAIMER</h1>
                                <p class="uk-text-lead uk-margin-remove-top">
                                    {{$siteName}} is regulated by the US Securities and Exchange Commission.
                                    The mission of the SEC is to protect investors; maintain fair, orderly,
                                    and efficient markets; and facilitate capital formation.
                                    {{$siteName}} is an investment company that . Direct access to over 50
                                    financial markets through one account. Any information contained on
                                    this website is provided to you for informational purposes only and
                                    should not be regarded as an offer or solicitation of an offer to buy
                                    or sell any investments or related services that may be referenced here.
                                    Investing in certain instruments, including stocks, options, futures,
                                    foreign currencies, and bonds involve a high level of risk.
                                    Trading on margin comes with substantial risk as well.
                                    You must be aware of these risks before opening an account to trade.
                                    The income you may get from online investing may go down as well as up.
                                    equityadvisorylimited.com is a registered investment dealer, a member of
                                    the United States Securities and Exchange Commission (SEC), the Investment
                                    Industry Regulatory Organization of Canada (IIROC) and a member of the
                                    Canadian Investor Protection Fund (CIPF), the benefits of which are
                                    limited to the activities undertaken by {{$siteName}}.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </main>
@endsection
