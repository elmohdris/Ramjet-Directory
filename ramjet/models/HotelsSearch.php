<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Hotels;

/**
* HotelsSearch represents the model behind the search form about `app\models\Hotels`.
*/
class HotelsSearch extends Hotels
{
/**
* @inheritdoc
*/
public function rules()
{
return [
[['id'], 'integer'],
            [['Name', 'Tel', 'Fax', 'Distance', 'Star', 'Email'], 'safe'],
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
$query = Hotels::find();

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
            ->andFilterWhere(['like', 'Tel', $this->Tel])
            ->andFilterWhere(['like', 'Fax', $this->Fax])
            ->andFilterWhere(['like', 'Distance', $this->Distance])
            ->andFilterWhere(['like', 'Star', $this->Star])
            ->andFilterWhere(['like', 'Email', $this->Email]);

return $dataProvider;
}
}