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
    <title>JuanBarangay</title>
</head>

<body>
    <div class="container-fluid">
        <nav class="navbar p-5 navbar-expand-lg">
            <a class="navbar-brand" href="#">
                <img class="website-rectangle" src="assets/home-rectangle.png" alt="">
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
                        <a class="login-text pt-1 pb-1 pl-4 pr-4" href="{{ url('/login') }}" role="button">Log In</a>
                    </li>
                </ul>
            </div>
        </nav>


        <section class="landing-page">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 mx-auto my-auto">
                    <div class="ml-5">
                        <div class="container">
                            <div class="small-header">
                                <div class="row">
                                    <span class="dot m-2"></span>
                                    <p class="m-2">Road to E-Governance</p>
                                </div>
                            </div>
                        </div>
                        <div class="header">
                            <h1 class="landing-header">In the service of your <br> Barangay, <span> at your
                                    <br> fingertips </span>
                            </h1>
                        </div>
                        <div class="button">
                            <button class="quotation-btn pt-2 pb-2 pl-5 pr-5">Send A Quotation</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <img class="barangay-image" src="assets/barangay-header.png" alt="">
                    <img class="folder-img" src="assets/3d-fluency-folder.png" alt="">
                    <img class="email-img" src="assets/3d-fluency-email.png" alt="">
                </div>
            </div>
        </section>

        <section class="how-it-works">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="header">
                    <h1 class="header-text mt-5 mb-5 pt-5 text-center">What makes us special?</h1>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="row">
                    <div class="mx-auto my-auto justify-content-center">
                        <div class="d-flex">
                            <div class="card m-3" style="height: 30rem; width: 20rem;">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <div class="dot-card mt-5 ml-1">
                                            <img class="icon ml-4 mt-4" src="assets/icons8-call.svg" alt="">
                                        </div>
                                    </div>
                                    <div class="card-headers">
                                        <h3 class="card-header-text ml-2 mt-4">Contact JuanBarangay</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="card m-3" style="height: 30rem; width: 20rem;">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <div class="dot-card mt-5 ml-1">
                                            <img class="icon ml-4 mt-4" src="assets/icons8-project.svg" alt="">
                                        </div>
                                    </div>
                                    <div class="card-headers">
                                        <h3 class="card-header-text ml-2 mt-4">Add Your Barangay Details</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="card m-3" style="height: 30rem; width: 20rem;">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <div class="dot-card  mt-5 ml-1">
                                            <img class="icon ml-3 mt-3" src="assets/icons8-checkmark.svg" alt="">
                                        </div>
                                    </div>
                                    <div class="card-headers">
                                        <h3 class="card-header-text ml-2 mt-4">Manage Events</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="card m-3" style="height: 30rem; width: 20rem;">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <div class="dot-card  mt-5 ml-1">
                                            <img class="icon ml-3 mt-3" src="assets/icons8-checkmark.svg" alt="">
                                        </div>
                                    </div>
                                    <div class="card-headers">
                                        <h3 class="card-header-text ml-2 mt-4">Congratulations</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="juanbarangay-footer">
            <footer class="footer p-5" id="footer">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="footer-links-one">
                                    <div class="widget no-box">
                                        <img class="footer-logo" src="assets/juanbarangay-logo.png" alt="">
                                        <p class="word-wrap">JuanBarangay is a Barangay Information System based in
                                            the Philippines. The
                                            goal
                                            of this
                                            web application is to make their Barangay digitally enabled at the
                                            fingertips of
                                            ther constituents and its officials. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="footer-links-one">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="container">
                                            <h5 class="footer-header">Quick Links</h5>
                                            <a href="">Home</a><br>
                                            <a href="">How it Works</a><br>
                                            <a href="">Contact Us</a><br>
                                            <a href="{{ url('assets/login.php') }}">Login</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="footer-links-two">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="container">
                                            <h5 class="footer-header">Services</h5>
                                            <ul class="list-group">
                                                <li>Barangay Population</li>
                                                <li>Barangay Officials</li>
                                                <li>Calendar of Activities</li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="footer-links-three">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="container">
                                            <h5 class="footer-header">Get in Touch</h5>
                                            <div class="row">
                                                <div class="col-lg-2 col-md-2 col-sm-2">
                                                    <svg class="svg-footer" xmlns="http://www.w3.org/2000/svg"
                                                        x="0px" y="0px" width="50" height="50" viewBox="0 0 172 172"
                                                        style=" fill:#000000;">
                                                        <g fill="none" fill-rule="nonzero" stroke="none"
                                                            stroke-width="1" stroke-linecap="butt"
                                                            stroke-linejoin="miter" stroke-miterlimit="10"
                                                            stroke-dasharray="" stroke-dashoffset="0" font-family="none"
                                                            font-weight="none" font-size="none" text-anchor="none"
                                                            style="mix-blend-mode: normal">
                                                            <path d="M0,172v-172h172v172z" fill="none"></path>
                                                            <g fill="#ffffff">
                                                                <path
                                                                    d="M86,10.32c-41.796,0 -75.68,33.884 -75.68,75.68c0,37.9432 27.95,69.27128 64.36928,74.74432v-54.68568h-18.72392v-19.89352h18.72392v-13.23712c0,-21.91624 10.67776,-31.53792 28.89256,-31.53792c8.72384,0 13.33688,0.64672 15.52128,0.94256v17.36512h-12.42528c-7.73312,0 -10.43352,7.33064 -10.43352,15.59352v10.87384h22.66272l-3.07536,19.89352h-19.58736v54.84736c36.93872,-5.01208 65.43568,-36.59472 65.43568,-74.906c0,-41.796 -33.884,-75.68 -75.68,-75.68z">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <div class="col-lg-10 col-md-10 col-sm-10">
                                                    <h6 class="footer-subtitle">facebook.com/juanbarangay.ph</h6>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-2 col-md-2 col-sm-2">
                                                    <svg class="svg-footer" xmlns="http://www.w3.org/2000/svg"
                                                        x="0px" y="0px" width="50" height="50" viewBox="0 0 172 172"
                                                        style=" fill:#000000;">
                                                        <g fill="none" fill-rule="nonzero" stroke="none"
                                                            stroke-width="1" stroke-linecap="butt"
                                                            stroke-linejoin="miter" stroke-miterlimit="10"
                                                            stroke-dasharray="" stroke-dashoffset="0" font-family="none"
                                                            font-weight="none" font-size="none" text-anchor="none"
                                                            style="mix-blend-mode: normal">
                                                            <path d="M0,172v-172h172v172z" fill="none"></path>
                                                            <g fill="#ffffff">
                                                                <path
                                                                    d="M86,10.32c-41.796,0 -75.68,33.884 -75.68,75.68c0,37.9432 27.95,69.27128 64.36928,74.74432v-54.68568h-18.72392v-19.89352h18.72392v-13.23712c0,-21.91624 10.67776,-31.53792 28.89256,-31.53792c8.72384,0 13.33688,0.64672 15.52128,0.94256v17.36512h-12.42528c-7.73312,0 -10.43352,7.33064 -10.43352,15.59352v10.87384h22.66272l-3.07536,19.89352h-19.58736v54.84736c36.93872,-5.01208 65.43568,-36.59472 65.43568,-74.906c0,-41.796 -33.884,-75.68 -75.68,-75.68z">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <div class="col-lg-10 col-md-10 col-sm-10">
                                                    <h6 class="footer-subtitle align-items-c">facebook.com/juanbarangay.ph</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </section>
    </div>
</body>

</html>
