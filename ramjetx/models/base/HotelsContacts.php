<?php

namespace app\models\base;

use Yii;

/**
 * This is the base-model class for table "hotelsContacts".
 *
 * @property integer $id
 * @property string $Name
 * @property string $Distance
 * @property string $Stars
 * @property string $Tel
 * @property string $Fax
 * @property string $Email
 *
 * @property \app\models\CompaniesContacts $companiesContacts
 */
class HotelsContacts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hotelsContacts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Name', 'Distance', 'Stars', 'Tel', 'Fax', 'Email'], 'string', 'max' => 60]
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
            'Distance' => 'Distance',
            'Stars' => 'Stars',
            'Tel' => 'Tel',
            'Fax' => 'Fax',
            'Email' => 'Email',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompaniesContacts()
    {
        return $this->hasOne(\app\models\CompaniesContacts::className(), ['id' => 'id']);
    }
}
