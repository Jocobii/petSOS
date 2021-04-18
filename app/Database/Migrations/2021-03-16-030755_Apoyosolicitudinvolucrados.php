<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Apoyosolicitudinvolucrados extends Migration
{
	public function up()
	{
		$this->db->disableForeignKeyChecks();
		$this->forge->addField([
			'id'          => [
					'type'           => 'INT',
					'constraint'     => 5,
					'unsigned'       => true,
					'auto_increment' => true,
					'null' => false,
			],
			'usuario_remitente'       => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'null' => false,
			],
			'usuario_destinatario'       => [
				'type'           => 'INT',
					'constraint'     => 5,
					'unsigned'       => true,
					'null' => false,
		],
	]);
		$this->forge->addKey('id', true);
		$this->forge->addForeignKey('usuario_remitente','usuario','usuario_id');
		$this->forge->addForeignKey('usuario_destinatario','usuario','usuario_id');
		$this->forge->createTable('apoyosolicitudinvolucrados');
		$this->db->enableForeignKeyChecks();
		
	}

	public function down()
	{
		$this->forge->dropTable('apoyosolicitudinvolucrados');
	}
}
