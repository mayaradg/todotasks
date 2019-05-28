<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'id'); ?>
		<?php echo $form->textField($model, 'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'Título'); ?>
		<?php echo $form->textField($model, 'title', array('maxlength' => 255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'Tipo'); ?>
		<?php echo $form->dropDownList($model, 'task_id', GxHtml::listDataEx(TaskType::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'Usuário'); ?>
		<?php echo $form->textField($model, 'user'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'Pública'); ?>
		<?php echo $form->dropDownList($model, 'public', array('0' => Yii::t('app', 'No'), '1' => Yii::t('app', 'Yes')), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'Descrição'); ?>
		<?php echo $form->textArea($model, 'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'Completa'); ?>
		<?php echo $form->dropDownList($model, 'done', array('0' => Yii::t('app', 'No'), '1' => Yii::t('app', 'Yes')), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'Data de Conclusão'); ?>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'conclusion_date',
			'value' => $model->conclusion_date,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Buscar')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
