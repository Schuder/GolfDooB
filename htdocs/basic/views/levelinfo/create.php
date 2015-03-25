<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\LevelInfo */

$this->title = 'Create Level Info';
$this->params['breadcrumbs'][] = ['label' => 'Level Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="level-info-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
