<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Adopcionsolicitud extends Migration
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
			'telefono_casa'       => [
					'type'       => 'VARCHAR',
					'constraint' => '10',
			],
			'telefono_celular'       => [
				'type'       => 'VARCHAR',
				'constraint' => '10',
			],
			'tipo_vivienda'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'null' => false,
			],
			'fecha_solicitud'          => [
				'type'           => 'DATE',
				'null' => false,
			],
			'estadosolicitud'          => [
				'type'           => 'INT',
					'constraint'     => 5,
					'unsigned'       => true,
					'null' => false,
			],
			'mascota_id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
			],
			'usuario_id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'null' => false,
			],
			'propietario_id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'null' => false,
			],
			'direccion_id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'null' => false,
		],
	]);
	$this->forge->addKey('id', true);
	$this->forge->addForeignKey('tipo_vivienda','tipovivienda','id');
	$this->forge->addForeignKey('mascota_id','mascota','mascota_id');
	$this->forge->addForeignKey('usuario_id','usuario','usuario_id');
	$this->forge->addForeignKey('propietario_id','usuario','usuario_id');
	$this->forge->addForeignKey('direccion_id','direccion','direccion_id');

	$this->forge->createTable('adopcionsolicitud');
	$this->db->enableForeignKeyChecks();
	}

	public function down()
	{
		$this->forge->dropTable('adopcionsolicitud');
	}
}
