<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TeeBoxInfo */

$this->title = 'Create Tee Box Info';
$this->params['breadcrumbs'][] = ['label' => 'Tee Box Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tee-box-info-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
