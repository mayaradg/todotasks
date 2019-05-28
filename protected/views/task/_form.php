<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'task-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'Título'); ?>
		<?php echo $form->textField($model, 'title', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'title'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'Tipo'); ?>
		<?php echo $form->dropDownList($model, 'task_id', GxHtml::listDataEx(TaskType::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'task_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'Usuário'); ?>
		<?php echo $form->textField($model, 'user'); ?>
		<?php echo $form->error($model,'user'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'Pública'); ?>
		<?php echo $form->checkBox($model, 'public'); ?>
		<?php echo $form->error($model,'public'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'Descrição'); ?>
		<?php echo $form->textArea($model, 'description'); ?>
		<?php echo $form->error($model,'description'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'Completa'); ?>
		<?php echo $form->checkBox($model, 'done'); ?>
		<?php echo $form->error($model,'done'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'Data de Conclusão'); ?>
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
		<?php echo $form->error($model,'conclusion_date'); ?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Salvar'));
$this->endWidget();
?>
</div><!-- form -->