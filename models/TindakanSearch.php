<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tindakan;

/**
 * TindakanSearch represents the model behind the search form of `app\models\Tindakan`.
 */
class TindakanSearch extends Tindakan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nama_Tindakan', 'Kode_Tindakan', 'Kategori_Tindakan', 'Tanggal_Waktu', 'Nama_Pasien'], 'safe'],
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
        $query = Tindakan::find();

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
        $query->andFilterWhere(['like', 'Nama_Tindakan', $this->Nama_Tindakan])
            ->andFilterWhere(['like', 'Kode_Tindakan', $this->Kode_Tindakan])
            ->andFilterWhere(['like', 'Kategori_Tindakan', $this->Kategori_Tindakan])
            ->andFilterWhere(['like', 'Tanggal_Waktu', $this->Tanggal_Waktu])
            ->andFilterWhere(['like', 'Nama_Pasien', $this->Nama_Pasien]);

        return $dataProvider;
    }
}
