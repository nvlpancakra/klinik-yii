<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pegawai;

/**
 * PegawaiSearch represents the model behind the search form of `app\models\Pegawai`.
 */
class PegawaiSearch extends Pegawai
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_Pegawai', 'id_User'], 'integer'],
            [['Jenis_Pegawai', 'Status_Pegawai', 'Jabatan', 'Tanggal_Bergabung', 'Unit_Kerja', 'Nama_Pegawai'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Pegawai::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_Pegawai' => $this->id_Pegawai,
            'id_User' => $this->id_User,
            'Tanggal_Bergabung' => $this->Tanggal_Bergabung,
        ]);

        $query->andFilterWhere(['like', 'Jenis_Pegawai', $this->Jenis_Pegawai])
            ->andFilterWhere(['like', 'Status_Pegawai', $this->Status_Pegawai])
            ->andFilterWhere(['like', 'Jabatan', $this->Jabatan])
            ->andFilterWhere(['like', 'Unit_Kerja', $this->Unit_Kerja])
            ->andFilterWhere(['like', 'Nama_Pegawai', $this->Nama_Pegawai]);

        return $dataProvider;
    }
}
