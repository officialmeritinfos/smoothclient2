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
        <div class="uk-section" style="background-color:#000000;">
            <div class="uk-container uk-margin-small-top uk-margin-bottom">
                <div class="uk-grid uk-flex uk-flex-center in-contact-6">
                    <div class="uk-width-3-5@m">
                        <div class="uk-grid uk-child-width-1-3@m uk-margin-medium-top uk-text-center" data-uk-grid="">
                            <div class="uk-first-column">
                                <h5 class="uk-margin-remove-bottom"><i class="fas fa-map-marker-alt fa-sm uk-margin-small-right"></i>Address</h5>
                                <p class="uk-margin-small-top">
                                    {{$web->address}}
                                </p>
                            </div>
                            <div>
                                <h5 class="uk-margin-remove-bottom"><i class="fas fa-envelope fa-sm uk-margin-small-right"></i>Email</h5>
                                <p class="uk-margin-small-top uk-margin-remove-bottom">
                                    {{$web->email}}
                                </p>
                            </div>
                            @if(!empty($web->phone))
                                <div>
                                    <h5 class="uk-margin-remove-bottom">
                                        <i class="fas fa-envelope fa-sm uk-margin-small-right"></i>Phone</h5>
                                    <p class="uk-margin-small-top uk-margin-remove-bottom">
                                        {{$web->phone}}
                                    </p>
                                </div>
                            @endif

                        </div>
                        <hr class="uk-margin-medium">



                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
