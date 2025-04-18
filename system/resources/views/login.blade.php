<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elegant Dashboard | Sign In</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="./img/svg/logo.svg" type="image/x-icon">
    <!-- Custom styles -->
    <link rel="stylesheet" href="{{ url('public/master-admin') }}/css/style.min.css">
</head>

<body>
    <div class="layer"></div>
    <main class="page-center">
        <article class="sign-up">
            <h1 class="sign-up__title">Welcome back!</h1>
            <p class="sign-up__subtitle">Sign in to your account to continue</p>
            <form class="sign-up-form form" action="{{ url('login') }}" method="POST">
                @csrf <!-- Tambahkan ini untuk keamanan jika menggunakan Laravel -->
                <label class="form-label-wrapper">
                    <p class="form-label">Username</p>
                    <input class="form-input" type="text" name="username" placeholder="Enter your Username" required>
                </label>
                <label class="form-label-wrapper">
                    <p class="form-label">Password</p>
                    <input class="form-input" type="password" name="password" placeholder="Enter your password"
                        required>
                </label>
                <a class="link-info forget-link" href="##">Forgot your password?</a>
                <label class="form-checkbox-wrapper">
                    <input class="form-checkbox" type="checkbox" name="remember">
                    <span class="form-checkbox-label">Remember me next time</span>
                </label>
                <button type="submit" class="form-btn primary-default-btn transparent-btn">Sign in</button>
            </form>

        </article>
    </main>

    <!-- Chart library -->
    <script src="{{ url('public/master-admin') }}/plugins/chart.min.js"></script>
    <!-- Icons library -->
    <script src="{{ url('public/master-admin') }}/plugins/feather.min.js"></script>
    <!-- Custom scripts -->
    <script src="{{ url('public/master-admin') }}/js/script.js"></script>

</body>

</html>
