<?php

namespace app\models\base;

use Yii;

/**
 * This is the base-model class for table "fbo".
 *
 * @property integer $id
 * @property string $Name
 * @property string $Tel
 * @property string $Fax
 * @property string $AFTN
 * @property string $Type_b
 * @property string $Email
 *
 * @property \app\models\AirportFbo[] $airportFbos
 * @property \app\models\Airports[] $airports
 */
class Fbo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'fbo';
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
    public function getAirportFbos()
    {
        return $this->hasMany(\app\models\AirportFbo::className(), ['fbo_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAirports()
    {
        return $this->hasMany(\app\models\Airports::className(), ['id' => 'airport_id'])->viaTable('airport_fbo', ['fbo_id' => 'id']);
    }
}
