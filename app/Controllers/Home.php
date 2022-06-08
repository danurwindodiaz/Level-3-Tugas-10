<?php

namespace App\Controllers;

use App\Models\ProdukModel;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'produk' => (new ProdukModel())->orderBy('id', 'DESC')->findAll()
        ];

        return view('list-produk', $data);
    }

    public function tambah()
    {
        return view('tambah-produk');
    }

    public function insert()
    {
        $data = [
            'nama_produk' => $this->request->getPost('nama_produk'),
            'keterangan' => $this->request->getPost('keterangan'),
            'harga' => $this->request->getPost('harga'),
            'jumlah' => $this->request->getPost('jumlah')
        ];

        (new ProdukModel())->insert($data);

        return redirect()->to('/');
    }

    public function ubah($id)
    {
        $data = [
            'produk' => (new ProdukModel())->find($id)
        ];

        return view('ubah-produk', $data);
    }

    public function update()
    {
        $data = [
            'id' => $this->request->getPost('id'),
            'nama_produk' => $this->request->getPost('nama_produk'),
            'keterangan' => $this->request->getPost('keterangan'),
            'harga' => $this->request->getPost('harga'),
            'jumlah' => $this->request->getPost('jumlah')
        ];

        (new ProdukModel())->save($data);

        return redirect()->to('/');
    }

    public function hapus($id)
    {

        (new ProdukModel())->delete($id);

        return redirect()->to('/');
    }
}
