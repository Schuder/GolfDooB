<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CourseInfo */

$this->title = 'Update Course Info: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Course Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="course-info-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
