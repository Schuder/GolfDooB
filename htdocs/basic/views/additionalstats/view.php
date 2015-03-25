<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\AdditonalStats */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Additonal Stats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="additonal-stats-view">

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
            'putts',
            'greens_in_regulation',
            'fairways_hit',
            'penalty_strokes',
            'additional_notes:ntext',
        ],
    ]) ?>

</div>
