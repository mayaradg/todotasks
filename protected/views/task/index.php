<?php

$this->breadcrumbs = array(
	Task::label(2),
	Yii::t('app', 'Listar'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Criar') . ' ' . Task::label(), 'url' => array('create')),
	array('label'=>Yii::t('app', 'Gerenciar') . ' ' . Task::label(2), 'url' => array('admin')),
);
?>

<h1><?php echo GxHtml::encode(Task::label(2)); ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 