<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Usuario;

/**
 * UsuarioSearch represents the model behind the search form of `frontend\models\Usuario`.
 */
class UsuarioSearch extends Usuario
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_Usuario'], 'integer'],
            [['nombreCompleto', 'Login', 'Password'], 'safe'],
            [['Activo'], 'boolean'],
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
        $query = Usuario::find();

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
            'id_Usuario' => $this->id_Usuario,
            'Activo' => $this->Activo,
        ]);

        $query->andFilterWhere(['like', 'nombreCompleto', $this->nombreCompleto])
            ->andFilterWhere(['like', 'Login', $this->Login])
            ->andFilterWhere(['like', 'Password', $this->Password]);

        return $dataProvider;
    }
}
