<!DOCTYPE html>
<html lang="zxx" dir="ltr">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <!-- Standard Meta -->
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#181818" />
    <!-- Site Properties -->
    <title>{{$siteName}} | {{$pageName}}</title>


    <!-- critical preload -->
    <link rel="stylesheet" href="{{asset('home/js/vendors/uikit.min.js')}}">
    <link rel="stylesheet" href="{{asset('home/css/vendors/uikit.min.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/style.css')}}">
    <!-- icon preload -->
    <link rel="stylesheet" href="{{asset('home/fonts/fa-brands-400.woff2')}}" type="font/woff2" crossorigin>
    <link rel="stylesheet" href="{{asset('home/fonts/fa-solid-900.woff2')}}" type="font/woff2" crossorigin>
    <!-- font preload -->
    <link rel="stylesheet" href="{{asset('home/fonts/archivo-v9-latin-regular.woff2')}}" type="font/woff2" crossorigin>
    <link rel="stylesheet" href="{{asset('home/fonts/archivo-v9-latin-300.woff2')}}" type="font/woff2" crossorigin>
    <link rel="stylesheet" href="{{asset('home/fonts/archivo-v9-latin-700.woff2')}}" type="font/woff2" crossorigin>

    <!-- Favicon and apple icon -->
    <link rel="shortcut icon" href="{{asset('home/images/'.$web->logo)}}" type="image/png">
    <link rel="apple-touch-icon-precomposed" href="{{asset('home/images/'.$web->logo)}}" type="image/png">
    <!-- css -->
    <link rel="stylesheet" href="{{asset('home/css/vendors/uikit.min.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/style.css')}}">

    <style>
        .myWhite {
            color: #fff !important;
        }

        .my-white {
            color: #fff !important;
        }

        .my-danger {
            color: #ec4e70 !important;
        }

        .my-success {
            color: #2db47f !important;
        }

        .myBgBlue {
            background-color: #4886d9 !important;
            color: #fff !important;
        }

        .myYello {
            color: #0437F2 !important;
        }

        .myBgYello {
            background-color: #0437F2 !important;
            color: #fff !important;
        }

        .in-mobile-nav .uk-button {
            font-size: 35px;
            padding: 2px 16px;
            color: #fff;
            box-shadow: none;
        }


        .in-slideshow .in-slide-text {
            margin-top: -20px;
        }




        .watkey {
            z-index: 9;
            position: fixed;
            bottom: 15px;
            left: 15px;
            padding: 4px;
            border: 1px solid #0d9f16;
            border-radius: 50%;
        }

        body {
            top: 0px !important;
        }

    </style>

    <style>
        #flipper {
            position: absolute;
            right: 50px;
            top: 150px;
            width: 45%;
            z-index: 1;
            padding: 50px 5px;
        }

        @media only screen and (max-width: 768px) {
            #flipper {
                right: 25px;
                top: 62px;
                width: 60px;
            }
        }


        .flip-box {
            perspective: 1000px;
        }

        #modal-full {
            background-color: #181818 !important;
            background: #181818 !important;
        }

        .in-faq-2 .uk-accordion-title .uk-card-default::after {
            content: "";
        }

        .flip-box-inner {
            position: relative;
            width: 100%;
            height: 100%;
            text-align: center;
            transition: transform 1.5s;
            transform-style: preserve-3d;
        }

        .flip-box:hover .flip-box-inner {
            transform: rotateY(180deg);
        }

        .flip-box-front {
            position: absolute;
            width: 100%;
            height: 100%;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
        }


        .flip-box-back {
            transform: rotateY(180deg);
        }


        .roundDiv {
            position: absolute;
            right: -26px;
            text-align: center;
            top: 118px;
            width: 45%;
            z-index: 9;
            padding: 50px 5px;
        }

        .roundCoin {
            border: 5px dotted transparent;
            border-radius: 50%;
            border-top: 5px dotted #e50d99;
            border-bottom: 5px dotted #e50d99;
            width: 400px;
            height: 400px;
            -webkit-animation: spin 2s linear infinite;
            animation: spin 2s linear infinite;
        }



        @media only screen and (max-width: 768px) {
            .roundDiv {
                position: absolute;
                right: 20px;
                text-align: center;
                top: 90px;
                width: 80px;
                z-index: 9;
                padding: 50px 5px;
            }

            .roundCoin {
                border: 5px dotted transparent;
                border-radius: 50%;
                border-top: 3px dotted #e50d99;
                border-bottom: 3px dotted #e50d99;
                width: 75px;
                height: 75px;
            }
        }


        @-webkit-keyframes spin {
            0% {
                -webkit-transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
            }
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        @-webkit-keyframes spinBack {
            0% {
                -webkit-transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(-360deg);
            }
        }

        @keyframes spinBack {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(-360deg);
            }
        }

        .check-star {
            color: #e50d99;
        }

        .in-slide-text {
            text-align: left !important;
        }

    </style>
</head>

<body style="background-color:#00008B;">

<!--<div class="in-loader" style="background-color: #181818;">-->
<!--    <div></div>-->
<!--    <div></div>-->
<!--    <div></div>-->
<!--</div>-->

<header>
    <!-- header content begin -->
    <div class="uk-section uk-padding-remove-vertical" style="z-index: 10;">
        <nav class="uk-navbar-container uk-navbar-transparent" style="background-color:#00008B;">

            <div class="uk-container" data-uk-navbar>
                <div class="uk-navbar-left">
                    <div class="uk-navbar-item">
                        <!-- logo begin -->
                        <div id="google_translate_element"></div>
                        <a class="uk-logo" href="{{url('/')}}">
                            <img src="{{asset('home/images/'.$web->logo)}}"
                                 data-src="{{asset('home/images/'.$web->logo)}}" alt="" style="width:100px;" data-uk-img>
                        </a>
                        <!-- logo end -->
                        <!-- navigation begin -->
                        <ul class="uk-navbar-nav uk-visible@m">
                            <li><a href="#">Company<i class="fas fa-chevron-down"></i></a>
                                <div class="uk-navbar-dropdown">
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <li><a href="{{url('about')}}">About Us</a></li>

                                        <li><a href="{{url('faq')}}">FAQ's</a></li>

                                        <li><a href="{{url('contact')}}">Contact Us</a></li>
                                    </ul>
                                </div>
                            </li>

                            <li><a href="{{url('markets')}}">Markets</a></li>

                            <li><a href="{{url('plans')}}">Plans</a></li>

                            <li><a href="{{url('services')}}">Our Services</a></li>

                            <li><a href="{{url('buy-btc')}}">Buy/Sell</a></li>

                            <li><a href="{{url('legal')}}">Legal</a></li>
                        </ul>
                        <!-- navigation end -->
                    </div>
                </div>
                <div class="uk-navbar-right">
                    <div class="uk-navbar-item uk-visible@m in-optional-nav">

                        <a href="{{route('login')}}" class="uk-button uk-button-text">Log in<i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                        <a href="{{route('register')}}" class="uk-button uk-button-primary uk-border-rounded">Sign up<i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>

                    </div>
                </div>
            </div>
        </nav>
    </div>

</header>





@yield('content')



<div class="uk-section uk-section-primary  in-equity-14 uk-background-contain uk-background-top-center"
     data-src="{{asset('home/img/in-equity-14-bg.svg')}}" data-uk-img="" style="background-color:#0c63e4;">
    <div class="uk-container uk-margin-small-bottom">
        <div class="uk-child-width-1-2@m uk-flex uk-flex-middle uk-grid" data-uk-grid="">
            <div class="uk-first-column">
                <div class="uk-flex uk-flex-left uk-flex-middle">
                    <div class="uk-margin-right in-award-logo">
                        <img src="{{asset('home/img/in-lazy.gif')}}"
                             data-src="{{asset('home/img/in-equity-5-award-3.svg')}}" alt="award" width="128" data-height="" data-uk-img="">
                    </div>
                    <div class="in-award-badge">
                        <h3 class="uk-margin-remove">Investors #1 Choice</h3>
                        <h4 class="uk-margin-remove-top uk-margin-small-bottom uk-text-uppercase in-heading-thin">{{$siteName}}</h4>
                    </div>
                </div>
            </div>
            <div class="uk-flex uk-flex-right uk-flex-middle right-content">
                    <span class="uk-margin-large-left">
                        <a href="{{route('register')}}" class="uk-button uk-button-secondary uk-button-large uk-border-rounded">Open your account</a>
                    </span>
            </div>
        </div>
    </div>
</div>

<div class="uk-section in-equity-18">
    <div class="uk-container">
        <div class="uk-grid uk-grid-stack" data-uk-grid="">
            <div class="uk-width-1-1 uk-first-column">
                <div class="uk-card uk-card-default uk-card-body uk-border-rounded"
                     style="background-color:#0c63e4;">
                    <h4 class="uk-text-center in-offset-top-10" style="color: #ffffff;">Fast and reliable withdrawal/deposit method</h4>
                    <div class="uk-grid-collapse uk-child-width-1-5@m uk-child-width-1-5
                    uk-text-center in-client-logo-6 uk-grid uk-grid-stack" data-uk-grid="" >
                        <div class="uk-tile uk-tile-default uk-first-column" style="border: none;">
                            <img class="uk-margin-remove" src="{{asset('home/images/coins/btc.png')}}" alt="" width="60" height="60">
                        </div>
                        <div class="uk-tile uk-tile-default uk-grid-margin uk-first-column" style="border: none;">
                            <img class="uk-margin-remove" src="{{asset('home/images/coins/eth.png')}}" alt="" width="60" height="60">
                        </div>
                        <div class="uk-tile uk-tile-default uk-grid-margin uk-first-column" style="border: none;">
                            <img class="uk-margin-remove" src="{{asset('home/images/coins/ltc.png')}}" alt="" width="60" height="60">
                        </div>
                        <div class="uk-tile uk-tile-default uk-grid-margin uk-first-column" style="border: none;">
                            <img class="uk-margin-remove" src="{{asset('home/images/coins/usdt.png')}}" alt="" width="60" height="60">
                        </div>
                        <div class="uk-tile uk-tile-default uk-grid-margin uk-first-column" style="border: none;">
                            <img class="uk-margin-remove" src="{{asset('home/images/coins/xrp.png')}}" alt="" width="60" height="60">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer>

    <div class="uk-section" style="padding-bottom: 0px; padding-top: 0px;">
        <div class="uk-container ">
            <div class="uk-grid">
                <div class="uk-width-1-1">
                    <div class="uk-child-width-1-1" data-uk-grid>
                        <div>
                            <a class="uk-logo" href="{{url('/')}}">
                                <img src="{{asset('home/images/'.$web->logo)}}"
                                     data-src="{{asset('home/images/'.$web->logo)}}" alt="" width="146" height="39" data-uk-img>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer content begin -->
    <div class="uk-section">
        <div class="uk-container uk-margin-top">
            <div class="uk-grid">
                <div class="uk-width-5-6@m">
                    <div class="uk-child-width-1-2@s uk-child-width-1-4@m" data-uk-grid>
                        <div>
                            <h5 style="margin-bottom: -15px;">Our Company</h5>
                            <ul class="uk-list uk-link-text">
                                <li><a href="{{url('about')}}">About Us</a></li>
                                <li><a href="{{url('services')}}">What We Offer</a></li>
                                <li><a href="{{url('faqs')}}">FAQ's</a></li>
                                <li><a href="{{url('contact')}}">Contact Us</a></li>
                            </ul>
                        </div>
                        <div>
                            <h5 style="margin-bottom: -15px;">Our Services</h5>
                            <ul class="uk-list uk-link-text">
                                <li><a href="{{url('services')}}">Forex Trading</a></li>
                                <li><a href="{{url('services')}}">Real Estate</a></li>
                                <li><a href="{{url('services')}}">Cryptocurrency Trading</a></li>
                                <li><a href="{{url('services')}}">Gold Investments</a></li>
                                <li><a href="{{url('services')}}">Retirement Planning</a></li>

                            </ul>
                        </div>
                        <div>
                            <h5 style="margin-bottom: -15px;">More</h5>
                            <ul class="uk-list uk-link-text">
                                <li><a href="{{url('services')}}">Cannabis Investments</a></li>
                                <li><a href="{{url('services')}}">Oil and Gas</a></li>
                                <li><a href="{{url('services')}}">Financial Planning</a></li>
                                <li><a href="{{url('services')}}">Loans and Grants</a></li>
                                <li><a href="{{url('services')}}">Stock Investment</a></li>
                            </ul>
                        </div>
                        <div>
                            <h5 style="margin-bottom: -15px;">Account</h5>
                            <ul class="uk-list uk-link-text">
                                <li><a href="{{route('register')}}">Create Account</a></li>
                                <li><a href="{{route('login')}}">Login</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-6@m uk-flex uk-flex-right@m">
                    <!-- <ul class="uk-list uk-link-text in-footer-socials">
                         <li><a href="https://wa.me/" class="wa-bg"><i class="fab fa-whatsapp"></i>Whatsapp</a></li>
                         <!--li><a href="" class="tl-bg"><i class="fab fa-telegram-plane"></i>Telegram</a></li>
                         <li><a href="#" class="myBgYello"><i class="fa fa-envelope"></i> Email</a></li>
                         <li><a href="#" class="yt-bg"><i class="fab fa-youtube"></i>Youtube</a></li>
                     </ul>-->
                </div>
            </div>
        </div>
        <hr class="uk-margin-large">
        <div class="uk-container">
            <div class="uk-grid uk-flex uk-flex-middle">
                <div class="uk-width-2-3@m uk-text-small">
                    <ul class="uk-subnav uk-subnav-divider uk-visible@s" data-uk-margin>
                        <li><a href="{{url('terms')}}">Terms of Use</a></li>
                        <li><a href="{{url('privacy')}}">Privacy policy</a></li>
                        <li><a href="{{url('legal')}}">Legal</a></li>
                        <li><a href="{{url('buy-btc')}}">Buy Digital Currency</a></li>
                    </ul>
                    <p class="copyright-text">© {{date('Y')}} {{$siteName}}. All Rights Reserved.</p>
                </div>
                <div class="uk-width-1-3@m uk-flex uk-flex-right uk-visible@m">
                    <span class="uk-margin-right"><img src="{{asset('home/img/in-lazy.gif')}}" data-src="{{asset('home/images/coins/btc.png')}}" alt="" width="34" height="auto" data-uk-img></span>
                    <span class="uk-margin-right"><img src="{{asset('home/img/in-lazy.gif')}}" data-src="{{asset('home/images/coins/eth.png')}}" alt="" width="34" height="auto" data-uk-img></span>
                    <span class="uk-margin-right"><img src="{{asset('home/img/in-lazy.gif')}}" data-src="{{asset('home/images/coins/ltc.png')}}" alt="" width="34" height="auto" data-uk-img></span>
                    <span class="uk-margin-right"><img src="{{asset('home/img/in-lazy.gif')}}" data-src="{{asset('home/images/coins/xrp.png')}}" alt="" width="34" height="auto" data-uk-img></span>
                    <span class=""><img src="{{asset('home/img/in-lazy.gif')}}" data-src="{{asset('home/images/coins/usdt.png')}}" alt="" width="34" height="auto" data-uk-img></span>
                </div>
            </div>
        </div>
    </div>
    <!-- footer content end -->
    <!-- totop begin -->
    <!--div class="uk-visible@m">
        <a href="#" class="in-totop fas fa-chevron-up" data-uk-scroll></a>
    </div-->
</footer>


<script src="{{asset('home/js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('home/js/vendors/uikit.min.js')}}"></script>
<script src="{{asset('home/js/vendors/utilities.min.js')}}"></script>
<script src="{{asset('home/js/vendors/trading-widget.min.js')}}"></script>
<script src="{{asset('home/js/vendors/market-plugin.min.js')}}"></script>
<script src="{{asset('home/js/vendors/particles.min.js')}}"></script>
<script src="{{asset('home/js/config-particles.js')}}"></script>
<script src="{{asset('home/js/config-theme.js')}}"></script>
<script>
    $('document').ready(function() {
        var x = 0;
        setInterval(function() {
            var coins = ['es.png', 'eth.png', 'ap.png', 'dash.png', 'gg.png', 'xrp.png', 'es.png', 'ltc.png', 'ms.png', 'btc.png'];
            $('#coin').css('transform', 'rotateY(180deg)');
            setTimeout(function() {
                $('#coinImage').attr('src', 'home/images/coins/' + coins[x] + '');
            }, 430);
            setTimeout(function() {
                $('#coin').css('transform', 'rotateY(0deg)');
            }, 440);
            x++;
            if (x > (coins.length - 1)) {
                x = 0;
            }
        }, 4000);


        var i = 0;
        var b = 0;

        setInterval(function() {
            var msg = ['Stocks', 'CDFs on Fx', 'Real Estate', 'Oil and Gas', 'Cryptocurrency'];

            if (b > (msg.length - 1)) {
                b = 0;
            }
            typeWriter(msg[b]);
            b++;
        }, 8000);

        function typeWriter(x) {
            console.log(x);
            var speed = x.length / 0.09;
            if (i < x.length) {
                document.getElementById("txt").innerHTML += x.charAt(i);
                i++;
                setTimeout(typeWriter, speed, x);
            } else {
                i = 0;
                x = '';
                setTimeout(function() {
                    document.getElementById("txt").innerHTML = x;
                }, 5000);

            }
        }

    });

</script>

<script>
    function triggerClick(x) {
        document.querySelector(x).click();
    }

</script>


<script>
    //Get the button
    var mybutton = document.getElementById("goUp");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }

</script>



<script>
    function showTime(){
        var date = new Date();
        var h = date.getHours(); // 0 - 23
        var m = date.getMinutes(); // 0 - 59
        var s = date.getSeconds(); // 0 - 59
        var session = "AM";

        if(h === 0){
            h = 12;
        }

        if(h > 12){
            h = h - 12;
            session = "PM";
        }

        h = (h < 10) ? "0" + h : h;
        m = (m < 10) ? "0" + m : m;
        s = (s < 10) ? "0" + s : s;

        var time = h + " : " + m + " : " + s + " " + session;
        document.getElementById("MyClockDisplay").innerText = time;
        document.getElementById("MyClockDisplay").textContent = time;

        setTimeout(showTime, 1000);

    }

    showTime();

    function btc_to_usd(valNum) {
        var calc = valNum * 28993.14;
        document.getElementById("val_usd").value = calc.toFixed(2);
    }

    function usd_to_btc(valNum) {
        var calc = valNum / 28993.14;
        document.getElementById("val_btc").value = calc.toFixed(8);
    }
</script>
<!-- Google language start -->
<style>

    #google_translate_element {
        z-index: 9999999;
        position: fixed;
        bottom: 25px;
        left: 15px;
    }

    .goog-te-gadget {
        font-family: Roboto, "Open Sans", sans-serif !important;
        text-transform: uppercase;
    }
    .goog-te-gadget-simple
    {
        padding: 0px !important;
        line-height: 1.428571429;
        color: white;
        vertical-align: middle;
        background-color: black;
        border: 1px solid #a5a5a599;
        border-radius: 4px;
        float: right;
        margin-top: -4px;
        z-index: 999999;
    }
    .goog-te-banner-frame.skiptranslate
    {
        display: none !important;
        color: white;
    }
    .goog-te-gadget-icon
    {
        background: none !important;
        display: none;
        color: white;
    }
    .goog-te-gadget-simple .goog-te-menu-value
    {
        font-size: 12px;
        color: white;
        font-family: 'Open Sans' , sans-serif;
    }
</style>
<div id="google_translate_element"></div>
<script type="text/javascript">
    window.onload = function googleTranslateElementInit() {
        new google.translate.TranslateElement({ pageLanguage: 'en' }, 'google_translate_element');
    }
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<!-- start popup massage -->
<div class="notifier" style="display: none;">
    <div class="txt" style="color:black;">While you are waiting,someone from <b></b> just traded with <a href="javascript:void(0);" onclick="javascript:void(0);"></a></div>
</div>
<style>
    .notifier{
        border-radius: 7px;
        position: fixed;
        z-index: 90;
        bottom: 80px;
        right: 50px;
        background: #fff;
        padding: 15px 40px;
        box-shadow: 0px 5px 13px 0px rgba(0,0,0,.3);
    }
    .notifier a {
        font-weight: 700;
        display: block;
        color:#0080FF;
    }
    .notifier a, .notifier a:active {
        transition: all .2s ease;
        color:#0080FF;
    }
</style>
<script data-cfasync="false" src="#"></script><script type="text/javascript">
    var listCountries = ['Germany', 'Malta', 'Spain', 'Russia', 'Italy', 'Jamaica',
        'Italy', 'Belgium', 'United States', 'Egypt', 'Kenya', 'New Zealand',
        'United Kingdom', 'Senegal',
        "United States","England","Germany","Germany","United States","Switzerland",
        "Austria","Austria","Austria","Australia","Australia","Australia","Russia","Russia",
        "United States","United Kingdom","Spain","Spain","India","England","Italy",
    ];
    var listPlans = ['$500','$50','$1,000','$100','$200','$3000','$400', '$360',
        '$700', '$60',"$500","$300","$1,000","$128"];
    interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
    var run = setInterval(request, interval);

    function request() {
        clearInterval(run);
        interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
        var country = listCountries[Math.floor(Math.random() * listCountries.length)];
        var plan = listPlans[Math.floor(Math.random() * listPlans.length)];
        var msg = 'While you are still contemplating ,an investor from <b>' + country + '</b> ' +
            'just traded with <a href="javascript:void(0);" onclick="javascript:void(0);">' + plan + ' .</a>';
        $(".notifier .txt").html(msg);
        $(".notifier").stop(true).fadeIn(300);
        window.setTimeout(function() {
            $(".notifier").stop(true).fadeOut(300);
        }, 6000);
        run = setInterval(request, interval);
    }
</script>
<!-- end popup massage -->
<!-- Smartsupp Live Chat script -->
<script type="text/javascript">
    var _smartsupp = _smartsupp || {};
    _smartsupp.key = '621742dc75fec6a47ca7005028599c5cce592ece';
    window.smartsupp||(function(d) {
        var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
        s=d.getElementsByTagName('script')[0];c=d.createElement('script');
        c.type='text/javascript';c.charset='utf-8';c.async=true;
        c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
    })(document);
</script>
<noscript> Powered by <a href=“https://www.smartsupp.com” target=“_blank”>Smartsupp</a></noscript>

</body>
</html>
