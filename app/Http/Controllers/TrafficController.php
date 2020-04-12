<?php

namespace App\Http\Controllers;

use App\Traffic;
use App\Car;
use App\Driver;
use Illuminate\Http\Request;

class TrafficController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('traffics.index', ['traffics' => Traffic::get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('traffics.create', ['cars' => Car::get(), 'drivers' => Driver::get()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $traffic = Traffic::create(
            [
                'driver_id' => $request->driver_id,
                'car_id' => $request->car_id,
                'route_from' => $request->route_from,
                'route_to' => $request->route_to,
                'cargo' => $request->cargo,
                'cargo_weight' => $request->cargo_weight,
            ]
        );

        if($traffic) {
            return redirect('/');
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
        return view('traffics.edit', ['traffic' => Traffic::findOrFail($id), 'cars' => Car::get(), 'drivers' => Driver::get()]);
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
        $traffic = Traffic::find($id);

        $traffic->driver_id = $request->driver_id;
        $traffic->car_id = $request->car_id;
        $traffic->route_from = $request->route_from;
        $traffic->route_to = $request->route_to;
        $traffic->cargo = $request->cargo;
        $traffic->cargo_weight = $request->cargo_weight;

        $traffic->save();

        return redirect('/');
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
