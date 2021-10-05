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
                <img class="barangay-logo" src="assets/barangay-logo.png" alt="">
                <h1>Login</h1>
                <p>to check the information of your barangay</p>

                <div class="input">
                    <label for="username">Username</label>
                    <input class="username" type="text">
                  
                    <label for="password">Password</label>
                    <input type="password" name="Passowrd" id="">
                </div>

                <button>Login</button>
            </div>
            <div class="col-lg-7">
               <img class="login-bg" src="assets/logo-bg.png" alt="">
            </div>
        </div>
    </div>
</body>
</html>