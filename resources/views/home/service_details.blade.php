@extends('home.base')

@section('content')

    <div class="uk-section uk-section-secondary uk-preserve-color uk-background-contain uk-background-center in-equity-15" data-src="{{asset('home/img/in-equity-decor-1.svg')}}" data-uk-img>
        <div class="uk-container">
            <div class="uk-width-3-3@m">
                <div data-uk-grid="" class="uk-grid">
                    <div class="uk-width-1-2@s uk-width-2-3@m uk-first-column">
                        <h1 class="uk-margin-remove myWhite">{{$pageName}}</h1>
                        <p class="uk-text-lead uk-text-muted uk-margin-small-top"> </p>
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

        <div class="uk-section">
            <div class="uk-container">
                <div class="uk-grid uk-flex uk-flex-center">
                    <div class="uk-width-4-5@m">
                        <h1 class="uk-margin-remove uk-text-center"><span class="in-highlight">{{$service->title}}</span></h1><br>

                        <div class="uk-inline-clip uk-transition-toggle uk-border-rounded uk-margin-top">
                            <img class="uk-transition-scale-up uk-transition-opaque"
                                 src="{{asset('home/serv/'.$service->photo)}}" alt="">
                        </div>



                        <div class="uk-grid uk-grid-small uk-margin-top">
                            <div class="uk-width-expand">

                                <div class="">
                                    {!! $service->content !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

@endsection
