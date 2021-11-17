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

<body onload="load()">
    <style>
        #loader1 {
            position: absolute;
            width: 50vw;
            height: 100vh;
            top: 0;
            background-color: #fc3;
            z-index: 999;
            /* -webkit-animation: slide1 0.5s forwards; */
            /* -webkit-animation-delay: 2s; */
            animation: slide2 0.5s forwards;
            animation-delay: 2s;
        }

        #loader2 {
            position: absolute;
            left: 50%;
            width: 50vw;
            height: 100vh;
            background: blue;
            animation: slide 5s forwards;
            animation-delay: 2s;
        }



        #loader img {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1000;
        }


        @keyframes slide {
            10%{
                width: 30vw;
            }

            40%{
                width: 20vw;
            }

            100% {
                width: 0vw;
            }
        }

        @keyframes slide2 {
            10%{
                right:5px;
            }

            40%{
                right:10px;
            }

            100% {
                right: 0;
            }
        }
    </style>
    <div id="loader">
        <div id="loader1"></div>
        <img src="{{ asset('img/logo.png') }}" id="logo" alt="">
        <div id="loader2"></div>
    </div>
    <div class="container">
        <form action="{{route('client.store')}}" method="POST" class="form-vertical">
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

<script src="/js/app.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
<script>
    $('#from_date').datepicker({
        dateFormat: "mm/yy",
        changeMonth: true,
        changeYear: true,
        monthNames: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12"],
        monthNamesShort: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12"]
    });



    function load() {

    }
</script>

</html>