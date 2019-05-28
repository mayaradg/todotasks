<?php

class m190528_143029_create_task_type_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('task_type', array(
			'id' => 'pk',
			'name' => 'string NOT NULL',
		));
	}

	public function down()
	{
		$this->dropTable('task_type');
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}