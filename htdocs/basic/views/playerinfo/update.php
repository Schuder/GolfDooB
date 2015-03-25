<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PlayerInfo */

$this->title = 'Update Player Info: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Player Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="player-info-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
