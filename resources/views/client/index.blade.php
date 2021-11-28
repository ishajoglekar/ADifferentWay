<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/app.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" type="text/css">
    <title>A Different Way By Anujja</title>
</head>

<body>
    <div class="container-fluid">

   
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-9">
                        <h1 class=""><strong>Anujja Vavhal</strong></h1>
                        <br>
                        <h3> A Different Way</h3>
                        <h5>By Anujja</h5>
                        <h5 style="font-style:italic; color:orange">Have faith and see the magic happen!</h5>
                    </div>
                    <div class="col-md-3">
                        <p id="date" style="text-align:right"></p>
                        <span> <img src="{{ asset('img/logo.png') }}" alt="" style="width:50%"></span>
                    </div>
                </div>

                <br>
                <p style="text-align:center">ARCHITECT & INTERIOR DESIGNER | VASTU EXPERT | NUMEROLOGIST | REIKI & CRYSTAL HEALER | ANGEL CARD READER | SWITCHWORDS EXPERT</p>
            </div>
        </div>
        <div class="d-md-flex justify-content-md-end">
            <a href="/home" class="btn btn-success mt-3 mb-2">Create a client</a>
        </div>
        <table class="table table-striped mt-0" id="manage-client-table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">DOB</th>
                    <th scope="col">Birth Number</th>
                    <th scope="col">Destiny Number</th>
                    <th scope="col">Personal Year</th>
                    <th scope="col">Birth Planet</th>
                    <th scope="col">Personal Element</th>
                    <th scope="col">Zodiac Sign</th>
                    <th scope="col">Actions</th>


                </tr>
            </thead>
            <tbody>

                @foreach($clients as $client)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$client->name}}</td>
                    <td>{{Carbon\Carbon::parse($client->dob)->format('d-m-Y')}}</td>
                    <td>{{$client->birthnumber->id}}</td>
                    <td>{{$client->destinynumber}} </td>
                    <td>{{$client->personalyear->id}}</td>
                    <td>{{$client->birthnumber->planet}}</td>
                    <td>{{$client->zodiac->element->element}}</td>
                    <td>{{$client->zodiac->name}}</td>
                    
                    
                    <td>
                        <a href="{{route('client.edit',$client)}}" class="btn btn-primary"><i class="fa fa-eye"></i></a>
                        <a href="#" class="btn btn-danger delete-trigger modal-trigger" data-toggle="modal" onclick="displayDeleteModalForm({{$client}})" data-target="#delete-modal"><i class="fa fa-trash"></i></a>
                    </td>

                </tr>

            
                @endforeach

            </tbody>
        </table>
    </div>


    <div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" style="display:inline-block" id="exampleModalLabel">Delete Client</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="color:white">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <label for="">Are you sure you want to delete this client?</label>
                </div>
                <div class="modal-footer">
                    <form action="" method="POST" id="delete-client">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-primary" id="delete" value="Delete">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </form>
                </div>
            </div>
        </div>
    </div>




</body>

<script src="/js/app.js"></script>

<script>
    
        function displayDeleteModalForm($client) {
            var url = 'client/'+$client.id+'/destroy/'
            $("#delete-client").attr('action',url);
        }
         $(document).ready(function() {
        $('#manage-client-table').DataTable({
    
            "columnDefs": [
                        {
                            'orderable': false,
                            'targets': [-1]
                        }
                    ]
                });
        } );
     
</script>

</html>