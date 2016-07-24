<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use yii\widgets\DetailView;
use yii\widgets\Pjax;
use dmstr\bootstrap\Tabs;

/**
* @var yii\web\View $this
* @var app\models\AirportMaintainceCompanies $model
*/

$this->title = 'Airport Maintaince Companies ' . $model->airport_id;
$this->params['breadcrumbs'][] = ['label' => 'Airport Maintaince Companies', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->airport_id, 'url' => ['view', 'airport_id' => $model->airport_id, 'maintaince_companies_id' => $model->maintaince_companies_id]];
$this->params['breadcrumbs'][] = 'View';
?>
<div class="airport-maintaince-companies-view">

    <!-- menu buttons -->
    <p class='pull-left'>
        <?= Html::a('<span class="glyphicon glyphicon-list"></span> ' . 'List', ['index'], ['class'=>'btn btn-default']) ?>
        <?= Html::a('<span class="glyphicon glyphicon-pencil"></span> ' . 'Edit', ['update', 'airport_id' => $model->airport_id, 'maintaince_companies_id' => $model->maintaince_companies_id],['class' => 'btn btn-info']) ?>
        <?= Html::a('<span class="glyphicon glyphicon-plus"></span> ' . 'New', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <div class="clearfix"></div>

    <!-- flash message -->
    <?php if (\Yii::$app->session->getFlash('deleteError') !== null) : ?>
        <span class="alert alert-info alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <?= \Yii::$app->session->getFlash('deleteError') ?>
        </span>
    <?php endif; ?>

    <div class="panel panel-default">
        <div class="panel-heading">
                        <?= $model->airport_id ?>        </div>

        <div class="panel-body">



    <?php $this->beginBlock('app\models\AirportMaintainceCompanies'); ?>

    <?= DetailView::widget([
    'model' => $model,
    'attributes' => [
    // generated by schmunk42\giiant\crud\providers\RelationProvider::attributeFormat
[
    'format'=>'html',
    'attribute'=>'airport_id',
    'value' => ($model->getAirport()->one() ? Html::a($model->getAirport()->one()->Name, ['airports/view', 'id' => $model->getAirport()->one()->id,]) : '<span class="label label-warning">?</span>'),
],
// generated by schmunk42\giiant\crud\providers\RelationProvider::attributeFormat
[
    'format'=>'html',
    'attribute'=>'maintaince_companies_id',
    'value' => ($model->getMaintainceCompanies()->one() ? Html::a($model->getMaintainceCompanies()->one()->Name, ['maintainance-companies/view', 'id' => $model->getMaintainceCompanies()->one()->id,]) : '<span class="label label-warning">?</span>'),
],
    ],
    ]); ?>

    <hr/>

    <?= Html::a('<span class="glyphicon glyphicon-trash"></span> ' . 'Delete', ['delete', 'airport_id' => $model->airport_id, 'maintaince_companies_id' => $model->maintaince_companies_id],
    [
    'class' => 'btn btn-danger',
    'data-confirm' => '' . 'Are you sure to delete this item?' . '',
    'data-method' => 'post',
    ]); ?>
    <?php $this->endBlock(); ?>


    
    <?= Tabs::widget(
                 [
                     'id' => 'relation-tabs',
                     'encodeLabels' => false,
                     'items' => [ [
    'label'   => '<span class="glyphicon glyphicon-asterisk"></span> AirportMaintainceCompanies',
    'content' => $this->blocks['app\models\AirportMaintainceCompanies'],
    'active'  => true,
], ]
                 ]
    );
    ?>
        </div>
    </div>
</div>
