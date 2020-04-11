<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/bulma.css') }}" />
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}" />
    <link rel='shortcut icon' type='image/x-icon' href="{{ asset('favicon.ico') }}" />
    <link rel="stylesheet" href="{{ asset('css/dashboard.css?v=c2za198c6f8233d') }}" />
    <!-- <link href="{{ asset('css/datepicker/flatpicker.css?v=c3a198c6f8233d')}}" /> -->
    <!-- <link href="{{ asset('css/datepicker/darktheme.css?v=c1a198c6f8233d')}}" /> -->
    <script src="{{ asset('js/jquery.js?v=c1a198c6f8233d')}}"></script>
</head>

<body translate="no">
    <div class="s-layout">
        <!-- Sidebar -->
        <div class="s-layout__sidebar">
            <a class="s-sidebar__trigger" href="#0">
                <i class="fa fa-bars"></i>
            </a>

            <nav class="s-sidebar__nav">
                <ul>
                    <li>
                        <a class="s-sidebar__nav-link" href="{{route('dashboard')}}">
                            <i class="fa fa-home"></i><em>Dashboard</em>
                        </a>
                    </li>
                    <li>
                        <a class="s-sidebar__nav-link" href="{{route('cases.index')}}">
                            <i class="fa fa-user"></i><em>Cases</em>
                        </a>
                    </li>
                    <li>
                        <a class="s-sidebar__nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt"></i><em>{{ __('Logout') }}</em>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- Content -->
        <main class="s-layout__content">
            @yield('content')
        </main>
    </div>
</body>

</html>