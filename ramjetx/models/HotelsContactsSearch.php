<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\HotelsContacts;

/**
* HotelsContactsSearch represents the model behind the search form about `app\models\HotelsContacts`.
*/
class HotelsContactsSearch extends HotelsContacts
{
/**
* @inheritdoc
*/
public function rules()
{
return [
[['id'], 'integer'],
            [['Name', 'Distance', 'Stars', 'Tel', 'Fax', 'Email'], 'safe'],
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
$query = HotelsContacts::find();

$dataProvider = new ActiveDataProvider([
'query' => $query,
]);

$this->load($params);

if (!$this->validate()) {
// uncomment the following line if you do not want to any records when validation fails
// $query->where('0=1');
return $dataProvider;
}

$query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'Name', $this->Name])
            ->andFilterWhere(['like', 'Distance', $this->Distance])
            ->andFilterWhere(['like', 'Stars', $this->Stars])
            ->andFilterWhere(['like', 'Tel', $this->Tel])
            ->andFilterWhere(['like', 'Fax', $this->Fax])
            ->andFilterWhere(['like', 'Email', $this->Email]);

return $dataProvider;
}
}