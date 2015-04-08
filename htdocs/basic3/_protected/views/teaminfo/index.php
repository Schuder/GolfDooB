<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchTeamInfo */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Team Infos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="team-info-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Team Info', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'school_name',
            'mascot',
            'address',
            'city',
            // 'state',
            // 'zip',
            // 'phone_number',
            // 'fax_number',
            // 'team_notes:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
