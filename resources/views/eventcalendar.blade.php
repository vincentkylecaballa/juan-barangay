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

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
    
    
  

</head>
<body>
        <!-- Calendar --> 
        <div class ="container">
            <div class="jumbotron">
                <h2>Full Calendar</h2>

                <div class ="row">  
                        <!-- <a href="/addeventurl" class = "btn btn-success"> Add Event</a> -->
                        <button type ="button" class = "btn btn-success" data-toggle ="modal" data-target="#addEvent">Add Event</button>
                        
                </div><br>
                <div class = "row">
                        @if(\Session::has('success'))
                        <div class ="alert alert-success">
                             <p>{{ \Session::get('success')}}</p>
                        </div>
                         @endif
                    <div class = "col-md-8 col-md-offset-2">
                        <div class ="card">  
                            <div class ="card-header">
                                        Event Calendar - Full Calendar
                            </div>

                            <div class ="card-body">
                                {!! $calendar -> calendar() !!}
                                {!! $calendar -> script() !!}
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Calendar --> 


                        <div class="container">
                            <div class="row">
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
                                                    <!-- <a href="{{action('CalendarEventController@edit',$event['id'])}}" class="btn btn-success">EDIT</a>  -->
                                                    
                                                    <a href="#" class="btn btn-success edit" >Edit</a>

                                                    <form method="POST" action="{{action('CalendarEventController@destroy',$event['id'])}}">
                                                        {{csrf_field() }}
                                                        <input type="hidden" name="_method" value="DELETE"/>
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                  

                    <!-- AddModal -->
                    <div class="modal fade" id="addEvent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>

                        <form method = "POST" action="{{action('CalendarEventController@store') }}">
                            <div class="modal-body">
                                        {{csrf_field() }}

                                        <div class="form-group">
                                        <label for =""> Enter Name of Event</label>
                                        <input type="text" class ="form-control" name="title" placeholder="Enter the Name"/><br><br>
                                        </div>

                                        <div class="form-group">
                                        <label for =""> Enter Color</label>
                                        <input type="color" class ="form-control" name="color" placeholder="Enter the Color"/><br><br>
                                        </div>

                                        <div class="form-group">
                                        <label for =""> Enter Start Date</label>
                                        <input type="date" class ="form-control" name="start_date" class="date" placeholder="Enter the Date"/><br><br>
                                        </div>

                                        <div class="form-group">
                                        <label for =""> Enter End Date</label>
                                        <input type="date" class ="form-control" name="end_date" class="date" placeholder="Enter the Date"/><br><br>
                                        </div>      
                            </div>
                            <div class="modal-footer">     
                                        <div class="form-group">
                                        <button type="submit" name="submit" class ="btn btn-primary">Add Event</button>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        </div>   
                            </div>
                        </form>
                    </div>
                    </div>
                    </div>       


                    <!-- Edit Modal -->
                    <div class="modal fade" id="editEvent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>

                        <form id= "editForm" method = "POST" action="/eventcalendar">
                            <div class="modal-body">
                                        {{csrf_field() }}
                                        {{method_field('PUT') }}

                                        <div class="form-group">
                                        <label for =""> Enter Name of Event</label>
                                        <input type="text" class ="form-control" id="title" name="title" placeholder="Enter the Name"/><br><br>
                                        </div>

                                        <div class="form-group">
                                        <label for =""> Enter Color</label>
                                        <input type="color" class ="form-control" id="color" name="color" placeholder="Enter the Color"/><br><br>
                                        </div>

                                        <div class="form-group">
                                        <label for =""> Enter Start Date</label>
                                        <input type="date" class ="form-control" id="start_date" name="start_date" class="date" placeholder="Enter the Date"/><br><br>
                                        </div>

                                        <div class="form-group">
                                        <label for =""> Enter End Date</label>
                                        <input type="date" class ="form-control" id="end_date" name="end_date" class="date" placeholder="Enter the Date"/><br><br>
                                        </div>      
                            </div>
                            <div class="modal-footer">     
                                        <div class="form-group">
                                        <button type="submit" name="submit" class ="btn btn-primary">Update Event</button>
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