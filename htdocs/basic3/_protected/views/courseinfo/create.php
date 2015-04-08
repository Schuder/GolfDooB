<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CourseInfo */

$this->title = 'Create Course Info';
$this->params['breadcrumbs'][] = ['label' => 'Course Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="course-info-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
