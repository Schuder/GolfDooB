<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchPlayerInfo */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Player Infos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="player-info-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Player Info', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'first_name',
            'last_name',
            'email:email',
            'cell_number',
            // 'player_notes:ntext',
            // 'parent_email1:email',
            // 'parent_email2:email',
            // 'home_phone_number',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
