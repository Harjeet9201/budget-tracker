<!DOCTYPE html>

<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default"
    data-assets-path="{{ url('admin/assets/"
                          data-template="vertical-menu-template-free') }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Admin Login</title>

    <meta name="description" content="" />

    <!-- Favicon -->



    <link href=" {{ url('admin/bootstrap/css/bootstrap4.min.css" rel="stylesheet') }}" />
    <link href="{{ url('admin/bootstrap/css/stylesheet.css" rel="stylesheet') }}" />
    <link href="{{ url('admin/fontawsome/css/font-awesome.css" rel="stylesheet') }}" />

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <!-- Content -->

    <div class="container d-flex flex-col justify-content-center" style="margin-top: 100px">
        <div class="container-p-y">
            <div class="w-100">
                <div class="card">
                    <div class="card-body">
                        <!-- Logo -->
                        <div class="app-brand ">
                            <a href="{{ url('/') }}" class="app-brand-link gap-2 d-flex justify-content-center"">
                                <img src="{{ asset('admin/logo.png') }}" width="100px" alt="">
                            </a>
                        </div>
                        <div class="text-center">

                            <h4 class="mb-2"> Budget Tracker👋</h4>
                            <p class="mb-4">Please sign-in to your account and start the adventure</p>
                        </div>
          

                        <form class="mb-3" action="{{ route('loginPost') }}" id="loginForm" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email or Username</label>
                                <input type="text" class="form-control" id="email" name="email"
                                    placeholder="Enter your email or username" autofocus />
                                @error('email')
                                    {{ $message }}
                                @enderror


                            </div>
                            <div class="mb-3 form-password-toggle">
                                <div class="d-flex justify-content-between">
                                    <label class="form-label" for="password">Password</label>

                                </div>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" class="form-control" name="password"
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                        aria-describedby="password" />
                                    @error('password')
                                        {{ $message }}
                                    @enderror
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>
                            </div>
                            <div class="mb-3">

                            </div>
                            <div class="mb-3 d-flex justify-content-center">
                                <input class="btn btn-primary d-grid w-50" type="submit" value="Login" name="submit">
                            </div>
                            {{ session('msg') }}
                        </form>

                        <p class="text-center">
                            <span>New on platform?</span>
                            <a href="{{ route('register') }}">
                                <span>Create an account</span>
                            </a>
                        </p>
                    </div>
                </div>
                <!-- /Register -->
            </div>
        </div>
    </div>
</body>

</html>
