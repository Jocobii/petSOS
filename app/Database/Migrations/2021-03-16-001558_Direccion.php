<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Direccion extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
					'type'           => 'INT',
					'constraint'     => 5,
					'unsigned'       => true,
					'auto_increment' => true,
					'null' => false,
			],
			'calle'       => [
					'type'       => 'VARCHAR',
					'constraint' => '100',
					'null' => false,
			],
			'colonia'       => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
				'null' => false,
			],
			'codigo_postal'       => [
				'type'       => 'VARCHAR',
				'constraint' => '5',
				'null' => false,
			],
			'referencia'       => [
				'type'       => 'VARCHAR',
				'constraint' => '200',
				'null' => false,
			],
			'estado'       => [
				'type'       => 'VARCHAR',
				'constraint' => '30',
				'null' => false,
			],

	]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('direccion');
	}

	public function down()
	{
		$this->forge->dropTable('direccion');
	}
}
