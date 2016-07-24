<?php

namespace app\models\base;

use Yii;

/**
 * This is the base-model class for table "airports".
 *
 * @property integer $id
 * @property string $Name
 * @property string $Tel
 * @property string $Fax
 * @property string $AFTN
 * @property string $Type_b
 * @property string $Email
 *
 * @property \app\models\AirportCateringCompanies[] $airportCateringCompanies
 * @property \app\models\CateringCompanies[] $cateringCompanies
 * @property \app\models\AirportFbo[] $airportFbos
 * @property \app\models\Fbo[] $fbos
 * @property \app\models\AirportFuelCompanies[] $airportFuelCompanies
 * @property \app\models\FuelCompanies[] $fuelCompanies
 * @property \app\models\AirportGroundHandlers[] $airportGroundHandlers
 * @property \app\models\GroundHandlers[] $groundHandlers
 * @property \app\models\AirportHotels[] $airportHotels
 * @property \app\models\Hotels[] $hotels
 * @property \app\models\AirportMaintainceCompanies[] $airportMaintainceCompanies
 * @property \app\models\MaintainanceCompanies[] $maintainceCompanies
 * @property \app\models\AirportSlot[] $airportSlots
 * @property \app\models\Slots[] $slots
 * @property \app\models\CountryAirports[] $countryAirports
 * @property \app\models\Country[] $countries
 */
class Airports extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'airports';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['Name'], 'string', 'max' => 60],
            [['Tel', 'Fax', 'AFTN', 'Type_b', 'Email'], 'string', 'max' => 30]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Name' => 'Name',
            'Tel' => 'Tel',
            'Fax' => 'Fax',
            'AFTN' => 'Aftn',
            'Type_b' => 'Type B',
            'Email' => 'Email',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAirportCateringCompanies()
    {
        return $this->hasMany(\app\models\AirportCateringCompanies::className(), ['airport_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCateringCompanies()
    {
        return $this->hasMany(\app\models\CateringCompanies::className(), ['id' => 'catering_companies_id'])->viaTable('airport_catering_companies', ['airport_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAirportFbos()
    {
        return $this->hasMany(\app\models\AirportFbo::className(), ['airport_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFbos()
    {
        return $this->hasMany(\app\models\Fbo::className(), ['id' => 'fbo_id'])->viaTable('airport_fbo', ['airport_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAirportFuelCompanies()
    {
        return $this->hasMany(\app\models\AirportFuelCompanies::className(), ['airport_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFuelCompanies()
    {
        return $this->hasMany(\app\models\FuelCompanies::className(), ['id' => 'fuel_companies_id'])->viaTable('airport_fuel_companies', ['airport_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAirportGroundHandlers()
    {
        return $this->hasMany(\app\models\AirportGroundHandlers::className(), ['airport_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGroundHandlers()
    {
        return $this->hasMany(\app\models\GroundHandlers::className(), ['id' => 'ground_handlers_id'])->viaTable('airport_ground_handlers', ['airport_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAirportHotels()
    {
        return $this->hasMany(\app\models\AirportHotels::className(), ['airport_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHotels()
    {
        return $this->hasMany(\app\models\Hotels::className(), ['id' => 'hotels_id'])->viaTable('airport_hotels', ['airport_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAirportMaintainceCompanies()
    {
        return $this->hasMany(\app\models\AirportMaintainceCompanies::className(), ['airport_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMaintainceCompanies()
    {
        return $this->hasMany(\app\models\MaintainanceCompanies::className(), ['id' => 'maintaince_companies_id'])->viaTable('airport_maintaince_companies', ['airport_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAirportSlots()
    {
        return $this->hasMany(\app\models\AirportSlot::className(), ['airport_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSlots()
    {
        return $this->hasMany(\app\models\Slots::className(), ['id' => 'slot_id'])->viaTable('airport_slot', ['airport_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCountryAirports()
    {
        return $this->hasMany(\app\models\CountryAirports::className(), ['airport_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCountries()
    {
        return $this->hasMany(\app\models\Country::className(), ['id' => 'country_id'])->viaTable('country_airports', ['airport_id' => 'id']);
    }
}
