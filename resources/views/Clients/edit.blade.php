<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/app.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title>A Different Way By Anujja</title>
</head>
<body>
    <div class="container">
       <form action="{{route('clients.update',$client->id)}}" method="POST" class="form">
           @csrf
            <label for="" class="form-label">Name:</label>
            <input type="text" class="form-control m-2" value="{{$client->name}}" name="name">
            
            <label for="" class="form-label">Email:</label>
            <input type="text" class="form-control m-2" value="{{$client->email}}" name="email">
            
            <label for="" class="form-label">Date of Birth:</label>
            <input type="date" class="form-control m-2" value="{{date('Y-m-d', strtotime($client->dob))}}" name="dob">

            <label for="" class="form-label">Birth Number:</label>
            <input type="text" class="form-control m-2" value="{{$client->birthnumber->id}} - {{$client->birthnumber->planet}}">

            <label for="" class="form-label">Key Qualities:</label>
            <textarea name="" id="" cols="30" rows="5" class="form-control m-2">{{$client->quality->quality}}</textarea>

            <label for="" class="form-label">Destiny Number:</label>
            <input type="text" class="form-control m-2" value="{{$client->destinynumber}} - {{$destinyplanet}}">

            <label for="">Combination: </label>
            <input type="text" class="form-control m-2" value="Combination : {{$client->birthnumber->id}}/{{$client->destinynumber}}">

            <label for="">Zodiac:</label>
            <input type="text" class="form-control m-2" value="{{$client->zodiac->name}}" placeholder="">

            <label for="">Lucky Colors:</label>
            <input type="text" class="form-control m-2" value="{{$client->luckycolors->colors}}">

            <label for="">Friendly Numbers:</label>
            <input type="text" class="form-control m-2" value="{{$client->friendlynumbers->numbers}}">

            <label for="">Unfriendly Numbers:</label>
            <input type="text" class="form-control m-2" value="{{$client->unfriendlynumbers->numbers}}">

            <label for="">Neutral Numbers:</label>
            <input type="text" class="form-control m-2" value="{{$client->neutralnumbers->numbers}}">

            <label for="">Lucky Dates:</label>
            <input type="text" class="form-control m-2" value="{{$client->luckydates->dates}}">

            <label for="">Suitable Profession:</label>
            <input type="text" class="form-control m-2" value="{{$client->suitable_profession}}">

            <label for="">Personal Year:</label>
            <textarea name="" id="" cols="30" rows="5" class="form-control">{{$client->personalyear->id}} -  {{$client->personalyear->explanation}}</textarea>
            <label for="">Personal Element:</label>
            <textarea name="" id="" cols="30" rows="5" class="form-control">{{$client->zodiac->element->element}} - {{$client->zodiac->element->explanation}}</textarea>

            <label for="">Auspicious Days:</label>
            <input type="text" class="form-control m-2" value="{{$client->auspiciousdays->days}}">

            <label for="">Auspicious Months:</label>
            <input type="text" class="form-control m-2" value="{{$client->auspiciousmonths->months}}">

            <label for="">Mobile/Car/Flat Number:</label>
            <input type="text" class="form-control m-2" value=" ">

            <label for="">Deities:</label>
            <input type="text" class="form-control m-2" value="{{$client->deities->deity}}">

           <input type="submit" class="btn btn-primary form-control">
       </form>
    </div>
</body>
<script>
    $('#from_date').datepicker({
    dateFormat: "mm/yy",
    changeMonth: true,
    changeYear: true,
    monthNames: ["1","2","3","4","5","6","7","8","9","10","11","12"],
    monthNamesShort: ["1","2","3","4","5","6","7","8","9","10","11","12"]
});
</script>
<script src="/js/app.js"></script>
</html>