<?php

namespace App\Controllers;
use App\Models\KapalModel;

class UserController extends BaseController
{
    protected $kapalModel;

    public function __construct()
    {
        $this->kapalModel = new KapalModel();
    }

    public function index()
    {
        return view('user_home');
    }

    public function kapalTiba()
    {
        $data['kapal'] = $this->kapalModel->where('status', 'TIBA')->findAll();
        return view('user_kapal_tiba', $data);
    }

    public function kapalBerangkat()
    {
        $data['kapal'] = $this->kapalModel->where('status', 'BERLAYAR')->findAll();
        return view('user_kapal_berangkat', $data);
    }
}
