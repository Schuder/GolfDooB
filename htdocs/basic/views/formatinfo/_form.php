<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FormatInfo */
/* @var $form yii\widgets\ActiveForm */
// DROPDOWN DONE!
?>

<div class="format-info-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'format')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'format_notes')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
