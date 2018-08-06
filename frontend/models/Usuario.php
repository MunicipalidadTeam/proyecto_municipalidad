<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "usuario".
 *
 * @property int $id_Usuario
 * @property string $nombreCompleto
 * @property string $Login
 * @property string $Password
 * @property bool $Activo
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_Usuario', 'nombreCompleto', 'Login', 'Password'], 'required'],
            [['id_Usuario'], 'integer'],
            [['Activo'], 'boolean'],
            [['nombreCompleto'], 'string', 'max' => 200],
            [['Login', 'Password'], 'string', 'max' => 45],
            [['id_Usuario'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_Usuario' => 'Id  Usuario',
            'nombreCompleto' => 'Nombre Completo',
            'Login' => 'Login',
            'Password' => 'Password',
            'Activo' => 'Activo',
        ];
    }

    /**
     * {@inheritdoc}
     * @return UsuarioQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new UsuarioQuery(get_called_class());
    }
}
