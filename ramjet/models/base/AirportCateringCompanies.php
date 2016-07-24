<?php

namespace app\models\base;

use Yii;

/**
 * This is the base-model class for table "airport_catering_companies".
 *
 * @property integer $airport_id
 * @property integer $catering_companies_id
 *
 * @property \app\models\Airports $airport
 * @property \app\models\CateringCompanies $cateringCompanies
 */
class AirportCateringCompanies extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'airport_catering_companies';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['airport_id', 'catering_companies_id'], 'required'],
            [['airport_id', 'catering_companies_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'airport_id' => 'Airport ID',
            'catering_companies_id' => 'Catering Companies ID',
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
    public function getCateringCompanies()
    {
        return $this->hasOne(\app\models\CateringCompanies::className(), ['id' => 'catering_companies_id']);
    }
}
