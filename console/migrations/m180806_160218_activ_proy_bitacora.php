<?php
use yii\db\municipalidadniquen;
use yii\db\Migration;

/**
 * Class m180806_160218_activ_proy_bitacora
 */
class m180806_160218_activ_proy_bitacora extends Migration
{

  public function safeUp() // FUNCION PARA CREAR LAS TABLAS
     {
         $tableOptions = null;
         if ($this->db->driverName === 'mysql:host=localhost') {
             // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
             $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
         }

     $this->createTable('{{%Proyecto}}',[
         'idProyecto'=>$this->primaryKey(),
         'NombreProyecto'=>$this->string(200)->unique(),
         'Activo'=>$this->boolean()
          ], $tableOptions);

     $this->createTable('{{%Actividad}}',[
             'idActividad'=>$this->primaryKey(),
             'NombreActividad'=>$this->string(200)->unique(),
             'Activo'=>$this->boolean(),
             'idProyecto'=>$this->integer()
          ],$tableOptions);

     $this->createTable('{{%Bitacoratiempo}}',[
             'idBitacoraTiempo'=>$this->primaryKey(),
             'Fecha'=>$this->date(),
             'HoraInicio'=>$this->time(),
             'HoraFinal'=>$this->time(),
             'Interrupcion'=>$this->time(),
             'Total'=>$this->float(),
             'ActividadNoPlaneada'=>$this->string(250),
             'idActividadPlaneada'=>$this->integer(),
             'idProyecto'=>$this->integer(),
             'Artefacto'=>$this->string(250),
             'idUsuario'=>$this->integer()
                     ],$tableOptions);

     $this->addForeignKey('FK_act_proy','Actividad','idProyecto','Proyecto','idProyecto');
     $this->addForeignKey('FK_bitt_proy','Bitacoratiempo','idProyecto','Proyecto','idProyecto');
     }

     public function safeDown() // FUNCION PARA ELIMINAR LAS TABLAS
         {
             $this->dropForeignKey('FK_act_proy','Actividad');
             $this->dropForeignKey('FK_bitt_proy','Bitacoratiempo');
             $this->dropTable('{{%Proyecto}}');
             $this->dropTable('{{%Actividad}}');
             $this->dropTable('{{%Bitacoratiempo}}');
         }

/*
   //Use up()/down() to run migration code without a transaction.
  public function up()
  {

  }

  public function down()
  {
      echo "m180806_160218_activ_proy_bitacora cannot be reverted.\n";

      return false;
  }

    public function safeDown()
    {
        echo "m180806_160218_activ_proy_bitacora cannot be reverted.\n";

        return false;
    }
*/

}
