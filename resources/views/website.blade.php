<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/website.css') }}" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="container-fluid">
        <nav class="navbar p-5 navbar-expand-lg">
            <a class="navbar-brand" href="#">
                <img class="juanbarangay-logo" src="assets/juanbarangay-logo-small.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active ml-5 mr-5">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item ml-5 mr-5">
                        <a class="nav-link" href="#">How it works</a>
                    </li>
                    <li class="nav-item ml-5 mr-5">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                    <li class="nav-item ml-5 mr-5">
                        <div class="btn btn-primary">
                            <a href="{{ url('/login') }}">Log In</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>


        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="container">
                    <div class="small-header">
                        <div class="row">
                            <span class="dot m-2"></span>
                            <p class="m-2">Road to E-Governance</p>
                        </div>
                    </div>
                </div>
                <div class="header">
                    <h1>In the service of your <br> Barangay, <span> at your fingertips </span>
                    </h1>
                </div>
                <div class="button">
                    <div class="btn btn-primary">Send a Quotation</div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <img class="barangay-image" src="assets/barangay-header.png" alt="">
            </div>
        </div>
    </div>

</body>

</html>
