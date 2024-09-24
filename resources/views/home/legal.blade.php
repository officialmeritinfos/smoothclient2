@extends('home.base')

@section('content')
    <main>






        <div class="uk-section" style="background-color:#000000;">
            <div class="uk-container">
                <div class="uk-grid uk-flex uk-flex-center">
                    <div class="uk-width-4-5@m">
                        <h1 class="uk-margin-remove uk-text-center"><span class="in-highlight">Legal Information</span></h1><br>





                        <div class="uk-grid uk-grid-small uk-margin-top">
                            <div class="uk-margin-right">
                                <i class="fas fa-list fa-2x in-icon-wrap primary-color"></i>
                            </div>
                            <div class="uk-width-expand">
                                <div class="">
                                    <p>{{$siteName}} is one of the most reliable diversified financial investment service
                                        provider in the world. Our fundamental mission is to help customers and clients achieve
                                        their financial objectives. With offices locate in the United States, Australia,Canada and
                                        headquartered in Uk, {{$siteName}} have staffs with over 30 years’ experience in
                                        combining financial development and trades. We are committed to pushing the boundaries of
                                        what constitutes the highest standards in trades and asset management.
                                    </p>
                                    <p>With over $5.3 Trillion traded daily in the market, we are dedicated to giving our clients their own share of the
                                        profit daily. As a leading global market maker, {{$siteName}} has one of the World’s Largest Independent
                                        traders and fund managers with clients from different parts of the World. Today, as a
                                        successful trade investment and asset management company, we are trusted by thousands of clients.
                                        Our sterling reputation, dedication to meeting our clients’ needs and innovative approach to business
                                        development are some driving forces behind our success.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div class="uk-section" style="background-color:#000000;">
            <div class="uk-container">
                <div class="uk-grid uk-flex uk-flex-center">
                    <div class="uk-width-4-5@m">

                        <div class="uk-inline-clip uk-transition-toggle uk-border-rounded uk-margin-top">
                            <img class="uk-transition-scale-up uk-transition-opaque"
                                 src="{{asset('home/images/cert.jpeg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </main>
@endsection
