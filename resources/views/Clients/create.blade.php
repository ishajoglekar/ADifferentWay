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
       <form action="{{route('clients.store')}}" method="POST" class="form-vertical">
           @csrf
           <br><br><br><br><br>
           <input type="text" class="form-control" name="name">
           <input type="text" class="form-control" name="email">
           <input type="date" id="from_date" class="form-control" name="date">
           <br><br>
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