@extends('layout.app')

@section('title', 'Bullish Experts Landing Page')

@section('content')


    <div class="intro" data-scroll-index="0">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-xl-6 col-lg-6 col-12">
                    <div class="intro-content">
                        <h1>Trade with <strong class="text-primary">Bullish Experts</strong>. <br>
                         Forex trading <br>
                         Crypto Trading
                        </h1>
                        <p>Easy and secure way to invest in forex trading and crytpo currency trading.</p>
                    </div>

                    <div class="intro-btn">
                        <a href="{{ route('login') }}" class="btn btn-primary">Get Started</a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-12">
                    <img class="img-fluid " src="{{ asset('assets/images/trader.jpg') }}" alt="Bullish Experts">
                </div>
            </div>
        </div>
    </div>

    <div class="price-grid section-padding" data-scroll-index="1">
        <div class="container">

            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-3">
                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container">
                        <div class="tradingview-widget-container__widget"></div>

                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
                            {
                                "symbol": "FX:EURUSD",
                                "width": "100%",
                                "height": "100%",
                                "locale": "en",
                                "dateRange": "12M",
                                "colorTheme": "light",
                                "trendLineColor": "rgba(41, 98, 255, 1)",
                                "underLineColor": "rgba(41, 98, 255, 0.3)",
                                "underLineBottomColor": "rgba(41, 98, 255, 0)",
                                "isTransparent": false,
                                "autosize": false,
                                "largeChartUrl": ""
                                }
                        </script>
                    </div>
                    <!-- TradingView Widget END -->
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-3">
                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container">
                        <div class="tradingview-widget-container__widget"></div>

                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
                            {
                                "symbol": "FX:USDJPY",
                                "width": "100%",
                                "height": "100%",
                                "locale": "en",
                                "dateRange": "12M",
                                "colorTheme": "light",
                                "trendLineColor": "rgba(41, 98, 255, 1)",
                                "underLineColor": "rgba(41, 98, 255, 0.3)",
                                "underLineBottomColor": "rgba(41, 98, 255, 0)",
                                "isTransparent": false,
                                "autosize": false,
                                "largeChartUrl": ""
                                }
                        </script>
                    </div>
                    <!-- TradingView Widget END -->
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-3">
                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container">
                        <div class="tradingview-widget-container__widget"></div>

                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
                            {
                                "symbol": "FX:GPBUSD",
                                "width": "100%",
                                "height": "100%",
                                "locale": "en",
                                "dateRange": "12M",
                                "colorTheme": "light",
                                "trendLineColor": "rgba(41, 98, 255, 1)",
                                "underLineColor": "rgba(41, 98, 255, 0.3)",
                                "underLineBottomColor": "rgba(41, 98, 255, 0)",
                                "isTransparent": false,
                                "autosize": false,
                                "largeChartUrl": ""
                                }
                        </script>
                    </div>
                    <!-- TradingView Widget END -->
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-3">
                   <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container">
                        <div class="tradingview-widget-container__widget"></div>

                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
                            {
                                "symbol": "FX:AUDUSD",
                                "width": "100%",
                                "height": "100%",
                                "locale": "en",
                                "dateRange": "12M",
                                "colorTheme": "light",
                                "trendLineColor": "rgba(41, 98, 255, 1)",
                                "underLineColor": "rgba(41, 98, 255, 0.3)",
                                "underLineBottomColor": "rgba(41, 98, 255, 0)",
                                "isTransparent": false,
                                "autosize": false,
                                "largeChartUrl": ""
                                }
                        </script>
                    </div>
                    <!-- TradingView Widget END -->
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-3">
                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container">
                        <div class="tradingview-widget-container__widget"></div>

                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
                            {
                                "symbol": "BINANCE:BTCUSDT",
                                "width": "100%",
                                "height": "100%",
                                "locale": "en",
                                "dateRange": "12M",
                                "colorTheme": "light",
                                "trendLineColor": "rgba(41, 98, 255, 1)",
                                "underLineColor": "rgba(41, 98, 255, 0.3)",
                                "underLineBottomColor": "rgba(41, 98, 255, 0)",
                                "isTransparent": false,
                                "autosize": false,
                                "largeChartUrl": ""
                                }
                        </script>
                    </div>
                    <!-- TradingView Widget END -->
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-3">
                   <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container">
                        <div class="tradingview-widget-container__widget"></div>

                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
                            {
                                "symbol": "BINANCE:ETHUSDT",
                                "width": "100%",
                                "height": "100%",
                                "locale": "en",
                                "dateRange": "12M",
                                "colorTheme": "light",
                                "trendLineColor": "rgba(41, 98, 255, 1)",
                                "underLineColor": "rgba(41, 98, 255, 0.3)",
                                "underLineBottomColor": "rgba(41, 98, 255, 0)",
                                "isTransparent": false,
                                "autosize": false,
                                "largeChartUrl": ""
                                }
                        </script>
                    </div>
                    <!-- TradingView Widget END -->
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-3">
                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container">
                        <div class="tradingview-widget-container__widget"></div>

                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
                            {
                                "symbol": "UNISWAP:FMTUSDT",
                                "width": "100%",
                                "height": "100%",
                                "locale": "en",
                                "dateRange": "12M",
                                "colorTheme": "light",
                                "trendLineColor": "rgba(41, 98, 255, 1)",
                                "underLineColor": "rgba(41, 98, 255, 0.3)",
                                "underLineBottomColor": "rgba(41, 98, 255, 0)",
                                "isTransparent": false,
                                "autosize": false,
                                "largeChartUrl": ""
                                }
                        </script>
                    </div>
                    <!-- TradingView Widget END -->
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-3">
                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container">
                        <div class="tradingview-widget-container__widget"></div>

                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
                            {
                                "symbol": "HUOBI:ARVUSDT",
                                "width": "100%",
                                "height": "100%",
                                "locale": "en",
                                "dateRange": "12M",
                                "colorTheme": "light",
                                "trendLineColor": "rgba(41, 98, 255, 1)",
                                "underLineColor": "rgba(41, 98, 255, 0.3)",
                                "underLineBottomColor": "rgba(41, 98, 255, 0)",
                                "isTransparent": false,
                                "autosize": false,
                                "largeChartUrl": ""
                                }
                        </script>
                    </div>
                    <!-- TradingView Widget END -->
                </div>
            </div>
        </div>
    </div>

    <div class="bg-light section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section-title">
                        <h2 class="text-dark">Get started in a few minutes</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                    <div class="getstart-content">
                        <span><i class="la la-user-plus"></i></span>
                        <h3 class="text-dark">Create an account</h3>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                    <div class="getstart-content">
                        <span><i class="la la-bank"></i></span>
                        <h3 class="text-dark">Start Investment</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>



    {{-- <div class="portfolio section-padding" data-scroll-index="2">
        <div class="container">
            <div class="row py-lg-5 justify-content-center">
                <div class="col-xl-7">
                    <div class="section-title text-center">
                        <h2>Create your cryptocurrency portfolio today</h2>
                        <p>Bullish Experts has a variety of features that make it the best place to start trading</p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-7 col-lg-6">
                    <div class="portfolio_list">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="media">
                                    <span class="port-icon"> <i class="la la-bar-chart"></i></span>
                                    <div class="media-body">
                                        <h4>Manage your portfolio</h4>
                                        <p>Buy and sell popular digital currencies, keep track of them in the one
                                            place.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="media">
                                    <span class="port-icon"> <i class="la la-calendar-check-o"></i></span>
                                    <div class="media-body">
                                        <h4>Recurring buys</h4>
                                        <p>Invest in cryptocurrency slowly over time by scheduling buys daily,
                                            weekly,
                                            or monthly.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="media">
                                    <span class="port-icon"> <i class="la la-lock"></i></span>
                                    <div class="media-body">
                                        <h4>Vault protection</h4>
                                        <p>For added security, store your funds in a vault with time delayed
                                            withdrawals.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="media">
                                    <span class="port-icon"> <i class="la la-mobile"></i></span>
                                    <div class="media-body">
                                        <h4>Mobile apps</h4>
                                        <p>Stay on top of the markets with the Bullish Experts app for <a href="#">Android</a>
                                            or
                                            <a href="#">iOS</a>.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="portfolio_img">
                        <img src="{{asset('assets/images/portfolio.jpg')}}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="trade-app section-padding">
        <div class="container">
            {{-- <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="section-title text-center">
                        <h2>Trade. Anywhere</h2>
                        <p> All of our products are ready to go, easy to use and offer great value to any kind of
                            business
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-12">
                    <div class="card trade-app-content">
                        <div class="card-body">
                            <span><i class="la la-mobile"></i></span>
                            <h4 class="card-title">Mobile</h4>
                            <p>All the power of Bullish Experts's cryptocurrency exchange, in the palm of your hand. Download
                                the
                                Bullish Experts mobile crypto trading app today</p>

                            <a href="#"> Know More <i class="la la-arrow-right"></i> </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12">
                    <div class="card trade-app-content">
                        <div class="card-body">
                            <span><i class="la la-desktop"></i></span>
                            <h4 class="card-title">Desktop</h4>
                            <p>Powerful crypto trading platform for those who mean business. The Bullish Experts crypto
                                trading
                                experience, tailor-made for your Windows or MacOS device.</p>

                            <a href="#"> Know More <i class="la la-arrow-right"></i> </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12">
                    <div class="card trade-app-content">
                        <div class="card-body">
                            <span><i class="la la-connectdevelop"></i></span>
                            <h4 class="card-title">API</h4>
                            <p>The Bullish Experts API is designed to provide an easy and efficient way to integrate your
                                trading
                                application into our platform.</p>

                            <a href="#"> Know More <i class="la la-arrow-right"></i> </a>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="row pt-5">
                <div class="col-xl-12">
                    <div class="trusted-business py-5 text-center">
                        <h3>Trusted by Our <strong>Partners & Investors</strong></h3>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-auto">
                            <div class="">
                                <a href="#"><img class="img-fluid" style="height: 32px; width: auto;" src="{{asset('assets/images/brand/forex.com.svg')}}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="">
                                <a href="#"><img class="img-fluid" style="height: 32px; width: auto;" src="{{asset('assets/images/brand/binance.png')}}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="">
                                <a href="#"><img class="img-fluid" style="height: 32px; width: auto;" src="{{asset('assets/images/brand/metatrader.png')}}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="">
                                <a href="#"><img class="img-fluid" style="height: 32px; width: auto;" src="{{asset('assets/images/brand/coinbase.svg')}}" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="testimonial section-padding bg-light" data-scroll-index="3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="section-title">
                        <h2 class="text-dark">What our customer says</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="testimonial-content">
                        <div class="testimonial1 owl-carousel owl-theme">
                            <div class="row align-items-center">
                                <div class="col-xl-12 col-lg-12">
                                    <div class="customer-review">
                                        <p class="text-center">Investing with bullish experts is one of the best decisions I have made so far this year. I have made a mouth watering amount of profit out of my savings by investing it here. My bank has never given me 10% of the profit I have made here in 4 months on my savings with them in 2 years.</p>
                                        <div class="customer-info text-center">
                                            <span class="img-thumbnail rounded-circle">
                                                <span class="fa fa-user fa-2x"></span>
                                            </span>
                                            <h6>Jerry Ladder</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col-xl-12 col-lg-12">
                                    <div class="customer-review">
                                        <p class="text-center">
                                            I have tried trading Forex myself but it never worked. I gave up because I did not have enough skill to do it. You guys have made me realize that I don't necessarily need to trade to be into forex trading and make profits. Thank you for this amazing service.
                                        </p>
                                        <div class="customer-info text-center">
                                            <span class="img-thumbnail rounded-circle" style="width: 40px; height: 40px;">
                                                <span class="fa fa-user fa-2x"></span>
                                            </span>
                                            <h6>Stephan McReynolds</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col-xl-12 col-lg-12">
                                    <div class="customer-review">
                                        <p class="text-center">
                                            I have never tried to invest because of fear but to my great surprise it took bullish experts just a month to change my mind. No service charge and I get to withdraw my money any time I want. Never ever thought I could invest a dollar  in anything crytpo talkless of ten thousand.
                                        </p>
                                        <div class="customer-info text-center">
                                            <span class="img-thumbnail rounded-circle">
                                                <span class="fa fa-user fa-2x"></span>
                                            </span>
                                            <h6>Amber Pabawena</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col-xl-12 col-lg-12">
                                    <div class="customer-review">
                                        <p class="text-center">
                                            I hardly write reviews for anything. I'm hard to impress but you guys have been incredible so far. You deserve every accolades you get. I have made a nice profit return on my crypto investments so far.
                                        </p>
                                        <div class="customer-info text-center">
                                            <span class="img-thumbnail rounded-circle">
                                                <span class="fa fa-user fa-2x"></span>
                                            </span>
                                            <h6>Ashley Pearson</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col-xl-12 col-lg-12">
                                    <div class="customer-review">
                                        <p class="text-center">
                                            I don't do online investments because most times online investments deals are too good to be true but you made me understand that I could make loses even though profit is 99% guaranteed. I have never come across an honest investment platform like this. You know it is real when your profit rate is not fixed but according to market progression. Kudos.
                                        </p>
                                        <div class="customer-info text-center">
                                            <span class="img-thumbnail rounded-circle">
                                                <span class="fa fa-user fa-2x"></span>
                                            </span>
                                            <h6>Christopher Wesley</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>

                             <div class="row align-items-center">
                                <div class="col-xl-12 col-lg-12">
                                    <div class="customer-review">
                                        <p class="text-center">
                                            I wish I started investing with you people earlier. I waited for 4 months to hear a bad news from my friend about her investments with you but I was disappointed. At first I thought it was the normal crypto that rises and fall with no warning but I later got to know that it is actually crypto trading by well trained skilled crypto traders. I got my 3rd month profit yesterday and I'm so happy I'm proud to me a member here. I trust this platform more and more everyday. Let's goooooooo
                                        </p>
                                        <div class="customer-info text-center">
                                            <span class="img-thumbnail rounded-circle">
                                                <span class="fa fa-user fa-2x"></span>
                                            </span>
                                            <h6>Christiana Fernandez</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>

                             <div class="row align-items-center">
                                <div class="col-xl-12 col-lg-12">
                                    <div class="customer-review">
                                        <p class="text-center">
                                            I wanna say a big thank you to you guys for paying my rent every month for the past 5 months. Haha, all I had to do was to invest and pay my rent with my profit. I wish I knew about bullish experts earlier. Maybe you will buy me a new car if I increase my investment to grab more profits. Let's see lol.
                                        </p>
                                        <div class="customer-info text-center">
                                            <span class="img-thumbnail rounded-circle">
                                                <span class="fa fa-user fa-2x"></span>
                                            </span>
                                            <h6>Frank Oliver</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>

                             <div class="row align-items-center">
                                <div class="col-xl-12 col-lg-12">
                                    <div class="customer-review">
                                        <p class="text-center">
                                            Nice doing business with you. See you at the end of the month for another profit withdrawal. You guys are actually making me lazy. I stopped my third job because you got me covered. Don't fuck me up.
                                        </p>
                                        <div class="customer-info text-center">
                                            <span class="img-thumbnail rounded-circle">
                                                <span class="fa fa-user fa-2x"></span>
                                            </span>
                                            <h6>Anna Pratt</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col-xl-12 col-lg-12">
                                    <div class="customer-review">
                                        <p class="text-center">
                                            This is my second month and so far so good everything is going on fine. I hope I won't regret my actions at the end. Thank you for your service.
                                        </p>
                                        <div class="customer-info text-center">
                                            <span class="img-thumbnail rounded-circle">
                                                <span class="fa fa-user fa-2x"></span>
                                            </span>
                                            <h6>Rebecca Ferber </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col-xl-12 col-lg-12">
                                    <div class="customer-review">
                                        <p class="text-center">
                                            I'm here to commend the great service if your support. I encountered a problem that almost gave me an heart attack but the response I got was swift and my issue was resolved almost immediately. You have completely won me. Thank you.
                                        </p>
                                        <div class="customer-info text-center">
                                            <span class="img-thumbnail rounded-circle">
                                                <span class="fa fa-user fa-2x"></span>
                                            </span>
                                            {{-- <h6>Ashley Pearson</h6> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="promo section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section-title text-center">
                        <h2>The most trusted cryptocurrency platform</h2>
                        <p> Here are a few reasons why you should choose Bullish Experts
                        </p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-center py-5">
                {{-- <div class="col-xl-4 col-lg-4 col-md-4">
                    <div class="promo-content">
                        <div class="promo-content-img">
                            <img class="img-fluid" src="{{asset('assets/images/svg/protect.svg')}}" alt="">
                        </div>
                        <h3>Secure storage </h3>
                        <p>We store the vast majority of the digital assets in secure offline storage.</p>
                    </div>
                </div> --}}
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <div class="promo-content">
                        <div class="promo-content-img">
                            <img class="img-fluid" src="{{asset('assets/images/aig.png')}}" alt="">
                        </div>
                        <h3>Protected by insurance</h3>
                        {{-- <p>Cryptocurrency stored on our servers is covered by our insurance policy.</p> --}}
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <div class="promo-content">
                        <div class="promo-content-img">
                            <img class="img-fluid" src="{{asset('assets/images/vdb.jpg')}}" alt="">
                        </div>
                        <h3>Backed up by bank of investment and development of Vietnam</h3>
                        {{-- <p>Bullish Experts supports a variety of the most popular digital currencies.</p> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="blog section-padding" data-scroll-index="5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="section-title text-center">
                        <h2>Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-12">
                    <div class="blog-grid">
                        <div class="card">
                            <img class="img-fluid" src="{{asset('assets/images/blog/1.jpg')}}" alt="">
                            <div class="card-body">
                                <a href="blog-single.html">
                                    <h4 class="card-title">Why does Litecoin need MimbleWimble?</h4>
                                </a>
                                <p class="card-text">Cras chinwag brown bread Eaton cracking goal so I said a load
                                    of
                                    old tosh baking cakes.!</p>
                            </div>
                            <div class="card-footer">
                                <div class="meta-info">
                                    <a href="#" class="author"><img src="{{asset('assets/images/avatar/5.jpg')}}" alt=""> Admin</a>
                                    <a href="#" class="post-date"><i class="la la-calendar"></i> 31 July, 2019</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12">
                    <div class="blog-grid">
                        <div class="card">
                            <img class="img-fluid" src="{{asset('assets/images/blog/2.jpg')}}" alt="">
                            <div class="card-body">
                                <a href="blog-single.html">
                                    <h4 class="card-title">How to securely store your HD wallet seeds?</h4>
                                </a>
                                <p class="card-text">Cras chinwag brown bread Eaton cracking goal so I said a load
                                    of
                                    old tosh baking cakes.!</p>
                            </div>
                            <div class="card-footer">
                                <div class="meta-info">
                                    <a href="#" class="author"><img src="{{asset('assets/images/avatar/6.jpg')}}" alt=""> Admin</a>
                                    <a href="#" class="post-date"><i class="la la-calendar"></i> 31 July, 2019</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12">
                    <div class="blog-grid">
                        <div class="card">
                            <img class="img-fluid" src="{{asset('assets/images/blog/3.jpg')}}" alt="">
                            <div class="card-body">
                                <a href="blog-single.html">
                                    <h4 class="card-title">Exclusive Interview With Xinxi Wang Of Litecoin</h4>
                                </a>
                                <p class="card-text">Cras chinwag brown bread Eaton cracking goal so I said a load
                                    of
                                    old tosh baking cakes.!</p>
                            </div>
                            <div class="card-footer">
                                <div class="meta-info">
                                    <a href="#" class="author"><img src="{{asset('assets/images/avatar/7.jpg')}}" alt=""> Admin</a>
                                    <a href="#" class="post-date"><i class="la la-calendar"></i> 31 July, 2019</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="get-touch section-padding" data-scroll-index="6">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="section-title">
                        <h2>Get in touch. Stay in touch.</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="get-touch-content">
                        <div class="media">
                            <span><i class="fa fa-shield"></i></span>
                            <div class="media-body">
                                <h4>24 / 7 Support</h4>
                                <p>Got a problem? Just get in touch. Our support team is available 24/7.
                                </p>
                                <a href="mailto:{{ config('mail.admin_email') }}">Contact us now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()


@push('styles')
@endpush

@push('scripts')
@endpush
