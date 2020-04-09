<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COVID-19 | Myanmar Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/bulma.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel='shortcut icon' type='image/x-icon' href="{{ asset('favicon.ico') }}" />
</head>

<body translate="no">
    <header class="hero ">
        <div class="hero-head">
            <nav class="navbar is-fixed-top dashboard-color" role="navigation" aria-label="main navigation">
                <div class="navbar-brand">

                    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                    </a>
                </div>
                <div id="navbarBasicExample" class="navbar-menu">
                    <div class="navbar-start">
                        <a class="navbar-item" href="{{ route('dashboard') }}">
                            Dashboard
                        </a>
                        <a class="navbar-item" href="{{ route('home') }}">
                            Home
                        </a>
                        <a class="navbar-item" href="{{ route('cluster') }}">
                            Cluster
                        </a>
                    </div>

                    <div class="navbar-end">
                        <div class="navbar-item">
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <div class="section dashboard-color">
        <div class="columns">
            <aside class="column is-2 has-text-white">
                <nav class="menu">
                    <p class="menu-label">
                        General
                    </p>
                    <ul class="menu-list">
                        <li><a class="">Dashboard</a></li>
                        <li><a href="{{ route('blog') }}">Blogs</a></li>
                    </ul>
                    <p class="menu-label">
                        Administration
                    </p>
                    <ul class="menu-list">
                        <li><a>Team Settings</a></li>
                        <li>
                            <a class="">Manage Your Team</a>
                            <ul>
                                <li><a>Members</a></li>
                                <li><a>Plugins</a></li>
                                <li><a>Add a member</a></li>
                            </ul>
                        </li>
                        <li><a>Invitations</a></li>
                        <li><a>Cloud Storage Environment Settings</a></li>
                        <li><a>Authentication</a></li>
                    </ul>
                    <p class="menu-label">
                        Transactions
                    </p>
                    <ul class="menu-list">
                        <li><a>Payments</a></li>
                        <li><a>Transfers</a></li>
                        <li><a>Balance</a></li>
                    </ul>
                </nav>
            </aside>
            <main class="column">
                @yield('content')
            </main>
        </div>
    </div>
</body>

</html>