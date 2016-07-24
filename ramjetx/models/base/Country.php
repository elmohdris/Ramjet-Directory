<?php

namespace app\models\base;

use Yii;

/**
 * This is the base-model class for table "country".
 *
 * @property integer $id
 * @property string $name
 *
 * @property \app\models\CountryCompanies $countryCompanies
 */
class Country extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'country';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 60]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCountryCompanies()
    {
        return $this->hasOne(\app\models\CountryCompanies::className(), ['id' => 'id']);
    }
}
