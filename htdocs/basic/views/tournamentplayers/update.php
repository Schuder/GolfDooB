<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TournamentPlayers */

$this->title = 'Update Tournament Players: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tournament Players', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tournament-players-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
