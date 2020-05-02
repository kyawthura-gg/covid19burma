<!DOCTYPE html>
<html lang="{{  app()->getLocale() }}">

<head>
    <meta charset=" UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COVID-19 | Myanmar Tracker</title>
    <meta name="description" content="Track the spread of Coronavirus (COVID-19) in Myanmar">
    <meta name="keywords" content="coronavirus,corona,covid,covid19,covid-19,covidmyanmar,myanmar,burma,virus">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.covid19burma.org">
    <meta property="og:title" content="COVID-19 | Myanmar">
    <meta property="og:description" content="Track the spread of Coronavirus (COVID-19) in Myanmar">
    <meta property="og:image" content="./img/virus_black.png" />
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}" />
    <link rel='shortcut icon' type='image/x-icon' href='./favicon_black.ico' />
    <link rel="stylesheet" href="./css/bulma.css?v=c298c6f8233d">
    <link rel="stylesheet" href="./css/app.css?v=cc7fs83s2dszd">
    <script type="text/javascript" src="{{ asset('js/jquery.js?v=c298c6f82a33d')}}"></script>
    <script type="text/javascript" src="{{ asset('js/chart.min.js?v=c298c6f823a3d')}}"></script>
</head>

<body>
    <nav class="navbar is-black is-fixed-top" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="{{route('index')}}">
                <img src="./img/virus.png" class="mr-10" alt="Virus Logo">
                Covid-19 | {{__('menu.myanmar')}}
            </a>
            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbarBasicExample" class="is-black navbar-menu">
            <div class="navbar-start">

                <a class="navbar-item" href="{{route('index')}}">
                    {{__('menu.home')}}
                </a>
                <a class="navbar-item" href="{{route('cluster')}}">
                    {{__('menu.cluster')}}
                </a>
                <a class="navbar-item" href="{{route('news')}}">
                    {{__('menu.news')}}
                </a>

                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">
                        {{__('menu.more')}}
                    </a>
                    <div class="navbar-dropdown">
                        <a class="navbar-item" href="{{route('contactus')}}">
                            Report an issue
                        </a>
                        <a class="navbar-item" href="{{route('about')}}">
                            {{__('menu.aboutus')}}
                        </a>
                    </div>
                </div>
            </div>

            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="bottom-box" id="id_disclaimer">
                        Disclaimer
                    </div>
                </div>
                <div class="navbar-item">
                    <div class="bottom-box" id="id_faq">
                        FAQs
                    </div>
                </div>
                @if ( Config::get('app.locale') == 'en')

                <div class="navbar-item">
                    <a class="bottom-box button" href="locale/mm">
                        <span class="icon">
                            <img src="{{ asset('img/flag/mm.png')}}" alt="">
                        </span>
                        <span>
                            မြန်မာ
                        </span>
                    </a>
                </div>

                @elseif ( Config::get('app.locale') == 'mm' )

                <div class="navbar-item">
                    <a class="bottom-box button" href="locale/en">
                        <span class="icon">
                            <img src="{{ asset('img/flag/en.png')}}" alt="">
                        </span>
                        <span>
                            English
                        </span>
                    </a>
                </div>

                @endif
            </div>
        </div>
    </nav>
    <main class="py-4">
        <div class="columns mt-70">
        </div>
        @yield('content')
    </main>
    <div class="modal" id="id_disclaimer_modal">
        <div class="modal-background"></div>
        <div class="modal-card">
            <header class="modal-card-head">
                <p class="modal-card-title" style="margin-bottom: 0px;">Disclaimer</p>
                <button class="delete close_disclaimer" aria-label="close"></button>
            </header>
            <section class="modal-card-body">
                <p>The author is not responsible for the relevance and correctness of the content provided.
                    The data may be out of date.</p>
                <p>The data is updated basing on the official Facebook account of Myanmar Ministry of Health
                    and Sports.</p>
                <p>The application is free to use, but not to operate. Help us by clicking the link below
                    and donating. Thank you!</p>
                <a href="https://www.paypal.me/kanhaiyaaryal">https://www.paypal.me/kanhaiyaaryal</a>
            </section>
        </div>
    </div>
    <div class="modal" id="id_faq_modal">
        <div class="modal-background"></div>
        <div class="modal-card">
            <header class="modal-card-head">
                <p class="modal-card-title" style="margin-bottom: 0px;">FAQs</p>
                <button class="delete close_faq" aria-label="close"></button>
            </header>
            <section class="modal-card-body">
                <p>Are you offical?</p>
                <p class="answer_p">No</p>
                <p class="mt-10">Who are you?</p>
                <p class="answer_p">We are volunteer who curate and verify the data coming from several
                    sources.</p>
            </section>
        </div>
    </div>
</body>

<script src="./js/app.js?v=c9qa98ca7azf1233ad"></script>
<script src="./js/counterup.js?v=c298c7f82a33d" type="module"></script>
<script src="./js/main.js?v=cdae4az9108c7fa8213d" type="module"></script>

</html>