<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\LeagueTeams */

$this->title = 'Create League Teams';
$this->params['breadcrumbs'][] = ['label' => 'League Teams', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="league-teams-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
