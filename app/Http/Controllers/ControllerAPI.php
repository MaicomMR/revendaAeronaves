<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\AirplanesModel;


class ControllerAPI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    
    // Método responsável por disponibilizar um arquivo JSON com todas as aeronaves disponíveis no banco de dados
     public function api()
    {

        $data = AirplanesModel::all();
        $json = array();
        foreach ($data as $airplane) {
            $json[] = array(
                'id' => $airplane->id,
                'name' => $airplane->name,
                'secondName' => $airplane->secondName,
                'flightTime' => $airplane->flightTime,
                'actualCity' => $airplane->actualCity,
                'value' => $airplane->value,
                'year' => $airplane->year,
                'observation' => $airplane->observation,
                'type' => $airplane->type,
                'description' => $airplane->description,
                'manufacture_id' => $airplane->manufacture_id,
                'photo' => $airplane->photo
            );
        }
        echo json_encode($json);
    }
}
