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
    public function api()
    {
    
        $data = AirplanesModel::all();
        $json = array();
    foreach ($data as $airplane) {
        $json[]=array(
            'id' => $airplane->id,
            'name' => $airplane->name,
            'photo' => $airplane->photo,
            'value' => $airplane->value,
        );
    }
        echo json_encode($json);
    }
}
