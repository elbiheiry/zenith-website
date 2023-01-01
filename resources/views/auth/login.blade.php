<html lang="en">

<head>
    <!-- Meta Tags
        ======================-->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="keywords" content="" />
    <meta name="copyright" content="" />

    <!-- Title Name
        ================================-->
    <title> Brandbourne </title>

    <!-- Fave Icons
        ================================-->
    <link rel="shortcut icon" href="{{ aurl('images/fav-icon.png') }}" />

    <!-- Css Base And Vendor
        ===================================-->
    <link rel="stylesheet" href="{{ aurl('vendor/bootstrap/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous" />
    {{-- <link rel="stylesheet" href="{{ asset('public/admin/vendor/datatable/datatables.min.css') }}" /> --}}

    <!-- Site Css
        ====================================-->
    <link rel="stylesheet" href="{{ aurl('css/style.css') }}" />

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="body">
    <div class="login-wrap">
        <form method="post" action="{{ route('admin.login') }}">

            <div class="form-title">
                <i class="fa fa-lock"></i>
                Sign in To Your Account
            </div>

            <div class="form-group">
                <label>Username </label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                    value="{{ old('name') }}" autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label>Password </label>
                <input type="password" class="form-control  @error('password') is-invalid @enderror" name="password" />

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group text-center">
                <button type="submit" class="custom-btn">login now <i class="fa fa-long-arrow-alt-right"></i></button>
            </div>
            @csrf
        </form>
    </div>
    <!--End Form-->
    <div class="loader">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>
    <!-- JS Base And Vendor
        ==========================================-->
    <script src="{{ aurl('vendor/jquery/jquery.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="{{ aurl('vendor/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ aurl('vendor/jquery.countTo.js') }}"></script>
    <script src="{{ aurl('js/main.js') }}"></script>
</body>

</html>
