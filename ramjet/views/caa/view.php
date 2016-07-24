<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use yii\widgets\DetailView;
use yii\widgets\Pjax;
use dmstr\bootstrap\Tabs;

/**
* @var yii\web\View $this
* @var app\models\Caa $model
*/

$this->title = 'Caa ' . $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Caas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->Name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'View';
?>
<div class="caa-view">

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



    <?php $this->beginBlock('app\models\Caa'); ?>

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
            '<span class="glyphicon glyphicon-link"></span> ' . 'Attach' . ' Country', ['country-caa/create', 'CountryCaa'=>['caa_id'=>$model->id]],
            ['class'=>'btn btn-info btn-xs']
        ) ?>
</div></div><?php Pjax::begin(['id'=>'pjax-Countries', 'enableReplaceState'=> false, 'linkSelector'=>'#pjax-Countries ul.pagination a, th a', 'clientOptions' => ['pjax:success'=>'function(){alert("yo")}']]) ?>
<?= '<div class="table-responsive">'.\yii\grid\GridView::widget([
    'layout' => '{summary}{pager}<br/>{items}{pager}',
    'dataProvider' => new \yii\data\ActiveDataProvider(['query' => $model->getCountryCaas(), 'pagination' => ['pageSize' => 20, 'pageParam'=>'page-countrycaas']]),
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
        $params[0] = 'country-caa' . '/' . $action;
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
    'controller' => 'country-caa'
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
    'label'   => '<span class="glyphicon glyphicon-asterisk"></span> Caa',
    'content' => $this->blocks['app\models\Caa'],
    'active'  => true,
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
