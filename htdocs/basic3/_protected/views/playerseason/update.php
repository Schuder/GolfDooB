<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PlayerSeason */

$this->title = 'Update Player Season: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Player Seasons', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="player-season-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
