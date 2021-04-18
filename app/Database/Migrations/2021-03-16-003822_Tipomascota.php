<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tipomascota extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'tipoMascota_id'          => [
					'type'           => 'INT',
					'constraint'     => 5,
					'unsigned'       => true,
					'auto_increment' => true,
					'null' => false,
			],
			'tipoMascota_nombre'       => [
					'type'       => 'VARCHAR',
					'constraint' => '30',
					'null' => false,
			],
	]);
		$this->forge->addKey('tipoMascota_id', true);
		$this->forge->createTable('tipomascota');
	}

	public function down()
	{
		$this->forge->dropTable('tipomascota');
	}
}
