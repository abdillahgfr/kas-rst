<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "akun".
 *
 * @property int $id_akun
 * @property string $kode
 * @property string $nama
 */
class Akun extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'akun';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode', 'nama'], 'required'],
            [['kode'], 'string', 'max' => 10],
            [['nama'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_akun' => 'Id Akun',
            'kode' => 'Kode',
            'nama' => 'Nama',
        ];
    }
}
