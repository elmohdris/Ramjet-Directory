<?php

namespace app\models\base;

use Yii;

/**
 * This is the base-model class for table "airport_slot".
 *
 * @property integer $airport_id
 * @property integer $slot_id
 *
 * @property \app\models\Airports $airport
 * @property \app\models\Slots $slot
 */
class AirportSlot extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'airport_slot';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['airport_id', 'slot_id'], 'required'],
            [['airport_id', 'slot_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'airport_id' => 'Airport ID',
            'slot_id' => 'Slot ID',
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
    public function getSlot()
    {
        return $this->hasOne(\app\models\Slots::className(), ['id' => 'slot_id']);
    }
}
