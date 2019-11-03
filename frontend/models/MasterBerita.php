<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "master_berita".
 *
 * @property int $id
 * @property string $link_berita
 * @property string $berita_html
 * @property int $flag_extract
 */
class MasterBerita extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'master_berita';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['berita_html'], 'string'],
            [['flag_extract'], 'integer'],
            [['link_berita'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'link_berita' => 'Link Berita',
            'berita_html' => 'Berita Html',
            'flag_extract' => 'Flag Extract',
        ];
    }
}
