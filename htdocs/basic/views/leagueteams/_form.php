<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\LeagueSeason;
use app\models\TeamSeason
/* @var $this yii\web\View */
/* @var $model app\models\LeagueTeams */
/* @var $form yii\widgets\ActiveForm */
//DROPDOWN DONE!
?>

<div class="league-teams-form">

    <?php $form = ActiveForm::begin(); ?>

     <?= $form->field($model, 'league_season_id')->dropDownList( ArrayHelper::map( LeagueSeason::find()->all(),
			'id',
			function($a){ return $a->leagueInfo['league_name']; }
		)
	) ?>

     <?= $form->field($model, 'team_season_id')->dropDownList( ArrayHelper::map( TeamSeason::find()->all(),
			'id',
			function($a){ return $a->teamInfo['school_name']; }))?>

    <?php ActiveForm::end(); ?>

</div>
