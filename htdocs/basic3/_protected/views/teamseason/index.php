<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchTeamSeason */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Team Seasons';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="team-season-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Team Season', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'team_info_id',
            'head_coach_id',
            'ast_coach_id_1',
            'ast_coach_id_2',
            // 'team_notes:ntext',
            // 'league_season_id',
            // 'season_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
