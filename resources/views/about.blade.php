<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <link href="{{ asset('css/about.css') }}" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
    <title>JuanBarangay | About the Project</title>
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

                            <li class="nav-item">
                                <div class="col-md-12">
                                    <a class="align-items-center nav-link active" href="/home"><img
                                            class="icon ml-3 mr-3 p-2" src="assets/icons8-home.png" alt="">Home</a>
                                </div>
                            </li>

                            <li class="nav-item">
                                <div class="col-md-12">
                                    <a class="nav-link" href="/brgyofficers"><img class="icon ml-3 mr-3 p-2"
                                            src="assets/icons8-manager.png" alt="">Barangay Officials</a>
                                </div>

                            </li>

                            <li class="nav-item">
                                <div class="col-md-12">
                                    <a class="nav-link" href="/population"> <img class="icon ml-3 mr-3 p-2"
                                            src="assets/icons8-people.png" alt="">Barangay Population</a>
                                </div>
                            </li>

                            <li class="nav-item">
                                <div class="col-md-12">
                                    <a class="nav-link" href="/calendar"><img class="icon ml-3 mr-3 p-2"
                                            src="assets/icons8-calendar.png" alt="">Calendar of Activities</a>
                                </div>
                            </li>

                            <h6 class="nav-title pt-3 pl-3 pt-5">CERTIFICATES</h6>

                            <li class="nav-item">
                                <div class="col-md-12">
                                    <a class="nav-link" href="/forms"><img class="icon ml-3 mr-3 p-2"
                                            src="assets/icons8-document.png" alt="">Barangay Forms</a>
                                </div>
                            </li>

                            <h6 class="nav-title pt-3 pl-3 pt-5">INFORMATION HUB</h6>

                            <li class="nav-item">
                                <div class="col-md-12">
                                    <a class="nav-link active h-20 " href="/about"><img class="icon ml-3 mr-3 p-2"
                                            src="assets/icons8-about.png" alt="">About the Team</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-9">
                <div class="col-md-12">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9">
                            </div>
                            <div class="col-md-3">
                                <div class="dropdown pt-5">
                                    <button class="btn btn-secondary dropdown-toggle" type="button"
                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Dropdown button
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="p-3">
                                    <div class="title-project p-5 text-center">
                                        <h1>About the Project</h1>
                                    </div>
                                    <div class="card" style="height: 15rem">

                                    </div>
                                </div>

                                <div class="title-team p-5 text-center">
                                    <h1>Meet the Team</h1>
                                </div>
                                <div class="row p-3">
                                    <div class="col-md-6">
                                        <div class="card" style="height: 12rem">
                                            <div class="row">
                                                <div class="col-md-4">

                                                </div>
                                                <div class="col-md-8">
                                                    <div class="member-title">
                                                        <h3 class="pt-5 pb-2">Ken Zyrus Itulid</h3>

                                                    </div>
                                                    <div class="member-subtitle">
                                                        <h6>Team Lead/Back End Developer</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card" style="height: 12rem">
                                            <div class="row">
                                                <div class="col-md-4">

                                                </div>
                                                <div class="col-md-8">
                                                    <div class="member-title">
                                                        <h3 class="pt-5 pb-2">Vincent Kyle Caballa</h3>
                                                    </div>
                                                    <div class="member-subtitle">
                                                        <h6>Front End Developer and Technical Writer</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-3">
                                    <div class="col-md-6">
                                        <div class="card" style="height: 12rem">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <img src="" alt="">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="member-title">
                                                        <h3 class="pt-5 pb-2">Daniel Lee James Borgoña</h3>
                                                    </div>
                                                    <div class="member-subtitle">
                                                        <h6>Database Developer</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card" style="height: 12rem">
                                            <div class="row">
                                                <div class="col-md-4">

                                                </div>
                                                <div class="col-md-8">
                                                    <div class="member-title">
                                                        <h3 class="pt-5 pb-2">Charles Enzoe Correa</h3>
                                                    </div>
                                                    <div class="member-subtitle">
                                                        <h6>Back End Developer</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
