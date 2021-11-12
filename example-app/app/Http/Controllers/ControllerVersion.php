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

class ControllerVersion extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index')->with('models', ModelCar::all())->with('table', 'version')->with('function', '')
        ->with('brands', Brand::all())->with('versions', Version::all())->with('sellers', Seller::all())
        ->with('costumers', Costumer::all())->with('cars', Car::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return "ERROR 404, PAGE NOT FOUND";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Version::create($request->all());
        return redirect('/version')->with('stateCreation', 'Se ha añadido la version de manera exitosa!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect('/version')->with('version', Version::find($id))->with('function', 'delete');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return redirect('/version')->with('version', Version::find($id))->with('function', 'edit');
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
        $version = Version::find($id);
        $version->update($request->all());
        return redirect('/version')->with('stateCreation', 'Se hizo la actualizacion de forma exitosa!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $version = Version::find($id);
        $version->delete();
        return redirect('/version')->with('stateCreation', 'Se elimino la version de manera exitosa!!!');
    }
}
