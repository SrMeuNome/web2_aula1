<?php

namespace App\Http\Controllers;

use App\Models\Automovel;
use Illuminate\Http\Request;

class ControllerAutomovel extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $automoveis = Automovel::all();
        return view('automovel.index', [
            "automoveis" => $automoveis,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('automovel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $automovel = new Automovel();
        $automovel->marca = $request->post("marca");
        $automovel->modelo = $request->post("modelo");
        $automovel->cor = $request->post("cor");
        $automovel->placa = $request->post("placa");
        $automovel->fabricacao = $request->post("fabricacao");
        $automovel->save();
        return redirect('/automovel');
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
        $automovel = Automovel::find($id);
        return view("automovel.edit", [
            'automovel' => $automovel,
        ]);
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
        $automovel = Automovel::find($id);
        $automovel->marca = $request->post("marca");
        $automovel->modelo = $request->post("modelo");
        $automovel->cor = $request->post("cor");
        $automovel->placa = $request->post("placa");
        $automovel->fabricacao = $request->post("fabricacao");
        $automovel->save();
        return redirect('/automovel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Automovel::destroy($id);
        return redirect('/automovel');
    }
}
