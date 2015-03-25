<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PlayerInfo */
/* @var $form yii\widgets\ActiveForm */
//DROPDOWN DONE!
?>

<div class="player-info-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'first_name')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'last_name')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'cell_number')->textInput(['maxlength' => 15]) ?>

    <?= $form->field($model, 'player_notes')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'parent_email1')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'parent_email2')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'home_phone_number')->textInput(['maxlength' => 15]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
