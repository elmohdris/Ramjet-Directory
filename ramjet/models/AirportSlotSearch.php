<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\AirportSlot;

/**
* AirportSlotSearch represents the model behind the search form about `app\models\AirportSlot`.
*/
class AirportSlotSearch extends AirportSlot
{
/**
* @inheritdoc
*/
public function rules()
{
return [
[['airport_id', 'slot_id'], 'integer'],
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
$query = AirportSlot::find();

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
            'slot_id' => $this->slot_id,
        ]);

return $dataProvider;
}
}