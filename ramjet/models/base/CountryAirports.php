<?php

namespace app\models\base;

use Yii;

/**
 * This is the base-model class for table "country_airports".
 *
 * @property integer $airport_id
 * @property integer $country_id
 *
 * @property \app\models\Airports $airport
 * @property \app\models\Country $country
 */
class CountryAirports extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'country_airports';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['airport_id', 'country_id'], 'required'],
            [['airport_id', 'country_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'airport_id' => 'Airport ID',
            'country_id' => 'Country ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAirport()
    {
        return $this->hasOne(\app\models\Airports::className(), ['id' => 'airport_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCountry()
    {
        return $this->hasOne(\app\models\Country::className(), ['id' => 'country_id']);
    }
}
