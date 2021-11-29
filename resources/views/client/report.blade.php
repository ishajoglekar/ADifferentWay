<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="/css/app.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('img/logo.png') }}">
    <title>A Different Way By Anujja</title>
</head>

<body>

    <div class="container">
        <div class="d-md-flex justify-content-md-end m-3 mt-3 d-print-none" style="z-index:100">

            <a href="/getAllClients" class="btn btn-success mr-3">View all Clients</a>

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
                        <span> <img src="{{ asset('img/logo.png') }}" alt=""></span>
                    </div>
                </div>

                <br>
                <p style="text-align:center">ARCHITECT & INTERIOR DESIGNER | VASTU EXPERT | NUMEROLOGIST | REIKI & CRYSTAL HEALER | ANGEL CARD READER | SWITCHWORDS EXPERT</p>
            </div>
            <div class="card-body">
                <h3 style="text-align:center;"><u>NUMEROLOGY REPORT</u> </h3>

                <div class="table-responsive-sm">
                    <table class="table table-striped" style="border-bottom: solid 1px #000">

                        <tbody>
                            <tr>
                                <td>Name</td>
                                <td>{{$client->name}}</td>
                            </tr>

                            <tr>
                                <td>Date of Birth</td>
                                <td>{{Carbon\Carbon::parse($client->dob)->format('d-m-Y')}}</td>
                            </tr>
                            <tr>
                                <td>Birth Number</td>
                                <td>{{$client->birthnumber->id}} - {{$client->birthnumber->planet}}</td>
                            </tr>

                            <tr>
                                <td>Key Qualities</td>
                                <td>{{$client->quality->quality}}</td>
                            </tr>

                            <tr>
                                <td>Destiny Number</td>
                                <td>{{$client->destinynumber}} - {{$destinyplanet}}</td>
                            </tr>

                            <tr>
                                <td>Combination</td>
                                <td>{{$client->birthnumber->id}}/{{$client->destinynumber}}</td>
                            </tr>

                            <tr>
                                <td>Zodiac Sign</td>
                                <td>{{$client->zodiac->name}}</td>
                            </tr>

                            <tr>
                                <td>Ruler planet</td>
                                <td>{{$client->zodiac->birthnumber->planet}}</td>
                            </tr>

                            <tr>
                                <td>Lucky Colors </td>
                                <td>{{$client->luckycolors->colors}}</td>
                            </tr>

                            <tr>
                                <td>Friendly Numbers</td>
                                <td>{{$client->friendlynumbers->numbers}}</td>
                            </tr>

                            <tr>
                                <td>Non-friendly Numbers</td>
                                <td>{{$client->unfriendlynumbers->numbers}}</td>
                            </tr>
                            <tr>
                                <td>Neutral Numbers</td>
                                <td>{{$client->neutralnumbers->numbers}}</td>
                            </tr>
                            <tr>
                                <td>Lucky Dates</td>
                                <td>{{$client->luckydates->dates}}</td>
                            </tr>
                            <tr>
                                <td>Suitable Profession</td>
                                <td><input type="text" class="form-control" value="{{$client->profession->name}}"></td>
                            </tr>
                            <tr>
                                <td>Personal year</td>
                                <td>{{$client->personalyear->id}} - {{$client->personalyear->explanation}}</td>
                            </tr>
                            <tr>
                                <td>Personal Element</td>
                                <td>{{$client->zodiac->element->element}} - {{$client->zodiac->element->explanation}}</td>
                            </tr>
                            <tr>
                                <td>Auspicious Days</td>
                                <td>{{$client->auspiciousdays->days}}</td>
                            </tr>' <tr>
                                <td>Auspicious Months</td>
                                <td>{{$client->auspiciousmonths->months}}</td>
                            </tr>
                            <tr>
                                <td>Mobile/Car/Flat Number</td>
                                <td><input type="text" class="form-control" value="5"></td>
                            </tr>
                            <tr>
                                <td>Deities</td>
                                <td>{{$client->deities->deity}}</td>
                            </tr>


                        </tbody>
                    </table>
                    <h3 style="text-align:center;"><u>REMEDIES</u> </h3>
                    <table class="table table-striped">
                        <tr>
                            <td>
                                Chant Surya Mantra daily in the morning for 27 times.
                                <br>
                                <h5 class="text-center text-bold" style="color:orange;">ॐ ह्रां ह्रीं ह्रौं स: सूर्याय नम:।</h5>
                            </td>
                            <td>
                                <input type="checkbox">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Recite Vishnu sahastranam - (Drink more & more water)

                            </td>
                            <td>
                                <input type="checkbox">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Chant Shiv chalisa / Shiv Mantra and visit Shiv Temple every Monday
                                <br>
                                <h5 class="text-center text-bold" style="color:blue;">ॐ नमः शिवाय।</h5>
                            </td>
                            <td>
                                <input type="checkbox">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Recite Vishnu Sahastranam and do daily kesar (ashtagandha) tilak.
                            </td>
                            <td>
                                <input type="checkbox">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Gayatri Mantra daily 27 times
                                <br>
                                <h5 class="text-center text-bold" style="color:goldenrod">ॐ भूर् भुवः स्वः। तत् सवितुर्वरेण्यं। <br> भर्गो देवस्य धीमहि। धियो यो नः प्रचोदयात् ॥ </h5>
                            </td>
                            <td>
                                <input type="checkbox">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Always keep a Green pen or Green small square paper with you.
                            </td>
                            <td>
                                <input type="checkbox">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Keep a Bamboo Tree and plant more trees.
                            </td>
                            <td>
                                <input type="checkbox">
                            </td>
                        </tr>


                        <tr>
                            <td>
                                Chant the following mantra
                                <br>
                                <h5 class="text-center text-bold" style="color:green;">ॐ नमो भगवते वासुदेवाय नमः।</h5>
                            </td>
                            <td>
                                <input type="checkbox">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Dual tone Metal watch compulsory in right hand (Dual Tone - Golden & Silver
                            </td>
                            <td>
                                <input type="checkbox">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Donate white mithai or clothes to orphanage on Friday/ Wear white clothes on Friday
                            </td>
                            <td>
                                <input type="checkbox">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Chant the following mantra everyday
                                <br>
                                <h5 class="text-center text-bold" style="color:orange;">ॐ श्रीं ह्रीं क्लीं श्री सिद्ध लक्ष्म्यै नम: ।</h5>
                            </td>
                            <td>
                                <input type="checkbox">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Recite Atharvashirsha
                            </td>
                            <td>
                                <input type="checkbox">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Wear a Silver ring / Drink Water in Silver glass
                            </td>
                            <td>
                                <input type="checkbox">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Donate metal coins on Saturday to poor people
                            </td>
                            <td>
                                <input type="checkbox">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Recite Hanuman chalisa
                            </td>
                            <td>
                                <input type="checkbox">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <i class="fa fa-star" style="font-size:1.5rem;color:gold"></i>
                                <span style="font-size:1.5rem;">Bonus Remedies</span>
                            </td>

                        </tr>

                        <tr>
                            <td>
                                Recite Atharvashirsha Daily at one time, one place.
                            </td>
                            <td>
                                <input type="checkbox">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Kalbhairavashtak for family protection (after 8.00 pm)
                            </td>
                            <td>
                                <input type="checkbox">
                            </td>
                        </tr>
                    </table>


                    <h3 style="text-align:center" style="border: solid 1px #000">Name as Per Numerology</h3>
                    <br>
                    <h4 style="text-align:center">You have to spell your name as </h4>

                    <h4 class="text-center">
                        <input type="text" style="text-align:center" class="form-control">
                    </h4>

                    <p style="font-style:italic;color:#444">
                        Always write your name given as per Numerology to bring it on a very auspicious & fortunate number

                        <input type="text" name="" width="1cm" placeholder="e.g 5" style="border:none; border-bottom: solid 1px #888; text-align: center">.
                        <br>
                        First Name Comes on <input type="text" name="" width="1cm" style="border:none; border-bottom: solid 1px #888; text-align: center">.

                        <br>
                        Full Name Comes on <input type="text" name="" width="1cm" style="border:none; border-bottom: solid 1px #888; text-align: center">.
                        <br>
<br>
                        With this you will be able to continue and cover up all your unfinished work and you will thrive and become very successful with this name. The signature should slant upwards in around 45 degrees’ angle, underline the signature from beginning to end of the name as it serves as a platform. Don’t cut the name with a line
                    </p>

                    <br>

                    <h3 style="text-align:center" style="border: solid 1px #000">Email as Per Numerology</h3>
                    <br>
                    <h4 style="text-align:center">Register a new email id as </h4>

                    <h4 class="text-center">
                        <input type="text" class="form-control" style="text-align:center">
                    </h4>

                    <p style="font-style:italic;color:#444">
                        If you are using your previous email bcc this new email to increase positive vibrations.</p>
                </div>

            </div>

            <div class="card-footer">
                <h4 style="text-align:center">SUCCESS IS A BLEND OF GOOD FORTUNE AND HARDWORK<br></h4>
                <br>
                <h5 style="text-align:center">THANK YOU!</h5>
            </div>
        </div>
    </div>
    </div>
</body>
<script>
    n = new Date();
    y = n.getFullYear();
    m = n.getMonth() + 1;
    d = n.getDate();
    document.getElementById("date").innerHTML = "Date: " + m + "/" + d + "/" + y;
</script>

</html>