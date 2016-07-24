<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var app\models\CountryCompanies $model
*/

$this->title = 'Create';
$this->params['breadcrumbs'][] = ['label' => 'Country Companies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="country-companies-create">

    <p class="pull-left">
        <?= Html::a('Cancel', \yii\helpers\Url::previous(), ['class' => 'btn btn-default']) ?>
    </p>
    <div class="clearfix"></div>

    <?= $this->render('_form', [
    'model' => $model,
    ]); ?>

</div>
