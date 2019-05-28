<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('Título')); ?>:
	<?php echo GxHtml::encode($data->title); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('Tipo')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->task)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('Usuário')); ?>:
	<?php echo GxHtml::encode($data->user); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('Pública')); ?>:
	<?php echo GxHtml::encode($data->public); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('Descrição')); ?>:
	<?php echo GxHtml::encode($data->description); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('Completa')); ?>:
	<?php echo GxHtml::encode($data->done); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('conclusion_date')); ?>:
	<?php echo GxHtml::encode($data->conclusion_date); ?>
	<br />
	*/ ?>

</div>