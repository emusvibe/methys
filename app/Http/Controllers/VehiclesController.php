<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Vehicles\Vehicle;

use Session;


class VehiclesController extends Controller
{
    /**
     * VehiclesController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicles = Vehicle::all();

        return view('vehicles.index', compact('vehicles'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $owners = \DB::table('owners')->lists('firstname', 'id');

        return view('vehicles.create')->with('owners', $owners);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'manufacturer' => 'required',
            'type' => 'required',
            'year' => 'required',
            'colour' => 'required',
            'mileage' => 'required',
            'owner_id' => 'required'
        ]);

        $input = $request->all();

        Vehicle::create($input);

        return redirect('api/v1/vehicle');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vehicle = Vehicle::findOrFail($id);

        return view('vehicles.show')->withVehicle($vehicle);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $vehicle = Vehicle::findOrFail($id);

        $owners = \DB::table('owners')->lists('firstname', 'id');

        return view('vehicles.edit', ['owners' => $owners])->withVehicle($vehicle);

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
        $vehicle = Vehicle::findOrFail($id);

        $this->validate($request, [
            'manufacturer' => 'required',
            'type' => 'required',
            'year' => 'required',
            'colour' => 'required',
            'mileage' => 'required',
            'owner_id' => 'required'
        ]);

        $input = $request->all();

        $vehicle->fill($input)->save();

        Session::flash('flash_message', 'Vehicle successfully added!');

        return redirect('api/v1/vehicle');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vehicle = Vehicle::findOrFail($id);

        $vehicle->delete();

        Session::flash('flash_message', 'Vehicle successfully deleted!');

        return redirect('api/v1/vehicle');
    }

}
