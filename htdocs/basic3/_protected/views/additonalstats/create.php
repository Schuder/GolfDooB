<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\AdditonalStats */

$this->title = 'Create Additional Stats';
$this->params['breadcrumbs'][] = ['label' => 'Additional Stats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="additonal-stats-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
