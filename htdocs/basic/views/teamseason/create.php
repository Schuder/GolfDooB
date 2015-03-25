<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TeamSeason */

$this->title = 'Create Team Season';
$this->params['breadcrumbs'][] = ['label' => 'Team Seasons', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="team-season-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
