<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\AirportFbo $model
 */

$this->title = 'Airport Fbo ' . $model->airport_id . ', ' . 'Edit';
$this->params['breadcrumbs'][] = ['label' => 'Airport Fbos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->airport_id, 'url' => ['view', 'airport_id' => $model->airport_id, 'fbo_id' => $model->fbo_id]];
$this->params['breadcrumbs'][] = 'Edit';
?>
<div class="airport-fbo-update">

    <p>
        <?= Html::a('<span class="glyphicon glyphicon-eye-open"></span> ' . 'View', ['view', 'airport_id' => $model->airport_id, 'fbo_id' => $model->fbo_id], ['class' => 'btn btn-info']) ?>
    </p>

	<?php echo $this->render('_form', [
		'model' => $model,
	]); ?>

</div>
