<?php

namespace App\Http\Controllers;

use App\Traffic;
use App\Donate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DonateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($traffic_id)
    {
        $donates = DB::table('donates')
                    ->select(DB::raw('COUNT(*) as count, name, email, SUM(amount) as amount, MAX(created_at) as created_at'))
                    ->where('traffic_id', $traffic_id)
                    ->orderBy(DB::raw('SUM(amount)', 'desc'))
                    ->groupBy('email', 'name')
                    ->get();
        return view('donates.index', ['donates' => $donates, 'traffic' => Traffic::find($traffic_id)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('donates.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $traffic_id)
    {
        $donate = Donate::create(
            [
                'name' => $request->name,
                'email' => $request->email,
                'traffic_id' => $traffic_id, 
                'amount' => $request->amount
            ]
        );

        if($donate) {
            return redirect('/traffics/' . $donate->traffic_id . '/donates');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
