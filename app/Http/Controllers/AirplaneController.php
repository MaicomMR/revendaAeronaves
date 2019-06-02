<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AirplanesModel;
use DB;

class AirplaneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = AirplanesModel::all();       
        //dd($data); 
        return view('home_cliente', ["data"=>$data]);
    }


    public function indexTableADM()
    {
        $data = AirplanesModel::all();  
        // dd($data);
        return view('listar', ["data"=>$data]);
    }



    public function buscaEspecifica(Request $request)
    {
        $busca = $request->all();
        $buscaAr = reset($busca);
        
        $data = AirplanesModel::where('name','LIKE',"%{$buscaAr}%")->get();
        $data = AirplanesModel::where('secondName','LIKE',"%{$buscaAr}%")->get();

 
        return view('home_cliente', ["data" => $data]);
    }

    public function exibe($id)
    {
        $data = AirplanesModel::find($id);
        //dd($data);
        return view('buyContact', ["data" => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validateData = $request->validate([
            'nome' => 'required|min:6|max:100',
            'secondName' => 'required',
            'flightTime' => 'required',
            'actualCity' => 'required|min:6|max:100',
            'value' => 'required',
            'year' => 'required',
            'observation' => 'required',
            'type' => 'required',
            'description' => 'required',
            'manufacture_id' => 'required']);


        //dd($request);
        $dados = $request->all();
        AirplanesModel::create($dados);

        return view('home');
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
    }
}
