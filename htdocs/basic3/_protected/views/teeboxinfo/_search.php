<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SearchTeeBoxInfo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tee-box-info-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'course_id') ?>

    <?= $form->field($model, 'color') ?>

    <?= $form->field($model, 'slope') ?>

    <?= $form->field($model, 'rating') ?>

    <?php // echo $form->field($model, 'par') ?>

    <?php // echo $form->field($model, 'tee_box_notes') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
