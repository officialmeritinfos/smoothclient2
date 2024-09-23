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
    <!-- START SECTION BANNER -->
    <main>
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
                                                <i class="fas fa-play fa-xs"></i>How do I create my account?
                                            </div>
                                        </a>
                                        <div class="uk-accordion-content uk-card uk-card-default uk-card-body uk-border-rounded" hidden="">
                                            <p>Registration process is very easy and will take a few moments to complete Simply click CREATE ACCOUNT button and fill in all the required fields</p>
                                        </div>
                                    </li>

                                </ul>
                            </div>

                            <div class="uk-first-column">
                                <ul class="in-faq-2 uk-accordion" data-uk-accordion="">
                                    <li>
                                        <a class="uk-accordion-title" href="#" style="font-size: 14px; font-weight: 600;">
                                            <div class="uk-card uk-card-default uk-card-body uk-border-rounded" style="padding: 15px 25px;">
                                                <i class="fas fa-play fa-xs"></i>How do I make a deposit?
                                            </div>
                                        </a>
                                        <div class="uk-accordion-content uk-card uk-card-default uk-card-body uk-border-rounded" hidden="">
                                            <p>To deposit funds in your trading account is quick and simple For your convenience you may choose one of the several available deposit methods To make a successful deposit please follow the steps below Login to your account Click on the DEPOSITS button in the DASHBOARD section Choose the deposit option And follow the steps to complete your transaction</p>
                                        </div>
                                    </li>

                                </ul>
                            </div>

                            <div class="uk-first-column">
                                <ul class="in-faq-2 uk-accordion" data-uk-accordion="">
                                    <li>
                                        <a class="uk-accordion-title" href="#" style="font-size: 14px; font-weight: 600;">
                                            <div class="uk-card uk-card-default uk-card-body uk-border-rounded" style="padding: 15px 25px;">
                                                <i class="fas fa-play fa-xs"></i>How long does my deposit take before it can reflect on my Investments account dashboard?
                                            </div>
                                        </a>
                                        <div class="uk-accordion-content uk-card uk-card-default uk-card-body uk-border-rounded" hidden="">
                                            <p>Your deposit will be reflected immediately once it is confirmed on the blockchain network</p>
                                        </div>
                                    </li>

                                </ul>
                            </div>

                            <div class="uk-first-column">
                                <ul class="in-faq-2 uk-accordion" data-uk-accordion="">
                                    <li>
                                        <a class="uk-accordion-title" href="#" style="font-size: 14px; font-weight: 600;">
                                            <div class="uk-card uk-card-default uk-card-body uk-border-rounded" style="padding: 15px 25px;">
                                                <i class="fas fa-play fa-xs"></i>How do I make a withdrawal?
                                            </div>
                                        </a>
                                        <div class="uk-accordion-content uk-card uk-card-default uk-card-body uk-border-rounded" hidden="">
                                            <p>To make a withdrawal request click the WITHDRAW button at the top center of your  dashboard and input the required details to withdraw</p>
                                        </div>
                                    </li>

                                </ul>
                            </div>

                            <div class="uk-first-column">
                                <ul class="in-faq-2 uk-accordion" data-uk-accordion="">
                                    <li>
                                        <a class="uk-accordion-title" href="#" style="font-size: 14px; font-weight: 600;">
                                            <div class="uk-card uk-card-default uk-card-body uk-border-rounded" style="padding: 15px 25px;">
                                                <i class="fas fa-play fa-xs"></i>How long does it take to process my withdrawal?
                                            </div>
                                        </a>
                                        <div class="uk-accordion-content uk-card uk-card-default uk-card-body uk-border-rounded" hidden="">
                                            <p>Once we receive your withdrawal request we process immediately and send to your bitcoin wallet</p>
                                        </div>
                                    </li>

                                </ul>
                            </div>

                            <div class="uk-first-column">
                                <ul class="in-faq-2 uk-accordion" data-uk-accordion="">
                                    <li>
                                        <a class="uk-accordion-title" href="#" style="font-size: 14px; font-weight: 600;">
                                            <div class="uk-card uk-card-default uk-card-body uk-border-rounded" style="padding: 15px 25px;">
                                                <i class="fas fa-play fa-xs"></i>Can I have more than one account?
                                            </div>
                                        </a>
                                        <div class="uk-accordion-content uk-card uk-card-default uk-card-body uk-border-rounded" hidden="">
                                            <p>Yes you can.</p>
                                        </div>
                                    </li>

                                </ul>
                            </div>

                            <div class="uk-first-column">
                                <ul class="in-faq-2 uk-accordion" data-uk-accordion="">
                                    <li>
                                        <a class="uk-accordion-title" href="#" style="font-size: 14px; font-weight: 600;">
                                            <div class="uk-card uk-card-default uk-card-body uk-border-rounded" style="padding: 15px 25px;">
                                                <i class="fas fa-play fa-xs"></i>Is this company properly registered?
                                            </div>
                                        </a>
                                        <div class="uk-accordion-content uk-card uk-card-default uk-card-body uk-border-rounded" hidden="">
                                            <p>Yes we are officially and properly registered with the Switzerland company house our company registration number is CHE-399.474.466

                                            </p>
                                        </div>
                                    </li>

                                </ul>
                            </div>

                            <div class="uk-first-column">
                                <ul class="in-faq-2 uk-accordion" data-uk-accordion="">
                                    <li>
                                        <a class="uk-accordion-title" href="#" style="font-size: 14px; font-weight: 600;">
                                            <div class="uk-card uk-card-default uk-card-body uk-border-rounded" style="padding: 15px 25px;">
                                                <i class="fas fa-play fa-xs"></i>Can I have more than two accounts?
                                            </div>
                                        </a>
                                        <div class="uk-accordion-content uk-card uk-card-default uk-card-body uk-border-rounded" hidden="">
                                            <p>Yes.</p>
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

                        </div>
                    </div>
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
