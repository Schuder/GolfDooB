<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CoachInfo */
/* @var $form yii\widgets\ActiveForm */
//DROPDOWN DONE!
?>

<div class="coach-info-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'first_name')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'last_name')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'cell_number')->textInput(['maxlength' => 15]) ?>

    <?= $form->field($model, 'home_number')->textInput(['maxlength' => 15]) ?>

    <?= $form->field($model, 'coach_notes')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'coach_email')->textInput(['maxlength' => 50]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
