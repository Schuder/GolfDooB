<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Accounts */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="accounts-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => 32]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => 60]) ?>

    <?= $form->field($model, 'coach_id')->textInput() ?>

    <?= $form->field($model, 'player_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
