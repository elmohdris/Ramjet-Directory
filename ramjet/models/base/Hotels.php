<?php

namespace app\models\base;

use Yii;

/**
 * This is the base-model class for table "hotels".
 *
 * @property integer $id
 * @property string $Name
 * @property string $Tel
 * @property string $Fax
 * @property string $Distance
 * @property string $Star
 * @property string $Email
 *
 * @property \app\models\AirportHotels[] $airportHotels
 * @property \app\models\Airports[] $airports
 */
class Hotels extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hotels';
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
            [['Tel', 'Fax', 'Star', 'Email'], 'string', 'max' => 30],
            [['Distance'], 'string', 'max' => 50]
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
            'Distance' => 'Distance',
            'Star' => 'Star',
            'Email' => 'Email',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAirportHotels()
    {
        return $this->hasMany(\app\models\AirportHotels::className(), ['hotels_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAirports()
    {
        return $this->hasMany(\app\models\Airports::className(), ['id' => 'airport_id'])->viaTable('airport_hotels', ['hotels_id' => 'id']);
    }
}
