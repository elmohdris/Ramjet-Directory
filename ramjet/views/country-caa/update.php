<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\CountryCaa $model
 */

$this->title = 'Country Caa ' . $model->country_id . ', ' . 'Edit';
$this->params['breadcrumbs'][] = ['label' => 'Country Caas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->country_id, 'url' => ['view', 'country_id' => $model->country_id, 'caa_id' => $model->caa_id]];
$this->params['breadcrumbs'][] = 'Edit';
?>
<div class="country-caa-update">

    <p>
        <?= Html::a('<span class="glyphicon glyphicon-eye-open"></span> ' . 'View', ['view', 'country_id' => $model->country_id, 'caa_id' => $model->caa_id], ['class' => 'btn btn-info']) ?>
    </p>

	<?php echo $this->render('_form', [
		'model' => $model,
	]); ?>

</div>
