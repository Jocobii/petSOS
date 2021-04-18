<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Apoyosolicitud extends Migration
{
	public function up()
	{
		$this->db->disableForeignKeyChecks();
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'null' => false,
			],
			'apoyosolicitudinvolucrados'       => [
				'type'           => 'INT',
					'constraint'     => 5,
					'unsigned'       => true,
					'null' => false,
			],
			'tipoapoyo'       => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'null' => false,
			],
			'mascota'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
			],
			'mensaje'          => [
				'type'           => 'VARCHAR',
				'constraint'     => 200,
			],
			'solicitud_estado'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'null' => false,
			],
	]);
		$this->forge->addKey('id', true);
		$this->forge->addForeignKey('apoyosolicitudinvolucrados','apoyosolicitudinvolucrados','id');
		$this->forge->addForeignKey('tipoapoyo','tipoapoyo','id');
		$this->forge->addForeignKey('mascota','mascota','mascota_id');
		$this->forge->addForeignKey('solicitud_estado','solicitudestado','id');
		$this->forge->createTable('apoyosolicitud');
		$this->db->enableForeignKeyChecks();
	}

	public function down()
	{
		$this->forge->dropTable('apoyosolicitud');
	}
}
