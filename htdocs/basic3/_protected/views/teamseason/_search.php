<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SearchTeamSeason */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="team-season-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'team_info_id') ?>

    <?= $form->field($model, 'head_coach_id') ?>

    <?= $form->field($model, 'ast_coach_id_1') ?>

    <?= $form->field($model, 'ast_coach_id_2') ?>

    <?php // echo $form->field($model, 'team_notes') ?>

    <?php // echo $form->field($model, 'league_season_id') ?>

    <?php // echo $form->field($model, 'season_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
