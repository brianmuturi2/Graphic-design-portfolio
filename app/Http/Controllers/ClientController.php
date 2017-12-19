<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Client;

use Session;

use Storage;

use Image;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
        $clients = Client::orderBy('id', 'desc')->paginate(5);
        return view('clients.index')->withClients($clients);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, array(
            'name'              => 'required|max:60',
            'featured_logo'     => 'required|image',
            ));

        $client                 = new Client;
        $client->name           = $request->name;

        $logo                   = $request->file('featured_logo');
        $filename               = time() . '.' . $logo->                        getClientOriginalExtension();
        $location               = public_path('images/' . $filename);
        
        Image::make($logo)->resize(400, 200)->save($location);

        $client->logo           = $filename;            

        $client->save();

        Session::flash('Success', 'Client was successfully saved!');

        return redirect()->route('clients.index');
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
        $client = Client::find($id);

        Storage::delete($client->logo);

        $client->delete();

        Session::flash('Success', 'Client deleted');
        return redirect()->route('clients.index');
    }
}
