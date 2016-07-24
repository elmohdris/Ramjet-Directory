<?php

namespace app\models\base;

use Yii;

/**
 * This is the base-model class for table "country_companies".
 *
 * @property integer $id
 *
 * @property \app\models\Companies $id0
 * @property \app\models\Country $id1
 */
class CountryCompanies extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'country_companies';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getId0()
    {
        return $this->hasOne(\app\models\Companies::className(), ['id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getId1()
    {
        return $this->hasOne(\app\models\Country::className(), ['id' => 'id']);
    }
}
