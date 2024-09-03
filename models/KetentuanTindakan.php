<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ketentuan_tindakan".
 *
 * @property string $Dosis_Obat
 * @property string $Obat
 * @property string $Deskripsi
 * @property string $Nama_Tindakan
 * @property float $Biaya
 */
class KetentuanTindakan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ketentuan_tindakan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Dosis_Obat', 'Obat', 'Deskripsi', 'Nama_Tindakan', 'Biaya'], 'required'],
            [['Deskripsi'], 'string'],
            [['Biaya'], 'number'],
            [['Dosis_Obat', 'Obat', 'Nama_Tindakan'], 'string', 'max' => 120],
            [['Dosis_Obat'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Dosis_Obat' => 'Dosis Obat',
            'Obat' => 'Obat',
            'Deskripsi' => 'Deskripsi',
            'Nama_Tindakan' => 'Nama Tindakan',
            'Biaya' => 'Biaya',
        ];
    }
}
