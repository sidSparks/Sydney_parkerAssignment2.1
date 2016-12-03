<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Profile */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="profile-form">
    
   

     <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>

    <?= $form->field($model, 'file')->fileInput() ?>
<?php
if ($model->image){
    echo '<img src="'.\Yii::$app->request->BaseUrl.'/'.$model->image.'" width="90px">';
    echo Html::a('Delete Profile Picture', ['deleteimage', 'id'=>$model->id], ['class'=>'btn btn-danger']);
}
?>
 <div class="row">
            <div class="col-lg-6">
 <legend>Basic Information</legend>





    <?= $form->field($model, 'firstname', [
        'inputOptions' => [
            'placeholder' => 'First  Name',
        ],
    ]); ?>

    <?= $form->field($model, 'lastname', [
        'inputOptions' => [
            'placeholder' => 'Last Name',
        ],
    ]);?>


       <?= $form->field($model, 'dob')->widget(\yii\jui\DatePicker::classname(), [
    'dateFormat' => 'yyyy-MM-dd',
]) ?>

    <?php
    $a= ['Male' => 'Male','Female' => 'Female'];
    echo $form->field($model, 'gender',[
        'horizontalCssClasses' => [
            'wrapper' => 'col-sm-2',
        ]
    ])->dropDownList($a,['prompt'=>'Select Option']);
?>

    <?= $form->field($model, 'experience')->radioList(['1-4 Years'=>'1-4 Years', '5-10 Years'=>'5-10 Years','Over 10 Years'=>'Over 10 Years']) ?>

    <?php
    $a= ['Medical' => 'Medical','Construction' => 'Construction', 'Education' => 'Education', 'Information Technology' => 'Information Technology'];
    echo $form->field($model, 'industry',[
        'horizontalCssClasses' => [
            'wrapper' => 'col-sm-2',
        ]
    ])->dropDownList($a,['prompt'=>'Select Option']);
?>


    <?php
    $a= ['St. Thomas' => 'St. Thomas', 'Kingston' => 'Kingston', 'St. Andrew' => 'St. Andrew', 'St. Catherine' => 'St. Catherine',
        'Clarendon' => 'Clarendon', 'Manchester' => 'Manchester', 'St. Elizabeth' => 'St. Elizabeth', 'Westmoreland' => 'Westmoreland',
        'Hanover' => 'Hanover', 'St. James' => 'St.James', 'Trelawny' => 'Trelawny', 'St. Ann' => 'St.Ann', 'St. Mary' => 'St.Mary',
        'Portland' => 'Portland'];
    echo $form->field($model, 'location',[
        'horizontalCssClasses' => [
            'wrapper' => 'col-sm-2',
        ]
    ])->dropDownList($a,['prompt'=>'Select Option']);
?>

    <?= $form->field($model, 'AboutMe')->textarea(['rows' => 7]) ?>

    <?= $form->field($model, 'personalInfo',[
        'inputOptions' => [
            'placeholder' => 'contact person',
        ],
]); ?></div>
     
      <div class="row">
            <div class="col-lg-6">

    <legend>Skills</legend>

    <?= $form->field($model, 'profesion', [
        'inputOptions' => [
            'placeholder' => 'eg. Doctor',
        ],
    ]); ?>

    <?php
    $a= ['Entry Level/Recent Graduate' => 'Entry Level/Recent Graduate', 'Professional Level' => 'Professional Level',
    'Senior Professional Level/Mid-Level Management' => 'Senior Proffesional Level/Mid-Level Management',
    'Executive/Senior-Level Management' => 'Executive/Senior-Level Management'];
    echo $form->field($model, 'careerLevel',[
        'horizontalCssClasses' => [
            'wrapper' => 'col-sm-3',
        ]
    ])->dropDownList($a,['prompt'=>'Select Option']);
?>

    <?php
    $a= ['1-10 %' => '1-10 %','11-20 %' => '11-20 %', '21-30 %' => '21-30 %', '31-40 %' => '31-40 %', '41-50 %'=> '41-50 %',
     '51-60 %'=> '51-60 %', '61-70 %'=> '61-70 %', '71-80 %'=> '71-80 %', '81-90 %'=> '81-90 %', '91-100 %'=> '91-100 %'];
    echo $form->field($model, 'LevelofCommunication',[
        'horizontalCssClasses' => [
            'wrapper' => 'col-sm-2',
        ]
    ])->dropDownList($a,['prompt'=>'Select Option']);
?>

<?php
    $a= ['1-10 %' => '1-10 %','11-20 %' => '11-20 %', '21-30 %' => '21-30 %', '31-40 %' => '31-40 %', '41-50 %'=> '41-50 %',
     '51-60 %'=> '51-60 %', '61-70 %'=> '61-70 %', '71-80 %'=> '71-80 %', '81-90 %'=> '81-90 %', '91-100 %'=> '91-100 %'];
    echo $form->field($model, 'OrganizationLevel',[
        'horizontalCssClasses' => [
            'wrapper' => 'col-sm-2',
        ]
    ])->dropDownList($a,['prompt'=>'Select Option']);
?>



   <?php
    $a= ['1-10 %' => '1-10 %','11-20 %' => '11-20 %', '21-30 %' => '21-30 %', '31-40 %' => '31-40 %', '41-50 %'=> '41-50 %',
     '51-60 %'=> '51-60 %', '61-70 %'=> '61-70 %', '71-80 %'=> '71-80 %', '81-90 %'=> '81-90 %', '91-100 %'=> '91-100 %'];
    echo $form->field($model, 'JobLevel',[
        'horizontalCssClasses' => [
            'wrapper' => 'col-sm-2',
        ]
    ])->dropDownList($a,['prompt'=>'Select Option']);
                ?>
          
           

   <legend>Contact</legend>

    <?= $form->field($model, 'Address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PhoneNumber')->textInput(['maxlength' => true]) ?>

     <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'webSite')->textInput(['maxlength' => true]) ?>


     <?= $form->field($model, 'image')->textInput(['maxlength' => true]) ?>
               

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
