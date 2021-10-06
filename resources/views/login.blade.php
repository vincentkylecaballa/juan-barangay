<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log In | JuanBarangay</title>
</head>

<body>
    <script type="text/javascript" src="{{ asset('js/home.js') }}"></script>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5">
                <div class="container">
                    <div class="row m-2">
                        <div class="col-lg-12 pt-5 pl-5 pr-5">
                            <img class="barangay-logo m-3" src="assets/barangay-logo.png" alt="">
                            <h1 class="login-title m-3">Login</h1>
                            <p class="m-3">to check the information of your barangay</p>
                        </div>
                        <div class="col-lg-12 pl-5 pr-5">
                            <div class="form-group">
                                <label class="col-lg-3 pl-3 pt-2 pb-2 pr-3" id="lblUsername" for="formControlDefault">Username</label>
                                <div class="col-lg-12">
                                    <input class="form-control" type="text" name="formControlDefault" id="Username">
                                </div>

                                <label class="col-lg-3 pl-3 pt-2 pb-2 pr-3" id="lblPassword" for="formControlDefault">Password</label>
                                <div class="col-lg-12">
                                    <input class="form-control" type="password" name="formControlDefault" id="Password">
                                </div>
                            </div>

                            <div class="form-check m-3">
                                <input class="form-check-input" type="checkbox" id="checkboxDefault">
                                <label for="checkboxDefault">Remember Me</label>
                            </div>

                            <div class="col-lg-12">
                                <button class="btn btn-primary btn-block">Login</button>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="col-lg-7">
                <img class="login-bg" src="assets/logo-bg.png" alt="">
            </div>
        </div>
    </div>
</body>

</html>
