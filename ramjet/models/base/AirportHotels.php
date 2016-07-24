<?php

namespace app\models\base;

use Yii;

/**
 * This is the base-model class for table "airport_hotels".
 *
 * @property integer $airport_id
 * @property integer $hotels_id
 *
 * @property \app\models\Airports $airport
 * @property \app\models\Hotels $hotels
 */
class AirportHotels extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'airport_hotels';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['airport_id', 'hotels_id'], 'required'],
            [['airport_id', 'hotels_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'airport_id' => 'Airport ID',
            'hotels_id' => 'Hotels ID',
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
    public function getHotels()
    {
        return $this->hasOne(\app\models\Hotels::className(), ['id' => 'hotels_id']);
    }
}
