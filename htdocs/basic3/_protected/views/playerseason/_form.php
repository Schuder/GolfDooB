<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\models\PlayerInfo;
use app\models\TeamSeason;

/* @var $this yii\web\View */
/* @var $model app\models\PlayerSeason */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="player-season-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'player_info_id')->dropDownList( ArrayHelper::map( PlayerInfo::find()->AsArray()->all(),
			'id',
			function($a){ return "{$a['first_name']} {$a['last_name']}"; }
		)
	) ?>

    <?= $form->field($model, 'team_season_id')->dropDownList( ArrayHelper::map( TeamSeason::find()->all(),
			'id',
			function($a){ return $a->teamInfo['school_name'] . ' - ' . $a->teamInfo['mascot'] . ' - ' . $a->season['year']; }
		)
	) ?>

    <?= $form->field($model, 'year_in_school')->textInput() ?>

    <?= $form->field($model, 'player_season_notes')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
