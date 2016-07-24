<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var app\models\AirportHotels $model
*/

$this->title = 'Create';
$this->params['breadcrumbs'][] = ['label' => 'Airport Hotels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="airport-hotels-create">

    <p class="pull-left">
        <?= Html::a('Cancel', \yii\helpers\Url::previous(), ['class' => 'btn btn-default']) ?>
    </p>
    <div class="clearfix"></div>

    <?= $this->render('_form', [
    'model' => $model,
    ]); ?>

</div>
