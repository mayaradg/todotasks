<?php

class m190528_165659_create_task_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('task', array(
			'id' => 'pk',
			'title' => 'string NOT NULL',
			'task_id' => 'int NOT NULL',
			'user' => 'int NOT NULL',
			'public' => 'boolean NOT NULL',
			'description' => 'text NOT NULL',
			'done' => 'boolean NOT NULL',
			'conclusion_date' => 'date',
		));

		$this->addForeignKey('fk_task_type', 'task', 'task_id', 'task_type', 'id', 'CASCADE');
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