<?php

namespace app\models\base;

use Yii;

/**
 * This is the base-model class for table "airport_fuel_companies".
 *
 * @property integer $airport_id
 * @property integer $fuel_companies_id
 *
 * @property \app\models\Airports $airport
 * @property \app\models\FuelCompanies $fuelCompanies
 */
class AirportFuelCompanies extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'airport_fuel_companies';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['airport_id', 'fuel_companies_id'], 'required'],
            [['airport_id', 'fuel_companies_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'airport_id' => 'Airport ID',
            'fuel_companies_id' => 'Fuel Companies ID',
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
    public function getFuelCompanies()
    {
        return $this->hasOne(\app\models\FuelCompanies::className(), ['id' => 'fuel_companies_id']);
    }
}
