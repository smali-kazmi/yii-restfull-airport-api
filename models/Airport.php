<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "airport".
 *
 * @property integer $id
 * @property string $airport_code
 * @property string $airport_name
 * @property string $country
 * @property string $city
 */

class Airport extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'airport';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['airport_code'], 'string', 'max' => 10],
            [['airport_name', 'country', 'city'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'airport_code' => 'Airport Code',
            'airport_name' => 'Airport Name',
            'country' => 'Country',
            'city' => 'City',
        ];
    }
}
