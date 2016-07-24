<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\AirportHotels;

/**
* AirportHotelsSearch represents the model behind the search form about `app\models\AirportHotels`.
*/
class AirportHotelsSearch extends AirportHotels
{
/**
* @inheritdoc
*/
public function rules()
{
return [
[['airport_id', 'hotels_id'], 'integer'],
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
$query = AirportHotels::find();

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
            'airport_id' => $this->airport_id,
            'hotels_id' => $this->hotels_id,
        ]);

return $dataProvider;
}
}