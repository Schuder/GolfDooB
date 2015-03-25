<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CoachInfo */

$this->title = 'Create Coach Info';
$this->params['breadcrumbs'][] = ['label' => 'Coach Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="coach-info-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
