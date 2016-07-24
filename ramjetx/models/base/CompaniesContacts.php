<?php

namespace app\models\base;

use Yii;

/**
 * This is the base-model class for table "companies_contacts".
 *
 * @property integer $id
 *
 * @property \app\models\Companies $id0
 * @property \app\models\Contacts $id1
 * @property \app\models\HotelsContacts $id2
 */
class CompaniesContacts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'companies_contacts';
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
        return $this->hasOne(\app\models\Contacts::className(), ['id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getId2()
    {
        return $this->hasOne(\app\models\HotelsContacts::className(), ['id' => 'id']);
    }
}
