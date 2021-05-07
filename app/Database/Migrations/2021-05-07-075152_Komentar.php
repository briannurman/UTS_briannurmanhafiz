<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Komentar extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'	=>[
				'type'		=> 'INT',
				'constraint' => 5,
			],
			'postid'	=>[
				'type'	=> 'INT',
				'constraint'	=>5,
			],
			'name'		=>[
				'type'	=>'TEXT',
			],
			'email'	=>[
				'type'	=>"TEXT",
			],
			'body'	=>[
				'type'	=>'TEXT'
			],
		]);
			$this->forge->addKey('id');
		$this->forge->createTable('Table_komentar');
	}

	public function down()
	{
		$this->forge->dropTable('Table_komentar');
	}
}
