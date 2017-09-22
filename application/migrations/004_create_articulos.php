<?php
class Migration_Create_articulos extends CI_Migration {

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
			'fecha' => array(
				'type' => 'DATE',
			),
			'contenido' => array(
				'type' => 'TEXT',
			),
			'_registro' => array(
				'type' => 'DATETIME',
			),
			'_modificado' => array(
				'type' => 'DATETIME',
			),			));
		$this->dbforge->add_key('id',TRUE);
		$this->dbforge->create_table('articulos');
	}

	public function down()
	{
		$this->dbforge->drop_table('articulos');
	}
}