<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "crime_detail".
 *
 * @property int $id
 * @property string $crime_type
 * @property string $species
 * @property string $tanggal
 * @property string $link
 * @property string $location
 */
class CrimeDetail extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'crime_detail';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggal'], 'safe'],
            [['crime_type', 'species', 'link', 'location'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'crime_type' => 'Crime Type',
            'species' => 'Species',
            'tanggal' => 'Date',
            'link' => 'Link',
            'location' => 'Location',
        ];
    }
}
