<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use \dmstr\bootstrap\Tabs;

/**
* @var yii\web\View $this
* @var app\models\CountryAirports $model
* @var yii\widgets\ActiveForm $form
*/

?>

<div class="panel panel-default">
    <div class="panel-heading">
                <?= $model->airport_id ?>    </div>

    <div class="panel-body">

        <div class="country-airports-form">

            <?php $form = ActiveForm::begin([
            'id' => 'CountryAirports',
            'layout' => 'horizontal',
            'enableClientValidation' => false,
            ]
            );
            ?>

            <div class="">
                <?php echo $form->errorSummary($model); ?>
                <?php $this->beginBlock('main'); ?>

                <p>
                    
			<?= // generated by schmunk42\giiant\crud\providers\RelationProvider::activeField
$form->field($model, 'airport_id')->dropDownList(
    \yii\helpers\ArrayHelper::map(app\models\Airports::find()->all(),'id','Name'),
    ['prompt' => 'Select']
); ?>
			<?= // generated by schmunk42\giiant\crud\providers\RelationProvider::activeField
$form->field($model, 'country_id')->dropDownList(
    \yii\helpers\ArrayHelper::map(app\models\Country::find()->all(),'id','name'),
    ['prompt' => 'Select']
); ?>
                </p>
                <?php $this->endBlock(); ?>
                
                <?=
    Tabs::widget(
                 [
                   'encodeLabels' => false,
                     'items' => [ [
    'label'   => 'CountryAirports',
    'content' => $this->blocks['main'],
    'active'  => true,
], ]
                 ]
    );
    ?>
                <hr/>

                <?= Html::submitButton(
                '<span class="glyphicon glyphicon-check"></span> ' . ($model->isNewRecord
                ? 'Create' : 'Save'),
                [
                'id' => 'save-' . $model->formName(),
                'class' => 'btn btn-success'
                ]
                );
                ?>

                <?php ActiveForm::end(); ?>

            </div>

        </div>

    </div>

</div>
