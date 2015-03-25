<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TournamentInfo */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Tournament Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tournament-info-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'host_team_id',
            'course_id',
            'tee_box_id',
            'season_id',
            'name',
            'date',
            'start_time',
            'coaches_meeting',
            'fee',
            'fee_payable_to',
            'format_id',
            'level_id',
            'players_per_team',
            'tournament_notes:ntext',
        ],
    ]) ?>

</div>
