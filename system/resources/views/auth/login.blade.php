<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login</title>
    <link href="./css/login.css" rel="stylesheet">
    <link rel='shortcut icon' type='image/x-icon' href='./favicon.ico' />
</head>

<body>
    <div class="main">
        <p class="sign" align="center">Sign in</p>
        <form method="POST" action="{{ route('login') }}" class="custom-form mt-30">
            @csrf
            <input id="email" class="custom-input @error('email') is-invalid @enderror" type="email" name="email" align="center" value="{{ old('email') }}" required placeholder="Email">
            @error('email')
            <span class="invalid-feedback" role="alert">
                <p>{{ $message }}</p>
            </span>
            @enderror
            <input id="password" placeholder="password" type="password" align="center" class="custom-input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <div class="mt-30">
                <button type="submit" class="submit">
                    {{ __('Login') }}
                </button>
            </div>
        </form>
    </div>
</body>

</html>