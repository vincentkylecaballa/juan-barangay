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
        <div class="container-fluid">
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
        </div>

    </section>

    <section class="how-it-works">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="header">
                <h1 class="header-text mt-5 mb-5 pt-5 text-center">How it works</h1>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
                <div class="mx-auto my-auto justify-content-center">
                    <div class="d-flex">
                        <div class="card m-3" style="height: 35rem; width: 20rem;">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="dot-card mt-5 ml-1">
                                        <img class="icon ml-4 mt-4" src="assets/icons8-call.svg" alt="">
                                    </div>
                                </div>
                                <div class="card-headers">
                                    <h3 class="card-header-text ml-2 mt-4">Contact JuanBarangay</h3>
                                </div>
                                <div class="text-subtitle ml-2 mt-5">
                                    <p class="word-wrap">
                                        Hold your horses! Our application is in beta version, contact our JuanBarangay
                                        team for
                                        the best possible plan for your Barangay.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card m-3" style="height: 35rem; width: 20rem;">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="dot-card mt-5 ml-1">
                                        <img class="icon ml-4 mt-4" src="assets/icons8-project.svg" alt="">
                                    </div>
                                </div>
                                <div class="card-headers">
                                    <h3 class="card-header-text ml-2 mt-4">Add Your Barangay Details</h3>
                                </div>
                                <div class="text-subtitle ml-2 mt-5">
                                    <p class="word-wrap">
                                        Yay, you are now in our JuanBarangay system. Add your Barangay details such as
                                        its population, officers, and more!
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card m-3" style="height: 35rem; width: 20rem;">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="dot-card  mt-5 ml-1">
                                        <svg class="mt-4 ml-4" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50"
                                            viewBox="0 0 172 172" style=" fill:#000000;">
                                            <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1"
                                                stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                                stroke-dasharray="" stroke-dashoffset="0" font-family="none"
                                                font-weight="none" font-size="none" text-anchor="none"
                                                style="mix-blend-mode: normal">
                                                <path d="M0,172v-172h172v172z" fill="none"></path>
                                                <g fill="#000000">
                                                    <path
                                                        d="M41.28,0c-3.7625,0 -6.88,3.1175 -6.88,6.88v6.88h-20.64c-3.99094,0 -6.88,2.88906 -6.88,6.88v24.08h158.24v-24.08c0,-3.99094 -2.88906,-6.88 -6.88,-6.88h-20.64v-6.88c0,-3.7625 -3.1175,-6.88 -6.88,-6.88h-6.88c-3.7625,0 -6.88,3.1175 -6.88,6.88v6.88h-61.92v-6.88c0,-3.7625 -3.1175,-6.88 -6.88,-6.88zM41.28,6.88h6.88v20.64h-6.88zM123.84,6.88h6.88v20.64h-6.88zM6.88,51.6v106.64c0,3.99094 2.88906,6.88 6.88,6.88h144.48c3.99094,0 6.88,-2.88906 6.88,-6.88v-106.64zM41.28,72.24h17.2v17.2h-17.2zM65.36,72.24h17.2v17.2h-17.2zM89.44,72.24h17.2v17.2h-17.2zM113.52,72.24h17.2v17.2h-17.2zM41.28,96.32h17.2v17.2h-17.2zM65.36,96.32h17.2v17.2h-17.2zM89.44,96.32h17.2v17.2h-17.2zM113.52,96.32h17.2v17.2h-17.2zM41.28,120.4h17.2v17.2h-17.2zM65.36,120.4h17.2v17.2h-17.2zM89.44,120.4h17.2v17.2h-17.2zM113.52,120.4h17.2v17.2h-17.2z">
                                                    </path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                                <div class="card-headers">
                                    <h3 class="card-header-text ml-2 mt-4">Manage Events in the Calendar</h3>
                                </div>
                                <div class="text-subtitle ml-2 mt-5">
                                    <p class="word-wrap">
                                        Yay, you are now in our JuanBarangay system. Add your Barangay details such as
                                        its population, officers, and more!
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card m-3" style="height: 35rem; width: 20rem;">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="dot-card  mt-5 ml-1">
                                        <img class="icon ml-3 mt-3" src="assets/icons8-checkmark.svg" alt="">
                                    </div>
                                </div>
                                <div class="card-headers">
                                    <h3 class="card-header-text ml-2 mt-4">Congratulations, you're certified!</h3>
                                </div>
                                <div class="text-subtitle ml-2 mt-5">
                                    <p class="word-wrap">
                                        Congratulations! you are now a certified E-Governance Barangay in the country.
                                        You may update your Barangay system if you need to.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-us m-5">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="contact-header">
                <h1 class="contact-header-text text-center mt-5 mb-5">Contact Us</h1>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="container">
                    <form action="">
                        <div class="form-group">
                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <input type="text" class="form-control" id="name" placeholder="FIRST NAME"
                                            name="name" value="" required>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <input type="text" class="form-control" id="name" placeholder="LAST NAME"
                                            name="name" value="" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <input type="text" class="form-control" id="name" placeholder="EMAIL ADDRESS"
                                            name="name" value="" required>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <input type="text" class="form-control" id="name" placeholder="PHONE NUMBER"
                                            name="name" value="" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <textarea class="form-control" rows="10" placeholder="MESSAGE" name="message"
                                    required></textarea>
                            </div>

                        </div>

                        <div class="container">
                            <div class="text-right">
                                <button class="send-btn">Send Message</button>
                            </div>
                        </div>
                    </form>
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
                                    <p class="footer-text word-wrap mt-4">JuanBarangay is a Barangay Information System
                                        based in
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
                                        <div class="footer-text mt-4">
                                            <a id="footer-link" href="">Home</a><br>
                                            <a id="footer-link" href="">How it Works</a><br>
                                            <a id="footer-link" href="">Contact Us</a><br>
                                            <a id="footer-link" href="{{ url('/login') }}">Login</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="footer-links-two">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="container">
                                        <h5 class="footer-header">Services</h5>
                                        <div class="footer-text">
                                            <ul class="list-group mt-4">
                                                <h6>Barangay Population</h6>
                                                <h6>Barangay Officials</h6>
                                                <h6>Calendar of Activities</h6>
                                            </ul>
                                        </div>
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
                                                <div class="m-2">
                                                    <svg class="svg-footer" xmlns="http://www.w3.org/2000/svg"
                                                        x="0px" y="0px" width="24" height="24" viewBox="0 0 172 172"
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
                                                                    d="M121.83333,21.5h-71.66667c-15.83117,0 -28.66667,12.8355 -28.66667,28.66667v71.66667c0,15.83117 12.8355,28.66667 28.66667,28.66667h40.28383v-49.88717h-16.7915v-19.52917h16.7915v-14.36917c0,-16.65533 10.18383,-25.7355 25.0475,-25.7355c5.0095,-0.01433 10.01183,0.24367 14.99267,0.7525v17.415h-10.234c-8.09833,0 -9.675,3.827 -9.675,9.47433v12.43417h19.35l-2.5155,19.52917h-16.94917v49.91583h11.36633c15.83117,0 28.66667,-12.8355 28.66667,-28.66667v-71.66667c0,-15.83117 -12.8355,-28.66667 -28.66667,-28.66667z">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="col-lg-10 col-md-10 col-sm-10">
                                                <h6 class="footer-subtitle m-3">facebook.com/juanbarangay.ph</h6>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-2 col-md-2 col-sm-2">
                                                <div class="m-2">
                                                    <svg class="svg-footer" xmlns="http://www.w3.org/2000/svg"
                                                        x="0px" y="0px" width="24" height="24" viewBox="0 0 172 172"
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
                                                                    d="M121.83333,21.5h-71.66667c-15.83117,0 -28.66667,12.8355 -28.66667,28.66667v71.66667c0,15.83117 12.8355,28.66667 28.66667,28.66667h71.66667c15.83117,0 28.66667,-12.8355 28.66667,-28.66667v-71.66667c0,-15.83117 -12.8355,-28.66667 -28.66667,-28.66667zM122.19167,68.18367c0,0.61633 0,1.2255 0,2.45817c0,23.34183 -17.81633,50.3745 -50.3745,50.3745c-9.8255,0 -19.04183,-3.0745 -27.0255,-7.98367c1.2255,0 3.0745,0 4.3,0c7.98367,0 15.9745,-3.0745 22.11633,-7.3745c-7.98367,0 -14.1255,-5.5255 -16.58367,-12.28367c1.2255,0 2.45817,0.61633 3.0745,0.61633c1.84183,0 3.0745,0 4.91633,-0.61633c-7.98367,-1.84183 -14.1255,-8.6 -14.1255,-17.2c2.45817,1.2255 4.91633,1.84183 7.98367,2.45817c-4.91633,-4.3 -7.98367,-9.21633 -7.98367,-15.35817c0,-3.0745 0.61633,-6.14183 2.45817,-8.6c8.6,10.44183 21.5,17.81633 36.24183,18.4255c0,-1.2255 -0.61633,-2.45817 -0.61633,-4.3c0,-9.8255 7.98367,-17.81633 17.81633,-17.81633c4.91633,0 9.8255,1.84183 12.9,5.5255c4.3,-0.61633 7.98367,-2.45817 11.05817,-4.3c-1.2255,4.3 -4.3,7.3745 -7.98367,9.8255c3.68367,-0.61633 6.75817,-1.2255 10.44183,-3.0745c-2.4725,3.698 -5.53983,6.76533 -8.61433,9.2235z">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="col-lg-10 col-md-10 col-sm-10">
                                                <h6 class="footer-subtitle align-items-center m-3">
                                                    twitter.com/juanbarangay.ph</h6>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-2 col-md-2 col-sm-2">
                                                <div class="m-2">
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
                                                                    d="M48.16,13.76c-18.95899,0 -34.4,15.44101 -34.4,34.4v75.68c0,18.95899 15.44101,34.4 34.4,34.4h75.68c18.95899,0 34.4,-15.44101 34.4,-34.4v-75.68c0,-18.95899 -15.44101,-34.4 -34.4,-34.4zM44.72,55.04h82.56c0.6192,0 1.2032,0.06987 1.7536,0.24187l-33.81547,33.78188c-5.0912,5.0912 -13.37865,5.0912 -18.46985,0l-33.78188,-33.78188c0.5504,-0.172 1.1344,-0.24187 1.7536,-0.24187zM38.08187,60.1664l25.86719,25.8336l-25.86719,25.8336c-0.172,-0.5504 -0.24187,-1.1344 -0.24187,-1.7536v-48.16c0,-0.6192 0.06987,-1.2032 0.24187,-1.7536zM133.91813,60.1664c0.172,0.5504 0.24187,1.1344 0.24187,1.7536v48.16c0,0.6192 -0.06988,1.2032 -0.24187,1.7536l-25.90078,-25.8336zM68.8,90.85094l3.06375,3.09735c3.8872,3.8872 9.01145,5.81172 14.10265,5.81172c5.1256,0 10.21546,-1.92452 14.10266,-5.81172l3.09734,-3.09735l25.86719,25.86719c-0.5504,0.172 -1.1344,0.24187 -1.7536,0.24187h-82.56c-0.6192,0 -1.2032,-0.06988 -1.7536,-0.24187z">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="col-lg-10 col-md-10 col-sm-10">
                                                <h6 class="footer-subtitle align-items-center m-3">
                                                    support@juanbarangay.ph</h6>
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

    <section class="copyright">
        <div class="container-fluid">
            <p class="p-3 text-center">All Rights Reserved 2021 - Code Brigades</p>
        </div>
    </section>

</body>

</html>
