<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Costumer;

class ControllerCostumer extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'ERROR 404, PAGE NOT FOUND';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return 'ERROR 404, PAGE NOT FOUND';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //here I do the validation of the columns

        //just in this version of laravel it doesn't exist this validation

        /*$request->validate([
            'name' => 'required',
            'lastname' => 'required',
            'telephone' => 'required',
            'address' => 'required'
        ]);*/
        //Here I do the creation in database
        Costumer::create($request->all());
        //now we return an answer
        return 'Registro Exitoso';
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
        return redirect('/')->with('costumer', Costumer::find($id))->with('function', 'edit');
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
