<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TournamentInfo */

$this->title = 'Update Tournament Info: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Tournament Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tournament-info-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
