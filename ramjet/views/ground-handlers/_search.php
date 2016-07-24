<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\models\GroundHandlersSearch $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="ground-handlers-search">

	<?php $form = ActiveForm::begin([
		'action' => ['index'],
		'method' => 'get',
	]); ?>

		<?= $form->field($model, 'id') ?>

		<?= $form->field($model, 'Name') ?>

		<?= $form->field($model, 'Tel') ?>

		<?= $form->field($model, 'Fax') ?>

		<?= $form->field($model, 'AFTN') ?>

		<?php // echo $form->field($model, 'Type_b') ?>

		<?php // echo $form->field($model, 'Email') ?>

		<div class="form-group">
			<?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
			<?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
		</div>

	<?php ActiveForm::end(); ?>

</div>
