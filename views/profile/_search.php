<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProfileSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="profile-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'firstname') ?>

    <?= $form->field($model, 'lastname') ?>

    <?= $form->field($model, 'email') ?>

    <?= $form->field($model, 'image') ?>

    <?php // echo $form->field($model, 'dob') ?>

    <?php // echo $form->field($model, 'gender') ?>

    <?php // echo $form->field($model, 'experience') ?>

    <?php // echo $form->field($model, 'industry') ?>

    <?php // echo $form->field($model, 'location') ?>

    <?php // echo $form->field($model, 'AboutMe') ?>

    <?php // echo $form->field($model, 'personalInfo') ?>

    <?php // echo $form->field($model, 'profesion') ?>

    <?php // echo $form->field($model, 'careerLevel') ?>

    <?php // echo $form->field($model, 'LevelofCommunication') ?>

    <?php // echo $form->field($model, 'OrganizationLevel') ?>

    <?php // echo $form->field($model, 'JobLevel') ?>

    <?php // echo $form->field($model, 'Address') ?>

    <?php // echo $form->field($model, 'PhoneNumber') ?>

    <?php // echo $form->field($model, 'webSite') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
