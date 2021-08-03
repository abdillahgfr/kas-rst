<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pjo".
 *
 * @property int $id_pjo
 * @property string $nomor
 * @property string $proyek
 * @property string $daerah
 * @property int $tahun
 * @property string $opd
 * @property string $pptk
 * @property string $telp
 * @property float $pagu
 */
class Pjo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pjo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nomor', 'proyek', 'daerah', 'tahun', 'opd', 'pptk', 'telp', 'pagu'], 'required'],
            [['tahun'], 'integer'],
            [['pagu'], 'number'],
            [['nomor', 'proyek', 'daerah', 'opd', 'pptk'], 'string', 'max' => 100],
            [['telp'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pjo' => 'Id Pjo',
            'nomor' => 'Nomor',
            'proyek' => 'Proyek',
            'daerah' => 'Daerah',
            'tahun' => 'Tahun',
            'opd' => 'Opd',
            'pptk' => 'Pptk',
            'telp' => 'Telp',
            'pagu' => 'Pagu',
        ];
    }
}
