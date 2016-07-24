<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use yii\widgets\DetailView;
use yii\widgets\Pjax;
use dmstr\bootstrap\Tabs;

/**
* @var yii\web\View $this
* @var app\models\Airports $model
*/

$this->title = 'Airports ' . $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Airports', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->Name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'View';
?>
<div class="airports-view">

    <!-- menu buttons -->
    <p class='pull-left'>
        <?= Html::a('<span class="glyphicon glyphicon-list"></span> ' . 'List', ['index'], ['class'=>'btn btn-default']) ?>
        <?= Html::a('<span class="glyphicon glyphicon-pencil"></span> ' . 'Edit', ['update', 'id' => $model->id],['class' => 'btn btn-info']) ?>
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
                        <?= $model->Name ?>        </div>

        <div class="panel-body">



    <?php $this->beginBlock('app\models\Airports'); ?>

    <?= DetailView::widget([
    'model' => $model,
    'attributes' => [
    			'id',
			'Name',
			'Tel',
			'Fax',
			'AFTN',
			'Type_b',
			'Email:email',
    ],
    ]); ?>

    <hr/>

    <?= Html::a('<span class="glyphicon glyphicon-trash"></span> ' . 'Delete', ['delete', 'id' => $model->id],
    [
    'class' => 'btn btn-danger',
    'data-confirm' => '' . 'Are you sure to delete this item?' . '',
    'data-method' => 'post',
    ]); ?>
    <?php $this->endBlock(); ?>


    
<?php $this->beginBlock('CateringCompanies'); ?>
<div style='position: relative'><div style='position:absolute; right: 0px; top 0px;'>
  <?= Html::a(
            '<span class="glyphicon glyphicon-list"></span> ' . 'List All' . ' Catering Companies',
            ['catering-companies/index'],
            ['class'=>'btn text-muted btn-xs']
        ) ?>
  <?= Html::a(
            '<span class="glyphicon glyphicon-plus"></span> ' . 'New' . ' Catering Company',
            ['catering-companies/create', 'CateringCompany' => ['id' => $model->id]],
            ['class'=>'btn btn-success btn-xs']
        ); ?>
  <?= Html::a(
            '<span class="glyphicon glyphicon-link"></span> ' . 'Attach' . ' Catering Company', ['airport-catering-companies/create', 'AirportCateringCompany'=>['airport_id'=>$model->id]],
            ['class'=>'btn btn-info btn-xs']
        ) ?>
</div></div><?php Pjax::begin(['id'=>'pjax-CateringCompanies', 'enableReplaceState'=> false, 'linkSelector'=>'#pjax-CateringCompanies ul.pagination a, th a', 'clientOptions' => ['pjax:success'=>'function(){alert("yo")}']]) ?>
<?= '<div class="table-responsive">'.\yii\grid\GridView::widget([
    'layout' => '{summary}{pager}<br/>{items}{pager}',
    'dataProvider' => new \yii\data\ActiveDataProvider(['query' => $model->getAirportCateringCompanies(), 'pagination' => ['pageSize' => 20, 'pageParam'=>'page-airportcateringcompanies']]),
    'pager'        => [
        'class'          => yii\widgets\LinkPager::className(),
        'firstPageLabel' => 'First',
        'lastPageLabel'  => 'Last'
    ],
    'columns' => [[
    'class'      => 'yii\grid\ActionColumn',
    'template'   => '{view} {delete}',
    'contentOptions' => ['nowrap'=>'nowrap'],
    'urlCreator' => function($action, $model, $key, $index) {
        // using the column name as key, not mapping to 'id' like the standard generator
        $params = is_array($key) ? $key : [$model->primaryKey()[0] => (string) $key];
        $params[0] = 'airport-catering-companies' . '/' . $action;
        return Url::toRoute($params);
    },
    'buttons'    => [
        'delete' => function ($url, $model) {
                return yii\helpers\Html::a('<span class="glyphicon glyphicon-remove"></span>', $url, [
                    'class' => 'text-danger',
                    'title'         => 'Remove',
                    'data-confirm'  => 'Are you sure you want to delete the related item?',
                    'data-method' => 'post',
                    'data-pjax' => '0',
                ]);
            },
'view' => function ($url, $model) {
                return yii\helpers\Html::a(
                    '<span class="glyphicon glyphicon-cog"></span>',
                    $url,
                    [
                        'data-title'  => 'View Pivot Record',
                        'data-toggle' => 'tooltip',
                        'data-pjax'   => '0',
                        'class'       => 'text-muted',
                    ]
                );
            },
    ],
    'controller' => 'airport-catering-companies'
],// generated by schmunk42\giiant\crud\providers\RelationProvider::columnFormat
[
            "class" => yii\grid\DataColumn::className(),
            "attribute" => "catering_companies_id",
            "value" => function($model){
                if ($rel = $model->getCateringCompanies()->one()) {
                    return yii\helpers\Html::a($rel->Name,["catering-companies/view", 'id' => $rel->id,],["data-pjax"=>0]);
                } else {
                    return '';
                }
            },
            "format" => "raw",
],
]
]).'</div>'?>
<?php Pjax::end() ?>
<?php $this->endBlock() ?>


<?php $this->beginBlock('Fbos'); ?>
<div style='position: relative'><div style='position:absolute; right: 0px; top 0px;'>
  <?= Html::a(
            '<span class="glyphicon glyphicon-list"></span> ' . 'List All' . ' Fbos',
            ['fbo/index'],
            ['class'=>'btn text-muted btn-xs']
        ) ?>
  <?= Html::a(
            '<span class="glyphicon glyphicon-plus"></span> ' . 'New' . ' Fbo',
            ['fbo/create', 'Fbo' => ['id' => $model->id]],
            ['class'=>'btn btn-success btn-xs']
        ); ?>
  <?= Html::a(
            '<span class="glyphicon glyphicon-link"></span> ' . 'Attach' . ' Fbo', ['airport-fbo/create', 'AirportFbo'=>['airport_id'=>$model->id]],
            ['class'=>'btn btn-info btn-xs']
        ) ?>
</div></div><?php Pjax::begin(['id'=>'pjax-Fbos', 'enableReplaceState'=> false, 'linkSelector'=>'#pjax-Fbos ul.pagination a, th a', 'clientOptions' => ['pjax:success'=>'function(){alert("yo")}']]) ?>
<?= '<div class="table-responsive">'.\yii\grid\GridView::widget([
    'layout' => '{summary}{pager}<br/>{items}{pager}',
    'dataProvider' => new \yii\data\ActiveDataProvider(['query' => $model->getAirportFbos(), 'pagination' => ['pageSize' => 20, 'pageParam'=>'page-airportfbos']]),
    'pager'        => [
        'class'          => yii\widgets\LinkPager::className(),
        'firstPageLabel' => 'First',
        'lastPageLabel'  => 'Last'
    ],
    'columns' => [[
    'class'      => 'yii\grid\ActionColumn',
    'template'   => '{view} {delete}',
    'contentOptions' => ['nowrap'=>'nowrap'],
    'urlCreator' => function($action, $model, $key, $index) {
        // using the column name as key, not mapping to 'id' like the standard generator
        $params = is_array($key) ? $key : [$model->primaryKey()[0] => (string) $key];
        $params[0] = 'airport-fbo' . '/' . $action;
        return Url::toRoute($params);
    },
    'buttons'    => [
        'delete' => function ($url, $model) {
                return yii\helpers\Html::a('<span class="glyphicon glyphicon-remove"></span>', $url, [
                    'class' => 'text-danger',
                    'title'         => 'Remove',
                    'data-confirm'  => 'Are you sure you want to delete the related item?',
                    'data-method' => 'post',
                    'data-pjax' => '0',
                ]);
            },
'view' => function ($url, $model) {
                return yii\helpers\Html::a(
                    '<span class="glyphicon glyphicon-cog"></span>',
                    $url,
                    [
                        'data-title'  => 'View Pivot Record',
                        'data-toggle' => 'tooltip',
                        'data-pjax'   => '0',
                        'class'       => 'text-muted',
                    ]
                );
            },
    ],
    'controller' => 'airport-fbo'
],// generated by schmunk42\giiant\crud\providers\RelationProvider::columnFormat
[
            "class" => yii\grid\DataColumn::className(),
            "attribute" => "fbo_id",
            "value" => function($model){
                if ($rel = $model->getFbo()->one()) {
                    return yii\helpers\Html::a($rel->Name,["fbo/view", 'id' => $rel->id,],["data-pjax"=>0]);
                } else {
                    return '';
                }
            },
            "format" => "raw",
],
]
]).'</div>'?>
<?php Pjax::end() ?>
<?php $this->endBlock() ?>


<?php $this->beginBlock('FuelCompanies'); ?>
<div style='position: relative'><div style='position:absolute; right: 0px; top 0px;'>
  <?= Html::a(
            '<span class="glyphicon glyphicon-list"></span> ' . 'List All' . ' Fuel Companies',
            ['fuel-companies/index'],
            ['class'=>'btn text-muted btn-xs']
        ) ?>
  <?= Html::a(
            '<span class="glyphicon glyphicon-plus"></span> ' . 'New' . ' Fuel Company',
            ['fuel-companies/create', 'FuelCompany' => ['id' => $model->id]],
            ['class'=>'btn btn-success btn-xs']
        ); ?>
  <?= Html::a(
            '<span class="glyphicon glyphicon-link"></span> ' . 'Attach' . ' Fuel Company', ['airport-fuel-companies/create', 'AirportFuelCompany'=>['airport_id'=>$model->id]],
            ['class'=>'btn btn-info btn-xs']
        ) ?>
</div></div><?php Pjax::begin(['id'=>'pjax-FuelCompanies', 'enableReplaceState'=> false, 'linkSelector'=>'#pjax-FuelCompanies ul.pagination a, th a', 'clientOptions' => ['pjax:success'=>'function(){alert("yo")}']]) ?>
<?= '<div class="table-responsive">'.\yii\grid\GridView::widget([
    'layout' => '{summary}{pager}<br/>{items}{pager}',
    'dataProvider' => new \yii\data\ActiveDataProvider(['query' => $model->getAirportFuelCompanies(), 'pagination' => ['pageSize' => 20, 'pageParam'=>'page-airportfuelcompanies']]),
    'pager'        => [
        'class'          => yii\widgets\LinkPager::className(),
        'firstPageLabel' => 'First',
        'lastPageLabel'  => 'Last'
    ],
    'columns' => [[
    'class'      => 'yii\grid\ActionColumn',
    'template'   => '{view} {delete}',
    'contentOptions' => ['nowrap'=>'nowrap'],
    'urlCreator' => function($action, $model, $key, $index) {
        // using the column name as key, not mapping to 'id' like the standard generator
        $params = is_array($key) ? $key : [$model->primaryKey()[0] => (string) $key];
        $params[0] = 'airport-fuel-companies' . '/' . $action;
        return Url::toRoute($params);
    },
    'buttons'    => [
        'delete' => function ($url, $model) {
                return yii\helpers\Html::a('<span class="glyphicon glyphicon-remove"></span>', $url, [
                    'class' => 'text-danger',
                    'title'         => 'Remove',
                    'data-confirm'  => 'Are you sure you want to delete the related item?',
                    'data-method' => 'post',
                    'data-pjax' => '0',
                ]);
            },
'view' => function ($url, $model) {
                return yii\helpers\Html::a(
                    '<span class="glyphicon glyphicon-cog"></span>',
                    $url,
                    [
                        'data-title'  => 'View Pivot Record',
                        'data-toggle' => 'tooltip',
                        'data-pjax'   => '0',
                        'class'       => 'text-muted',
                    ]
                );
            },
    ],
    'controller' => 'airport-fuel-companies'
],// generated by schmunk42\giiant\crud\providers\RelationProvider::columnFormat
[
            "class" => yii\grid\DataColumn::className(),
            "attribute" => "fuel_companies_id",
            "value" => function($model){
                if ($rel = $model->getFuelCompanies()->one()) {
                    return yii\helpers\Html::a($rel->Name,["fuel-companies/view", 'id' => $rel->id,],["data-pjax"=>0]);
                } else {
                    return '';
                }
            },
            "format" => "raw",
],
]
]).'</div>'?>
<?php Pjax::end() ?>
<?php $this->endBlock() ?>


<?php $this->beginBlock('GroundHandlers'); ?>
<div style='position: relative'><div style='position:absolute; right: 0px; top 0px;'>
  <?= Html::a(
            '<span class="glyphicon glyphicon-list"></span> ' . 'List All' . ' Ground Handlers',
            ['ground-handlers/index'],
            ['class'=>'btn text-muted btn-xs']
        ) ?>
  <?= Html::a(
            '<span class="glyphicon glyphicon-plus"></span> ' . 'New' . ' Ground Handler',
            ['ground-handlers/create', 'GroundHandler' => ['id' => $model->id]],
            ['class'=>'btn btn-success btn-xs']
        ); ?>
  <?= Html::a(
            '<span class="glyphicon glyphicon-link"></span> ' . 'Attach' . ' Ground Handler', ['airport-ground-handlers/create', 'AirportGroundHandler'=>['airport_id'=>$model->id]],
            ['class'=>'btn btn-info btn-xs']
        ) ?>
</div></div><?php Pjax::begin(['id'=>'pjax-GroundHandlers', 'enableReplaceState'=> false, 'linkSelector'=>'#pjax-GroundHandlers ul.pagination a, th a', 'clientOptions' => ['pjax:success'=>'function(){alert("yo")}']]) ?>
<?= '<div class="table-responsive">'.\yii\grid\GridView::widget([
    'layout' => '{summary}{pager}<br/>{items}{pager}',
    'dataProvider' => new \yii\data\ActiveDataProvider(['query' => $model->getAirportGroundHandlers(), 'pagination' => ['pageSize' => 20, 'pageParam'=>'page-airportgroundhandlers']]),
    'pager'        => [
        'class'          => yii\widgets\LinkPager::className(),
        'firstPageLabel' => 'First',
        'lastPageLabel'  => 'Last'
    ],
    'columns' => [[
    'class'      => 'yii\grid\ActionColumn',
    'template'   => '{view} {delete}',
    'contentOptions' => ['nowrap'=>'nowrap'],
    'urlCreator' => function($action, $model, $key, $index) {
        // using the column name as key, not mapping to 'id' like the standard generator
        $params = is_array($key) ? $key : [$model->primaryKey()[0] => (string) $key];
        $params[0] = 'airport-ground-handlers' . '/' . $action;
        return Url::toRoute($params);
    },
    'buttons'    => [
        'delete' => function ($url, $model) {
                return yii\helpers\Html::a('<span class="glyphicon glyphicon-remove"></span>', $url, [
                    'class' => 'text-danger',
                    'title'         => 'Remove',
                    'data-confirm'  => 'Are you sure you want to delete the related item?',
                    'data-method' => 'post',
                    'data-pjax' => '0',
                ]);
            },
'view' => function ($url, $model) {
                return yii\helpers\Html::a(
                    '<span class="glyphicon glyphicon-cog"></span>',
                    $url,
                    [
                        'data-title'  => 'View Pivot Record',
                        'data-toggle' => 'tooltip',
                        'data-pjax'   => '0',
                        'class'       => 'text-muted',
                    ]
                );
            },
    ],
    'controller' => 'airport-ground-handlers'
],// generated by schmunk42\giiant\crud\providers\RelationProvider::columnFormat
[
            "class" => yii\grid\DataColumn::className(),
            "attribute" => "ground_handlers_id",
            "value" => function($model){
                if ($rel = $model->getGroundHandlers()->one()) {
                    return yii\helpers\Html::a($rel->Name,["ground-handlers/view", 'id' => $rel->id,],["data-pjax"=>0]);
                } else {
                    return '';
                }
            },
            "format" => "raw",
],
]
]).'</div>'?>
<?php Pjax::end() ?>
<?php $this->endBlock() ?>


<?php $this->beginBlock('Hotels'); ?>
<div style='position: relative'><div style='position:absolute; right: 0px; top 0px;'>
  <?= Html::a(
            '<span class="glyphicon glyphicon-list"></span> ' . 'List All' . ' Hotels',
            ['hotels/index'],
            ['class'=>'btn text-muted btn-xs']
        ) ?>
  <?= Html::a(
            '<span class="glyphicon glyphicon-plus"></span> ' . 'New' . ' Hotel',
            ['hotels/create', 'Hotel' => ['id' => $model->id]],
            ['class'=>'btn btn-success btn-xs']
        ); ?>
  <?= Html::a(
            '<span class="glyphicon glyphicon-link"></span> ' . 'Attach' . ' Hotel', ['airport-hotels/create', 'AirportHotel'=>['airport_id'=>$model->id]],
            ['class'=>'btn btn-info btn-xs']
        ) ?>
</div></div><?php Pjax::begin(['id'=>'pjax-Hotels', 'enableReplaceState'=> false, 'linkSelector'=>'#pjax-Hotels ul.pagination a, th a', 'clientOptions' => ['pjax:success'=>'function(){alert("yo")}']]) ?>
<?= '<div class="table-responsive">'.\yii\grid\GridView::widget([
    'layout' => '{summary}{pager}<br/>{items}{pager}',
    'dataProvider' => new \yii\data\ActiveDataProvider(['query' => $model->getAirportHotels(), 'pagination' => ['pageSize' => 20, 'pageParam'=>'page-airporthotels']]),
    'pager'        => [
        'class'          => yii\widgets\LinkPager::className(),
        'firstPageLabel' => 'First',
        'lastPageLabel'  => 'Last'
    ],
    'columns' => [[
    'class'      => 'yii\grid\ActionColumn',
    'template'   => '{view} {delete}',
    'contentOptions' => ['nowrap'=>'nowrap'],
    'urlCreator' => function($action, $model, $key, $index) {
        // using the column name as key, not mapping to 'id' like the standard generator
        $params = is_array($key) ? $key : [$model->primaryKey()[0] => (string) $key];
        $params[0] = 'airport-hotels' . '/' . $action;
        return Url::toRoute($params);
    },
    'buttons'    => [
        'delete' => function ($url, $model) {
                return yii\helpers\Html::a('<span class="glyphicon glyphicon-remove"></span>', $url, [
                    'class' => 'text-danger',
                    'title'         => 'Remove',
                    'data-confirm'  => 'Are you sure you want to delete the related item?',
                    'data-method' => 'post',
                    'data-pjax' => '0',
                ]);
            },
'view' => function ($url, $model) {
                return yii\helpers\Html::a(
                    '<span class="glyphicon glyphicon-cog"></span>',
                    $url,
                    [
                        'data-title'  => 'View Pivot Record',
                        'data-toggle' => 'tooltip',
                        'data-pjax'   => '0',
                        'class'       => 'text-muted',
                    ]
                );
            },
    ],
    'controller' => 'airport-hotels'
],// generated by schmunk42\giiant\crud\providers\RelationProvider::columnFormat
[
            "class" => yii\grid\DataColumn::className(),
            "attribute" => "hotels_id",
            "value" => function($model){
                if ($rel = $model->getHotels()->one()) {
                    return yii\helpers\Html::a($rel->Name,["hotels/view", 'id' => $rel->id,],["data-pjax"=>0]);
                } else {
                    return '';
                }
            },
            "format" => "raw",
],
]
]).'</div>'?>
<?php Pjax::end() ?>
<?php $this->endBlock() ?>


<?php $this->beginBlock('MaintainceCompanies'); ?>
<div style='position: relative'><div style='position:absolute; right: 0px; top 0px;'>
  <?= Html::a(
            '<span class="glyphicon glyphicon-list"></span> ' . 'List All' . ' Maintaince Companies',
            ['maintainance-companies/index'],
            ['class'=>'btn text-muted btn-xs']
        ) ?>
  <?= Html::a(
            '<span class="glyphicon glyphicon-plus"></span> ' . 'New' . ' Maintaince Company',
            ['maintainance-companies/create', 'MaintainceCompany' => ['id' => $model->id]],
            ['class'=>'btn btn-success btn-xs']
        ); ?>
  <?= Html::a(
            '<span class="glyphicon glyphicon-link"></span> ' . 'Attach' . ' Maintaince Company', ['airport-maintaince-companies/create', 'AirportMaintainceCompany'=>['airport_id'=>$model->id]],
            ['class'=>'btn btn-info btn-xs']
        ) ?>
</div></div><?php Pjax::begin(['id'=>'pjax-MaintainceCompanies', 'enableReplaceState'=> false, 'linkSelector'=>'#pjax-MaintainceCompanies ul.pagination a, th a', 'clientOptions' => ['pjax:success'=>'function(){alert("yo")}']]) ?>
<?= '<div class="table-responsive">'.\yii\grid\GridView::widget([
    'layout' => '{summary}{pager}<br/>{items}{pager}',
    'dataProvider' => new \yii\data\ActiveDataProvider(['query' => $model->getAirportMaintainceCompanies(), 'pagination' => ['pageSize' => 20, 'pageParam'=>'page-airportmaintaincecompanies']]),
    'pager'        => [
        'class'          => yii\widgets\LinkPager::className(),
        'firstPageLabel' => 'First',
        'lastPageLabel'  => 'Last'
    ],
    'columns' => [[
    'class'      => 'yii\grid\ActionColumn',
    'template'   => '{view} {delete}',
    'contentOptions' => ['nowrap'=>'nowrap'],
    'urlCreator' => function($action, $model, $key, $index) {
        // using the column name as key, not mapping to 'id' like the standard generator
        $params = is_array($key) ? $key : [$model->primaryKey()[0] => (string) $key];
        $params[0] = 'airport-maintaince-companies' . '/' . $action;
        return Url::toRoute($params);
    },
    'buttons'    => [
        'delete' => function ($url, $model) {
                return yii\helpers\Html::a('<span class="glyphicon glyphicon-remove"></span>', $url, [
                    'class' => 'text-danger',
                    'title'         => 'Remove',
                    'data-confirm'  => 'Are you sure you want to delete the related item?',
                    'data-method' => 'post',
                    'data-pjax' => '0',
                ]);
            },
'view' => function ($url, $model) {
                return yii\helpers\Html::a(
                    '<span class="glyphicon glyphicon-cog"></span>',
                    $url,
                    [
                        'data-title'  => 'View Pivot Record',
                        'data-toggle' => 'tooltip',
                        'data-pjax'   => '0',
                        'class'       => 'text-muted',
                    ]
                );
            },
    ],
    'controller' => 'airport-maintaince-companies'
],// generated by schmunk42\giiant\crud\providers\RelationProvider::columnFormat
[
            "class" => yii\grid\DataColumn::className(),
            "attribute" => "maintaince_companies_id",
            "value" => function($model){
                if ($rel = $model->getMaintainceCompanies()->one()) {
                    return yii\helpers\Html::a($rel->Name,["maintainance-companies/view", 'id' => $rel->id,],["data-pjax"=>0]);
                } else {
                    return '';
                }
            },
            "format" => "raw",
],
]
]).'</div>'?>
<?php Pjax::end() ?>
<?php $this->endBlock() ?>


<?php $this->beginBlock('Slots'); ?>
<div style='position: relative'><div style='position:absolute; right: 0px; top 0px;'>
  <?= Html::a(
            '<span class="glyphicon glyphicon-list"></span> ' . 'List All' . ' Slots',
            ['slots/index'],
            ['class'=>'btn text-muted btn-xs']
        ) ?>
  <?= Html::a(
            '<span class="glyphicon glyphicon-plus"></span> ' . 'New' . ' Slot',
            ['slots/create', 'Slot' => ['id' => $model->id]],
            ['class'=>'btn btn-success btn-xs']
        ); ?>
  <?= Html::a(
            '<span class="glyphicon glyphicon-link"></span> ' . 'Attach' . ' Slot', ['airport-slot/create', 'AirportSlot'=>['airport_id'=>$model->id]],
            ['class'=>'btn btn-info btn-xs']
        ) ?>
</div></div><?php Pjax::begin(['id'=>'pjax-Slots', 'enableReplaceState'=> false, 'linkSelector'=>'#pjax-Slots ul.pagination a, th a', 'clientOptions' => ['pjax:success'=>'function(){alert("yo")}']]) ?>
<?= '<div class="table-responsive">'.\yii\grid\GridView::widget([
    'layout' => '{summary}{pager}<br/>{items}{pager}',
    'dataProvider' => new \yii\data\ActiveDataProvider(['query' => $model->getAirportSlots(), 'pagination' => ['pageSize' => 20, 'pageParam'=>'page-airportslots']]),
    'pager'        => [
        'class'          => yii\widgets\LinkPager::className(),
        'firstPageLabel' => 'First',
        'lastPageLabel'  => 'Last'
    ],
    'columns' => [[
    'class'      => 'yii\grid\ActionColumn',
    'template'   => '{view} {delete}',
    'contentOptions' => ['nowrap'=>'nowrap'],
    'urlCreator' => function($action, $model, $key, $index) {
        // using the column name as key, not mapping to 'id' like the standard generator
        $params = is_array($key) ? $key : [$model->primaryKey()[0] => (string) $key];
        $params[0] = 'airport-slot' . '/' . $action;
        return Url::toRoute($params);
    },
    'buttons'    => [
        'delete' => function ($url, $model) {
                return yii\helpers\Html::a('<span class="glyphicon glyphicon-remove"></span>', $url, [
                    'class' => 'text-danger',
                    'title'         => 'Remove',
                    'data-confirm'  => 'Are you sure you want to delete the related item?',
                    'data-method' => 'post',
                    'data-pjax' => '0',
                ]);
            },
'view' => function ($url, $model) {
                return yii\helpers\Html::a(
                    '<span class="glyphicon glyphicon-cog"></span>',
                    $url,
                    [
                        'data-title'  => 'View Pivot Record',
                        'data-toggle' => 'tooltip',
                        'data-pjax'   => '0',
                        'class'       => 'text-muted',
                    ]
                );
            },
    ],
    'controller' => 'airport-slot'
],// generated by schmunk42\giiant\crud\providers\RelationProvider::columnFormat
[
            "class" => yii\grid\DataColumn::className(),
            "attribute" => "slot_id",
            "value" => function($model){
                if ($rel = $model->getSlot()->one()) {
                    return yii\helpers\Html::a($rel->Name,["slots/view", 'id' => $rel->id,],["data-pjax"=>0]);
                } else {
                    return '';
                }
            },
            "format" => "raw",
],
]
]).'</div>'?>
<?php Pjax::end() ?>
<?php $this->endBlock() ?>


<?php $this->beginBlock('Countries'); ?>
<div style='position: relative'><div style='position:absolute; right: 0px; top 0px;'>
  <?= Html::a(
            '<span class="glyphicon glyphicon-list"></span> ' . 'List All' . ' Countries',
            ['country/index'],
            ['class'=>'btn text-muted btn-xs']
        ) ?>
  <?= Html::a(
            '<span class="glyphicon glyphicon-plus"></span> ' . 'New' . ' Country',
            ['country/create', 'Country' => ['id' => $model->id]],
            ['class'=>'btn btn-success btn-xs']
        ); ?>
  <?= Html::a(
            '<span class="glyphicon glyphicon-link"></span> ' . 'Attach' . ' Country', ['country-airports/create', 'CountryAirport'=>['airport_id'=>$model->id]],
            ['class'=>'btn btn-info btn-xs']
        ) ?>
</div></div><?php Pjax::begin(['id'=>'pjax-Countries', 'enableReplaceState'=> false, 'linkSelector'=>'#pjax-Countries ul.pagination a, th a', 'clientOptions' => ['pjax:success'=>'function(){alert("yo")}']]) ?>
<?= '<div class="table-responsive">'.\yii\grid\GridView::widget([
    'layout' => '{summary}{pager}<br/>{items}{pager}',
    'dataProvider' => new \yii\data\ActiveDataProvider(['query' => $model->getCountryAirports(), 'pagination' => ['pageSize' => 20, 'pageParam'=>'page-countryairports']]),
    'pager'        => [
        'class'          => yii\widgets\LinkPager::className(),
        'firstPageLabel' => 'First',
        'lastPageLabel'  => 'Last'
    ],
    'columns' => [[
    'class'      => 'yii\grid\ActionColumn',
    'template'   => '{view} {delete}',
    'contentOptions' => ['nowrap'=>'nowrap'],
    'urlCreator' => function($action, $model, $key, $index) {
        // using the column name as key, not mapping to 'id' like the standard generator
        $params = is_array($key) ? $key : [$model->primaryKey()[0] => (string) $key];
        $params[0] = 'country-airports' . '/' . $action;
        return Url::toRoute($params);
    },
    'buttons'    => [
        'delete' => function ($url, $model) {
                return yii\helpers\Html::a('<span class="glyphicon glyphicon-remove"></span>', $url, [
                    'class' => 'text-danger',
                    'title'         => 'Remove',
                    'data-confirm'  => 'Are you sure you want to delete the related item?',
                    'data-method' => 'post',
                    'data-pjax' => '0',
                ]);
            },
'view' => function ($url, $model) {
                return yii\helpers\Html::a(
                    '<span class="glyphicon glyphicon-cog"></span>',
                    $url,
                    [
                        'data-title'  => 'View Pivot Record',
                        'data-toggle' => 'tooltip',
                        'data-pjax'   => '0',
                        'class'       => 'text-muted',
                    ]
                );
            },
    ],
    'controller' => 'country-airports'
],// generated by schmunk42\giiant\crud\providers\RelationProvider::columnFormat
[
            "class" => yii\grid\DataColumn::className(),
            "attribute" => "country_id",
            "value" => function($model){
                if ($rel = $model->getCountry()->one()) {
                    return yii\helpers\Html::a($rel->name,["country/view", 'id' => $rel->id,],["data-pjax"=>0]);
                } else {
                    return '';
                }
            },
            "format" => "raw",
],
]
]).'</div>'?>
<?php Pjax::end() ?>
<?php $this->endBlock() ?>


    <?= Tabs::widget(
                 [
                     'id' => 'relation-tabs',
                     'encodeLabels' => false,
                     'items' => [ [
    'label'   => '<span class="glyphicon glyphicon-asterisk"></span> Airports',
    'content' => $this->blocks['app\models\Airports'],
    'active'  => true,
],[
    'content' => $this->blocks['CateringCompanies'],
    'label'   => '<small>Catering Companies <span class="badge badge-default">'.count($model->getCateringCompanies()->asArray()->all()).'</span></small>',
    'active'  => false,
],[
    'content' => $this->blocks['Fbos'],
    'label'   => '<small>Fbos <span class="badge badge-default">'.count($model->getFbos()->asArray()->all()).'</span></small>',
    'active'  => false,
],[
    'content' => $this->blocks['FuelCompanies'],
    'label'   => '<small>Fuel Companies <span class="badge badge-default">'.count($model->getFuelCompanies()->asArray()->all()).'</span></small>',
    'active'  => false,
],[
    'content' => $this->blocks['GroundHandlers'],
    'label'   => '<small>Ground Handlers <span class="badge badge-default">'.count($model->getGroundHandlers()->asArray()->all()).'</span></small>',
    'active'  => false,
],[
    'content' => $this->blocks['Hotels'],
    'label'   => '<small>Hotels <span class="badge badge-default">'.count($model->getHotels()->asArray()->all()).'</span></small>',
    'active'  => false,
],[
    'content' => $this->blocks['MaintainceCompanies'],
    'label'   => '<small>Maintaince Companies <span class="badge badge-default">'.count($model->getMaintainceCompanies()->asArray()->all()).'</span></small>',
    'active'  => false,
],[
    'content' => $this->blocks['Slots'],
    'label'   => '<small>Slots <span class="badge badge-default">'.count($model->getSlots()->asArray()->all()).'</span></small>',
    'active'  => false,
],[
    'content' => $this->blocks['Countries'],
    'label'   => '<small>Countries <span class="badge badge-default">'.count($model->getCountries()->asArray()->all()).'</span></small>',
    'active'  => false,
], ]
                 ]
    );
    ?>
        </div>
    </div>
</div>
