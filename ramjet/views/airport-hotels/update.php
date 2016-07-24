<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\AirportHotels $model
 */

$this->title = 'Airport Hotels ' . $model->airport_id . ', ' . 'Edit';
$this->params['breadcrumbs'][] = ['label' => 'Airport Hotels', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->airport_id, 'url' => ['view', 'airport_id' => $model->airport_id, 'hotels_id' => $model->hotels_id]];
$this->params['breadcrumbs'][] = 'Edit';
?>
<div class="airport-hotels-update">

    <p>
        <?= Html::a('<span class="glyphicon glyphicon-eye-open"></span> ' . 'View', ['view', 'airport_id' => $model->airport_id, 'hotels_id' => $model->hotels_id], ['class' => 'btn btn-info']) ?>
    </p>

	<?php echo $this->render('_form', [
		'model' => $model,
	]); ?>

</div>
