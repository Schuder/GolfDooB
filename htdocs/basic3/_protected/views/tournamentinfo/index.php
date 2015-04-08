<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchTournamentInfo */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tournament Infos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tournament-info-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tournament Info', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'host_team_id',
            'course_id',
            'tee_box_id',
            'season_id',
            // 'name',
            // 'date',
            // 'start_time',
            // 'coaches_meeting',
            // 'fee',
            // 'fee_payable_to',
            // 'format_id',
            // 'level_id',
            // 'players_per_team',
            // 'tournament_notes:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
