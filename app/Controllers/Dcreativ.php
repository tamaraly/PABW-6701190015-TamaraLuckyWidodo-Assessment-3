<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProdukModel;

class Dcreativ extends BaseController
{
	public function index()
	{
		return view('index');
	}

	public function produk()
	{
		$tb_produk = new ProdukModel();
		$data = $tb_produk->findAll();

		return view('/produk/index', compact('data'));
	}

	public function addproduk()
	{
		return view('/produk/add');
	}

	public function store()
	{
		$validated = $this->validate([
			'gambar' => 'uploaded[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/gif,image/png]|max_size[gambar,4096]'
		]);

		if ($validated == FALSE) {

			// Kembali ke function index supaya membawa data uploads dan validasi
			session()->setFlashdata('error', $this->validator->listErrors());
			return redirect()->back()->withInput();
		}
		$nama_produk = $this->request->getVar('nama_produk');
		$harga_produk = $this->request->getVar('harga_produk');
		$keterangan = $this->request->getVar('keterangan');


		$file = $this->request->getFile('gambar');
		$namaGambar = $file->getName();
		$data = [
			'nama_produk' => $nama_produk,
			'harga_produk' => $harga_produk,
			'keterangan' => $keterangan,
			'gambar' => $namaGambar
		];
		$file->move('image/', $namaGambar);
		$produk = new ProdukModel();
		$produk->insert($data);
		return redirect()->to('/produk');
	}


	public function delete($id_produk)
	{
		$produk = new ProdukModel;
		$produk->delete($id_produk);

		return redirect()->to('/produk');
	}
	public function create()
	{
		return view('/produk/add');
	}

	public function edit($id_produk)
	{
		$produk = new ProdukModel;
		$data = $produk->find($id_produk);

		return view('/produk/edit', compact('data'));
	}

	public function update()
	{
		$id = $this->request->getVar('id_produk');
		$nama_produk = $this->request->getVar('nama_produk');
		$harga_produk = $this->request->getVar('harga_produk');
		$keterangan = $this->request->getVar('keterangan');


		$file = $this->request->getFile('gambar');
		$namaGambar = $file->getName();

		if ($namaGambar != '') {
			$data = [
				'nama_produk' => $nama_produk,
				'harga_produk' => $harga_produk,
				'keterangan' => $keterangan,
				'gambar' => $namaGambar
			];
			$file->move('image/', $namaGambar);
			$produk = new ProdukModel();
			$produk->update($id, $data);
			return redirect()->to('/produk');
		} else {

			$data = [
				'nama_produk' => $nama_produk,
				'harga_produk' => $harga_produk,
				'keterangan' => $keterangan,

			];

			$produk = new ProdukModel();
			$produk->update($id, $data);
			return redirect()->to('/produk');
		}
	}
}
