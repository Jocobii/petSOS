<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tipoapoyo extends Migration
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
			'monto'       => [
					'type'       => 'INT',
					'constraint' => '5',
					'null' => true,
			],
			'viveres'       => [
				'type'       => 'VARCHAR',
				'constraint' => '150',
				'null' => true,
		],
	]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('tipoapoyo');
	}

	public function down()
	{
		$this->forge->dropTable('tipoapoyo');
	}
}
