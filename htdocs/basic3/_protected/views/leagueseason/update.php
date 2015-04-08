<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\LeagueSeason */

$this->title = 'Update League Season: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'League Seasons', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="league-season-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
