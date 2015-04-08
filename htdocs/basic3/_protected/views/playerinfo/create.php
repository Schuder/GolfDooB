<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PlayerInfo */

$this->title = 'Create Player Info';
$this->params['breadcrumbs'][] = ['label' => 'Player Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="player-info-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
