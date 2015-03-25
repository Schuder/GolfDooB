<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SearchAdditonalStats */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="additonal-stats-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'putts') ?>

    <?= $form->field($model, 'greens_in_regulation') ?>

    <?= $form->field($model, 'fairways_hit') ?>

    <?= $form->field($model, 'penalty_strokes') ?>

    <?php // echo $form->field($model, 'additional_notes') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
