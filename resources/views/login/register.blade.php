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
    <div class="container d-flex flex-col justify-content-center" style="margin-top: 100px">
        <div class="container" style="width: 50%;">
            <div class="" >
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
                            <p class="mb-4">Register Now to start tracking</p>
                        </div>



                        <form class="mb-3" action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label"> Username</label>
                                <input type="text" class="form-control" id="email" name="name"
                                    placeholder="Enter your email or username" autofocus />
                                @error('name')
                                    {{ $message }}
                                @enderror


                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email </label>
                                <input type="text" class="form-control" id="email" name="email"
                                    placeholder="Enter your email or username" autofocus />
                                @error('email')
                                    {{ $message }}
                                @enderror


                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label"> password</label>
                                <input type="password" class="form-control" id="email" name="password"
                                    placeholder="Enter your password" autofocus />
                                @error('password')
                                    {{ $message }}
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="confirm Password" class="form-label">Confirm password</label>
                                <input type="password" class="form-control" id="email" name="password_confirmation"
                                    placeholder="Confirm password" autofocus />
                            </div>
                    </div>



                    <div class="mb-3 d-flex justify-content-center">
                        <button class="btn btn-primary d-grid w-50 text-center " sty>Register</button>
                    </div>
                    <p class="text-center">
                        <span>Already Registered ?</span>
                        <a href="{{ route('login') }}">
                            <span>Login Now</span>
                        </a>
                    </p>
                </div>

            </div>
            {{ session('msg') }}
            </form>


        </div>
    </div>
</body>

</html>
