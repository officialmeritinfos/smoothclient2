@extends('home.base')

@section('content')
    <div class="uk-section uk-section-secondary uk-preserve-color uk-background-contain uk-background-center in-equity-15" data-src="img/in-equity-decor-1.svg" data-uk-img>
        <div class="uk-container">
            <div class="uk-width-3-3@m">
                <div data-uk-grid="" class="uk-grid">
                    <div class="uk-width-1-2@s uk-width-2-3@m uk-first-column">
                        <h1 class="uk-margin-remove myWhite">{{$pageName}}</h1>
                        <p class="uk-text-lead uk-text-muted uk-margin-small-top">
                        </p>
                    </div>
                    <div class="uk-width-1-2@s uk-width-expand@m">
                        <ul class="uk-list uk-list-large ">
                            <li>
                                <div class="uk-flex uk-flex-middle">
                                    <i class="fas fa-exchange-alt fa-lg in-icon-wrap primary-color uk-margin-right"></i>
                                    <div>
                                        <h2 class="uk-margin-remove-bottom uk-text-muted">$ 91<span class="myYello" style="font-size: 20px;">Million+</span></h2>
                                        <span class="uk-label  in-label-small">Total Transactions</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="uk-flex uk-flex-middle">
                                    <i class="fas fa-user-tie fa-lg in-icon-wrap primary-color uk-margin-right"></i>
                                    <div>
                                        <h2 class="uk-margin-remove-bottom uk-text-muted">49.6<span class="myYello" style="font-size: 20px;">Thousand+</span></h2>
                                        <span class="uk-label in-label-small">Active Investors</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <main>



        <div class="uk-section uk-section-primary uk-preserve-color in-equity-1">
            <div class="uk-container">
                <div class="uk-grid">
                    <div class="uk-width-1-1">
                        <h1 class="uk-margin-remove">Invest on <span class="in-highlight">Crypto currency trading</span></h1>
                    </div>
                </div>
                <div class="uk-grid-match uk-grid-medium uk-child-width-1-3@m uk-child-width-1-2@s uk-margin-bottom" data-uk-grid>

                    @foreach($packages as $package)
                        @inject('option','App\Defaults\Custom')
                        <div style="color: #ffffff;">
                            <div class="uk-card uk-card-body uk-card-secondary uk-border-rounded"
                                 style="border-style: solid;border-color: darkgoldenrod;">
                                <div class="uk-flex uk-flex-middle" style="color: #ffffff;">
                                    <span class="in-product-name red"><i class="fas fa-database"></i></span>
                                    <h4 class="uk-margin-remove" style="color: #ffffff;">{{$package->name}}</h4>
                                </div>
                                <p class="myPlan">
                                <ul class="myUl" style="color: #ffffff;">
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
                                    class="uk-button uk-button-text myYello uk-float-right
                                    uk-position-bottom-right">Get Started
                                    <i class="fas fa-arrow-circle-right uk-margin-small-left"></i>
                                </a>
                            </div>
                        </div>
                    @endforeach

                    <div>


                    </div>
                </div>
            </div>


            <div class="uk-section uk-section-secondary in-equity-8">
                <div class="uk-container uk-margin-medium-top uk-margin-medium-bottom">
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
                                                "colorTheme": "dark",
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


    </main>


@endsection
