<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;

/**
* @var yii\web\View $this
* @var yii\data\ActiveDataProvider $dataProvider
* @var app\models\AirportsSearch $searchModel
*/

    $this->title = 'Airports';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="airports-index">

    <?php //     echo $this->render('_search', ['model' =>$searchModel]);
    ?>

    <div class="clearfix">
        <p class="pull-left">
            <?= Html::a('<span class="glyphicon glyphicon-plus"></span> ' . 'New', ['create'], ['class' => 'btn btn-success']) ?>
        </p>

        <div class="pull-right">

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
            <?= 
            \yii\bootstrap\ButtonDropdown::widget(
                [
                    'id'       => 'giiant-relations',
                    'encodeLabel' => false,
                    'label'    => '<span class="glyphicon glyphicon-paperclip"></span> ' . 'Relations',
                    'dropdown' => [
                        'options'      => [
                            'class' => 'dropdown-menu-right'
                        ],
                        'encodeLabels' => false,
                        'items'        => [
    [
        'label' => '<i class="glyphicon glyphicon-random"> Airport Catering Companies</i>',
        'url' => [
            'airport-catering-companies/index',
        ],
    ],
    [
        'label' => '<i class="glyphicon glyphicon-arrow-right"> Catering Companies</i>',
        'url' => [
            'catering-companies/index',
        ],
    ],
    [
        'label' => '<i class="glyphicon glyphicon-random"> Airport Fbo</i>',
        'url' => [
            'airport-fbo/index',
        ],
    ],
    [
        'label' => '<i class="glyphicon glyphicon-arrow-right"> Fbo</i>',
        'url' => [
            'fbo/index',
        ],
    ],
    [
        'label' => '<i class="glyphicon glyphicon-random"> Airport Fuel Companies</i>',
        'url' => [
            'airport-fuel-companies/index',
        ],
    ],
    [
        'label' => '<i class="glyphicon glyphicon-arrow-right"> Fuel Companies</i>',
        'url' => [
            'fuel-companies/index',
        ],
    ],
    [
        'label' => '<i class="glyphicon glyphicon-random"> Airport Ground Handlers</i>',
        'url' => [
            'airport-ground-handlers/index',
        ],
    ],
    [
        'label' => '<i class="glyphicon glyphicon-arrow-right"> Ground Handlers</i>',
        'url' => [
            'ground-handlers/index',
        ],
    ],
    [
        'label' => '<i class="glyphicon glyphicon-random"> Airport Hotels</i>',
        'url' => [
            'airport-hotels/index',
        ],
    ],
    [
        'label' => '<i class="glyphicon glyphicon-arrow-right"> Hotels</i>',
        'url' => [
            'hotels/index',
        ],
    ],
    [
        'label' => '<i class="glyphicon glyphicon-random"> Airport Maintaince Companies</i>',
        'url' => [
            'airport-maintaince-companies/index',
        ],
    ],
    [
        'label' => '<i class="glyphicon glyphicon-arrow-right"> Maintainance Companies</i>',
        'url' => [
            'maintainance-companies/index',
        ],
    ],
    [
        'label' => '<i class="glyphicon glyphicon-random"> Airport Slot</i>',
        'url' => [
            'airport-slot/index',
        ],
    ],
    [
        'label' => '<i class="glyphicon glyphicon-arrow-right"> Slots</i>',
        'url' => [
            'slots/index',
        ],
    ],
    [
        'label' => '<i class="glyphicon glyphicon-random"> Country Airports</i>',
        'url' => [
            'country-airports/index',
        ],
    ],
    [
        'label' => '<i class="glyphicon glyphicon-arrow-right"> Country</i>',
        'url' => [
            'country/index',
        ],
    ],
]                    ],
                ]
            );
            ?>        </div>
    </div>

    
        <div class="panel panel-default">
            <div class="panel-heading">
                Airports            </div>

            <div class="panel-body">

                <div class="table-responsive">
                <?= GridView::widget([
                'layout' => '{summary}{pager}{items}{pager}',
                'dataProvider' => $dataProvider,
                'pager'        => [
                    'class'          => yii\widgets\LinkPager::className(),
                    'firstPageLabel' => 'First',
                    'lastPageLabel'  => 'Last'                ],
                'filterModel' => $searchModel,
                'columns' => [

                        [
            'class' => 'yii\grid\ActionColumn',
            'urlCreator' => function($action, $model, $key, $index) {
                // using the column name as key, not mapping to 'id' like the standard generator
                $params = is_array($key) ? $key : [$model->primaryKey()[0] => (string) $key];
                $params[0] = \Yii::$app->controller->id ? \Yii::$app->controller->id . '/' . $action : $action;
                return Url::toRoute($params);
            },
            'contentOptions' => ['nowrap'=>'nowrap']
        ],
			'id',
			'Name',
			'Tel',
			'Fax',
			'AFTN',
			'Type_b',
			'Email:email',
                ],
            ]); ?>
                </div>

            </div>

        </div>


    
</div>
