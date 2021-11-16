<?php

namespace App\Http\Controllers;

use App\Models\BirthNumbers;
use App\Models\Client;
use App\Models\Elements;
use App\Models\Qualities;
use App\Models\Zodiac;
use Carbon\Carbon;
use Illuminate\Http\Request;


class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();
        // dd($clients[0]->Luckycolors()->get());
        return view('index',compact(['clients']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $date = preg_replace('/-/', '', $request->date);
        $day = Carbon::parse($request->date)->format('d');
        $month = (int)Carbon::parse($request->date)->format('m');
        // dd($month);
        $destiny_number = 0;
        //calculating full year total 
        while (strlen($date) > 1) {
            $destiny_number = 0;
            for ($i = 0; $i < strlen($date); $i++) {
                $destiny_number += $date[$i];
            }

            $date = (string)$destiny_number;
        }

        $birth_number = 0;
        //calculating personal number
        while (strlen($day) > 1) {
            $birth_number = 0;
            for ($i = 0; $i < strlen($day); $i++) {
                $birth_number += $day[$i];
            }

            $day = (string)$birth_number;
        }

        $personal_year_date = Carbon::parse($request->date)->format('d');
        $personal_year_date .= (string)Carbon::parse($request->date)->format('m');
        $personal_year_date .= (string)Carbon::now()->format('y');

        // dd($personal_year);
        while (strlen($personal_year_date) > 1) {
            $personal_year = 0;
            for ($i = 0; $i < strlen($personal_year_date); $i++) {
                $personal_year += $personal_year_date[$i];
            }

            $personal_year_date = (string)$personal_year;
        }

        $zodiac = array('', 'Capricorn', 'Aquarius', 'Pisces', 'Aries', 'Taurus', 'Gemini', 'Cancer', 'Leo', 'Virgo', 'Libra', 'Scorpio', 'Sagittarius', 'Capricorn');
        $last_day = array('', 19, 18, 20, 20, 21, 21, 22, 22, 21, 22, 21, 20, 19);
        $z = (Carbon::parse($request->date)->format('d') > $last_day[$month]) ? $zodiac[$month + 1] : $zodiac[$month];
        // dd($z);   
        $zodiac_obj = Zodiac::all()->where('name', $z)->first();
        // dd($zodiac_obj);
        $zid = Zodiac::all()->where('name', $z)->first()->element->id;
        
        // dd(Zodiac::all()->where('name', $z)->first()->elemens);
        $client = new Client();
        $client->name = $request->name;
        $client->email = $request->email;
        $client->dob = $request->date;
        $client->birthnumber_id = $birth_number;
        $client->quality_id = $birth_number;
        $client->destinynumber = $destiny_number;
        $client->zodiac_id = $zodiac_obj->id;
        $client->luckycolors_id = $birth_number;
        $client->friendlynumbers_id = $birth_number;
        $client->unfriendlynumbers_id = $birth_number;
        $client->neutralnumbers_id = $birth_number;
        $client->luckydates_id = $birth_number;
        $client->personalyear_id = $personal_year;
        $client->profession_id = $birth_number;
        $client->element_id = $zid;
        
        $client->auspiciousdays_id = $birth_number;
        $client->auspiciousmonths_id = $birth_number;
        $client->mobile_flat_car = $birth_number;
        $client->deities_id = $birth_number;
        // dd($client);
        $client->save();
        
        return redirect()->route('edit',compact([
            'client'
        ]));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        
        
        $birthplanet = BirthNumbers::all()->where('id',$client->birthnumber_id)->first()->planet;
        $destinyplanet = BirthNumbers::all()->where('id',$client->destinynumber)->first()->planet;
        // dd(Carbon::parse($client->dob)->format('m'));
        // dd($client->element->element);
        // return view('clients.report');
        return view('report',compact([
            'client',
            'birthplanet',
            'destinyplanet'
        ]));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }
}
