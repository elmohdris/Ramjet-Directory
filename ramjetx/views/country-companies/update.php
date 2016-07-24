<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\CountryCompanies $model
 */

$this->title = 'Country Companies ' . $model->id . ', ' . 'Edit';
$this->params['breadcrumbs'][] = ['label' => 'Country Companies', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Edit';
?>
<div class="country-companies-update">

    <p>
        <?= Html::a('<span class="glyphicon glyphicon-eye-open"></span> ' . 'View', ['view', 'id' => $model->id], ['class' => 'btn btn-info']) ?>
    </p>

	<?php echo $this->render('_form', [
		'model' => $model,
	]); ?>

</div>
