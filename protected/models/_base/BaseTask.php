<?php

/**
 * This is the model base class for the table "task".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Task".
 *
 * Columns in table "task" available as properties of the model,
 * followed by relations of table "task" available as properties of the model.
 *
 * @property integer $id
 * @property string $title
 * @property integer $task_id
 * @property integer $user
 * @property integer $public
 * @property string $description
 * @property integer $done
 * @property string $conclusion_date
 *
 * @property TaskType $task
 */
abstract class BaseTask extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'task';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Task|Tasks', $n);
	}

	public static function representingColumn() {
		return 'title';
	}

	public function rules() {
		return array(
			array('title, task_id, user, public, description, done', 'required'),
			array('task_id, user, public, done', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>255),
			array('conclusion_date', 'safe'),
			array('conclusion_date', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id, title, task_id, user, public, description, done, conclusion_date', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'task' => array(self::BELONGS_TO, 'TaskType', 'task_id'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id' => Yii::t('app', 'ID'),
			'title' => Yii::t('app', 'Title'),
			'task_id' => null,
			'user' => Yii::t('app', 'User'),
			'public' => Yii::t('app', 'Public'),
			'description' => Yii::t('app', 'Description'),
			'done' => Yii::t('app', 'Done'),
			'conclusion_date' => Yii::t('app', 'Conclusion Date'),
			'task' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('title', $this->title, true);
		$criteria->compare('task_id', $this->task_id);
		$criteria->compare('user', $this->user);
		$criteria->compare('public', $this->public);
		$criteria->compare('description', $this->description, true);
		$criteria->compare('done', $this->done);
		$criteria->compare('conclusion_date', $this->conclusion_date, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}