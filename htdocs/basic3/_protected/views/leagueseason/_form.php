<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\models\LeagueInfo;
use app\models\Season;

/* @var $this yii\web\View */
/* @var $model app\models\LeagueSeason */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="league-season-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'league_id')->dropDownList( ArrayHelper::map( LeagueInfo::find()->AsArray()->all(),
			'id',
			function($a){ return "{$a['league_name']}"; }
		)
	) ?>

    <?= $form->field($model, 'season_id')->dropDownList(ArrayHelper::map( Season::find()->AsArray()->all(),
			'id',
			function($a){ return "{$a['name']}"; }
		)
	) ?>

    <?= $form->field($model, 'number_of_teams')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
