<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SearchTournamentPlayers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tournament-players-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'tournament_id') ?>

    <?= $form->field($model, 'player_season_id') ?>

    <?= $form->field($model, 'score_front') ?>

    <?= $form->field($model, 'score_back') ?>

    <?php // echo $form->field($model, 'score_total') ?>

    <?php // echo $form->field($model, 'disqualified') ?>

    <?php // echo $form->field($model, 'round_notes') ?>

    <?php // echo $form->field($model, 'additional_stats_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
