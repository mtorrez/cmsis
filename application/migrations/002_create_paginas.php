<?php
class Migration_Create_paginas extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'titulo' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),
			'slug' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),
			'orden' => array(
				'type' => 'int',
				'constraint' => '11',
			),
			'id_padre' => array(
				'type' => 'int',
				'constraint' => '11',
			),
			'plantilla' => array(
				'type' => 'VARCHAR',
				'constraint' => '50',
			),
			'contenido' => array(
				'type' => 'text',
			),
		));
		$this->dbforge->add_key('id',TRUE);
		$this->dbforge->create_table('paginas');
	}

	public function down()
	{
		$this->dbforge->drop_table('paginas');
	}
}