<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use App\ModelCar;
use App\Brand;
use App\Version;
use App\Costumer;
use App\Seller;

class ControllerCostumer extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index')->with('costumers', Costumer::all())
        ->with('table', 'costumers')->with('brands', Brand::all())->with('function', '')->with('cars', Car::all())
        ->with('versions', Version::all())->with('models', ModelCar::all())->with('sellers', Seller::all());
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
        return redirect('/costumer')->with('stateCreation', 'Se añadio el cliente de forma exitosa!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect('/costumer')->with('costumer', Costumer::find($id))->with('function', 'delete');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return redirect('/costumer')->with('costumer', Costumer::find($id))->with('function', 'edit');
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
        $costumer = Costumer::find($id);
        $costumer->update($request->all());
        return redirect('/costumer')->with('stateCreation', 'Se hizo la actualizacion de forma exitosa!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $costumer = Costumer::find($id);
        $costumer->delete();
        return redirect('costumer')->with('stateCreation', 'Se elimino el cliente de manera exitosa!!!');
    }
}
