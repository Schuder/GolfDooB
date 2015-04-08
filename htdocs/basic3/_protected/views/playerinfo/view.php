<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PlayerInfo */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Player Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="player-info-view">

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
            'first_name',
            'last_name',
            'email:email',
            'cell_number',
            'player_notes:ntext',
            'parent_email1:email',
            'parent_email2:email',
            'home_phone_number',
        ],
    ]) ?>

</div>
