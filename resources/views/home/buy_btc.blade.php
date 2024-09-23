@extends('home.base')

@section('content')


    <div class="uk-section uk-section-secondary uk-preserve-color uk-background-contain uk-background-center in-equity-15" data-src="{{asset('home/img/in-equity-decor-1.svg')}}" data-uk-img>
        <div class="uk-container">
            <div class="uk-width-3-3@m">
                <div data-uk-grid="" class="uk-grid">
                    <div class="uk-width-1-2@s uk-width-2-3@m uk-first-column">
                        <h1 class="uk-margin-remove myWhite">{{$pageName}}</h1>
                        <p class="uk-text-lead uk-text-muted uk-margin-small-top">
                            We are Specialist in Financial Solutions </p>
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
        <div class="uk-section uk-section-secondary in-equity-8">
            <div class="uk-container uk-margin-medium-top uk-margin-medium-bottom">
                <div class="uk-grid uk-flex uk-flex-center">
                    <div class="uk-text-center">
                        <h1><span class="in-highlight">Binance</span></h1>
                        <p class="uk-text-lead uk-margin-medium-bottom">Buy, trade, and hold 600+ cryptocurrencies on Binance, At Binance, we believe that everyone should have the freedom to earn, hold, spend, share and give their money - no matter who you are or where you come from.</p>
                        <div class="uk-inline-clip uk-transition-toggle uk-border-rounded uk-margin-top">
                            <img class="uk-transition-scale-up uk-transition-opaque" src="{{asset('home/images/buycoin/binance.png')}}" alt="">
                        </div>
                    </div>
                    <div class="">
                        <div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-margin-large-top in-current-stats uk-grid" data-uk-grid="">
                            <div class="uk-first-column">
                                <div class="uk-flex uk-flex-left uk-flex-middle">
                                    <div class="uk-margin-right">
                                        <a href="https://www.binance.com/"><h2 class="uk-heading-small uk-margin-remove-bottom uk-text-primary">Visit</h2></a>
                                    </div>
                                    <div>
                                        <h3 class="uk-margin-small-bottom">Binance</h3>
                                        <p class="uk-margin-remove uk-text-small uk-text-uppercase"></p>
                                    </div>
                                </div>
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
                        <h1><span class="in-highlight">Coinbase</span></h1>
                        <p class="uk-text-lead uk-margin-medium-bottom">We are building the cryptoeconomy – a more fair, accessible, efficient, and transparent financial system enabled by crypto.
                            We started in 2012 with the radical idea that anyone, anywhere, should be able to easily and securely send and receive Bitcoin. Today, we offer a trusted and easy-to-use platform for accessing the broader cryptoeconomy.</p>
                        <div class="uk-inline-clip uk-transition-toggle uk-border-rounded uk-margin-top">
                            <img class="uk-transition-scale-up uk-transition-opaque" src="{{asset('home/images/buycoin/coinbase.png')}}" alt="">
                        </div>
                    </div>
                    <div class="">
                        <div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-margin-large-top in-current-stats uk-grid" data-uk-grid="">
                            <div class="uk-first-column">
                                <div class="uk-flex uk-flex-left uk-flex-middle">
                                    <div class="uk-margin-right">
                                        <a href="https://www.coinbase.com/"><h2 class="uk-heading-small uk-margin-remove-bottom uk-text-primary">Visit</h2></a>
                                    </div>
                                    <div>
                                        <h3 class="uk-margin-small-bottom">Coinbase</h3>
                                    </div>
                                </div>
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
                        <h1><span class="in-highlight">OKEx</span></h1>
                        <p class="uk-text-lead uk-margin-medium-bottom">OKX is an innovative cryptocurrency exchange with advanced financial services. We rely on blockchain technology to provide everything you need for wise trading and investment.</p>
                        <div class="uk-inline-clip uk-transition-toggle uk-border-rounded uk-margin-top">
                            <img class="uk-transition-scale-up uk-transition-opaque" src="{{asset('home/images/buycoin/okex.png')}}" alt="">
                        </div>
                    </div>
                    <div class="">
                        <div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-margin-large-top in-current-stats uk-grid" data-uk-grid="">
                            <div class="uk-first-column">
                                <div class="uk-flex uk-flex-left uk-flex-middle">
                                    <div class="uk-margin-right">
                                        <a href="https://www.okex.com/"><h2 class="uk-heading-small uk-margin-remove-bottom uk-text-primary">Visit</h2></a>
                                    </div>
                                    <div>
                                        <h3 class="uk-margin-small-bottom">OKEx</h3>
                                    </div>
                                </div>
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
                        <h1><span class="in-highlight">Kucoin</span></h1>
                        <p class="uk-text-lead uk-margin-medium-bottom">Behind KuCoin are two tech geeks who were early blockchain adopters. Having started coding at the age of 8 and founded his first startup at the age of 16, Michael immediately started to mine BTC when he heard about Bitcoin from his boss Eric in 2012. But when he tried to sell some BTC on Mt. Gox, he discovered that what was the world's largest platform at the time was difficult for beginners to use.</p>
                        <div class="uk-inline-clip uk-transition-toggle uk-border-rounded uk-margin-top">
                            <img class="uk-transition-scale-up uk-transition-opaque" src="{{asset('home/images/buycoin/kucoin.png')}}" alt="">
                        </div>
                    </div>
                    <div class="">
                        <div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-margin-large-top in-current-stats uk-grid" data-uk-grid="">
                            <div class="uk-first-column">
                                <div class="uk-flex uk-flex-left uk-flex-middle">
                                    <div class="uk-margin-right">
                                        <a href="https://www.kucoin.com/"><h2 class="uk-heading-small uk-margin-remove-bottom uk-text-primary">Visit</h2></a>
                                    </div>
                                    <div>
                                        <h3 class="uk-margin-small-bottom">Kucoin</h3>
                                    </div>
                                </div>
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
                        <h1><span class="in-highlight">FTX</span></h1>
                        <p class="uk-text-lead uk-margin-medium-bottom">FTX is a cryptocurrency exchange built by traders, for traders. FTX offers innovative products including industry-first derivatives, options, volatility products and leveraged tokens. We strive to develop a platform robust enough for professional trading firms and intuitive enough for first-time users.</p>
                        <div class="uk-inline-clip uk-transition-toggle uk-border-rounded uk-margin-top">
                            <img class="uk-transition-scale-up uk-transition-opaque" src="{{asset('home/images/buycoin/ftx.png')}}" alt="">
                        </div>
                    </div>
                    <div class="">
                        <div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-margin-large-top in-current-stats uk-grid" data-uk-grid="">
                            <div class="uk-first-column">
                                <div class="uk-flex uk-flex-left uk-flex-middle">
                                    <div class="uk-margin-right">
                                        <a href="https://www.FTX.com/"><h2 class="uk-heading-small uk-margin-remove-bottom uk-text-primary">Visit</h2></a>
                                    </div>
                                    <div>
                                        <h3 class="uk-margin-small-bottom">FTX</h3>
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
