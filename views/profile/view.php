<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Profile */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Profiles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profile-view">

    <h1>Member Profile</h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    
     <?php 
        if ($model->image){
            echo '<img src="'.\Yii::$app->request->BaseUrl.'/'.$model->image.'" width="190px">&nbsp;&nbsp;&nbsp;';
            echo '<p>';
        }
    ?>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
           // 'id',
            'firstname',
            'lastname',
            'email:email',
            //'image',
            'dob',
            'gender',
            'experience',
            'industry',
            'location',
            'AboutMe',
            'personalInfo',
            'profesion',
            'careerLevel',
            'LevelofCommunication',
            'OrganizationLevel',
            'JobLevel',
            'Address',
            'PhoneNumber',
            'webSite',
        ],
    ]) ?>

</div>
