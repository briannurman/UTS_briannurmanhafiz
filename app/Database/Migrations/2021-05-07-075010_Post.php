<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Post extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'	=>[
				'type'		=> 'INT',
				'constraint' => 5,
				'unsigned'       => true,
                'auto_increment' => true,
				'null'			 => false
			],
			'userid'	=>[
				'type'	=> 'INT',
				'constraint'	=>5,
				'null'			 => false
			],
			'title'		=>[
				'type'	=>'TEXT',
				'null'			 => false
			],
			'body'	=>[
				'type'	=>"TEXT",
				'null'			 => false
			],
			'gambar'	=>[
				'type'	=>'TEXT',
				'null'			 => false
			],
		]);
			$this->forge->addKey('id');
		$this->forge->createTable('Table_post');
	}

	public function down()
	{
		$this->forge->dropTable('Table_post');
	}
}
