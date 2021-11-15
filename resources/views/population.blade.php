<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home | JuanBarangay</title>
    <link href="{{ asset('css/population.css') }}" rel="stylesheet">
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

    <!-- Data Table -->
    <link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css" rel="stylesheet">

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
                                <div class="col-md-12 active">
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
                                    <a class="nav-link" href="{{ url('/calendar') }}">
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
                                <h1 class="pt-5 population-title">Barangay Population</h1>
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

                        @if (\Session::has('success'))
                            <div class="alert alert-success">
                                <p>{{ \Session::get('success') }}</p>
                            </div>
                        @endif

                        <div class="container">
                            <div class="row">
                                <table id="dataTable" class="table mt-5 table-bordered table-striped table dark">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">FIRST NAME</th>
                                            <th scope="col">LAST NAME</th>
                                            <th scope="col">MIDDLE NAME</th>
                                            <th scope="col">CIVIL STATUS</th>
                                            <th scope="col">RESIDENT STATUS</th>
                                            <th scope="col">REGISTERED VOTER</th>
                                            <th scope="col">ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody class="tbody-light">
                                        @foreach ($pop as $popdata)
                                            <tr>
                                                <th>{{ $popdata->id }}</th>
                                                <td>{{ $popdata->fname }}</td>
                                                <td>{{ $popdata->lname }}</td>
                                                <td>{{ $popdata->mname }}</td>
                                                <td>{{ $popdata->cstatus }}</td>
                                                <td>{{ $popdata->rstatus }}</td>
                                                <td>{{ $popdata->isvoter }}</td>
                                                <td>
                                                    <a href="#" class="btn btn-success edit">EDIT</a>
                                                    <a href="#" class="btn btn-danger delete">DELETE</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <a href="" class="btn btn-primary mt-3" data-toggle="modal" data-target="#BarangayRecord"> Add
                            Barangay Resident</a>
                        <!-- Add Modal -->
                        <div class="modal fade" id="BarangayRecord" tabindex="1" aria-labelledby="BarangayModalLbl"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header text-center">
                                        <h5 class="modal-title" id="BarangayModalLbl">Barangay Record Details
                                        </h5>
                                    </div>

                                    <form class="m-2" method="POST"
                                        action="{{ action('PopulationController@store') }}">
                                        @csrf
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="row">
                                                        <div class="form-group col-md-12">
                                                            <label for="Title">Last Name</label>
                                                            <input type="text" class="form-control" name="lname">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-md-12">
                                                            <label>First Name</label>
                                                            <input class="form-control" type="text" id="startdate"
                                                                name="fname">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-md-12">
                                                            <label>Middle Name</label>
                                                            <input class="form-control" type="text" id="enddate"
                                                                name="mname">
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-lg-6">

                                                    <div class="row">
                                                        <div class="form-group col-md-12">
                                                            <label>Civil Status</label>
                                                            <select class="form-control" id="civilstatus"
                                                                name="cstatus">
                                                                <option>SINGLE</option>
                                                                <option>MARRIED</option>
                                                                <option>DIVORCED</option>
                                                                <option>SEPARATED</option>
                                                                <option>WIDOWED</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-md-12">
                                                            <label for="Title">Resident Status</label>
                                                            <select class="form-control" id="residentstatus"
                                                                name="rstatus">
                                                                <option>BY BIRTH</option>
                                                                <option>NATURALIZATION</option>
                                                                <option>PERMANENT RESIDENT</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-md-12">
                                                            <label for="Title">Registered Voter</label>
                                                            <select class="form-control" id="regvoter" name="isvoter">
                                                                <option>YES</option>
                                                                <option>NO</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="row">
                                                        <div class="form-group col-md-12">
                                                            <button type="submit"
                                                                class="btn btn-success">Submit</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Edit Modal -->
                <div class="modal fade" id="editModal" tabindex="1" aria-labelledby="BarangayModalLbl"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header text-center">
                                <h5 class="modal-title" id="BarangayModalLbl">Edit Barangay Record Details
                                </h5>
                            </div>

                            <form class="m-2" method="POST" action="/population" id="editForm">
                                @csrf
                                {{ method_field('PUT') }}

                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="form-group col-md-12">
                                                    <label for="Title">Last Name</label>
                                                    <input type="text" class="form-control" name="lname" id="lname">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-12">
                                                    <label>First Name</label>
                                                    <input class="form-control" type="text" id="fname" name="fname">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-12">
                                                    <label>Middle Name</label>
                                                    <input class="form-control" type="text" id="mname" name="mname">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-lg-6">

                                            <div class="row">
                                                <div class="form-group col-md-12">
                                                    <label>Civil Status</label>
                                                    <select class="form-control" id="cstatus" name="cstatus">
                                                        <option>SINGLE</option>
                                                        <option>MARRIED</option>
                                                        <option>DIVORCED</option>
                                                        <option>SEPARATED</option>
                                                        <option>WIDOWED</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-12">
                                                    <label for="Title">Resident Status</label>
                                                    <select class="form-control" id="rstatus" name="rstatus">
                                                        <option>BY BIRTH</option>
                                                        <option>NATURALIZATION</option>
                                                        <option>PERMANENT RESIDENT</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-12">
                                                    <label for="Title">Registered Voter</label>
                                                    <select class="form-control" id="isvoter" name="isvoter">
                                                        <option>YES</option>
                                                        <option>NO</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <div class="form-group col-md-12">
                                                    <button type="submit" class="btn btn-success">Update</button>
                                                    <button type="button" class="btn btn-danger"
                                                        data-dismiss="modal">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Delete Modal -->
        <div class="modal fade" id="deleteModal" tabindex="1" aria-labelledby="BarangayModalLbl"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h5 class="modal-title" id="BarangayModalLbl">Delete Barangay Record Details
                        </h5>
                    </div>

                    <form class="m-2" method="POST" action="/population" id="deleteForm">
                        @csrf
                        {{ method_field('DELETE') }}

                        <input type="hidden" name="_method" value="DELETE">
                        <p>Are you sure you want to delete data?</p>

                        <div class="col-md-12">
                            <div class="row">
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <button type="submit" class="btn btn-success">Delete</button>
                                        <button type="button" class="btn btn-danger"
                                            data-dismiss="modal">Cancel</button>
                                    </div>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
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

                $('#fname').val(data[1]);
                $('#lname').val(data[2]);
                $('#mname').val(data[3]);
                $('#cstatus').val(data[4]);
                $('#rstatus').val(data[5]);
                $('#isvoter').val(data[6]);

                $('#editForm').attr('action', '/population/' + data[0]);
                $('#editModal').modal('show')
            });
            //////

            table.on('click', '.delete', function() {
                $tr = $(this).closest('tr');
                if ($($tr).hasClass('child')) {
                    $tr = $tr.prev(' .parent');
                }

                var data = table.row($tr).data();
                console.log(data);

                //$('#id').val(data[0]);

                $('#deleteForm').attr('action', '/population/' + data[0]);
                $('#deleteModal').modal('show')
            });
        });
    </script>

</body>

</html>
