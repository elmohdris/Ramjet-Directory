<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\HotelsContacts $model
 */

$this->title = 'Hotels Contacts ' . $model->Name . ', ' . 'Edit';
$this->params['breadcrumbs'][] = ['label' => 'Hotels Contacts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->Name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Edit';
?>
<div class="hotels-contacts-update">

    <p>
        <?= Html::a('<span class="glyphicon glyphicon-eye-open"></span> ' . 'View', ['view', 'id' => $model->id], ['class' => 'btn btn-info']) ?>
    </p>

	<?php echo $this->render('_form', [
		'model' => $model,
	]); ?>

</div>
