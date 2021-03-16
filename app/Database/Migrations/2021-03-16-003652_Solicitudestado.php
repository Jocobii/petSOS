<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Solicitudestado extends Migration
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
			'estado'       => [
					'type'       => 'VARCHAR',
					'constraint' => '30',
					'null' => false,
			],
	]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('solicitudestado');
	}

	public function down()
	{
		$this->forge->dropTable('solicitudestado');
	}
}
