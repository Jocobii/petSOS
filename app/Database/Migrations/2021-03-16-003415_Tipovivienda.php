<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tipovivienda extends Migration
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
			'tipo'       => [
					'type'       => 'VARCHAR',
					'constraint' => '30',
					'null' => false,
			],
	]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('tipovivienda');
	}

	public function down()
	{
		$this->forge->dropTable('tipovivienda');
	}
}
