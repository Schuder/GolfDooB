<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AdditonalStats */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="additonal-stats-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'putts')->textInput() ?>

    <?= $form->field($model, 'greens_in_regulation')->textInput() ?>

    <?= $form->field($model, 'fairways_hit')->textInput() ?>

    <?= $form->field($model, 'penalty_strokes')->textInput() ?>

    <?= $form->field($model, 'additional_notes')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
