<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "proyecto".
 *
 * @property int $idProyecto
 * @property string $NombreProyecto
 * @property int $Activo
 *
 * @property Actividad[] $actividads
 * @property Bitacoratiempo[] $bitacoratiempos
 */
class Proyecto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'proyecto';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Activo'], 'integer'],
            [['NombreProyecto'], 'string', 'max' => 200],
            [['NombreProyecto'], 'unique'],
            [['NombreProyecto'],'required']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idProyecto' => Yii::t('app', 'Id Proyecto'),
            'NombreProyecto' => Yii::t('app', 'Nombre Proyecto'),
            'Activo' => Yii::t('app', 'Activo'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getActividads()
    {
        return $this->hasMany(Actividad::className(), ['idProyecto' => 'idProyecto']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBitacoratiempos()
    {
        return $this->hasMany(Bitacoratiempo::className(), ['idProyecto' => 'idProyecto']);
    }
    //evento del modelo beforesave, pone el campo activo en 1 cuando se está insertando
    public function beforeSave($insert){
      parent::beforeSave($insert);
      if ($insert) {
        $this->Activo =1;
      }
      return true;
    }
}
