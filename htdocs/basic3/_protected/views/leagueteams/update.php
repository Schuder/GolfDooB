<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\LeagueTeams */

$this->title = 'Update League Teams: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'League Teams', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="league-teams-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
