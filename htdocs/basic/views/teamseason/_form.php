<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\models\TeamInfo;
use app\models\Season;
use app\models\LeagueSeason;

/* @var $this yii\web\View */
/* @var $model app\models\TeamSeason */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="team-season-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'team_info_id')->dropDownList( ArrayHelper::map(TeamInfo::find()->AsArray()->all(), 'id', function($a){ return "{$a['school_name']} {$a['mascot']}"; } ) ) ?>

	
    <?php
		$x = $model->HeadCoach;
		echo $form->field($model, 'head_coach_id')->dropDownList($x);
		echo $form->field($model, 'ast_coach_id_1')->dropDownList($x, ['prompt'=>'None']);
		echo $form->field($model, 'ast_coach_id_2')->dropDownList($x, ['prompt'=>'None']);
	?>

    <?= $form->field($model, 'team_notes')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'league_season_id')->dropDownList(ArrayHelper::map(LeagueSeason::find()->all(), 'id', function($a){ return "{$a->season['year']} {$a->leagueInfo['league_name']}"; } ) )?>

    <?= $form->field($model, 'season_id')->dropDownList(ArrayHelper::map(Season::find()->AsArray()->all(), 'id', function($a){ return "{$a['name']} {$a['year']}"; } ) ) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
		