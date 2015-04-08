<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TeamInfo */
/* @var $form yii\widgets\ActiveForm */
//DROPDOWN DONE!
?>

<div class="team-info-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'school_name')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'mascot')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'city')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'state')->textInput(['maxlength' => 2]) ?>

    <?= $form->field($model, 'zip')->textInput(['maxlength' => 5]) ?>

    <?= $form->field($model, 'phone_number')->textInput(['maxlength' => 15]) ?>

    <?= $form->field($model, 'fax_number')->textInput(['maxlength' => 15]) ?>

    <?= $form->field($model, 'team_notes')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
