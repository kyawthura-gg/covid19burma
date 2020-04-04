<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COVID-19 | Myanmar</title>
    <meta name="description" content="Track the spread of Coronavirus (COVID-19) in Myanmar">
    <meta name="keywords" content="coronavirus,corona,covid,covid19,covid-19,covidmyanmar,myanmar,burma,virus">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.covid19burma.org">
    <meta property="og:title" content="COVID-19 | Myanmar">
    <meta property="og:description" content="Track the spread of Coronavirus (COVID-19) in Myanmar">
    <link rel="stylesheet" href="./css/bulma.css?v=c298c7f8233d">
    <link rel="stylesheet" href="./css/app.css?v=c298c7f8233d">
    <script src="./js/jquery.js"></script>
</head>
    <body>
        <nav class="navbar is-black is-fixed-top" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <a class="navbar-item" href="/">
                    Covid-19 | Myanmar
                </a>
                <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>

            <div id="navbarBasicExample" class="is-black navbar-menu">
                <div class="navbar-start">

                    <a class="navbar-item" href="/home">
                        Home
                    </a>
                    <a class="navbar-item" href="/help">
                        Helpful Links
                    </a>
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link">
                        More
                        </a>

                        <div class="navbar-dropdown">
                            <a class="navbar-item" id="id_author">
                                Author
                            </a>
                            <a class="navbar-item">
                                Report an issue
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
                </div>
            </div>
        </nav>
        <main class="py-4">
            <div class="columns mt-70">
                <div class="column">
                    <div id="quote" class="help-container">
                        <p style="color:#c9c9f5">လက်ကို ဆပ်ပြာနှင့် ရေဖြင့် မကြာခဏဆေးကြောပါ</p>
                    </div>
                </div>
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
                            <p>The application is free to use, but not to operate. Help me by clicking the link below
                                and donating. Thank you!</p>
                            <a href="https://www.paypal.me/kanhaiyaaryal">https://www.paypal.me/kanhaiyaaryal</a>
                        </section>
                    </div>
                </div>
                <div class="modal" id="id_author_modal">
                    <div class="modal-background"></div>
                    <div class="modal-card">
                        <header class="modal-card-head">
                            <p class="modal-card-title" style="margin-bottom: 0px;">Initiative by</p>
                            <button class="delete close_author" aria-label="close"></button>
                        </header>
                        <section class="modal-card-body">
                            <div class="">
                                <img src="./img/kanhaiya.png" alt="" class="circular_image" style="">
                                <a href="mailto:kanaiyaaryal@gmail.com" style="color:white">Kanhaiya Aryal (Kyaw
                                    Thura)</a>
                            </div>
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
                            <p class="answer_p">I am a volunteer who curate and verify the data coming from several
                                sources.</p>
                        </section>
                    </div>
                </div>
    </body>

    <script src="./js/app.js?v=c298c7f8233d"></script>
    <script src="./js/counterup.js?v=c298c7f8233d" type="module"></script>
    <script src="./js/main.js?v=c298c7f8233d" type="module"></script>
    <script src="./js/quota.js"></script>
</html>
