<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SearchTournamentInfo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tournament-info-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'host_team_id') ?>

    <?= $form->field($model, 'course_id') ?>

    <?= $form->field($model, 'tee_box_id') ?>

    <?= $form->field($model, 'season_id') ?>

    <?php // echo $form->field($model, 'name') ?>

    <?php // echo $form->field($model, 'date') ?>

    <?php // echo $form->field($model, 'start_time') ?>

    <?php // echo $form->field($model, 'coaches_meeting') ?>

    <?php // echo $form->field($model, 'fee') ?>

    <?php // echo $form->field($model, 'fee_payable_to') ?>

    <?php // echo $form->field($model, 'format_id') ?>

    <?php // echo $form->field($model, 'level_id') ?>

    <?php // echo $form->field($model, 'players_per_team') ?>

    <?php // echo $form->field($model, 'tournament_notes') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
