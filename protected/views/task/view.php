<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'Listar') . ' ' . $model->label(2), 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Criar') . ' ' . $model->label(), 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Atualizar') . ' ' . $model->label(), 'url'=>array('update', 'id' => $model->id)),
	array('label'=>Yii::t('app', 'Deletar') . ' ' . $model->label(), 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Gerenciar') . ' ' . $model->label(2), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Ver') . ' ' . GxHtml::encode($model->label()) . ' ' . GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'id',
'title',
array(
			'name' => 'task',
			'type' => 'raw',
			'value' => $model->task !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->task)), array('taskType/view', 'id' => GxActiveRecord::extractPkValue($model->task, true))) : null,
			),
'user',
'public:boolean',
'description',
'done:boolean',
'conclusion_date',
	),
)); ?>

