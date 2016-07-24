<?php

namespace app\models\base;

use Yii;

/**
 * This is the base-model class for table "country_caa".
 *
 * @property integer $country_id
 * @property integer $caa_id
 *
 * @property \app\models\Caa $caa
 * @property \app\models\Country $country
 */
class CountryCaa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'country_caa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['country_id', 'caa_id'], 'required'],
            [['country_id', 'caa_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'country_id' => 'Country ID',
            'caa_id' => 'Caa ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCaa()
    {
        return $this->hasOne(\app\models\Caa::className(), ['id' => 'caa_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCountry()
    {
        return $this->hasOne(\app\models\Country::className(), ['id' => 'country_id']);
    }
}
