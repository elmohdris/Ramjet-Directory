<?php

namespace app\models\base;

use Yii;

/**
 * This is the base-model class for table "airport_maintaince_companies".
 *
 * @property integer $airport_id
 * @property integer $maintaince_companies_id
 *
 * @property \app\models\Airports $airport
 * @property \app\models\MaintainanceCompanies $maintainceCompanies
 */
class AirportMaintainceCompanies extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'airport_maintaince_companies';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['airport_id', 'maintaince_companies_id'], 'required'],
            [['airport_id', 'maintaince_companies_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'airport_id' => 'Airport ID',
            'maintaince_companies_id' => 'Maintaince Companies ID',
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
    public function getMaintainceCompanies()
    {
        return $this->hasOne(\app\models\MaintainanceCompanies::className(), ['id' => 'maintaince_companies_id']);
    }
}
