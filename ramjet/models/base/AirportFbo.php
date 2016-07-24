<?php

namespace app\models\base;

use Yii;

/**
 * This is the base-model class for table "airport_fbo".
 *
 * @property integer $airport_id
 * @property integer $fbo_id
 *
 * @property \app\models\Airports $airport
 * @property \app\models\Fbo $fbo
 */
class AirportFbo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'airport_fbo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['airport_id', 'fbo_id'], 'required'],
            [['airport_id', 'fbo_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'airport_id' => 'Airport ID',
            'fbo_id' => 'Fbo ID',
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
    public function getFbo()
    {
        return $this->hasOne(\app\models\Fbo::className(), ['id' => 'fbo_id']);
    }
}
