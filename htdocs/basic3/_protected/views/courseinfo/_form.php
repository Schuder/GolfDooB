<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CourseInfo */
/* @var $form yii\widgets\ActiveForm */
//DROPDOWN DONE!
?>

<div class="course-info-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'city')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'state')->textInput(['maxlength' => 2]) ?>

    <?= $form->field($model, 'zip')->textInput(['maxlength' => 5]) ?>

    <?= $form->field($model, 'phone_number')->textInput(['maxlength' => 15]) ?>

    <?= $form->field($model, 'main_contact_person')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'course_notes')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
