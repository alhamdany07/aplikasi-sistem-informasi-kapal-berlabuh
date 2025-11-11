<?php

namespace App\Controllers;
use App\Models\KapalModel;

class Dashboard extends BaseController
{
    public function index()
    {
        $model = new KapalModel();
        $data['kapal'] = $model->findAll();
        return view('kapal_berangkat', $data);
    }
}
