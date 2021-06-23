<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProdukSeeder extends Seeder
{
	public function run()
	{
		$data = [
			[
				'nama_produk' 			=> 'Leafy Logo Font',
				'harga_produk'   	    => '50000',
				'keterangan'     		=> 'Tampilan logo yang dibuat dengan tema lingkungan.',
				'gambar'			    => 'logo2.jpg',

			],
			[
				'nama_produk' 			=> 'Infinity',
				'harga_produk'   	    => '120000',
				'keterangan'     		=> 'Mempresentasikan desain logo kreatif Anda!',
				'gambar'			    => 'logo1.jpg',

			],
			[
				'nama_produk' 			=> 'Farmer Logo Mascot',
				'harga_produk'   	    => '100000',
				'keterangan'     		=> 'Logo terbaik untuk usaha ternakmu!',
				'gambar'			    => 'logo3.jpg',

			],
			[
				'nama_produk' 			=> 'Techbox Logo',
				'harga_produk'   	    => '75000',
				'keterangan'     		=> 'Tampilan terbaik untuk perusahaanmu',
				'gambar'			    => 'logo4.jpg',

			],
			[
				'nama_produk' 			=> 'Estate Logo',
				'harga_produk'   	    => '200000',
				'keterangan'     		=> 'Sangat cocok untuk arsitektur dan real estate',
				'gambar'			    => 'logo5.jpg',
			],
		];


		// // Simple Queries
		// $this->db->query("INSERT INTO users (username, email) VALUES(:username:, :email:)", $data);

		// Using Query Builder
		$this->db->table('tb_produk')->insert($data);
	}
}
