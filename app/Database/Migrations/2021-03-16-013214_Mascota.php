<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Mascota extends Migration
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
			],
			'nombre'       => [
					'type'       => 'VARCHAR',
					'constraint' => '30',
			],
			'edad' => [
					'type' => 'INT',
					'constraint'     => 5,
					'null' => true,
			],
			'genero'       => [
				'type'       => 'CHAR',
				'constraint' => '1',
			],
			'descripcion'       => [
				'type'       => 'TEXT',
			],
			'imagen'       => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
			],
			'raza_id'       => [
				'type'           => 'INT',
					'constraint'     => 5,
					'unsigned'       => true,
			],
			'usuario_id'       => [
				'type'           => 'INT',
					'constraint'     => 5,
					'unsigned'       => true,
					'null' => false,
			],
			'estado'       => [
				'type'       => 'VARCHAR',
				'constraint' => '15',
				'null' => true,
			],
			'tamano'       => [
				'type'       => 'VARCHAR',
				'constraint' => '15',
				'null' => true,
			],
			
	]);
	$this->forge->addKey('id', true);
	$this->forge->addForeignKey('raza_id','raza','id');
	$this->forge->addForeignKey('usuario_id','usuario','id');
	$this->forge->createTable('adopcionsolicitud');
	$this->db->enableForeignKeyChecks();
	}

	public function down()
	{
		$this->forge->dropTable('adopcionsolicitud');
	}
}
