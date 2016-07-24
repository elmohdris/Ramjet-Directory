<?php

namespace app\models\base;

use Yii;

/**
 * This is the base-model class for table "country".
 *
 * @property integer $id
 * @property string $name
 *
 * @property \app\models\CountryAirports[] $countryAirports
 * @property \app\models\Airports[] $airports
 * @property \app\models\CountryCaa[] $countryCaas
 * @property \app\models\Caa[] $caas
 */
class Country extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'country';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'name'], 'required'],
            [['id'], 'integer'],
            [['name'], 'string', 'max' => 30]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCountryAirports()
    {
        return $this->hasMany(\app\models\CountryAirports::className(), ['country_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAirports()
    {
        return $this->hasMany(\app\models\Airports::className(), ['id' => 'airport_id'])->viaTable('country_airports', ['country_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCountryCaas()
    {
        return $this->hasMany(\app\models\CountryCaa::className(), ['country_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCaas()
    {
        return $this->hasMany(\app\models\Caa::className(), ['id' => 'caa_id'])->viaTable('country_caa', ['country_id' => 'id']);
    }
}
