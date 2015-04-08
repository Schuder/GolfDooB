<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\LeagueSeason */

$this->title = 'Create League Season';
$this->params['breadcrumbs'][] = ['label' => 'League Seasons', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="league-season-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
