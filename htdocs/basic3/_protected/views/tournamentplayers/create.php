<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TournamentPlayers */

$this->title = 'Create Tournament Players';
$this->params['breadcrumbs'][] = ['label' => 'Tournament Players', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tournament-players-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
