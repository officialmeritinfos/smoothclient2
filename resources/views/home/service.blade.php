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





        <div class="uk-section">
            <div class="uk-container">
                <div class="uk-grid" data-uk-grid="">
                    <div class="uk-width-3-5@m uk-first-column">
                        <h1 class="uk-margin-remove"><span class="in-highlight">Knowledge</span> is a wise investment</h1>
                        <p class="uk-text-lead uk-text-muted">By combining easy-to-understand information with actionable insights, Our company helps make the market seem less daunting—and more approachable.</p>

                    </div>
                    <div class="uk-width-2-5@m">
                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                            <div class="uk-grid uk-grid-small">
                                <div class="uk-width-expand@m">
                                    <h3 class="uk-margin-remove-bottom">Investors #1 Choice</h3>
                                    <p class="uk-margin-small-top">We pride ourself as the prime of finance management and investment.</p>
                                    <a class="uk-button uk-button-primary uk-border-rounded" href="{{route('register')}}">Start Investing<i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                                </div>
                                <div class="uk-width-auto@m uk-visible@m">
                                    <div class="in-icon-wrapper transparent uk-margin-top">
                                        <i class="fas fa-user-database fa-5x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="uk-section uk-padding-remove-vertical uk-margin-medium-bottom">
            <div class="uk-container">
                <div class="uk-grid">
                    <div class="uk-width-1-1">
                        <div class="uk-card uk-card-default uk-border-rounded uk-background-center uk-background-contain uk-background-image@m" style="background-image: url(_img/blockit/in-team-background-1.html')}}); background-position-y: calc(50% + -22.08px);" data-uk-parallax="bgy: -100">
                            <div class="uk-card-body">
                                <div class="uk-grid uk-flex uk-flex-center">
                                    <div class="uk-width-3-4@m uk-text-center">
                                        <h1 class="uk-margin-remove">Our <span class="in-highlight">Services</span></h1>
                                    </div>
                                </div>
                                <div class="uk-child-width-1-2@m uk-text-center uk-margin-small-bottom uk-grid" data-uk-grid="">

                                    @foreach($services as $service)

                                        <div class="uk-first-column">
                                            <img src="{{asset('home/serv/'.$service->photo)}}" alt=""
                                                 style="width:100%">
                                            <h4 class="uk-margin-small-top uk-margin-remove-bottom">
                                                {{$service->title}}
                                            </h4>
                                            <div class="myP">
                                                {{$service->short}}
                                            </div>
                                            <a class="uk-button uk-button-primary uk-border-rounded"
                                               href="{{route('service_detail',['id'=>$service->id])}}">Learn More<i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>

                                        </div>
                                    @endforeach


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </main>

@endsection
