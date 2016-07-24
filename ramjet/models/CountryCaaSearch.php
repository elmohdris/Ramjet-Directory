<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\CountryCaa;

/**
* CountryCaaSearch represents the model behind the search form about `app\models\CountryCaa`.
*/
class CountryCaaSearch extends CountryCaa
{
/**
* @inheritdoc
*/
public function rules()
{
return [
[['country_id', 'caa_id'], 'integer'],
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
$query = CountryCaa::find();

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
            'country_id' => $this->country_id,
            'caa_id' => $this->caa_id,
        ]);

return $dataProvider;
}
}