<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var app\models\HotelsContacts $model
*/

$this->title = 'Create';
$this->params['breadcrumbs'][] = ['label' => 'Hotels Contacts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hotels-contacts-create">

    <p class="pull-left">
        <?= Html::a('Cancel', \yii\helpers\Url::previous(), ['class' => 'btn btn-default']) ?>
    </p>
    <div class="clearfix"></div>

    <?= $this->render('_form', [
    'model' => $model,
    ]); ?>

</div>
