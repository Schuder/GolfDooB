<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TeamInfo */

$this->title = 'Create Team Info';
$this->params['breadcrumbs'][] = ['label' => 'Team Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="team-info-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
