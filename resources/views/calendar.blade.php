<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/calendar.css') }}" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet"> 
    <title>Calendar of Activities | JuanBarangay</title>
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
                                    <a class="nav-link" href="/calendars"><img class="icon ml-3 mr-3 p-2"
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
                                    <a class="nav-link h-20" href="/about"><img class="icon ml-3 mr-3 p-2"
                                            src="assets/icons8-about.png" alt="">About the Team</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 scrollit">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-9">
                            <h1 class="pt-5 calendar-title">Calendar of Activities</h1>
                        </div>
                        <div class="col-md-3">
                            <div class="dropdown pt-5">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                        <div class="container-fluid">

                            <a href="" class="btn add-event" data-toggle="modal" data-target="#CalendarModal">Create
                                Event</a>

                            <div class="modal fade" id="CalendarModal" tabindex="-1"
                                aria-labelledby="CalendarModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header text-center">
                                            <h5 class="modal-title" id="CalendarModalLabel">Add Barangay Event</h5>
                                        </div>

                                        <div class="col-md-12">
                                            <form method="post" action="{{ url('event/add') }}">
                                                @csrf
                                                <div class="row">
                                                    <div class="form-group col-md-12">
                                                        <label for="Title">Title</label>
                                                        <input type="text" class="form-control" name="title">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-12">
                                                        <label> Start Date </label>
                                                        <input class="date form-control" type="text" id="startdate"
                                                            name="startdate">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-12">
                                                        <label> End Date </label>
                                                        <input class="date form-control" type="text" id="enddate"
                                                            name="enddate">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-12">
                                                        <button type="submit" class="btn btn-success">Add Event</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <script type="text/javascript">
                                var date = jQuery.noConflict();

                                date('#startdate').datepicker({
                                    autoclose: true,
                                    format: 'yyyy-mm-dd'
                                });
                                date('#enddate').datepicker({
                                    autoclose: true,
                                    format: 'yyyy-mm-dd'
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
</body>


</html>
