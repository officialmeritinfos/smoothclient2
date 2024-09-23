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

    <!-- Start Terms of Service Area -->
    <section class="terms-of-service-area bg-f9f9f9 ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="terms-of-service-content">
                        <img src="{{asset('home/img/blog/blog-img1.jpg')}}" alt="image">
                        <p><i>This Terms of Service was last updated on January 1, 2022.</i></p>
                        <h3>1. Our website</h3>
                        <p>Our website address is: <strong>{{env('APP_URL')}}</strong></p>
                        <blockquote class="blockquote text-white">
                            <p>We collect certain data from you directly, like information you enter yourself,
                                data about your participation in courses, and data from third-party platforms
                                you connect with <strong>{{$siteName}}</strong>. We also collect some data automatically, like information about your device and what parts of our Services you interact with or spend time using.</p>
                        </blockquote>
                        <h3>2. Data You Provide to Us</h3>
                        <p>We may collect different data from or about you depending on how you use the Services. Below are some examples to help you better understand the data we collect.</p>
                        <h3>3. How We Get Data About You</h3>
                        <p>We use tools like cookies, web beacons, analytics services, and advertising providers to gather the data listed above. Some of these tools offer you the ability to opt out of data collection.</p>
                        <h3>4. What We Use Your Data For</h3>
                        <ol>
                            <li>Responding to your questions and concerns;</li>
                            <li>Sending you administrative messages and information, including messages from instructors and teaching assistants, notifications about changes to our Service, and updates to our agreements;</li>
                            <li>Sending push notifications to your wireless device to provide updates and other relevant messages (which you can manage from the “options” or “settings” page of the mobile app);</li>
                        </ol>
                        <h3>5. Your Choices About the Use of Your Data</h3>
                        <p>You can choose not to provide certain data to us, but you may not be able to use certain features of the Services.</p>
                        <ul>
                            <li>To stop receiving promotional communications from us, you can opt out by using the unsubscribe mechanism in the promotional communication you receive or by changing the email preferences in your account. Note that regardless of your email preference settings, we will send you transactional and relationship messages regarding the Services, including administrative confirmations, order confirmations, important updates about the Services, and notices about our policies.</li>
                            <li>The browser or device you use may allow you to control cookies and other types of local data storage. Your wireless device may also allow you to control whether location or other data is collected and shared. You can manage Adobe’s LSOs through their Website Storage Settings panel.</li>
                            <li>To get information and control cookies used for tailored advertising from participating companies, see the consumer opt-out pages for the Network Advertising Initiative and Digital Advertising Alliance, or if you’re located in the European Union, visit the Your Online Choices site. To opt out of Google’s display advertising or customize Google Display Network ads, visit the Google Ads Settings page. To opt out of Taboola’s targeted ads, see the Opt-out Link in their Cookie Policy.</li>
                            <li>To update data you provide directly, log into your account and update your account at any time.</li>
                        </ul>
                        <h3>6. Our Policy Concerning Children</h3>
                        <p>We recognize the privacy interests of children and encourage parents and guardians to take an active role in their children’s online activities and interests. Children under 13 (or under 16 in the European Economic Area) should not use the Services. If we learn that we’ve collected personal data from a child under those ages, we will take reasonable steps to delete it.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Terms of Service Area -->

@endsection
