<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\models\HotelsContactsSearch $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="hotels-contacts-search">

	<?php $form = ActiveForm::begin([
		'action' => ['index'],
		'method' => 'get',
	]); ?>

		<?= $form->field($model, 'id') ?>

		<?= $form->field($model, 'Name') ?>

		<?= $form->field($model, 'Distance') ?>

		<?= $form->field($model, 'Stars') ?>

		<?= $form->field($model, 'Tel') ?>

		<?php // echo $form->field($model, 'Fax') ?>

		<?php // echo $form->field($model, 'Email') ?>

		<div class="form-group">
			<?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
			<?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
		</div>

	<?php ActiveForm::end(); ?>

</div>
