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
    <link href="{{ asset('css/calendar.css') }}" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
    <title>JuanBarangay | Calendar of Activities</title>
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
                                    <a class="align-items-center nav-link active" href="{{ url('/home') }}">
                                        <svg class="svg-icon ml-3 mr-3 p-2" xmlns="http://www.w3.org/2000/svg" x="0px"
                                            y="0px" width="30" height="30" viewBox="0 0 30 30" style=" fill:white;">
                                            <path
                                                d="M 15 2 A 1 1 0 0 0 14.300781 2.2851562 L 3.3925781 11.207031 A 1 1 0 0 0 3.3554688 11.236328 L 3.3183594 11.267578 L 3.3183594 11.269531 A 1 1 0 0 0 3 12 A 1 1 0 0 0 4 13 L 5 13 L 5 24 C 5 25.105 5.895 26 7 26 L 23 26 C 24.105 26 25 25.105 25 24 L 25 13 L 26 13 A 1 1 0 0 0 27 12 A 1 1 0 0 0 26.681641 11.267578 L 26.666016 11.255859 A 1 1 0 0 0 26.597656 11.199219 L 25 9.8925781 L 25 6 C 25 5.448 24.552 5 24 5 L 23 5 C 22.448 5 22 5.448 22 6 L 22 7.4394531 L 15.677734 2.2675781 A 1 1 0 0 0 15 2 z M 18 15 L 22 15 L 22 23 L 18 23 L 18 15 z">
                                            </path>
                                        </svg>Home</a>
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
                                        </svg>Barangay Officials</a>
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
                                        </svg>Barangay Population</a>
                                </div>
                            </li>

                            <li class="nav-item" style="-moz-border-radius-topleft: 10px;
                            -moz-border-radius-topright: 10px;
                            -moz-border-radius-bottomright: 10px;
                            -moz-border-radius-bottomleft: 10px;
                            -webkit-border-radius: 10px 10px 10px 10px;
                            border-radius: 10px 10px 10px 10px;
                            background-color: white;">
                                <div class="col-md-12">
                                    <a class="nav-link" href="{{ url('/eventcalendar') }}" style="
                                    color: #3D5AF1;">
                                        <svg class="svg-icon ml-3 mr-3 p-2" xmlns="http://www.w3.org/2000/svg" x="0px"
                                            y="0px" width="30" height="30" viewBox="0 0 30 30" style=" fill: #3D5AF1;">
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
                                        </svg>About the Team</a>
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
                                <h1 class="pt-5 calendar-title">Calendar of Activities</h1>
                            </div>
                            <div class="col-md-3">
                                <div class="dropdown p-5 mr-auto ml-auto">
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
                                <!-- Calendar -->
                                <div class="container-fluid">
                                    @if (\Session::has('success'))
                                        <div class="alert alert-success">
                                            <p>{{ \Session::get('success') }}</p>
                                        </div>
                                    @endif
                                    <div class="col-md-12">
                                        <div class="card mt-5">
                                            <div class="card-body">
                                                {!! $calendar->calendar() !!}
                                                {!! $calendar->script() !!}
                                            </div>
                                        </div>
                                    </div><!-- Calendar -->

                                    <!-- <a href="/addeventurl" class = "btn btn-success"> Add Event</a> -->
                                    <button type="button" class="btn btn-success m-3" data-toggle="modal"
                                        data-target="#addEvent">Add
                                        Event</button>

                                    <table id="dataTable" class="table mt-5 table-bordered table-striped table dark">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">NAME OF EVENT</th>
                                                <th scope="col">COLOR</th>
                                                <th scope="col">START DATE</th>
                                                <th scope="col">END DATE</th>
                                                <th scope="col">UPDATE</th>
                                            </tr>
                                        </thead>
                                        <tbody class="tbody-light">
                                            @foreach ($events as $event)
                                                <tr>
                                                    <th>{{ $event->id }}</th>
                                                    <td>{{ $event->title }}</td>
                                                    <td>{{ $event->color }}</td>
                                                    <td>{{ $event->start_date }}</td>
                                                    <td>{{ $event->end_date }}</td>
                                                    <td>
                                                        <div class="row">
                                                            <!-- <a href="{{ action('CalendarEventController@edit', $event['id']) }}" class="btn btn-success">EDIT</a>  -->

                                                            <a href="#" class="btn btn-success edit">Edit</a>

                                                            <form method="POST"
                                                                action="{{ action('CalendarEventController@destroy', $event['id']) }}">
                                                                {{ csrf_field() }}
                                                                <input type="hidden" name="_method" value="DELETE" />
                                                                <button type="submit"
                                                                    class="btn btn-danger">Delete</button>
                                                            </form>
                                                        </div>
                                                    </td>
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
</body>

</html>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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


    <!--Data Table-->
    <link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css" rel="stylesheet">


    <!--Full Calendar -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css" />




</head>

<body>






    <!-- AddModal -->
    <div class="modal fade" id="addEvent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form method="POST" action="{{ action('CalendarEventController@store') }}">
                    <div class="modal-body">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for=""> Enter Name of Event</label>
                            <input type="text" class="form-control" name="title"
                                placeholder="Enter the Name" /><br><br>
                        </div>

                        <div class="form-group">
                            <label for=""> Enter Color</label>
                            <input type="color" class="form-control" name="color"
                                placeholder="Enter the Color" /><br><br>
                        </div>

                        <div class="form-group">
                            <label for=""> Enter Start Date</label>
                            <input type="date" class="form-control" name="start_date" class="date"
                                placeholder="Enter the Date" /><br><br>
                        </div>

                        <div class="form-group">
                            <label for=""> Enter End Date</label>
                            <input type="date" class="form-control" name="end_date" class="date"
                                placeholder="Enter the Date" /><br><br>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary">Add Event</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Edit Modal -->
    <div class="modal fade" id="editEvent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form id="editForm" method="POST" action="/eventcalendar">
                    <div class="modal-body">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        <div class="form-group">
                            <label for=""> Enter Name of Event</label>
                            <input type="text" class="form-control" id="title" name="title"
                                placeholder="Enter the Name" /><br><br>
                        </div>

                        <div class="form-group">
                            <label for=""> Enter Color</label>
                            <input type="color" class="form-control" id="color" name="color"
                                placeholder="Enter the Color" /><br><br>
                        </div>

                        <div class="form-group">
                            <label for=""> Enter Start Date</label>
                            <input type="date" class="form-control" id="start_date" name="start_date"
                                class="date" placeholder="Enter the Date" /><br><br>
                        </div>

                        <div class="form-group">
                            <label for=""> Enter End Date</label>
                            <input type="date" class="form-control" id="end_date" name="end_date"
                                class="date" placeholder="Enter the Date" /><br><br>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary">Update Event</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>




    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            var table = $('#dataTable').DataTable();

            table.on('click', '.edit', function() {
                $tr = $(this).closest('tr');
                if ($($tr).hasClass('child')) {
                    $tr = $tr.prev(' .parent');
                }

                var data = table.row($tr).data();
                console.log(data);

                $('#title').val(data[1]);
                $('#color').val(data[2]);
                $('#start_date').val(data[3]);
                $('#end_date').val(data[4]);

                jQuery.noConflict();
                $('#editForm').attr('action', '/eventcalendar/' + data[0]);
                $('#editEvent').modal('show')
            });

        });
    </script>
</body>

</html>
