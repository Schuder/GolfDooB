<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\LeagueInfo */

$this->title = 'Create League Info';
$this->params['breadcrumbs'][] = ['label' => 'League Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="league-info-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
