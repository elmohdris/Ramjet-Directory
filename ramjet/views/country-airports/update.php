<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\CountryAirports $model
 */

$this->title = 'Country Airports ' . $model->airport_id . ', ' . 'Edit';
$this->params['breadcrumbs'][] = ['label' => 'Country Airports', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->airport_id, 'url' => ['view', 'airport_id' => $model->airport_id, 'country_id' => $model->country_id]];
$this->params['breadcrumbs'][] = 'Edit';
?>
<div class="country-airports-update">

    <p>
        <?= Html::a('<span class="glyphicon glyphicon-eye-open"></span> ' . 'View', ['view', 'airport_id' => $model->airport_id, 'country_id' => $model->country_id], ['class' => 'btn btn-info']) ?>
    </p>

	<?php echo $this->render('_form', [
		'model' => $model,
	]); ?>

</div>
