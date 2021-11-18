<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
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
    <title>Home | JuanBarangay</title>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css" />
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <div class="position-fixed">
                    <div class="nav-sidebar">
                        <ul class="nav flex-column">
                            <div class="nav-image">
                                <div class="col-md-12">
                                    <img class="mt-2 mb-2 p-4" src="assets/juanbarangay-logo.png" alt="">
                                </div>
                            </div>

                            <h6 class="nav-title pl-3 pt-3">DASHBOARD</h6>

                            <li class="nav-item" style="-moz-border-radius-topleft: 10px;
                            -moz-border-radius-topright: 10px;
                            -moz-border-radius-bottomright: 10px;
                            -moz-border-radius-bottomleft: 10px;
                            -webkit-border-radius: 10px 10px 10px 10px;
                            border-radius: 10px 10px 10px 10px;
                            background-color: white;">
                                <div class="col-md-12">
                                    <a class="nav-link active" href="{{ url('/home') }}" style="
                                    color: #3D5AF1;">
                                        <svg class="svg-icon ml-3 mr-3 p-2" xmlns="http://www.w3.org/2000/svg" x="0px"
                                            y="0px" width="30" height="30" viewBox="0 0 30 30" style=" fill: #3D5AF1;">
                                            <path
                                                d="M 15 2 A 1 1 0 0 0 14.300781 2.2851562 L 3.3925781 11.207031 A 1 1 0 0 0 3.3554688 11.236328 L 3.3183594 11.267578 L 3.3183594 11.269531 A 1 1 0 0 0 3 12 A 1 1 0 0 0 4 13 L 5 13 L 5 24 C 5 25.105 5.895 26 7 26 L 23 26 C 24.105 26 25 25.105 25 24 L 25 13 L 26 13 A 1 1 0 0 0 27 12 A 1 1 0 0 0 26.681641 11.267578 L 26.666016 11.255859 A 1 1 0 0 0 26.597656 11.199219 L 25 9.8925781 L 25 6 C 25 5.448 24.552 5 24 5 L 23 5 C 22.448 5 22 5.448 22 6 L 22 7.4394531 L 15.677734 2.2675781 A 1 1 0 0 0 15 2 z M 18 15 L 22 15 L 22 23 L 18 23 L 18 15 z">
                                            </path>
                                        </svg>Home
                                    </a>
                                </div>
                            </li>

                            <li class="nav-item">
                                <div class="col-md-12">
                                    <a class="nav-link" href="{{ url('/brgyofficers') }}">
                                        <svg class="svg-icon ml-3 mr-3 p-2" xmlns="http://www.w3.org/2000/svg" x="0px"
                                            y="0px" width="30" height="30" viewBox="0 0 30 30" style=" fill:white;">
                                            <path
                                                d="M 15 3.0019531 C 10.758 3.0019531 9 5.7229531 9 9.0019531 C 9 10.105953 9.5273437 11.214844 9.5273438 11.214844 C 9.3153438 11.336844 8.9666875 11.724109 9.0546875 12.412109 C 9.2186875 13.695109 9.7749062 14.021828 10.128906 14.048828 C 10.263906 15.245828 11.55 16.777 12 17 L 12 19 C 11.951 19.146 11.872969 19.270531 11.792969 19.394531 C 12.410969 20.177531 13.429 21 15 21 C 16.571 21 17.589031 20.177531 18.207031 19.394531 C 18.127031 19.270531 18.049 19.146 18 19 L 18 17 C 18.45 16.777 19.736094 15.245828 19.871094 14.048828 C 20.225094 14.021828 20.781312 13.695109 20.945312 12.412109 C 21.033313 11.723109 20.684656 11.336844 20.472656 11.214844 C 20.472656 11.214844 21 10.212953 21 9.0019531 C 21 6.5739531 20.047 4.5019531 18 4.5019531 C 18 4.5019531 17.289 3.0019531 15 3.0019531 z M 15 21 L 12 24 L 10.248047 20.496094 C 7.5870469 21.556094 3 21.696 3 27 L 27 27 C 27 21.696 22.412953 21.556094 19.751953 20.496094 L 18 24 L 15 21 z">
                                            </path>
                                        </svg>Barangay Officials
                                    </a>
                                </div>
                            </li>

                            <li class="nav-item">
                                <div class="col-md-12">
                                    <a class="nav-link" href="{{ url('/population') }}">
                                        <svg class="svg-icon ml-3 mr-3 p-2" xmlns="http://www.w3.org/2000/svg" x="0px"
                                            y="0px" width="30" height="30" viewBox="0 0 30 30" style=" fill:white;">
                                            <path
                                                d="M 9 4 C 6.239 4 4 6.239 4 9 L 4 10 C 4 12.761 6.239 15 9 15 C 11.761 15 14 12.761 14 10 L 14 9 C 14 6.239 11.761 4 9 4 z M 21 4 C 18.239 4 16 6.239 16 9 L 16 10 C 16 12.761 18.239 15 21 15 C 23.761 15 26 12.761 26 10 L 26 9 C 26 6.239 23.761 4 21 4 z M 21 6 C 22.654 6 24 7.346 24 9 L 24 10 C 24 11.654 22.654 13 21 13 C 19.346 13 18 11.654 18 10 L 18 9 C 18 7.346 19.346 6 21 6 z M 8.9980469 17 C 5.7200469 17 1.5146875 18.874062 0.3046875 20.914062 C -0.4423125 22.174062 0.26909375 24 1.4960938 24 L 13.496094 24 L 16.503906 24 L 28.503906 24 C 29.730906 24 30.443313 22.174063 29.695312 20.914062 C 28.484313 18.874062 24.276047 17 20.998047 17 C 19.047658 17 16.780902 17.671584 15 18.638672 C 13.21859 17.67114 10.948987 17 8.9980469 17 z M 20.998047 19 C 23.768047 19 27.207609 20.640594 27.974609 21.933594 C 27.985609 21.951594 27.990141 21.975 27.994141 22 L 17.992188 22 C 17.982946 21.627707 17.893464 21.251138 17.693359 20.914062 C 17.496485 20.582142 17.198019 20.259134 16.859375 19.943359 C 18.140889 19.393039 19.646958 19 20.998047 19 z">
                                            </path>
                                        </svg>Barangay Population
                                    </a>
                                </div>
                            </li>

                            <li class="nav-item">
                                <div class="col-md-12">
                                    <a class="nav-link" href="{{ url('/eventcalendar') }}">
                                        <svg class="svg-icon ml-3 mr-3 p-2" xmlns="http://www.w3.org/2000/svg" x="0px"
                                            y="0px" width="30" height="30" viewBox="0 0 30 30" style=" fill:white;">
                                            <path
                                                d="M24,4H6C4.895,4,4,4.895,4,6v18c0,1.105,0.895,2,2,2h18c1.105,0,2-0.895,2-2V6C26,4.895,25.105,4,24,4z M7,23 c-0.552,0-1-0.448-1-1c0-0.552,0.448-1,1-1s1,0.448,1,1C8,22.552,7.552,23,7,23z M7,19c-0.552,0-1-0.448-1-1c0-0.552,0.448-1,1-1 s1,0.448,1,1C8,18.552,7.552,19,7,19z M11,23c-0.552,0-1-0.448-1-1c0-0.552,0.448-1,1-1s1,0.448,1,1C12,22.552,11.552,23,11,23z M11,19c-0.552,0-1-0.448-1-1c0-0.552,0.448-1,1-1s1,0.448,1,1C12,18.552,11.552,19,11,19z M11,15c-0.552,0-1-0.448-1-1 c0-0.552,0.448-1,1-1s1,0.448,1,1C12,14.552,11.552,15,11,15z M15,23c-0.552,0-1-0.448-1-1c0-0.552,0.448-1,1-1s1,0.448,1,1 C16,22.552,15.552,23,15,23z M15,19c-0.552,0-1-0.448-1-1c0-0.552,0.448-1,1-1s1,0.448,1,1C16,18.552,15.552,19,15,19z M15,15 c-0.552,0-1-0.448-1-1c0-0.552,0.448-1,1-1s1,0.448,1,1C16,14.552,15.552,15,15,15z M19,23c-0.552,0-1-0.448-1-1 c0-0.552,0.448-1,1-1s1,0.448,1,1C20,22.552,19.552,23,19,23z M19,19c-0.552,0-1-0.448-1-1s0.448-1,1-1s1,0.448,1,1S19.552,19,19,19 z M18,14c0-0.552,0.448-1,1-1s1,0.448,1,1c0,0.552-0.448,1-1,1S18,14.552,18,14z M23,19c-0.552,0-1-0.448-1-1c0-0.552,0.448-1,1-1 s1,0.448,1,1C24,18.552,23.552,19,23,19z M23,15c-0.552,0-1-0.448-1-1c0-0.552,0.448-1,1-1s1,0.448,1,1C24,14.552,23.552,15,23,15z M24,10H6V6h18V10z">
                                            </path>
                                        </svg>Calendar of Activities</a>
                                </div>
                            </li>

                            <h6 class="nav-title pt-3 pl-3 pt-5">INFORMATION HUB</h6>

                            <li class="nav-item">
                                <div class="col-md-12">
                                    <a class="nav-link h-20" href="{{ url('/about') }}">
                                        <svg class="svg-icon ml-3 mr-3 p-2" xmlns="http://www.w3.org/2000/svg" x="0px"
                                            y="0px" width="30" height="30" viewBox="0 0 30 30" style=" fill:white;">
                                            <path
                                                d="M15,3C8.373,3,3,8.373,3,15c0,6.627,5.373,12,12,12s12-5.373,12-12C27,8.373,21.627,3,15,3z M16,21h-2v-7h2V21z M15,11.5 c-0.828,0-1.5-0.672-1.5-1.5s0.672-1.5,1.5-1.5s1.5,0.672,1.5,1.5S15.828,11.5,15,11.5z">
                                            </path>
                                        </svg>About the Team
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-9">
                <div class="col-md-12">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-9">
                                <h1 class="pt-5 home-title">Home</h1>
                            </div>
                            <div class="col-md-3">
                                <div class="dropdown pt-5">
                                    <button class="btn btn-primary dropdown-toggle w-75" type="button"
                                        data-toggle="dropdown">My Account
                                        <ul class="dropdown-menu w-100">
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="fas fa-sign-out-alt"></i>Logout</a>
                                            </li>
                                        </ul>
                                </div>
                            </div>
                        </div>

                        <div class="row pt-3">
                            <div class="col-lg-12 col-md-12">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="card population-card">
                                            <div class="row">
                                                <div class="col-lg-8 col-md-8">
                                                    <h4 class="title-text ml-4 mt-5">Total Population</h4>
                                                </div>
                                                <div class="col-lg-4 col-md-4">
                                                    <svg class="m-5" xmlns="http://www.w3.org/2000/svg"
                                                        x="0px" y="0px" width="50" height="50" viewBox="0 0 50 50"
                                                        style=" fill: white;">
                                                        <path
                                                            d="M 16 3 A 3 3 0 0 0 13 6 A 3 3 0 0 0 16 9 A 3 3 0 0 0 19 6 A 3 3 0 0 0 16 3 z M 34 3 A 3 3 0 0 0 31 6 A 3 3 0 0 0 34 9 A 3 3 0 0 0 37 6 A 3 3 0 0 0 34 3 z M 12.669922 11 C 10.639922 11 9 12.609844 9 14.589844 L 9 24.5 C 9 25.33 9.67 26 10.5 26 C 11.33 26 12 25.33 12 24.5 L 12 16.5 C 12 16.22 12.22 16 12.5 16 C 12.78 16 13 16.22 13 16.5 L 13 34 C 13 34.552 13.448 35 14 35 L 18 35 C 18.552 35 19 34.552 19 34 L 19 16.5 C 19 16.22 19.22 16 19.5 16 C 19.78 16 20 16.22 20 16.5 L 20 24.5 C 20 25.33 20.67 26 21.5 26 C 22.33 26 23 25.33 23 24.5 L 23 23.5 L 23 14.589844 C 23 12.609844 21.360078 11 19.330078 11 L 12.669922 11 z M 31.339844 11 C 28.929844 11 28.040078 12.999141 27.830078 13.619141 C 27.830078 13.619141 25.070937 21.189766 24.460938 23.009766 C 24.190938 23.789766 24.600859 24.649922 25.380859 24.919922 C 26.140859 25.179922 26.96 24.800313 27.25 24.070312 L 27.259766 24.070312 C 27.259766 24.090312 27.25 24.110625 27.25 24.140625 L 30.029297 16.339844 C 30.129297 16.079844 30.409922 15.949063 30.669922 16.039062 C 30.929922 16.129062 31.070703 16.419687 30.970703 16.679688 L 27.730469 25.660156 C 27.500469 26.310156 27.979922 27 28.669922 27 L 39.330078 27 C 40.020078 27 40.499531 26.310156 40.269531 25.660156 L 37.050781 16.679688 C 36.960781 16.419688 37.089609 16.129062 37.349609 16.039062 C 37.609609 15.949063 37.900234 16.079844 37.990234 16.339844 L 40.699219 23.970703 C 40.959219 24.750703 41.809844 25.179688 42.589844 24.929688 C 43.379844 24.669688 43.810781 23.819297 43.550781 23.029297 C 42.950781 21.219297 40.179688 13.629141 40.179688 13.619141 C 39.969688 12.999141 39.099219 11 36.699219 11 L 31.339844 11 z M 30.25 28 L 31.009766 34.119141 C 31.069766 34.619141 31.5 35 32 35 L 36 35 C 36.5 35 36.930234 34.619141 36.990234 34.119141 L 37.759766 28 L 30.25 28 z M 10 31.099609 C 5.69 34.399609 2.4592969 39.129219 1.0292969 44.699219 C 0.88929687 45.239219 1.22 45.779922 1.75 45.919922 C 2.29 46.059922 2.8307031 45.729219 2.9707031 45.199219 C 4.1507031 40.609219 6.6497656 36.649453 10.009766 33.689453 C 9.9997656 33.629453 10 31.099609 10 31.099609 z M 40 31.109375 C 40 31.109375 40.000234 33.629219 39.990234 33.699219 C 43.350234 36.659219 45.859297 40.64 47.029297 45.25 C 47.149297 45.7 47.55 46 48 46 C 48.08 46 48.16 45.990703 48.25 45.970703 C 48.78 45.840703 49.110703 45.289766 48.970703 44.759766 C 47.550703 39.159766 44.31 34.419375 40 31.109375 z M 8.4648438 36.140625 A 1 1 0 0 0 7.4648438 37.140625 A 1 1 0 0 0 8.4648438 38.140625 A 1 1 0 0 0 9.4648438 37.140625 A 1 1 0 0 0 8.4648438 36.140625 z M 41.535156 36.140625 A 1 1 0 0 0 40.535156 37.140625 A 1 1 0 0 0 41.535156 38.140625 A 1 1 0 0 0 42.535156 37.140625 A 1 1 0 0 0 41.535156 36.140625 z M 11.095703 37.363281 A 1 1 0 0 0 10.095703 38.363281 A 1 1 0 0 0 11.095703 39.363281 A 1 1 0 0 0 12.095703 38.363281 A 1 1 0 0 0 11.095703 37.363281 z M 38.904297 37.363281 A 1 1 0 0 0 37.904297 38.363281 A 1 1 0 0 0 38.904297 39.363281 A 1 1 0 0 0 39.904297 38.363281 A 1 1 0 0 0 38.904297 37.363281 z M 13.919922 38.373047 A 1 1 0 0 0 12.919922 39.373047 A 1 1 0 0 0 13.919922 40.373047 A 1 1 0 0 0 14.919922 39.373047 A 1 1 0 0 0 13.919922 38.373047 z M 36.080078 38.373047 A 1 1 0 0 0 35.080078 39.373047 A 1 1 0 0 0 36.080078 40.373047 A 1 1 0 0 0 37.080078 39.373047 A 1 1 0 0 0 36.080078 38.373047 z M 16.912109 39.152344 A 1 1 0 0 0 15.912109 40.152344 A 1 1 0 0 0 16.912109 41.152344 A 1 1 0 0 0 17.912109 40.152344 A 1 1 0 0 0 16.912109 39.152344 z M 33.087891 39.152344 A 1 1 0 0 0 32.087891 40.152344 A 1 1 0 0 0 33.087891 41.152344 A 1 1 0 0 0 34.087891 40.152344 A 1 1 0 0 0 33.087891 39.152344 z M 20.056641 39.689453 A 1 1 0 0 0 19.056641 40.689453 A 1 1 0 0 0 20.056641 41.689453 A 1 1 0 0 0 21.056641 40.689453 A 1 1 0 0 0 20.056641 39.689453 z M 29.943359 39.689453 A 1 1 0 0 0 28.943359 40.689453 A 1 1 0 0 0 29.943359 41.689453 A 1 1 0 0 0 30.943359 40.689453 A 1 1 0 0 0 29.943359 39.689453 z M 23.324219 39.964844 A 1 1 0 0 0 22.324219 40.964844 A 1 1 0 0 0 23.324219 41.964844 A 1 1 0 0 0 24.324219 40.964844 A 1 1 0 0 0 23.324219 39.964844 z M 26.675781 39.964844 A 1 1 0 0 0 25.675781 40.964844 A 1 1 0 0 0 26.675781 41.964844 A 1 1 0 0 0 27.675781 40.964844 A 1 1 0 0 0 26.675781 39.964844 z M 37.048828 41.041016 C 36.919453 41.037734 36.787656 41.059375 36.660156 41.109375 C 36.150156 41.319375 35.889609 41.900156 36.099609 42.410156 C 36.249609 42.810156 36.629297 43.039062 37.029297 43.039062 C 37.149297 43.039062 37.280391 43.020703 37.400391 42.970703 C 37.910391 42.770703 38.160938 42.189922 37.960938 41.669922 C 37.803438 41.287422 37.436953 41.050859 37.048828 41.041016 z M 12.90625 41.152344 C 12.514375 41.162656 12.15 41.399062 12 41.789062 L 12 41.779297 C 11.8 42.299297 12.050547 42.880078 12.560547 43.080078 C 12.680547 43.130078 12.809687 43.150391 12.929688 43.150391 C 13.329687 43.150391 13.709375 42.909531 13.859375 42.519531 C 14.059375 41.999531 13.810781 41.420703 13.300781 41.220703 C 13.170781 41.170703 13.036875 41.148906 12.90625 41.152344 z M 38.115234 43.898438 C 37.986953 43.879687 37.853203 43.884922 37.720703 43.919922 C 37.180703 44.059922 36.86 44.610625 37 45.140625 C 37.12 45.590625 37.530703 45.890625 37.970703 45.890625 C 38.060703 45.890625 38.140469 45.879375 38.230469 45.859375 C 38.760469 45.709375 39.079453 45.170625 38.939453 44.640625 C 38.834453 44.235625 38.500078 43.954688 38.115234 43.898438 z M 11.851562 44.007812 C 11.465312 44.064062 11.134297 44.345 11.029297 44.75 C 10.889297 45.28 11.22 45.830703 11.75 45.970703 C 11.83 45.990703 11.92 46 12 46 C 12.45 46 12.850703 45.7 12.970703 45.25 C 13.100703 44.71 12.78 44.169297 12.25 44.029297 C 12.115 43.994297 11.980313 43.989063 11.851562 44.007812 z">
                                                        </path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                                <div class="number text-left">
                                                    <h1 class="p-3 number-text">{{ $count1 }}</h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="card voters-card">
                                            <div class="row">
                                                <div class="col-lg-8 col-md-8">
                                                    <h4 class="title-text ml-4 mt-5">Registered Voters</h4>
                                                </div>
                                                <div class="col-lg-4 col-md-4">
                                                    <svg class="m-5" xmlns="http://www.w3.org/2000/svg"
                                                        x="0px" y="0px" width="50" height="50" viewBox="0 0 50 50"
                                                        style=" fill:white;">
                                                        <path
                                                            d="M 13 4 C 12.445313 4 12 4.445313 12 5 L 12 28 L 38 28 L 38 5 C 38 4.445313 37.554688 4 37 4 Z M 28 9 C 28.257813 9 28.511719 9.097656 28.707031 9.292969 L 30.5 11.085938 L 32.292969 9.292969 C 32.488281 9.097656 32.742188 9 33 9 C 33.257813 9 33.511719 9.097656 33.707031 9.292969 C 34.097656 9.683594 34.097656 10.316406 33.707031 10.707031 L 31.914063 12.5 L 33.707031 14.292969 C 34.097656 14.683594 34.097656 15.316406 33.707031 15.707031 C 33.511719 15.902344 33.257813 16 33 16 C 32.742188 16 32.488281 15.902344 32.292969 15.707031 L 30.5 13.914063 L 28.707031 15.707031 C 28.511719 15.902344 28.257813 16 28 16 C 27.742188 16 27.488281 15.902344 27.292969 15.707031 C 26.902344 15.316406 26.902344 14.683594 27.292969 14.292969 L 29.085938 12.5 L 27.292969 10.707031 C 26.902344 10.316406 26.902344 9.683594 27.292969 9.292969 C 27.488281 9.097656 27.742188 9 28 9 Z M 17 12 L 24 12 C 24.554688 12 25 12.445313 25 13 C 25 13.554688 24.554688 14 24 14 L 17 14 C 16.445313 14 16 13.554688 16 13 C 16 12.445313 16.445313 12 17 12 Z M 8 17 C 7.558594 17 7.164063 17.292969 7.039063 17.71875 L 2.039063 34.71875 C 2.015625 34.8125 2.023438 34.90625 2.023438 35 L 47.972656 35 C 47.972656 34.90625 47.984375 34.8125 47.957031 34.71875 L 42.957031 17.71875 C 42.832031 17.292969 42.441406 17 42 17 L 40 17 L 40 26.277344 C 40.59375 26.625 41 27.261719 41 28 C 41 29.101563 40.101563 30 39 30 L 11 30 C 9.898438 30 9 29.101563 9 28 C 9 27.261719 9.40625 26.625 10 26.277344 L 10 17 Z M 28 18 L 33 18 C 33.554688 18 34 18.445313 34 19 L 34 24 C 34 24.554688 33.554688 25 33 25 L 28 25 C 27.445313 25 27 24.554688 27 24 L 27 19 C 27 18.445313 27.445313 18 28 18 Z M 29 20 L 29 23 L 32 23 L 32 20 Z M 17 21 L 24 21 C 24.554688 21 25 21.445313 25 22 C 25 22.554688 24.554688 23 24 23 L 17 23 C 16.445313 23 16 22.554688 16 22 C 16 21.445313 16.445313 21 17 21 Z M 2 37 L 2 46 L 48 46 L 48 37 Z">
                                                        </path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-8">
                                                <div class="number text-left">
                                                    <h1 class="p-3 number-text">{{ $count }}</h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 mt-4">
<<<<<<< HEAD

                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card pt-5">
                                    <div class="container-fluid">
                                        <!-- ADD TABLE HERE -->
                                        <table id="dataTable"
                                            class="table mt-5 table-bordered table-striped table dark">
=======
                    <br><br>
                    <h1 class="pt-5 home-title">Barangay Official List</h1>
                    <br>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="container-fluid">
                                    <!-- ADD TABLE HERE -->
                                        <table id="dataTable" class="table mt-6 table-bordered table-striped table dark">
>>>>>>> d04530bb036c94a5e1361e2cd708648525280d67
                                            <thead class="thead-dark">
                                                <tr>

                                                    <th scope="col">FIRST NAME</th>
                                                    <th scope="col">LAST NAME</th>
                                                    <th scope="col">MIDDLE NAME</th>
                                                    <th scope="col">BARANGAY POSITION</th>
                                                    <th scope="col">RESIDENT STATUS</th>

                                                </tr>
                                            </thead>
                                            <tbody class="tbody-light">
                                                @foreach ($brgy as $brgydata)
                                                    <tr>
                                                        <td>{{ $brgydata->fname }}</td>
                                                        <td>{{ $brgydata->lname }}</td>
                                                        <td>{{ $brgydata->mname }}</td>
                                                        <td>{{ $brgydata->position }}</td>
                                                        <td>{{ $brgydata->bstatus }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
<<<<<<< HEAD
                    </div>

                    <div class="col-lg-12">
                        <div class="card pt-5 mt-2">
                            <div class="container-fluid">
=======
                        
                        <h1 class="pt-5 home-title">Population List</h1>
                        <br>
                        <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="container-fluid">
>>>>>>> d04530bb036c94a5e1361e2cd708648525280d67

                                <!-- ADD TABLE HERE -->

<<<<<<< HEAD
                                <table id="dataTable1" class="table mt-5 table-bordered table-striped table dark">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">FIRST NAME</th>
                                            <th scope="col">LAST NAME</th>
                                            <th scope="col">MIDDLE NAME</th>
                                            <th scope="col">CIVIL STATUS</th>
                                            <th scope="col">RESIDENT STATUS</th>
                                            <th scope="col">REGISTERED VOTER</th>

                                        </tr>
                                    </thead>
                                    <tbody class="tbody-light">
                                        @foreach ($pop as $popdata)
=======
                                    <table id="dataTable1" class="table mt-6 table-bordered table-striped table dark">
                                        <thead class="thead-dark">
>>>>>>> d04530bb036c94a5e1361e2cd708648525280d67
                                            <tr>
                                                <td>{{ $popdata->fname }}</td>
                                                <td>{{ $popdata->lname }}</td>
                                                <td>{{ $popdata->mname }}</td>
                                                <td>{{ $popdata->cstatus }}</td>
                                                <td>{{ $popdata->rstatus }}</td>
                                                <td>{{ $popdata->isvoter }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                     </div>

                     
                        <h1 class="pt-5 home-title">Events List</h1>
                        <br>
                        <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="container-fluid">

                                    <!-- ADD TABLE HERE -->

                                    <table id="dataTable2" class="table mt-6 table-bordered table-striped table dark">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">TITLE</th>
                                                <th scope="col">COLOR</th>
                                                <th scope="col">START DATE</th>
                                                <th scope="col">END DATE</th>
                                        
                                            </tr>
                                        </thead>
                                        <tbody class="tbody-light">
                                            @foreach ($events as $event)
                                                <tr>
                                                    <td>{{ $event->title }}</td>
                                                    <td>{{ $event->color }}</td>
                                                    <td>{{ $event->start_date }}</td>
                                                    <td>{{ $event->end_date }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                     </div>


                    </div>
                </div>


            </div>
        </div>
    </div>
<<<<<<< HEAD
    </div>
=======
>>>>>>> d04530bb036c94a5e1361e2cd708648525280d67

    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();

            $('#dataTable1').DataTable();

<<<<<<< HEAD

=======
            $('#dataTable2').DataTable();
>>>>>>> d04530bb036c94a5e1361e2cd708648525280d67
        });
    </script>
</body>

</html>
