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
        
        @foreach($clients as $client)
        <a href="{{route('clients.edit',$client->id)}}">Edit</a>
        @endforeach
    </div>
</body>

<script src="/js/app.js"></script>

</html>