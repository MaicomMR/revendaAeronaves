<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AirplanesModel;
use App\BuyContactModel;
use App\ManufacturesModel;
use Illuminate\Support\Facades\Storage;
use App\Mail\OrderContact;
use Illuminate\Support\Facades\Mail;

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
        $data = AirplanesModel::paginate(12);     
        return view('home_cliente', ["data"=>$data]);
    }


    public function indexTableADM()
    {
        $data = AirplanesModel::paginate(10);
        return view('listar', ["data"=>$data]);
    }



    public function buscaEspecifica(Request $request)
    {
        $busca = $request->all();
        $buscaAr = reset($busca);
        
        $data = AirplanesModel::where('name','LIKE',"%{$buscaAr}%")->paginate(10);
 
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

    public function registerContact(Request $request)
    {
        $data = $request->all();
        

            $validateData = $request->validate([
            'contactName' => 'required',
            'email' => 'required',
            'phone' => 'required',]);
                
        BuyContactModel::create($data);
        Mail::to("maicom_mr@hotmail.com")->send(new OrderContact());

        $data = AirplanesModel::paginate(12);     
        return view('home_cliente', ["data"=>$data]);
        
    }

    public function contactList()
    {
        $data = BuyContactModel::paginate(10);
        return view('contactList', ["data"=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $dados = $request->all();
        //Validações
        $validateData = $request->validate([
            'name' => 'required',
            'secondName' => 'required',
            'flightTime' => 'required',
            'actualCity' => 'required',
            'value' => 'required',
            'year' => 'required',
            'observation' => 'required',
            'type' => 'required',
            'description' => 'required',
            'manufacture_id' => 'required']);


            $path = $request->file('photo')->store('fotos', 'public');

            $dados['photo'] = $path;
        // dd($path);
        // dd($dados);
        


        
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

    public function statistics()
    {
        //AirplanesModel;
        //ManufacturesModel;

        $data = AirplanesModel::selectRaw('airplanes.manufacture_id, count(*) as num')
        ->join('manufactures', 'airplanes.manufacture_id', '=', 'manufactures.id')
        ->groupBy('airplanes.manufacture_id')
        ->get(); 
       
        $data2 = AirplanesModel::selectRaw('airplanes.type, count(*) as num')->groupBy('airplanes.type')->get();



        // dd($data);
        // dd($marcas);
        return view('statistics', ['data' => $data, 'data2' => $data2]);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function edit($id)
    {
        // dd($id);
        $data = AirplanesModel::find($id);
        // dd($data);
        return view('editar', ['data' => $data]);

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
        // dd($id);
        $dados = $request->all();
        
        $reg = AirplanesModel::find($id);

        $path = $request->file('photo')->store('fotos', 'public');
        $reg['photo'] = $path;


        $alt = $reg->update($dados);

        if ($alt) {
            return redirect()->route('listar')
                   ->with('status', 'Aeronave editada com sucesso');
        } else {
            return redirect()->route('listar')
                   ->with('status', 'Opa... por algum motivo a eeronave não pode ser editadap');
        }  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function sendemail()
    {
        $destinatario = "maicom_mr@hotmail.com";
        Mail::to($destinatario)->send(new OrderContact());
    }

    public function destroy($id)
    {
        $airplaneId = $id;
        $airplane = AirplanesModel::find($id);
        $airplane->delete();
        

        $data = AirplanesModel::paginate(10);

        return redirect()->route('listar')->with('Aeronave Excluída!');

    }



    ///RELATÓRIO PDF
    public function pdfReport()
    {
        $data = AirplanesModel::all();
        return \PDF::loadview('admin.airplanesReport', ["data"=>$data])->stream();
    }
    
}
