<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tipousuario extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'tipoUsuario_id'          => [
					'type'           => 'INT',
					'constraint'     => 5,
					'unsigned'       => true,
					'auto_increment' => true,
					'null' => false,
			],
			'tipo'       => [
					'type'       => 'VARCHAR',
					'constraint' => '100',
					'null' => false,
			],
	]);
		$this->forge->addKey('tipoUsuario_id', true);
		$this->forge->createTable('tipoUsuario');
	}

	public function down()
	{
		$this->forge->dropTable('tipoUsuario');
	}
}
