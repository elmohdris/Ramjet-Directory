<?php

namespace app\models\base;

use Yii;

/**
 * This is the base-model class for table "caa".
 *
 * @property integer $id
 * @property string $Name
 * @property string $Tel
 * @property string $Fax
 * @property string $AFTN
 * @property string $Type_b
 * @property string $Email
 *
 * @property \app\models\CountryCaa[] $countryCaas
 * @property \app\models\Country[] $countries
 */
class Caa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'caa';
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
    public function getCountryCaas()
    {
        return $this->hasMany(\app\models\CountryCaa::className(), ['caa_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCountries()
    {
        return $this->hasMany(\app\models\Country::className(), ['id' => 'country_id'])->viaTable('country_caa', ['caa_id' => 'id']);
    }
}
