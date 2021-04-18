<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Usuario extends Migration
{
	public function up()
	{
		$this->db->disableForeignKeyChecks();

		$this->forge->addField([
			'usuario_id'          => [
					'type'           => 'INT',
					'constraint'     => 5,
					'unsigned'       => true,
					'auto_increment' => true,
					'null' => false,
			],
			'nombre_usuario'       => [
					'type'       => 'VARCHAR',
					'constraint' => '30',
					'null' => true,
			],
			'nombre'       => [
				'type'       => 'VARCHAR',
				'constraint' => '150',
				'null' => true,
			],
			'apellido'       => [
				'type'       => 'VARCHAR',
				'constraint' => '150',
				'null' => true,
			],
			'correo'       => [
				'type'       => 'VARCHAR',
				'constraint' => '150',
				'null' => true,
			],
			'contrasena'       => [
				'type'       => 'VARCHAR',
				'constraint' => '150',
				'null' => true,
			],
			'tipo_usuario'       => [
				'type'           => 'INT',
					'constraint'     => 5,
					'unsigned'       => true,
					'null' => false,
			],
			'estado'       => [
				'type'       => 'CHAR',
				'constraint' => '1',
				'null' => true,
			],
	]);
		$this->forge->addKey('usuario_id', true);
		$this->forge->addForeignKey('tipo_usuario','tipousuario','tipoUsuario_id');
		$this->forge->createTable('usuario');

		$this->db->enableForeignKeyChecks();
	}

	public function down()
	{
		$this->forge->dropTable('usuario');
	}
}
