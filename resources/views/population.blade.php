<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
    <title>Home | JuanBarangay</title>
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
                                    <a class="nav-link h-20" href="/about"><img class="icon ml-3 mr-3 p-2"
                                            src="assets/icons8-about.png" alt="">About the Team</a>
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

                        <div class="row">
                            <table class="table mt-5">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">LAST NAME</th>
                                        <th scope="col">FIRST NAME</th>
                                        <th scope="col">MIDDLE NAME</th>
                                        <th scope="col">GENDER</th>
                                        <th scope="col">CIVIL STATUS</th>
                                        <th scope="col">RESIDENT STATUS</th>
                                        <th scope="col">REGISTERED VOTER</th>
                                        <th scope="col">ACTION</th>
                                    </tr>
                                </thead>
                                <tbody class="tbody-light">
                                    <tr>
                                        <th scope="row"></th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <a href="" class="btn btn-primary m-2" data-toggle="modal" data-target="#BarangayRecord">
                            Add Barangay Resident</a>

                        <div class="modal fade" id="BarangayRecord" tabindex="1" aria-labelledby="BarangayModalLbl"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header text-center">
                                        <h5 class="modal-title" id="BarangayModalLbl">Barangay Record Details
                                        </h5>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <form class="m-2" method="post"
                                                    action="{{ url('event/add') }}">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="form-group col-md-12">
                                                            <label for="Title">Last Name</label>
                                                            <input type="text" class="form-control" name="title">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-md-12">
                                                            <label>First Name</label>
                                                            <input class="form-control" type="text" id="startdate"
                                                                name="startdate">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-md-12">
                                                            <label>Middle Name</label>
                                                            <input class="form-control" type="text" id="enddate"
                                                                name="enddate">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-lg-6">
                                                <form class="m-2" action="" method="post">
                                                    <div class="row">
                                                        <div class="form-group col-md-12">
                                                            <label>Civil Status</label>
                                                            <select class="form-control" id="civilstatus"
                                                                name="civilstatus">
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
                                                                name="residentstatus">
                                                                <option>BY BIRTH</option>
                                                                <option>NATURALIZATION</option>
                                                                <option>PERMANENT RESIDENT</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-md-12">
                                                            <label for="Title">Registered Voter</label>
                                                            <select class="form-control" id="regvoter"
                                                                name="regvoter">
                                                                <option>YES</option>
                                                                <option>NO</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="row">
                                                    <div class="form-group col-md-12">
                                                        <button type="submit" class="btn btn-success">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
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
