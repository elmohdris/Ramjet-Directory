<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use \dmstr\bootstrap\Tabs;

/**
* @var yii\web\View $this
* @var app\models\GroundHandlers $model
* @var yii\widgets\ActiveForm $form
*/

?>

<div class="panel panel-default">
    <div class="panel-heading">
                <?= $model->Name ?>    </div>

    <div class="panel-body">

        <div class="ground-handlers-form">

            <?php $form = ActiveForm::begin([
            'id' => 'GroundHandlers',
            'layout' => 'horizontal',
            'enableClientValidation' => false,
            ]
            );
            ?>

            <div class="">
                <?php echo $form->errorSummary($model); ?>
                <?php $this->beginBlock('main'); ?>

                <p>
                    
			<?= $form->field($model, 'id')->textInput() ?>
			<?= $form->field($model, 'Name')->textInput(['maxlength' => true]) ?>
			<?= $form->field($model, 'Tel')->textInput(['maxlength' => true]) ?>
			<?= $form->field($model, 'Fax')->textInput(['maxlength' => true]) ?>
			<?= $form->field($model, 'AFTN')->textInput(['maxlength' => true]) ?>
			<?= $form->field($model, 'Type_b')->textInput(['maxlength' => true]) ?>
			<?= $form->field($model, 'Email')->textInput(['maxlength' => true]) ?>
                </p>
                <?php $this->endBlock(); ?>
                
                <?=
    Tabs::widget(
                 [
                   'encodeLabels' => false,
                     'items' => [ [
    'label'   => 'GroundHandlers',
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
