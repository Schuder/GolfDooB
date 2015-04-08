<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\PlayerSeason
/* @var $this yii\web\View */
/* @var $model app\models\TournamentPlayers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tournament-players-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tournament_id')->dropDownList($model->tournament)  ?>

     <?= $form->field($model, 'player_season_id')->dropDownList( ArrayHelper::map( PlayerSeason::find()->all(),
			'id',
			function($a){ return $a->playerInfo['first_name']. " " . $a->playerInfo['last_name']; }
		)
	) ?>

    <?= $form->field($model, 'score_front')->textInput() ?>

    <?= $form->field($model, 'score_back')->textInput() ?>

    <?= $form->field($model, 'score_total')->textInput() ?>

    <?= $form->field($model, 'disqualified')->textInput() ?>

    <?= $form->field($model, 'round_notes')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'additional_stats_id')->dropDownList($model->AdditionalStats) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
