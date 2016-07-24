<?php

namespace app\models\base;

use Yii;

/**
 * This is the base-model class for table "airport_ground_handlers".
 *
 * @property integer $airport_id
 * @property integer $ground_handlers_id
 *
 * @property \app\models\Airports $airport
 * @property \app\models\GroundHandlers $groundHandlers
 */
class AirportGroundHandlers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'airport_ground_handlers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['airport_id', 'ground_handlers_id'], 'required'],
            [['airport_id', 'ground_handlers_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'airport_id' => 'Airport ID',
            'ground_handlers_id' => 'Ground Handlers ID',
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
    public function getGroundHandlers()
    {
        return $this->hasOne(\app\models\GroundHandlers::className(), ['id' => 'ground_handlers_id']);
    }
}
