<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Raza extends Migration
{
	public function up()
	{
		$this->db->disableForeignKeyChecks();
		$this->forge->addField([
			'raza_id'          => [
					'type'           => 'INT',
					'constraint'     => 5,
					'unsigned'       => true,
					'auto_increment' => true,
			],
			'raza_nombre'       => [
					'type'       => 'VARCHAR',
					'constraint' => '100',
			],
			'tipo_mascota' => [
				'type'           => 'INT',
					'constraint'     => 5,
					'unsigned'       => true,
					'null' => false,
			],
	]);
	$this->forge->addKey('raza_id', true);
	$this->forge->addForeignKey('tipo_mascota','tipomascota','tipoMascota_id');
	$this->forge->createTable('raza');
	
	$this->db->enableForeignKeyChecks();
	}

	public function down()
	{
		$this->forge->dropTable('raza');
	}
}
