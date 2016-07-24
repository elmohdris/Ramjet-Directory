<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var app\models\CountryCaa $model
*/

$this->title = 'Create';
$this->params['breadcrumbs'][] = ['label' => 'Country Caas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="country-caa-create">

    <p class="pull-left">
        <?= Html::a('Cancel', \yii\helpers\Url::previous(), ['class' => 'btn btn-default']) ?>
    </p>
    <div class="clearfix"></div>

    <?= $this->render('_form', [
    'model' => $model,
    ]); ?>

</div>
