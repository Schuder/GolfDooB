<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TeamSeason */

$this->title = 'Update Team Season: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Team Seasons', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="team-season-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
