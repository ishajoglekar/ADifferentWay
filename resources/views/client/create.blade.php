<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/app.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <title>A Different Way By Anujja</title>
    <link rel="icon" href="{{ asset('img/logo.png') }}">
    <title>A Different Way By Anujja</title>
</head>

<body onload="load()">
    <style>
        #loader1 {
            position: absolute;
            width: 50vw;
            height: 100vh;
            top: 0;
            background-color: #120C30;
            z-index: 999;
            animation-delay: 2s;
        }

        #loader2 {
            position: absolute;
            left: 50%;
            width: 50vw;
            height: 100vh;
            background: #120C30;
            animation-delay: 2s;
            z-index: 999;
        }



        #loader img {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1000;
            animation-delay: 1.5s;
            animation-duration: 2s;
        }

        #loader h1 {
            position: absolute;
            top: 70%;
            left: 50%;
            transform: translate(-50%, -70%);
            font-style: bold;
            z-index: 1000;
            animation-delay: 1.5s;
            animation-duration: 2s;
            color: #fff;

        }
    </style>

    
    <div id="loader">
        <div id="loader1" class="animate__animated animate__slideOutLeft "></div>
        <img src="{{ asset('img/logo.png') }}" id="logo" alt="" class="animate__animated animate__fadeOut">
        <h1 class="heading animate__animated animate__fadeOut">Welcome Anujja Vavhal!</h1>
        <div id="loader2" class="animate__animated animate__slideOutRight "></div>
    </div>
    <div class="d-md-flex justify-content-md-end" style="z-index:-100">
        <a href="" class="btn btn-danger " href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="">
            @csrf
        </form>
    </div>
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
    <div class="container">
        <br>
        <h1 class="text-center">Numerology Report by Anujja Vavhal</h1>
        <form action="{{route('client.store')}}" method="POST" class="form-vertical">
            @csrf
            <br>
            <label for="" class="form-label">Enter client's name</label>
            <input type="text" class="form-control" name="name">

            
            <label for="" class="form-label">Enter client's Date of Birth</label>
            <input type="date" id="from_date" class="form-control" name="date">

            <br>
            <input type="submit" class="btn btn-primary">
        </form>
    </div>
</body>

<script src="/js/app.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>

<script>
    setTimeout(function() {
        $('#logo').hide();
    }, 2000);
    // document.getElementById('logo').style.display = 'none';
</script>

</html>