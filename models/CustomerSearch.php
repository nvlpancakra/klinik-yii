<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Customer;

/**
 * UserSearch represents the model behind the search form of `app\models\User`.
 */
class CustomerSearch extends Customer
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_User', 'Nomor_Telepon'], 'integer'],
            [['Nama_Lengkap', 'Email'], 'safe'],
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
        $query = Customer::find();

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
            'id_User' => $this->id_User,
            'Nomor_Telepon' => $this->Nomor_Telepon,
        ]);

        $query->andFilterWhere(['like', 'Nama_Lengkap', $this->Nama_Lengkap])
            ->andFilterWhere(['like', 'Email', $this->Email]);

        return $dataProvider;
    }
}
