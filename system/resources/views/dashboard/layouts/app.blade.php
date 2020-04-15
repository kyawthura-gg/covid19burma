<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/bulma.css') }}" />
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}" />
    <link rel='shortcut icon' type='image/x-icon' href="{{ asset('favicon.ico') }}" />
    <link rel="stylesheet" href="{{ asset('css/dashboard.css?v=c2zaa198c6f8233d') }}" />
    <script src="{{ asset('js/jquery.js?v=c1a198c6f8233d')}}"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" type="text/css" href="https://npmcdn.com/flatpickr/dist/themes/dark.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
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
                        <a class="s-sidebar__nav-link {{ request()->is('dashboard') ? 'active' : '' }}" href="{{route('dashboard')}}">
                            <i class="fa fa-home"></i><em>Dashboard</em>
                        </a>
                    </li>
                    <li>
                        <a class="s-sidebar__nav-link {{ request()->is('dashboard/cases*') ? 'active' : '' }}" href="{{route('cases.index')}}">
                            <i class="fa fa-user"></i><em>Cases</em>
                        </a>
                    </li>
                    <li>
                        <a class="s-sidebar__nav-link {{ request()->is('dashboard/patient*') ? 'active' : '' }}" href="{{route('patient.index')}}">
                            <i class="fas fa-procedures"></i><em>Patient</em>
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