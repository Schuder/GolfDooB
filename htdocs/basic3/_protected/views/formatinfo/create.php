<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\FormatInfo */

$this->title = 'Create Format Info';
$this->params['breadcrumbs'][] = ['label' => 'Format Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="format-info-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
