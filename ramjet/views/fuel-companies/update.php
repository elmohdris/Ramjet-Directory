<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\FuelCompanies $model
 */

$this->title = 'Fuel Companies ' . $model->Name . ', ' . 'Edit';
$this->params['breadcrumbs'][] = ['label' => 'Fuel Companies', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->Name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Edit';
?>
<div class="fuel-companies-update">

    <p>
        <?= Html::a('<span class="glyphicon glyphicon-eye-open"></span> ' . 'View', ['view', 'id' => $model->id], ['class' => 'btn btn-info']) ?>
    </p>

	<?php echo $this->render('_form', [
		'model' => $model,
	]); ?>

</div>
