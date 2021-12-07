<?php

namespace App\Controllers;

use App\Models\IklanModel;
use App\Models\KategoriModel;
use App\Models\SubkategoriModel;


class Halaman extends BaseController
{
    function __construct()
    {
        $this->kategoriModel = new KategoriModel();
        $this->subkategoriModel = new SubkategoriModel();
        $this->iklanModel = new IklanModel();
    }
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $data['kategori'] = $this->kategoriModel->findAll();
        $data['list_iklan'] = $this->iklanModel->getAll();
        echo view('home/beranda/index', $data);
    }

    public function tampil_iklan($slug = null)
    {
        $data['iklan'] = $this->iklanModel->getbySlug($slug);
        echo view('home/iklan/iklan_detail', $data);
    }
}
