<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Model\Client;
use App\Http\Requests\StoreClientPostRequest;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
         $client = new Client();

        return redirect('client', array('id' => 1));

        return view('client.index',  [
            'clients' => $client->all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('client.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClientPostRequest $request)
    {

        $client = new Client();

        /* client info */
        $client->name = $request->name;
        $client->email = $request->email;
        $client->dob = date("Y-m-d", strtotime($request->dob));
        $client->gender = $request->gender;
        #$client->rg = preg_replace('/\D/','', $request->rg);
        $client->rg = $request->rg;
        $client->phone = $request->phone;
        $client->legal_age = ($request->legal_age)? true : false;

        /* address */
        #$client->setRawAttributes($request->address);
        $client->cep = $request->address['cep'];
        $client->street = $request->address['street'];
        $client->number = $request->address['number'];
        $client->complement = $request->address['complement'];
        $client->neighborhood = $request->address['neighborhood'];
        $client->city = $request->address['city'];
        $client->state = $request->address['state'];

        $client->save();

        return redirect()->route('client', $client->id); 
        #redirect('/client/' . $client->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        print_r($id);

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
