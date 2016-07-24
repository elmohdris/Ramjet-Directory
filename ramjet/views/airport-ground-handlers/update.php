<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\AirportGroundHandlers $model
 */

$this->title = 'Airport Ground Handlers ' . $model->airport_id . ', ' . 'Edit';
$this->params['breadcrumbs'][] = ['label' => 'Airport Ground Handlers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->airport_id, 'url' => ['view', 'airport_id' => $model->airport_id, 'ground_handlers_id' => $model->ground_handlers_id]];
$this->params['breadcrumbs'][] = 'Edit';
?>
<div class="airport-ground-handlers-update">

    <p>
        <?= Html::a('<span class="glyphicon glyphicon-eye-open"></span> ' . 'View', ['view', 'airport_id' => $model->airport_id, 'ground_handlers_id' => $model->ground_handlers_id], ['class' => 'btn btn-info']) ?>
    </p>

	<?php echo $this->render('_form', [
		'model' => $model,
	]); ?>

</div>
