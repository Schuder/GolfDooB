<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PlayerSeason */

$this->title = 'Create Player Season';
$this->params['breadcrumbs'][] = ['label' => 'Player Seasons', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="player-season-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
