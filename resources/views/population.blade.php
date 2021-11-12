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
                                    <a class="align-items-center nav-link active" href="{{ url('/home') }}"><img
                                            class="icon ml-3 mr-3 p-2" src="assets/icons8-home.png" alt="">Home</a>
                                </div>
                            </li>

                            <li class="nav-item">
                                <div class="col-md-12">
                                    <a class="nav-link" href="{{ url('/brgyofficers') }}"><img
                                            class="icon ml-3 mr-3 p-2" src="assets/icons8-manager.png" alt="">Barangay
                                        Officials</a>
                                </div>

                            </li>

                            <li class="nav-item">
                                <div class="col-md-12">
                                    <a class="nav-link" href="{{ url('/population') }}"> <img
                                            class="icon ml-3 mr-3 p-2" src="assets/icons8-people.png" alt="">Barangay
                                        Population</a>
                                </div>
                            </li>

                            <li class="nav-item">
                                <div class="col-md-12">
                                    <a class="nav-link" href="{{ url('/calendar') }}"><img
                                            class="icon ml-3 mr-3 p-2" src="assets/icons8-calendar.png" alt="">Calendar
                                        of Activities</a>
                                </div>
                            </li>

                            <h6 class="nav-title pt-3 pl-3 pt-5">INFORMATION HUB</h6>

                            <li class="nav-item">
                                <div class="col-md-12">
                                    <a class="nav-link h-20" href="{{ url('/about') }}"><img
                                            class="icon ml-3 mr-3 p-2" src="assets/icons8-about.png" alt="">About the
                                        Team</a>
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
                        
                        @if(\Session::has('success'))
                        <div class ="alert alert-success">
                             <p>{{ \Session::get('success')}}</p>
                        </div>
                         @endif

                        <a href="" class="btn btn-primary m-2" data-toggle="modal" data-target="#BarangayRecord"> Add Barangay Resident</a>

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
                                    <tfoot class ="thead-dark">
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
                                    </tfoot>
                                </table>
                            </div>
                        </div>


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
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
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
