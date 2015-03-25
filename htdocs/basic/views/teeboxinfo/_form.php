<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TeeBoxInfo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tee-box-info-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'course_id')->dropDownList($model->Course) ?>

    <?= $form->field($model, 'color')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'slope')->textInput() ?>

    <?= $form->field($model, 'rating')->textInput() ?>

    <?= $form->field($model, 'par')->textInput() ?>

    <?= $form->field($model, 'tee_box_notes')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
