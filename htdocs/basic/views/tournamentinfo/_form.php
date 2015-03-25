<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TournamentInfo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tournament-info-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'host_team_id')->dropDownList($model->HostTeam) ?>

    <?= $form->field($model, 'course_id')->dropDownList($model->Course) ?>

    <?= $form->field($model, 'tee_box_id')->dropDownList($model->TeeBox) ?>

    <?= $form->field($model, 'season_id')->dropDownList($model->Season) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <?= $form->field($model, 'start_time')->textInput() ?>

    <?= $form->field($model, 'coaches_meeting')->textInput() ?>

    <?= $form->field($model, 'fee')->textInput() ?>

    <?= $form->field($model, 'fee_payable_to')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'format_id')->dropDownList($model->Format) ?>

    <?= $form->field($model, 'level_id')->dropDownList($model->Format) ?>

    <?= $form->field($model, 'players_per_team')->textInput() ?>

    <?= $form->field($model, 'tournament_notes')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
