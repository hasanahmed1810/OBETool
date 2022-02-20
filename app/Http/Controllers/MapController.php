<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapController extends Controller
{
    public function index($sem_id, $id)
    {
        return view('map', ['sem_id' => $sem_id, 'id' => $id]);
    }
}
