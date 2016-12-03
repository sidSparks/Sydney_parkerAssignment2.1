<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Profile;

/**
 * ProfileSearch represents the model behind the search form about `app\models\Profile`.
 */
class ProfileSearch extends Profile
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            //[['id'], 'integer'],
            [['firstname', 'lastname', 'email', 'image', 'dob', 'gender', 'experience', 'industry', 'location', 'AboutMe', 'personalInfo', 'Address', 'PhoneNumber', 'webSite'], 'safe'],
            [['profesion', 'careerLevel', 'LevelofCommunication', 'OrganizationLevel', 'JobLevel'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Profile::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            //'id' => $this->id,
            'dob' => $this->dob,
            'profesion' => $this->profesion,
            'careerLevel' => $this->careerLevel,
            'LevelofCommunication' => $this->LevelofCommunication,
            'OrganizationLevel' => $this->OrganizationLevel,
            'JobLevel' => $this->JobLevel,
        ]);

        $query->andFilterWhere(['like', 'firstname', $this->firstname])
            ->andFilterWhere(['like', 'lastname', $this->lastname])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'gender', $this->gender])
            ->andFilterWhere(['like', 'experience', $this->experience])
            ->andFilterWhere(['like', 'industry', $this->industry])
            ->andFilterWhere(['like', 'location', $this->location])
            ->andFilterWhere(['like', 'AboutMe', $this->AboutMe])
            ->andFilterWhere(['like', 'personalInfo', $this->personalInfo])
            ->andFilterWhere(['like', 'Address', $this->Address])
            ->andFilterWhere(['like', 'PhoneNumber', $this->PhoneNumber])
            ->andFilterWhere(['like', 'webSite', $this->webSite]);

        return $dataProvider;
    }
}
