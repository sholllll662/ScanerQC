<?php

namespace App\Controllers;

use App\Models\scanModel;


class admin extends BaseController
{
    protected $scanModel;
    public function __construct()
    {
        $this->scanModel = new scanModel();
    }

    public function index()
    {
        $scanqc = $this->scanModel->findAll();

        $data = [
            'title' => "Home | Admin",
            'scanqc' => $scanqc
        ];


        return view('admin/homepage', $data);
    }

    public function input()
    {
        $data = [
            'title' => "Input Data"

        ];

        return view('admin/input', $data);
    }

    public function save()
    {
        $this->scanModel->save([
            'pic' => $this->request->getVar('pic'),
            'shift' => $this->request->getVar('shift'),

            'jam_mulai' => $this->request->getVar('jam_mulai'),
            'jam_selesai' => $this->request->getVar('jam_selesai'),
            'part_number' => $this->request->getVar('part_number'),
            'lot_number' => $this->request->getVar('lot_number'),
            'qty_check' => $this->request->getVar('qty_check'),
            'qty_oke' => $this->request->getVar('qty_oke'),
            'qty_ng' => $this->request->getVar('qty_ng'),

            'scratch' => $this->request->getVar('scratch'),
            'dented' => $this->request->getVar('dented'),
            'dimens' => $this->request->getVar('dimens'),
            'pin_g' => $this->request->getVar('pin_g'),
            'cg' => $this->request->getVar('cg'),
            'piptil' => $this->request->getVar('piptil'),
            'chip' => $this->request->getVar('chip'),
            'spiral' => $this->request->getVar('spiral'),
            'shortcut' => $this->request->getVar('shortcut'),
            'burry_t1' => $this->request->getVar('burry_t1'),
            'burry_t2' => $this->request->getVar('burry_t2'),
            'rusty_bp' => $this->request->getVar('rusty_bp'),
            'm_proses' => $this->request->getVar('m_proses'),

            'pin_hole' => $this->request->getVar('pin_hole'),
            'bending' => $this->request->getVar('bending'),

            'rusty' => $this->request->getVar('rusty'),
            'color' => $this->request->getVar('color'),
            'burn_mark' => $this->request->getVar('burn_mark'),
            'part_off' => $this->request->getVar('part_off'),
            'blister' => $this->request->getVar('blister'),

            'keterangan' => $this->request->getVar('keterangan'),
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil ditambahkan');

        return redirect()->to('/admin/input/input');
    }

    public function export()
    {
        $scanqc = $this->scanModel->findAll();

        $data = [
            'title' => "Export Data",
            'scanqc' => $scanqc
        ];

        return view('admin/export', $data);
    }

    public function admin()
    {
        $scanqc = $this->scanModel->findAll();

        $data = [
            'title' => "Home | Admin",
            'scanqc' => $scanqc
        ];

        return view('admin/admin', $data);
    }

    public function delete($id)
    {
        $this->scanModel->delete($id);
        return redirect()->to('admin');
    }
}
