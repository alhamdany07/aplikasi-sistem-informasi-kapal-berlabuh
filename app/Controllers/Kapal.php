<?php

namespace App\Controllers;
use App\Models\KapalModel;

class Kapal extends BaseController
{
    protected $kapalModel;

    public function __construct()
    {
        $this->kapalModel = new KapalModel();
    }

    // Halaman kapal tiba
    public function tiba()
    {
        $data['kapal'] = $this->kapalModel->where('status', 'TIBA')->findAll();
        return view('kapal_tiba', $data);
    }

    // Halaman kapal berangkat
    public function berangkat()
    {
        $data['kapal'] = $this->kapalModel->where('status', 'BERLAYAR')->findAll();
        return view('kapal_berangkat', $data);
    }

    // Form tambah data
    public function tambah()
    {
        return view('kapal_form');
    }

    // Simpan data
    public function simpan()
    {
        $this->kapalModel->save([
            'nama_kapal' => $this->request->getPost('nama_kapal'),
            'tanda_selar' => $this->request->getPost('tanda_selar'),
            'tanggal_tiba' => $this->request->getPost('tanggal_tiba'),
            'tanggal_berangkat' => $this->request->getPost('tanggal_berangkat'),
            'status' => $this->request->getPost('status'),
        ]);

        return redirect()->to('/kapal/berangkat');
    }

    // Hapus data
    public function hapus($id)
    {
        $this->kapalModel->delete($id);
        return redirect()->to('/kapal/berangkat');
    }

    // Edit data
    public function edit($id)
    {
        $data['kapal'] = $this->kapalModel->find($id);
        return view('kapal_form', $data);
    }

    // Update data
    public function update($id)
    {
        $this->kapalModel->update($id, [
            'nama_kapal' => $this->request->getPost('nama_kapal'),
            'tanda_selar' => $this->request->getPost('tanda_selar'),
            'tanggal_tiba' => $this->request->getPost('tanggal_tiba'),
            'tanggal_berangkat' => $this->request->getPost('tanggal_berangkat'),
            'status' => $this->request->getPost('status'),
        ]);

        return redirect()->to('/kapal/berangkat');
    }
}
