<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\CompaniesContacts $model
 */

$this->title = 'Companies Contacts ' . $model->id . ', ' . 'Edit';
$this->params['breadcrumbs'][] = ['label' => 'Companies Contacts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Edit';
?>
<div class="companies-contacts-update">

    <p>
        <?= Html::a('<span class="glyphicon glyphicon-eye-open"></span> ' . 'View', ['view', 'id' => $model->id], ['class' => 'btn btn-info']) ?>
    </p>

	<?php echo $this->render('_form', [
		'model' => $model,
	]); ?>

</div>
