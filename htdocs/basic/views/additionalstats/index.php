<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchAdditionalStats */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Additonal Stats';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="additonal-stats-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Additonal Stats', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'putts',
            'greens_in_regulation',
            'fairways_hit',
            'penalty_strokes',
            // 'additional_notes:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
