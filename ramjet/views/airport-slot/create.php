<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var app\models\AirportSlot $model
*/

$this->title = 'Create';
$this->params['breadcrumbs'][] = ['label' => 'Airport Slots', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="airport-slot-create">

    <p class="pull-left">
        <?= Html::a('Cancel', \yii\helpers\Url::previous(), ['class' => 'btn btn-default']) ?>
    </p>
    <div class="clearfix"></div>

    <?= $this->render('_form', [
    'model' => $model,
    ]); ?>

</div>
