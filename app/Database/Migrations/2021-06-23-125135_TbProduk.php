<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TbProduk extends Migration
{
	public function up()
	{

		$this->forge->addField([
			'id_produk'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'nama_produk'       => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
			],
			'harga_produk'       => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
			],
			'keterangan'       => [
				'type'       => 'text',

			],
			'gambar'       => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
			],

		]);
		$this->forge->addKey('id_produk', true);
		$this->forge->createTable('tb_produk');
	}

	public function down()
	{
		$this->forge->dropTable('tb_produk');
	}
}
