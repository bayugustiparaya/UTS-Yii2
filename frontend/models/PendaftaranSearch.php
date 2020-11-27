<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Pendaftaran;

/**
 * PendaftaranSearch represents the model behind the search form of `app\models\Pendaftaran`.
 */
class PendaftaranSearch extends Pendaftaran
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_daftar', 'nomor_rm', 'tgl_daftar', 'tgl_janji', 'jam_janji', 'keluhan', 'kd_tindakan', 'kd_petugas'], 'safe'],
            [['nomor_antri'], 'integer'],
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
        $query = Pendaftaran::find();

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
            'tgl_daftar' => $this->tgl_daftar,
            'tgl_janji' => $this->tgl_janji,
            'jam_janji' => $this->jam_janji,
            'nomor_antri' => $this->nomor_antri,
        ]);

        $query->andFilterWhere(['like', 'no_daftar', $this->no_daftar])
            ->andFilterWhere(['like', 'nomor_rm', $this->nomor_rm])
            ->andFilterWhere(['like', 'keluhan', $this->keluhan])
            ->andFilterWhere(['like', 'kd_tindakan', $this->kd_tindakan])
            ->andFilterWhere(['like', 'kd_petugas', $this->kd_petugas]);

        return $dataProvider;
    }
}
