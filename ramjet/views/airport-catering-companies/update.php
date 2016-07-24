<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\AirportCateringCompanies $model
 */

$this->title = 'Airport Catering Companies ' . $model->airport_id . ', ' . 'Edit';
$this->params['breadcrumbs'][] = ['label' => 'Airport Catering Companies', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->airport_id, 'url' => ['view', 'airport_id' => $model->airport_id, 'catering_companies_id' => $model->catering_companies_id]];
$this->params['breadcrumbs'][] = 'Edit';
?>
<div class="airport-catering-companies-update">

    <p>
        <?= Html::a('<span class="glyphicon glyphicon-eye-open"></span> ' . 'View', ['view', 'airport_id' => $model->airport_id, 'catering_companies_id' => $model->catering_companies_id], ['class' => 'btn btn-info']) ?>
    </p>

	<?php echo $this->render('_form', [
		'model' => $model,
	]); ?>

</div>
