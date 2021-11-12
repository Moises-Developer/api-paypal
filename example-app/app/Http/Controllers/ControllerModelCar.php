<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use App\ModelCar;
use App\Brand;
use App\Version;
use App\Costumer;
use App\Seller;
use App\Sell;

class ControllerModelCar extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index')->with('models', ModelCar::all())->with('table', 'models')->with('function', '')
        ->with('brands', Brand::all())->with('sellers', Seller::all())->with('versions', Version::all())
        ->with('costumers', Costumer::all())->with('cars', Car::all());
        //return view('index')->with('models', ModelCar::all())->with('brands', Brand::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return "ERROR 404, PAGE NOT FOUND!!!";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ModelCar::create($request->all());
        return redirect('/model')->with('stateCreation', 'Se ha añadido el modelo de manera exitosa!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect('/model')->with('model', ModelCar::find($id))->with('function', 'delete');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return redirect('/model')->with('model', ModelCar::find($id))->with('function', 'edit');
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
        $model = ModelCar::find($id);
        $model->update($request->all());
        return redirect('/model')->with('stateCreation', 'Se hizo la actualizacion de forma exitosa!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = ModelCar::find($id);
        $model->delete();
        return redirect('/model')->with('stateCreation', 'Se elimino el model de manera exitosa!!!');
    }
}
