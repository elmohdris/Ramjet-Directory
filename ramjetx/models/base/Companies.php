<?php

namespace app\models\base;

use Yii;

/**
 * This is the base-model class for table "companies".
 *
 * @property integer $id
 * @property string $Category
 *
 * @property \app\models\CompaniesContacts $companiesContacts
 * @property \app\models\CountryCompanies $countryCompanies
 */
class Companies extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'companies';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Category'], 'required'],
            [['Category'], 'string', 'max' => 60]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Category' => 'Category',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompaniesContacts()
    {
        return $this->hasOne(\app\models\CompaniesContacts::className(), ['id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCountryCompanies()
    {
        return $this->hasOne(\app\models\CountryCompanies::className(), ['id' => 'id']);
    }
}
