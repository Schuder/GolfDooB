<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchTournamentPlayers */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tournament Players';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tournament-players-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tournament Players', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'tournament_id',
            'player_season_id',
            'score_front',
            'score_back',
            // 'score_total',
            // 'disqualified',
            // 'round_notes:ntext',
            // 'additional_stats_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
