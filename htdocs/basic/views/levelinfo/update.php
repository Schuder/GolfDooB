<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\LevelInfo */

$this->title = 'Update Level Info: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Level Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="level-info-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
