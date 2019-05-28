<?php

class m190528_165659_create_task_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('task', array(
			'id' => 'pk',
			'title' => 'string NOT NULL',
			'user' => '',
			'public' => '',
			'description' => '',
			'type' => '',
			'done' => '',
			'conclusion_date' => '',
		));
	}

	public function down()
	{
		$this->dropTable('task');
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