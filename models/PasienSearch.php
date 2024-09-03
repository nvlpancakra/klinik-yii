<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pasien;

/**
 * PasienSearch represents the model behind the search form of `app\models\Pasien`.
 */
class PasienSearch extends Pasien
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nama_Pasein', 'Tgl_Lahir', 'Jenis_Kelamin', 'Alamat', 'Kelurahan', 'Kecamatan', 'Provinsi'], 'safe'],
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
        $query = Pasien::find();

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
            'Tgl_Lahir' => $this->Tgl_Lahir,
        ]);

        $query->andFilterWhere(['like', 'Nama_Pasein', $this->Nama_Pasein])
            ->andFilterWhere(['like', 'Jenis_Kelamin', $this->Jenis_Kelamin])
            ->andFilterWhere(['like', 'Alamat', $this->Alamat])
            ->andFilterWhere(['like', 'Kelurahan', $this->Kelurahan])
            ->andFilterWhere(['like', 'Kecamatan', $this->Kecamatan])
            ->andFilterWhere(['like', 'Provinsi', $this->Provinsi]);

        return $dataProvider;
    }
}
