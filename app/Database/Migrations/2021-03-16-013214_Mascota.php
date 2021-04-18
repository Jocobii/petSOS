<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Mascota extends Migration
{
	public function up()
	{
		$this->db->disableForeignKeyChecks();
		$this->forge->addField([
			'mascota_id'          => [
					'type'           => 'INT',
					'constraint'     => 5,
					'unsigned'       => true,
					'auto_increment' => true,
			],
			'nombre_mascota'       => [
					'type'       => 'VARCHAR',
					'constraint' => '30',
			],
			'mascota_edad' => [
					'type' => 'INT',
					'constraint'     => 5,
					'null' => true,
			],
			'mascota_genero'       => [
				'type'       => 'CHAR',
				'constraint' => '1',
			],
			'mascota_descripcion'       => [
				'type'       => 'TEXT',
			],
			'mascota_imagen'       => [
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
			'mascota_estado'       => [
				'type'       => 'VARCHAR',
				'constraint' => '15',
				'null' => true,
			],
			'mascota_tamano'       => [
				'type'       => 'VARCHAR',
				'constraint' => '15',
				'null' => true,
			],
			
	]);
	$this->forge->addKey('mascota_id', true);
	$this->forge->addForeignKey('raza_id','raza','raza_id');
	$this->forge->addForeignKey('usuario_id','usuario','usuario_id');
	$this->forge->createTable('mascota');
	$this->db->enableForeignKeyChecks();
	}

	public function down()
	{
		$this->forge->dropTable('mascota');
	}
}
