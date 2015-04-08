<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SearchPlayerInfo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="player-info-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'first_name') ?>

    <?= $form->field($model, 'last_name') ?>

    <?= $form->field($model, 'email') ?>

    <?= $form->field($model, 'cell_number') ?>

    <?php // echo $form->field($model, 'player_notes') ?>

    <?php // echo $form->field($model, 'parent_email1') ?>

    <?php // echo $form->field($model, 'parent_email2') ?>

    <?php // echo $form->field($model, 'home_phone_number') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
