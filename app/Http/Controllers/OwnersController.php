<?php

namespace App\Http\Controllers;

use App\Owners\Owner;
use Illuminate\Http\Request;

use App\Http\Requests;

use Session;


class OwnersController extends Controller
{
    /**
     * OwnersController constructor.
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
        $owners = Owner::all();

        return view('owners.index')->withOwners($owners);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('owners.create');
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
            'firstname' => 'required',
            'lastname' => 'required',
            'contact_number' => 'required',
            'email' => 'required'
        ]);

        $input = $request->all();

        Owner::create($input);

        Session::flash('flash_message', 'Owner successfully added!');

        return redirect('api/v1/owner');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $owner = Owner::findOrFail($id);

        return view('owners.show')->withOwner($owner);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $owner = Owner::findOrFail($id);

        return view('owners.edit')->withOwner($owner);

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
        $owner = Owner::findOrFail($id);

        $this->validate($request, [
            'firstname' => 'required',
            'lastname' => 'required',
            'contact_number' => 'required',
            'email' => 'required'
        ]);

        $input = $request->all();

        $owner->fill($input)->save();

        Session::flash('flash_message', 'Owner successfully added!');

        return redirect('api/v1/owner');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $owner = Owner::findOrFail($id);

        $owner->delete();

        Session::flash('flash_message', 'Owner successfully deleted!');

        return redirect('api/v1/owner');
    }
}
