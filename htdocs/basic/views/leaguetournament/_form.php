<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\LeagueSeason;
use yii\helpers\ArrayHelper;
//use backend\models\Standard;
//use app\models\Course;
/* @var $this yii\web\View */
/* @var $model app\models\LeagueTournament */
/* @var $form yii\widgets\ActiveForm */
//DROPDOWN DONE!
?>

<div class="league-tournament-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tournament_id')->dropDownList($model->tournament)  ?>

         <?= $form->field($model, 'league_season_id')->dropDownList( ArrayHelper::map( LeagueSeason::find()->all(),
			'id',
			function($a){ return $a->leagueInfo['league_name']; }
		)
	) ?>

    <?= $form->field($model, 'league_tournament_notes')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
