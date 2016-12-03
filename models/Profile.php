<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "profile".
 *
 * 
 * @property string $firstname
 * @property string $lastname
 * @property string $email
 * @property string $image
 * @property string $dob
 * @property string $gender
 * @property string $experience
 * @property string $industry
 * @property string $location
 * @property string $AboutMe
 * @property string $personalInfo
 * @property double $profesion
 * @property double $careerLevel
 * @property double $LevelofCommunication
 * @property double $OrganizationLevel
 * @property double $JobLevel
 * @property string $Address
 * @property string $PhoneNumber
 * @property string $webSite
 */
class Profile extends \yii\db\ActiveRecord
{
     public $file;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'profile';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['firstname', 'lastname', 'email', 'dob', 'personalInfo', 'PhoneNumber'], 'required'],
            [['dob'], 'safe'],
            [['profesion', 'careerLevel', 'LevelofCommunication', 'OrganizationLevel', 'JobLevel'], 'number'],
            [['firstname', 'lastname'], 'string', 'max' => 50],
            [['email', 'image', 'industry', 'location', 'AboutMe', 'personalInfo', 'Address', 'PhoneNumber', 'webSite'], 'string', 'max' => 150],
            [['gender'], 'string', 'max' => 5],
            [['experience'], 'string', 'max' => 15],
            [['file'], 'safe'],
            [['file'], 'file', 'extensions'=>'jpg, gif, png'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            //'id' => 'ID',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'email' => 'Email',
            'file' => 'Profile Picture',
            'dob' => 'Dob',
            'gender' => 'Gender',
            'experience' => 'Experience',
            'industry' => 'Industry',
            'location' => 'Location',
            'AboutMe' => 'About Me',
            'personalInfo' => 'Personal Info',
            'profesion' => 'Profesion',
            'careerLevel' => 'Career Level',
            'LevelofCommunication' => 'Levelof Communication',
            'OrganizationLevel' => 'Organization Level',
            'JobLevel' => 'Job Level',
            'Address' => 'Address',
            'PhoneNumber' => 'Phone Number',
            'webSite' => 'Web Site',
        ];
    }

    /**
     * @inheritdoc
     * @return ProfileQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ProfileQuery(get_called_class());
    }
}
